//Server and Client Communicating with each other in multiple Lines

import java.net.*;
import java.io.*;

class Client_5
{
	public static void main(String args[])throws Exception
	{
		String send,recieve;
		
		Socket client=new Socket("127.0.0.1",1234);
		BufferedReader br=new BufferedReader(new InputStreamReader(client.getInputStream()));
		PrintStream ps=new PrintStream(client.getOutputStream());
		BufferedReader br_1=new BufferedReader(new InputStreamReader(System.in));
		
		while(true)
		{
			System.out.print("Client: ");
			send=br_1.readLine();
			ps.println(send);
			recieve=br.readLine();
			System.out.println("Server: "+recieve);
		}
	}
}