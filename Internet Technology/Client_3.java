//Program  where server communicates with client multiple lines

import java.io.*;
import java.net.*;

class Client_3
{
	public static void main(String args[])throws Exception
	{
		Socket client=new Socket("127.0.0.1",1234);//Creating a Socket object
		String recieve;
		
		BufferedReader br=new BufferedReader(new InputStreamReader(client.getInputStream()));
		
		while(true)
		{
			recieve=br.readLine();
			System.out.println("Server says: "+recieve);
		}
	}
}