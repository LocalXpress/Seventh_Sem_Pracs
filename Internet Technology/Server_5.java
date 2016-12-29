//Server and Client communicating with each other in multiple lines

import java.net.*;
import java.io.*;

class Server_5
{
	public static void main(String args[])throws Exception
	{
		String send,recieve;
		
		ServerSocket sr=new ServerSocket(1234);
		System.out.println("Waiting for Connection!!");
		Socket client=sr.accept();
		System.out.println("Connected!!");
		
		BufferedReader br=new BufferedReader(new InputStreamReader(client.getInputStream()));
		PrintStream ps=new PrintStream(client.getOutputStream());
		BufferedReader br_1=new BufferedReader(new InputStreamReader(System.in));
		
		while(true)
		{
			recieve=br.readLine();
			System.out.println("Client: "+recieve);
			System.out.print("Server: ");
			send=br_1.readLine();
			ps.println(send);
		}
	}
}