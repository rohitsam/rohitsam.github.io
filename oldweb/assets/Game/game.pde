

int k=0;

int posx = 5;
int posy = 10;
int speedx=1;
int speedy=2;
int paddlesy;
int paddlesx;
int speedpx=2;
int score=0;
int highest=0;
int score1=0;
float paddlenx;
float paddleny;
int paddleex,paddleey;
int paddlewx,paddlewy;

float r, f;
int l,m;


void setup() 
{

 size(400,400);
 fill(0);
 ellipse(40,50,20,20);
}

void draw()
{
 
  background(250); 
  fill(0);
  rect(paddlesx, paddlesy, 100, 30);
  fill(250, 50, 0);
  ellipse(posx, posy, 10, 10);
  text("HIGH SCORE", 205, 20);
  text(highest, 285, 20);

  paddlesx=mouseX;//paddlex+speedpx;
  paddlesy=400;
 
 
  
  posx=posx+speedx;
  posy=posy+speedy;
 bounce();

  bounces();
  bouncen();
  
  highscore();
  north();
  
  gameover();
}
void north() {
  fill(0);
  rect(paddlenx,paddleny, 100, 30);
}





void bounces() {
  if (posy==paddlesy) {
    if (posx<paddlesx+100&&posx>paddlesx)
    {
      speedy=-speedy;
      score++;
    }
  }
}

void highscore() {
  if (score1>highest)
  {
    highest=score1;
  }
}
void mouseClicked() {

  loop();
  score=0;
}




void gameover() {
  if (posy>height) {
    speedy=-speedy;
    background(0);
    text("GAMEOVER", 120, 150);
    fill(0, 102, 153);
    text("Your Score is", 125, 170);
    text(score, 220, 170);
    text("click to start again", 20, 250);
    score1=score;
    noLoop();
  }
  if (posx>width) {

    background(0);
    text("GAMEOVER", 120, 150);
    fill(0, 102, 153);
    text("Your Score is", 125, 170);
    text(score, 220, 170);
    text("click to start again", 20, 250);
    score1=score;
    noLoop();
  }
  if (posx<0) {

    speedy=-speedy;
  }
  if (posy<0) {

    background(0);
    text("GAMEOVER", 120, 150);
    fill(0, 102, 153);
    text("Your Score is", 125, 170);
    text(score, 220, 170);
    text("click to start again", 20, 250);
    score1=score;
    noLoop();
  }
}

void bouncen() {
  if (posy==paddleny+30) {
    if (posx<paddlenx+100&&posx>paddlenx)
    {
      speedy=-speedy;
      score++;
    }
  }
  
}

 void mousePressed() {

  paddlenx=mouseX;
}
void bounce(){
   if (posx==width)
  {
    speedx=-speedx;
  }
  else if (posx<0)
  {
    speedx=-speedx;
  }
  else if (posx>width)
  {
    speedx=-speedx;
  }

  else if (posy<0)
  {
    speedy=-speedy;
  }

  else if (paddlesx+100>width) {
    paddlesx=width-100;
  }
  else if (paddlesx<0) {
    paddlesx=0;
  }

  else if (paddlesy+50>height) {
    paddlesy=height-30;
  }
  
}