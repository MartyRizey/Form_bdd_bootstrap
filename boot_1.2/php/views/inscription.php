
<?php
    require __DIR__ . '/../models/doctype.php';
    require __DIR__ . '/../models/header_nav.php';
    // require __DIR__ .'/../inc/nav_path.php';
    // require __DIR__ . '/../Controllers/data_form.php';
    require __DIR__ . '/../inc/breadcrumb.php';
?>

<?php $familyname = ''; ?>

<main>

    <br>
    <h1>Formulaire :</h1>

    <?php 
        // fil d'ariane
        $fil = get_fil_ariane(array('../index.php' => 'Accueil','views/inscription.php' => 'Inscription'));
        require __DIR__ . '/../models/breadcrumb_tpl.php';
    ?>

    <hr>

<!-- Formulaire d'inscription -->
    <form action="<?= DATASFORM_PATH ?>" method="POST">
    
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationTooltip01">Family name</label>
                <input type="text" name="familyname" class="form-control" id="validationTooltip01" placeholder="First name" value="<?= $familyname ?>" title="Mon champ est re-rempli par la données saisie." required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="validationTooltip02">First name</label>
                <input type="text" name="firstname" class="form-control" id="validationTooltip02" placeholder="Last name" value="" required>
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
                    <input type="email" name="email" class="form-control" id="validationTooltipUsername" placeholder="Email" aria-describedby="validationTooltipUsernamePrepend">
                    <div class="invalid-tooltip">
                        Please choose a unique and valid username.
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Age</label>
                <input type="number" class="form-control" id="validationTooltip03" name="age" min="12" max="90" placeholder="Age" >
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltip04">State</label>
                <input type="text" class="form-control" id="validationTooltip04" placeholder="option" >
                <div class="invalid-tooltip">
                    Please provide a valid state.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationTooltip05">Zip</label>
                <input type="text" class="form-control" id="validationTooltip05" placeholder="option" >
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
        </div>
        <button class="btn btn_submit btn-primary" type="submit">Submit form</button> 
                
    </form>
<!-- Fin de formulaire d'inscription--> 
    
</main>

<?php require __DIR__ . '/../models/footer.php'; ?>


