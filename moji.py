import pdfplumber
import os
import sys
from wcwidth import wcswidth

def truncate_str(s, width):
    # 按显示宽度截断字符串，超出部分用…
    result = ''
    count = 0
    for ch in s:
        w = wcswidth(ch)
        if count + w > width:
            result += '…'
            break
        result += ch
        count += w
    # 补齐
    pad_len = width - wcswidth(result)
    return result + ' ' * pad_len

def print_ascii_table_paged(rows, headers, lines_per_page=10, start_index=0):
    # 列最大宽度
    max_widths = [3, 16, 16, 68]  # 序号, 发音, 单词, 释义
    split_rows = []
    for row in rows:
        split_row = [cell.split('\n') for cell in row]
        split_rows.append(split_row)
    # 计算每列最大宽度（不超过max_widths）
    col_widths = [wcswidth(h) for h in headers]
    for i in range(len(headers)):
        col_widths[i] = min(col_widths[i], max_widths[i])
    for row in split_rows:
        for i, cell_lines in enumerate(row):
            for line in cell_lines:
                col_widths[i] = min(max(col_widths[i], wcswidth(line)), max_widths[i])
    row_heights = [max(len(cell) for cell in row) for row in split_rows]
    def sep_line(char_left, char_mid, char_right, char_line):
        return char_left + char_mid.join([char_line * (w + 2) for w in col_widths]) + char_right
    top_line = sep_line('+', '+', '+', '-')
    mid_line = sep_line('+', '+', '+', '-')
    print(top_line)
    header_row = '| ' + ' | '.join([truncate_str(headers[i], col_widths[i]) for i in range(len(headers))]) + ' |'
    print(header_row)
    print(mid_line)
    total = len(split_rows)
    idx = start_index
    while idx < total:
        row = split_rows[idx]
        height = row_heights[idx]
        for h in range(height):
            row_line = '| '
            for i, cell_lines in enumerate(row):
                line = cell_lines[h] if h < len(cell_lines) else ''
                row_line += truncate_str(line, col_widths[i]) + ' | '
            print(row_line)
        idx += 1
        if (idx - start_index) % lines_per_page == 0 and idx < total:
            input("\n按回车键继续...")
    print(top_line)

def read_pdf_in_pages(pdf_path, lines_per_page=10):
    try:
        if not os.path.exists(pdf_path):
            print(f"错误：文件 {pdf_path} 不存在")
            return
        processed_lines = []
        with pdfplumber.open(pdf_path) as pdf:
            for page in pdf.pages:
                text = page.extract_text()
                if not text:
                    continue
                lines = text.split('\n')
                for line in lines:
                    if line.strip():
                        parts = line.split()
                        if len(parts) >= 4:
                            number = parts[0]
                            pronunciation = parts[1]
                            word = parts[2]
                            meaning = ' '.join(parts[3:])
                            processed_lines.append([number, pronunciation, word, meaning])
        headers = ["序号", "发音", "单词", "释义"]
        total_lines = len(processed_lines)
        while True:
            try:
                start_index = int(input(f"请输入起始行号（1~{total_lines}，默认1）：") or "1") - 1
                if 0 <= start_index < total_lines:
                    break
                else:
                    print("输入超出范围，请重新输入。")
            except Exception:
                print("请输入有效的数字。")
        print("\n" + "="*80)
        print_ascii_table_paged(processed_lines, headers, lines_per_page, start_index)
        print("="*80)
    except Exception as e:
        print(f"发生错误：{str(e)}")

if __name__ == "__main__":
    pdf_path = "moji.pdf"
    read_pdf_in_pages(pdf_path)
