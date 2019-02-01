<?php include("templates/candidates/form.php"); ?>
<div>
<a class="btn btn-info" href="index.php?module=candidates&action=add">Ajouter un candidat</a>
</div>
<br />
<?php if ($results){ ?>
<table class="table">
    <thead><th>Name</th><th>Speciality</th><th>Actions</th></thead>
    <?php foreach ($results as $result) {?>
        <tr>
            <td><?php echo $result['candidat_name']?></td>
            <td><?php echo $result['speciality_name']?></td>
            <td>
                <a class="btn btn-info" href="index.php?module=candidates&action=edit&id=<?php echo $result['candidat_id']?>">
                    modifier
                </a>
                <a class="btn btn-danger" href="index.php?module=candidates&action=delete&id=<?php echo $result['candidat_id']?>">
                    supprimer
                </a>
            </td>
        </tr>
    <?php }?>
</table>
<?php } else {?>
    <div>aucun candidat n'est trouvé</div>
<?php }?>
