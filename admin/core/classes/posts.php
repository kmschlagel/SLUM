<?php

class Posts{
	private $db;

	public function __construct($database) {
		$this->db = $database;
	}

	//Updates "saves" table, row 1, with current content of title and textarea fields.
	public function save_post($id, $title, $text) {
		$query = $this->db->prepare("UPDATE posts SET title=?, content=? WHERE id=?");
		$query->bindValue(1, $title);
		$query->bindValue(2, $text);
		$query->bindValue(3, $id);
		try {
			$query->execute();
		}
		catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function get_saved_post() {
		$query = $this->db->prepare("SELECT * FROM posts WHERE id = '1'");

		try {
			$rows = $query->execute();
		    $rows = $query->fetch();
			return $rows;
		}
		catch(PDOException $e){
			die($e->getMessage());
	    }
	}

	public function get_post_by_id($id) {
		$query = $this->db->prepare("SELECT * FROM posts WHERE id = ?");
		$query->bindValue(1, $id);
		try {
			$post = $query->execute();
			$post = $query->fetch();
			return $post;

		}
		catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function get_post_by_type($type) {
		$query = $this->db->prepare("SELECT * FROM posts WHERE type = ? ORDER BY
									 id DESC LIMIT 1");
		$query->bindValue(1, $type);
		try {
			$post = $query->execute();
			$post = $query->fetch();
			return $post;

		}
		catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function add_post($title, $text, $type) {
		$query = $this->db->prepare("INSERT INTO posts (title, content, type) VALUES (?, ?, ?)");
		$query->bindValue(1, $title);
		$query->bindValue(2, $text);
		$query->bindValue(3, $type);
		try {
			$query->execute();
		}
		catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function get_last_post() {
		$query = "SELECT MAX(id) from posts";
		$max = $this->db->query($query);
		$max = $max->fetch();
		$query1 = $this->db->prepare("SELECT * FROM posts WHERE id = '$max[0]'");

		try {
			$rows = $query1->execute();
		    $rows = $query1->fetch();
			return $rows;
		}
		catch(PDOException $e){
			die($e->getMessage());
	    }
	}

	public function get_recent_posts() {
		$query = "SELECT MAX(id) from posts";
		$max = $this->db->query($query);
		$max = $max->fetch();
		// $min = $max[0] - 100; // This value sets the number of posts returns.
		$query1 = "SELECT id, title, datetime, type FROM posts WHERE id != 1
					ORDER BY id DESC LIMIT 50 ";
		try {
			$result = $this->db->query($query1);
			$result = $result->fetchAll();
			return $result;
		}
		catch(PDOException $e) {
			die($e->getMessage());
		}
	}

	public function get_recent_messages() {
		$query = "SELECT id, title, datetime FROM posts WHERE id != 1
					AND type = 'message'";
		try {
			$result = $this->db->query($query);
			$result = $result->fetchAll();
			return $result;
		}
		catch(PDOException $e) {
			die($e->getMessage());
		}
	}

	public function delete_post($id) {
		$query = $this->db->prepare("DELETE FROM posts WHERE id = ?");
		$query->bindValue(1, $id);
		try {
			$post = $query->execute();
		}
		catch(PDOException $e){
			die($e->getMessage());
		}
	}

}

?>