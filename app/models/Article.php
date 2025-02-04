<?php
namespace App\Models;

use App\Core\Database;

class Article {

    protected $table = 'articles';

    protected $fillable = ['title', 'content'];

    public static function all() {
        $db = Database::getDB();  
        $query = $db->prepare("SELECT * FROM " . (new static())->table);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        $db = Database::getDB();  
        $query = $db->prepare("SELECT * FROM " . (new static())->table . " WHERE id = :id");
        $query->bindParam(':id', $id, \PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = Database::getDB();  
        $query = $db->prepare("INSERT INTO " . (new static())->table . " (title, content) VALUES (:title, :content)");
        $query->bindParam(':title', $data['title']);
        $query->bindParam(':content', $data['content']);
        return $query->execute();
    }

    public static function update($id, $data) {
        $db = Database::getDB();  
        $query = $db->prepare("UPDATE " . (new static())->table . " SET title = :title, content = :content WHERE id = :id");
        $query->bindParam(':id', $id, \PDO::PARAM_INT);
        $query->bindParam(':title', $data['title']);
        $query->bindParam(':content', $data['content']);
        return $query->execute();
    }

    public static function delete($id) {
        $db = Database::getDB();  
        $query = $db->prepare("DELETE FROM " . (new static())->table . " WHERE id = :id");
        $query->bindParam(':id', $id, \PDO::PARAM_INT);
        return $query->execute();
    }
}
