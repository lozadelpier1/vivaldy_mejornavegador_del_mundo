<? Php
error_reporting (0);
$ Appservlang = $ _GET [ 'appservlang'];
switch ($ appservlang) {
	caso "th":
		$ Appservlang = "th";
	descanso;
	defecto :
		$ Appservlang = "es";
	descanso;
}
/ ************************************************* *********************** /
/ * * AppServ Open Project /
/ * * =========================== /
/ * * /
/ * Copyright (C) 2001 por Phanupong Panyadee (http://www.appservnetwork.com) * /
/ * * Http://www.appservnetwork.com /
/ * * /
/ * Este programa es software libre. Puede redistribuirlo y / o modificarlo * /
/ * Bajo los términos de la Licencia Pública General de GNU según lo publicado por * /
/ * La Fundación para el Software Libre; ya sea la versión 2 de la licencia. * /
/ ************************************************* *********************** /
include ( "AppServ / main.php");

$ Phpver = phpversion ();
print "<html>
<Head>
<Title> AppServ Abrir proyecto "._APPVERSION." </ Title>
<Meta http-equiv = \ "Content-Type \" content = \ "text / html; charset = UTF-8 \">
<Style>
<! - Ocultar estilo para navegadores antiguos 
BODY {font-family: Tahoma; font-size = \ "10 \"}
.headd {font-family: Tahoma; font-size: 13pt; text-decoration: none; }
.app {font-family: Tahoma; font-size: 13pt; text-decoration: none; }
.supp {font-family: Tahoma; font-size: 20pt; text-decoration: none; }
A: link {font-family: Tahoma; text-decoration: none; color: # 0000FF}
A: visited {font-family: Tahoma; text-decoration: none; color: # 0000FF}
A: hover {font-family: Tahoma; text-decoration: none; color: # FF0000}
R: activa {font-family: Tahoma; text-decoration: none; color: # FF0000}
->
</ Style>
</ Head>
<Body bgcolor = \ "# FFFFFF \">

  <Table border = \ "0 \" width = \ "900 \" align = \ "centro \" height = \ "19 \">
    <Tr bgcolor = \ "# D2E9FF \"> 
      <Td width = \ "100% \" height = \ "90 \" align = \ "centro \" valign = \ "absmiddle \"> <font color = \ "# 000080 \">
	  <Span class = \ "Headd \"> <strong> <big> & nbsp; El proyecto abierto de AppServ - "._APPVERSION." "._PARA." "._OS." <br> Ahora se ejecuta en <font color = \ "# FF0000 \"> PHP $ phpver </ font> </ big> </ strong> </ span> </ font> </ td>
    </ Tr>
  </ Table>

<Div align = \ "centro \"> 
  <Table width = \ "800 \" border = \ "0 \">
    <Tr bgcolor = \ "# F9FBFF \"> 
      <Td altura = \ "344 \"> 
        <Blockquote> 
          <P> <font color = \ "# 000080 \"> <span class = \ "Headd \"> <strong> <br>
	            <Img src = \ "AppServ / members.gif \" width = \ "20 \"
    height = \ "20 \" align = \ "absmiddle \"> <span class = \ "app \"> <a href=\""._LPHPMYADMIN."/\"> "._PHPMYADMIN." "._VERSIÓN." "._VPHPMYADMIN." </a> <br>
	            <img
    src = \ "/ PHP-logo.gif \ AppServ" width = \ "40 \" height = \ "21 \" align = \ "absmiddle \"> <a href=\"phpinfo.php\"> "._PHPINFO ". "._VERSION." </a> <br>
   </ Strong> </ span> </ font> </ p>
          <P> <span class = \ "app \"> <u> "._ SOBRE". "._APPSERV." "._VERSIÓN." "._VERSION DE APLICACION." "._PARA." "._OS." </ U> <br>
            "._APPSERV." "._ES." <br> <blockquote>
            <Li> <b> <a href=\"http://httpd.apache.org\" target=\"_blank\"> "._APACHE." </ B> "._VERSION." <B> "._ VAPACHE." </ B> </a> <br>
            <Li> <b> <a href=\"http://www.php.net\" target=\"_blank\"> "._PHP." </ B> "._VERSION." <B> "._ VPHP." & "._VPHP7." </ B> </a> <br>
            <Li> <b> <a href=\"http://www.mysql.com\" target=\"_blank\"> "._MYSQL." </ B> "._VERSION." <B> "._ VMYSQL." </ B> </a> <br>
            <Li> <b> <a href=\"http://www.phpmyadmin.net\" target=\"_blank\"> "._PHPMYADMIN." </ B> "._VERSION." <B> "._ VPHPMYADMIN." </ B> </a> <br>
			</ Blockquote>
			</ Span> 
          </ P>
        </ Blockquote>
        <Ul>
          <Li> <a href=\"appserv/ChangeLog.txt\"> <span class = \ "app \"> "._ CAMBIOS." </ Span> </a> </ li>
          <Li> <a href=\"appserv/README-$appservlang.php?appservlang=$appservlang\"> <span class = \ "app \"> "._ README." </ Span> </a> </ li>
          <Li> <a href=\"appserv/AUTHORS.txt\"> <span class = \ "app \"> "._ AUTOR." </ Span> </a> </ li>
          <Li> <a href=\"appserv/COPYING.txt\"> <span class = \ "app \"> "._ COPIAR." </ Span> </a> </ li>
		 </ Li> </ ul> </ span>
          <Span class = \ "supp \"> <b> "._ OFSITE." : </ B> <a href=\"http://www.AppServ.org/?appserv-"._APPVERSION."\" target=\"_blank\"> http://www.AppServ.org </ a> <br> </ span>
          <Span class = \ "supp \"> <b> "._ HSUP." : </ B> <a href=\"http://www.AppServHosting.com/?appserv-"._APPVERSION."\" target=\"_blank\"> http://www.AppServHosting.com </ a> </ span>
<br>
<br>
<Span class = \ "app \"> <b> "._LANG." : </ B> <a href=\"index.php?appservlang=en\"> <img src = \ anchura "AppServ / bandera-english.png \" = \ "30 \" height = \ "16 \" align = \ "absmiddle \" border = \ "0 \"> </a> & nbsp; <a href=\"index.php?appservlang=th\"> <img src = \ "/ bandera-thai.png \ AppServ" width = \ "30 \" height = \ "16 \" align = \ "absmiddle \ "border = \" 0 \ "> </a>
<br>
      </ Td>
    </ Tr>
  </ Table>  

  <Table border = \ "0 \" width = \ "900 \" align = \ "centro \" height = \ "19 \">
    <Tr> 
	  <Td width = \ "100% \" height = \ "60 \" align = \ "centro \" valign = \ "absmiddle \" bgcolor = \ "# D2E9FF \">
	  <Font color = \ "# 000080 \" class = \ "Headd \"> & nbsp; & nbsp; & nbsp; <img src = \ "AppServ / softicon.gif \" width = \ "20 \" height = \ "20 \ "align = \" \ absmiddle "> & nbsp; <b>" ._ LEMA "</ b> </ font> </ td>.
    </ Tr>
  </ Table>


</ Body>
</ Html>
";
?>
