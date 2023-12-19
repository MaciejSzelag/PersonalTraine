<?php

switch ($source) {
    case $client;
        include "../app/clients/views/index.php";
        break;
    default:
        include "../app/home/views/index.php";
}
