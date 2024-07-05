<?php 

function returnResult($result){
    $result = $result === '' ? "No Suggestions" : $result;
    echo json_encode(['status' => "OK", 'content' => $result]);
    exit();
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $input = $_POST['string'];

    $len = strlen($input);
    $first_letter = strtolower($input[0]);

    if(is_numeric($first_letter) or $len < 3)
    {
        returnResult('');
    }

    $letter_index = ord($first_letter) - 97;

    $dict = file_get_contents('./dictionary.json');

    $data = array_keys(json_decode($dict,true)[$letter_index]);
    
    $result = '';
    foreach($data as $word){
        if(stripos("$word","$input") !== false){
            if($result === ''){
                $result = $word;
            }
            else {
                $result .= ", $word";
            }
        }
    }

    returnResult($result);
}




?>