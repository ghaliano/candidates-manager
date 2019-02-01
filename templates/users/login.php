<?php if ($errorMessage) {?>
<div class="alert alert-danger">
    <?php echo $errorMessage?>
</div>
<?php }?>
<form method="post" action="index.php?module=users&action=login">
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
    <button class="btn btn-primary btn-block" type="submit">Login</button>
</form>