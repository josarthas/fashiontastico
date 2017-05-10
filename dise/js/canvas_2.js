function background(){
	var canvas = document.getElementById("drawingCanvas"),
    ctx = canvas.getContext("2d");

    var background = new Image();
    background.src = "images/p1.png";

    background.onload = function(){
        ctx.drawImage(background,0,0);   
    }
}