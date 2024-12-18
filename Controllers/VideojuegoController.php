<?php
require_once "../Models/VideojuegoModel.php";
class VideojuegoController {
    private $videojuegoModel;
    public function __construct() {
        $this->videojuegoModel = new Videojuego();
        echo "HOLA";
    }
    public function index() {
        $videojuegos = $this->videojuegoModel->getAll();
        require "../Views/Listar.php";
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $this->videojuegoModel->save($titulo, $descripcion);
            header("Location: index.php");
        } else {
            require "../Views/Create.php";
        }
    }
    public function edit($id) {if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $this->videojuegoModel->update($id, $titulo, $descripcion)
        ;
        header("Location: index.php");
        } else {
            $videojuego = $this->videojuegoModel->getById($id);
            require "../Views/Edit.php";
        }
        }
    public function delete($id) {
        $this->videojuegoModel->delete($id);
        header("Location: index.php");
    }
}

$P1 = new VideojuegoController;
$P1->index();
$P1->create();
