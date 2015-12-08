// Learning Processing
// Daniel Shiffman
// http://www.learningprocessing.com

// Example 1-1: stroke and fill
var yoff = 0.0;        // 2nd dimension of perlin noise
var r ;
var g ;
var b ;
var count=0;
function setup() {
    var myCanvas = createCanvas(windowWidth-200,300);
    myCanvas.parent('jumbotron');
    textSize(50);
    textFont("Impact");
    stroke(55);
    strokeWeight(5);
}



function draw() {
    background(255);
    if(count==0){
        r = random(100)+155;
        g = random(55)+200;
        b = random(100)+155;
        count=50;
    }
    count--;


    var xoff = 0;       // Option #1: 2D Noise
    // float xoff = yoff; // Option #2: 1D Noise

    // Iterate over horizontal pixels
    for (var x = 0; x <= width; x += 10) {
        // Calculate a y value according to noise, map to

        // Option #1: 2D Noise

        var y = map(noise(xoff, yoff),0, 1,mouseY,300);

        // Option #2: 1D Noise
        // float y = map(noise(xoff), 0, 1, 200,300);


        if(x%200==0) {

            translate(x,y);
            rotate(-PI/(width/mouseX));
            fill(b,r,g);
            if(x%400==0)fill(r,g,b);
            if(x%600==0)fill(g,b,r);
            text("Un Regime?",-150,-100);
            text("Un Resto!",-100,-50);
            fill(b,b,r);
            if(x%400==0)fill(g,b,g);
            if(x%600==0)fill(g,r,r);
            text("Un Regime?",-50,0);
            text("Un Resto!",0,50);
            fill(b,g,r);
            if(x%400==0)fill(r,b,g);
            if(x%600==0)fill(g,r,b);
            text("Un Regime?",50,100);
            text("Un Resto!",100,150);
            rotate(PI/(width/mouseX));
            translate(-x,-y);

        }

        // Set the vertex
        // Increment x dimension for noise
        xoff += 0.01;
    }
    // increment y dimension for noise
    yoff += 0.01;





}