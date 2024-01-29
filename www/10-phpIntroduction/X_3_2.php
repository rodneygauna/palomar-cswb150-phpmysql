<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3-2</title>
</head>

<body>
    <?php
    print "<html>\n";
    print "<head><title>0302 Displaying HTML</title>\n";
    print "<style>body {font-family: Arial, Helvetica, sans-serif; font-size: 16px;}</style>\n";
    print "</head>";
    print "\n ";
    print "<body>\n";
    print "	<h1>0302 Displaying HTML</h1>\n";
    print "	<p>What are script tags and why do we need them to run PHP?</p>\n";
    print "\n ";

    $today = date('Y-m-d h:i:s');

    print "<p><b>Today is $today </b></p>\n";
    print " ";
    print "</body>\n";
    print " ";
    print "</html>\n";
    ?>
</body>

</html>