<?php
$cliente=$_POST['cliente'];

if(preg_match("/[0-9]/", $cliente)){
    header("location:../clientes.php?cli=nit&id=".$cliente);
}
else if($cliente==""){
    header("location:../clientes.php?cli=0&id=0");
}
else{
    header("location:../clientes.php?cli=nom&id=".$cliente);
}
?>