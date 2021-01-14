<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    private $faker;
    private $user;
    public function setUp() :void
    {
        parent::setUp();
        $this->faker = Factory::create('fr_FR');
        $this->user = User::factory()->create();
    }

    public function testCreate()
    {
        $data = array(
            'category_id'=>8,
            'title'=>'aTitle',
            'content'=>'IamaContent',
            'is_published'=>1,
            //'created_at'=>now(),
            //'updated_at'=>now()
            );
            $this->actingAs($this->user)->postJson(route('posts.create',$data));
            $this->assertDatabaseHas('posts',$data);
        
    }

    public function testUpdate()
    {
        $data = [
            'id' =>  1,//$this->faker->randomDigit,
            'category_id' => $this->faker->randomDigit,
            'title' => $this->faker->title ,
            'content' => $this->faker->paragraph,
            'is_published' => 1
            //'updated_at' => now()
        ];
        $response = $this->actingAs($this->user)->postJson(route('posts.update', $data['id']), $data);
        $this->assertDatabaseHas('posts', $data);
    }

    public function testDestroy()
    {
        $id = ['id' => 1];
        $response = $this->actingAs($this->user)->postJson(route('posts.destroy', $id));

        $this->assertDatabaseMissing('posts',  $id);
    }

    

}