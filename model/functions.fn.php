<?php 
/*******************************************************************
SUMMARY
	1!FUNCTIONS
		1.1!userRegistration
		1.2!userConnection
		1.3!selectTweets
		1.4!selectTweet
		1.5!insertTweet
		1.6!updateTweet
		1.7!deleteTweet
		1.8!isEmailAvailable
		1.9!isUsernameAvailable
		2.0!isTweetOwner
		2.1!updateProfilPicture	

********************************************************************/

/**************************************************
					1!FUNCTIONS
**************************************************/
	include 'config/config.php';

		/*1.1!userRegistration
			return :
				true for registration OK
				false for fail
			$db -> 				database object
			$username -> 		field value : username
			$email -> 			field value : email
			$password -> 		field value : password
		*/
	function userRegistration(PDO $db, $username, $email, $password){

        if(empty($_POST['email'])AND empty($_POST['password'])) {
            if (isset($_POST['email']) and isset($POST['password'])) {
                var_dump($db);

                $data = [
                    $username=>trim($_POST['username']),
                    $email => trim($_POST['email']),
                    $password => trim($_POST['password'])

                ];

                $req = $db->query(
                    INSERT INTO users('username', 'email', 'password', 'picture', 'created_at') VALUES ('$username','$email','$password', '','CURRENT-TIME')

                );
                $req->execute($data);
                var_dump($req);
                header("Location:index.php");
            }
        }
	}



		/*1.2!userConnection
			return :
				true for connection OK
				false for fail
			$db -> 				database object
			$email -> 			field value : email
			$password -> 		field value : password
		*/
function userConnection(PDO $db, $email, $password){
	if(!empty($email) && !empty($password)){
		//Requête SQL
		$sql = "SELECT * FROM users WHERE email = :eml AND password = :passwd LIMIT 1";

		$req = $db->prepare($sql);
		$req->execute(array(
			':eml' => $email,
			':passwd' => $password
		));

		$result = $req->fetch(PDO::FETCH_ASSOC);

		//Si le fetch réussi, alors un résultat a été retourné donc le couple email / password est correct
		if($result == true){
			
			//on définit la SESSION
			$_SESSION['id'] = $result['id'];
			$_SESSION['username'] = $result['username'];
			$_SESSION['email'] = $result['email'];
			$_SESSION['created_at'] = $result['created_at'];
			$_SESSION['picture'] = $result['picture'];

			return true;
		}else{
			return false;
		}
	}else{
		//Si les champs sont vides on retourne false
		return false;
	}
}


		/*1.3!selectTweets
			return :
				list of tweets in array
			$db -> 				database object
		*/
	function selectTweets(PDO $db){

		

	}


		/*1.4!selectTweet
			return : 
				selected tweet in array
			$db -> 				database object
			$tweet_id ->				tweet's id
		*/
	function selectTweet(PDO $db, $tweet_id){

		

	}


		/*1.5!insertTweet
			return : 
				true
			$db -> 				database object
			$user_id ->			user's id (must be current $_SESSION['id'])
			$message ->			field value : message
		*/
	function insertTweet(PDO $db, $user_id, $message){



	}


		/*1.6!updateTweet
			return : 
				true if updated
				false for bad ownership or empty message
			$db -> 				database object
			$tweet_id ->				tweet's id
			$message ->			field value : message
			$user_id -> 		user's id (tweet's owner) | must use $_SESSION['id']
		*/
	function updateTweet(PDO $db, $tweet_id, $message, $user_id){

		

	}


		/*1.7!deleteTweet
			return : 
				true if deleted
				false for fail
			$db -> 				database object
			$tweet_id ->				tweet's id
			$user_id -> 		user's id (tweet's owner) | must use $_SESSION['id']
		*/
	function deleteTweet(PDO $db, $tweet_id, $user_id){

		

	}


		/*1.8!isEmailAvailable
			return : 
				true if email is available
				false if email is not available
			$db -> 				database object
			$email ->			email's value to verify
		*/
	function isEmailAvailable(PDO $db, $email){

		

	}		


		/*1.9!isUsernameAvailable
			return : 
				true if username is available
				false if username is not available
			$db -> 				database object
			$username ->		username's value to verify
		*/
	function isUsernameAvailable(PDO $db, $username){

		

	}		


		/*2.0!isTweetOwner
			return : 
				true if it's the good owner
				false if someone try to edit another user's tweet
			$db -> 				database object
			$tweet_id ->		tweet's id
			$user_id -> 		user's id
		*/
	function isTweetOwner(PDO $db, $tweet_id, $user_id){

		

	}	


		/*2.1!updateProfilPicture
			return : 
				'ok' if image is changed
				'{error}' if there is an error
			$db -> 				database object
			$imgInfos ->		must be $_FILES['image'] => $imgInfos = $FILES['image']
			$user_id -> 		user's id (picture's owner) | must use $_SESSION['id']
		*/
	function updateProfilPicture(PDO $db, $imgInfos, $user_id){

		

	}
