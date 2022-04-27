<?php

    //Reading file from Text
    $myfile = fopen("AllFile/hello.txt", "r") or die("Unable to open file!");
    echo "<h2>Reading Text File!</h2>";
    // Output one line until end-of-file
    while (!feof($myfile)) {
      echo fgets($myfile) . "<br>";
    }
    fclose($myfile);

    
    //Reading file from Excel
    require 'vendor/autoload.php';

    use League\Csv\Reader;

    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    $spreadsheet = $reader->load("AllFile/list.xlsx");

    $sheetData = $spreadsheet->getActiveSheet()->toArray();
    unset($sheetData[0]);
    $index = 1;
    echo "<br><br><h2>Reading Excel File!</h2>";
    foreach ($sheetData as $data) {
        // process element here;
        echo " " . $data[0] . " , " . $data[1] . " , " . $data[2] . " , " . $data[3] . " , " . $data[4] . " <br>";
        $index++;
    }

    // Reading From CSV File 
    $file = fopen("AllFile/sample.csv","r");
    echo "<br><br><h2>Reading from CSV File!</h2>";
    while(! feof($file)) {
        print_r(fgetcsv($file));
        echo "<br>";
    }
    fclose($file);

    //Reading From Document File
    $phpWord = \PhpOffice\PhpWord\IOFactory::load("AllFile/myCV.docx");
    echo "<br><br><h2>Reading from Document File!</h2>";
    $sections = $phpWord->getSections();
    foreach ($sections as $key => $value) {
        $sectionElement = $value->getElements();
        foreach ($sectionElement as $elementKey => $elementValue) {
           if ($elementValue instanceof \PhpOffice\PhpWord\Element\TextRun) {
                $secondSectionElement = $elementValue->getElements();
                foreach ($secondSectionElement as $secondSectionElementKey => $secondSectionElementValue) {
                    if ($secondSectionElementValue instanceof \PhpOffice\PhpWord\Element\Text) {
                         echo $secondSectionElementValue->getText();                               
                    }
                }
            }
        }
    }
?>
