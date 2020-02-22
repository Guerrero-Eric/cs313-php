<?php  

function get_db() {
    $db = NULL;
    
	try {
		$dbUrl = getenv('DATABASE_URL');
		$dbopts = parse_url($dbUrl);
		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	} catch (PDOException $ex) {
		echo "Error connecting to DB. Details: $ex";
		die();
	}
	return $db;
}

 function showProfile($user)  {
         if (file_exists("$user.jpg"))
               echo "<img src='$user.jpg' style='float:left;'>";
               $db = get_db();
               $result = $db->prepare("SELECT * FROM profiles WHERE user='$user'");
               if ($result->num_rows)    {
                $row = $result->fetch(PDO::FETCH_ASSOC);  
                   echo stripslashes($row['text']) . "<br style='clear:left;'><br>";
                }
                else echo "<p>Nothing to see here, yet</p><br>";  
            }
?>