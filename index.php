<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>COPD::index</title>

<style type="text/css">
body, html {
	margin:0 0;
	padding:0 0;
	height: 100%;
	font-family: 'PT Serif', serif;
	line-height:18px;
}
#wapper{
	height: 100%;
}
#textbox {
	float: left;
	width: 840px;
	min-height:100px;
	margin-left:150px;
	margin-top: -100px;
	margin-bottom: 20px;
}
#usermenu {
	background-color: #F00;
	width:840px;
	height:40px;
	background: rgb(239,182,183); /* Old browsers */
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2VmYjZiNyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUxJSIgc3RvcC1jb2xvcj0iI2RiMGEwZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlZGJiYmQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  rgba(239,182,183,1) 0%, rgba(219,10,14,1) 51%, rgba(237,187,189,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(239,182,183,1)), color-stop(51%,rgba(219,10,14,1)), color-stop(100%,rgba(237,187,189,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(239,182,183,1) 0%,rgba(219,10,14,1) 51%,rgba(237,187,189,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(239,182,183,1) 0%,rgba(219,10,14,1) 51%,rgba(237,187,189,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(239,182,183,1) 0%,rgba(219,10,14,1) 51%,rgba(237,187,189,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(239,182,183,1) 0%,rgba(219,10,14,1) 51%,rgba(237,187,189,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#efb6b7', endColorstr='#edbbbd',GradientType=0 ); /* IE6-8 */

}
#text {
	border: 2px ridge #CCC;
	padding: 5px;
	color:#000;
}
#header {
	height: 150px;
	width:860px;
	background-color: #F00;
	float:left;
	border-bottom: #bc1300 solid 3px;
border-right: #bc1300 solid 3px
background: rgb(204,0,0); /* Old browsers */
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2NjMDAwMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNjYzAwMDAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  rgba(204,0,0,1) 0%, rgba(204,0,0,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(204,0,0,1)), color-stop(100%,rgba(204,0,0,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#cc0000',GradientType=0 ); /* IE6-8 */

}
#headerM {
	background-image: url(images/headertxt.png);
	background-repeat: no-repeat;
	height:200px;
	margin-top: -40px;
	margin-left:100px;
}
#logo {
	background-color: #F00;
	height: 300px;
	width: 300px;
	float:left;
	-webkit-border-radius: 0px 0px 150px 0px;
border-radius: 0px 0px 150px 0px;
background: rgb(204,0,0); /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2NjMDAwMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNjYzAwMDAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  rgba(204,0,0,1) 0%, rgba(204,0,0,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(204,0,0,1)), color-stop(100%,rgba(204,0,0,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#cc0000',GradientType=0 ); /* IE6-8 */

}
#logoM {
	background-image: url(images/header.png);
	background-repeat: no-repeat;
	background-position: center center;
	width:227px;
	height:222px;
}
#menu{
	float: left;
	width:150px;
	background:#F00;
	clear:both;
	height: 800px;
	background: rgb(204,0,0); /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2NjMDAwMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNjYzAwMDAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  rgba(204,0,0,1) 0%, rgba(204,0,0,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(204,0,0,1)), color-stop(100%,rgba(204,0,0,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#cc0000',GradientType=0 ); /* IE6-8 */
}
	#menuM ul {  
    list-style-type: none;  
    width: 175px; /* Nieuw */  
}  
#clear {
	clear: both;
}
#menuM ul li {  
    margin: 0;  
}  
#menuM ul li a {  
    display: block;  
    padding: 15px;   
    color: white;  
}  
#menuM ul li a:hover {
	color: #000;
}  
#sign_box
{

width:220px; 
background-color:#fff; 
border:solid 3px #bc1300; 
padding:8px;
display:none;
margin-bottom:5px;
-moz-border-radius-topright:6px;
-moz-border-radius-topleft:6px;
-moz-border-radius-bottomleft:6px;-moz-border-radius-bottomright:6px;-webkit-border-top-right-radius:6px;
-webkit-border-top-left-radius:6px;-webkit-border-bottom-left-radius:6px;-webkit-border-bottom-right-radius:6px;
z-index: 10;
position: absolute;
right: 160px;
}
#sign_box a{ font-size:12px; color:#006699; font-weight:normal; text-decoration:underline;}
#sign_box a:hover{ font-size:12px; color:#006699; text-decoration:underline;font-weight:normal}
.sign_in
{
background-image: url(images/DownButton1.png);
	height: 100px;
	width: 50px;
	float:right;
	margin-top:-110px;
	margin-right:20px;


}
#footer {
	text-align:right;
	background-color: #F00;
	float: left;
	width: 100%;
	height: 50px;
	background: rgb(204,0,0); /* Old browsers */
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2NjMDAwMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNjYzAwMDAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  rgba(204,0,0,1) 0%, rgba(204,0,0,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(204,0,0,1)), color-stop(100%,rgba(204,0,0,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(204,0,0,1) 0%,rgba(204,0,0,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc0000', endColorstr='#cc0000',GradientType=0 ); /* IE6-8 */
	padding-top: 10px;
	color: #FFF;
}
#usermenu{
	padding-top:2px;
}
#usermenu ul {  
    list-style-type: none;  
}  
#usermenu ul li {  
    display: inline;  
    margin: 0;  
}  
#usermenu ul li a {  
    /* Nieuw */  
    padding: 8px;    
    font-family: Verdana;  
    color: white;  
}  
        div#my-timer{width: 400px;background: lightblue; margin:  0 auto;text-align: center;padding:5px 0px 5px 0px;}
		
