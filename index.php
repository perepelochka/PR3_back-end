<?php
// TODO 1: PREPARING ENVIRONMENT: 1) session 2) functions
session_start();

// TODO 2: ROUTING

// TODO 3: CODE by REQUEST METHODS (ACTIONS) GET, POST, etc. (handle data from request): 1) validate 2) working with data source 3) transforming data

// TODO 4: RENDER: 1) view (html) 2) data (from php)

?>

<!DOCTYPE html>
<html>

<?php require_once 'sectionHead.php' ?>

<body>

<div class="container">

    <!-- navbar menu -->
    <?php require_once 'sectionNavbar.php' ?>
    <br>

    <!-- guestbook section -->
    <div class="card card-primary">
        <div class="card-header bg-dark text-light">
            Home page
        </div>
        <div class="card-body">
            <p><i>Welcome to our site, you can navigate to the registration panel, login panel for authorized users and guestbook panel to leave a review of our site. Thanks for visiting!</p>
            <img src="https://img.freepik.com/free-vector/tiny-house-concept-illustration_114360-9087.jpg?w=826&t=st=1677791739~exp=1677792339~hmac=7c9a49ee2d56500a7295ac30de7ee56e9255af029ce14783feb83e3883d8ec88"  >
            <!-- TODO: render php data   -->

        </div>
    </div>
</div>

</body>
</html>
