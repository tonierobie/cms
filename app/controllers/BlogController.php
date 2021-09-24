<?php 

namespace App\Controllers;

use Core\{DB, Controller, H};

class BlogController extends Controller {

    public function indexAction(){
        $db = DB::getInstance();
        $sql = "INSERT INTO articles (`title`, `body`) VALUES (:title, :body)";
        $bind = ['title'=>'new article 1', 'body'=> 'article body 1'];
        $db->execute($sql, $bind);
        $this->view->setSiteTitle('Blog');
        $this->view->render();
    }
    
}