<?php
$student_name = $_POST['student_name'];
mysql_connect('localhost','root','');
mysql_select_db('ftfl02');
$query = "SELECT courses.title
from courses
INNER JOIN students_courses
ON students_courses.course_id = courses.id
INNER JOIN students
ON students_courses.student_id = students.id
where students.name = '$student_name'
";	
$result = mysql_query($query);
echo '<select name="bname" ';
while ($row = mysql_fetch_assoc($result))
{
echo "<option value='" . $row['title'] ."'>" . $row['title'] ."</option>";
}
echo '</select>';
?>