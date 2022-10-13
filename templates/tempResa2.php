<div class="container border text-center mt-5">
    <h1 class="mb-3">Sélectionnez le film que vous désirez réserver :</h1>   
    <table class="table table-striped align-middle">
        <tr>
            <td>Titre du film</td>
            <td>Année de sortie</td>
            <td>Réalisateur</td>
            <td>Affiche</td>
        </tr>
        <?php
            foreach($results as $resultat) {?>
                <tr>
                    <td><a href="resa3.php?film=<?=$resultat->TITRE_FILM?>"><?= $resultat->TITRE_FILM?></a></td>
                    <td><?= $resultat->ANNEE_FILM ?></td>
                    <td><?= $resultat->PRENOM_STAR . " " . $resultat->NOM_STAR ?></td>
                    <td><img src="./assets/FilmMiniatures/<?= $resultat->LIB_TYPE_FILM.'/'.$resultat->REF_IMAGE ?>" alt="affiche"></td>
                </tr>
            <?php 
            }
            ?>
    </table>
</div>
