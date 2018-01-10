<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="lib/js.js"></script>
</head>
<body>
<button id="button">show</button>
<button id="button1">hide</button>
<div id="myDIV">
	This is my DIV element.
</div>
	<script>
		var $ = function(c){
			return document.getElementById(c);
		}

		var hide = function(h){
			return h.style.display = "none";
		}

		var show = function(s){
			return s.style.display = "block";
		}
		
		$("button").onclick = function(){
			hide($("jax"))
		};
		$("button1").onclick = function(){
			show($("jax"))
		};
	</script>
</body>
</html>


