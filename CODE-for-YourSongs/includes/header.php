<!-- Include inserts a header on all pages. Shares reusesable content -->

<!DOCTYPE html>
<html lang="en-gb">

    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117991034-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-117991034-1');
        </script>
        
        <meta charset="utf-8">
        <title><?php 
        /* ** variable called to display individual browser tab titles. It is defined at the top of each page **  */
        echo $page_title; 
        ?>
        </title>

        <meta name="description" content="YourSongs, online music sharing database, coursework, Joanne Hughes, Manchester Metropolitan Web Developer Student ">
        <meta name="keywords" content="YourSongs, online music sharing database, coursework, Joanne Hughes, Manchester Metropolitan Web Developer Student ">
        <!-- two styling sheets here. Global when styling is shared with other pages -->
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="imgs/favicon.png" sizes="32x32">
    </head>

    <body>

        <header>
            <div class="container">
                
                <div id="logo"> 
                       
                    
                    <a href="./index.php" title="Link to YourSongs music database"><img class="logo" src="imgs/logo.png" width="212" height="54" alt="The company logo for YourSongs"></a>
                </div>
                        <!-- Sites Main navigation -->
                <nav class="main"> 
                    <ul>
                        
                        <li><a href="index.php">Home</a></li>
                        
                        <li><a href="songs_artists.php">Songs and Artists</a></li>
                        
                        <li><a href="reg_form.php">Register</a></li>
                       
                        <li><a href="view_customers.php">Customers</a></li>
                        
                        <li><a href="poll_app.php">Poll App</a></li>
                       
                        <li><a href="playlist_app.php">Playlist App</a></li>
                     
                        <li><a href="user_guide.php">User Guide</a></li>
                    </ul>
                </nav>

            </div><!-- eof container -->
        </header><!-- eof header -->