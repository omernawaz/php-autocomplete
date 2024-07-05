<?php 
$test_array = array('Omer', 'Ali', 'Atif', 'Farrukh', 'Hussnain', 'Hussain', 'Hassan', 'Arif', 'Minal', 'Aqsa', 'Zia', 'Saad', 'Usman', 'Hamza', 'Affan' , 'Afaq');

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $str = $_POST['string'];
    $suggestion = '';

    
    $str = strtolower($str);
    $len = strlen($str);

    foreach($test_array as $word){

        if(stristr($str, substr($word,0,$len))) {
            if($suggestion === ''){
                $suggestion = $word;
            } else {
                $suggestion .= ", $word";
            }
        }
    }
        
http_response_code(200);
$suggestion === '' ? "No Suggestions" : $suggestion;
echo json_encode(['status' => "OK" , 'content' => $suggestion]);

}
?>