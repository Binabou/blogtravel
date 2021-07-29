<?php

require ("../connect/connect.php");


if (isset($_POST['submit'])){
$id=htmlspecialchars($_POST['id']);  
$titre_article=htmlspecialchars($_POST['titre_article']);
$contenu_article=htmlspecialchars($_POST['contenu_article']);
$date_published=htmlspecialchars($_POST['date_published']);
$id_categorie=htmlspecialchars($_POST['id_categorie']);

$chemin = '../img';
$image_article=$_FILES['image_article']['name'];
$tmp_name=$_FILES['image_article']['tmp_name'];
move_uploaded_file($tmp_name, "$chemin/$image_article");


$requete="INSERT INTO `articles` (`titre_article`, `contenu_article`, `date_published`, `image_article`, `id_cat`) 
          VALUES (:titre_article, :contenu_article, :date_published, :image_article, :id_categorie)";
$query=$pdo->prepare($requete);

$valeur =[
    "titre_article"=>"$titre_article", 
    "contenu_article"=>"$contenu_article", 
    "date_published"=>"$date_published", 
    "image_article"=>"$image_article", 
    "id_categorie"=>"$id_categorie"
];
    
$query->execute($valeur);



header('location:../index.php?view_article&ajout_ok');  
}



