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
            font-family: 'Hiragino Kaku Gothic ProN', 'Hiragino Sans', 'Yu Gothic', 'Meiryo', sans-serif;
       }
	  .content{width:100%;margin:0 auto}
	  .btn{width:80px;height:30px;line-heignt:30px;margin-bottom:10px}
	  table {
		width: 100%;
		border-collapse: collapse;
		font-size:16px;
	  }
	  .c1{
		width:26%
	  }
	  .c2{
		width:26%
	  }
	  .c3{
		width:48%
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
	
	<button class="btn" onclick="hideLine1()">隐藏第1行</button>
	<button class="btn" onclick="hideLine2()">隐藏第2行</button>
	<button class="btn" onclick="hideLine3()">隐藏第3行</button>
	<button class="btn" onclick="showLine()">显示全部</button>
	<table>
		<tr>
			<td class="c1">おおむね</td>
			<td class="c2">概ね</td>
			<td class="c3">概要 大概 大约</td>
		</tr>
		<tr>
			<td class="c1">おかす</td>
			<td class="c2">侵す 犯す</td>
			<td class="c3">犯罪 冒犯 侵犯</td>
		</tr>
		<tr>
			<td class="c1">なめらか</td>
			<td class="c2">滑らか</td>
			<td class="c3">光滑 润滑 流利</td>
		</tr>
		<tr>
			<td class="c1">ばける</td>
			<td class="c2">化ける</td>
			<td class="c3">化成 化作 乔装 改变</td>
		</tr>
		<tr>
			<td class="c1">あきれる</td>
			<td class="c2">呆れる</td>
			<td class="c3">吃惊 惊讶 吓呆</td>
		</tr>
		<tr>
			<td class="c1">そねむ</td>
			<td class="c2">嫉む</td>
			<td class="c3">嫉妒</td>
		</tr>
		<tr>
			<td class="c1">ねたむ</td>
			<td class="c2">妬む</td>
			<td class="c3">嫉妒</td>
		</tr>
		<tr>
			<td class="c1">ささげる</td>
			<td class="c2">捧げる</td>
			<td class="c3">双手捧举 献上 贡献</td>
		</tr>
		<tr>
			<td class="c1">さとる</td>
			<td class="c2">悟る</td>
			<td class="c3">领悟 理解 察觉 意思到</td>
		</tr>
		<tr>
			<td class="c1">こびる</td>
			<td class="c2">媚びる</td>
			<td class="c3">献媚 巴结 卖弄风情</td>
		</tr>
		<tr>
			<td class="c1">とうとぶ</td>
			<td class="c2">尊ぶ 貴ぶ</td>
			<td class="c3">尊重 重视</td>
		</tr>
		<tr>
			<td class="c1">てれる</td>
			<td class="c2">照れる</td>
			<td class="c3 red">害羞 难为情 尴尬</td>
		</tr>
		<tr>
			<td class="c1">しげる</td>
			<td class="c2">茂る</td>
			<td class="c3">草木茂盛</td>
		</tr>
		<tr>
			<td class="c1">あおぐ</td>
			<td class="c2">仰ぐ</td>
			<td class="c3">瞻仰 敬仰 尊为</td>
		</tr>
		<tr>
			<td class="c1">あおぐ</td>
			<td class="c2">煽ぐ</td>
			<td class="c3">扇风</td>
		</tr>
		<tr>
			<td class="c1">おびやかす</td>
			<td class="c2">脅かす</td>
			<td class="c3">威逼 威胁</td>
		</tr>
		<tr>
			<td class="c1">おどかす</td>
			<td class="c2">脅かす</td>
			<td class="c3">用语言恐吓 开玩笑</td>
		</tr>
		<tr>
			<td class="c1">おどす</td>
			<td class="c2">脅す</td>
			<td class="c3">敲诈 打劫 恶意恐吓</td>
		</tr>
		<tr>
			<td class="c1">ほどこす</td>
			<td class="c2">施す</td>
			<td class="c3">施舍 施恩 施加 施行</td>
		</tr>
		<tr>
			<td class="c1">なげく</td>
			<td class="c2">嘆く</td>
			<td class="c3">叹气 哀叹 悲叹</td>
		</tr>
		<tr>
			<td class="c1">ゆがむ</td>
			<td class="c2">歪む</td>
			<td class="c3">物体变形 心理扭曲</td>
		</tr>
		<tr>
			<td class="c1">ひずむ</td>
			<td class="c2">歪む</td>
			<td class="c3">声音光线的失调 异常 难看</td>
		</tr>
		<tr>
			<td class="c1">したたか</td>
			<td class="c2">強か</td>
			<td class="c3">难对付 不好惹 厉害</td>
		</tr>
		<tr>
			<td class="c1">てこずる</td>
			<td class="c2">手こずる</td>
			<td class="c3">棘手 难对付</td>
		</tr>
		<tr>
			<td class="c1">したたる</td>
			<td class="c2">滴る</td>
			<td class="c3">滴下 鲜艳美丽</td>
		</tr>
		<tr>
			<td class="c1">つぐなう</td>
			<td class="c2">償う</td>
			<td class="c3">补偿 赔偿 赎罪</td>
		</tr>
		<tr>
			<td class="c1">たくらむ</td>
			<td class="c2">企む</td>
			<td class="c3">企图 阴谋 坏主意</td>
		</tr>
		<tr>
			<td class="c1">なじる</td>
			<td class="c2">詰る</td>
			<td class="c3 red">责问 责备 责难</td>
		</tr>
		<tr>
			<td class="c1">なえる</td>
			<td class="c2">萎える</td>
			<td class="c3">枯萎 没力气 变软</td>
		</tr>
		<tr>
			<td class="c1">むくいる</td>
			<td class="c2">報いる</td>
			<td class="c3">报答 报偿 报仇</td>
		</tr>
		<tr>
			<td class="c1">まどわす</td>
			<td class="c2">惑わす</td>
			<td class="c3">困惑 蛊惑 扰乱 不知所措</td>
		</tr>
		<tr>
			<td class="c1">くつがえす</td>
			<td class="c2">覆す</td>
			<td class="c3">打翻 推翻 彻底改变</td>
		</tr>
		<tr>
			<td class="c1">ひるがえす</td>
			<td class="c2">翻す</td>
			<td class="c3">翻面 转 挥舞 使飘动</td>
		</tr>
		<tr>
			<td class="c1">うらがえす</td>
			<td class="c2">裏返す</td>
			<td class="c3">翻过来 反过来思考</td>
		</tr>
		<tr>
			<td class="c1">さらす</td>
			<td class="c2">晒す</td>
			<td class="c3">暴晒 偏白 处于危险状态</td>
		</tr>
		<tr>
			<td class="c1">つかえる</td>
			<td class="c2">仕える</td>
			<td class="c3">服侍 伺候 侍奉 为人民服务</td>
		</tr>
		<tr>
			<td class="c1">つぶやく</td>
			<td class="c2">呟く</td>
			<td class="c3">嘟囔 唠叨 发牢骚</td>
		</tr>
		<tr>
			<td class="c1">ぶつぶつ</td>
			<td class="c2">ぶつぶつ</td>
			<td class="c3">嘟囔 唠叨 颗粒状疙瘩</td>
		</tr>
		<tr>
			<td class="c1">ぼやく</td>
			<td class="c2">ぼやく</td>
			<td class="c3">嘟囔 唠叨 发牢骚</td>
		</tr>
		<tr>
			<td class="c1">こぼす</td>
			<td class="c2">零す 溢す</td>
			<td class="c3">洒 泼 发牢骚 抱怨</td>
		</tr>
		<tr>
			<td class="c1">よどむ</td>
			<td class="c2">淀む</td>
			<td class="c3">淤塞 不流畅 沉淀 浑浊</td>
		</tr>
		<tr>
			<td class="c1">そむく</td>
			<td class="c2">背く</td>
			<td class="c3 red">违背 背叛 背对</td>
		</tr>
		<tr>
			<td class="c1">しのぶ</td>
			<td class="c2">偲ぶ</td>
			<td class="c3">怀念 回忆 追忆 缅怀</td>
		</tr>
		<tr>
			<td class="c1">しのぶ</td>
			<td class="c2">忍ぶ</td>
			<td class="c3">隐藏 躲避 忍耐 忍受</td>
		</tr>
		<tr>
			<td class="c1">さえぎる</td>
			<td class="c2">遮る</td>
			<td class="c3">遮住 遮挡 阻挡</td>
		</tr>
		<tr>
			<td class="c1">おとる</td>
			<td class="c2">劣る</td>
			<td class="c3">比不过 逊色</td>
		</tr>
		<tr>
			<td class="c1">まさる</td>
			<td class="c2">勝る</td>
			<td class="c3">胜过 优于 超高</td>
		</tr>
		<tr>
			<td class="c1">さとる</td>
			<td class="c2">悟る</td>
			<td class="c3">领悟 醒悟 认清 认识</td>
		</tr>
		<tr>
			<td class="c1">いましめる</td>
			<td class="c2">戒める</td>
			<td class="c3">劝诫 告诫</td>
		</tr>
		<tr>
			<td class="c1">うなる</td>
			<td class="c2">唸る</td>
			<td class="c3">呻吟 吼叫 轰鸣 赞叹</td>
		</tr>
		<tr>
			<td class="c1">まかなう</td>
			<td class="c2">賄う</td>
			<td class="c3">提供饭食 供养 维持</td>
		</tr>
		<tr>
			<td class="c1">せがむ</td>
			<td class="c2">せがむ</td>
			<td class="c3 red">纠缠 死皮赖脸 无理要求</td>
		</tr>
		<tr>
			<td class="c1">ためる</td>
			<td class="c2">矯める</td>
			<td class="c3">矫正 矫直 弄直</td>
		</tr>
		<tr>
			<td class="c1">ひそめる</td>
			<td class="c2">潜める</td>
			<td class="c3">隐藏 潜伏 销声匿迹</td>
		</tr>
		<tr>
			<td class="c1">くぐる</td>
			<td class="c2">潜る</td>
			<td class="c3">从下面穿过</td>
		</tr>
		<tr>
			<td class="c1">もぐる</td>
			<td class="c2">潜る</td>
			<td class="c3">潜入水下 地下</td>
		</tr>
		<tr>
			<td class="c1">まばら</td>
			<td class="c2">疎ら</td>
			<td class="c3">稀疏 零星</td>
		</tr>
		<tr>
			<td class="c1">うとむ</td>
			<td class="c2">疎む</td>
			<td class="c3">疏远 怠慢</td>
		</tr>
		<tr>
			<td class="c1">くちる</td>
			<td class="c2">朽ちる</td>
			<td class="c3">腐烂 腐朽</td>
		</tr>
		<tr>
			<td class="c1">さする</td>
			<td class="c2">摩る</td>
			<td class="c3">摩 摸 抚摸</td>
		</tr>
		<tr>
			<td class="c1">またたく</td>
			<td class="c2">瞬く</td>
			<td class="c3">眨眼 闪烁 灯火忽明忽暗</td>
		</tr>
		<tr>
			<td class="c1">まばたく</td>
			<td class="c2">瞬く</td>
			<td class="c3">眨眼 闪烁 灯火忽明忽暗</td>
		</tr>
		<tr>
			<td class="c1">のっとる</td>
			<td class="c2">則る</td>
			<td class="c3">根据 按照 遵照(法规)</td>
		</tr>
		<tr>
			<td class="c1">ぼかす</td>
			<td class="c2">暈す</td>
			<td class="c3">虚化 弄模糊 模棱两可</td>
		</tr>
		<tr>
			<td class="c1">ぼやける</td>
			<td class="c2">ぼやける</td>
			<td class="c3">模糊 不清晰</td>
		</tr>
		<tr>
			<td class="c1">かすむ</td>
			<td class="c2">霞む</td>
			<td class="c3">朦胧 模糊</td>
		</tr>
		<tr>
			<td class="c1">くくる</td>
			<td class="c2">括る</td>
			<td class="c3">捆扎 捆上 括号括起来</td>
		</tr>
		<tr>
			<td class="c1">たゆむ</td>
			<td class="c2">弛む</td>
			<td class="c3">松弛 粗心 疲惫</td>
		</tr>
		<tr>
			<td class="c1">たるむ</td>
			<td class="c2">弛む</td>
			<td class="c3">松弛 粗心 疲惫</td>
		</tr>
		<tr>
			<td class="c1">つどう</td>
			<td class="c2">集う</td>
			<td class="c3">集合 集会</td>
		</tr>
		<tr>
			<td class="c1">あばく</td>
			<td class="c2">暴く</td>
			<td class="c3 red">揭露 揭发 揭穿 使暴露</td>
		</tr>
		<tr>
			<td class="c1">とつぐ</td>
			<td class="c2">嫁ぐ</td>
			<td class="c3">嫁 出嫁</td>
		</tr>
		<tr>
			<td class="c1">もてあそぶ</td>
			<td class="c2">弄ぶ 玩ぶ</td>
			<td class="c3">玩弄 摆布 戏弄</td>
		</tr>
		<tr>
			<td class="c1">いじる</td>
			<td class="c2">弄る</td>
			<td class="c3">摆弄 玩弄</td>
		</tr>
		<tr>
			<td class="c1">いじめる</td>
			<td class="c2">苛める</td>
			<td class="c3">欺负 欺凌</td>
		</tr>
		<tr>
			<td class="c1">ふざける</td>
			<td class="c2">ふざける</td>
			<td class="c3">开玩笑</td>
		</tr>
		<tr>
			<td class="c1">からかう</td>
			<td class="c2">からかう</td>
			<td class="c3">戏弄 捉弄</td>
		</tr>
		<tr>
			<td class="c1">おがむ</td>
			<td class="c2">拝む</td>
			<td class="c3">双手合十 恳求 央求</td>
		</tr>
		<tr>
			<td class="c1">たどる</td>
			<td class="c2">辿る</td>
			<td class="c3">沿路前进 追寻 走向</td>
		</tr>
		<tr>
			<td class="c1">ついやす</td>
			<td class="c2">費やす</td>
			<td class="c3">花费 消耗 用掉</td>
		</tr>
		<tr>
			<td class="c1">またがる</td>
			<td class="c2">跨る</td>
			<td class="c3">骑 跨 横跨</td>
		</tr>
		<tr>
			<td class="c1">すねる</td>
			<td class="c2">拗ねる</td>
			<td class="c3">固执己见 闹别扭 任性</td>
		</tr>
		<tr>
			<td class="c1">そらす</td>
			<td class="c2">反らす</td>
			<td class="c3">向后仰身体 弄弯 反翘</td>
		</tr>
		<tr>
			<td class="c1">そらす</td>
			<td class="c2">逸らす</td>
			<td class="c3">偏离 错过 叉开</td>
		</tr>
		<tr>
			<td class="c1">もめる</td>
			<td class="c2">揉める</td>
			<td class="c3 red">发生争执 起纠纷 焦虑不安</td>
		</tr>
		<tr>
			<td class="c1">おとろえる</td>
			<td class="c2">衰える</td>
			<td class="c3">势头衰落 衰败 衰亡</td>
		</tr>
		<tr>
			<td class="c1">かがむ</td>
			<td class="c2">屈む</td>
			<td class="c3">(自动)弯腰 蹲下</td>
		</tr>
		<tr>
			<td class="c1">かがめる</td>
			<td class="c2">屈める</td>
			<td class="c3">(他动)使..弯腰 屈身</td>
		</tr>
		<tr>
			<td class="c1">すく</td>
			<td class="c2">透く 空く</td>
			<td class="c3">(他动)透过..看见 有空隙</td>
		</tr>
		<tr>
			<td class="c1">すける</td>
			<td class="c2">透ける</td>
			<td class="c3">(自动)透过 透明的(衣服)</td>
		</tr>
		<tr>
			<td class="c1">はぐくむ</td>
			<td class="c2">育む</td>
			<td class="c3">培养 培育 维护 抱 哺育</td>
		</tr>
		<tr>
			<td class="c1">ばてる</td>
			<td class="c2">バテる</td>
			<td class="c3">精疲力尽</td>
		</tr>
		<tr>
			<td class="c1">くたびれる</td>
			<td class="c2">草臥れる</td>
			<td class="c3">精疲力尽</td>
		</tr>
		<tr>
			<td class="c1">まっとう</td>
			<td class="c2">全う(する)</td>
			<td class="c3">正经 认真 完成 保全</td>
		</tr>
		<tr>
			<td class="c1">たまわる</td>
			<td class="c2">賜る</td>
			<td class="c3">受赏 受到恩赐</td>
		</tr>
		<tr>
			<td class="c1">おだてる</td>
			<td class="c2">煽てる</td>
			<td class="c3 red">吹捧 奉承 戴高帽 怂恿</td>
		</tr>
		<tr>
			<td class="c1">あざむく</td>
			<td class="c2">欺く</td>
			<td class="c3">欺骗 超过 赛过</td>
		</tr>
		<tr>
			<td class="c1">いつくしむ</td>
			<td class="c2">慈しむ</td>
			<td class="c3">怜爱 疼爱 慈爱</td>
		</tr>
		<tr>
			<td class="c1">はめる</td>
			<td class="c2">嵌める</td>
			<td class="c3">镶嵌 安上 插入</td>
		</tr>
		<tr>
			<td class="c1">くわえる</td>
			<td class="c2">咥える</td>
			<td class="c3">叼 含</td>
		</tr>
		<tr>
			<td class="c1">いきどおる</td>
			<td class="c2">憤る</td>
			<td class="c3">愤怒 气氛 生气</td>
		</tr>
		<tr>
			<td class="c1">さまよう</td>
			<td class="c2">彷徨う</td>
			<td class="c3">彷徨 徘徊</td>
		</tr>
		<tr>
			<td class="c1">ためらう</td>
			<td class="c2">ためらう</td>
			<td class="c3 red">犹豫 踌躇 迟疑</td>
		</tr>
		<tr>
			<td class="c1">なだめる</td>
			<td class="c2">宥める</td>
			<td class="c3 red">安慰 抚慰 使平静</td>
		</tr>
		<tr>
			<td class="c1">おこる</td>
			<td class="c2">興る</td>
			<td class="c3">兴起 振兴 兴奋</td>
		</tr>
		<tr>
			<td class="c1">ただよう</td>
			<td class="c2">漂う</td>
			<td class="c3">飘荡 </td>
		</tr>
		<tr>
			<td class="c1">むしる</td>
			<td class="c2">毟る</td>
			<td class="c3">拔 撕 揪 撕下来</td>
		</tr>
		<tr>
			<td class="c1">しいたげる</td>
			<td class="c2">虐げる</td>
			<td class="c3">虐待 欺负</td>
		</tr>
		<tr>
			<td class="c1">みくびる</td>
			<td class="c2">見くびる</td>
			<td class="c3 red">轻视 小看</td>
		</tr>
		<tr>
			<td class="c1">おさめる</td>
			<td class="c2">納める</td>
			<td class="c3">缴纳 缴费 卖给</td>
		</tr>
		<tr>
			<td class="c1">おさめる</td>
			<td class="c2">修める</td>
			<td class="c3">学习 专研</td>
		</tr>
		<tr>
			<td class="c1">おさめる</td>
			<td class="c2">治める</td>
			<td class="c3">治理 统治 镇压</td>
		</tr>
		<tr>
			<td class="c1">おさめる</td>
			<td class="c2">収める</td>
			<td class="c3">接收 获得 收藏 保存</td>
		</tr>
		<tr>
			<td class="c1">みつぐ</td>
			<td class="c2">貢ぐ</td>
			<td class="c3">贡献 缴费 寄生活费 供养</td>
		</tr>
		<tr>
			<td class="c1">たてまつる</td>
			<td class="c2">奉る</td>
			<td class="c3">奉上 献上 恭维</td>
		</tr>
		<tr>
			<td class="c1">しりぞける</td>
			<td class="c2">退ける</td>
			<td class="c3">击退 赶跑 使..退去</td>
		</tr>
		<tr>
			<td class="c1">ぼける</td>
			<td class="c2">惚ける 呆ける ボケる</td>
			<td class="c3">发呆</td>
		</tr>
		<tr>
			<td class="c1">とぼける</td>
			<td class="c2">惚ける</td>
			<td class="c3">装傻 假装不知道</td>
		</tr>
		<tr>
			<td class="c1">ぼうぜん</td>
			<td class="c2">呆然</td>
			<td class="c3">发呆 发愣</td>
		</tr>
		<tr>
			<td class="c1">いとなむ</td>
			<td class="c2">営む</td>
			<td class="c3">从事 经营 营造 行为</td>
		</tr>
		<tr>
			<td class="c1">さばく</td>
			<td class="c2">捌く</td>
			<td class="c3 red">卖光 妥善处理 弄好 整理好</td>
		</tr>
		<tr>
			<td class="c1">さばく</td>
			<td class="c2">裁く</td>
			<td class="c3 red">裁判 审批 是非判断</td>
		</tr>
		<tr>
			<td class="c1">けがれる</td>
			<td class="c2">汚れる</td>
			<td class="c3">弄脏 丧失道德 污浊</td>
		</tr>
		<tr>
			<td class="c1">はかどる</td>
			<td class="c2">捗る</td>
			<td class="c3">进展顺利</td>
		</tr>
		<tr>
			<td class="c1">かもす</td>
			<td class="c2">醸す</td>
			<td class="c3">酿成 造成 引起</td>
		</tr>
		<tr>
			<td class="c1">さげすむ</td>
			<td class="c2">蔑む</td>
			<td class="c3">轻蔑 蔑视</td>
		</tr>
		<tr>
			<td class="c1">もたらす</td>
			<td class="c2">もたらす</td>
			<td class="c3 red">招致 引来 造成</td>
		</tr>
		<tr>
			<td class="c1">たたえる</td>
			<td class="c2">称える</td>
			<td class="c3">称赞 表扬</td>
		</tr>
		<tr>
			<td class="c1">おちいる</td>
			<td class="c2">陥る</td>
			<td class="c3">落入 陷入 坠入</td>
		</tr>
		<tr>
			<td class="c1">おとしいれる</td>
			<td class="c2">陥れる</td>
			<td class="c3">陷害 使..陷入</td>
		</tr>
		<tr>
			<td class="c1">みなぎる</td>
			<td class="c2">漲る</td>
			<td class="c3">充满 涨满 迷漫</td>
		</tr>
		<tr>
			<td class="c1">ゆだねる</td>
			<td class="c2">委ねる</td>
			<td class="c3">委任 献身</td>
		</tr>
		<tr>
			<td class="c1">ふける</td>
			<td class="c2">耽る</td>
			<td class="c3 red">沉迷 陷入 埋头</td>
		</tr>
		<tr>
			<td class="c1">つちかう</td>
			<td class="c2">培う</td>
			<td class="c3">培植 培养 培训 培育</td>
		</tr>
		<tr>
			<td class="c1">いたむ</td>
			<td class="c2">悼む</td>
			<td class="c3">哀悼</td>
		</tr>
		<tr>
			<td class="c1">りきむ</td>
			<td class="c2">力む</td>
			<td class="c3">使劲 用力 虚张声势 逞强</td>
		</tr>
		<tr>
			<td class="c1">へりくだる</td>
			<td class="c2">謙る</td>
			<td class="c3">谦虚 谦逊</td>
		</tr>

		<tr>
			<td class="c1">こごえる</td>
			<td class="c2">凍える</td>
			<td class="c3">身体冻僵</td>
		</tr>
		<tr>
			<td class="c1">もがく</td>
			<td class="c2">もがく</td>
			<td class="c3 red">挣扎 着急</td>
		</tr>
		<tr>
			<td class="c1">うなずく</td>
			<td class="c2">頷く</td>
			<td class="c3">点头 同意</td>
		</tr>
		<tr>
			<td class="c1">うつむく</td>
			<td class="c2">俯く</td>
			<td class="c3">低头 垂头 脸朝下</td>
		</tr>
		<tr>
			<td class="c1">つつしむ</td>
			<td class="c2">慎む 謹む</td>
			<td class="c3">小心 谨慎 节制</td>
		</tr>
		<tr>
			<td class="c1">あなどる</td>
			<td class="c2">侮る</td>
			<td class="c3">侮辱 轻视</td>
		</tr>
		<tr>
			<td class="c1">むさぼる</td>
			<td class="c2">貪る</td>
			<td class="c3">贪图 贪婪</td>
		</tr>
		<tr>
			<td class="c1">になう</td>
			<td class="c2">担う</td>
			<td class="c3">挑 肩负 承担</td>
		</tr>
		<tr>
			<td class="c1">かつぐ</td>
			<td class="c2">担ぐ</td>
			<td class="c3">担 抗 以..为领袖 骗</td>
		</tr>
		<tr>
			<td class="c1">うれう</td>
			<td class="c2">憂う</td>
			<td class="c3">忧伤 悲叹 担忧</td>
		</tr>
		<tr>
			<td class="c1">わずらう</td>
			<td class="c2">患う</td>
			<td class="c3">患病 生病 苦恼</td>
		</tr>
		<tr>
			<td class="c1">わずらう</td>
			<td class="c2">煩う</td>
			<td class="c3">烦恼 苦恼</td>
		</tr>
		<tr>
			<td class="c1">うれえる</td>
			<td class="c2">憂える</td>
			<td class="c3">担忧 患病</td>
		</tr>
		<tr>
			<td class="c1">しいる</td>
			<td class="c2">強いる</td>
			<td class="c3 red">强迫 迫使</td>
		</tr>
		<tr>
			<td class="c1">さだまる</td>
			<td class="c2">定まる</td>
			<td class="c3">决定 定下来 安定</td>
		</tr>
		<tr>
			<td class="c1">たずさえる</td>
			<td class="c2">携える</td>
			<td class="c3">携带 拿 携手 带领</td>
		</tr>
		<tr>
			<td class="c1">たずさわる</td>
			<td class="c2">携わる</td>
			<td class="c3 red">参与 从事 有关系</td>
		</tr>
		<tr>
			<td class="c1">かなう</td>
			<td class="c2">適う</td>
			<td class="c3">适合 符合 能做到</td>
		</tr>
		<tr>
			<td class="c1">かなう</td>
			<td class="c2">敵う</td>
			<td class="c3">敌得过 比得上</td>
		</tr>
		<tr>
			<td class="c1">つねる</td>
			<td class="c2">抓る</td>
			<td class="c3">掐 拧</td>
		</tr>
		<tr>
			<td class="c1">たまう</td>
			<td class="c2">賜う 給う</td>
			<td class="c3">给 赐与</td>
		</tr>
		<tr>
			<td class="c1">はしゃぐ</td>
			<td class="c2">燥ぐ</td>
			<td class="c3">风干 干燥 喧闹 欢闹</td>
		</tr>
		<tr>
			<td class="c1">かえる</td>
			<td class="c2">孵る</td>
			<td class="c3">孵化</td>
		</tr>
		<tr>
			<td class="c1">はぐれる</td>
			<td class="c2">逸れる</td>
			<td class="c3">走散 错过 没赶上机会</td>
		</tr>
		<tr>
			<td class="c1">それる</td>
			<td class="c2">逸れる</td>
			<td class="c3">脱离正轨 跑调</td>
		</tr>
		<tr>
			<td class="c1">おごそか</td>
			<td class="c2">厳か</td>
			<td class="c3">庄严 严肃 庄重</td>
		</tr>
		<tr>
			<td class="c1">あさる</td>
			<td class="c2">漁る</td>
			<td class="c3">寻找食物 捞鱼</td>
		</tr>
		<tr>
			<td class="c1">たしなむ</td>
			<td class="c2">嗜む</td>
			<td class="c3">爱好 谨慎 学会 掌握</td>
		</tr>
		<tr>
			<td class="c1">くじく</td>
			<td class="c2">挫く</td>
			<td class="c3">扭伤 挫伤 抑制 打击</td>
		</tr>
		<tr>
			<td class="c1">ひきいる</td>
			<td class="c2">率いる</td>
			<td class="c3">带领 率领 统率</td>
		</tr>
		<tr>
			<td class="c1">ひるむ</td>
			<td class="c2">怯む</td>
			<td class="c3">畏惧 害怕 麻痹</td>
		</tr>
		<tr>
			<td class="c1">そそのかす</td>
			<td class="c2">唆す</td>
			<td class="c3">教唆 怂恿</td>
		</tr>
		<tr>
			<td class="c1">さずける</td>
			<td class="c2">授ける</td>
			<td class="c3">授予 赋予 传授 教授</td>
		</tr>
		<tr>
			<td class="c1">むしばむ</td>
			<td class="c2">蝕む</td>
			<td class="c3">虫蛀 虫咬 侵蚀</td>
		</tr>
		<tr>
			<td class="c1">やつれる</td>
			<td class="c2">窶れる</td>
			<td class="c3">消瘦 憔悴 落魄</td>
		</tr>
		<tr>
			<td class="c1">さげる</td>
			<td class="c2">提げる</td>
			<td class="c3">提着 携带</td>
		</tr>
		<tr>
			<td class="c1">おびる</td>
			<td class="c2">帯びる</td>
			<td class="c3">佩戴 携带 含有 带有 担任</td>
		</tr>
		<tr>
			<td class="c1">とどこおる</td>
			<td class="c2">滞る</td>
			<td class="c3">堵塞 积压</td>
		</tr>
		<tr>
			<td class="c1">ひるがえす</td>
			<td class="c2">翻す</td>
			<td class="c3">翻过来 使..飘动</td>
		</tr>
		<tr>
			<td class="c1">くつがえす</td>
			<td class="c2">覆す</td>
			<td class="c3">打翻 弄翻 推翻 颠覆</td>
		</tr>
		<tr>
			<td class="c1">こらす</td>
			<td class="c2">凝らす</td>
			<td class="c3">凝结 集中</td>
		</tr>
		<tr>
			<td class="c1">はかる</td>
			<td class="c2">諮る</td>
			<td class="c3">商量 磋商</td>
		</tr>
		<tr>
			<td class="c1">はかる</td>
			<td class="c2">図る</td>
			<td class="c3">图谋 策划 谋求</td>
		</tr>
		<tr>
			<td class="c1">ほろびる</td>
			<td class="c2">滅びる</td>
			<td class="c3">灭绝 灭亡</td>
		</tr>
		<tr>
			<td class="c1">くちずさむ</td>
			<td class="c2">口ずさむ</td>
			<td class="c3">哼小曲</td>
		</tr>
		<tr>
			<td class="c1">おしむ</td>
			<td class="c2">惜しむ</td>
			<td class="c3">舍不得 惋惜 爱惜 吝啬</td>
		</tr>
		<tr>
			<td class="c1">こばむ</td>
			<td class="c2">拒む</td>
			<td class="c3">拒绝 阻止</td>
		</tr>
		<tr>
			<td class="c1">いたわる</td>
			<td class="c2">労る</td>
			<td class="c3 red">怜悯 关怀 慰劳</td>
		</tr>
		<tr>
			<td class="c1">ほどける</td>
			<td class="c2">解ける</td>
			<td class="c3">(鞋带)解开 松开 心情缓和</td>
		</tr>
		<tr>
			<td class="c1">とける</td>
			<td class="c2">解ける</td>
			<td class="c3">解决问题 解开答案</td>
		</tr>
		<tr>
			<td class="c1">つくろう</td>
			<td class="c2">繕う</td>
			<td class="c3">修理 修缮 弥补</td>
		</tr>
		<tr>
			<td class="c1">あわれむ</td>
			<td class="c2">哀れむ 憐れむ</td>
			<td class="c3">可怜 怜悯 同情</td>
		</tr>
		<tr>
			<td class="c1">さずかる</td>
			<td class="c2">授かる</td>
			<td class="c3">被授予 被赐予</td>
		</tr>
		<tr>
			<td class="c1">しつける</td>
			<td class="c2">仕付ける</td>
			<td class="c3 red">做惯 习惯 缝上 补上</td>
		</tr>
		<tr>
			<td class="c1">かじる</td>
			<td class="c2">齧る</td>
			<td class="c3 red">咬 啃 一知半解 略懂</td>
		</tr>
		<tr>
			<td class="c1">もてなす</td>
			<td class="c2">持て成す</td>
			<td class="c3 red">款待</td>
		</tr>
		<tr>
			<td class="c1">ごまかす</td>
			<td class="c2">誤魔化す</td>
			<td class="c3 red">隐瞒 掩饰 搪塞 欺骗</td>
		</tr>
		<tr>
			<td class="c1">さとす</td>
			<td class="c2">諭す</td>
			<td class="c3 red">告示 使..了解 教导 教诲</td>
		</tr>
		<tr>
			<td class="c1">まぬがれる</td>
			<td class="c2">免れる</td>
			<td class="c3">避免 摆脱 幸免</td>
		</tr>
		<tr>
			<td class="c1">おもむく</td>
			<td class="c2">赴く</td>
			<td class="c3">奔赴 向往 趋势</td>
		</tr>
		<tr>
			<td class="c1">そびえる</td>
			<td class="c2">聳える</td>
			<td class="c3">耸立 高耸入云</td>
		</tr>
		<tr>
			<td class="c1">かなでる</td>
			<td class="c2">奏でる</td>
			<td class="c3">演奏 弹奏</td>
		</tr>
		<tr>
			<td class="c1">ちぎる</td>
			<td class="c2">契る</td>
			<td class="c3">誓约 约定</td>
		</tr>
		<tr>
			<td class="c1">たくす</td>
			<td class="c2">託す</td>
			<td class="c3">托付 借口 托词</td>
		</tr>
		<tr>
			<td class="c1">つかさどる</td>
			<td class="c2">司る 掌る</td>
			<td class="c3">掌管 管理 主持 担任</td>
		</tr>
		<tr>
			<td class="c1">つぶる</td>
			<td class="c2">瞑る</td>
			<td class="c3">闭眼</td>
		</tr>
		<tr>
			<td class="c1">ねだる</td>
			<td class="c2">強請る</td>
			<td class="c3 red">死皮赖脸要求</td>
		</tr>
		<tr>
			<td class="c1">はねる</td>
			<td class="c2">跳ねる</td>
			<td class="c3">跳 飞溅</td>
		</tr>
		<tr>
			<td class="c1">かぶれる</td>
			<td class="c2">かぶれる</td>
			<td class="c3 red">着迷 热衷 皮肤起红疹</td>
		</tr>
		<tr>
			<td class="c1">あせる</td>
			<td class="c2">褪せる</td>
			<td class="c3">褪色 衰减 衰退</td>
		</tr>
		<tr>
			<td class="c1">とがめる</td>
			<td class="c2">咎める</td>
			<td class="c3">责难 责备 盘问</td>
		</tr>
		<tr>
			<td class="c1">たくわえる</td>
			<td class="c2">蓄える</td>
			<td class="c3">储蓄 储存</td>
		</tr>
		<tr>
			<td class="c1">いつわる</td>
			<td class="c2">偽る</td>
			<td class="c3">冒充 伪造 作假</td>
		</tr>
		<tr>
			<td class="c1">こらしめる</td>
			<td class="c2">懲らしめる</td>
			<td class="c3">惩罚 惩戒 教训</td>
		</tr>
		<tr>
			<td class="c1">めくる</td>
			<td class="c2">捲る</td>
			<td class="c3">掀起(被子) 翻开(书)</td>
		</tr>
		<tr>
			<td class="c1">しくじる</td>
			<td class="c2">しくじる</td>
			<td class="c3">搞砸 失败 被解雇</td>
		</tr>
		<tr>
			<td class="c1">つらぬく</td>
			<td class="c2">貫く</td>
			<td class="c3">贯通 穿过 贯彻(主张)</td>
		</tr>
		<tr>
			<td class="c1">そそる</td>
			<td class="c2">そそる</td>
			<td class="c3">引起 勾起</td>
		</tr>
		<tr>
			<td class="c1">はじく</td>
			<td class="c2">弾く</td>
			<td class="c3">排斥 防水 弹 打算盘</td>
		</tr>
		<tr>
			<td class="c1">けなす</td>
			<td class="c2">貶す</td>
			<td class="c3">贬低</td>
		</tr>
		<tr>
			<td class="c1">ひめる</td>
			<td class="c2">秘める</td>
			<td class="c3">隐藏</td>
		</tr>
		<tr>
			<td class="c1">急かす</td>
			<td class="c2">せかす</td>
			<td class="c3">催促</td>
		</tr>
		<tr>
			<td class="c1">しりぞく </td>
			<td class="c2">退く</td>
			<td class="c3">退出，离开</td>
		</tr>
		<tr>
			<td class="c1">おびえる</td>
			<td class="c2">怯える</td>
			<td class="c3">害怕</td>
		</tr>
		<tr>
			<td class="c1">よみがえる</td>
			<td class="c2">蘇る</td>
			<td class="c3">复苏 浮现</td>
		</tr>
		<tr>
			<td class="c1">たたえる</td>
			<td class="c2">称える</td>
			<td class="c3">称赞</td>
		</tr>
		<tr>
			<td class="c1">くじける</td>
			<td class="c2">挫ける</td>
			<td class="c3">消沉，扭挫</td>
		</tr>
		<tr>
			<td class="c1">うながす</td>
			<td class="c2">促す</td>
			<td class="c3">催促，促使</td>
		</tr>
		<tr>
			<td class="c1">あやぶむ</td>
			<td class="c2">危ぶむ</td>
			<td class="c3">担心 怀疑 不相信</td>
		</tr>
		<tr>
			<td class="c1">ずれこむ</td>
			<td class="c2">ずれ込む</td>
			<td class="c3">推迟 延迟</td>
		</tr>
		<tr>
			<td class="c1">なつく</td>
			<td class="c2">懐く</td>
			<td class="c3">接近 亲近 喜欢 驯服</td>
		</tr>
		<tr>
			<td class="c1">こじれる</td>
			<td class="c2">拗れる</td>
			<td class="c3">恶化 复杂化</td>
		</tr>
		<tr>
			<td class="c1">くつろぐ</td>
			<td class="c2">寛ぐ</td>
			<td class="c3">舒坦 放松 惬意 愉快地休息</td>
		</tr>
		<tr>
			<td class="c1">ゆずる</td>
			<td class="c2">譲る</td>
			<td class="c3">转让 卖给</td>
		</tr>
		<tr>
			<td class="c1">さっする</td>
			<td class="c2">察する</td>
			<td class="c3">观测 推测 体谅 谅解</td>
		</tr>
		<tr>
			<td class="c1">ひねる</td>
			<td class="c2">捻る</td>
			<td class="c3">扭 拧 捏 转动 击败打败</td>
		</tr>
		<tr>
			<td class="c1">ねじる</td>
			<td class="c2">捻る</td>
			<td class="c3">扭 拧 捏 转动 击败打败</td>
		</tr>
		<tr>
			<td class="c1">あつらえる</td>
			<td class="c2">誂える</td>
			<td class="c3">订做</td>
		</tr>
		<tr>
			<td class="c1">つらなる</td>
			<td class="c2">連なる</td>
			<td class="c3">成排 连绵 牵涉</td>
		</tr>
		<tr>
			<td class="c1">つらねる</td>
			<td class="c2">連ねる</td>
			<td class="c3">连成一排</td>
		</tr>
		<tr>
			<td class="c1">とだえる</td>
			<td class="c2">途絶える</td>
			<td class="c3">(线索 道路)中断</td>
		</tr>
		<tr>
			<td class="c1">とろける</td>
			<td class="c2">蕩ける</td>
			<td class="c3">溶化 心荡神驰</td>
		</tr>

		<!--形容词-->
		<tr>
			<td class="c1">あわい</td>
			<td class="c2">淡い</td>
			<td class="c3">淡的 浅的</td>
		</tr>
		<tr>
			<td class="c1">あいいれない</td>
			<td class="c2">相容れない</td>
			<td class="c3">势不两立 水火不容</td>
		</tr>
		<tr>
			<td class="c1">かたくるしい</td>
			<td class="c2">堅苦しい</td>
			<td class="c3">严肃 古板</td>
		</tr>
		<tr>
			<td class="c1">いちじるしい</td>
			<td class="c2">著しい</td>
			<td class="c3">显著的 明显的</td>
		</tr>
		<tr>
			<td class="c1">めざましいい</td>
			<td class="c2">目覚ましい</td>
			<td class="c3">显著的 惊人的</td>
		</tr>
		<tr>
			<td class="c1">うるわしいい</td>
			<td class="c2">麗しい</td>
			<td class="c3">漂亮 美丽 秀丽</td>
		</tr>
		<tr>
			<td class="c1">うっとうしい</td>
			<td class="c2">鬱陶しい</td>
			<td class="c3">烦闷 沉闷 厌烦</td>
		</tr>
		<tr>
			<td class="c1">すがすがしい</td>
			<td class="c2">清々しい</td>
			<td class="c3">清爽的</td>
		</tr>
		<tr>
			<td class="c1">ずうずうしい</td>
			<td class="c2">図々しい</td>
			<td class="c3">脸皮厚的 不要脸的</td>
		</tr>
		<tr>
			<td class="c1">あつかましい</td>
			<td class="c2">厚かましい</td>
			<td class="c3">脸皮厚的 不要脸的</td>
		</tr>
		<tr>
			<td class="c1">おもおもしい</td>
			<td class="c2">重々しいい</td>
			<td class="c3">庄重 严肃 沉重</td>
		</tr>
		<tr>
			<td class="c1">ものものしい</td>
			<td class="c2">物々しい</td>
			<td class="c3 red">森严 过分 小题大做</td>
		</tr>
		<tr>
			<td class="c1">あわただしい</td>
			<td class="c2">慌ただしい</td>
			<td class="c3">慌张 匆忙 不稳</td>
		</tr>
		<tr>
			<td class="c1">おびただしい</td>
			<td class="c2">夥しい</td>
			<td class="c3 red">很多 大量 无数</td>
		</tr>
		<tr>
			<td class="c1">いさましい</td>
			<td class="c2">勇ましい</td>
			<td class="c3">勇敢的 勇猛的</td>
		</tr>
		<tr>
			<td class="c1">いたましい</td>
			<td class="c2">痛ましい</td>
			<td class="c3">可怜的 凄惨的</td>
		</tr>
		<tr>
			<td class="c1">うたがわしい</td>
			<td class="c2">疑わしい</td>
			<td class="c3">可疑的</td>
		</tr>
		<tr>
			<td class="c1">わずらわしい</td>
			<td class="c2">煩わしい</td>
			<td class="c3">麻烦的 繁琐的</td>
		</tr>
		<tr>
			<td class="c1">たくましい</td>
			<td class="c2">逞しい</td>
			<td class="c3">强壮的 健壮的</td>
		</tr>
		<tr>
			<td class="c1">はかばかしい</td>
			<td class="c2">捗捗しい(はかどる)</td>
			<td class="c3 red">进展顺利的</td>
		</tr>
		<tr>
			<td class="c1">すさまじい</td>
			<td class="c2">凄まじい</td>
			<td class="c3 red">可怕 骇人 猛烈 厉害</td>
		</tr>
		<tr>
			<td class="c1">いまわしい</td>
			<td class="c2">忌まわしい</td>
			<td class="c3">不吉利的 讨厌的 可恨的</td>
		</tr>
		<tr>
			<td class="c1">まちどおしい</td>
			<td class="c2">待ち遠しい</td>
			<td class="c3">急切等待 盼望</td>
		</tr>
		<tr>
			<td class="c1">きまりわるい</td>
			<td class="c2">決まり悪い</td>
			<td class="c3">不好意思 拉不下脸</td>
		</tr>
		<tr>
			<td class="c1">めまぐるしい</td>
			<td class="c2">目紛るしい</td>
			<td class="c3 red">眼花缭乱的</td>
		</tr>
		<tr>
			<td class="c1">むらしい</td>
			<td class="c2">空しい／虚しい</td>
			<td class="c3">空虚 空洞</td>
		</tr>
		<tr>
			<td class="c1">ややこしい</td>
			<td class="c2">ややこしい</td>
			<td class="c3 red">复杂 繁琐 难办</td>
		</tr>
		<tr>
			<td class="c1">あじけない</td>
			<td class="c2">味気ない</td>
			<td class="c3">乏味 没意思</td>
		</tr>
		<tr>
			<td class="c1">あっけない</td>
			<td class="c2">呆気ない</td>
			<td class="c3 red">太简单 没意思 没劲</td>
		</tr>
		<tr>
			<td class="c1">そっけない</td>
			<td class="c2">素っ気ない</td>
			<td class="c3 red">冷淡 无情</td>
		</tr>
		<tr>
			<td class="c1">なにげない</td>
			<td class="c2">何気ない</td>
			<td class="c3">若无其事 无心 无意</td>
		</tr>
		<tr>
			<td class="c1">おっかない</td>
			<td class="c2">おっかない</td>
			<td class="c3 red">可怕的</td>
		</tr>
		<tr>
			<td class="c1">おもいがけない</td>
			<td class="c2">思いがけない</td>
			<td class="c3">想不到的 意外的</td>
		</tr>
		<tr>
			<td class="c1">そぐわない</td>
			<td class="c2">そぐわない</td>
			<td class="c3">不合适 不合拍 不切合</td>
		</tr>
		<tr>
			<td class="c1">かなわない</td>
			<td class="c2">敵わない</td>
			<td class="c3">比不过 敌不上</td>
		</tr>
		<tr>
			<td class="c1">みたない</td>
			<td class="c2">満たない</td>
			<td class="c3">不满 不足</td>
		</tr>
		<tr>
			<td class="c1">さえない</td>
			<td class="c2">冴えない</td>
			<td class="c3 red">泄气 失望 消沉</td>
		</tr>
		<tr>
			<td class="c1">いなめない</td>
			<td class="c2">否めない</td>
			<td class="c3">无法否认的 不能拒绝</td>
		</tr>
		<tr>
			<td class="c1">きわまりない</td>
			<td class="c2">極まりない</td>
			<td class="c3">极其 非常</td>
		</tr>
		<tr>
			<td class="c1">はかない</td>
			<td class="c2">儚い</td>
			<td class="c3">缥缈的 虚无的</td>
		</tr>
		<tr>
			<td class="c1">だらしない</td>
			<td class="c2">だらしない</td>
			<td class="c3">不检点的 放荡的 邋遢的</td>
		</tr>
		<tr>
			<td class="c1">あくどい</td>
			<td class="c2">あくどい</td>
			<td class="c3 red">恶毒的 讨厌的 浓艳的</td>
		</tr>
		<tr>
			<td class="c1">あざとい</td>
			<td class="c2">あざとい</td>
			<td class="c3 red">耍小聪明的 贪婪的</td>
		</tr>
		<tr>
			<td class="c1">めざとい</td>
			<td class="c2">目敏い</td>
			<td class="c3 red">眼尖的 目光明锐</td>
		</tr>
		<tr>
			<td class="c1">いさぎよい</td>
			<td class="c2">潔い</td>
			<td class="c3">清白 纯洁 果然 干脆 爽快</td>
		</tr>
		<tr>
			<td class="c1">くすぐったい</td>
			<td class="c2">擽ったい</td>
			<td class="c3 red">发痒的 不好意思 难为情</td>
		</tr>
		<tr>
			<td class="c1">もどかしい</td>
			<td class="c2">もどかしい</td>
			<td class="c3 red">令人着急 不耐烦 急不可待</td>
		</tr>
		<tr>
			<td class="c1">ここちよい</td>
			<td class="c2">心地よい</td>
			<td class="c3">愉快的 舒适的</td>
		</tr>
		<tr>
			<td class="c1">こころよい</td>
			<td class="c2">快い</td>
			<td class="c3">高兴的 愉快的 痛快的</td>
		</tr>
		<tr>
			<td class="c1">こころぼそい</td>
			<td class="c2">心細い</td>
			<td class="c3 red">心理没底 没把握 不安的</td>
		</tr>
		<tr>
			<td class="c1">こころない</td>
			<td class="c2">心無い</td>
			<td class="c3">无情的 不懂情趣的</td>
		</tr>
		<tr>
			<td class="c1">しぶとい</td>
			<td class="c2">しぶとい</td>
			<td class="c3 red">顽强 倔强 犟脾气</td>
		</tr>
		<tr>
			<td class="c1">すばしこい</td>
			<td class="c2">すばしこい</td>
			<td class="c3 red">敏捷 利落 灵活</td>
		</tr>
		<tr>
			<td class="c1">すばやい</td>
			<td class="c2">素早い</td>
			<td class="c3">快速 麻利 敏捷</td>
		</tr>
		<tr>
			<td class="c1">たやすい</td>
			<td class="c2">容易い</td>
			<td class="c3">容易 简单 轻易</td>
		</tr>
		<tr>
			<td class="c1">だるい</td>
			<td class="c2">怠い</td>
			<td class="c3">懒惰的 困倦的 乏力的</td>
		</tr>
		<tr>
			<td class="c1">とうとい</td>
			<td class="c2">尊い／貴い</td>
			<td class="c3">宝贵的 尊贵的 尊敬的</td>
		</tr>
		<tr>
			<td class="c1">するどい</td>
			<td class="c2">鋭い</td>
			<td class="c3">尖锐的 敏锐的</td>
		</tr>
		<tr>
			<td class="c1">もろい</td>
			<td class="c2">脆い</td>
			<td class="c3">易碎的 脆弱的</td>
		</tr>
		<tr>
			<td class="c1">たえがたい</td>
			<td class="c2">耐え難い</td>
			<td class="c3">难以忍受的</td>
		</tr>
		<tr>
			<td class="c1">つれない</td>
			<td class="c2">つれない</td>
			<td class="c3 red">冷库 无情 狠心 薄情</td>
		</tr>
		<tr>
			<td class="c1">ていたい</td>
			<td class="c2">手痛い</td>
			<td class="c3">严重的 重大的 沉重的</td>
		</tr>
		<tr>
			<td class="c1">はかりしれない</td>
			<td class="c2">計り知れない</td>
			<td class="c3">无法估量的</td>
		</tr>
		<tr>
			<td class="c1">はなはだしい</td>
			<td class="c2">甚だしい</td>
			<td class="c3">非常 极度 超越一般程度</td>
		</tr>

		<tr>
			<td class="c1">たどたどしい</td>
			<td class="c2">辿々しい</td>
			<td class="c3">不熟练 磕磕绊绊 生涩</td>
		</tr>
		<tr>
			<td class="c1">よそよそしい</td>
			<td class="c2">余所余所しい</td>
			<td class="c3">忽视 冷淡 不亲热</td>
		</tr>
		<tr>
			<td class="c1">あぶなげない</td>
			<td class="c2">危なげない</td>
			<td class="c3">十拿九稳的</td>
		</tr>
		<tr>
			<td class="c1">なまぬるい</td>
			<td class="c2">生ぬるい</td>
			<td class="c3">温暖的 不严格 睁一只眼闭一只眼</td>
		</tr>
		<tr>
			<td class="c1">ゆさぶる</td>
			<td class="c2">揺さぶる</td>
			<td class="c3">震撼 摇动</td>
		</tr>
		<tr>
			<td class="c1">おおまか</td>
			<td class="c2">大まか</td>
			<td class="c3">大致的 粗略的 草率的</td>
		</tr>
		<tr>
			<td class="c1">のどか</td>
			<td class="c2">長閑</td>
			<td class="c3">悠闲 宁静</td>
		</tr>
		<tr>
			<td class="c1">おごそか</td>
			<td class="c2">厳か</td>
			<td class="c3">严肃 庄严 庄重</td>
		</tr>
		<tr>
			<td class="c1">おろそか</td>
			<td class="c2">疎か</td>
			<td class="c3">疏忽 不认真 马虎</td>
		</tr>
		<tr>
			<td class="c1">あざやか</td>
			<td class="c2">鮮やか</td>
			<td class="c3">鲜艳的 巧妙的</td>
		</tr>
		<tr>
			<td class="c1">きらびやか</td>
			<td class="c2">煌びやか</td>
			<td class="c3">光辉 璀璨 夺目的</td>
		</tr>
		<tr>
			<td class="c1">はなやか</td>
			<td class="c2">華やか</td>
			<td class="c3">华丽的 辉煌 盛大</td>
		</tr>
		<tr>
			<td class="c1">はれやか</td>
			<td class="c2">晴れやか</td>
			<td class="c3">晴朗 愉快 明朗</td>
		</tr>
		<tr>
			<td class="c1">しとやか</td>
			<td class="c2">淑やか</td>
			<td class="c3">端庄 文雅 安详</td>
		</tr>
		<tr>
			<td class="c1">しなやか</td>
			<td class="c2">しなやか</td>
			<td class="c3 red">柔软 灵活 婀娜 柔美</td>
		</tr>
		<tr>
			<td class="c1">すこやか</td>
			<td class="c2">健やか</td>
			<td class="c3">健壮 强壮</td>
		</tr>
		<tr>
			<td class="c1">すみやか</td>
			<td class="c2">速やか</td>
			<td class="c3">及时 迅速 快速</td>
		</tr>
		<tr>
			<td class="c1">かるやか</td>
			<td class="c2">軽やか</td>
			<td class="c3">轻飘飘 轻快</td>
		</tr>
		<tr>
			<td class="c1">つややか</td>
			<td class="c2">艶やか</td>
			<td class="c3">鲜艳 有光泽</td>
		</tr>
		<tr>
			<td class="c1">なだらか</td>
			<td class="c2">なだらか</td>
			<td class="c3">平缓 坡度小</td>
		</tr>
		<tr>
			<td class="c1">ほがらか</td>
			<td class="c2">朗らか</td>
			<td class="c3">开朗 爽卡 爽朗</td>
		</tr>
		<tr>
			<td class="c1">おおらか</td>
			<td class="c2">大らか</td>
			<td class="c3">豁达 大方 心胸开阔</td>
		</tr>
		<tr>
			<td class="c1">にわか</td>
			<td class="c2">俄か</td>
			<td class="c3">突然 忽然 马上 立刻</td>
		</tr>
		<tr>
			<td class="c1">ひややか</td>
			<td class="c2">冷やか</td>
			<td class="c3">凉 冷冰冰</td>
		</tr>
		<tr>
			<td class="c1">きよらか</td>
			<td class="c2">清らか</td>
			<td class="c3">清澈 干净 纯洁</td>
		</tr>
		<tr>
			<td class="c1">かすか</td>
			<td class="c2">微か</td>
			<td class="c3">微弱 模糊 朦胧</td>
		</tr>
		<tr>
			<td class="c1">ひそか</td>
			<td class="c2">密か</td>
			<td class="c3">秘密 暗中</td>
		</tr>
		<!-- 形容动词 -->
		<tr>
			<td class="c1">いき</td>
			<td class="c2">粋</td>
			<td class="c3">潇洒的</td>
		</tr>
		<tr>
			<td class="c1">うらはら</td>
			<td class="c2">裏腹</td>
			<td class="c3">相反 言行不一</td>
		</tr>
		<tr>
			<td class="c1">あやふや</td>
			<td class="c2">あやふや</td>
			<td class="c3">含糊 模棱两可</td>
		</tr>
		<tr>
			<td class="c1">うやむや</td>
			<td class="c2">有耶無耶</td>
			<td class="c3">含糊不清 稀里糊涂</td>
		</tr>
		<tr>
			<td class="c1">ありのまま</td>
			<td class="c2">ありのまま</td>
			<td class="c3">如实的 按照原样的</td>
		</tr>
		<tr>
			<td class="c1">おっくう</td>
			<td class="c2">億劫</td>
			<td class="c3">怕麻烦 懒得做</td>
		</tr>
		<tr>
			<td class="c1">かたくな</td>
			<td class="c2">頑な</td>
			<td class="c3">顽固的</td>
		</tr>
		<tr>
			<td class="c1">きまぐれ</td>
			<td class="c2">気まぐれ</td>
			<td class="c3">天气或人的性情变化无常</td>
		</tr>
		<tr>
			<td class="c1">じんそく</td>
			<td class="c2">迅速</td>
			<td class="c3">迅速地</td>
		</tr>
		<tr>
			<td class="c1">ぞんざい</td>
			<td class="c2">ぞんざい</td>
			<td class="c3">草率 马虎 粗心大意</td>
		</tr>
		<tr>
			<td class="c1">ふんだん</td>
			<td class="c2">ふんだん</td>
			<td class="c3">大量的 过量</td>
		</tr>
		<tr>
			<td class="c1">まちまち</td>
			<td class="c2">まちまち</td>
			<td class="c3">众口难调 各式各样 不同的</td>
		</tr>
		<tr>
			<td class="c1">たいまん</td>
			<td class="c2">怠慢</td>
			<td class="c3">懈怠 玩忽职守</td>
		</tr>
		<tr>
			<td class="c1">しょんぼり</td>
			<td class="c2">しょんぼり</td>
			<td class="c3">无精打采地</td>
		</tr>
		<tr>
			<td class="c1">ぽかん</td>
			<td class="c2">ポカン</td>
			<td class="c3">发呆状</td>
		</tr>
		<tr>
			<td class="c1">じわり</td>
			<td class="c2">じわり</td>
			<td class="c3">逐步 一点点地</td>
		</tr>
		<tr>
			<td class="c1">きらり</td>
			<td class="c2">キラリ</td>
			<td class="c3">一闪 一晃 一瞬间</td>
		</tr>
		<tr>
			<td class="c1">なんなりと</td>
			<td class="c2">何なりと</td>
			<td class="c3">无论什么</td>
		</tr>
		<tr>
			<td class="c1">いやに</td>
			<td class="c2">嫌に</td>
			<td class="c3">离奇地 非常 很</td>
		</tr>
		<tr>
			<td class="c1">やけに</td>
			<td class="c2">やけに</td>
			<td class="c3">过分 非常</td>
		</tr>
		<tr>
			<td class="c1">やたらに</td>
			<td class="c2">やたらに</td>
			<td class="c3">胡乱 很 非常</td>
		</tr>
		<tr>
			<td class="c1">むやみに</td>
			<td class="c2">無暗に</td>
			<td class="c3">胡乱 过度 过分 不考虑后果</td>
		</tr>
		<tr>
			<td class="c1">ことに</td>
			<td class="c2">ことに</td>
			<td class="c3">非常 特别 格外 尤其</td>
		</tr>
		<tr>
			<td class="c1">とりわけ</td>
			<td class="c2">とりわけ</td>
			<td class="c3">非常 特别 格外 尤其</td>
		</tr>
		<tr>
			<td class="c1">ひときわ</td>
			<td class="c2">一際</td>
			<td class="c3">非常显眼 特别出众</td>
		</tr>
		<tr>
			<td class="c1">とびきり</td>
			<td class="c2">飛び切り</td>
			<td class="c3">卓越 出众 非常 格外</td>
		</tr>
		<tr>
			<td class="c1">だんぜん</td>
			<td class="c2">断然</td>
			<td class="c3">坚决 果断 非常 格外</td>
		</tr>
		<tr>
			<td class="c1">そっこく</td>
			<td class="c2">即刻</td>
			<td class="c3">立刻 马上</td>
		</tr>
		<tr>
			<td class="c1">そくざに</td>
			<td class="c2">即座に</td>
			<td class="c3">当场 立即</td>
		</tr>
		<tr>
			<td class="c1">とっさに</td>
			<td class="c2">咄嗟に</td>
			<td class="c3">瞬间 立刻</td>
		</tr>
		<tr>
			<td class="c1">きゅうきょ</td>
			<td class="c2">急遽</td>
			<td class="c3">急忙 仓皇 匆忙</td>
		</tr>
		<tr>
			<td class="c1">とっくに</td>
			<td class="c2">とっくに</td>
			<td class="c3">早就 早已经</td>
		</tr>
		<tr>
			<td class="c1">かねがね</td>
			<td class="c2">かねがね</td>
			<td class="c3">早就 很早以前就</td>
		</tr>
		<tr>
			<td class="c1">かねて</td>
			<td class="c2">かねて</td>
			<td class="c3">早先 以前</td>
		</tr>
		<tr>
			<td class="c1">じきに</td>
			<td class="c2">直に</td>
			<td class="c3">立刻 马上</td>
		</tr>
		<tr>
			<td class="c1">いまにも</td>
			<td class="c2">今にも</td>
			<td class="c3 red">眼看就要 马上要</td>
		</tr>
		<tr>
			<td class="c1">いかにも..ようだ</td>
			<td class="c2">如何にも</td>
			<td class="c3">的确像</td>
		</tr>
		<tr>
			<td class="c1">どうやら..ようだ</td>
			<td class="c2">どうやら..ようだ</td>
			<td class="c3">似乎 好像 总算要</td>
		</tr>
		<tr>
			<td class="c1">どうやら</td>
			<td class="c2">どうやら</td>
			<td class="c3">1.多半 大概要 2.好不容易才</td>
		</tr>
		<tr>
			<td class="c1">いっけん</td>
			<td class="c2">一見</td>
			<td class="c3">咋一看</td>
		</tr>
		<tr>
			<td class="c1">ろくに..ない</td>
			<td class="c2">ろくに..ない</td>
			<td class="c3">(不能)充分地..</td>
		</tr>
		<tr>
			<td class="c1">いっこうに..ない</td>
			<td class="c2">一向に..ない</td>
			<td class="c3">完全 全然 一点也不</td>
		</tr>
		<tr>
			<td class="c1">どうにも..ない</td>
			<td class="c2">どうにも..ない</td>
			<td class="c3">无论怎么也(做不到)</td>
		</tr>
		<tr>
			<td class="c1">さほど..ない</td>
			<td class="c2">さほど..ない</td>
			<td class="c3">并没有那么...</td>
		</tr>
		<tr>
			<td class="c1">とうてい..ない</td>
			<td class="c2">到底..ない</td>
			<td class="c3">怎么样也(完成不了)</td>
		</tr>
		<tr>
			<td class="c1">よもや</td>
			<td class="c2">よもや..だろう</td>
			<td class="c3">=まさか 难道说 竟然</td>
		</tr>
		<tr>
			<td class="c1">てっきり</td>
			<td class="c2">てっきり</td>
			<td class="c3">以为一定是...但</td>
		</tr>
		<tr>
			<td class="c1">いちずに</td>
			<td class="c2">一途に</td>
			<td class="c3">专心 一心一意</td>
		</tr>
		<tr>
			<td class="c1">いっせいに</td>
			<td class="c2">一斉に</td>
			<td class="c3">一齐 同时</td>
		</tr>
		<tr>
			<td class="c1">いまさら</td>
			<td class="c2">今更</td>
			<td class="c3">事到如今</td>
		</tr>
		<tr>
			<td class="c1">いまだ</td>
			<td class="c2">未だ</td>
			<td class="c3">尚未</td>
		</tr>
		<tr>
			<td class="c1">いまに</td>
			<td class="c2">今に</td>
			<td class="c3 red">早晚 迟早有一天</td>
		</tr>
		<tr>
			<td class="c1">いまにも</td>
			<td class="c2">いまにも...そうだ</td>
			<td class="c3 red">眼看就要 马上就要(下雨)</td>
		</tr>
		<tr>
			<td class="c1 red">つぶさに</td>
			<td class="c2">具に</td>
			<td class="c3">具体地</td>
		</tr>
		<tr>
			<td class="c1">いまだに</td>
			<td class="c2">未だに</td>
			<td class="c3">仍然 还</td>
		</tr>
		<tr>
			<td class="c1">かねて</td>
			<td class="c2">予て</td>
			<td class="c3">以前 先前 早前</td>
		</tr>
		<tr>
			<td class="c1">あらかじめ</td>
			<td class="c2">予め</td>
			<td class="c3">事先 预先做完</td>
		</tr>
		<tr>
			<td class="c1">まえもって</td>
			<td class="c2">前もって</td>
			<td class="c3">事先 预先</td>
		</tr>
		<tr>
			<td class="c1">いくぶん</td>
			<td class="c2">幾分</td>
			<td class="c3">些许 少许</td>
		</tr>
		<tr>
			<td class="c1">いささか</td>
			<td class="c2">些か</td>
			<td class="c3">些许 少许</td>
		</tr>
		<tr>
			<td class="c1">いっそ</td>
			<td class="c2">いっそ</td>
			<td class="c3">干脆 索性 倒不如</td>
		</tr>
		<tr>
			<td class="c1">いっそう</td>
			<td class="c2">一層</td>
			<td class="c3 red">更加 越发</td>
		</tr>
		<tr>
			<td class="c1">おおかた</td>
			<td class="c2">大方</td>
			<td class="c3">大部分</td>
		</tr>
		<tr>
			<td class="c1">そうじて</td>
			<td class="c2">総じて</td>
			<td class="c3">总得来说</td>
		</tr>
		<tr>
			<td class="c1">おおよそ</td>
			<td class="c2">大凡</td>
			<td class="c3">大体上 总得来说</td>
		</tr>
		<tr>
			<td class="c1">あのずと</td>
			<td class="c2">自ずと</td>
			<td class="c3">自然而然的</td>
		</tr>
		<tr>
			<td class="c1">ひとりでに</td>
			<td class="c2">独りで</td>
			<td class="c3">(门)自动开了 自然而然</td>
		</tr>
		<tr>
			<td class="c1">かろうじて</td>
			<td class="c2">辛うじて</td>
			<td class="c3">勉勉强强 好不容易</td>
		</tr>
		<tr>
			<td class="c1">どうにか</td>
			<td class="c2">どうにか</td>
			<td class="c3">想方设法 凑合 勉强</td>
		</tr>
		<tr>
			<td class="c1">なるたけ</td>
			<td class="c2">なるたけ</td>
			<td class="c3">尽量 尽可能</td>
		</tr>
		<tr>
			<td class="c1">ことごとく</td>
			<td class="c2">悉く</td>
			<td class="c3">全部 无一例外</td>
		</tr>
		<tr>
			<td class="c1">のきなみ</td>
			<td class="c2">軒並み</td>
			<td class="c3">挨家挨户 一律 一个个</td>
		</tr>
		<tr>
			<td class="c1">くまなく</td>
			<td class="c2">隈なく</td>
			<td class="c3">到处 全部地方</td>
		</tr>
		<tr>
			<td class="c1">ねこそぎ</td>
			<td class="c2">根こそぎ</td>
			<td class="c3">根除 全部拿走 一点不留</td>
		</tr>
		<tr>
			<td class="c1">しきりに</td>
			<td class="c2">頻りに</td>
			<td class="c3">频繁 不断</td>
		</tr>
		<tr>
			<td class="c1">とかく</td>
			<td class="c2">とかく</td>
			<td class="c3">表倾向 动不动容易..(がち)</td>
		</tr>、
		<tr>
			<td class="c1">とかく</td>
			<td class="c2">とかく</td>
			<td class="c3">不知不觉间</td>
		</tr>
		<tr>
			<td class="c1">はなはだ</td>
			<td class="c2">甚だ</td>
			<td class="c3">非常 极度</td>
		</tr>
		<tr>
			<td class="c1">すこぶる</td>
			<td class="c2">頗る</td>
			<td class="c3">很 非常</td>
		</tr>
		<tr>
			<td class="c1">ばくぜん</td>
			<td class="c2">漠然</td>
			<td class="c3">模糊 含糊 笼统</td>
		</tr>
		<tr>
			<td class="c1">ぼうぜん</td>
			<td class="c2">呆然</td>
			<td class="c3">发呆 发愣</td>
		</tr>
		<tr>
			<td class="c1">がぜん</td>
			<td class="c2">俄然</td>
			<td class="c3">忽然 突然</td>
		</tr>
		<tr>
			<td class="c1">ひたすら</td>
			<td class="c2">ひたすら</td>
			<td class="c3">一味地 只管 一个劲地</td>
		</tr>
		<tr>
			<td class="c1">もっぱら</td>
			<td class="c2">専ら</td>
			<td class="c3">专门 主要</td>
		</tr>
		<tr>
			<td class="c1">ひとまず</td>
			<td class="c2">一先ず</td>
			<td class="c3">姑且 暂时</td>
		</tr>
		<tr>
			<td class="c1">ひとえに</td>
			<td class="c2">偏に</td>
			<td class="c3">衷心 诚心 完全</td>
		</tr>
		<tr>
			<td class="c1">ひいて(は)</td>
			<td class="c2">ひいて(は)</td>
			<td class="c3">进而 还有</td>
		</tr>
		<tr>
			<td class="c1">まして</td>
			<td class="c2">況して</td>
			<td class="c3">更何况</td>
		</tr>
		<tr>
			<td class="c1">もろに</td>
			<td class="c2">もろに</td>
			<td class="c3">全面 迎面 无处不</td>
		</tr>
		<tr>
			<td class="c1">もはや</td>
			<td class="c2">最早</td>
			<td class="c3">早已 事到如今已经来不及了</td>
		</tr>
		<tr>
			<td class="c1">よほど</td>
			<td class="c2">余程</td>
			<td class="c3">相当</td>
		</tr>
		<tr>
			<td class="c1">ちょくちょく</td>
			<td class="c2">ちょくちょく</td>
			<td class="c3">经常 时常</td>
		</tr>
		<tr>
			<td class="c1">いっさい</td>
			<td class="c2">一切</td>
			<td class="c3">一切　所有 完全</td>
		</tr>
		<tr>
			<td class="c1">ひといちばい</td>
			<td class="c2">人一倍</td>
			<td class="c3">比别人加倍..</td>
		</tr>
		<tr>
			<td class="c1">ときおり</td>
			<td class="c2">時折</td>
			<td class="c3">有时 偶尔</td>
		</tr>
		<tr>
			<td class="c1">ほっと(する)</td>
			<td class="c2">ほっと(する)</td>
			<td class="c3">放心</td>
		</tr>
		<tr>
			<td class="c1">ふいに</td>
			<td class="c2">不意に</td>
			<td class="c3">意外</td>
		</tr>
		<tr>
			<td class="c1">まるごと</td>
			<td class="c2">丸ごと</td>
			<td class="c3">整个 全部</td>
		</tr>
		<tr>
			<td class="c1">うっとり</td>
			<td class="c2">うっとり</td>
			<td class="c3">发呆 走神</td>
		</tr>
		<tr>
			<td class="c1">いとも</td>
			<td class="c2">最も</td>
			<td class="c3">很 非常</td>
		</tr>
		<tr>
			<td class="c1">ますます</td>
			<td class="c2">ますます</td>
			<td class="c3">越来越...</td>
		</tr>
		<tr>
			<td class="c1">うすうす</td>
			<td class="c2">薄々</td>
			<td class="c3">隐隐约约感觉到 总觉得</td>
		</tr>
		<tr>
			<td class="c1">てきぱき</td>
			<td class="c2">テキパキ</td>
			<td class="c3">麻利的 干净利落的</td>
		</tr>
		<tr>
			<td class="c1">すんなり</td>
			<td class="c2">すんなり</td>
			<td class="c3">顺利 容易 毫不费力 苗条</td>
		</tr>
		<tr>
			<td class="c1">むしょうに</td>
			<td class="c2">無性に</td>
			<td class="c3">情不自禁 非常想 很</td>
		</tr>
		<tr>
			<td class="c1">もっとも</td>
			<td class="c2">最も</td>
			<td class="c3">最...</td>
		</tr>
		<tr>
			<td class="c1">もっとも</td>
			<td class="c2">もっとも</td>
			<td class="c3">但是 话虽如此</td>
		</tr>
		<tr>
			<td class="c1">もっともだ</td>
			<td class="c2">のももっともだ</td>
			<td class="c3">..是理所当然的</td>
		</tr>
		<tr>
			<td class="c1">どうせ</td>
			<td class="c2">后接...なら</td>
			<td class="c3">反正怎样都会...怎么都要...</td>
		</tr>

		<!-- 特殊意思的词汇 -->
		<tr>
			<td class="c1">しつけ</td>
			<td class="c2">躾</td>
			<td class="c3">教养</td>
		</tr>
		<tr>
			<td class="c1">ゆとり</td>
			<td class="c2">裕</td>
			<td class="c3">绰绰有余 富余 松弛感</td>
		</tr>
		<tr>
			<td class="c1">ひび</td>
			<td class="c2">罅</td>
			<td class="c3">裂缝</td>
		</tr>
		<tr>
			<td class="c1">みぞ</td>
			<td class="c2">溝</td>
			<td class="c3">水沟</td>
		</tr>
		<tr>
			<td class="c1">ありきたり</td>
			<td class="c2">在り来り</td>
			<td class="c3">很平凡 普通 没啥特色</td>
		</tr>
		<tr>
			<td class="c1">ありふれた</td>
			<td class="c2">ありふれた</td>
			<td class="c3">平凡的 常见的 司空见惯的</td>
		</tr>
		<tr>
			<td class="c1">しゅし</td>
			<td class="c2">趣旨</td>
			<td class="c3">宗旨</td>
		</tr>
		<tr>
			<td class="c1">あとまわし</td>
			<td class="c2">後回し</td>
			<td class="c3">推迟 之后再做</td>
		</tr>
		<tr>
			<td class="c1">ねまわし</td>
			<td class="c2">根回し</td>
			<td class="c3">事前工作 提前准备 打下基础</td>
		</tr>
		<tr>
			<td class="c1">てまわし</td>
			<td class="c2">手回し</td>
			<td class="c3">准备 预先策划 布置安排 用手摇动</td>
		</tr>
		<tr>
			<td class="c1">したじ</td>
			<td class="c2">下地</td>
			<td class="c3">准备工作 基本功 资质</td>
		</tr>
		<tr>
			<td class="c1">いちにん</td>
			<td class="c2">一任</td>
			<td class="c3">完全委托</td>
		</tr>
		<tr>
			<td class="c1">たいか</td>
			<td class="c2">大家</td>
			<td class="c3">大师 专家 名门 大户人家</td>
		</tr>
		<tr>
			<td class="c1">いしょく</td>
			<td class="c2">異色</td>
			<td class="c3">独具一格的 与众不同的</td>
		</tr>
		<tr>
			<td class="c1">うぬぼれ</td>
			<td class="c2">自惚れ</td>
			<td class="c3">自负 自满 自大 骄傲</td>
		</tr>
		<tr>
			<td class="c1">うらづけ</td>
			<td class="c2">裏付け</td>
			<td class="c3">证据 保证 根据</td>
		</tr>
		<tr>
			<td class="c1">いきどおり</td>
			<td class="c2">憤り</td>
			<td class="c3">愤怒</td>
		</tr>
		<tr>
			<td class="c1">つぐない</td>
			<td class="c2">償い</td>
			<td class="c3">补偿 赔偿</td>
		</tr>
		<tr>
			<td class="c1">おもいつき</td>
			<td class="c2">思い付き</td>
			<td class="c3 red">偶然的想法 灵光一闪</td>
		</tr>
		<tr>
			<td class="c1">がっち</td>
			<td class="c2">合致</td>
			<td class="c3">一致 符合 吻合</td>
		</tr>
		<tr>
			<td class="c1">いっち</td>
			<td class="c2">一致</td>
			<td class="c3">符合 吻合</td>
		</tr>
		<tr>
			<td class="c1">かみ</td>
			<td class="c2">加味</td>
			<td class="c3">放进 掺和 采纳(意见) 采取</td>
		</tr>
		<tr>
			<td class="c1">きがね</td>
			<td class="c2">気兼ね</td>
			<td class="c3">客气 拘谨 过分在意别人感受感到不自在</td>
		</tr>
		<tr>
			<td class="c1">きよ</td>
			<td class="c2">寄与</td>
			<td class="c3">(对社会)贡献 有助于</td>
		</tr>
		<tr>
			<td class="c1">ぎょうてん</td>
			<td class="c2">仰天</td>
			<td class="c3 red">非常吃惊 大吃一惊</td>
		</tr>
		<tr>
			<td class="c1">くぎり</td>
			<td class="c2">区切り</td>
			<td class="c3">文章段落 事情的分阶段</td>
		</tr>
		<tr>
			<td class="c1">くちだし</td>
			<td class="c2">口出し</td>
			<td class="c3">插嘴 多言 干预</td>
		</tr>
		<tr>
			<td class="c1">くめん</td>
			<td class="c2">工面</td>
			<td class="c3">筹措 筹钱</td>
		</tr>
		<tr>
			<td class="c1">ちょうたつ</td>
			<td class="c2">調達</td>
			<td class="c3">筹措 筹备 筹钱</td>
		</tr>
		<tr>
			<td class="c1">けいい</td>
			<td class="c2">経緯</td>
			<td class="c3">事件经过 原委 来龙去脉</td>
		</tr>
		<tr>
			<td class="c1">けはい</td>
			<td class="c2">気配</td>
			<td class="c3 red">总感觉.. 有苗头 倾向 迹象</td>
		</tr>
		<tr>
			<td class="c1">こころがけ</td>
			<td class="c2">心掛けて</td>
			<td class="c3">留心 注意 用心 努力</td>
		</tr>
		<tr>
			<td class="c1">きごころ</td>
			<td class="c2">気心</td>
			<td class="c3">性情 脾气</td>
		</tr>
		<tr>
			<td class="c1">したごころ</td>
			<td class="c2">下心</td>
			<td class="c3 red">别有用心</td>
		</tr>
		<tr>
			<td class="c1">しわざ</td>
			<td class="c2">仕業</td>
			<td class="c3">搞的鬼 见不得人的勾当(负面)</td>
		</tr>
		<tr>
			<td class="c1">じつざい</td>
			<td class="c2">実在(する)</td>
			<td class="c3">真实存在</td>
		</tr>
		<tr>
			<td class="c1">しゅうそく</td>
			<td class="c2">終息</td>
			<td class="c3">结束 终结 平息</td>
		</tr>
		<tr>
			<td class="c1">しゅうそく</td>
			<td class="c2">収束</td>
			<td class="c3">结束 了解</td>
		</tr>
		<tr>
			<td class="c1">けっそく</td>
			<td class="c2">結束</td>
			<td class="c3 red">捆绑 捆扎 团结起来</td>
		</tr>
		<tr>
			<td class="c1">べんめい</td>
			<td class="c2">弁明</td>
			<td class="c3">辩解 辩白 说明</td>
		</tr>
		<tr>
			<td class="c1">せんぽう</td>
			<td class="c2">先方</td>
			<td class="c3">对方</td>
		</tr>
		<tr>
			<td class="c1">ねんとう</td>
			<td class="c2">念頭</td>
			<td class="c3">念頭に置く 念頭にない (没)放在心上</td>
		</tr>
		<tr>
			<td class="c1">そぶり</td>
			<td class="c2">素振り</td>
			<td class="c3">态度 行为 举止 表情</td>
		</tr>
		<tr>
			<td class="c1">てあて</td>
			<td class="c2">手当て</td>
			<td class="c3">津贴 补贴 抢救 治疗</td>
		</tr>
		<tr>
			<td class="c1">てだて</td>
			<td class="c2">手立て</td>
			<td class="c3">手段 方法 办法</td>
		</tr>
		<tr>
			<td class="c1">てかげん</td>
			<td class="c2">手加減</td>
			<td class="c3">调整力度 掌握分寸 手加減を知らない不懂得把握分寸</td>
		</tr>
		<tr>
			<td class="c1">てまわし</td>
			<td class="c2">手回し</td>
			<td class="c3">准备 预先策划 布置安排 用手摇动</td>
		</tr>
		<tr>
			<td class="c1">手わけ</td>
			<td class="c2">手分け</td>
			<td class="c3">分头行动</td>
		</tr>
		<tr>
			<td class="c1">てぎわ</td>
			<td class="c2">手際</td>
			<td class="c3">手法 技巧 本事 本领</td>
		</tr>
		<tr>
			<td class="c1">おてあげ</td>
			<td class="c2">お手上げ</td>
			<td class="c3">束手无策 毫无办法 只好认输</td>
		</tr>
		<tr>
			<td class="c1">とうしゅう</td>
			<td class="c2">踏襲</td>
			<td class="c3">继承 世袭制</td>
		</tr>
		<tr>
			<td class="c1">ざっとう</td>
			<td class="c2">雑踏</td>
			<td class="c3">人多拥挤 人山人海</td>
		</tr>
		<tr>
			<td class="c1">とうめん</td>
			<td class="c2">当面</td>
			<td class="c3">眼下 当前面对 面临</td>
		</tr>
		<tr>
			<td class="c1">ばっすい</td>
			<td class="c2">抜粋</td>
			<td class="c3">(论文)摘录</td>
		</tr>
		<tr>
			<td class="c1">へいこう</td>
			<td class="c2">閉口</td>
			<td class="c3">闭口无言 受不了 困惑 为难 吃不消</td>
		</tr>
		<tr>
			<td class="c1">みなり</td>
			<td class="c2">身なり</td>
			<td class="c3">装作打扮 装束</td>
		</tr>
		<tr>
			<td class="c1">めど</td>
			<td class="c2">目処</td>
			<td class="c3">目标 眉目 头绪</td>
		</tr>
		<tr>
			<td class="c1">らくたん</td>
			<td class="c2">落胆</td>
			<td class="c3 red">沮丧 失望 伤心</td>
		</tr>
		<tr>
			<td class="c1">しかけ</td>
			<td class="c2">仕掛け</td>
			<td class="c3">开始着手 装置</td>
		</tr>
		<tr>
			<td class="c1">ふんきゅう</td>
			<td class="c2">紛糾</td>
			<td class="c3">混乱 纠纷</td>
		</tr>
		<tr>
			<td class="c1">だしん</td>
			<td class="c2">打診</td>
			<td class="c3">询问意向</td>
		</tr>
		<tr>
			<td class="c1">てがかり</td>
			<td class="c2">手掛かり</td>
			<td class="c3 red">线索 头绪</td>
		</tr>
		<tr>
			<td class="c1">てがける</td>
			<td class="c2">手掛ける</td>
			<td class="c3 red">亲自动手</td>
		</tr>
		<tr>
			<td class="c1">めもり</td>
			<td class="c2">目盛り</td>
			<td class="c3">(温度计)刻度</td>
		</tr>
		<tr>
			<td class="c1">そうば</td>
			<td class="c2">相場</td>
			<td class="c3">市场行情</td>
		</tr>
		<tr>
			<td class="c1">あんど</td>
			<td class="c2">安堵(する)</td>
			<td class="c3">安心 放心</td>
		</tr>
		<tr>
			<td class="c1">しゅつば</td>
			<td class="c2">出馬</td>
			<td class="c3">出马 参加选举</td>
		</tr>
		<tr>
			<td class="c1">だいごみ</td>
			<td class="c2">醍醐味</td>
			<td class="c3">妙趣 乐趣</td>
		</tr>
		<tr>
			<td class="c1">ぼんやり</td>
			<td class="c2">ぼんやり</td>
			<td class="c3">模糊 马虎 无所事事 发呆</td>
		</tr>
		<tr>
			<td class="c1">ひんやり</td>
			<td class="c2">ひんやり</td>
			<td class="c3">凉飕飕的</td>
		</tr>
		<tr>
			<td class="c1">ひんやり</td>
			<td class="c2">ひんやり</td>
			<td class="c3">凉飕飕的</td>
		</tr>
		<tr>
			<td class="c1">あんまり</td>
			<td class="c2">あまり口语形式</td>
			<td class="c3">非常，太..</td>
		</tr>
		<tr>
			<td class="c1">なにより</td>
			<td class="c2">何より</td>
			<td class="c3">比什么都好 再好不过</td>
		</tr>
		<tr>
			<td class="c1">たかだか</td>
			<td class="c2">高高</td>
			<td class="c3">最多 顶多=せいぜい </td>
		</tr>
		<tr>
			<td class="c1">ただでさえ</td>
			<td class="c2">ただでさえ</td>
			<td class="c3">本来就已经</td>
		</tr>
		<tr>
			<td class="c1">~のだったら</td>
			<td class="c2">~のだったら</td>
			<td class="c3">如果...的话 说到..</td>
		</tr>
		<tr>
			<td class="c1">くらいなら</td>
			<td class="c2">后接...ほうが...</td>
			<td class="c3">比起做A，不如做B</td>
		</tr>
		<tr>
			<td class="c1">~そこすれ</td>
			<td class="c2">~そこすれ</td>
			<td class="c3">只有 只会</td>
		</tr>
		<tr>
			<td class="c1">~といった</td>
			<td class="c2">=など</td>
			<td class="c3">举例 类似于</td>
		</tr>
		<tr>
			<td class="c1">~もの/~もん</td>
			<td class="c2">常与だって一起用</td>
			<td class="c3">表原因..因为..</td>
		</tr>
		<tr>
			<td class="c1">たって</td>
			<td class="c2">=たとえっても</td>
			<td class="c3">即使...也...;虽然...但是...</td>
		</tr>
		<tr>
			<td class="c1">というもの</td>
			<td class="c2">前面接时间</td>
			<td class="c3">这段时间以来一直..</td>
		</tr>
		<tr>
			<td class="c1">Vます＋たて</td>
			<td class="c2">Vます＋たて</td>
			<td class="c3">刚刚xx完</td>
		</tr>
		<tr>
			<td class="c1">Vます＋とおす</td>
			<td class="c2">Vます＋通す</td>
			<td class="c3">做某事坚持到结束</td>
		</tr>
		<tr>
			<td class="c1">Vます＋まくる</td>
			<td class="c2">Vます＋まくる</td>
			<td class="c3">一直重复做某事 总是做某事</td>
		</tr>
		<tr>
			<td class="c1">やさきに</td>
			<td class="c2">矢先に</td>
			<td class="c3">正要...的时候</td>
		</tr>
		<tr>
			<td class="c1">ごとに</td>
			<td class="c2">＝たびに</td>
			<td class="c3">每当...时候 每隔...</td>
		</tr>
		<tr>
			<td class="c1">ゆうち</td>
			<td class="c2">誘致</td>
			<td class="c3">招揽(外资) 招致</td>
		</tr>
		<tr>
			<td class="c1">にかけては</td>
			<td class="c2">にかけては</td>
			<td class="c3">在...方面</td>
		</tr>
		<tr>
			<td class="c1">にそって</td>
			<td class="c2">に沿って</td>
			<td class="c3">沿着方针 沿着河流</td>
		</tr>
		<tr>
			<td class="c1">といっても</td>
			<td class="c2">と言っても</td>
			<td class="c3">虽说...</td>
		</tr>
		<tr>
			<td class="c1">わりには</td>
			<td class="c2">わりには</td>
			<td class="c3">虽然...</td>
		</tr>
		<tr>
			<td class="c1">だけましだ</td>
			<td class="c2">だけましだ</td>
			<td class="c3">幸好...</td>
		</tr>
		<tr>
			<td class="c1">かつ</td>
			<td class="c2">且つ</td>
			<td class="c3">并且... 一边一边</td>
		</tr>
		<tr>
			<td class="c1">かえって</td>
			<td class="c2">かえって</td>
			<td class="c3">相反</td>
		</tr>
		<tr>
			<td class="c1">おのずと</td>
			<td class="c2">自ずと</td>
			<td class="c3">自然而然的</td>
		</tr>
		<tr>
			<td class="c1">おおよそ</td>
			<td class="c2">大凡</td>
			<td class="c3">大概情况 大约 大概</td>
		</tr>
		<tr>
			<td class="c1">いとも</td>
			<td class="c2">いとも</td>
			<td class="c3">非常 很..</td>
		</tr>
		<tr>
			<td class="c1">いたって</td>
			<td class="c2">至って</td>
			<td class="c3">非常 很..</td>
		</tr>
		<tr>
			<td class="c1">あたかも</td>
			<td class="c2">恰も</td>
			<td class="c3">恰似 宛如</td>
		</tr>
		<tr>
			<td class="c1">うらはら</td>
			<td class="c2">裏腹</td>
			<td class="c3">相反</td>
		</tr>
		<tr>
			<td class="c1">りふじん</td>
			<td class="c2">理不尽</td>
			<td class="c3">不讲道理</td>
		</tr>
		<tr>
			<td class="c1">ゆううつ</td>
			<td class="c2">憂鬱</td>
			<td class="c3">抑郁 忧虑不安 沉闷</td>
		</tr>
		<tr>
			<td class="c1">むぼう</td>
			<td class="c2">無謀(な)</td>
			<td class="c3">欠考虑 鲁莽 草率</td>
		</tr>
		<tr>
			<td class="c1">面倒を見る</td>
			<td class="c2">面倒を見る</td>
			<td class="c3">照顾 照料</td>
		</tr>
		<tr>
			<td class="c1">むらがある</td>
			<td class="c2">ムラがある</td>
			<td class="c3">善变 变化无常</td>
		</tr>
		<tr>
			<td class="c1">なんだかんだ</td>
			<td class="c2">何だかんだ</td>
			<td class="c3">这样那样</td>
		</tr>
		<tr>
			<td class="c1">見る見るうちに</td>
			<td class="c2">見る見るうちに</td>
			<td class="c3">转眼之间</td>
		</tr>
		<tr>
			<td class="c1">くびになる</td>
			<td class="c2">首になる</td>
			<td class="c3">被解雇</td>
		</tr>
		<tr>
			<td class="c1">指を折る</td>
			<td class="c2">指を折る</td>
			<td class="c3">屈指可数</td>
		</tr>
		<tr>
			<td class="c1">きがすむ</td>
			<td class="c2">気が済む</td>
			<td class="c3">心满意足</td>
		</tr>
		<tr>
			<td class="c1">顔が広い</td>
			<td class="c2">顔が広い</td>
			<td class="c3">人脉广</td>
		</tr>
		<tr>
			<td class="c1">一目置く</td>
			<td class="c2">一目置く</td>
			<td class="c3">自认逊色一筹 比不过</td>
		</tr>
		<tr>
			<td class="c1">もってもほか</td>
			<td class="c2">以ての外</td>
			<td class="c3">意外 毫无道理</td>
		</tr>
		<tr>
			<td class="c1">ふにおちる</td>
			<td class="c2">腑に落ちる</td>
			<td class="c3">领会 理解 可疑(腑に落ちない)</td>
		</tr>
		<tr>
			<td class="c1">はなにかける</td>
			<td class="c2">鼻にかける</td>
			<td class="c3">骄傲自大</td>
		</tr>
		<tr>
			<td class="c1">そっぽをむく</td>
			<td class="c2">そっぽを向く</td>
			<td class="c3">无视别人</td>
		</tr>
		<tr>
			<td class="c1">さじをなげる</td>
			<td class="c2">匙を投げる</td>
			<td class="c3">甩手不干</td>
		</tr>
		<tr>
			<td class="c1">ぐっとくる</td>
			<td class="c2">グッとくる</td>
			<td class="c3">打动人心</td>
		</tr>
		<tr>
			<td class="c1">かたをもち</td>
			<td class="c2">肩を持ち</td>
			<td class="c3">支持某人 偏袒 袒护</td>
		</tr>
		<tr>
			<td class="c1">むねん</td>
			<td class="c2">無念</td>
			<td class="c3">后悔 懊悔</td>
		</tr>
		<tr>
			<td class="c1">しょうたい</td>
			<td class="c2">正体</td>
			<td class="c3">真面目 本来面目 神志 知觉</td>
		</tr>
		<tr>
			<td class="c1">だいごみ</td>
			<td class="c2">醍醐味</td>
			<td class="c3">趣味 乐趣</td>
		</tr>
		<tr>
			<td class="c1">ねんとうにない</td>
			<td class="c2">念頭にない</td>
			<td class="c3">没放在心上</td>
		</tr>
		<tr>
			<td class="c1">ねんとうに置く</td>
			<td class="c2">念頭に置く</td>
			<td class="c3">放在心上</td>
		</tr>
		<tr>
			<td class="c1">ストライキ</td>
			<td class="c2">strike</td>
			<td class="c3">罢工</td>
		</tr>
		<tr>
			<td class="c1">しきたり</td>
			<td class="c2">仕来り</td>
			<td class="c3">惯例 习惯</td>
		</tr>
		<tr>
			<td class="c1">まじまじ</td>
			<td class="c2">まじまじ</td>
			<td class="c3">目不转睛</td>
		</tr>
		<tr>
			<td class="c1">つきなみ</td>
			<td class="c2">月並み</td>
			<td class="c3">平凡 平庸</td>
		</tr>
		<tr>
			<td class="c1">おりあう</td>
			<td class="c2">折り合う</td>
			<td class="c3">互相和好 妥协 迁就 合得来</td>
		</tr>
		<tr>
			<td class="c1">まえぶれ</td>
			<td class="c2">前ぶれ</td>
			<td class="c3">提前预知 预兆</td>
		</tr>
		<tr>
			<td class="c1">もちきり</td>
			<td class="c2">持ち切り</td>
			<td class="c3">始终做一件事</td>
		</tr>
		<tr>
			<td class="c1">てきばき</td>
			<td class="c2">てきばき</td>
			<td class="c3">麻利 爽快</td>
		</tr>
		<tr>
			<td class="c1">うすうす</td>
			<td class="c2">薄々</td>
			<td class="c3">隐隐约约</td>
		</tr>
		<tr>
			<td class="c1">ますます</td>
			<td class="c2">ますます</td>
			<td class="c3">越来越..</td>
		</tr>
		<tr>
			<td class="c1">ノルマ</td>
			<td class="c2">Norma</td>
			<td class="c3">指标 工作指标</td>
		</tr>
		<tr>
			<td class="c1">ひとまず</td>
			<td class="c2">一先ず</td>
			<td class="c3">姑且 暂时</td>
		</tr>
		<tr>
			<td class="c1">ねこそぎ</td>
			<td class="c2">根こそぎ</td>
			<td class="c3">全部 一点不留</td>
		</tr>
		<tr>
			<td class="c1">くまなく</td>
			<td class="c2">隈なく</td>
			<td class="c3">到处 处处</td>
		</tr>
		<tr>
			<td class="c1">いっそ</td>
			<td class="c2">いっそ</td>
			<td class="c3">干脆 索性</td>
		</tr>
		<tr>
			<td class="c1">なるたけ</td>
			<td class="c2">成る丈</td>
			<td class="c3">尽量</td>
		</tr>
		<tr>
			<td class="c1">いささか</td>
			<td class="c2">些か</td>
			<td class="c3">略微 一点</td>
		</tr>
		<tr>
			<td class="c1">いかに</td>
			<td class="c2">如何に</td>
			<td class="c3">いかに..ても 无论 怎样</td>
		</tr>
		<tr>
			<td class="c1">いかにも</td>
			<td class="c2">いかにも</td>
			<td class="c3">的的确确 实在 果真 果然</td>
		</tr>
		<tr>
			<td class="c1">かねがね</td>
			<td class="c2">かねがね</td>
			<td class="c3">早就 很早之前就</td>
		</tr>
		<tr>
			<td class="c1">とびきり</td>
			<td class="c2">飛び切り</td>
			<td class="c3">卓越 出色 很 非常</td>
		</tr>
		<tr>
			<td class="c1">きらり</td>
			<td class="c2">キラリ</td>
			<td class="c3">闪光</td>
		</tr>
		<tr>
			<td class="c1">じわり</td>
			<td class="c2">地割</td>
			<td class="c3">逐步 一点点地...</td>
		</tr>
		<tr>
			<td class="c1">あんちょく</td>
			<td class="c2">安直</td>
			<td class="c3">便宜 简单 容易</td>
		</tr>
		<tr>
			<td class="c1">ちかづき</td>
			<td class="c2">近付き</td>
			<td class="c3">认识的人=知り合い</td>
		</tr>
		<tr>
			<td class="c1">いいはる</td>
			<td class="c2">言い張る</td>
			<td class="c3">固执己见</td>
		</tr>
		<tr>
			<td class="c1">たてかえる</td>
			<td class="c2">立て替える</td>
			<td class="c3">垫付钱</td>
		</tr>
		<tr>
			<td class="c1">きにさわる</td>
			<td class="c2">気に障る</td>
			<td class="c3">不愉快</td>
		</tr>
		<tr>
			<td class="c1">ぎょうてん</td>
			<td class="c2">仰天</td>
			<td class="c3">吃惊</td>
		</tr>
		<tr>
			<td class="c1">加味</td>
			<td class="c2">かみ</td>
			<td class="c3">加味道，采纳意见</td>
		</tr>
		<tr>
			<td class="c1">ぎんみ</td>
			<td class="c2">吟味</td>
			<td class="c3">考虑，斟酌</td>
		</tr>
		<tr>
			<td class="c1">あてはめる</td>
			<td class="c2">当てはめる</td>
			<td class="c3">适用 套用</td>
		</tr>
		<tr>
			<td class="c1">しがみつく</td>
			<td class="c2">しがみつく</td>
			<td class="c3">紧紧抓住</td>
		</tr>
		<tr>
			<td class="c1">すいこう</td>
			<td class="c2">遂行</td>
			<td class="c3">执行，完成</td>
		</tr>
		<tr>
			<td class="c1">可決</td>
			<td class="c2">かけつ</td>
			<td class="c3">通过</td>
		</tr>
		<tr>
			<td class="c1">くいとめる</td>
			<td class="c2">食い止める</td>
			<td class="c3">阻止，控制</td>
		</tr>
		<tr>
			<td class="c1">かかえこむ</td>
			<td class="c2">抱え込む</td>
			<td class="c3">抱着 承担</td>
		</tr>
		<tr>
			<td class="c1">かどう</td>
			<td class="c2">稼働</td>
			<td class="c3">劳动 开动 运转</td>
		</tr>
		<tr>
			<td class="c1">がいとう</td>
			<td class="c2">該当</td>
			<td class="c3">符合(规定 要求)</td>
		</tr>
		<tr>
			<td class="c1">ありふれる</td>
			<td class="c2">有り触れる</td>
			<td class="c3">老套 常见</td>
		</tr>
		<tr>
			<td class="c1">うろたえる</td>
			<td class="c2">狼狽える</td>
			<td class="c3">慌张，狼狈</td>
		</tr>
		<tr>
			<td class="c1">おもいつめる</td>
			<td class="c2">思い詰める</td>
			<td class="c3">冥思苦想</td>
		</tr>
		<tr>
			<td class="c1">きりだす</td>
			<td class="c2">切り出す</td>
			<td class="c3">开口，提起</td>
		</tr>
		<tr>
			<td class="c1">あんど</td>
			<td class="c2">安堵</td>
			<td class="c3">安心</td>
		</tr>
		<tr>
			<td class="c1">ばくろ</td>
			<td class="c2">暴露</td>
			<td class="c3">暴露</td>
		</tr>
		<tr>
			<td class="c1">うなだれる</td>
			<td class="c2">項垂れる</td>
			<td class="c3">垂头丧气</td>
		</tr>
		<tr>
			<td class="c1">じしゅく</td>
			<td class="c2">自粛する</td>
			<td class="c3">自我约束</td>
		</tr>
		<tr>
			<td class="c1">のりだす</td>
			<td class="c2">乗り出す</td>
			<td class="c3">着手 探出 出头露面 登上舞台</td>
		</tr>
		<tr>
			<td class="c1">ばっすい</td>
			<td class="c2">抜粋</td>
			<td class="c3">摘录</td>
		</tr>
		<tr>
			<td class="c1">かけつける</td>
			<td class="c2">駆け付ける</td>
			<td class="c3">赶往某个地方</td>
		</tr>
		<tr>
			<td class="c1">かさばる</td>
			<td class="c2">嵩張る</td>
			<td class="c3">增加 增大 体积大</td>
		</tr>
		<tr>
			<td class="c1 red">じゅうじ</td>
			<td class="c2">従事</td>
			<td class="c3">从事</td>
		</tr>
		<tr>
			<td class="c1 red">こうりょ</td>
			<td class="c2">考慮</td>
			<td class="c3">考虑</td>
		</tr>
		<tr>
			<td class="c1">失脚</td>
			<td class="c2">しっきゃく</td>
			<td class="c3">下台，垮台</td>
		</tr>
		<tr>
			<td class="c1">きゃっか</td>
			<td class="c2">却下</td>
			<td class="c3">驳回</td>
		</tr>
		<tr>
			<td class="c1">かみあう</td>
			<td class="c2">噛み合う</td>
			<td class="c3">吻合 一致</td>
		</tr>
		<tr>
			<td class="c1">しょくはつ</td>
			<td class="c2">触発 </td>
			<td class="c3">触发 受刺激</td>
		</tr>
		<tr>
			<td class="c1">きっこう</td>
			<td class="c2">拮抗</td>
			<td class="c3">势均力敌</td>
		</tr>
		<tr>
			<td class="c1 red">せんぷく</td>
			<td class="c2">潜伏</td>
			<td class="c3">潜伏 躲藏</td>
		</tr>
		<tr>
			<td class="c1">ゆきとどく</td>
			<td class="c2">行き届く</td>
			<td class="c3">周到 周密 无微不至</td>
		</tr>
		<tr>
			<td class="c1">けねん</td>
			<td class="c2">懸念</td>
			<td class="c3 red">挂念 惦记 担心 担忧</td>
		</tr>
		<tr>
			<td class="c1 red">ぼっとう</td>
			<td class="c2">没頭</td>
			<td class="c3">埋头于</td>
		</tr>
		<tr>
			<td class="c1">ちょうほう</td>
			<td class="c2">重宝</td>
			<td class="c3">珍惜 爱惜 方便 便利</td>
		</tr>
		<tr>
			<td class="c1">いよいよ</td>
			<td class="c2">いよいよ</td>
			<td class="c3">终于 越来越</td>
		</tr>
		<tr>
			<td class="c1">わずかに</td>
			<td class="c2">僅かに</td>
			<td class="c3">稍微 仅仅 好不容易</td>
		</tr>
		<tr>
			<td class="c1">やがて</td>
			<td class="c2">やがて</td>
			<td class="c3">不久后马上就要</td>
		</tr>
		<tr>
			<td class="c1">にせよ</td>
			<td class="c2">にせよ</td>
			<td class="c3">即使 尽管</td>
		</tr>
		<tr>
			<td class="c1">ただちに</td>
			<td class="c2">直ちに</td>
			<td class="c3">立刻 马上</td>
		</tr>
		<tr>
			<td class="c1">すかさず</td>
			<td class="c2">透かさず</td>
			<td class="c3">立刻 马上</td>
		</tr>
		<tr>
			<td class="c1">にて</td>
			<td class="c2">=で</td>
			<td class="c3">表范围 场所 时间 原因</td>
		</tr>
		<tr>
			<td class="c1">あたまがさがる</td>
			<td class="c2">頭が下がる</td>
			<td class="c3">令人佩服</td>
		</tr>
		<tr>
			<td class="c1">ひっきりなしに</td>
			<td class="c2">ひっきりなしに</td>
			<td class="c3">连连不断的</td>
		</tr>
		<tr>
			<td class="c1">しっくり</td>
			<td class="c2">しっくり</td>
			<td class="c3">适合 吻合</td>
		</tr>
		<tr>
			<td class="c1">いひょうをつく</td>
			<td class="c2">意表を突く</td>
			<td class="c3">出乎意料 令人吃惊</td>
		</tr>
		<tr>
			<td class="c1">きぜん</td>
			<td class="c2">毅然</td>
			<td class="c3">毅然</td>
		</tr>
		<tr>
			<td class="c1">きくばり</td>
			<td class="c2">気配り</td>
			<td class="c3">照料 照顾 用心周到</td>
		</tr>
		<tr>
			<td class="c1">さんさく</td>
			<td class="c2">散策</td>
			<td class="c3">散步 随便走走</td>
		</tr>
		<tr>
			<td class="c1">でかた</td>
			<td class="c2">出方</td>
			<td class="c3">形状 样子 态度 方针</td>
		</tr>
		<tr>
			<td class="c1">ふみきる</td>
			<td class="c2">踏み切る</td>
			<td class="c3">下定决心</td>
		</tr>
		<tr>
			<td class="c1">はいりょ</td>
			<td class="c2">配慮</td>
			<td class="c3">关照 关怀 照顾</td>
		</tr>
		<tr>
			<td class="c1">たっぷり</td>
			<td class="c2">たっぷり</td>
			<td class="c3">足够 充分 绰绰有余</td>
		</tr>
		<tr>
			<td class="c1">みきわめる</td>
			<td class="c2">見極める</td>
			<td class="c3">看透 看清本质</td>
		</tr>
		<tr>
			<td class="c1">さいく</td>
			<td class="c2">細工</td>
			<td class="c3">手工艺品 想办法 费心机 刷花招</td>
		</tr>
		<tr>
			<td class="c1">こころあたり</td>
			<td class="c2">心当たり</td>
			<td class="c3">头绪 线索</td>
		</tr>
		<tr>
			<td class="c1">そこそこ</td>
			<td class="c2">そこそこ</td>
			<td class="c3">草率 急忙 草草了事 大约</td>
		</tr>
		<tr>
			<td class="c1 red">とっぱ</td>
			<td class="c2">突破</td>
			<td class="c3">突破</td>
		</tr>
		<tr>
			<td class="c1">ゆきづまる</td>
			<td class="c2">行詰る</td>
			<td class="c3">走投无路</td>
		</tr>
		<tr>
			<td class="c1">きばつ</td>
			<td class="c2">奇抜(な)</td>
			<td class="c3">奇异 优秀 卓越</td>
		</tr>
		<tr>
			<td class="c1">ばったり</td>
			<td class="c2">バッタリ</td>
			<td class="c3">突然遇见 突然中止 突然倒下</td>
		</tr>
		<tr>
			<td class="c1">たらいまわし</td>
			<td class="c2">盥回し</td>
			<td class="c3">推卸责任 转交</td>
		</tr>
		<tr>
			<td class="c1">やっかい</td>
			<td class="c2">厄介</td>
			<td class="c3">麻烦 难对付</td>
		</tr>
		<tr>
			<td class="c1">いいかげん</td>
			<td class="c2">いい加減</td>
			<td class="c3">适可而止</td>
		</tr>
		<tr>
			<td class="c1">うちあける</td>
			<td class="c2">打ち明ける</td>
			<td class="c3">坦率说出 毫不隐瞒</td>
		</tr>
		<tr>
			<td class="c1">えんきょく</td>
			<td class="c2">婉曲(な)</td>
			<td class="c3">婉转、委婉</td>
		</tr>
		<tr>
			<td class="c1">おおげさ</td>
			<td class="c2">大袈裟</td>
			<td class="c3">夸张、夸大</td>
		</tr>
		<tr>
			<td class="c1">おどおど</td>
			<td class="c2">おどおど</td>
			<td class="c3">惴惴不安 心惊胆战</td>
		</tr>
		<tr>
			<td class="c1">それなりに</td>
			<td class="c2">それなりの</td>
			<td class="c3">尽管不充分但还是...</td>
		</tr>
		<tr>
			<td class="c1">こえをかぎり</td>
			<td class="c2">力/声を限りに</td>
			<td class="c3">尽力 用最大声音</td>
		</tr>
		<tr>
			<td class="c1">~ぬく</td>
			<td class="c2">~ぬいた</td>
			<td class="c3">带有...的气息</td>
		</tr>
		<tr>
			<td class="c1">もので</td>
			<td class="c2">もので</td>
			<td class="c3">因为</td>
		</tr>
		<tr>
			<td class="c1">とあって</td>
			<td class="c2">とあって</td>
			<td class="c3">因为</td>
		</tr>
		<tr>
			<td class="c1">にあって</td>
			<td class="c2">にあって(は)顺接 にあっても逆接</td>
			<td class="c3">在...情况下/条件下</td>
		</tr>
		<tr>
			<td class="c1">にあたって</td>
			<td class="c2">にあたり</td>
			<td class="c3">在...之际，在..重要时刻 积极意义</td>
		</tr>
		<tr>
			<td class="c1">なおざり</td>
			<td class="c2">等閑</td>
			<td class="c3">应付 不认真 忽视 玩忽职守</td>
		</tr>
		<tr>
			<td class="c1">ないがしろ</td>
			<td class="c2">蔑ろ</td>
			<td class="c3">轻视 蔑视 无视</td>
		</tr>
		<tr>
			<td class="c1">~にかこつけて</td>
			<td class="c2">~にかこつけて</td>
			<td class="c3">以..为借口 找..为理由</td>
		</tr>
		<tr>
			<td class="c1">なんら...ない</td>
			<td class="c2">何ら</td>
			<td class="c3">丝毫没有  一点也没有</td>
		</tr>
		<tr>
			<td class="c1">てんで...ない</td>
			<td class="c2">てんで</td>
			<td class="c3">丝毫没有  一点也没有</td>
		</tr>
		<tr>
			<td class="c1">愛想</td>
			<td class="c2">あいそう</td>
			<td class="c3">对他人的态度 愛想を尽かす对于某人感到厌烦</td>
		</tr>
		<tr>
			<td class="c1">あいだがら</td>
			<td class="c2">間柄</td>
			<td class="c3">人与人之间的关系</td>
		</tr>
		<tr>
			<td class="c1">あべこべ</td>
			<td class="c2">あべこべ</td>
			<td class="c3">反方向 颠倒 相反</td>
		</tr>
		<tr>
			<td class="c1">あざわらう</td>
			<td class="c2">嘲笑う</td>
			<td class="c3">嘲笑</td>
		</tr>
		<tr>
			<td class="c1">あやまち</td>
			<td class="c2">過ち</td>
			<td class="c3">过错</td>
		</tr>
		<tr>
			<td class="c1">いっきょに</td>
			<td class="c2">一挙に</td>
			<td class="c3">作品を一挙に完成させる</td>
		</tr>
		<tr>
			<td class="c1">いっぺん</td>
			<td class="c2">一変</td>
			<td class="c3">突然改变</td>
		</tr>
		<tr>
			<td class="c1">うちきる</td>
			<td class="c2">打ち切る</td>
			<td class="c3">停止 截止</td>
		</tr>
		<tr>
			<td class="c1">うつろ</td>
			<td class="c2">虚ろ</td>
			<td class="c3">空虚 发呆</td>
		</tr>
		<tr>
			<td class="c1">うわまわる</td>
			<td class="c2">上回る</td>
			<td class="c3">超出 越出</td>
		</tr>
		<tr>
			<td class="c1">しんぼう</td>
			<td class="c2">辛抱</td>
			<td class="c3">忍耐 忍受</td>
		</tr>
		<tr>
			<td class="c1">したしらべ</td>
			<td class="c2">下調べ</td>
			<td class="c3">预习 预先调查</td>
		</tr>
		<tr>
			<td class="c1">シック</td>
			<td class="c2">シック</td>
			<td class="c3">雅致</td>
		</tr>
		<tr>
			<td class="c1">しきる</td>
			<td class="c2">仕切る</td>
			<td class="c3">主持 掌管 隔开</td>
		</tr>
		<tr>
			<td class="c1">しいれる</td>
			<td class="c2">仕入れる</td>
			<td class="c3">购入 买入 取得 获得</td>
		</tr>
		<tr>
			<td class="c1">いたずら</td>
			<td class="c2">悪戯</td>
			<td class="c3">恶作剧 开玩笑</td>
		</tr>
		<tr>
			<td class="c1">ひたすら</td>
			<td class="c2">ひたすら</td>
			<td class="c3">一味地 只管 一个劲地</td>
		</tr>
		<tr>
			<td class="c1">しかける</td>
			<td class="c2">仕掛ける</td>
			<td class="c3">着手 开始做 挑衅 设置陷阱</td>
		</tr>
		<tr>
			<td class="c1">ずばり</td>
			<td class="c2">ずばり</td>
			<td class="c3">击中要害 一语道破</td>
		</tr>
		<tr>
			<td class="c1">ずらっと</td>
			<td class="c2">ずらっと</td>
			<td class="c3">成排的</td>
		</tr>
		<tr>
			<td class="c1">ずるずる</td>
			<td class="c2">ずるずる</td>
			<td class="c3">拖拉 缓慢 不干脆</td>
		</tr>
		<tr>
			<td class="c1">すんなり</td>
			<td class="c2">すんなり</td>
			<td class="c3">顺利 容易 毫不费力 苗条</td>
		</tr>
		<tr>
			<td class="c1">せいぜん</td>
			<td class="c2">整然</td>
			<td class="c3">井然有序 有条不紊</td>
		</tr>
		<tr>
			<td class="c1">せつない</td>
			<td class="c2">切ない</td>
			<td class="c3">悲痛、悲伤</td>
		</tr>
		<tr>
			<td class="c1">だいなし</td>
			<td class="c2">台無し</td>
			<td class="c3">断送 糟蹋 搞砸</td>
		</tr>
		<tr>
			<td class="c1">たてまえ</td>
			<td class="c2">建前</td>
			<td class="c3">方针 原则 场面话</td>
		</tr>
		<tr>
			<td class="c1">ちやほや</td>
			<td class="c2">=甘える</td>
			<td class="c3">溺爱 娇养</td>
		</tr>
		<tr>
			<td class="c1">つじつま</td>
			<td class="c2">辻褄</td>
			<td class="c3">逻辑 条理 首尾 前后</td>
		</tr>
		<tr>
			<td class="c1">つぶら</td>
			<td class="c2">つぶらな瞳</td>
			<td class="c3">很圆的</td>
		</tr>
		<tr>
			<td class="c1">でくわす</td>
			<td class="c2">出会す</td>
			<td class="c3">偶然碰见</td>
		</tr>
		<tr>
			<td class="c1">てはず</td>
			<td class="c2">手はず</td>
			<td class="c3">步骤 程序</td>
		</tr>
		<tr>
			<td class="c1">てほん</td>
			<td class="c2">手本</td>
			<td class="c3">范本 模范 榜样</td>
		</tr>
		<tr>
			<td class="c1">どわすれ</td>
			<td class="c2">度忘れ(する)</td>
			<td class="c3">一时想不起来 意外的 严重的</td>
		</tr>
		<tr>
			<td class="c1">チラシ</td>
			<td class="c2">ちらし/散らし</td>
			<td class="c3">传单</td>
		</tr>
		<tr>
			<td class="c1">さぞ</td>
			<td class="c2">=さぞかし</td>
			<td class="c3">想必一定...</td>
		</tr>
		<tr>
			<td class="c1">のなんのって</td>
			<td class="c2">形容词+のなんのって</td>
			<td class="c3">非常 极其</td>
		</tr>
		<tr>
			<td class="c1">さもないと</td>
			<td class="c2">さもないと</td>
			<td class="c3">否则 那样做的话</td>
		</tr>
		<tr>
			<td class="c1">なおさら</td>
			<td class="c2">尚更</td>
			<td class="c3">更加 越发</td>
		</tr>
		<tr>
			<td class="c1">なりたつ</td>
			<td class="c2">成り立つ</td>
			<td class="c3">谈判谈成 由..构成组成 维持住</td>
		</tr>
		<tr>
			<td class="c1">なんなりと</td>
			<td class="c2">なんなりと</td>
			<td class="c3">无论如何 不管什么</td>
		</tr>
		<tr>
			<td class="c1">にかよう</td>
			<td class="c2">似通う</td>
			<td class="c3">相似 类似</td>
		</tr>
		<tr>
			<td class="c1">ぬけだす</td>
			<td class="c2">抜け出す</td>
			<td class="c3">摆脱</td>
		</tr>
		<tr>
			<td class="c1">ノイローゼ</td>
			<td class="c2">Neurose</td>
			<td class="c3">神经质 过于敏感</td>
		</tr>
		<tr>
			<td class="c1">のべ</td>
			<td class="c2">延べ</td>
			<td class="c3">共计 总计</td>
		</tr>
		<tr>
			<td class="c1">はしわたし</td>
			<td class="c2">橋渡し</td>
			<td class="c3">当中间人 架桥</td>
		</tr>
		<tr>
			<td class="c1">はなはだ</td>
			<td class="c2">甚だ</td>
			<td class="c3">很 非常</td>
		</tr>
		<tr>
			<td class="c1 red">ばんのう</td>
			<td class="c2">万能</td>
			<td class="c3">万能 全能</td>
		</tr>
		<tr>
			<td class="c1">はんぱ</td>
			<td class="c2">半端</td>
			<td class="c3">零碎 零散 不彻底 没用的人</td>
		</tr>
		<tr>
			<td class="c1">はんぱつ</td>
			<td class="c2">反発</td>
			<td class="c3">反抗 反感 排斥</td>
		</tr>
		<tr>
			<td class="c1">ひいては</td>
			<td class="c2">ひいては</td>
			<td class="c3">不但～而且 进而</td>
		</tr>
		<tr>
			<td class="c1">びっしょり</td>
			<td class="c2">びっしょり</td>
			<td class="c3">湿透</td>
		</tr>
		<tr>
			<td class="c1">ひょっとしたら</td>
			<td class="c2">ひょっとして</td>
			<td class="c3">也许..后接かもしれない</td>
		</tr>
		<tr>
			<td class="c1">ブーム</td>
			<td class="c2">boom</td>
			<td class="c3">~热潮 流行</td>
		</tr>
		<tr>
			<td class="c1">ぶなん</td>
			<td class="c2">無難</td>
			<td class="c3">中规中矩 说得过去 不算太差</td>
		</tr>
		<tr>
			<td class="c1">へきえき</td>
			<td class="c2">辟易</td>
			<td class="c3">感到为难 退缩</td>
		</tr>
		<tr>
			<td class="c1 red">ぼっしゅう</td>
			<td class="c2">没収</td>
			<td class="c3">没収</td>
		</tr>
		<tr>
			<td class="c1">ほとり</td>
			<td class="c2">ほとり</td>
			<td class="c3">岸边 湖岸</td>
		</tr>
		<tr>
			<td class="c1">まごつく</td>
			<td class="c2">間誤付く</td>
			<td class="c3">茫然 不知所措</td>
		</tr>
		<tr>
			<td class="c1">まさしく</td>
			<td class="c2">正しく</td>
			<td class="c3">的确 沒錯</td>
		</tr>
		<tr>
			<td class="c1">みあわせる</td>
			<td class="c2">見合わせる</td>
			<td class="c3 red">暂停 推迟 比较 对照</td>
		</tr>
		<tr>
			<td class="c1">みじん</td>
			<td class="c2">微塵</td>
			<td class="c3">碎末 一点</td>
		</tr>
		<tr>
			<td class="c1">みじんも..ない</td>
			<td class="c2">みじんも..ない</td>
			<td class="c3">一点都没有</td>
		</tr>
		<tr>
			<td class="c1">みれん</td>
			<td class="c2">未練</td>
			<td class="c3">依恋 恋恋不舍</td>
		</tr>
		<tr>
			<td class="c1">ゆうずう</td>
			<td class="c2">融通</td>
			<td class="c3">顺利通过 临机应变</td>
		</tr>
		<tr>
			<td class="c1">よそみ</td>
			<td class="c2">余所見</td>
			<td class="c3">东张西望</td>
		</tr>
		<tr>
			<td class="c1">よち</td>
			<td class="c2">余地</td>
			<td class="c3">空地 富余 余地</td>
		</tr>
		<tr>
			<td class="c1">Vます+そびれる</td>
			<td class="c2">乗りそびれる</td>
			<td class="c3">错过机会 最终没能做成</td>
		</tr>
		<tr>
			<td class="c1">Vます+そこなう</td>
			<td class="c2">乗り損なう</td>
			<td class="c3">错过机会 最终没能做成</td>
		</tr>
		<tr>
			<td class="c1">Vます+すべがない</td>
			<td class="c2">術がない</td>
			<td class="c3">没有办法做到できない</td>
		</tr>
		<tr>
			<td class="c1">Vます+これすれ</td>
			<td class="c2">増えこれすれ</td>
			<td class="c3">只会有.. 其他不会/没有</td>
		</tr>
		<tr>
			<td class="c1">N+これあれ</td>
			<td class="c2">苦労これあれ</td>
			<td class="c3">尽管/虽然..但是..</td>
		</tr>
		<tr>
			<td class="c1">~にまつわる</td>
			<td class="c2">纏わる=に関わる</td>
			<td class="c3">关于 围绕</td>
		</tr>
		<tr>
			<td class="c1">~にかまけて</td>
			<td class="c2">かまける=感ける</td>
			<td class="c3">沉迷于 忙于 沉浸于</td>
		</tr>
		<tr>
			<td class="c1">までもない</td>
			<td class="c2">Vる+までもない</td>
			<td class="c3">没必要 用不着做某事</td>
		</tr>
		<tr>
			<td class="c1">ひにく</td>
			<td class="c2">皮肉</td>
			<td class="c3">挖苦 讽刺 嘲讽</td>
		</tr>
		<tr>
			<td class="c1">おんきせがましい</td>
			<td class="c2">恩着せがましい</td>
			<td class="c3">居高临下的</td>
		</tr>
		<tr>
			<td class="c1">いかなる</td>
			<td class="c2">=どんな</td>
			<td class="c3">如何 怎么样的</td>
		</tr>
		<tr>
			<td class="c1">ぐるみ</td>
			<td class="c2">クラスぐるみ</td>
			<td class="c3">全部 所有 全家 全班同学
			</td>
		</tr>
		<tr>
			<td class="c1">ながらも</td>
			<td class="c2">=ながら</td>
			<td class="c3">虽然</td>
		</tr>
		<tr>
			<td class="c1">もんか</td>
			<td class="c2">ものか</td>
			<td class="c3">怎么会呢 怎么可能</td>
		</tr>
		<tr>
			<td class="c1">にしろ</td>
			<td class="c2">にしろ</td>
			<td class="c3">即使..</td>
		</tr>
		<tr>
			<td class="c1">うらぐち</td>
			<td class="c2">裏口</td>
			<td class="c3">后门 采用走后门的方式办事</td>
		</tr>
		<tr>
			<td class="c1">うちわ</td>
			<td class="c2">団扇</td>
			<td class="c3">扇子</td>
		</tr>
		<tr>
			<td class="c1">せともの</td>
			<td class="c2">瀬戸物</td>
			<td class="c3">瓷器</td>
		</tr>
		<tr>
			<td class="c1">ふぶき</td>
			<td class="c2">吹雪</td>
			<td class="c3">暴风雪</td>
		</tr>
		<tr>
			<td class="c1">たんてき</td>
			<td class="c2">端的</td>
			<td class="c3">明显 清楚 直接了当</td>
		</tr>
		<tr>
			<td class="c1">なこうど</td>
			<td class="c2">仲人</td>
			<td class="c3">媒人</td>
		</tr>
		<tr>
			<td class="c1">なだれ</td>
			<td class="c2">雪崩</td>
			<td class="c3">雪崩</td>
		</tr>
		<tr>
			<td class="c1">なごり</td>
			<td class="c2">名残</td>
			<td class="c3">残余 依依不舍</td>
		</tr>
		<tr>
			<td class="c1">みれん</td>
			<td class="c2">未練</td>
			<td class="c3">优柔寡断 依依不舍</td>
		</tr>
		<tr>
			<td class="c1">たてまえ</td>
			<td class="c2">建前</td>
			<td class="c3">本音と建前 真心话和场面话</td>
		</tr>
		<tr>
			<td class="c1">よそもの</td>
			<td class="c2">余所者</td>
			<td class="c3">局外人</td>
		</tr>
		<tr>
			<td class="c1">とんや</td>
			<td class="c2">問屋</td>
			<td class="c3">批发商</td>
		</tr>
		<tr>
			<td class="c1">ありのまま</td>
			<td class="c2">ありのままの自分</td>
			<td class="c3">实事求是 真实的</td>
		</tr>
		<tr>
			<td class="c1">あんじる</td>
			<td class="c2">案じる</td>
			<td class="c3 red">担心 观念 想</td>
		</tr>
		<tr>
			<td class="c1">ひかれる</td>
			<td class="c2">惹かれる</td>
			<td class="c3">被..吸引</td>
		</tr>
		<tr>
			<td class="c1">ほころびる</td>
			<td class="c2">綻びる</td>
			<td class="c3">绽开 开线 开花</td>
		</tr>
		<tr>
			<td class="c1">つづる</td>
			<td class="c2">綴る</td>
			<td class="c3">装订成册</td>
		</tr>
		<tr>
			<td class="c1">ぬきだす</td>
			<td class="c2">抜き出す</td>
			<td class="c3">抽出 挑选 选拔</td>
		</tr>
		<tr>
			<td class="c1">かかげる</td>
			<td class="c2">掲げる</td>
			<td class="c3">悬挂 挂起 刊登</td>
		</tr>
		<tr>
			<td class="c1">まみれる</td>
			<td class="c2">塗れる</td>
			<td class="c3">涂满全身</td>
		</tr>
		<tr>
			<td class="c1">スタミナ</td>
			<td class="c2">stamina</td>
			<td class="c3">持久力 精力</td>
		</tr>
		<tr>
			<td class="c1">まんまと</td>
			<td class="c2">まんまと</td>
			<td class="c3">完全 彻底</td>
		</tr>
		<tr>
			<td class="c1">まんざら</td>
			<td class="c2">まんざら</td>
			<td class="c3">并非完全彻底</td>
		</tr>
		<tr>
			<td class="c1">あとしまつ</td>
			<td class="c2">後始末</td>
			<td class="c3">收拾 清理 善后</td>
		</tr>
		<tr>
			<td class="c1">ふしまつ</td>
			<td class="c2">不始末</td>
			<td class="c3">不经意 不注意 不检点</td>
		</tr>
		<tr>
			<td class="c1">かわりに</td>
			<td class="c2">かわりに</td>
			<td class="c3">作为回报 替代 虽然..但是..</td>
		</tr>
		<tr>
			<td class="c1">デリケート</td>
			<td class="c2">delicate</td>
			<td class="c3">精密 敏感</td>
		</tr>
		<tr>
			<td class="c1">あっせん</td>
			<td class="c2">斡旋</td>
			<td class="c3">帮助 关照 介绍</td>
		</tr>
	</table>
	</div>
  </body>
</html>