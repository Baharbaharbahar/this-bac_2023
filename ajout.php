<?php
$des=$_POST["des"];
$categorie=$_POST["categorie"];
$taille=$_POST["taille"];
$prix=$_POST["prix"];
require("connxion.php");
$conn=mysqli_connect($server,$username,$password,$bd)or die("error");
$sql="insert into habit values ('$des','$categorie','$taille','$prix');";
mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)>0){
    echo "Enregistrement réalisé avec succès";
}else{
    echo"Erreur d'enregistrement";
}
mysqli_close($conn);



?>
