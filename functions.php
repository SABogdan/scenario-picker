<?php
function connect_db($host = "localhost", $user = "bogbogic_root", $pass = "GsfBh[,r@0=r", $db = "bogbogic_scene-picker") {
    return mysqli_connect($host, $user, $pass, $db);
}
function register($name, $password, $websiteId){
    $link = connect_db();
    $name = test_data($name);
    $password = test_data($password);
    $websiteId = test_data($websiteId);
    $password = md5($password);
    $name = mysqli_real_escape_string($link, $name);
    $password = mysqli_real_escape_string($link, $password);
    $websiteId = mysqli_real_escape_string($link, $websiteId);

    $result = $link->query("SELECT `websiteId` FROM `admin` WHERE websiteId='$websiteId'");

    if($result->num_rows == 0){
        $sql = $link->query("INSERT INTO `admin` (`name`, `password`, `websiteId`) VALUES ('$name', '$password', '$websiteId')");
//        header("Location: login-adm.php");
        echo("<script>location.replace('login-adm.php');</script>");
    }else{
        echo "There is already a admin with the same Website ID";
    } 
}
function checkLogin($id, $password){
    $link = connect_db();
    $sql = "SELECT `id` FROM `admin` WHERE `websiteId`='$id' AND `password`='$password'";
    $r = mysqli_query($link, $sql);
    return mysqli_fetch_array($r, MYSQLI_ASSOC);
}
function login($webID, $password){
    $link = connect_db();
    $webID = test_data($webID);
    $password = test_data($password);
    $password = md5($password);
    $webID = mysqli_real_escape_string($link, $webID);
    $password = mysqli_real_escape_string($link, $password);
    $logged = checkLogin($webID, $password);
    if(isset($logged['id'])){
//        header("Location: admin.php");
        echo("<script>location.replace('admin.php');</script>");
    } else{
        echo("<script>location.replace('reg-adm.php');</script>");
//        header("Location: reg-adm.php");
    }
}
function searchSceneId($id){
    $link = connect_db();
    $sql = "SELECT * FROM `scenarios` WHERE `id`='$id'";
    $result = $link->query($sql);
    $row = $result->fetch_assoc();
//    TODO: row is empty show that is empty, else echo the messege below
    echo("Scenario id: ".$row['id']."<br>"." Scenario idea: ".$row['scenario']."<br>"."Level of contact: ".$row['level']);
}
function scene($id){
    $link = connect_db();
    $sql = "SELECT * FROM `scenarios` WHERE `id`='$id'";
    $result = $link->query($sql);
    $row = $result->fetch_assoc();
//    TODO: row is empty show that is empty, else echo the messege below
    echo("Scenario id: ".$row['id']."<br>"." Scenario idea: ".$row['scenario']."<br>"."Level of contact: ".$row['level']);
}
function civSearch($level){
    $link = connect_db();
    $sql = "SELECT * FROM `scenarios` WHERE `level`='$level' ORDER BY RAND() LIMIT 1";
    $result = $link->query($sql);
    $row = $result->fetch_assoc();
//    TODO: row is empty show that is empty, else echo the messege below
    echo("<br>" ."Scenario id: ".$row['id']."<br>"." Scenario idea: ".$row['scenario']."<br>"."Level of contact: ".$row['level']);
}
function addScene($scenario, $level){
    $link = connect_db();
    $scenario = test_data($scenario);
    $level =test_data($level);
    $scenario = mysqli_real_escape_string($link, $scenario);
    $level = mysqli_real_escape_string($link, $level);
    $sql = $link->query("INSERT INTO `scenarios` (`scenario`, `level`) VALUES ('$scenario', '$level')");
}
function removeScene($id){
    $link = connect_db();
    $id = test_data($id);
    $id = mysqli_real_escape_string($link, $id);
    $sql = $link->query("DELETE FROM `scenarios` WHERE `id`='$id'");
//    echo("Deleted the scenario with the id= $id");
}
function editScene($id, $scenario, $level){
    $link = connect_db();
    $id = test_data($id);
    $id = mysqli_real_escape_string($link, $id);
    $scenario = test_data($scenario);
    $scenario = mysqli_real_escape_string($link, $scenario);
    $level = test_data($level);
    $level = mysqli_real_escape_string($link, $level);
    $sql = $link->query("UPDATE `scenarios` SET `scenario`='$scenario', `level`='$level' WHERE `id`='$id'");
}
function allScenarios(){
    $link = connect_db();
    $sql = "SELECT * FROM `scenarios`";
    if($result=$link->query($sql)){
        while($row=$result->fetch_row()){
            printf ("%s (%s)\n"."<br>", $row[0], $row[1]);
        }
    }
}
function test_data($input){
    $input = trim($input);
    $input = htmlspecialchars($input);
    $input = stripslashes($input);
    return $input;
}