<?php

$handle = fopen("./data/ChatQnA/qna.csv", "r");
if (!$handle) {
    echo "Error opening the file.";
    exit();
}

$data = array();

while($line = fgets($handle)) {
    $line = trim($line);
    if(!empty($line)) {
        $parts = explode(";", $line);
        $qna = array(
            "pattern" => $parts[0],
            "responses" => array()
        );
        for($i = 1; $i < count($parts); $i++) {
            array_push($qna["responses"], $parts[$i]);
        }
        array_push($data, $qna);
    }
}
fclose($handle);

$json_data = json_encode($data, JSON_PRETTY_PRINT);

header('Content-Type: application/json');
echo $json_data;

?>