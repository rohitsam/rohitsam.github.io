<<!DOCTYPE html>
   <html>

     <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link rel=" tab icon" href="../icon.png">
      <title>My Processing Page</title>
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <style>
      body{


background: #80ffcc;

         width: 800px;

       
    -ms-transform: scale(1.0); /* IE 9 */
    -webkit-transform: scale(1.0); /* Safari and Chrome */
    -o-transform: scale(1.0); /* Firefox */


      }
      #scores{

        position: relative;
        right: -650px;
        bottom: 700px;

width: 300px;
    height: 150px;
   padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
}
   #fb{

position: relative;
        right: -800px;
        bottom: 610px;
width: 300px;
   }

   #img{
position: relative;
        right: -750px;
        bottom: 500px;


   }
   #status{
right: -650;
position:relative;
bottom:1000px;
color: black;
font-size: 30px

   }

</style>

      
       
       <script type="text/javascript" src="processing.js"></script>
       
     </head>
     <body>
      

      <script type="text/javascript">


function imageselc(id){

var img=processing.getElementById('mysketch3')
img.image_sel(id); 

}

       var bound = false;
 
      function bindJavascript() {
         var pjs = Processing.getInstanceById('mysketch3');
         if(pjs!=null) {
           pjs.bindJavascript(this);
           bound = true; }
         if(!bound) setTimeout(bindJavascript, 250);
       }
       bindJavascript();
 
       function showhigh(x,y) {
        document.getElementById('score').value = y;
         document.getElementById('high').value = x;
         /*
         sfhdgnnfxgnfgnxvnx
         */function move() {
         
}
         
       }
       </script>
       <script src="fb.js"></script>

      <script type="application/processing">

interface JavaScript {

  void showhigh(int x,int y); }

JavaScript javascript;

void bindJavascript(JavaScript js) {

  javascript = js; }



void setup() { // taken from https://www.ktbyte.com-  checkthis out to learn more about Processing js
  size(600, 800); 
} 
PImage c=loadImage("moving2.png"),b=loadImage("twitter.png");
PImage w=loadImage("http://i.imgur.com/4SUsUuc.png"),m=loadImage("background.png");
int r,s=0,d=1,x,y=400,vy,wx[]={0,0},hs =0,wy[]={0,0},e=1800,l=600,v=800;
void draw() { 
  for(int t=0,q=1;t<=e;t+=e,q=1) for(imageMode(1);q>0;q--,imageMode(3)) image(c,x+t,0);
  for(int i=0,z=y+=vy+=1,q=(x=x-6==-1800?0:x-6);i<2;i++,fill(0),textSize(40),image(b,l/2,y)){
    for(int j=-1;j<2;j+=2,text(""+s,l/2-15,700)) image(w, wx[i], wy[i]+j*(w.height/2+100));
    if((wx[i]=wx[i]<0?(wy[i]=(int)random(200,v-200))/wy[i]*l:wx[i]-6)==l/2&&d==0) hs=max(++s,hs);
    d = (abs(width/2-wx[i])<25 && abs(y-wy[i])>100) || y > height || y < 0 ? 1 : d;
  } 
  if(d==(r=1)) {for(imageMode(1);r>0;r--,rectMode(3),text("HighScore: "+hs,50,l)) image(m, 0, 0); image(b,200,500); }
  

  /*
  ***************|||||||||||||||************//***

  */
    if(javascript!=null){

    javascript.showhigh(hs,s); }
  
} 
void mousePressed() { 
  if (d==(vy=-17)/-17) y=(wx[1]=900) + 100 - ((wy[0]=(wy[1]=wx[0]=600)-200)+200 + (x = s = d = 0));




   }

  void imageaa(string t)
{
b=loadImage(t);
}


void image_sel(string t){
if(t==0)
{

  c=loadImage(t);
}
if(t=1){


  c=loadImage(t);
}


}
      </script>
       <canvas id="mysketch3" ></canvas>
       <div id="scores">
        score:<input type="text" class="form-control" id="score" placeholder="0">
         highscore: <input type="text" class="form-control" id="high" placeholder="0">


       </div>
<div id="fb">
       <fb:login-button scope="public_profile,email" onlogin="checkLoginState();" >
</fb:login-button >
</div>
<div id="img">


 <button type="button" onclick="imageselc('moving1.png')" height="140" width="140"><img src="moving1.png"  class="img-rounded" height="140" width="140" ></button>

 <button type="button" onclick="imageselc('moving2.png')" height="140" width="140"><img src="moving2.png"  class="img-rounded" height="140" width="140" ></button>



  </div>

<div id="status">
</div>

     </body>
   </html>