const canvas = new fabric.Canvas('foo', {
	backgroundColor: '#f6f6f6',
   // Removing this cursor since we create our own
	freeDrawingCursor: 'none',
	isDrawingMode: true
});

canvas.freeDrawingBrush.width = 30;
canvas.freeDrawingBrush.color = 'hotpink';

const drawCursor = new fabric.Circle({
	fill: canvas.freeDrawingBrush.color,
	left: 0,
	originX: 'center',
	originY: 'center',
	radius: canvas.freeDrawingBrush.width / 2,
	// Initially hiding off screen
	top: -100
})

canvas.add(drawCursor);

// canvas.on('mouse:move', (event) => {
// 	drawCursor.left = event.e.x - canvas.freeDrawingBrush.width / 2;
// 	drawCursor.top = event.e.y - canvas.freeDrawingBrush.width * 3;
// 	canvas.renderAll();
// })
canvas.on('mouse:move', function(event) {
	const mouse = this.getPointer(event.e);

	drawCursor
		.set({
      	left: mouse.x,
			top: mouse.y
    	})
    	.setCoords()
	 	.canvas.renderAll();
});

// canvas.on('mouse:out', (object) => {
// 	// hide drawCursor off screen
// 	drawCursor.left = -100;
// 	drawCursor.top = -100;
// 	canvas.renderAll();
// })
canvas.on('mouse:out', function(event) {
  // hiding off screen
  drawCursor
  	.set({
		left: 0,
	  	top: -100,
    })
    .setCoords()
    .canvas.renderAll();
});