/* If you want you can use font-face */
@font-face {
    font-family: 'PT Serif', serif;
    src: url('Verdana.eot');
    src: url('Verdana.eot?#iefix') format('embedded-opentype'),
         url('Verdana-webfont.woff') format('woff'),
         url('Verdana-webfont.ttf') format('truetype'),
         url('Verdana-webfont.svg#Verdana') format('svg');
}

.clock {
	width:800px;
	margin:0 auto;
	padding:30px;
	color:#000;
}

#Date { font-family: 'PT Serif', serif; font-size:20px; text-align:center; }

.clock ul { width:800px; margin:0 auto; padding:0px; list-style:none; text-align:center; }
.clock ul li { display:inline; font-size:20px;; text-align:center; font-family: 'PT Serif', serif; }

#point { position:relative; -moz-animation:mymove 1s ease infinite; -webkit-animation:mymove 1s ease infinite; padding-left:10px; padding-right:10px; }

	.dossier_wrapper						{
	width:830px;
	height:300px;
	overflow-y:auto;
	margin-top: auto;
	margin-right: auto;
	margin-bottom: auto;
	margin-left: auto;
}
.dossier_datum_wrapper					{
	float:left;
	width:100px;
	text-align:left;
	margin-top: 10px;
}
.dossier_soep_wrapper					{
	float:left;
	width:580px;
	padding-left:10px;
	padding-right:10px;
	text-align:center;
	margin-top: 10px;
}
.dossier_initialen_wrapper				{
	float:left;
	width:100px;
	text-align:right;
	margin-top: 10px;
}

