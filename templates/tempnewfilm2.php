<div class='container mt-5 text-center'>
    <h1 class='mb-3'>Saisie d'un nouveau film :</h1>
    <?php
        require('src/FormControlnewfilm.php');
        require('src/InsertnewRequest.php');          
    ?>
    <div class="mt-2 mb-2">
        <button type="button" onclick="history.go(-1);" class="btn btn-secondary">Retour</button>
    </div>
</div>    