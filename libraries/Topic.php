<?php
class Topic{
	// Init DB var
	private $db;
	
	/*
	 * Constructor
	 */
	public function __construct(){
		$this->db = new Database();
	}
	
	/*
	 * Get all topics
	 */
	public function getAllTopics(){
		$this->db->query("SELECT topics.*, users.username, users.avatar, categories.name FROM `topics`
				INNER JOIN users
				ON topics.user_id = users.id
				INNER JOIN categories
				ON topics.category_id = categories.id
				ORDER BY create_date DESC
				");
		// Assign result set
		$results = $this->db->resultset();
		
		return $results;
	}
	
	/*
	 * Get total # of topics
	 */
	public function getTotalTopics(){
		$this->db->query('SELECT * FROM `topics`');
		$this->db->resultset();
		return $this->db->rowCount();
	}
	
	/*
	 * Get total # of categories
	 */
	public function getTotalCategories(){
		$this->db->query('SELECT * FROM `categories`');
		$this->db->resultset();
		return $this->db->rowCount();
	}	

	/*
	 * Get total # of replies
	 */
	public function getTotalReplies($topic_id){
		$this->db->query("SELECT * FROM `replies` WHERE topic_id = $topic_id");
		$this->db->resultset();
		return $this->db->rowCount();
	}
	
	/*
	 * Get total # of users
	 */
	public function getTotalUsers(){
		$this->db->query('SELECT * FROM `users`');
		$this->db->resultset();
		return $this->db->rowCount();
	}	
	
	/*
	 * Get by category
	 */
	public function getByCategory($category_id){
		$this->db->query("SELECT topics.*, categories.*, users.username, users.avatar FROM topics
						INNER JOIN categories
						ON topics.category_id = categories.id
						INNER JOIN users
						ON topics.user_id = users.id
						WHERE topics.category_id = :category_id
						");
		$this->db->bind(':category_id', $category_id);
		$row = $this->db->single();
		return $row;
	}
}
