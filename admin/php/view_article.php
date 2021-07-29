<a href="index.php?new_article"><button type="button" class="btn btn-primary btn-lg btn-block">Ajouter un article</button><br></a>
<div class="card mb-4">
                            <div class="card-header">
                                Aperçu des articles
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Titre</th>
                                                <th>Contenu</th>
                                                <th>Date de publication</th>
                                                <th>Catégorie</th>
                                                <th>Image</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>Id</th>
                                                <th>Titre</th>
                                                <th>Contenu</th>
                                                <th>Date de publication</th>
                                                <th>Catégorie</th>
                                                <th>Image</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
<?php
$query=$pdo->prepare('SELECT articles.id, articles.titre_article, articles.contenu_article, articles.date_published, articles.image_article , categorie.categorie FROM articles
                    INNER JOIN categorie ON articles.id_cat = categorie.id');
$query->execute();


while($articles=$query->fetch(PDO::FETCH_ASSOC)) {
    $id = $articles['id'];
    $titre_article=$articles['titre_article'];
    $contenu_article=substr($articles['contenu_article'],0, 100);
    $date_published=$articles['date_published'];
    $categorie_article=$articles['categorie'];
    $image_article=$articles['image_article'];
?>
 <tbody>
        <tr>
            <td><?php  echo $id; ?></td>
            <td><?php  echo $titre_article; ?> </td>
            <td><?php  echo $contenu_article; ?></td>
            <td><?php  echo $date_published; ?></td>
            <td><?php  echo $categorie_article; ?> </td>
            <td><img style="width:50px" src="img/<?php  echo $image_article; ?>"> </td>
            <td><a href="index.php?modifier=<?php  echo $id; ?>"><button type="button" class="btn btn-warning">Modifier</button></a></td>
            <td><a href="php/delete.php?id=<?php  echo $id; ?>"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
        </tr>
 <?php } ?>
</tbody>
 </table>
</div>
</div>
</div>
