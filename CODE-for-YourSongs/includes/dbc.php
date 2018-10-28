<!-- Below are our database security credentials giving access to our database.
These are inserted as includes as they are reuseable content for pages requiring a database connection 

Include used in the following pages:
 ** song_artist.php to RETRIEVE songs and artist details
 ** process.php to transfer customer registration data FROM the html form in reg_form.php TO the database
 ** view-customers.php to retrieve and display customer populated information from the customer's registration. -->


<?php

    // database security access
    DEFINE ('DB_USER', '17101992u');
    DEFINE ('DB_PASSWORD', '17101992p');
    DEFINE ('DB_HOST', '80.82.113.195');
    DEFINE ('DB_NAME', '17101992webdevmmuuk_17101992_music_db');

    // connection code, if unsuccessful error message will alert
    $dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );