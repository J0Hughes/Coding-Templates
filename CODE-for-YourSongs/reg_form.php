<?php 
    // var defined enabling it to be called in the header title
    $page_title = "YourSong Registration";

    // include inserts the site's reuseable header content 
    include 'includes/header.php';
?>

    <div id="banner-small">
        <div class="container">
            <h1>Please register to add songs</h1>
        </div>
    </div>


<!--  Content Section -->
    <main class="content">
        <div class="container">

            <h2 class="page-header"><span>Welcome to your community&excl;</span></h2>
            <h3 class="subheader">Once registered, our experts will provide you with information about producing and editing your creative content.</h3>
            <p class="p-subheader"><i>Why not upload your production with a chance to take part in our weekly poll&excl;</i></p>

            <!-- html form window for sending users credentials to customer database - post method sends data to $_POST in process_reg.php file  -->
            <form action="process_reg.php" method="post" class="register-form">

                <div class="form-field">
                    <label>First Name&colon;</label>
                    <input type="text" name="firstName" placeholder="First name">
                </div>

                <div class="form-field">
                    <label>Last Name&colon;</label>
                    <input type="text" name="lastName" placeholder="Last name">
                </div>

                <div class="form-field">
                    <label>E-mail&colon;</label>
                    <input type="text" name="email" placeholder="Email address">
                </div>

                <div class="form-field">
                    <button type="submit" value="Submit Me" class="button button-orange-fill button-full-width" title="Participate in sharing with your community">Join Now</button>
                </div>

            </form>

        </div> <!-- eof container -->
    </main><!-- eof content -->
 
 <?php 
    // include inserts the site's reuseable footer content
    include 'includes/footer.php';
 ?>