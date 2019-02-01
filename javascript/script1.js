function onClickButton(){
    alert(123456);
}

$('table tr').on('click', function(){
    $(this).css({
        color: 'red'
    })
})