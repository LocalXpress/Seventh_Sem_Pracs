//Where the server and Client can communicate in single lines

import java.net.*;
import java.io.*;

class Server_4
{
	public static void main(String args[])throws Exception
	{
		String send,recieve;
		
		ServerSocket sr=new ServerSocket(1234);
		System.out.println("Waiting for the connection!!");
		Socket client=sr.accept();
		System.out.println("Connected!!");
		
		PrintStream ps=new PrintStream(client.getOutputStream());
		BufferedReader br=new BufferedReader(new InputStreamReader(client.getInputStream()));
		BufferedReader br_1=new BufferedReader(new InputStreamReader(System.in));
		
		recieve=br.readLine();
		System.out.println("Client: "+recieve);
		System.out.print("Server: ");
		send=br_1.readLine();
		ps.println(send);
		
	}
}