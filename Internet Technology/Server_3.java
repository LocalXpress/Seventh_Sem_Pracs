//Program where the Server and Client communicates in multiple lines

import java.net.*;
import java.io.*;

class Server_3
{
	public static void main(String args[])throws Exception
	{
		String send;
		
		ServerSocket sr=new ServerSocket(1234);
		System.out.println("Waiting for connection!!");
		Socket client=sr.accept();
		System.out.println("Connected!!");
		
		PrintStream ps=new PrintStream(client.getOutputStream());
		BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
		
		while(true)
		{
			System.out.print("Server: ");
			send=br.readLine();
			ps.println(send);
		}
	}
}