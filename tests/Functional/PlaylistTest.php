<?php
namespace App\tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlaylistTest extends WebTestCase
{
    public function testPlaylistPageAccess(): void
    {
        $client = static::createClient();
    
        $client->request('GET', '/playlists');

        $this->assertResponseIsSuccessful();

        $this->assertSelectorTextContains('html', 'Playlist');
    }
}