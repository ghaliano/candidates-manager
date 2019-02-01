<form  method="get">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <input placeholder="name" type="text" class="form-control" name="name"/>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <select name="speciality_id" class="form-control">
                    <?php foreach ($specialities as $result){  ?>
                        <option
                            <?php echo $result['id'] == $speciality?'selected':''?>
                                value="<?php echo $result['id'] ?>">
                            <?php echo $result['name'] ?>
                        </option>
                    <?php }?>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <button class="btn btn-success" type="submit">Envoyer</button>
            </div>
        </div>
    </div>


</form>