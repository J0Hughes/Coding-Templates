<?php
    // var defined enabling it to be called in the header title
    $page_title = "View Current Customers";

    // include inserts the site's reuseable header content  
    include 'includes/header.php';
?>

    <div id="banner-small">
        <div class="container">
            <h1>View customers</h1>
        </div>
    </div>


    <!--  Content Section -->
    <main class="content">
        <div class="container customer">
        
 
            <!-- content retrieved from database 'customer' table where data populated from reg_form.php -->
            <!-- This include inserts the site's reuseable database connection details
            (not included in the header as some content above is not re-useable)-->
            <?php
                include 'includes/dbc.php';
                

                // values selected from database
                $q = "SELECT First_name, Last_name,Email FROM Customer ORDER BY Last_name";

                // database connection and query code 
                $r = @mysqli_query ($dbc, $q);

                // inserts table's header
                echo '<table>
                        <tbody>
                            <tr>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                            </tr>';

                /* Fetch and convert database table rows into associative arrays to allow data to be dislayed */
                while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                echo '<tr><td>' . $row['First_name'] . '</td><td>' . $row['Last_name'] . '</td><td>' . $row['Email'] . '</td></tr>';
                }

                // Closes the table
                echo ' </tbody></table>'; 
                                                        
            ?>

        

        </div> <!-- eof container customer -->
    </main><!-- eof content -->
 
<?php 
    // include inserts the site's reuseable footer content
    include 'includes/footer.php';
?>

