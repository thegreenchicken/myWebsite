
var size = 50;
var xMove, yMove;



function lines(event) {
    
    var windowSize = view.size;
    var columns = (Math.floor(windowSize.width / size));
    var rows = (Math.floor(windowSize.height / size));

    var paddingLeft = (windowSize.width-((columns-1)*size))/2;
    var paddingTop = (windowSize.height-((rows-1)*size))/2;
         
    var length = 10;
    
    xMove = -(size - paddingLeft);
    yMove = -(size - paddingTop);

    for (var i=0; i < columns; i++) {

        for (var l=0; l < rows; l++) {

            var from = new Point(paddingLeft + i*size,  paddingTop+ l*size);
            var to = new Point(paddingLeft + i*size, paddingTop + l*size + length);
            
            var line = new Path.Line(from, to);
            line.strokeColor = '#ffd700';
            line.strokeWidth = 1; 

            var vector = (from - event.point);

            angle = vector.angle;

            line.rotate(angle+90, from);

            line.removeOnMove();
        }
    }
}


function onMouseMove(event) {
    
    lines(event);
        
}