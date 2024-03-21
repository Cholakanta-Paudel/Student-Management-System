<?php 
include("db.php");
?>
<?php
if(!isset($_SESSION["email"])){
    
    ?>
    <?php header("location: LOGIN.php"); ?>
<?php
}
$email = $_SESSION['email'];
$email = $con->real_escape_string($email);
$sql = "select * from login1 where email = ('$email') ";

$result = $con -> query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row["name"];
    $email = $row["email"];
    $roll_no = $row["roll_no"];
    $register_no = $row["register_no"];
    $dob = $row["dob"];
    $year = $row["year"];
}else {
        // Handle the case where the user is not found
    $name = $email  = "User not found";
}
$sql1 = "select * from scores where email = ('$email')";
$score = $con -> query($sql1);
if ($score->num_rows > 0){
    $scorerow = $score->fetch_assoc();
    $c_basic = ($scorerow['c_basic'] === NULL) ? "Not completed" : $scorerow['c_basic'];
    $c_inter = ($scorerow['c_inter'] === NULL) ? "Not completed" : $scorerow['c_inter'];
    $c_adv = ($scorerow['c_adv'] === NULL) ? "Not completed" : $scorerow['c_adv'];
    $c_final = ($scorerow['c_final'] === NULL) ? "Not completed" : $scorerow['c_final'];
    $py_basic = ($scorerow['py_basic'] === NULL) ? "Not completed" : $scorerow['py_basic'];
    $py_inter = ($scorerow['py_inter'] === NULL) ? "Not completed" : $scorerow['py_inter'];
    $py_adv = ($scorerow['py_adv'] === NULL) ? "Not completed" : $scorerow['py_adv'];
    $py_final = ($scorerow['py_final'] === NULL) ? "Not completed" : $scorerow['py_final'];
    $ex_basic = ($scorerow['ex_basic'] === NULL) ? "Not completed" : $scorerow['ex_basic'];
    $ex_inter = ($scorerow['ex_inter'] === NULL) ? "Not completed" : $scorerow['ex_inter'];
    $ex_adv = ($scorerow['ex_adv'] === NULL) ? "Not completed" : $scorerow['ex_adv'];
    $ex_final = ($scorerow['ex_final'] === NULL) ? "Not completed" : $scorerow['ex_final'];
    $java_basic = ($scorerow['java_basic'] === NULL) ? "Not completed" : $scorerow['java_basic'];
    $java_inter = ($scorerow['java_inter'] === NULL) ? "Not completed" : $scorerow['java_inter'];
    $java_adv = ($scorerow['java_adv'] === NULL) ? "Not completed" : $scorerow['java_adv'];
    $java_final = ($scorerow['java_final'] === NULL) ? "Not completed" : $scorerow['java_final'];
    $os_basic = ($scorerow['os_basic'] === NULL) ? "Not completed" : $scorerow['os_basic'];
    $os_inter = ($scorerow['os_inter'] === NULL) ? "Not completed" : $scorerow['os_inter'];
    $os_adv = ($scorerow['os_adv'] === NULL) ? "Not completed" : $scorerow['os_adv'];
    $os_final = ($scorerow['os_final'] === NULL) ? "Not completed" : $scorerow['os_final'];
    $cc_basic = ($scorerow['cc_basic'] === NULL) ? "Not completed" : $scorerow['cc_basic'];
    $cc_inter = ($scorerow['cc_inter'] === NULL) ? "Not completed" : $scorerow['cc_inter'];
    $cc_adv = ($scorerow['cc_adv'] === NULL) ? "Not completed" : $scorerow['cc_adv'];
    $cc_final = ($scorerow['cc_final'] === NULL) ? "Not completed" : $scorerow['cc_final'];
    $se_basic = ($scorerow['se_basic'] === NULL) ? "Not completed" : $scorerow['se_basic'];
    $se_inter = ($scorerow['se_inter'] === NULL) ? "Not completed" : $scorerow['se_inter'];
    $se_adv = ($scorerow['se_adv'] === NULL) ? "Not completed" : $scorerow['se_adv'];
    $se_final = ($scorerow['se_final'] === NULL) ? "Not completed" : $scorerow['se_final'];
    $r_basic = ($scorerow['r_basic'] === NULL) ? "Not completed" : $scorerow['r_basic'];
    $r_inter = ($scorerow['r_inter'] === NULL) ? "Not completed" : $scorerow['r_inter'];
    $r_adv = ($scorerow['r_adv'] === NULL) ? "Not completed" : $scorerow['r_adv'];
    $r_final = ($scorerow['r_final'] === NULL) ? "Not completed" : $scorerow['r_final'];
    
}else{
    $c_basic=$c_inter=$c_final=$c_adv=$py_basic=$py_inter=$py_adv=$py_final=$ex_basic=$ex_inter=$ex_adv=$ex_final=$java_basic=$java_inter=$java_adv=$java_final = "Not completed";
    $os_basic=$os_inter=$os_adv=$os_final=$cc_basic=$cc_inter=$cc_adv=$cc_final=$se_basic=$se_inter=$se_adv=$se_final=$r_basic=$r_inter=$r_adv=$r_final = "Not completed";
}
$con->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEPARTMENT OF IT</title>
    <link rel="shortcut icon" href="./images/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <div class="logo" title="GNC Management System">
            <img src="./images/logo.png" alt="">
            <h1>G<span class="danger">IT</span>HUB</h1>
        </div>
        <div class="navbar">
            <a href="index.php" class="active">
                <span class="material-icons-sharp">home</span>
                <h3>Home</h3>
            </a>
            <a href="timetable.php" onclick="timeTableAll()">
                <span class="material-icons-sharp">today</span>
                <h3>Time Table</h3>
            </a> 
            <a href="exam.php">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Examination</h3>
            </a>
            <a href="password.php">
                <span class="material-icons-sharp">password</span>
                <h3>Aptitude</h3>
            </a>
            <a href="logout.php">
                <span class="material-icons-sharp" onclick="">logout</span>
                <h3>Logout</h3>
            </a>
        </div>
        <div id="profile-btn">
            <span class="material-icons-sharp">person</span>
        </div>
        <div class="theme-toggler">
            <span class="material-icons-sharp active">light_mode</span>
            <span class="material-icons-sharp">dark_mode</span>
        </div>
        
    </header>
    <div class="container">
        <aside>
            <div class="profile">
                <div class="top">
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg" alt="">
                    </div>
                    <div class="info">
                        <h3>Hey, <b><?php echo $name; ?></b></h3>
                        <small class="text-muted"><?php echo $roll_no?></small>
                    </div>
                </div>
                <div class="about">
                <h5>Course</h5>
                    <p>B.Sc Information Technology</p>
                    <h5>Year</h5>
                    <p><?php echo $year ?></p>
                    <h5>DOB</h5>
                    <p><?php echo $dob; ?></p>
                    <h5>Register number</h5>
                    <p><?php echo $register_no; ?></p>
                    <h5>Email</h5>
                    <p><?php echo $email; ?></p>
                </div>
            </div>
        </aside>
        <div class="right">
            <div class="announcements">
                <h2><center>ANNOUNCEMENTS</center></h2>
                <div class="updates">
                    <div class="message">
                        <p> <b>INDUSTRIAL VISIT</b> Join us for an unforgettable IV trip to Kerala on MARCH 20 – adventure awaits!!</p>
                        <small class="text-muted">2 Minutes Ago</small>
                    </div>
                    <div class="message">
                        <p> <b>PLACEMENT </b> INOR Groups Placement drive is set to happen on March 5  in Guru Ramdass Hall.</p>
                        <small class="text-muted">10 Minutes Ago</small>
                    </div>
                    <div class="message">
                        <p> <b>Examination </b> Semester Practical Examination will be held on 15th MARCH</p>
                        <small class="text-muted">Yesterday</small>
                    </div>
                </div>
                <br>
                <div class="announcements">
                <h2><center>SCORES</center></h2>
                <div class="updates">
                    <h2><center>PROGRAMMING IN C</center></h2>
                    <div class="message">
                        <p> <b>BASIC LEVEL</b>       <?php echo $c_basic?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>INTERMEDIATE LEVEL</b>       <?php echo $c_inter?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>ADVANCED LEVEL</b>       <?php echo $c_adv?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>FINAL ASSESSMENT</b>       <?php echo $c_final?>/10</p>
                    </div>
                    <br>
                    <h2><center>PYTHON PROGRAMMING </center></h2>
                    <div class="message">
                    <div class="message">
                        <p> <b>BASIC LEVEL</b>       <?php echo $py_basic?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>INTERMEDIATE LEVEL</b>       <?php echo $py_inter?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>ADVANCED LEVEL</b>       <?php echo $py_adv?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>FINAL ASSESSMENT</b>       <?php echo $py_final?>/10</p>
                    </div>
                    <br>
                    <h2><center>DATA ANALYSIS USING EXCEL</center></h2>
                    <div class="message">
                    <div class="message">
                        <p> <b>BASIC LEVEL</b>       <?php echo $ex_basic?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>INTERMEDIATE LEVEL</b>       <?php echo $ex_inter?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>ADVANCED LEVEL</b>       <?php echo $ex_adv?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>FINAL ASSESSMENT</b>       <?php echo $ex_final?>/10</p>
                    </div>
                    <br>
                    <h2><center>JAVA PROGRAMMING </center></h2>
                    <div class="message">
                    <div class="message">
                        <p> <b>BASIC LEVEL</b>       <?php echo $java_basic?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>INTERMEDIATE LEVEL</b>       <?php echo $java_inter?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>ADVANCED LEVEL</b>       <?php echo $java_adv?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>FINAL ASSESSMENT</b>       <?php echo $java_final?>/10</p>
                    </div>
                    <br>
                </div>
                <h2><center>OPERATING SYSTEM </center></h2>
                    <div class="message">
                    <div class="message">
                        <p> <b>BASIC LEVEL</b>       <?php echo $os_basic?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>INTERMEDIATE LEVEL</b>       <?php echo $os_inter?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>ADVANCED LEVEL</b>       <?php echo $os_adv?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>FINAL ASSESSMENT</b>       <?php echo $os_final?>/10</p>
                    </div>
                    <br>
                    <h2><center>CLOUD COMPUTING </center></h2>
                    <div class="message">
                    <div class="message">
                        <p> <b>BASIC LEVEL</b>       <?php echo $cc_basic?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>INTERMEDIATE LEVEL</b>       <?php echo $cc_inter?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>ADVANCED LEVEL</b>       <?php echo $cc_adv?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>FINAL ASSESSMENT</b>       <?php echo $cc_final?>/10</p>
                    </div>
                    <br>
                    <h2><center>SOFTWARE ENGINEERING </center></h2>
                    <div class="message">
                    <div class="message">
                        <p> <b>BASIC LEVEL</b>       <?php echo $se_basic?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>INTERMEDIATE LEVEL</b>       <?php echo $se_inter?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>ADVANCED LEVEL</b>       <?php echo $se_adv?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>FINAL ASSESSMENT</b>       <?php echo $se_final?>/10</p>
                    </div>
                    <br>
                    <h2><center>R PROGRAMMING </center></h2>
                    <div class="message">
                    <div class="message">
                        <p> <b>BASIC LEVEL</b>       <?php echo $r_basic?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>INTERMEDIATE LEVEL</b>       <?php echo $r_inter?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>ADVANCED LEVEL</b>       <?php echo $r_adv?>/10</p>
                    </div>
                    <div class="message">
                        <p> <b>FINAL ASSESSMENT</b>       <?php echo $r_final?>/10</p>
                    </div>
                    <br>
            </div>

        <main>
        <script src="app.js"></script>
            
</body>
</html>