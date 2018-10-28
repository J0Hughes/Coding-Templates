<?php 
    // var defined enabling it to be called in the header title
    $page_title = "YourSong Registration";

    // include inserts the site's reuseable header content  
    include 'includes/header.php';
?>


<div class="content">
    <div class="container">

 
        <!-- user details populated in reg_form.php are imported and stored in $_POST to be sent to the customer database -->
        <!-- This include inserts the site's reuseable database connection details
        (not included in the header as some content above is not re-useable)-->
        <?php
            include 'includes/dbc.php';


            // Variables defined
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];

            // confirmation message displayed to screen
            echo "Hello, $firstName $lastName. Your name and email were successfully entered into the database!";

            // database connection and query code to INSERT values from variables
            mysqli_query($dbc, "INSERT INTO Customer (First_name, Last_name, Email) VALUES('$firstName', '$lastName', '$email' ) ");

        ?>


    </div> <!-- eof container -->
</div> <!-- eof content -->

 
<?php 
// include inserts the site's reuseable footer content
include 'includes/footer.php';
?>