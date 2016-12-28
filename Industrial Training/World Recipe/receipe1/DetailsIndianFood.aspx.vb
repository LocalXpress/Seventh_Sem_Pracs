Imports MySql.Data.MySqlClient

Partial Class Indian_Foods
    Inherits System.Web.UI.Page
    Dim mycon As MySqlConnection = New MySqlConnection("Server=br-cdbr-azure-south-b.cloudapp.net; Database=foodmood;User Id=be2b9a2f012491;Password=53e9f142")

    Protected Sub Page_Load(ByVal sender As Object, ByVal e As System.EventArgs) Handles Me.Load
        If Not Request.QueryString.GetValues("id") Is Nothing Then
            Dim id As String = Request.QueryString("id").ToString
            mycon.Open()
            Dim mycmd As MySqlCommand = New MySqlCommand("SELECT * FROM indian where id='" + id + "';", mycon)
            Dim reader As MySqlDataReader = mycmd.ExecuteReader()
            reader.Read()
            Image1.ImageUrl = "image.aspx?id=" + id
            ingredients.InnerHtml = reader.GetString("ingredient").Replace(Environment.NewLine, "<br/>")
            steps.InnerHtml = reader.GetString("step").Replace(Environment.NewLine, "<br/>")
            reader.Close()
            mycon.Close()


        End If



        Try
            mycon.Open()
            Dim mycmd As MySqlCommand = New MySqlCommand("SELECT * FROM indian where category='Non-Vegetarian';", mycon)

            Dim myreader As MySqlDataReader = mycmd.ExecuteReader()
            Dim list1Content As String = ""

            While myreader.Read
                myreader.GetString("name")
                list1Content += "<li><a href='DetailsIndianFood.aspx" & "?id=" & myreader.GetString("id") & "'>" & myreader.GetString("name") & "</a></li>"
            End While
            myreader.Close()
            list1.InnerHtml = list1Content



            Dim mycmd1 As MySqlCommand = New MySqlCommand("SELECT * FROM indian where category='Vegetarian';", mycon)
            Dim myreader1 As MySqlDataReader = mycmd1.ExecuteReader()
            Dim list1Content1 As String = ""

            While myreader1.Read
                myreader1.GetString("name")
                list1Content1 += "<li><a href='DetailsIndianFood.aspx" & "?id=" & myreader1.GetString("id") & "'>" & myreader1.GetString("name") & "</a></li>"
            End While
            myreader1.Close()
            list2.InnerHtml = list1Content1

        Catch ex As Exception
            Response.Write(ex.ToString())
        Finally
            mycon.Close()

        End Try
    End Sub
End Class
