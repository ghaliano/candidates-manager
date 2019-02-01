function deleteSpeciality(id){
    var req = new XMLHttpRequest();
    req.open(
        "GET",
        "ajax.php?module=specialities&action=delete&id="+id
    );
    req.send();
    req.addEventListener('load', function(){

        var response = JSON.parse(req.responseText);
        console.log(response);
        if (response.success){
            document.getElementById('speciality_' + id).remove();
        }else{
            alert(response.msg);
        }
    })
}

function addSpeciality(){
    var req = new XMLHttpRequest();
    req.open(
        "POST",
        "ajax.php?module=specialities&action=add",
        true
    );
    req.send(
        'name='+document.getElementById('name').value
    );

    req.addEventListener('load', function(){

        var response = JSON.parse(req.responseText);
        console.log(response);
        if (response.success){
            alert("success");
        }else{
            alert(response.msg);
        }
    })
}