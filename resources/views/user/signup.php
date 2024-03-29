<?= view('layout/header') ?>
<?= view('layout/nav') ?>

<div>
    <h2>Créer votre compte</h2>
    <div id="login">
        <form action="" id="login-form" method="post" autocomplete="off">
            <div class="form-group">
                <label class="field-label" for="field-firstname">
                    Prénom
                </label>
                <input class="form-control" id="field-firstname" name="firstname" type="text" placeholder="Prénom" value="<?= $firstname ?>">
            </div>
            <div class="form-group">
                <label class="field-label" for="field-lastname">
                    Nom
                </label>
                <input class="form-control" id="field-lastname" name="lastname" type="text" placeholder="Nom" value="<?= $lastname ?>">
            </div>
            <div class="form-group">
                <label class="field-label" for="field-usermail">
                    Adresse mail
                </label>
                <input class="form-control" id="field-usermail" name="email" type="text" placeholder="Votre adresse email" value="<?= $email ?>">
            </div>
            <div class="form-group">
                <label class="field-label" for="field-password">
                    Mot de passe
                </label>
                <input class="form-control" id="field-password" name="password" type="password" placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <label class="field-label" for="field-password-confirm">
                    Confirmation du mot de passe
                </label>
                <input class="form-control" id="field-password-confirm" name="password-confirm" type="password" placeholder="Confirmation du mot de passe">
            </div>

            <?php if (!empty($errorList)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php foreach ($errorList as $currentError) : ?>
                        <?= $currentError ?><br>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <button href="#" class="btn btn-success" type="submit" role="button">Inscription</button>
            <a href="<?= route('user_signin')?>" class="btn btn-primary" role="button">J'ai déjà un compte</a>
        </form>
    </div>
</div>

<?= view('layout/footer') ?>