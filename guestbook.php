<?php
// TODO 1: PREPARING ENVIRONMENT: 1) session 2) functions
session_start();

// TODO 2: ROUTING

// TODO 3: CODE by REQUEST METHODS (ACTIONS) GET, POST, etc. (handle data from request): 1) validate 2) working with data source 3) transforming data

if (!empty($_POST)) {

    $jsonString = json_encode ($_POST); // Перетворимо масив в json -рядок
    $fileStream = fopen ('comments.csv', 'a'); // Відкрити (і створити) файл
    fwrite ( $fileStream, $jsonString ."\n"); // записати json- рядок в кінець файлу
    fclose ($fileStream ); // Закрити файл

}


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
            GuestBook form
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-sm-6">

                 <!-- created guestBook html form   -->
                    <form method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email"/>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name"/>
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <input class="form-control" type="text" name="comment"/>
                        </div>

                        <br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="form"/>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>

    <br>

    <div class="card card-primary">
        <div class="card-header bg-black text-light">
            Сomments
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">


 <?php
               if ( file_exists ('comments.csv' )) {// Перевіряє, що файл існує
                    $fileStream = fopen ('comments.csv' , "r"); // відкриває файл
                    while (!feof ($fileStream )) { // йде по файлу, поки не буде досягнуто кінця
                        $jsonString = fgets ($fileStream ); // отримує черговий рядок файлу
                        $array = json_decode ( $jsonString , true);// Перетворює рядок в масив

                        if ( empty ($array )) break ; // якщо немає даних, то кінець файлу та зупинка

                        echo $array ['email'] .'<br>'; // вивести значення за ключем
                        echo $array ['name'] .'<br>'; // вивести значення за ключем
                        echo $array ['comment'] .'<br><hr>'; // вивести значення за ключем

                    }
                    fclose ($fileStream ); // Закрити файл
               }
?>


                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
