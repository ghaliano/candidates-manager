<?php

function redirectJs($page){
    echo '<script>';
    echo 'document.location.href="'.$page.'"';
    echo '</script>';
}