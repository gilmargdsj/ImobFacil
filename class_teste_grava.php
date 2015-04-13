<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>

    <?php
	require('class_teste.php');

    $login=$_POST['login'];
    $nome=$_POST['nome'];
    $senha=$_POST['senha'];

    $servername = 'localhost';
	$username = 'root';
    $password = '';
    try {
	    $link = new PDO("mysql:host=$servername;dbname=ImobFacil", $username, $password);
	    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PODException $e){
        echo "Connection failed: " . $e->getMessage."<br>";
	}


    $link->beginTransaction();
    try {
        $sql="insert into usuarios(login, nome, senha) values('".$login."', '".$nome."', '".$senha."')";
        $link->exec($sql);
        $lid = $link->lastInsertId();
        echo "Usuario ".$login." criado com sucesso ! id = " . $lid ."<br>";
        $link->commit();
     }
     catch(PDOException $e){
         echo $sql . "<br>" . $e->getMessage();
         $link->rollback();
     }


	 //$link =  mysqli_connect("localhost", "root", "", "ImobFacil");

	 /*
     $rodar = "insert into usuarios(login, nome, senha) values(?,?,?)";
     $stmt = mysqli_prepare($link, $rodar);
     mysqli_stmt_bind_param($stmt,"sss", $login, $nome, $senha);
     mysqli_stmt_execute($stmt);
     mysqli_stmt_close($stmt);

     $rodar = "select * from usuarios";

     $result = mysqli_query($link, $rodar);

     while ($row=mysqli_fetch_row($result)){
     	echo $row[0]; echo $row[1]; echo $row[2]; echo $row[3];
     }

     echo $result;
	 */
	 $link = null;
	 echo $login . "<br>"; 
	 echo $nome . "<br>";
	 echo $senha . "<br>";
	?>

  </body>
</html>