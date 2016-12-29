import java.applet.*;
import java.awt.*;

public class  Shapes extends Applet 
{
   int x = 300, y = 100, r = 50;
   public void paint(Graphics g) 
   {
      g.setColor(Color.red);
      g.drawLine(30,300,200,10);
      g.drawOval(x-r,y-r,100,100);
      g.setColor(Color.yellow);
      g.fillOval(x-r,y-r,100,100);
      g.setColor(Color.black);
      g.drawRect(400,50,200,100);
      g.setColor(Color.orange);
      g.fillRect(400,50,200,100);
    }
}