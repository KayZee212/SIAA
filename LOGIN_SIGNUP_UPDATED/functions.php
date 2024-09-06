<?php 

session_start();


//SIGNUP 
function signup($data)
{
    $errors = array();

    // Validate username
    if (!preg_match('/^[a-zA-Z]+$/', $data['username'])) {
        $errors[] = "Please enter a valid username";
    }

    // Validate email
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email";
    }

    // Validate password
    if (strlen(trim($data['password'])) < 4) {
        $errors[] = "Password must be at least 4 characters long";
    }

    // Check if passwords match
    if ($data['password'] != $data['password2']) {
        $errors[] = "Passwords must match";
    }

    // Check for existing email
    $check = database_run("SELECT * FROM users WHERE email = :email LIMIT 1", ['email' => $data['email']]);
    if (is_array($check)) {
        $errors[] = "That email already exists";
    }

    // Save new user if no errors
    if (count($errors) == 0) {
        $arr['username'] = $data['username'];
        $arr['email'] = $data['email'];
        $arr['password'] = hash('sha256', $data['password']);
        $arr['date'] = date("Y-m-d H:i:s");

        // Convert to always not admin
        $arr['is_admin'] = 0;

        // Insert into the database
        $query = "INSERT INTO users (username, email, password, date, is_admin) VALUES (:username, :email, :password, :date, :is_admin)";
        database_run($query, $arr);
    }

    return $errors;
}

//LOGIN
function login($data)
{
    $errors = array();

    // Validate email
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email";
    }

    // Validate password length
    if (strlen(trim($data['password'])) < 4) {
        $errors[] = "Password must be at least 4 characters long";
    }

    // Proceed if there are no validation errors
    if (count($errors) == 0) {
        $arr['email'] = $data['email'];

        // Hash the input password using SHA-256
        $password = hash('sha256', $data['password']);

        // Query to find the user by email
        $query = "SELECT * FROM users WHERE email = :email LIMIT 1";
        $row = database_run($query, $arr);

        if (is_array($row)) {
            $row = $row[0]; // Fetch the first result (should be only one due to LIMIT 1)

            // Compare hashed password
            if ($password === $row->password) {
                // Set session variables upon successful login
                $_SESSION['USER'] = $row;
                $_SESSION['LOGGED_IN'] = true;

                // Store the admin status in session
                $_SESSION['IS_ADMIN'] = $row->is_admin;

                // Redirect based on admin status
                if ($row->is_admin == 1) {
                    header("Location: admin_dashboard.php"); 
                } else {
                    header("Location: /rubbyroast/index.php"); 
                }
                exit;
            } else {
                $errors[] = "Wrong email or password";
            }
        } else {
            $errors[] = "Wrong email or password";
        }
    }

    return $errors; 
}

//DATABASE RUN
function database_run($query, $vars = array())
{
    $string = "mysql:host=localhost;dbname=verify_db"; 
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

//LOGIN CHECKER
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
//UPDATE PROFILE
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

        $conn = null; 

        return true;
    } catch (PDOException $e) {
        // TAGA CHECK NG MALI WAG I DELETE TANGINA MO
        die("Query failed: " . $e->getMessage());
    }
}
