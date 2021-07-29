<h1>Modifier les informations de votre article</h1>

<?php
require ("../connect/connect.php");

$id=$_GET['modifier'];

$query=$pdo->prepare("SELECT id, titre_article, contenu_article, date_published, image_article FROM articles WHERE articles.id='$id'");
$query->execute();
$articles=$query->fetch(PDO::FETCH_ASSOC);

$id=htmlspecialchars($articles['id']);
$titre_article=htmlspecialchars($articles['titre_article']);
$contenu_article=htmlspecialchars($articles['contenu_article']);
$date_published=htmlspecialchars($articles['date_published']);
$image_article=htmlspecialchars($articles['image_article']);
?>

<!---------START FORM ------------------>
<form method="POST" action="php/update.php" enctype="multipart/form-data">

<!---------ID ARTICLE------------------>
    <input type="hidden" name="id" value="<?php echo $id ?>"> 
<!---------ID ARTICLE------------------>

<!---------TITRE ARTICLE------------------>
    <input class="form-control" name="titre_article" type="text" value="<?php echo $titre_article; ?>">
<!---------TITRE ARTICLE------------------>

<!---------IMAGE ARTICLE------------------>
<div class="form-group">
    <label for="exampleFormControlFile1">Choisissez votre image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_article" value="<?php echo $image_article; ?>">
    <?php echo $image_article; ?>
    </input>
</div> 
<!---------IMAGE ARTICLE------------------>

<!---------CATEGORIE ARTICLE------------------>

        <div class="form-group">
        <label for="exampleFormControlSelect1">Catégorie</label>
        <select class="form-control" name="id_categorie" id="exampleFormControlSelect1">

<?php
$query2=$pdo->prepare("SELECT * FROM categorie");
$query2->execute();
while($articles=$query2->fetch(PDO::FETCH_ASSOC)) {
$id_categorie=$articles['id'];
$categorie_article=$articles['categorie'];
?>
        <option value="<?php echo $id_categorie; ?>">
                <?php echo $categorie_article; ?>
        </option>
<?php } ?>
        </select>
<!---------CATEGORIE ARTICLE------------------>

<!---------DATE DE PUBLICATION----------------->
    <label for="exampleFormControlTextarea1">Date de publication</label><br>
    <input type="date" name="date_published" value="<?php echo $date_published ?>"></input>
<!---------DATE DE PUBLICATION----------------->

<!---------CONTENU ARTICLE------------------>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Contenu de l'article</label>
    <textarea type="text" name="contenu_article" class="form-control" id="exampleFormControlTextarea1" value="<?php echo $contenu_article ?>">
    <?php echo $contenu_article ?>
    </textarea>
  </div>
<!---------CONTENU ARTICLE------------------>

  <button name="submit" type="submit" class="btn btn-primary btn-lg">Modifier</button></input>
  
</form>
<!---------START FORM ------------------>