<%@ Page Title="" Language="VB" MasterPageFile="~/MasterPage.master" AutoEventWireup="false" CodeFile="Admin.aspx.vb" Inherits="Admin" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
<style>
body
{
    background-color: #ffe0b3;
}
</style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="MainContentPlaceHolder" Runat="Server">
    <div class="container-fluid" style="max-width:600px;background-color: #ffe0b3; margin:auto">
  <div class="jumbotron"  style="background-color: #ffe0b3;">
  <h2>Welcome Admin!!</h2>
      <asp:Label ID="Label1" runat="server" Text=""></asp:Label>
  <form role="form" runat="server">
    <div class="form-group">
      <label for="name" runat="server">Name:</label>
      <input type="text" runat="server" class="form-control" id="name"> 
    </div>
    <div class="form-group">
      <label for="type" runat="server">Food Type:</label>
      <input type="text" runat="server" class="form-control" id="type"> 
    </div>
	<div class="form-group">
      <label for="category" runat="server">Food Category:</label>
      <input type="text"  runat="server" class="form-control" id="category">
    </div>
	<div class="form-group">
      <label for="ingredient" runat="server">Ingredient:</label>
      <textarea class="form-control" rows="5" runat="server" id="ingredient"></textarea>
    </div>
	<div class="form-group">
      <label for="step" runat="server">Steps Involve:</label>
      <textarea class="form-control" rows="5" runat="server" id="step3"></textarea>
    </div>
	<asp:FileUpload ID="image1" runat="server" />

	<asp:Button ID="Button1" runat="server" Text="Submit" />
     
  </form>
</div>
</div>

</asp:Content>

