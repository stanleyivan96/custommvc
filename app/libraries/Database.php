<?php
	/*
		*  PDO Database Class
		*  Connect to Database
		*  Create prepared statements
		*  Bind values
		*  Return rows and results 
		*/

		class Database {
			private $host = DB_HOST;
			private $user = DB_USER;
			private $pass = DB_PASS;
			private $dbname = DB_NAME;

			private $dbh;
			private $stmt;
			private $error;

			public function __construct(){
				// Set DSN
				$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
				$options = array(
					PDO::ATTN_PERSISTENT => true;
					PDO::ATTN_ERRMODE => PDO::ERRMODE_EXCEPTION
				);

				// Create PDO Instance
				try {
					$this->dbh = new PDO($dsn, $this->user, $this->password, $options);
				} catch (PDOException $e) {
					$this->error = $e->getMessage();
					echo $this->error;
				}
			}
		}