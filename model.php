<?php
/**
 * Biblioteca de datos - Simulamos respuesta tras consulta a BBDD
 */
$data = array(
    'page_title' => 'MVC PHP',
    'keywords' => 'POO, MVC, PHP',
    'description' => 'Arquitectura MVC en PHP',
    //'content' => []
    'content' => [
        array(
            'id' => '1',
            'producto' => 'tornillo',
            'descripcion' => 'tornillo calibre 1',
            'stock' => '1000',
            'precio' => '1,00'
        ),
        array(
            'id' => '2',
            'producto' => 'tornillo',
            'descripcion' => 'tornillo calibre 2',
            'stock' => '500',
            'precio' => '1,50'
        ),
        array(
            'id' => '3',
            'producto' => 'tuerca',
            'descripcion' => 'tuerca calibre 1',
            'stock' => '1000',
            'precio' => '0,50'
        ),
        array(
            'id' => '4',
            'producto' => 'tuerca',
            'descripcion' => 'tuerca calibre 2',
            'stock' => '500',
            'precio' => '0,50'
        ),
        array(
            'id' => '5',
            'producto' => 'arandela',
            'descripcion' => 'arandela 1cm. diámetro',
            'stock' => '2000',
            'precio' => '0,20'
        )
    ]
);

/* echo "<pre>";
print_r($data);
echo "</pre>"; */
