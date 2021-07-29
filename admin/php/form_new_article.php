
<h1>Ajouter un nouvel article</h1>

<form method="POST" action="php/insert_new_article.php" enctype="multipart/form-data">
<input type="hidden" name="id"> 
<div class="form-group" >
  <input class="form-control" name="titre_article" type="text" placeholder="Quel est le titre?">
</div>

<div class="form-group">
    <label for="exampleFormControlFile1">Choisissez votre image</label>
    <input type="file" name="image_article" class="form-control-file" id="exampleFormControlFile1">
</div>

<!-- Start liste déroulante des différentes catégorie -->   
    <div class="form-group">
        <label for="exampleFormControlSelect1">Catégorie</label>
        <select class="form-control" name="id_categorie" id="exampleFormControlSelect1">

        <?php
$query2=$pdo->prepare("SELECT id, categorie FROM categorie");
$query2->execute();
while($articles=$query2->fetch(PDO::FETCH_ASSOC)) {
$id_categorie=htmlspecialchars($articles['id']);
$categorie_article=htmlspecialchars($articles['categorie']);
?>
            <option value="<?php echo $id_categorie; ?>">
                <?php echo $categorie_article; ?>
            </option>
<?php } ?>
</select>
    </div>
<!-- Start liste déroulante des différentes catégorie -->  

    
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Date de publication</label><br>
      <input type="date" name="date_published">
    </div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Contenu de l'article</label>
    <textarea name="contenu_article" class="form-control" id="exampleFormControlTextarea1" rows="3">
    </textarea>
  </div>

  <button name="submit" type="submit" class="btn btn-primary btn-lg">Ajouter mon article</button>
</form>