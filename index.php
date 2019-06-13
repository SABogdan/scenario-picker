<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Scene picker</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ScenariosSearchCIV">Search for a
    scenario
</button>

<!-- Modal -->
<div id="ScenariosSearchCIV" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="InputID">What level of contact do you want your scenario to be?
                        </label>
                        <input type="number" name="level-contact" class="form-control" id="level-contact" aria-describedby="level-contact"
                               placeholder="Maximum level 5 of contact">
                    </div>
                    <button type="submit" name="SearchID" value="SearchID" class="btn btn-primary">Randomise</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!--START search after id modal START-->

<!--END search after id modal END-->
<!--START result of search after id modal START-->

<!--END result of search after id modal END-->

<?php
//        require './functions.php';
//        $pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache'); 
//        if($pageRefreshed == 1){
//            $link = connect_db();
//            $sql = "SELECT * FROM `scenarios` ORDER BY RAND() LIMIT 1";
//            $result = $link->query($sql);
//            $row = $result->fetch_assoc();
//            echo("Scenario id: ".$row['id']."<br>"." Scenario idea: ".$row['scenario']."<br>"."Level of contact: ".$row['level']);
////            echo "Scenario ". ;
//        }else{
//            //enter code here
//        echo "Do a hard refresh please";
//        }
if (isset($_POST['SearchID'])) {
    require_once './functions.php';
    $i = $_POST['level-contact'];
    $r = civSearch($i);
}
?>
</body>
</html>
