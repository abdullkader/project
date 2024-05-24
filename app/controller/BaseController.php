<?php
namespace App\Controller;

class BaseController {
    protected function view($view, $data = []) {
        extract($data);
        require "../app/view/$view.php";
    }
}
?>
