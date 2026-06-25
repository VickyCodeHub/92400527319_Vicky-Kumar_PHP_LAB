#2. Create a function named studentDetails() that accepts: Student Name Enrollment Number Semester

<?php
function studentDetails($name, $enrollment, $semester)
{
    echo "Student Name: $name\n";
    echo "Enrollment Number: $enrollment\n";
    echo "Semester: $semester";
}

studentDetails("Vicky Kumar", "92400527319", "5");
?>