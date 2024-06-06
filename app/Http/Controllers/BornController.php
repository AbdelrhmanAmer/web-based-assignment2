<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;

class BornController extends Controller
{
    public function getActorsIds($date)
    {
        $client = new Client();

        $response = $client->request('GET', 'https://imdb8.p.rapidapi.com/actors/v2/get-born-today?today=' . $date . '&first=20&country=US&language=en-US', [
            'headers' => [
                'x-rapidapi-host' => 'imdb8.p.rapidapi.com',
                'x-rapidapi-key' => 'ac3c1a3f91mshbf3ff9b8cc6ac23p1c4561jsn7cb375d7dbbe',
            ],
        ]);

        $data = json_decode($response->getBody()->getContents(), true);

        $actorIds = array_map(function ($edge) {
            return $edge['node']['id'];
        }, $data['data']['bornToday']['edges']);

        if (empty($actorIds)) {
            $actorIds = ['No actors found for today.'];
        }

        $actors = [];
        foreach ($actorIds as $acotorId) {
            $actorName = $this->getActorName($acotorId);
            
            if ($actorName != null) {
                $actors[] = $actorName;
            }
        }
        return view('actors', ['actors' => $actors]);
    }

    public function getActorName($id)
    {
        $client = new Client();

        $response = $client->request('GET', 'https://imdb8.p.rapidapi.com/actors/v2/get-bio?nconst=' . $id . '&country=US&language=en-US', [
            'headers' => [
                'x-rapidapi-host' => 'imdb8.p.rapidapi.com',
                'x-rapidapi-key' => 'ac3c1a3f91mshbf3ff9b8cc6ac23p1c4561jsn7cb375d7dbbe',
            ],
        ]);
        $jsonResponse = (string) $response->getBody();
        $responseData = json_decode($jsonResponse, true);
        $actorName = $responseData['data']['name']['nameText']['text'] ?? 'Unknown';
        return $actorName;
    }
}
