<?php

require_once __DIR__ . '/../vendor/autoload.php';

// URL del feed RSS
$rssFeedUrl = 'https://loquepasaencolombia.com/feed/pulzo';

// Cargar el contenido del feed
$rssFeed = simplexml_load_file($rssFeedUrl);

// Verificar si se ha cargado correctamente
if ($rssFeed === false) {
    echo "Error al cargar el feed RSS.";
    exit;
}

// Recorrer y mostrar los elementos del feed
foreach ($rssFeed->channel->item as $item) {
    echo "<h2>{$item->title}</h2>";
    echo "<p><strong>Fecha de publicación:</strong> {$item->pubDate}</p>";
    echo "<p><strong>Descripción:</strong> {$item->description}</p>";
    echo "<p><a href='{$item->link}'>Leer más</a></p><hr>";
}