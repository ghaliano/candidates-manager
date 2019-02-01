<h1>Modifier un candidat</h1>
<form action="index.php?module=candidates&action=edit&id=<?php echo $id ?>" method="post">
    <input type="text" name="name" placeholder="name" value="<?php echo $name?>"/><br />
    <select name="speciality_id">
        <?php foreach ($specialities as $result){  ?>
        <option
            <?php echo $result['id'] == $speciality?'selected':''?>
                value="<?php echo $result['id'] ?>">
            <?php echo $result['name'] ?>
        </option>
        <?php }?>
    </select><br />
    <input type="date" name="age" placeholder="age" value="<?php echo $age?>"/><br />
    <input type="hidden" name="sent" value="1" />
    <button type="submit">Envoyer</button>
</form>