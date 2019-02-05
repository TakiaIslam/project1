<?php
	class dipti{
		private $host = "localhost";
		private $user = "root";
		private $pass = Null;
		private $database = "liveproject";
		public $db;
	    public function __construct(){
	        $this->db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
	    }
	    public function __destruct(){
	    	unset($this->db);
	    }
	}
 ?>