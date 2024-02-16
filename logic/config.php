<?php

function getConfig(){
    $pf = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'parts' . DIRECTORY_SEPARATOR;
    $maintemplate = $pf . 'mainview' . DIRECTORY_SEPARATOR . 'main.php';
    $singletemplate = $pf . 'singleview' . DIRECTORY_SEPARATOR . 'main.php';
    // Korrekter Pfad zur Registrierungsformular-Datei
    $registertemplate = $pf . 'register' . DIRECTORY_SEPARATOR . '_register.php';

    return [
        'general' => [
            'templatePath' => $pf
        ],
        'pages' => [
            'main' => [
                'title' => 'Wosny.net – Ihr Spezialist für Bücher und mehr!',
                'template' => $maintemplate,
            ],
            'single' => [
                'title' => 'Ein Einzelartikel',
                'template' => $singletemplate,
            ],
            'register' => [
                'title' => 'Registrierung',
                'template' => $registertemplate, // Korrekte Verwendung der Variable
            ],
            // Füge weitere Seiten nach Bedarf hinzu...
        ],
    ];
}
