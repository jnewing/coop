<pre>
<?php

// PHP has a set of globally defiend variables that we can access at any given time
// $_GET, $_POST, $_SERVER etc.. are some of these variables and they
// each hold an associative array of variables passed to the current script via the HTTP verb method

print 'Global: $_GET varaible' . "\r\n";
print print_r($_GET, true);
print "\r\n";

// print 'Global: $_POST variable' . "\r\n";
// print print_r($_POST, true);
// print "\r\n";

// print 'Global: $_SERVER variable' . "\r\n";
// print print_r($_SERVER, true);
// print "\r\n";

print strtoupper($_GET["field1"]) . " " . $_GET["some_email"] . " " . $_GET['more_stuff'];
print "\r\n";
print strtoupper($_GET['field1']) . " {$_GET['some_email']} {$_GET['more_stuff']}";

?>
</pre>
