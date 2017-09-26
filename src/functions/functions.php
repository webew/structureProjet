<?php

function load() {
    if (file_exists(FICHIER_TEMPLATE)) {
        include FICHIER_TEMPLATE;
    }
}

function loadTemplate($file) {
    if (file_exists(DOSSIER_PAGES . '/' . $file . '.php')) {
        include DOSSIER_PAGES . '/' . $file . '.php';
    }
}
