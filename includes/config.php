<?php

/**
 * @param string $key
 * @return mixed|null
 * Configuration php
 * Pour creer une lien dans le 'nav_menu' : 'nom_de_la_page' => 'Lien'
 * 'nom_de_la_page.phtml' dans le dossier /content
 */
function config($key = '')
{
    $config = [
        'name' => 'Sexe Coquine',
        'site_url' => 'http://localhost/raphael',
        'pretty_uri' => true,
        'nav_menu' => [
            '' => 'Accueil',
            // 'profil' => 'Profil',
            'les-hotesses-sexy-du-telephone-rose' => 'Profils des hôtesses',
            'histoire' => 'Histoire',
            'blog' => 'Blog',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v1.0',
        'number_random' => rand(15, 150)
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
