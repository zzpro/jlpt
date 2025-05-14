import json
import os

def load_questions(filename):
    current_dir = os.path.dirname(os.path.abspath(__file__))
    json_path = os.path.join(current_dir, f"{filename}.json")

    if not os.path.exists(json_path):
        print(f"文件不存在: {json_path}")
        return None

    with open(json_path, "r", encoding="utf-8") as f:
        return json.load(f)

def print_question(data, index):
    if index < 1 or index >= len(data):
        print(f"题号 {index} 不存在（范围: 1 ~ {len(data)-1}）")
        return

    question = data[index]
    print("", question.get("hint", "无提示"))
    print("\n", question.get("content", "无内容"))
    print("")
    for option in question.get("options", []):
        print(option["text"])
    print("-" * 40)

def print_answer(data, index):
    if index < 1 or index >= len(data):
        print(f"题号 {index} 不存在（范围: 1 ~ {len(data)-1}）")
        return

    question = data[index]
    correct = [opt["text"] for opt in question.get("options", []) if opt.get("is_correct")]
    print(f"✅ 正确答案：{correct[0] if correct else '未标注'}")
    print("📘 解析：", question.get("explanation", "无解析"))
    print("-" * 40)

def main():
    filename = input("please input file name（n1_2023_07）：").strip()
    data = load_questions(filename)
    if not data:
        return

    print(f"loaded {filename}.json，amounts {len(data)-1} questions\n")

    while True:
        user_input = input("please input id or id answer：").strip().lower()
        if user_input == "exit":
            print("退出程序。")
            break

        parts = user_input.split()
        if len(parts) == 0:
            continue

        if not parts[0].isdigit():
            print("请输入有效的题号。")
            continue

        index = int(parts[0])
        if len(parts) == 2 and parts[1] == "answer":
            print_answer(data, index)
        else:
            print_question(data, index)

if __name__ == "__main__":
    main()