<%@ Page Title="Indian Foods" Language="VB" MasterPageFile="~/MasterPage2.master" AutoEventWireup="false" CodeFile="Indian Foods.aspx.vb" Inherits="Indian_Foods" %>

<asp:Content ID="Content1" ContentPlaceHolderID="LeftContentPlaceHolder" Runat="Server">
  
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color:#ffad33;">Non-Vegetarian</div>
      <div class="panel-body" style="background-color: #ffe0b3;">
      <ul id="list1" runat="server">
      </ul>
	  </div>
    </div>
</asp:Content>


<asp:Content ID="Content2" ContentPlaceHolderID="RightContentPlaceHolder" Runat="Server">
    <div class="panel panel-default">
      <div class="panel-heading" style="background-color:#ffad33;">Vegetarian</div>
      <div class="panel-body" style="background-color: #ffe0b3;">
       <ul id="list2" runat="server">
      </ul>
      </div>
      </div>
</asp:Content>

