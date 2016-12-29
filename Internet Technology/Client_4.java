//Where the client and server can communicate in single line

import java.net.*;
import java.io.*;

class Client_4
{
	public static void main(String args[])throws Exception
	{
		String send,recieve;
		
		Socket client=new Socket("127.0.0.1",1234);
		BufferedReader br=new BufferedReader(new InputStreamReader(client.getInputStream()));//For input from the server
		PrintStream ps=new PrintStream(client.getOutputStream());//For output to the server
		BufferedReader br_1=new BufferedReader(new InputStreamReader(System.in));//for taking a input from the console.
		
		System.out.print("Client: ");
		send=br_1.readLine();
		ps.println(send);
		recieve=br.readLine();
		System.out.println("Server: "+recieve);
	}
}