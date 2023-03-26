<?php

namespace Sekolahlaravel\Geodetector;

use GuzzleHttp\Client;

class Geo
{
    public function getLocation($latitude, $longitude)
    {
        $client = new Client();
        $result = $client->get('https://nominatim.openstreetmap.org/reverse', [
            'query' => [
                'format' => 'jsonv2',
                'lat' => $latitude,
                'lon' => $longitude
            ]
        ]);

        return $result->getBody()->getContents();
    }
}
