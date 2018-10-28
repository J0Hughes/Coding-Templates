<?php 
    // var defined enabling it to be called in the header title
    $page_title = "YourSongs Homepage";

    // include inserts the site's reuseable header content  
    include 'includes/header.php';
?>   
       
    <!--  Banner Section -->
    <div id="banner">
        <div class="container">

            <div class="banner-content">
                <h1>A collaboration for music lovers</h1>
                <p>Create and share your music with YourSongs&rsquo; database to connect and grow your music community.</p>  

                <div class="banner-buttons">
                    <a href="songs_artists.php" title="View a list of all our songs and artists" class="button button-orange-fill">View all songs</a>
                    <a href="playlist_app.php" title="Vote for your favourite artist" class="button button-white-outlined">View playlist App</a>
                </div>

            </div>

        </div> <!-- eof container -->
    </div><!-- eof banner -->


    <!--  Content Section -->
    <main class="content">
        <div class="container">

            <h2 class="page-header"><span>Welcome to YourSongs</span></h2>
            <h3 class="subheader">A music sharing database to collaborate and share, anytime, anywhere&excl;</h3>
            <p class="p-subheader"><i>Join us today, and let&apos;s make music together</i>.</p>
            <p class="p-subheader">Take part in our weekly poll and vote for your favourite artist&excl;</p>


            <div class="featured margin-bottom-large">  <!-- div holds 4 x containers holding image and text -->
                
                <div class="featured-box">
                    <div class="featured-img">
                        <img src="imgs/featured01.jpg"  width="262" height="218" alt="musician setting up equipment" title="Photo by Kaley Dykstra on Unsplash">
                    </div>
                    <p>Poll winner&colon; DJ Scotty Lux</p>
                </div>

                <div class="featured-box">
                    <div class="featured-img">
                        <img src="imgs/featured02.jpg" width="262" height="218" alt="A black-and-white shot of a man in a white shirt playing the piano" title="Photo by ian dooley on Unsplash">
                    </div>
                    <p>Poll winner&colon; Frankie Kline</p>
                </div>


                <div class="featured-box">
                    <div class="featured-img">
                        <img src="imgs/featured03.jpg" width="262" height="218" alt="A music band preparing to perform live in the subway" title="Photo by Hans Vivek on Unsplash">
                    </div>
                    <p>Poll winner&colon; The Manic Sneakers</p>
                </div>


                <div class="featured-box">
                    <div class="featured-img">
                        <img src="imgs/featured04.jpg" width="262" height="218" alt="Musician reaching out hand while singing on stage during a show" title="Photo by Austin Neill on Unsplash">
                    </div>
                    <p>Poll winner&colon; Luca Soren</p>
                </div>

            </div> <!-- eof featured margin-bottom-large -->
            

        </div> <!-- eof container -->
    </main><!-- eof content -->
 
    
<?php 
    // include inserts the site's reuseable footer content
    include 'includes/footer.php';
?>

