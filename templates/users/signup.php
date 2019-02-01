<?php if ($errorMessage) {?>
    <div class="alert alert-danger">
        <?php echo $errorMessage?>
    </div>
<?php }?>
<form method="post" action="index.php?module=users&action=signup">
    <div class="form-group">
        <div class="form-label-group">
            <input name="firstname" type="text" id="inputFirstname" class="form-control" placeholder="Votre nom" required="required">
            <label for="inputFirstname">Nom</label>
        </div>
    </div>
    <div class="form-group">
        <div class="form-label-group">
            <input name="lastname" type="text" id="inputLastname" class="form-control" placeholder="Votre prénom" required="required">
            <label for="inputLastname">Email address</label>
        </div>
    </div>
    <div class="form-group">
        <div class="form-label-group">
            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
            <label for="inputEmail">Email address</label>
        </div>
    </div>
    <div class="form-group">
        <div class="form-label-group">
            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
            <label for="inputPassword">Password</label>
        </div>
    </div>
    <input type="hidden" name="sent" value="1">
    <button class="btn btn-primary btn-block" type="submit">S'enegistrer</button>
</form>