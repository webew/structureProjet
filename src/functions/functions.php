<?php

function load() {
    if (file_exists(MAIN_TEMPLATE)) {
        include MAIN_TEMPLATE;
    }
}

function loadTemplate($file) {
    if (file_exists(DOSSIER_PAGES . '/' . $file . '.php')) {
        include DOSSIER_PAGES . '/' . $file . '.php';
    }
}
