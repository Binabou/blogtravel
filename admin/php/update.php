<?php 

require ("../connect/connect.php");

if (isset($_POST['submit'])){
$id=htmlspecialchars($_POST['id']);
$titre_article=htmlspecialchars($_POST['titre_article']);
$contenu_article=htmlspecialchars($_POST['contenu_article']);
$date_published=htmlspecialchars($_POST['date_published']);
$id_categorie=htmlspecialchars($_POST['id_categorie']);

$chemin = '../img/';
$image_article=$_FILES['image_article']['name'];
$tmp_name=$_FILES['image_article']['tmp_name'];
move_uploaded_file($tmp_name, "$chemin/$image_article");

$requete=("UPDATE articles SET titre_article=:titre_article, contenu_article=:contenu_article, 
date_published=:date_published, id_cat=:id_categorie, image_article=:image_article WHERE id=:id");
$query=$pdo->prepare($requete);

$valeur=[
    "id"=>"$id",
    "titre_article"=>"$titre_article",
    "contenu_article"=>"$contenu_article",
    "date_published"=>"$date_published",
    "id_categorie"=>"$id_categorie",
    "image_article"=>"$image_article"
];

$query->execute($valeur);

header ("Location:../index.php?view_article");
}
?>