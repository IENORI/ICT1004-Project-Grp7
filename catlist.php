<?php
    include "inc.sessionauth.php";
    
    //Additional Verification to verify if admin
    if(isset($_SESSION['SessionId'])){
        if($_SESSION['IsAdmin'] == 1){
            echo "Welcome back, Admin";
        }
        else{
            echo "Unauthorized Access.";
            exit();
        }
    }
    $config = parse_ini_file('process/db.ini');  

    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
    
    
    
    if(mysqli_connect_errno()){
        header("Location: ../load_error.php");
    }else{
        $selectQuery = "SELECT * FROM cat ORDER BY `CID` ASC";
        $result = mysqli_query($conn, $selectQuery);
        
        
        
    }
    if (mysqli_num_rows($result) > 0) {
        
    } else {
        $msg = "No Record found";
    }
    ?>
    <html lang="en">
    <head>
        <?php
            include "inc.head.php";
        ?>
    </head>
    <body>

        <?php
            include "inc.nav.php";?>
        <br>
        
            <main class="container">
                <div class="jumbotron">
                <a href='../createCat.php' class= 'btn btn-lg btn-success'>Add a new cat</a>    
                <h3 class="catlist">Cats list</h3>
                <br>
                
                <?php
            echo "<table id='usertable' class='table table-hover'>";?>
                            <thead>
                    <tr>
                        <th scope="col">Cat ID</th>
                        <th scope="col">Cat image</th>
                        <th scope="col">Cat name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Cat Breed</th>
                        <th scope="col">Cat age</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <?php
            while ($row = mysqli_fetch_assoc($result)){
                $id = $row['CID'];
                $image = $row['Images'];
                    
                $name= $row['CatName'];
                $description = $row['Description'];
                $type = $row['CatType'];
                $age = $row['Age'];
                ?>
                <form action="editCat.php?id=<?php echo $id; ?>" method="post">
                <?php  
                echo "<tr><td>".$id."</td><td><img src='$image' alt='imageCat' class='catimage'></td><td>".$name."</td><td>".$description."</td><td>"
                        .$type."</td><td>".$age."</td><td><button type='submit' class='btn btn-success'>Edit</button></td></tr></form>
            ";}
            echo "</table>";
            ?>
                </div>
            </main>
    </body>
    </html>
            