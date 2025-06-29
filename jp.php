<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JLPT N1</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="referrer" content="no-referrer" />
	<meta http-equiv="Cache-Control" content="no-siteapp">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="/favicon.ico" type="image/x-icon" rel="icon">
	<style>
	   body{
            font-family: 'Noto Sans JP','Hiragino Kaku Gothic ProN', 'Hiragino Sans', 'Yu Gothic', 'Meiryo', sans-serif;
       }
	  .content{width:100%;margin:0 auto}
	  .btn{width:80px;height:30px;line-height:30px;margin-bottom:10px}
	  table {
		width: 100%;
		border-collapse: collapse;
		font-size:14px;
	  }
	  .c1{
		width:20%;
		font-family: 'Noto Sans JP', 'Hiragino Sans', 'Yu Gothic', 'Meiryo', sans-serif;
		font-size:15px;
	  }
	  .c2{
		width:20%;
		font-family: 'Noto Sans JP', 'Hiragino Sans', 'Yu Gothic', 'Meiryo', sans-serif;
		font-size:15px;
	  }
	  .c3{
		width:60%;
		text-align: left;
		padding-left: 12px;
	  }
	  table, th, td {
		border: 1px solid black;
	  }
	  th, td {
		padding: 8px 0px;
		text-align: center;
	  }
	  thead tr {
		background-color: #f2f2f2;
	  }
	  tbody tr:nth-child(odd) {
		background-color: #f9f9f9;
	  }
	  tbody tr:nth-child(even) {
		background-color: #f0f0f0;
	  }
	  .red{
		background-color: #fdc5c5;
	  }
	</style>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			// 获取所有的 <td> 元素
			var tdElements = document.getElementsByTagName("td");

			// 为每个 <td> 元素添加点击事件
			for (var i = 0; i < tdElements.length; i++) {
				tdElements[i].addEventListener("click", function () {
					// 获取当前元素的透明度
					var currentOpacity = window.getComputedStyle(this).opacity;

					// 根据当前透明度切换透明度值
					if (currentOpacity === "0") {
						this.style.opacity = "1";
					} else {
						this.style.opacity = "0";
					}
				});
			}
		});

		function hideLine1() {
			var elements = document.getElementsByClassName("c1");
			for (var i = 0; i < elements.length; i++) {
				elements[i].style.opacity = "0";
			}
		}
		function hideLine2() {
			var elements = document.getElementsByClassName("c2");
			for (var i = 0; i < elements.length; i++) {
				elements[i].style.opacity = "0";
			}
		}
		function hideLine3() {
			var elements = document.getElementsByClassName("c3");
			for (var i = 0; i < elements.length; i++) {
				elements[i].style.opacity = "0";
			}
		}
		function showLine() {
			var elements = document.getElementsByClassName("c1");
			for (var i = 0; i < elements.length; i++) {
				elements[i].style.opacity = "1";
			}
			var elements = document.getElementsByClassName("c2");
			for (var i = 0; i < elements.length; i++) {
				elements[i].style.opacity = "1";
			}
			var elements = document.getElementsByClassName("c3");
			for (var i = 0; i < elements.length; i++) {
				elements[i].style.opacity = "1";
			}
		}
	</script>
  </head>
  <body>
    <div class="content">
<!--	
	<button class="btn" onclick="hideLine1()">隐藏假名</button>
	<button class="btn" onclick="hideLine2()">隐藏汉字</button>
	<button class="btn" onclick="hideLine3()">隐藏中文</button>
	<button class="btn" onclick="showLine()">显示全部</button>
