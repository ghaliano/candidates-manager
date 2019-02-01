<h1>Ajouter un candidat</h1>
<form action="index.php?module=candidates&action=add" method="post">
    <div class="form-group">
    <input class="form-control" type="text" name="name" placeholder="name"/>
    </div>
    <div class="form-group">
        <select class="form-control" name="speciality_id">
            <?php foreach ($specialities as $result){  ?>
                <option
                    <?php echo $result['id'] == $speciality?'selected':''?>
                        value="<?php echo $result['id'] ?>">
                    <?php echo $result['name'] ?>
                </option>
            <?php }?>
        </select>
    </div>
    <div class="form-group">
    <input class="form-control" type="date" name="age" placeholder="age"/><br />
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Envoyer</button>
    </div>
</form>