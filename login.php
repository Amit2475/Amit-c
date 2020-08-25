<?php


include 'inc/header.php';


include 'lib/user.php';
$user = new user;


session::userLogin();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $userLog = $user->userLogin($_POST);
}

?>


<div class="container w-50 mt-5">
    <div class="card">
        <div class="card-header bg-dark">
            <h5 class="text-white">Login to your account</h5>
        </div>
        <div class="card-body">
<?php

if(isset($userLog)){
    echo $userLog;
}

?>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" name="submit" class="btn btn-sm btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>