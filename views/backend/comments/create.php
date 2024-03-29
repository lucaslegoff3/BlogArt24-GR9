<?php
include '../../../header.php';
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création d'un nouveau commentaire</h1>
        </div>
        <div class="col-md-12">

            <form action="<?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="numMemb">ID du membre</label>
                    <input id="numMemb" name="numMemb" class="form-control" type="text" autofocus="autofocus" />
                </div>
                <div class="form-group">
                    <label for="numArt">ID de l'article</label>
                    <input id="numArt" name="numArt" class="form-control" type="text" />
                </div>
                <div class="form-group">
                    <label for="libCom">Commentaire</label>
                    <textarea id="libCom" name="libCom" class="form-control"></textarea>
                </div>
                <br />
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Confirmer la création</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';