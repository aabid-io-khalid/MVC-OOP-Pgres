<?php

namespace App\Controllers;

require_once '../../vendor/autoload.php';

use App\Core\Controller;
use App\Models\Article;

class ArticleController extends Controller {

    public function index() {
        $articles = Article::all();
        var_dump($articles);  
        $this->render('Article', ['articles' => $articles]);
    }
    
    public function show($id) {
        $article = Article::find($id);
        var_dump($article);  
        if ($article) {
            $this->render('Article', ['article' => $article]);
        } else {
            echo "Article not found";
        }
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'title' => $_POST['title'] ?? '',
                'content' => $_POST['content'] ?? ''
            ];
            Article::create($data); 
            header("Location: /"); 
            exit;
        }
    }

    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'title' => $_POST['title'] ?? '',
                'content' => $_POST['content'] ?? ''
            ];
            Article::update($id, $data); 
            header("Location: /articles/{$id}"); 
            exit;
        }
    }

    public function delete($id) {
        Article::delete($id); 
        header("Location: /");
        exit;
    }
}
