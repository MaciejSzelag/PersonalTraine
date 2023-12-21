<?php function

tab_title($title) {
    $tab_title = (empty($title)) ? "Personal Trainer" : htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    return $tab_title;

}

function getTitleFromSource($source)
{
    global $client; //Zmienne w zakresie globalnym
    global $home;
    global $title;
    global $About_me;
    // global $test;
    switch ($source) {
        case $About_me;
            $title = $About_me;
            break;

        case $client;
            $title = $client;
            break;
        default:
            $title = $home;
    }

    return $title;
}
