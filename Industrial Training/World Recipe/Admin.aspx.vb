Imports MySql.Data.MySqlClient

Partial Class Admin
    Inherits System.Web.UI.Page

  
    Protected Sub Button1_Click(ByVal sender As Object, ByVal e As System.EventArgs) Handles Button1.Click
        Dim mycon As MySqlConnection = New MySqlConnection("Server=br-cdbr-azure-south-b.cloudapp.net; Database=foodmood;User Id=be2b9a2f012491;Password=53e9f142")
        Try


            If image1.HasFile Then
                Dim length As Integer = image1.PostedFile.ContentLength
                Dim image(length) As Byte
                Dim img As HttpPostedFile = image1.PostedFile
                img.InputStream.Read(image, 0, length)
                mycon.Open()
                Dim mycmd As MySqlCommand = New MySqlCommand("insert into indian (name,type,category,ingredient,step,image) value ('" + name.Value + "','" + type.Value + "','" + category.Value + "','" + ingredient.Value + "','" + step3.Value + "',@imagedata)", mycon)
                mycmd.Parameters.Add("@imagedata", MySqlDbType.Blob).Value = image
                mycmd.ExecuteNonQuery()
            End If
            Label1.Text = "Success"
        Catch ex As Exception
            Label1.Text = ex.ToString()
        Finally
            mycon.Close()

        End Try
    End Sub
End Class
