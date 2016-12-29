//Program where Sever communicates with the client single line

import java.io.*;
import java.net.*;

class Server_2
{
	public static void main(String args[])throws Exception
	{
		String send;
		
		ServerSocket sr= new ServerSocket(1234);
		System.out.println("Waiting for Connection!");
		Socket client=sr.accept();
		System.out.println("Connected");
		
		PrintStream ps=new PrintStream(client.getOutputStream());//to send the written words in a stream
		BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
		
		System.out.print("Server: ");
		send=br.readLine();
		ps.println(send);
		
		
	}
}