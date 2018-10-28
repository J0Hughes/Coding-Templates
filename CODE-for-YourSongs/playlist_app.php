<?php
	// var defined enabling it to be called in the header title
	$page_title = "Playlist App";

	// include inserts the site's reuseable header content 
	include 'includes/header.php';
?>

<div id="banner-small">
    <div class="container">
        <h1>Add a song to our playlist&excl;</h1>
    </div>
</div>


<!--  Content Section -->
<main class="content">
    <div class="container">

        <div class="app-page-content">
            
            <!-- A playlist app made from js code and embeded into this html document with an inline frame -->    
            <!-- App made in Applab embedded with html - app coded with javascript. All js code can be seen with the browser's inspect tool --> 
            <div id="iframe-plist-left">
                <iframe width="372" height="620" style="border: 0;" src="https://studio.code.org/projects/applab/dRpDv-1FS-VQCqnVePkxUFi31aaW7JmOX4fkL1ACbd9/embed?nosource"></iframe>
            </div>

            <div id="text-plist-right">
                <h2 class="app-page-header"><span>Click the app to add a track&excl;</span></h2>
                <p class="app-subheader"> View the playlist and play a song from your favouites.</p>
                <p class="app-subheader"><i>&quot;Let&apos;s make friends with music&excl;&quot;</i></p>
            </div>

        <div>
          
     

    </div> <!-- eof container -->
</main><!-- eof content -->

 
 <?php 
	// include inserts the site's reuseable footer content
	include 'includes/footer.php';
 ?>