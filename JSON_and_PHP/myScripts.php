<?php
$myAssocArray = ['name' => 'Claude', 'student number' => 214587954, 'age' => 14, 'isPostGraduate' => true];
$myAssocArray['name'] = 'Faro';

// Converting PHP object(array) to JSON
$myJSON = json_encode($myAssocArray);
echo $myJSON;