-->
	<table>
		<?php
		// 读取jp.py文件
		$content = file_get_contents('https://raw.githubusercontent.com/zzpro/jlpt/refs/heads/main/jp.py');
		
		// 提取JSON数据
		preg_match('/v_words\s*=\s*\[(.*?)\]/s', $content, $v_matches);
		preg_match('/adj_words\s*=\s*\[(.*?)\]/s', $content, $adj_matches);
		preg_match('/f_words\s*=\s*\[(.*?)\]/s', $content, $f_matches);
		preg_match('/kanji_words\s*=\s*\[(.*?)\]/s', $content, $kanji_matches);
		preg_match('/double_words\s*=\s*\[(.*?)\]/s', $content, $double_matches);

		// 处理动词
		if (!empty($v_matches[1])) {
			// 将Python字典转换为PHP数组
			$v_content = $v_matches[1];
			// 先处理字符串值
			$v_content = preg_replace('/"([^"]*)":\s*"([^"]*)"/', '"$1"=>"$2"', $v_content);
			// 处理字典结构
			$v_content = preg_replace('/{/', 'array(', $v_content);
			$v_content = preg_replace('/}/', ')', $v_content);
			// 移除多余的逗号
			$v_content = preg_replace('/,\s*\)/', ')', $v_content);
			
			// 创建PHP数组
			eval('$v_words = array(' . $v_content . ');');
			
			if ($v_words) {
				echo "<tr><td colspan='3'><h3>动词</h3></td></tr>";
				foreach ($v_words as $word) {
					echo "<tr>";
					echo "<td class='c1'>" . htmlspecialchars($word['hiragana']) . "</td>";
					echo "<td class='c2'>" . htmlspecialchars($word['kanji']) . "</td>";
					echo "<td class='c3'>" . htmlspecialchars($word['chn']) . "</td>";
					echo "</tr>";
				}
			}
		}
		
		// 处理形容词
		if (!empty($adj_matches[1])) {
			$adj_content = $adj_matches[1];
			$adj_content = preg_replace('/"([^"]*)":\s*"([^"]*)"/', '"$1"=>"$2"', $adj_content);
			$adj_content = preg_replace('/{/', 'array(', $adj_content);
			$adj_content = preg_replace('/}/', ')', $adj_content);
			$adj_content = preg_replace('/,\s*\)/', ')', $adj_content);
			
			eval('$adj_words = array(' . $adj_content . ');');
			
			if ($adj_words) {
				echo "<tr><td colspan='3'><h3>形容词</h3></td></tr>";
				foreach ($adj_words as $word) {
					echo "<tr>";
					echo "<td class='c1'>" . htmlspecialchars($word['hiragana']) . "</td>";
					echo "<td class='c2'>" . htmlspecialchars($word['kanji']) . "</td>";
					echo "<td class='c3'>" . htmlspecialchars($word['chn']) . "</td>";
					echo "</tr>";
				}
			}
		}
		
		// 处理副词
		if (!empty($f_matches[1])) {
			$f_content = $f_matches[1];
			$f_content = preg_replace('/"([^"]*)":\s*"([^"]*)"/', '"$1"=>"$2"', $f_content);
			$f_content = preg_replace('/{/', 'array(', $f_content);
			$f_content = preg_replace('/}/', ')', $f_content);
			$f_content = preg_replace('/,\s*\)/', ')', $f_content);
			
			eval('$f_words = array(' . $f_content . ');');
			
			if ($f_words) {
				echo "<tr><td colspan='3'><h3>副词</h3></td></tr>";
				foreach ($f_words as $word) {
					echo "<tr>";
					echo "<td class='c1'>" . htmlspecialchars($word['hiragana']) . "</td>";
					echo "<td class='c2'>" . htmlspecialchars($word['kanji']) . "</td>";
					echo "<td class='c3'>" . htmlspecialchars($word['chn']) . "</td>";
					echo "</tr>";
				}
			}
		}
		
		// 处理汉字词
		if (!empty($kanji_matches[1])) {
			$kanji_content = $kanji_matches[1];
			$kanji_content = preg_replace('/"([^"]*)":\s*"([^"]*)"/', '"$1"=>"$2"', $kanji_content);
			$kanji_content = preg_replace('/{/', 'array(', $kanji_content);
			$kanji_content = preg_replace('/}/', ')', $kanji_content);
			$kanji_content = preg_replace('/,\s*\)/', ')', $kanji_content);
			
			eval('$kanji_words = array(' . $kanji_content . ');');
			
			if ($kanji_words) {
				echo "<tr><td colspan='3'><h3>汉字词</h3></td></tr>";
				foreach ($kanji_words as $word) {
					echo "<tr>";
					echo "<td class='c1'>" . htmlspecialchars($word['hiragana']) . "</td>";
					echo "<td class='c2'>" . htmlspecialchars($word['kanji']) . "</td>";
					echo "<td class='c3'>" . htmlspecialchars($word['chn']) . "</td>";
					echo "</tr>";
				}
			}
		}

		// 处理拟声词
		if (!empty($double_matches[1])) {
			$double_content = $double_matches[1];
			$double_content = preg_replace('/"([^"]*)":\s*"([^"]*)"/', '"$1"=>"$2"', $double_content);
			$double_content = preg_replace('/{/', 'array(', $double_content);
			$double_content = preg_replace('/}/', ')', $double_content);
			$double_content = preg_replace('/,\s*\)/', ')', $double_content);
			
			eval('$double_words = array(' . $double_content . ');');
			
			if ($double_words) {
				echo "<tr><td colspan='3'><h3>拟声词</h3></td></tr>";
				foreach ($double_words as $word) {
					echo "<tr>";
					echo "<td class='c1'>" . htmlspecialchars($word['hiragana']) . "</td>";
					echo "<td class='c2'>" . htmlspecialchars($word['kanji']) . "</td>";
					echo "<td class='c3'>" . htmlspecialchars($word['chn']) . "</td>";
					echo "</tr>";
				}
			}
		}
		?>
	</table>
	</div>
  </body>
</html>