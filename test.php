<?php

$str1 = "hello yogyakarta";
$str2 = "hello jogja";

if (similar_text($str1, $str2, $percent) > 0) {
    echo "The strings are similar by $percent%";
} else {
    echo "The strings are not similar.";
}

?>