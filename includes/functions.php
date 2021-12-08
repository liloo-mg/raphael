<?php

/**
 * Afficher le nom de la site web
 */
function site_name()
{
    echo config('name');
}

/**
 * Afficher l'url du site
 */
function site_url()
{
    echo config('site_url');
}

/**
 * Affichage de la version
 */
function site_version()
{
    echo config('version');
}

/**
 * Systeme de navigation du site web
 * @param string $separation
 */
// function nav_menu($separation = ' | ')
function nav_menu($separation = '')

{
    $nav_menu = '';
    $nav_items = config('nav_menu');
    
    foreach ($nav_items as $uri => $name) {
        $query_string = str_replace('page=', '', $_SERVER['QUERY_STRING'] ?? '');
        $class = $query_string == $uri ? ' active' : '';
        $url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
        
        // nav menu eto e
        $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="nav-link fw-medium hv' . $class . '">' . $name . '</a>' . $separation;
        // $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="navbar-brand' . $class . '">' . $name . '</a>' . $separation;

    }

    echo trim($nav_menu, $separation);
}

/**
 *  Affiche le titre de la page. Il prend les données de l'URL
 *  Remplace les tirets par des espaces
 *  Capitalise les mots.
 */
function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Accueil';

    echo ucwords(str_replace('-', ' ', $page));
}

/**
 *  Affiche le contenu de la page. Il prend les données de
 *  les pages statiques dans le répertoire pages/.
 *  Lorsqu'il n'est pas trouvé, affiche la page d'erreur 404.
 */
function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'accueil';
    $path = getcwd() . '/' . config('content_path') . '/' . $page . '.phtml';

    if (! file_exists($path)) {
        $path = getcwd() . '/' . config('content_path') . '/404.phtml';
    }

    echo file_get_contents($path);
}

/**
 * Point de depart et affichage du template
 */
function init()
{
    require config('template_path') . '/template.php';
}
