<?php
function escape($data) 
{
    if ($data === null) {
        return null; // Return null if $data is null
    }
$data = htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
 $data = trim($data);
 $data = stripslashes($data);
return ($data);
} 
?>
