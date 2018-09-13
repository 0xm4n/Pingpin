<?php
    $databaseConnection = null;
    function getConnect() {
        $hosthome = "localhost";
        $database = "test";
        $userName = "root";
        $password = "C959840668cf";
        global $databaseConnection;
        $databaseConnection = @mysql_connect($hosthome, $userName, $password) or die (mysql_error());
        mysql_query("set names gbk");
        @mysql_select_db($database, $databaseConnection) or die (mysql_error());
        mysql_query("set character set 'utf8'");//读库
        mysql_query("set names 'utf8'");//写库
    }

    function closeConnect() {
        global $databaseConnection;
        if ($databaseConnection) {
            @mysql_close($databaseConnection) or die (mysql_error());
        }
    }
?>