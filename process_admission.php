<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $qualification = $_POST['qualification'];
    $courseName = $_POST['courseName'];
    $admissionDate = $_POST['admissionDate'];
    $loginID = $_POST['loginID'];
    $password = $_POST['password'];
   

    require_once 'db_config.php'; 

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare("INSERT INTO admissions (first_name, last_name, address, city, state, country, email, mobile, qualification, course_name, admission_date, login_id, password /*... other columns */) 
                                VALUES (:firstName, :lastName, :address, :city, :state, :country, :email, :mobile, :qualification, :courseName, :admissionDate, :loginID, :password /*... other values */)");

        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':qualification', $qualification);
        $stmt->bindParam(':courseName', $courseName);
        $stmt->bindParam(':admissionDate', $admissionDate);
        $stmt->bindParam(':loginID', $loginID);
        $stmt->bindParam(':password', $password);
    

        $stmt->execute();

        header("Location: admission_success.php");
        exit;
    } catch(PDOException $e) {
        error_log("Error: " . $e->getMessage(), 0);
        echo "An error occurred. Please try again later.";
    }

    $conn = null;
}
?>
