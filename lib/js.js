		var $ = function(c){
			return document.getElementById(c);
		}

		var hide = function(h){
			return h.style.display = "none";
		}

		var show = function(s){
			return s.style.display = "block";
		}
		
		$("btn").onclick = function(){
			hide($("jax"))
		};
		$("btn2").onclick = function(){
			show($("jax"))
		};
