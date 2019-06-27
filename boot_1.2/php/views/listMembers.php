<?php
    require __DIR__ . '/../models/doctype.php';
    require __DIR__ . '/../models/header_nav.php'; 
    require __DIR__ . '/../inc/breadcrumb.php';     
    require __DIR__ . '/../Controllers/adherentList_order.php';
    // require __DIR__ . '/../Controllers/data_form.php';    
?>

<main>

    <br>
    <h1>Liste des adhérents :</h1>

     <?php 
        // fil d'ariane
        $fil = get_fil_ariane(array('../index.php' => 'Accueil','views/inscription.php' => 'Inscription','views/listMembers.php' => 'Adhérents')); 
        require __DIR__ . '/../models/breadcrumb_tpl.php'; 
    ?>

    <hr>

    <section id="adherentsList">

        <!-- 
            https://getbootstrap.com/docs/4.3/components/modal/ 
            Button trigger modal 
        -->
        <button type="button" class="btn btn-displayDataSubmit btn-primary" data-toggle="modal" data-target="#exampleModal" href="../models/modal.php">
            Dernières données soumisent. 
        </button>

        <?php require __DIR__ . '/../models/modal.php'; ?>

        <!-- Boutons de trie de la liste des adhérents -->
        <div id="btn_cta">
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Liste de tri
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <!-- envoi en GET dans l'URL via l'attribut 'href', une info qui permet de selectionner un trie -->
                    <a class="dropdown-item" href="../views/listMembers.php?order=familyname">Tri par nom</a>
                    <a class="dropdown-item" href="../views/listMembers.php?order=firstname">Tri par prénom</a>
                    <a class="dropdown-item" href="../views/listMembers.php?order=age">Tri par age</a>
                    <a class="dropdown-item" href="../views/listMembers.php?order=email">Tri par adresse email</a>
                    <a class="dropdown-item default_sort" href="../views/listMembers.php?order=id">Tri par défaut</a>
                </div>
                <div id="btn_cta-noSort">
                    <!-- Affichage du bouton en fonction d'un tri ou non -->
                    <?php if(!empty($_GET['order'])): ?>
                        <a class="btn btn-info btn_cancel" href="listMembers.php">Annule le tri</a>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        <table id="table_list">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom de famille</th>
                    <th>Prénom</th>
                    <!-- la classe 'hidden' permettra de cacher les colonnes via le CSS -->
                    <th class="hidden">Age</th>
                    <th class="hidden">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($results as $currentRow):?>
                    <tr>
                        <td><?= $currentRow['id']; ?></td>
                        <td title="<?= $currentRow['age'] . ' ans ' . ' / ' . 'email : ' .  $currentRow['email']; ?>"><?= $currentRow['familyname']; ?></td>
                        <td><?= $currentRow['firstname']; ?></td>
                        <td class="hidden"><?= $currentRow['age']; ?></td>
                        <td class="hidden"><?= $currentRow['email']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>      

</main>

<?php require __DIR__ . '/../models/footer.php'; ?>

   