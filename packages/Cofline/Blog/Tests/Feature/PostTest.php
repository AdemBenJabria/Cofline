<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        $user = User::factory()->user()->create();

        $post = Post::factory()->create(['author_id' => $user->id]);
        Post::factory()->count(2)->create();

        $this->get('/')
            ->assertOk()
            ->assertSee('Latest posts')
            ->assertSee($post->title);
    }

    public function testSearch()
    {
        Post::factory()->count(3)->create();
        $post = Post::factory()->create(['title' => 'Hello']);

        $this->get('/?q=Hello')
            ->assertOk()
            ->assertSee('1 post found')
            ->assertSee($post->title);
            //->assertSee(humanize_date($post->posted_at));
    }

    public function testShow()
    {
        $post = Post::factory()->create();

        /*$this->actingAsUser()
            ->assertOk()
            ->assertSee($post->content)
            ->assertSee($post->title)
            ->assertSee(humanize_date($post->posted_at));*/
    }

}