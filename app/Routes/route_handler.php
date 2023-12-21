<?php

switch ($source) {
    case $About_me;
        include "../app/About_me/views/index.php";
        break;
    case $client;
        include "../app/clients/views/index.php";
        break;
    default:
        include "../app/home/views/index.php";
}
