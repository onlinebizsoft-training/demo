	 var x = function(nd){
	 	return document.getElementById(nd);
	 };

	function show(){
		x("myDIV").style.display = "block";
	}
	
	function hide(){
		x("myDIV").style.display = "none";
	}