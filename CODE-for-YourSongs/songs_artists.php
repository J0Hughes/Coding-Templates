<?php 
    // var defined enabling it to be called in the header title
    $page_title = "View Songs and Artists";

    // include inserts the site's reuseable header content  
    include 'includes/header.php';
?>

    <div id="banner-small">
        <div class="container">
            <h1>View Songs and Artists</h1>
        </div>
    </div>

    <!--  Content Section -->
    <main class="content">
        <div class="container">

            <div class="scroller">  <!-- Creates a scroller on the table -->
                    
                <!-- content retrieved from database's 'song' and 'artist' table -->
                <!-- This include inserts the site's reuseable database connection details 
                (not included in the header as some content above is not re-useable)-->
                <?php
                    include 'includes/dbc.php';

                    // selects all database records in song table with matched records from artist table
                    $q = "SELECT Song_name, Artist_name, Release_date, Genre, Price, Nationality, Label FROM Song LEFT JOIN Artist ON Song.Artist_ID = Artist.Artist_ID ORDER BY Song_name";

                    // database connection and query code
                    $r = @mysqli_query ($dbc, $q);

                    // inserts table's header
                    echo '<table>
                            <tbody>
                                <tr>
                                    <th scope="col">Song</th>
                                    <th scope="col">Artist</th>
                                    <th scope="col">Release Date</th>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Nationality</th>
                                    <th scope="col">Label</th>
                                </tr>';

                    /* Fetch and convert database table rows into associative arrays to allow data to be dislayed */
                    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                    echo '<tr><td>' . $row['Song_name'] . '</td><td>' . $row['Artist_name'] . '</td><td>' . $row['Release_date'] . '</td><td>' . $row['Genre'] . '</td><td>' . $row['Price'] . '</td><td>' . $row['Nationality'] . '</td><td>' . $row['Label'] . '</td></tr>';
                    }

                    // Closes the table
                    echo ' </tbody></table>'; 

                ?>

            </div> <!-- eof stroller div -->


        </div> <!-- eof container -->
    </main><!-- eof content -->
 
<?php 
    // The following include inserts the site's reuseable footer content
    include 'includes/footer.php';
?>