<html>
  <head>
    <title>Matthew Pietzykowski EXAMPLE</title>

    <!-- BEGIN : a little CSS -->
    <style>
      html{
        text-align:center;
        background-color:#3b73b9;
      }
      body {
        background-color:#fff;
        width:80%;
        margin-left:auto;
        margin-right:auto;
        border-radius:5px;
      }
      <!-- END : a little CSS -->
    </style>

  </head>
  <body>
    <h1>1T16 - Data Analytics - KYB</h1>
    <p>This page uses PHP to make a PostgreSQL database connection</p>

    <!-- BEGIN : some PHP to demonstrate server side language installation, and DB connection -->
    <?php
      //display a message
      print "<h4 style='color:#00FF00;'>If you can see this, then PHP has been installed on the server.</h4>";

      //BEGIN : set credentials for our database
      $host = '';
      $port='5432'; //this is the default port for PostgreSQL databases
      $dbname='';
      $user = '';
      $pw='';

      //END : set credentials for our database

      //BEGIN : attempt to establish a database connection
      print "Database connection status:";
      $pg_conn = pg_pconnect("host=$host port=$port dbname=$dbname user=$user password=$pw");
      if (!$pg_conn) {
        //IF connection not made
        echo "<h4 style='color:#FF0000;'>Connection not made.</h4>";
      } else {
        //ELSE connection was made
        echo "<h4 style='color:#00FF00;'>Connection made.</h4>";
      }
      //END : attempt to establish a database connection
    ?>
    <!-- END   : some PHP to demonstrate server side language installation, and DB connection -->
  </body>
</html>
