<?php 
    // var defined enabling it to be called in the header title
    $page_title = "Poll App";

    // include inserts the site's reuseable header content  
    include 'includes/header.php';
?>

<div id="banner-small">
    <div class="container">

        <h1>Take our poll of your favourite song artist&excl;</h1>
    </div>
</div>

<!--  Content Section -->
<main class="content">
    <div class="container">

        <div class="app-page-content">

            <div id="text-poll-left">
                <h2 class="app-page-header"><span>It&apos;s time to vote again for your favourite artist&excl;</span></h2>
                <p class="app-subheader">Join our online poll by clicking the app.  Who will you vote for&quest;</p>
                <p class="app-subheader"><i>&quot;A community that plays together stays together&excl;&quot;</i></p>
            </div>

            <!-- A voting app made from js code and embeded into this html document with an inline frame -->    
            <!-- App made in Applab embedded with html - app coded with javascript. All js code can be seen with the browser's inspect tool --> 
            <div id="iframe-poll-right">
                <iframe width="372" height="620" style="border: 0px;" src="https://studio.code.org/projects/applab/JpUmbz3uosywIYMkEUUH_vC9ouF5hfr28JV4Mrc0tdn/embed?nosource"></iframe>
            </div>

        </div>
        
        
    </div><!-- eof container-->
</main><!-- eof content -->
 
 <?php 
        // include inserts the site's reuseable footer content
        include 'includes/footer.php';
 ?>



 