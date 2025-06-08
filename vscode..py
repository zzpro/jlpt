from flask import Flask, request, render_template_string, send_from_directory
import os

app = Flask(__name__)

# 获取当前脚本所在目录
current_dir = os.path.dirname(os.path.abspath(__file__))
php_file_path = os.path.join(current_dir, "fake-vscode.php")

# 读取 PHP 文件内容并替换 PHP 的动态语法为 Jinja2 模板语法
with open(php_file_path, "r", encoding="utf-8") as f:
    php_content = f.read()

# 替换 PHP 的输出语法为 Jinja2
php_content = php_content.replace("<?php echo $_GET['file']; ?>", "{{ file }}")
php_content = php_content.replace("<?=$file?>", "{{ file }}")  # 替换短语法标签

template = php_content

@app.route("/")
def index():
    file_param = request.args.get("file", "default.txt")
    return render_template_string(template, file=file_param)

# 支持输出 PDF 文件
@app.route("/<filename>")
def serve_file(filename):
    if filename.endswith(".pdf"):
        return send_from_directory(current_dir, filename)
    return f"文件 {filename} 不存在或不受支持", 404

if __name__ == "__main__":
    app.run(host="127.0.0.1", port=918)
