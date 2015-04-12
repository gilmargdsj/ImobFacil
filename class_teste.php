   <?php
   class Teste {
   	var $Atrib1;
   	var $Atrib2;
   	var $ValorIniciado;
   	function Teste($contrutor){
   		echo "Contrutor acionado com : $contrutor ! <p>";
   		$this->ValorIniciado = $contrutor;
   		echo "Property ValorIniciado : $this->ValorIniciado <p>";
   	}
   	function PrintaHello($param) {
   		echo $param . "<p>";
   	}
   	function set_atrib1($p) {
   		echo "Atrib1 will be set to : $p <p>";
   		$this->Atrib1 = $p;
   		echo "Atrib1 was set to : $this->Atrib1 <p>";
   	}
   	function Persiste() {
   		echo "Done";
   	}

   }


   class Teste2 extends Teste{

   }
    




    
?>
