<?php if(!class_exists("View", false)) exit("no direct access allowed");?>﻿
<p>标题   <input id="title" type="text" <?php if (!empty($findone)){echo "value=".$findone["article_name"];}?>></p>
<button id="btn1"></button>
<button id="btn2"></button>
<button id="btn3"></button>
<button id="btn4"></button>
<div id="editor" style="width:600px;height:auto;border:1px solid #ccc;">
<?php if (!empty($findone)){echo $findone["article_content"];}?>
</div>
<input id="printContent" type="button" value="保存">
<p>
<a href="<?php echo url(array('m'=>'kmblog', 'c'=>'km', 'a'=>'index', ));?>">返回</a>
</p>
<script type="text/javascript">
	initEditor();
	//初始化
	function initEditor() {
		openOrCloseEditor("editor", "true");//开启元素编辑
		bindBtnCommand();//给样式按钮绑定命令
	}
	function openOrCloseEditor(el, operate) {
		var editor = document.getElementById(el);
		editor.contentEditable = operate;
	}
	//按钮绑定命令
	function bindBtnCommand() {
		var btns = document.getElementsByTagName("button"),
			btnConfigs = "backcolor|#f00|设置背景色 bold|null|字体加粗 indent|null|缩进 fontName|微软雅黑|转换字体".split(" "),
			len = btnConfigs.length;
		for(var i = 0, btnConfig; btnConfig = btnConfigs[i]; i++) {
			(function(btnConfig, btn) {
				var msg = btnConfig.split("|"),
					lab = msg[0],
					value = msg[1],
					title = msg[2];
				btn.innerHTML = lab;
				btn.title = title;
				btn.onclick = function(e) {
					document.execCommand(lab, false, value);
				}
			})(btnConfig, btns[i]);
		}
	}
	//获取编辑器内嵌内容
	function getContent(el) {
		var editor = document.getElementById(el);
		return editor.innerHTML;
	}
	function post(URL, PARAMS) {        
		var temp = document.createElement("form");        
		temp.action = URL;        
		temp.method = "post";        
		temp.style.display = "none";        
		for (var x in PARAMS) {        
			var opt = document.createElement("textarea");        
			opt.name = x;        
			opt.value = PARAMS[x];        
			//alert(opt.name);        
			temp.appendChild(opt);        
		}        
		document.body.appendChild(temp);        
		temp.submit();        
		return temp;        
	}        
	//打印按钮绑定触发事件
	document.getElementById("printContent").onclick = function(e) {
		var content = getContent("editor");
		var title = document.getElementById("title").value;
		var action = "<?php echo $types; ?>";
		//document.write(content);		
		//调用方法 如        
		post("<?php echo url(array('m'=>'kmblog', 'c'=>'km', 'a'=>'add', ));?>", {name:title,cont:content,typess:action});
	};
</script>