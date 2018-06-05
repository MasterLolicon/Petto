<?php
// AntiHTML & SQL Injection
$_POST = str_replace(['<', '>', '\'', '\'', '\\'], ['&lt;', '&gt;', '&quot;', '&#39;', '&#92;'], $_POST);
$_GET = str_replace(['<', '>', '\'', '\'', '\\'], ['&lt;', '&gt;', '&quot;', '&#39;', '&#92;'], $_GET);
 ?>
