<?php
session_start();

$n1 = rand(1,20);
$n2 = rand(1,20);
$soma = $n1+$n2;
$_SESSION['loginADM'] = $n1+$n2;

?>
<script type="text/javascript">
    function Validar(){
    var soma = "<?php echo $soma; ?>";
	var campo = document.getElementById("loginADM").value;
	if(campo == soma){
    $_SESSION['loginADM']
	}else{
	alert("A SOMA ESTA INCORRETA!");
	}
	
        }
</script>

<html>
    <head></head>
    
	
	<body>
    <h1 style="background-color:black;color:#FFFFFF; text-align: center; padding-bottom: 50px;  margin-left: -30px;">Login</h1>
	<form action="login_admok.php" method="post" style="border:2px solid black; background-color:#B40404; text-align: center; padding-bottom: 100px;"><br>
    <img src="img/images.jpg" width=350 height=330 style= 'float: left; margin-left: 100px;' ><br><br>
    <img src="img/conselho.gif" width=340 height=330 style= 'float: right; margin-right: 150px;' ><br><br>
    <img src="img/org.jpg" width=280 height=180 style='float: none; margin-left: -20px;'><br><br> 
      
         <label style='float: none;color:#FFFFFF;margin-left: -20px;'> Email</label>&nbsp<input type="text" name="email"/><br><br>
         <label style='float: none;color:#FFFFFF;margin-left: -20px;'> Senha</label>&nbsp<input type="password" name="senha"/><br>
         <div style='float: none;margin-left: 450px;color:#FFFFFF;margin-right: -20px'>Some: <?php echo "$n1 + $n2 = "; ?></div>
         <input style='margin-left: 80px;margin-right: -380px'onblur="Validar()" type="text" name="loginADM" id="loginADM" maxlength="2" required="required" size="2"style='float: none; margin-left:0px;'>
          <br>
         <br><input type="submit" style='float: none; margin-left:0px;margin-right:30px'/>
      <br><br>
    </form>
    
   
    </body>
 </html>