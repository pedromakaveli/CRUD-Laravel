<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Create

    public function create (Request $request) {
        // =========== x =============
        // forma de criar registro no banco
        
        // $post = new Post($new_post);
        // $post->save();

        // =========== x =============
        
        $post = new Post();
        $post->title = 'Meu segundo Post';
        $post->content = 'Conteudo quakquer';
        $post->author = 'Pedro VKT';
        $post->save(); // Joga a info no banco de dados

        dd($post);
    }

    // read

    public function read (Request $r) {
        $post = new Post();
        $post = $post->find(1); // Para pegar dado específico utilize Where ou find passando o ID
        dd($post);
    }

    // read_all

    public function read_all (Request $re) {
        $posts = Post::all();
        return $posts;
    }

    // update

    public function update (Request $request) {
        $post = Post::where('id', '>', 0)->update([
            'author' => 'Desconhecido'
        ]);
        return $post;
    }

    // delete

    public function delete (Request $request) {
        $post = Post::find(1);
        
        if ($post) {
            return $post->delete();
        }

        return 'Não existe post com este id';

    }

    public function delete_all (Request $request) {
        $post = Post::where('id', '>', 0)->delete();
        return $post;
    }
}
