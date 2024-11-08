<?php

function TotalSum($items) {
    $Calculated_Array = [];

    foreach ($items as $x) {
        $name = "Item";
        $Total = 0;

        foreach ($x as $a) {
            if (is_string($a)) {
                $name = $a;  // Set the name
            } else {
                $Total += $a;  // Add to total score
            }
        }

        // Assign the name and total for each student
        $Calculated_Array[] = ["name" => $name, "Total" => $Total];
    }

    return $Calculated_Array;
}

function Perc_Cal($Array, $ItemCount, $Callback) {
    $Item = $Callback($Array);

    $ComputedData = [];
    $Total_Student_Percent = 0;

    foreach ($Item as $x) {
        $Name = "";
        $TotalPerc = 0;

        foreach ($x as $key => $a) {
            if ($key === "name") {
                $Name = $a;
            } elseif ($key === "Total") {
                $TotalPerc = ($a / ($ItemCount * 100)) * 100;
            }
        }

        $Total_Student_Percent += $TotalPerc;
        $ComputedData[] = ["Name" => $Name, "TotalPerc" => $TotalPerc];
    }

    $Average = $Total_Student_Percent / count($Item);

    $CompactData = [
        "ComputedData" => $ComputedData,
        "Average" => $Average
    ];

    return $CompactData;
}

$Student_Grades = [
    ["Tommy", 90, 80, 81, 91, 95],
    ["Simbo", 70, 80, 78, 91, 83],
    ["John", 60, 70, 81, 67, 85]
];

//This is me using the callback function by calling the name of the function as a string 
$Data = Perc_Cal($Student_Grades, 5, "TotalSum");

foreach ($Data["ComputedData"] as $x) {
    $name="";
    $Perc=0;
         foreach($x as $a){
            if(is_string($a)){
                $name=$a;
            }else{
                $Perc=$a;
            }
        }
  echo "<h1>Name:$name Score:$Perc %</h1>";
}

echo "<h1>The Average Percentage score is " .$Data["Average"]."%</h1>";
