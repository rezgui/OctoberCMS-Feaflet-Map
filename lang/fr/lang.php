<?php

    return [

        'plugin' => [
                'name'        => 'Carte Leaflet',
                'description' => 'Affiche OpenstreetMap et vous permet de marquer un emplacement'
        ],

        'components' => [
            'leafletmap' => [
                'name'        => 'Carte Leaflet',
                'description' => 'Affiche OpenstreetMap et vous permet de marquer un emplacement',
                'coords' => [
                    'title'     => 'Coordonnées de la carte',
                    'name'      => 'Map center latitude and longitude, comma separated'
                ],
                'zoom' => [
                    'title'             => 'Zoom',
                    'description'       => 'Valeur du zoom value de 0-18',
                    'validationMessage' => 'The Zoom property can contain only numeric symbols'
                ],
                'markerCoords' => [
                    'title'       => 'Coordonnées du marqueur',
                    'description' => 'Longitude et latitude du marqueur séparé par une virgule. Si vide, pas de marqueur affiché',
                ],
                'width' => [
                    'title'             => 'Largeur',
                    'description'       => 'On peut utiliser px ou %',
                    'validationMessage' => 'La propriété Width ne peut contenir que des nombres,% et px symbols'
                ],
                'height' => [
                    'title'             => 'Hauteur',
                    'description'       => 'On peut utiliser px ou %',
                    'validationMessage' => 'La propriété Height ne peut contenir que des nombres,% et px symbols'
                ],
                'markerText' => [
                    'title'       => 'Texte du Marqueur',
                    'description' => 'Affiche le texte pré-défini sur le marqueur',
                    'default'     => 'La description de votre marqueur ici'
                ],
                'scrollProtection' => [
                    'title'         => 'Désactivé le Zoom',
                    'description'   => 'Désactivé les contrôles de la carte comme le zoom, jusqu'à ce que l'utilisateur click sur la carte .'
                ]

            ]
        ]

    ];

?>