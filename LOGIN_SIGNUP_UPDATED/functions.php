<?php 

session_start();

function signup($data)
{
    $errors = array();

    // Validate
    if (!preg_match('/^[a-zA-Z]+$/', $data['username'])) {
        $errors[] = "Please enter a valid username";
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email";
    }

    if (strlen(trim($data['password'])) < 4) {
        $errors[] = "Password must be at least 4 characters long";
    }

    if ($data['password'] != $data['password2']) {
        $errors[] = "Passwords must match";
    }

    // Check for existing email
    $check = database_run("SELECT * FROM users WHERE email = :email LIMIT 1", ['email' => $data['email']]);
    if (is_array($check)) {
        $errors[] = "That email already exists";
    }

    // Save
    if (count($errors) == 0) {
        $arr['username'] = $data['username'];
        $arr['email'] = $data['email'];
        $arr['password'] = hash('sha256', $data['password']);
        $arr['date'] = date("Y-m-d H:i:s");

        // Use prepared statement for better security
        $query = "INSERT INTO users (username, email, password, date) VALUES (:username, :email, :password, :date)";
        database_run($query, $arr);
    }

    return $errors;
}

function login($data)
{
    $errors = array();

    // Validate
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email";
    }

    if (strlen(trim($data['password'])) < 4) {
        $errors[] = "Password must be at least 4 characters long";
    }

    // Check
    if (count($errors) == 0) {
        $arr['email'] = $data['email'];

        // Use the same hashing method as password reset
        $password = hash('sha256', $data['password']);

        $query = "SELECT * FROM users WHERE email = :email LIMIT 1";

        $row = database_run($query, $arr);

        if (is_array($row)) {
            $row = $row[0];

            // Use the same comparison method as password reset
            if ($password === $row->password) {
                $_SESSION['USER'] = $row;
                $_SESSION['LOGGED_IN'] = true;
            } else {
                $errors[] = "Wrong email or password";
            }
        } else {
            $errors[] = "Wrong email or password";
        }
    }

    return $errors;
}

function database_run($query, $vars = array())
{
    $string = "mysql:host=localhost;dbname=verify_db"; // Corrected line
    $con = new PDO($string, 'root', '');

    if (!$con) {
        return false;
    }

    $stm = $con->prepare($query);
    $check = $stm->execute($vars);

    if ($check) {
        $data = $stm->fetchAll(PDO::FETCH_OBJ);
        if (count($data) > 0) {
            return $data;
        }
    }

    return false;
}


function check_login($redirect = true){

	if(isset($_SESSION['USER']) && isset($_SESSION['LOGGED_IN'])){

		return true;
	}

	if($redirect){
		header("Location: login.php");
		die;
	}else{
		return false;
	}
	
}

function check_verified(){

	$id = $_SESSION['USER']->id;
	$query = "select * from users where id = '$id' limit 1";
	$row = database_run($query);

	if(is_array($row)){
		$row = $row[0];

		if($row->email == $row->email_verified){

			return true;
		}
	}
 
	return false;
 	
}

function update_profile($user_id, $username, $email, $first_name, $middle_name, $last_name, $contact_number, $address_line_1, $address_line_2, $barangay, $region, $postal_code) {
    try {
        $string = "mysql:host=localhost;dbname=verify_db";
        $conn = new PDO($string, 'root', '');

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "UPDATE users 
                  SET 
                      username = :username,
                      email = :email,
                      first_name = :first_name,
                      middle_name = :middle_name,
                      last_name = :last_name,
                      contact_number = :contact_number,
                      address_line_1 = :address_line_1,
                      address_line_2 = :address_line_2,
                      barangay = :barangay,
                      region = :region,
                      postal_code = :postal_code
                  WHERE id = :user_id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":first_name", $first_name);
        $stmt->bindParam(":middle_name", $middle_name);
        $stmt->bindParam(":last_name", $last_name);
        $stmt->bindParam(":contact_number", $contact_number);
        $stmt->bindParam(":address_line_1", $address_line_1);
        $stmt->bindParam(":address_line_2", $address_line_2);
        $stmt->bindParam(":barangay", $barangay);
        $stmt->bindParam(":region", $region);
        $stmt->bindParam(":postal_code", $postal_code);
        $stmt->bindParam(":user_id", $user_id);

        $stmt->execute();

        $conn = null; // Close the connection

        return true;
    } catch (PDOException $e) {
        // Log or handle the exception appropriately
        die("Query failed: " . $e->getMessage());
    }
}
