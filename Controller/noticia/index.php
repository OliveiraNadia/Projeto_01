<?php

require_once '../../Model/noticia.php';

$noticia = new noticia();
$noticia->getObjetcts();

die($noticia->getObjetcts());