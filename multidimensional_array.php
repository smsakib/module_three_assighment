<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $averageGrade = array_sum($grades) / count($grades);
        echo "Average grade for $student: $averageGrade\n";
    }
}

$studentGrades = array(
    'Student 1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student 2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student 3' => array('Math' => 80, 'English' => 85, 'Science' => 92)
);

calculateAverageGrades($studentGrades);
?>
