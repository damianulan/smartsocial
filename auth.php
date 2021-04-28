<?php  /*  # TAKE $_POST VALUES FROM LANDING.PHP AND PUSH THEM TO "LOG" TABLE
    # ...


    # AUTHENTICATE / CREATE SESSION USING EMAIL AS KEY FOR SELECT QUERY -- SELECT * FROM USER WHERE email LIKE "$_POST['email']"
    #$email = $_POST['']
    #$first_name = 
    #$last_name = */?>
<?php 
$LOGIN = false;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'php/db.class.php';
    $Email = $_POST["email"];
    $first_name = $_POST["First name"];
    $Last_name = $_POST["Last name"];

    $SQL = "Select * from user where email = '$Email' ";
    $stmt = $this->connect()->query($SQL);
    while($row = $stmt->fetch()){
        echo $row[$column].'<br>'; 
    }
    if ($stmt = 1){
        $LOGIN = true;
        session_start();
        $_SESSION['email'] = $Email;
        $_SESSION['First name'] = $first_name;
        $_SESSION['Last name'] = $Last_name;
        header("location: index.php");
    }
    else {
        echo  "invalid login";
    }
}

?>


