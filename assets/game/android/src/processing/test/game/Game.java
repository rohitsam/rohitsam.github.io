package processing.test.game;

import processing.core.*; 
import processing.data.*; 
import processing.event.*; 
import processing.opengl.*; 

import java.util.HashMap; 
import java.util.ArrayList; 
import java.io.File; 
import java.io.BufferedReader; 
import java.io.PrintWriter; 
import java.io.InputStream; 
import java.io.OutputStream; 
import java.io.IOException; 

public class Game extends PApplet {



int k=0;

int posx = 5;
int posy = 10;
int speedx=1;
int speedy=2;
int paddley;
int paddlex;int speedpx=2;
int score=0;
int highest=0;
int score1=0;

  float r,f;
 

public void setup() 
{
  
  
   
}

public void draw()
{
             background(250); 
             fill(0);
             rect(paddlex,paddley,100, 30);
             fill(250,50,0);
             ellipse(posx,posy,10,10);
             text("HIGH SCORE",205,20);
             text(highest,285,20);
  
             paddlex=mouseX;//paddlex+speedpx;
             paddley=270;
             posx=posx+speedx;
             posy=posy+speedy;
             if(posx==width)
             {
                   speedx=-speedx;
                   }
             if(posx<0)
             {
                 speedx=-speedx;
                  }
            if(posx>width)
            {
                 speedx=-speedx;
                  }
     
   

         
 
 
             if(posy<0)
             {
             speedy=-speedy;
                   }
 
            if(paddlex+100>width){
             paddlex=width-100;
             }
            if(paddlex<0){
              paddlex=0;
              }
 
             if(paddley+50>height){
               paddley=height-30;
                }
  
              bounce();
               highscore();
 north();
 west();

}
public void north(){
 fill(0);
 rect(mouseX,0,100,30);


  
}
public void west(){
 fill(0);
 rect(0,mouseY,30,100);
 
}
public void east(){
fill(0); {
 rect(0,mouseY,0,0);
  
}
 
  
}



public void bounce(){
   if(posy==paddley){
    if(posx<paddlex+100&&posx>paddlex)
   {
   speedy=-speedy;
   score++;
   }
   
   
     }
  
  
}
public void highscore(){
  if(score1>highest)
  {
    highest=score1;
  }
  
  
}
public void mousePressed() {

  loop();
  score=0;

}
  

    
  
  public void gameover(){
    if(posy>height){
       speedy=-speedy;
       background(0);
           text("GAMEOVER",120,150);
    fill(0, 102, 153);
    text("Your Score is",125,170);
    text(score,220,170);
    text("click to start again",20,250);
      score1=score;
     noLoop();
  
       
     }
     if(posx>width){
       
       background(0);
           text("GAMEOVER",120,150);
    fill(0, 102, 153);
    text("Your Score is",125,170);
    text(score,220,170);
    text("click to start again",20,250);
      score1=score;
     noLoop();
       
     }
     if(posx<0){
           
       background(0);
           text("GAMEOVER",120,150);
    fill(0, 102, 153);
    text("Your Score is",125,170);
    text(score,220,170);
    text("click to start again",20,250);
      score1=score;
     noLoop();
       
     }
     if(posy<0){
           
       background(0);
           text("GAMEOVER",120,150);
    fill(0, 102, 153);
    text("Your Score is",125,170);
    text(score,220,170);
    text("click to start again",20,250);
      score1=score;
     noLoop();
       
       
     }
    
  }
  
  public void settings() {  size(300,300); }
  static public void main(String[] passedArgs) {
    String[] appletArgs = new String[] { "Game" };
    if (passedArgs != null) {
      PApplet.main(concat(appletArgs, passedArgs));
    } else {
      PApplet.main(appletArgs);
    }
  }
}
