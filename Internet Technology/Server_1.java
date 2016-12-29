////Program to illustrate the connection between client and the server
//Sever Part

import java.net.*;
import java.io.*;

class Server_1
{
	public static void main(String args[])throws Exception
	{
		ServerSocket sr=new ServerSocket(1234);
		System.out.println("Waiting for Connection!");
		Socket client=sr.accept();
		System.out.println("Connected!!");
		
	}
}