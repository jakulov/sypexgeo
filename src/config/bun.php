<?php
/**
 * Created by PhpStorm.
 * User: yakov
 * Date: 10.12.15
 * Time: 13:01
 */

return [
    'sypexgeo' => [
        'use_db' => false,
        'db_path' => 'sx_geo_city/SxGeoCity_utf8.dat',
        'licence_key' => '',
        'default_location' => [
            'city' => [
                'id' => 524901,
                'lat' => 55.75222,
                'lon' => 37.61556,
                'name_ru' => 'Москва',
                'name_en' => 'Moscow',
                'okato' => '45',
            ],
            'region' => [
                'id' => 524894,
                'lat' => 55.76,
                'lon' => 37.61,
                'name_ru' => 'Москва',
                'name_en' => 'Moskva',
                'iso' => 'RU-MOW',
                'timezone' => 'Europe/Moscow',
                'okato' => '45',
            ],
            'country' => [
                'id' => 185,
                'iso' => 'RU',
                'continent' => 'EU',
                'lat' => 60,
                'lon' => 100,
                'name_ru' => 'Россия',
                'name_en' => 'Russia',
                'timezone' => 'Europe/Moscow',
            ],
        ],
        'sypexgeo' => [
            'view' => 'json',
        ],
    ],
];