<div class='container mt-5 text-center'>
    <h1 class='mb-5'>Saisie d'un nouveau film :</h1>
    <div class="border shadow-sm rounded w-50 mx-auto pb-3 px-2 mt-3">
            <form action="newfilm2.php" method="post" enctype="multipart/form-data">
                <table class="mx-auto table table-borderless align-middle"> 
                    <tr>
                        <td>Titre :</td>
                        <td><input name="titre" class="form-control" type="text" placeholder="Saisissez le titre du film" aria-label="default input example"></td>
                    </tr>
                    <tr>
                        <td>Type de film :</td>
                        <td>
                            <select name="choixtype" class="form-select text-center">
                                <?php foreach($donnees as $resultats){?>
                                    <option value="<?=$resultats->CODE_TYPE_FILM?>"><?=$resultats->LIB_TYPE_FILM?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Réalisateur :</td>
                        <td>
                            <select name="choixreal" class="form-select text-center">
                                <?php foreach($resultsreal as $resultats){?>
                                    <option value="<?=$resultats->ID_STAR?>"><?=$resultats->PRENOM_STAR." ".$resultats->NOM_STAR?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Année de sortie :</td>
                        <td><input type="text" name="annee" class="form-control" placeholder="Saisissez l'année de sortie du film" aria-label="default input example"></td>
                    </tr>
                    <tr>
                        <td>Affiche :</td>
                        <td><input class="form-control" type="file" name='affiche' id="formFile"></td>
                    </tr>
                    <tr>
                        <td>Résumé :</td>
                        <td><div class="form-floating">
                            <textarea class="form-control" name="resume" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            </div>
                        </td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <button type="reset" class="btn btn-secondary">Recommencer</button>
            </form>
        </div>
</div>
