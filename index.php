<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>
   <?php
   
   require( 'class_teste.php' );

   $vteste = new Teste("Teste");
   $vteste->PrintaHello("Hello");
   $vteste->set_atrib1(5);

   ?>

   <form action="class_teste_grava.php" method="post">
   	<button type="button"> Gravar Classe </button>
   </form>

   <?php
   echo "XXX"; 
   echo "<p></p>";
    
   print "xxx"; 
   echo "<p></p>";
    
   $x=5;
   $y=3;
    
   echo $x + $y; echo "<p></p>"; 
    
   $teste="dsjkfhksjdhfkjshfhksdf";
   echo "<font size=5 face="."console".">".$teste."</font>";
    
   ?>
  </body>
</html>
