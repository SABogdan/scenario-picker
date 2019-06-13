<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin login
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>


<!--START search after id modal START-->
<div class="modal fade" id="SeachIDModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Search scenario by ID
                </h4>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="InputID">ID
                        </label>
                        <input type="number" name="id" class="form-control" id="id" aria-describedby="id"
                               placeholder="ex: 1611">
                    </div>
                    <button type="submit" name="SearchID" value="SearchID" class="btn btn-primary">Search by id</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                </button>
            </div>
        </div>
    </div>
</div>
<!--END search after id modal END-->
<!--START result of search after id modal START-->
<div class="modal fade" id="ResultIDModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Result of search scenario by ID
                </h4>
            </div>
            <div class="modal-body">
                <?php
                if (isset($_POST['SearchID'])) {
                    require_once './functions.php';
                    $i = $_POST['id'];
                    $r = searchSceneId($i);
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                </button>
            </div>
        </div>
    </div>
</div>
<!--END result of search after id modal END-->
<!--START Add a scenario START-->
<div class="modal fade" id="AddModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add scenario
                </h4>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="Scenario">Scenario
                        </label>
                        <input type="text" name="scenario" class="form-control" id="scenario"
                               aria-describedby="scenario" placeholder="something....">
                    </div>
                    <div class="form-group">
                        <label for="level">Level of Contact
                        </label>
                        <input type="number" name="level" class="form-control" id="level" aria-describedby="level"
                               placeholder="1, 2, 3..">
                    </div>
                    <button type="submit" name="AddModal" value="AddModal" class="btn btn-primary">Add scenario</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                </button>
            </div>
        </div>
    </div>
</div>
<!--END Add a scenario END-->
<!--START Remove a scenario START-->
<div class="modal fade" id="RemoveModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Remove scenario
                </h4>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="Scenario">Scenario
                        </label>
                        <input type="number" name="scenario-number" class="form-control" id="scenario-number"
                               aria-describedby="scenario-number" placeholder="1,42, etc....">
                    </div>
                    <button type="submit" name="RemoveModalID" value="RemoveModalID" class="btn btn-primary">Remove by
                        id
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                </button>
            </div>
        </div>
    </div>
</div>
<!--END Remove a scenario END-->
<!--START Edit a scenario START-->
<div class="modal fade" id="EditModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit scenario
                </h4>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="Scenario">Id of the scenario you want to edit
                        </label>
                        <input type="text" name="scenarioID" class="form-control" id="scenarioID"
                               aria-describedby="scenario" placeholder="something....">
                    </div>
                    <div class="form-group">
                        <label for="Scenario">Scenario
                        </label>
                        <input type="text" name="scenario" class="form-control" id="scenario"
                               aria-describedby="scenario" placeholder="something....">
                    </div>
                    <div class="form-group">
                        <label for="level">Level of Contact
                        </label>
                        <input type="number" name="level" class="form-control" id="level" aria-describedby="level"
                               placeholder="1, 2, 3..">
                    </div>
                    <button type="submit" name="EditModalScenario" value="EditModalScenario" class="btn btn-primary">Edit
                        scenario
                    </button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                </button>
            </div>
        </div>
    </div>
</div>
<!--END Edit a scenario END-->
<!--START show every scenario START-->
<div class="modal fade" id="EverythignModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Every scenario
                </h4>
            </div>
            <div class="modal-body">
                <?php
                require_once './functions.php';
                allScenarios();
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close
                </button>
            </div>
        </div>
    </div>
</div>
<!--</div>-->
<!--END show every scenario END-->
<?php
if (isset($_POST['AddModal'])) {
    require_once './functions.php';
    $s = $_POST['scenario'];
    $l = $_POST['level'];
    $r = addScene($s, $l);
}
if (isset($_POST['RemoveModalID'])) {
    require_once './functions.php';
    $i = $_POST['scenario-number'];
    $r = removeScene($i);
}
if (isset($_POST['EditModalScenario'])) {
    require_once './functions.php';
    $i = $_POST['scenarioID'];
    $s = $_POST['scenario'];
    $l = $_POST['level'];
    $r = editScene($i, $s, $l);
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar w/ text</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a data-target="#AddModal" data-toggle="modal" class="nav-link" id="AddModal" href="#AddModal">Add a new scenario</a>
            </li>
            <li class="nav-item">
                <a data-target="#EditModal" data-toggle="modal" class="nav-link" id="EditId" href="#EditId">Edit a scenario by id </a>
            </li>
            <li class="nav-item">
                <a data-target="#SeachIDModal" data-toggle="modal" class="nav-link" id="SeachIDModal" href="#SeachIDModal">Search a scenario by id</a>
            </li>
            <li class="nav-item">
                <a data-target="#ResultIDModal" data-toggle="modal" class="nav-link" id="ResultIDModal" href="#ResultIDModal">Result of the search</a>
            </li>
            <li class="nav-item">
                <a data-target="#RemoveModal" data-toggle="modal" class="nav-link" id="RemoveModal" href="#RemoveModal">Remove a scenario by id</a>
            </li>
            <li class="nav-item">
                <a data-target="#EverythignModal" data-toggle="modal" class="nav-link" id="EverythignModal" href="#EverythignModal">Show all scenarios</a>
            </li>
        </ul>
        <button class="btn btn-sm btn-outline-primary "><a class="nav-link" href="templates/logout.php">Logout</a></button>
    </div>
</nav>
</body>
</html>
