//Program where Server Communicates with Client single line

import java.net.*;
import java.io.*;

class Client_2
{
	public static void main(String args[])throws Exception
	{
		Socket client=new Socket("127.0.0.1",1234);//Creating the Socket object!
		String recieve;
		
		BufferedReader br=new BufferedReader(new InputStreamReader(client.getInputStream()));
		recieve=br.readLine();
		System.out.print("Server Says: "+recieve);
	}
}