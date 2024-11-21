<!DOCTYPE html>

<?php
$cookie_name = "Boubacar";
$cookie_value  = "Un développeur web";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>

<html>
<head>
    <style>
        input {
            padding: 8px;
            border: none;
            border-radius: 9px;
            width: 300px;
            margin: 20px;
            margin-left: 25px;
        }
        input[type="submit"] {
            cursor: pointer;
            background-color: rgba(100, 20, 255, .5)
        }
    </style>
    <title>Test PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="text-align:center; 
    font-family: verdana;
    background: linear-gradient(to bottom right, aqua, aquamarine);
    height: 200%;
    ">

<h1>My first PHP page</h1>
<p id="demo"></p>
<?php

$x = 'Boubacar BAH';
$n = 704992451;
$type = 3.14;

$color = "white";
function test() {
    global $color;
    echo "<p>Ma couleur préféré est le $color </p>";
}
test();
echo  $color;
print "<br>"; 
var_dump($type);
echo  "<p>I am $x and my number is " .$n + 1.;

//Something else

$ba = false;
echo $ba ? "<p>Je suis vrai accetez-moi s'il vous plaît !</p>" : 
    "<p>Je ne suis pas prêt, je vous mets en garde de m'accepter dans votre camp</p>";

//Object creation
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
}

?>

<?php
$array = array("Boubacar", "Moustapha", "Askim");
foreach($array as $x) {
    echo "$x <br>";
}
var_dump(count($array)); 

?>




<?php
$name = $prenom = $email = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = test_input($_POST['name']);
    $prenom = test_input($_POST['prenom']);
    $email = test_input($_POST['email']);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<div style="border: 1px yellow; width: 80%;margin:auto; padding: 12px; color: white;">
    <h1>Entrez vos informations</h1>
    <form action="formData.php"
        method="post"
        style="background-color: purple; border-radius: 12px;">
        Nom: <input type="text" name="name"> <br>
        Prénom: <input type="text" name="prenom"> <br>
        Email: <input type="email" name="email"> <br>
        Pays: <input type="country" name="pays">
        <input type="submit">
    </form>
</div>
<h2>Vos informations saisies</h2>

<div style="font-family: courier; font-size: 20px;">
<?php 
echo "<p><b>Nom </b>: " . $_POST['name'] . "</p>";
echo "<p><b>Prénom </b>: " . $_POST['prenom'] . "</p>";
echo "<p><b>Email </b>  : " . $_POST['email'] . "</p>";
echo "<p><b>Pays</b> : " . $_POST['pays'] . "</p>" ;

?>
</div>

<div>
<?php
$startdate = strtotime("Friday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate ) {
    echo date("M - d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}

$d1 = strtotime("March 30 2025");
$d2 = ceil(($d1-time())/60/60/24);
echo "Il y a $d2 jours jusqu'au 30 Mars 2025";
?>

</div>
<div>
<pre>

<?php 

$myfile = fopen("text.txt", "r+") or die("Unable to open file!");
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>" ;
}

fclose($myfile);

?>
</pre>
</div>
<div>

<?php 
//$newfile = fopen("newfile.txt", "w") or die ("Impossible d'ouvrir le fichier");
$newfile = fopen("newfile.txt", "a") or die ("Impossible d'ouvrir le fichier");
$txt = "\nJe viens d'ajouter du contenu à ce fichier\n";
fwrite($newfile, $txt);
$txt = "Une deuxième ligne ajoutée";
fwrite($newfile, $txt);

fclose($newfile);

?>
</div>
<div>
<?php
//working with cookies, the cookie is set before the html tag
if (!isset($_COOKIE[$cookie_name])) {
    echo "Le cookie " . $cookie_name . " n'est pas enregistré" ;
} else {
    echo "Le cookie " . $cookie_name . " est enregistré! <br>";
    echo "Sa valeur est : <br>" . $_COOKIE[$cookie_name] . "</b>";
}
?>
</div>
</body>
</html>