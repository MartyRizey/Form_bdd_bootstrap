
<?php
    require __DIR__ . '/../models/doctype.php';
    require __DIR__ . '/../models/header_nav.php';
    require __DIR__ . '/../Controllers/data_form.php';

    // print_r(__DIR__); die();
?>

<main>

    <br>
    <h1>Formulaire :</h1>

<!-- 
    Fil d'Ariane : 
    https://getbootstrap.com/docs/4.3/components/breadcrumb/ 
-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="accueil.php">Accueil</a></li>
            <li class="breadcrumb-item"><a href="#">Inscription</a></li>
            
        </ol>
    </nav>
    <!-- Fin fil d'Ariane -->

    <hr>

<!-- Formulaire d'inscription -->
    <form action="" method="POST">
    
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationTooltip01">Family name</label>
                <input type="text" name="familyname" class="form-control" id="validationTooltip01" placeholder="First name" value="<?= $familyname ?>" title="Mon champ est re-rempli par la données saisie." required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">Last name</label>
                <input type="text" name="lastname" class="form-control" id="validationTooltip02" placeholder="Last name" value="" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="validationTooltipUsername">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                    </div>
                    <input type="email" name="email" class="form-control" id="validationTooltipUsername" placeholder="Email" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">City</label>
                <input type="text" class="form-control" id="validationTooltip03" placeholder="City" >
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltip04">State</label>
                <input type="text" class="form-control" id="validationTooltip04" placeholder="State" >
                <div class="invalid-tooltip">
                    Please provide a valid state.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltip05">Zip</label>
                <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" >
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
        </div>
        <button class="btn btn_submit btn-primary" type="submit">Submit form</button> 
                
<!-- 
    https://getbootstrap.com/docs/4.3/components/modal/ 
    Button trigger modal 
-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Afficher les données, après soumission.
        </button>

        <?php require __DIR__ . '/../models/modal.php'; ?> 

    
</main>

<?php require __DIR__ . '/../models/footer.php'; ?>


