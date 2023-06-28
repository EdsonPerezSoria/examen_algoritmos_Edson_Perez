<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<link rel="stylesheet"  href="style/css/estilos.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Ventas</title>
	
</head>
<body style="background-color:rgb(163, 238, 234)">
<form method="POST">
    Ingresa los valores de alice
    <br><br>
   
    <input type="number" id="valor1" name="valor1">
    <br><br>
    
    <input type="number" id="valor2" name="valor2">
    <br><br>
   
    <input type="number" id="valor3" name="valor3">
    <br><br><br><br>
    Ingresa los valores de Bob
    <br><br>
    
    <input type="number" id="valor4" name="valor4">
    <br><br>  
    
    <input type="number" id="valor5" name="valor5">
    <br><br>
    
    <input type="number" id="valor6" name="valor6">

    <br><br><br><br>
    
		<input type="text" id="resultado" name="resultado" value=0 readonly >

    <button type="button" onclick="compara()" name="comparar">Comparar</button>

</form>


</body>
</html>

<script>
    function compara(){
		var a0 = parseFloat(document.getElementById("valor1").value);
    var a1 = parseFloat(document.getElementById("valor2").value);
    var a2 = parseFloat(document.getElementById("valor3").value);
    var b0 = parseFloat(document.getElementById("valor4").value);
    var b1 = parseFloat(document.getElementById("valor5").value);
    var b2 = parseFloat(document.getElementById("valor6").value);
    var contadoralice=0;
    var contadorbob=0;
    var minimo=1;
    var maximo=100;

    if(99>=a0 && a0>=1 && 99>=a1 && a1>=1 && 99>=a2 && a2>=1 && 99>=b0 && b0>=1 && 99>=b1 && b1>=1 && 99>=b2 && b2>=1){

      if(a0>b0){
      contadoralice++;
      }else if (a0<b0){
        contadorbob++;}

      if(a1>b1){
      contadoralice++;
      }else if (a1<b1){
        contadorbob++;}

      if(a2>b2){
      contadoralice++;
      }else if (a2<b2){
        contadorbob++;}
      
      
      var result = contadoralice+","+contadorbob;
      document.getElementById("resultado").value = result;
      alert (a0);
      

    }else{
   
      alert ("Los valores que ingresas no estan dentro de los parametros"+a0+a1+a2+b0+b1+b2);

    }

    }

	</script>