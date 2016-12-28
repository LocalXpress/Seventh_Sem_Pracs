<%@ Page Title="Contact Us" Language="VB" MasterPageFile="~/MasterPage.master" AutoEventWireup="false" CodeFile="Contact Us.aspx.vb" Inherits="Contact_Us" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
<style>
body
{
    background-color: #ffe0b3;
}
</style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="MainContentPlaceHolder" Runat="Server">
<div class="container-fluid">
<div class="text" style="max-width:600px;background-color: #ffe0b3; margin:auto">
<p><div class="text">Would you like to share with us your opinion,
 suggestions, views or tell us about some error regarding the site. Then
 fill the form below. </div><br /></p>
 <div class="jumbotron" style="background-color: #ffe0b3;">
<form role="form">
    <div class="form-group">
      <label for="name" runat="server"><b> Name</b></label>
      <input type="text" runat="server" class="form-control" id="name">
	   <label for="email" runat="server"><b> E-mail</b></label>
      <input type="text" runat="server" class="form-control" id="email">
	   <label for="msg" runat="server">Comment:</label>
  <textarea class="form-control" rows="5"  runat="server" id="msg"></textarea>
    </div>
<asp:Button ID="Button1" runat="server" Text="Submit" />
    <br />
    <br />
</form>
     <asp:Label ID="Label1" runat="server" Text=""></asp:Label>
</div>
</div>
</asp:Content>

