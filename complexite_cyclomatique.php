<?php

function evaluateStudent($grades, $classParticipation, $projects, $attendance) {
    $finalGrade = 0;

    // Evaluate academic grades
    foreach($grades as $subject => $grade) {
        if ($grade > 90) {
            echo "Excellent in $subject.";
        } elseif ($grade > 80) {
            echo "Very good in $subject.";
        } elseif ($grade > 70) {
            echo "Good in $subject.";
        } elseif ($grade > 60) {
            echo "Average in $subject.";
        } else {
            echo "Needs improvement in $subject.";
        }

        $finalGrade += $grade;
    }

    // Evaluate class participation
    if ($classParticipation > 8) {
        $finalGrade += 10;
    } elseif ($classParticipation > 6) {
        $finalGrade += 5;
    } else {
        echo "Low class participation.";
    }

    // Evaluate projects
    if ($projects == 'excellent') {
        $finalGrade += 10;
    } elseif ($projects == 'good') {
        $finalGrade += 5;
    } elseif ($projects == 'average') {
        $finalGrade += 2;
    }

    // Evaluate attendance
    if ($attendance > 95) {
        $finalGrade += 5;
    } elseif ($attendance < 80) {
        echo "Low attendance.";
        $finalGrade -= 5;
    }

    return $finalGrade;
}
