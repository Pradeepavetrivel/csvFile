<?php
$row = 1;
if (($handle = fopen("1534744423852_testdataxlsx.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    	// echo $data;
        $num = count($data);
        $string_array = json_encode($data);
        echo "<br>$string_array</br>";
        echo "<p> $num fields in line $row: <br/></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
             echo $data[$c] . "<br/>\n";
        }
    }
    fclose($handle);
}
?>