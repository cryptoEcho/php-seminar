<?php
function paraQuery()
{
$args  = func_get_args();
$query = array_shift($args);
$query = str_replace("%s","'%s'",$query);

foreach ($args as $key => $val)
{
$args[$key] = mysql_real_escape_string($val);
}

$query  = vsprintf($query, $args);
$result = mysql_query($query);
if (!$result)
{
throw new Exception(mysql_error()." [$query]");
}
return $result;
}

$query  = "SELECT * FROM table where a=%s AND b LIKE %s LIMIT %d";
$result = paraQuery($query, $a, "%$b%", $limit);