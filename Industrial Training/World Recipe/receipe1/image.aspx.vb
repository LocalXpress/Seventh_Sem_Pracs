Imports MySql.Data.MySqlClient
Imports System.Data

Partial Class image
    Inherits System.Web.UI.Page

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        Response.Clear()
        'Dim dt As New DataTable
        Dim id As String = Request.QueryString("id")
        Dim mycon As MySqlConnection = New MySqlConnection("Server=br-cdbr-azure-south-b.cloudapp.net; Database=foodmood;User Id=be2b9a2f012491;Password=53e9f142")
        Dim mycmd As MySqlCommand = New MySqlCommand("SELECT image FROM indian where id='" + id + "';", mycon)
        'Dim da As New MySqlDataAdapter
        mycon.Open()
        Dim reader As MySqlDataReader = mycmd.ExecuteReader()
        reader.Read()
        Dim imgbytes() As Byte = CType(reader.GetValue(0), Byte())
        reader.Close()
        ' da.SelectCommand = mycmd
        'da.Fill(dt)
        mycon.Close()

        Response.Buffer = True
        Response.Charset = ""
        Response.Cache.SetCacheability(HttpCacheability.NoCache)
        Response.ContentType = "image/jpeg"
        'Response.AddHeader("content-disposition", "attachment;filename=" + id + "" + DateTime.Now.Ticks + ".jpg")
        Response.BinaryWrite(imgbytes)
        Response.Flush()
        Response.End()
    End Sub


End Class
