Imports MySql.Data.MySqlClient
Partial Class Contact_Us
    Inherits System.Web.UI.Page

    Protected Sub Button1_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles Button1.Click

        Dim mycon As MySqlConnection = New MySqlConnection("Server=br-cdbr-azure-south-b.cloudapp.net; Database=foodmood;User Id=be2b9a2f012491;Password=53e9f142")
        Try
            mycon.Open()
            Dim mycmd As MySqlCommand = New MySqlCommand("insert into Contact_Us (name,email,msg) value ('" + name.Value + "','" + email.Value + "','" + msg.Value + "')", mycon)
            mycmd.ExecuteNonQuery()
            Label1.Text = "Success"
        Catch ex As Exception
            Label1.Text = ex.ToString()
        Finally
            mycon.Close()

        End Try
    End Sub
End Class

