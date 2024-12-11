<?php

require_once "../Config/Conexion.php";

class Videojuego
    {
    private $pdo;
    public function __construct() {
        $database = new Conexion();
        $this->pdo = $database->conectar();
        }
    // a partir de aquí iran todas los métodos CRUD
    public function getAll()
    {
        try{
            $query = "SELECT * FROM videojuegos";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetchAll();
        }catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
    public function getById($id)
    {
        try{
            $query = "SELECT * FROM videojuegos WHERE id = $id";
            $registro = $this->pdo->prepare($query);
            $registro->execute();
            return $registro->fetch();
        }catch (PDOException $e){
            die($e->getMessage());
        }
        }
    public function delete($d)
    {
        try{
            $insercion = $this->pdo->prepare("delete from videojuegos where
            id=:id");
            $insercion->bindParam(':id', $d);
            return $insercion->execute();
        }catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
    public function edit($i,$t,$d)
    {
        try{
            $insercion = $this->pdo->prepare("update videojuegos set title=:
            titulo, descripction=:descripcion where id=:id");
            $insercion->bindParam(':id', $i);
            $insercion->bindParam(':titulo', $t);
            $insercion->bindParam(':descripcion', $d);
            $insercion->execute();
            return true;
        }catch (PDOException $e)
        {
            die($e->getMessage());
        }
        }
    public function save($t,$d)
    {
        try{
            $insercion = $this->pdo->prepare("INSERT INTO videojuegos(title, 
            description) VALUES(:titulo, :descripcion, :precio)");
            $insercion->bindParam(':titulo', $t);
            $insercion->bindParam(':descripcion', $d);
            return $insercion->execute();
        }catch (PDOException $e)
        {
            die($e->getMessage());
        }
        }
        public function update($id, $titulo, $descripcion, $precio) {
            $query = "UPDATE videojuegos SET title = :titulo, description = :descripcion WHERE id = :id";
            $insercion = $this->pdo->prepare($query);
            $insercion->bindParam(":id", $id);
            $insercion->bindParam(":titulo", $titulo);
            $insercion->bindParam(":descripcion", $descripcion);
            return $insercion->execute();
    }
}