var w1 = 40;
var w2 = 10;
var len = 240
var rho,t,k,time,c;
var current_val = 0;
c =0.0043;
time = 10; //seconds
k = 399000;
t =3.3*(10**-8) ;
rho = 1/3220;
var res_scale =20999;
let input, button, greeting;
let img,img2;
function preload() {
  img = loadImage('image/discharge_curve.png');
  img2 = loadImage('image/battery.png');
}

function setup() {
  // put setup code here
  createCanvas(1000,600);
  background(200,250,70);
  image(img, 300, 10);
  input = createInput();
  input.position(0, 10);
  button = createButton('submit');
  button.position(input.x + input.width, 10);
  button.mousePressed(greet);
   greeting = createElement('p', 'voltage');
  greeting.position(0, 15);
    textAlign(CENTER);
  textSize(5);
  
}

function draw() {
  //put drawing code here
   background(200,190,255);
draw_tapered_resistor();
  strokeWeight(0.5);
  
  for(var i=0 ;i<240;i=i+1){
	  stroke(0,0,0);
	  calc_res(i,0);
	  
	  stroke(0,0,255); 
	  res_per_unit_len(i,0);
	  
  }
  stroke('purple'); // Change the color
  strokeWeight(4); // Make the points 10 pixels in size
  if((mouseX<240) && (mouseY>60) &&mouseY<140){
  point(mouseX,100);
  calc_res(mouseX,1);
  res_per_unit_len(mouseX,1);
  }
  colour(current_val);
  image(img,600,5);
  image(img2,0,300);

}  
function calc_res(x,y){	
var x1;
x1 = x/1000;
r = (rho*8*(log((0.0625*x1) +0.005))/t)+k;
point(x+250,200-(r/1000));
if(y==1){
	textSize(8);
let s = x1.toString()+','+(r/res_scale).toString();
text(s,x+250,200-(r/1000))
}
//print(x1,r);
return r/res_scale;
}
function draw_tapered_resistor(){
	
	stroke('black'); // Change the color
  strokeWeight(1); // Make the points 10 pixels in size
  line(0,90,240,60);
  line(0,100,240,100);
  line(0,110,240,140);
  line(250,0,250,400);
		
	
}


function colour(current_val){
  line(0,160,240,190);
  line(0,200,240,200);
  line(0,240,240,210);
	strokeWeight(3);
	var R,G,B,step,x;
	var y2,y1;
	x = 700;
	G = 0;
	B = 0;
	step = 80/100;
	var heat;
	
	/*
	for(var i=0;i<240;i++)
	{
	R = 0.35-(0.65*(780-x)/80);
	stroke((1-R)*255,G,B);	  
	y1 = -(i/8)+190;
	y2 = (i/8)+210
    line(i,y1,i,y2); 	
	x = x+step;
	}
	*/
	for(var i=240;i>0;i--){
	heat = time*(current_val**2)*(res_per_unit_len(240-i,0));
	//console.log(heat);
	heat = heat*1.25;
	x = map(heat,10.963,38.963,710,780)

	//console.log(x);
	R = 0.35-(0.65*(780-x)/80);
	stroke((R)*255,G,B);
	y1 = (i/8)+160;
	y2 = -(i/8)+240;
    line(i,y1,i,y2);
	
	}
	
}

function res_per_unit_len(x,y){

var x1,dr;
x1 = x/1000;
dr = (rho/(t*res_scale*((0.0625*x1) +0.005)));

point(x+250,200-(dr));
if(y==1){
	textSize(8);
let s = 'dr/dx->'+x1.toString()+','+(dr).toString();
text(s,x+250,200-(dr))
}
//print(x1,dr);
return dr;
    
	
}

function greet(){
  const name = input.value();
  var vol_val = parseFloat(name);
  console.log(vol_val);
  var total_res = calc_res(240,0);
  current_val = vol_val/total_res;
  print(current_val)
  greeting.html(name + 'V, ' + current_val.toString()+'A');
  input.value('');
  
  
 
}