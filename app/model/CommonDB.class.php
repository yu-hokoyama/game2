<?php
class CommonDB{
	public static function connectDB(){
		$dbh = new PDO('mysql:host=localhost;dbname=hokoyama', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		return $dbh;
	}
}
