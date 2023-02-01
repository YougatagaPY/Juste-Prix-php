<h1> Juste Prix </h1>
<?php
session_start();
if(!isset($_SESSION['prix'])){
    echo $_SESSION['prix'] = rand(10,100);
}

echo $_SESSION['prix'] . "<br>";    




echo "Bienvenue dans le juste prix" . "<br>";
$random = $_SESSION['prix'];
$rep = $_GET['reponse'];




if ($random == $rep ) {
    echo "Bonne réponse" . "<br>";
    echo "Le prix était bien de : " . $random . "<br>";
    echo  "Le nouveau prix à chercher est " . $_SESSION['prix'] = rand(10,100);

    


} elseif ($random > $rep) {
    echo "c'est PLUS " . "<br>";
}
else{
    echo "c'est MOINS " . "<br>";
}
?>


<div>
<form action="index.php" method="get">
Ta réponse : <input type="text" name="reponse" />
<button type="submit">
</form>
<br>
</div>

