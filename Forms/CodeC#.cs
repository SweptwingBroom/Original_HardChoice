using csharp.format.enable;	
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

public partial class register : System.Web.UI.Page
{
    //--Creation of string for User--
    public string st="";

    protected void Page_Load(Object sender, EventArgs e)
    {
        st+="<table border = '1' dir = 'ltr' align = 'center'>";
        st+= "<tr><th> clospan = '2' align = 'center'>The things accepted</th></td>";

        string lNanme = Request.Form["lName"];
        string fNanme = Request.Form["fName"];  
        string eMail = Request.Form["eMail"];

        st+=;  
    }
}