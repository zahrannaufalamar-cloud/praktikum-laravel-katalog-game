<?php

namespace App\Http\Controllers;

class GameController extends Controller
{
    private function getGames()
    {
        return [
            [
                'slug' => 'minecraft',
                'nama' => 'Minecraft',
                'genre' => 'Sandbox',
                'platform' => 'PC, PlayStation, Xbox',
                'tahun' => 2011,
                'deskripsi' => 'Game sandbox yang memungkinkan pemain membangun dan menjelajahi dunia.',
                'gambar' => 'images/Minecraft.png'
            ],

            [
                'slug' => 'gta-v',
                'nama' => 'GTA V',
                'genre' => 'Action',
                'platform' => 'PC, PlayStation, Xbox',
                'tahun' => 2013,
                'deskripsi' => 'Game action open world dengan berbagai misi dan aktivitas.',
                'gambar' => 'images/GTAV.png'
            ],

            [
                'slug' => 'valorant',
                'nama' => 'Valorant',
                'genre' => 'FPS',
                'platform' => 'PC',
                'tahun' => 2020,
                'deskripsi' => 'Game FPS kompetitif dengan karakter dan kemampuan unik.',
                'gambar' => 'images/Valorant.png'
            ],

            [
                'slug' => 'efootball',
                'nama' => 'eFootball',
                'genre' => 'Sport',
                'platform' => 'PC, PlayStation, Xbox',
                'tahun' => 2021,
                'deskripsi' => 'Game sepak bola yang dapat dimainkan secara online.',
                'gambar' => 'images/eFootball.png'
            ],

            [
                'slug' => 'elden-ring',
                'nama' => 'Elden Ring',
                'genre' => 'Action RPG',
                'platform' => 'PC, PlayStation, Xbox',
                'tahun' => 2022,
                'deskripsi' => 'Game action RPG dengan dunia luas dan berbagai tantangan.',
                'gambar' => 'images/EldenRing.png'
            ],

            [
                'slug' => 'mobile-legends',
                'nama' => 'Mobile Legends',
                'genre' => 'MOBA',
                'platform' => 'Android, iOS',
                'tahun' => 2016,
                'deskripsi' => 'Game MOBA yang dimainkan secara tim melawan pemain lain.',
                'gambar' => 'images/GenshinImpact.png'
            ],
        ];
    }

    public function index()
    {
        $games = $this->getGames();

        return view('games', compact('games'));
    }

    public function detail($slug)
    {
        $games = $this->getGames();

        foreach ($games as $game) {
            if ($game['slug'] == $slug) {
                return view('detail', compact('game'));
            }
        }

        abort(404);
    }
}