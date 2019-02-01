<a href="index.php?module=specialities&action=add">Ajouter une spécialité</a>
<?php if ($results){ ?>
<table>
    <thead><th>ID</th><th>Name</th></thead>
    <?php foreach ($results as $result) {?>
        <tr id="speciality_<?php echo $result['id']?>">
            <td><?php echo $result['id']?></td>
            <td><?php echo $result['name']?></td>
            <td>
                <a href="index.php?module=specialities&action=edit&id=<?php echo $result['id']?>">
                    modifier
                </a> |
                <button
                        onclick="deleteSpeciality(<?php echo $result['id'] ?>)">Supprimer</button>
            </td>
        </tr>
    <?php }?>
</table>
<?php } else {?>
    <div>aucune spécialité n'est trouvé</div>
<?php }?>

<script src="assets/js/script.js">

</script>
