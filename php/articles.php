<?php 

$query=$pdo->prepare('SELECT * FROM articles 
                        INNER JOIN categorie ON articles.id_cat = categorie.id');
$query->execute();

while($articles=$query->fetch(PDO::FETCH_ASSOC)){
    $id =htmlspecialchars($articles ['id']);
    $titre_article=htmlspecialchars($articles['titre_article']);
    $contenu_article=htmlspecialchars($articles['contenu_article']);
    $date_published=htmlspecialchars($articles['date_published']);
    $categorie_article=htmlspecialchars($articles['categorie']);
    $image_article=htmlspecialchars($articles['image_article']);
    
    $article = 2;
    for ($i=1;$i<=1;$i++){
        if ($article % 1 == 2 ){
    
?>
      <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex ms-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper"><?php echo $titre_article; ?></span>
                                <span class="section-heading-upper"><?php echo $date_published; ?></span>
                                <span class="section-heading-lower"><?php echo $categorie_article; ?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" style="width:350px" src="admin/img/<?php echo $image_article; ?>" alt="..." />
                    <div class="product-item-description d-flex me-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0"><?php echo $contenu_article; ?></span></p></div>
                    </div>
                </div>
            </div>
        </section>
       
      <?php  } else { ?>
        <section class="page-section">
            <div class="container">
                <div class="product-item">
                    <div class="product-item-title d-flex">
                        <div class="bg-faded p-5 d-flex me-auto rounded">
                            <h2 class="section-heading mb-0">
                                <span class="section-heading-upper"><?php echo $titre_article; ?></span>
                                <span class="section-heading-upper"><?php echo $date_published; ?></span>
                                <span class="section-heading-lower"><?php echo $categorie_article; ?></span>
                            </h2>
                        </div>
                    </div>
                    <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" style="width:600px"  src="admin/img/<?php echo $image_article; ?>" alt="..." />
                    <div class="product-item-description d-flex ms-auto">
                        <div class="bg-faded p-5 rounded"><p class="mb-0"><?php echo $contenu_article; ?></p></div>
                    </div>
                </div>
            </div>
        </section>
<?php  }}} ?>