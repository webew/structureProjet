<?php

function load() {//charge main.php
    if (file_exists(MAIN_TEMPLATE)) {
        include MAIN_TEMPLATE;
    }
}

function loadTemplate($file) {//charge une vue
    if (file_exists(DOSSIER_PAGES . '/' . $file . '.php')) {
        include DOSSIER_PAGES . '/' . $file . '.php';
    }
}