.dossier_datum_titel			{ background-color:#e66e41; color:#FFF; font-family: 'PT Serif', serif; font-weight:700; font-size:20px; text-align:center; padding-top:8px; padding-bottom:8px; -webkit-border-radius: 6px; border-radius: 6px; }
.dossier_soep_titel				{
	background-color:#262829;
	color:#FFF;
	font-family: 'PT Serif', serif;
	font-weight:700;
	font-size:20px;
	text-align:center;
	padding-top:8px;
	padding-bottom:8px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
	margin-bottom:16px;
}
.dossier_initialen_titel		{ background-color:#59c0df; color:#FFF; font-family: 'PT Serif', serif; font-weight:700; font-size:20px; text-align:center; padding-top:8px; padding-bottom:8px; -webkit-border-radius: 6px; border-radius: 6px; }

.dossier_soep_rapport						{  }
.dossier_soep_rapport_wrapper				{  }
.dossier_soep_rapport_wrapper_links			{ float:left; width:50px; padding-top:14px; padding-bottom:14px; text-align:center; background-color:#262829; -webkit-border-radius: 6px; border-radius: 6px; color:#FFF; font-family: 'PT Serif', serif; font-weight:700;  margin-bottom:14px; font-size:32px; }
.dossier_soep_rapport_wrapper_rechts		{ float:left; width:490px; text-align:left; margin-left:10px; margin-bottom:14px; padding:15px; padding-bottom:5px; -webkit-border-radius: 6px; border-radius: 6px; -webkit-box-shadow:  0px 0px 1px 1px #b9b9b9; box-shadow:  0px 0px 1px 1px #b9b9b9; }
.dossier_soep_rapport_wrapper_rechts p		{ font-family:Verdana, Geneva, sans-serif; font-size:12px; margin:0px; margin-bottom:15px; padding:0px; line-height:16px; }

#userlist {
	width: 800px;
	-webkit-border-radius: 10px;
border-radius: 10px;
-webkit-box-shadow:  2px 2px 3px 2px #000;
        
        box-shadow:  2px 2px 3px 2px #000;
		border-top:#000 1px solid;
		margin-bottom: 8px;
		
}
#userlist #user_id {
	width: 160px;
	padding: 16px;
	-webkit-border-radius: 10px 0px 0px 10px;
	border-radius: 10px 0px 0px 10px;
	background: rgb(167,199,220); /* Old browsers */
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2E3YzdkYyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM4NWIyZDMiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  rgba(167,199,220,1) 0%, rgba(133,178,211,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(167,199,220,1)), color-stop(100%,rgba(133,178,211,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(167,199,220,1) 0%,rgba(133,178,211,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(167,199,220,1) 0%,rgba(133,178,211,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(167,199,220,1) 0%,rgba(133,178,211,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(167,199,220,1) 0%,rgba(133,178,211,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a7c7dc', endColorstr='#85b2d3',GradientType=0 ); /* IE6-8 */
	float:left;
	border-right-width: 1px;
	border-right-style: ridge;
	border-right-color: #000;		
}
#userlist #users {
	padding: 16px;
	float: left;
	width: 300px;
	background: rgb(249,252,247); /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Y5ZmNmNyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmNWY5ZjAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  rgba(249,252,247,1) 0%, rgba(245,249,240,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(249,252,247,1)), color-stop(100%,rgba(245,249,240,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(249,252,247,1) 0%,rgba(245,249,240,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(249,252,247,1) 0%,rgba(245,249,240,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(249,252,247,1) 0%,rgba(245,249,240,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(249,252,247,1) 0%,rgba(245,249,240,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f9fcf7', endColorstr='#f5f9f0',GradientType=0 ); /* IE6-8 */

	
}
#userlist #useractie {
	padding: 16px;
	float: right;
	width: 40px;
	background: rgb(167,199,220); /* Old browsers */
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2E3YzdkYyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM4NWIyZDMiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  rgba(167,199,220,1) 0%, rgba(133,178,211,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(167,199,220,1)), color-stop(100%,rgba(133,178,211,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(167,199,220,1) 0%,rgba(133,178,211,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(167,199,220,1) 0%,rgba(133,178,211,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(167,199,220,1) 0%,rgba(133,178,211,1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(167,199,220,1) 0%,rgba(133,178,211,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a7c7dc', endColorstr='#85b2d3',GradientType=0 ); /* IE6-8 */
-webkit-border-radius: 0px 10px 10px 0px;
        border-radius: 0px 10px 10px 0px;
		border-left:#000 1px solid;
}
#userlist_wapper {
	height:600px;
	overflow-y: scroll;
}
</style>
<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December" ]; 
var dayNames= ["Zondag","Maandag","Dinsdag","Woensdag","Donderdag","Vrijdag","Zaterdag"]

// Create a newDate() object
var newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year   
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
	// Create a newDate() object and extract the seconds of the current time on the visitor's
	var seconds = new Date().getSeconds();
	// Add a leading zero to seconds value
	$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	},1000);
	
setInterval( function() {
	// Create a newDate() object and extract the minutes of the current time on the visitor's
	var minutes = new Date().getMinutes();
	// Add a leading zero to the minutes value
	$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
	
setInterval( function() {
	// Create a newDate() object and extract the hours of the current time on the visitor's
	var hours = new Date().getHours();
	// Add a leading zero to the hours value
	$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);	
});
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<script>
$(document).ready(function()
{
$(".sign_in").click(function(){

$("#sign_box").show();

return false;

});

$("body #headerM").click(function(){

$("#sign_box").hide();

return false;

});


});
</script>

<script>
function open_win()
{
window.open("http://127.0.0.1/COPD/calender/calendar.php","_blank","toolbar=yes, location=yes, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=840, height=680");
}
</script>
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
    <script type="text/javascript">
        var settimmer = 0;
        $(function(){
                window.setInterval(function() {
                    var timeCounter = $("b[id=show-time]").html();
                    var updateTime = eval(timeCounter)- eval(1);
                    $("b[id=show-time]").html(updateTime);

                    if(updateTime == 0){
                        window.location = ("redirect.php");
                    }
                }, 1000);

        });
    </script>
</head>

<body>
<?
    include("config.php");
?>
<div id="wapper">
<div id="logo"><div id="logoM"></div></div>
<div id="header"><div id="headerM"></div>
<div id="button">
<div>
<? if ($_SESSION['login'] == "1"){
}else{
echo '<a href="#" class="sign_in"></a>';
}
?>
</div>
<div id="sign_box"><?
if($_POST['login'])
{
    $username = addslashes($_POST['username']);
    $md5_ww = md5($_POST['password']);
    $sql = "SELECT * FROM `inlogsysteem` WHERE `username` = '".$username."' AND `password` = '".$md5_ww."'";
    $query = mysql_query($sql);
    
    if(mysql_num_rows($query) == 1)
    {
        $username = addslashes($_POST['username']);
        $md5_ww = md5($_POST['password']);
        $statussql = "SELECT * FROM `inlogsysteem` WHERE `username` = '".$username."' AND `password` = '".$md5_ww."'";
        $statusquery = mysql_query($statussql);
        $status = mysql_fetch_assoc($statusquery);
        
           	switch($status['status']){
			case "2":
				$_SESSION['login'] = "1";
                $_SESSION['status'] = "2";
                $_SESSION['naam'] = $username;
                $_SESSION['id'] = $status['id'];
			break;
			
			case "3":
			$_SESSION['login'] = "1";
                $_SESSION['status'] = "3";
                $_SESSION['naam'] = $username;
                $_SESSION['id'] = $status['id'];
			break;
			case "4":
			$_SESSION['login'] = "1";
                $_SESSION['status'] = "4";
                $_SESSION['naam'] = $username;
                $_SESSION['id'] = $status['id'];
			break;
			case "5":
			$_SESSION['login'] = "1";
                $_SESSION['status'] = "5";
                $_SESSION['naam'] = $username;
                $_SESSION['id'] = $status['id'];
			break;
		}
        
        header("Location: /COPD/?p=home");
    }

    else
    {
        echo "Gebruikersnaam en/of wachtwoord verkeerd<br><br>";
    }
}
    echo "
    <table border=\"0\">
    <form method=\"post\">
    <tr>
        <td>Username</td>
        <td><input type=\"text\" name=\"username\" size=\"15\"></td>
    </tr>
    <tr>    
        <td>Password</td>
        <td><input type=\"password\" name=\"password\" size=\"15\"></td>
    </tr>
    <tr>
        <td align=\"right\"><input type=\"button\" name=\"registreer\" value=\"Registreer!\" onClick=\"window.open('registreer.php','Registreer_Popup','width=250,height=300,scrollbars=yes')\"></td>
		<td><input type=\"submit\" name=\"login\" value=\"Login!\"></td>
    </tr>
    </form>
    </table>
    ";
?>
</div>
</div>
</div>
<div id="menu">
<div id="menuM">
 <ul>  
        <li><a href="?p=home" title="Home">Home</a></li>  
        <li><a href="?p=contact" title="Contact">Contact</a></li>  
       <li><a href="?p=protocollen" title="protocollen">Protocollen</a></li>   
    </ul> 
</div> 
</div>
<div id="textbox">
<div class="clock">
   <div id="Date"></div>
      <ul>
          <li id="hours"></li>
          <li id="point">:</li>
          <li id="min"></li>
          <li id="point">:</li>
          <li id="sec"></li>
      </ul>
</div>
<?
if($_SESSION['login'] == "1" && $_SESSION['status'] == "5")
{
	    echo'<div id="usermenu">';
    echo '<ul>';
    echo "<li>Welkom ".ucfirst($_SESSION['naam'])." !</li>";
    echo "<li><a href=\"?p=admin\"><img src=\"images/user_gray.png\" width=\"16\" height=\"16\"></a></li>";
	echo"<li><a href=\"#\" onclick=\"open_win()\"><img src=\"images/calendar.png\" width=\"16\" height=\"16\"></a></li>";
	echo '<li><a href="?p=pm"><img src="images/email.png" width="16" height="16"></a></li>';
	include("pm/alert.php");
	echo '<li><a href="?p=diary"><img src="images/book_edit.png" width="16" height="16"></a></li>';
echo '<li><a href="?p=dossier"><img src="images/report.png" width="16" height="16"></a></li>';	
echo '<li><a href="?p=users_dossier"><img src="images/report_user.png" width="16" height="16"></a></li>';	
    echo "<li><a href=\"?p=wijzig_pass\"><img src=\"images/lock_edit.png\" width=\"16\" height=\"16\"></a></li>";
    echo "<li><a href=\"?p=ledenlijst\"><img src=\"images/user.png\" width=\"16\" height=\"16\"></a></li>";
    echo "<li><a href=\"?p=uitloggen\"><img src=\"images/disconnect.png\" width=\"16\" height=\"16\"></a></li>";
	echo '</ul>';
	echo '</div>';
}

elseif($_SESSION['login'] == "1" && $_SESSION['status'] == "4")
{
	 echo'<div id="usermenu">';
    echo '<ul> ';
    echo "<li>Welkom ".ucfirst($_SESSION['naam'])." !</li>";
    echo "<li><a href=\"?p=wijzig_pass\"><img src=\"images/lock_edit.png\" width=\"16\" height=\"16\"></a></li>";
	echo"<li><a href=\"#\" onclick=\"open_win()\"><img src=\"images/calendar.png\" width=\"16\" height=\"16\"></a></li>";
		echo '<li><a href="?p=pm"><img src="images/email.png" width="16" height="16"></a></li>';
	include("pm/alert.php");
echo '<li><a href="?p=users_dossier"><img src="images/report_user.png" width="16" height="16"></a></li>';	
    echo "<li><a href=\"?p=ledenlijst\"><img src=\"images/user.png\" width=\"16\" height=\"16\"></a></li>";
    echo "<li><a href=\"?p=uitloggen\"><img src=\"images/disconnect.png\" width=\"16\" height=\"16\"></a></li>";
	echo '</ul>';
	echo '</div>';
}

elseif($_SESSION['login'] == "1" && $_SESSION['status'] == "3")
{
	 echo'<div id="usermenu">';
    echo '<ul> ';
    echo "<li>Welkom ".ucfirst($_SESSION['naam'])." !</li>";
    echo "<li><a href=\"?p=wijzig_pass\"><img src=\"images/lock_edit.png\" width=\"16\" height=\"16\"></a></li>";
	echo"<li><a href=\"#\" onclick=\"open_win()\"><img src=\"images/calendar.png\" width=\"16\" height=\"16\"></a></li>";
		echo '<li><a href="?p=pm"><img src="images/email.png" width="16" height="16"></a></li>';
	include("pm/alert.php");
echo '<li><a href="?p=users_dossier"><img src="images/report_user.png" width="16" height="16"></a></li>';	
    echo "<li><a href=\"?p=ledenlijst\"><img src=\"images/user.png\" width=\"16\" height=\"16\"></a></li>";
    echo "<li><a href=\"?p=uitloggen\"><img src=\"images/disconnect.png\" width=\"16\" height=\"16\"></a></li>";
	echo '</ul>';
	echo '</div>';
}

elseif($_SESSION['login'] == "1" && $_SESSION['status'] == "2")
{
	 echo'<div id="usermenu">';
    echo '<ul> ';
    echo "<li>Welkom ".ucfirst($_SESSION['naam'])." !</li>";
    echo "<li><a href=\"?p=wijzig_pass\"><img src=\"images/lock_edit.png\" width=\"16\" height=\"16\"></a></li>";
		echo '<li><a href="?p=pm"><img src="images/email.png" width="16" height="16"></a></li>';
	include("pm/alert.php");
	echo '<li><a href="?p=diary"><img src="images/book_edit.png" width="16" height="16"></a></li>';
	echo '<li><a href="?p=dossier"><img src="images/report.png" width="16" height="16"></a></li>';
	echo"<li><a href=\"#\" onclick=\"open_win()\"><img src=\"images/calendar.png\" width=\"16\" height=\"16\"></a></li>";
    echo "<li><a href=\"?p=uitloggen\"><img src=\"images/disconnect.png\" width=\"16\" height=\"16\"></a></li>";
	echo '</ul>';
	echo '</div>';
}?>
<div id="text">
<?
switch($_GET['p']){
case "home":
include("home.php");
break;
case "admin":
include("admin.php");
break;
case "contact":
include("contact.php");
break;
case "protocollen":
include("protocollen.html");
break;
case "calendar":
include("calender/calendar.php");
break;
case "ledenlijst":
include("ledenlijst.php");
break;
case "wijzig_pass":
include("wijzigpass.php");
break;
case "pm":
include("pm/pm_inbox.php");
break;
case "pm_new":
include("pm/pm_new.php");
break;
case "pm_read":
include("pm/pm_read.php");
break;
case "pm_trash":
include("pm/pm_trash.php");
break;
case "pm_option":
include("pm/pm_option.php");
break;
case "diary":
include_once("diary.php");
break;	
case "dossier":
include_once("dossier/dossier.php");
break;
case "user_dossier":
include_once("dossier/user_dossier.php");
break;
case "users_dossier":
include_once("dossier/users_dossier.php");
break;		
case "dossier_insert":
include_once("dossier/dossier_insert.php");
break;	
case "uitloggen":
$_SESSION = array();
echo'<div id="my-timer">
        u logt uit over <b id="show-time">4</b> seconden        
</div>';
break;	
default:
echo "error 404 pagina niet gevonden!";
break;
}
?>
</div>
</div>
<div id="footer">Copyright&copy; 2012-2013</div>
<div id="clear"></div>
</div>
</body>
</html>
