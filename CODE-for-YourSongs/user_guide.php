<?php 
    // var defined enabling it to be called in the header title
    $page_title = "User Guide";

    // include inserts the site's reuseable header content  
    include 'includes/header.php';
?>

    <div id="banner-small">
        <div class="container">
            <h1>User guide overview</h1>
        </div>
    </div>


<!--  Content Section -->
    <main class="content" id="user-guide">
        <div class="container">
                                    <!--  A developer guide detailed below - all concepts used in buiding this site -->
        
            <p class="blocktext"><i>This guide provides a description of the technologies used to build our website, blending important features with key concepts used in our programming</i>.</p>
        
            <h3>DATABASE</h3>

            <p>A database consists of logically related persistent data organised by entities, fields and records in tables that a computer program can quickly retrieve.</p>
        
            <p>MYSQL is a database management system with features to update data&semi; modified and managed by executing SQL&apos;s query language statements directly into MySQL&apos;s command line, or using phpMyAdmin&apos;s interface aiding simplicity by producing SQL code for creating and managing a database schema.</p>

            <p class="margin-bottom-0 padding-bottom-0">Our database schema consists of three tables&colon;</p>

            <ul>
                <li><i>Song</i></li>
                <li><i>Artist</i>&colon;  One record can be associated with many records in the &apos;Song&apos; table, therefore a one-to-many relationship.</li>
                <li><i>Customer</i>&colon; Users in our registration page generate this data.</li>
            </ul>
        
            <h3>CREATING A TABLE</h3>

            <p class="margin-bottom-0 padding-bottom-0">SQL&apos;s CREATE TABLE statement creates a new database table. Features include&colon;</p>
        
            <ul>
                <li>Using appropriate data types and lengths ensuring efficient memory storage.</li>
                <li>All our fields require a value therefore &apos;NOT NULL&apos;.</li>
                <li>Auto Increment selects the next available number when a record is created, important for our ‘Customer’ table since this unique Primary key information is concealed from users populating this data.</li>
            </ul>
        
            <h3>INSERTING DATA</h3>

            <p>Importing CSV formatted files using PHPMyAdmin&apos;s interface is efficient for large amounts of data.</p>
        
            <h3>PRIMARY KEYS</h3>

            <p>Inform a RDBMS that specified fields could uniquely identify a single table row.</p>
        
            <h3>FOREIGN KEYS</h3>

            <p>Only need to be assigned when two or more tables are to be joined.  Applied to the many-side of the relationship guarantees query results from both tables contain correct data.  We assigned a foreign key to our Song table.</p>
        
            <h3>INDEXING</h3>

            <p>Used to speed search operations and also provides linkage for foreign key constraints via a drop down tab within the foreign key&apos;s &apos;insert&apos; table.</p>
        
            <h3>FOREIGN KEY CONSTRAINTS</h3>

            <p>Created on foreign key &apos;Artist ID&apos; to prevent database users uploading invalid content. We point the &apos;Song table&apos; foreign key to the &apos;Artist table&apos; where it exists as a primary key.</p>
        
            <h3>JOINING TABLES</h3>

            <p>Allows a single database to be spread across several tables offering redundancy. Combining tables using an SQL SELECT query with a LEFT JOIN and linking the primary and foreign keys displays all the records in the left table&semi; and matched records from the right table where the values are the same in both.</p>

            <pre>FROM song LEFT JOIN artist ON song.artist_ID = artist.artist_ID</pre>

            <hr />

            <p class="blocktext"><i>Bringing SQL and PHP together we look at how we connect to a database to send/retrieve data from an HTML page and describing key concepts</i>.</p>
        
            <h3>PHP</h3>

            <p>&apos;PHP Hypertext Preprocessor&apos;&colon; embeds into HTML code&semi; adds, deletes, modifies, and retrieves data in a database; and displays the content on a webpage.</p>
        
            <p>HTML, CSS and JavaScript create static web pages which always produce the same content.
            The server presents their files to the browser that interprets them and displays the content. PHP contrasts as its content is produced dynamically&semi; meaning the data is processed in the server and delivered to the browser as an HTML file as-and-when the browser requests the information.</p>
        
            <h3>PHP INCLUDE</h3>

            <p>A function useful for websites containing multiple pages with intended duplicate reusable content.  Duplicated code is replaced with include statements whilst containing the reusable content in separate PHP files.  The browser sends both PHP files to the server where they are combined into single file.  Consequently enabling amendments to be performed from one file as opposed to making changes in multiple files.</p>
        
            <h3>VARIABLE</h3>

            <p>A script needs to remember specific pieces of data that is recalled. This data is stored temporarily in a variable that can vary its value each time a script is run.</p>
        
            <h3>RETRIEVING DATA</h3>

            <p>PHP and MySQLi functions enable database access and retrieval of data using functions and variables for efficiently handling lengthy code.  For example the define() function contains the database security whilst the variable &dollar;r carries the result of the database connection with the returning SELECT query values obtained from the database.</p>
            <pre>$r = @mysqli_query ($dbc, $q);</pre>
        
            <p>The two-dimensional result is converted to an associative array with named key/value pairs to enable PHP to understand and display the information. Each array represents a database row ideal for keeping data together without having to name each item as an individual variable.</p>
            <pre>mysqli_fetch_array($r, MYSQLI_ASSOC))</pre>
        
            <h3>WHILE LOOP DISPLAYS RESULT</h3>

            <p>A while loop sets a condition, executing a statement should the condition be true. The condition is checked and repeated until the condition returns false.  Consequently each fetched row/item is accessed one-by-one displaying the key&apos;s value until there are no more items to display.</p>
        
            <h3>ADDING DATA TO A DATABASE</h3>

            <p>Users add their credentials to our database using the HTML Form window from our Registration page.  On clicking a submit button the form-data is sent for processing to a PHP file via the POST method.</p>
        
            <p>POST method transfers collected form-data to &dollar;_POST where items are stored as an associative array in key/value pairs enabling the database to accept the two-dimensional data.  Additionally, the web page displays a message indicating a success or failure in connecting to the database to store the customer&apos;s details as persistent data.</p>
        
            <hr />

            <p class="blocktext"><i>This section brings together AppLab and the fundamentals of JavaScript used to code the embedded applications within our web pages.</i></p>
        
            <h3>JAVASCRIPT WITH APPLAB</h3>

            <p>Code.org provide a visual web-based programming-learning environment named AppLab as a tool for designing applications with coding blocks or the underlying JavaScript text code. App data is exchanged using JSON format and apps can be shared with web pages by embedding the link to the JavaScript code within HTML.</p>

            <p class="margin-bottom-0 padding-bottom-0"><b>Common JavaScript concepts used in our Playlist and Poll app</b>&colon;</p>

            <dl>
                <dt><b>Indexed Array</b></dt>
                <dd>Zero-based ordered collection of values wrapped-up in one named variable that can be accessed by referring to its index number.</dd>

                <dt><b>OnEvent</b></dt>
                <dd>Interactions create events and events trigger code&semi; our events are clicked buttons.</dd>

                <dt><b>Function</b></dt>
                <dd>Runs a segment of code whenever the function is called.</dd>

                <dt><b>join()</b></dt>
                <dd>Method we use to join all array items into a string and display the text.</dd>

                <dt><b>.length</b></dt>
                <dd>Returns the length of an array.</dd>

                <dt><b>randomNumber()</b></dt>
                <dd>Returns a random number from a closed range.</dd>

                <dt><b>setText()</b></dt>
                <dd>Displays text indicated in the parentheses.</dd>

                <dt><b>If / else</b></dt>
                <dd>A Boolean true condition executes the IF statement, otherwise executes the ELSE statement.</dd>

                <dt><b>readRecords</b></dt>
                <dd>Reads records that match specified terms returning as an indexed array to the callback function.</dd>

                <dt><b>updateRecord</b></dt>
                <dd>Updates records in the data storage table.</dd>

                <dt><b>drawChartFromRecords</b></dt>
                <dd>Displays a chart retrieving persistent data from the specified data table.</dd>
            </dl>

            <p class="blocktext"><i>JavaScript encompasses many of the classical rules of programming allowing you to create useful functionality to make web pages more interactive with its case sensitive script for the browser to react in response to user behaviour.</i></p>

 
        </div> <!-- eof container -->
    </main><!-- eof content -->
 
<?php 
// include inserts the site's reuseable footer content
include 'includes/footer.php';
?>