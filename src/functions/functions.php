<?php

function load(){
    include FICHIER_TEMPLATE;
}

function loadTemplate($file){
    include DOSSIER_PAGES.'/'.$file.'.php';
}
