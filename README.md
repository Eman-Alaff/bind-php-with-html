# bind-php-with-html
Skilled in building dynamic web pages using PHP and HTML, optimized for local server presentation and design aesthetics.

  <?php
  $students = [
[
'stdNo' => '20003',
'stdName' => 'Ahmed Ali', 'stdEmail' => 'ahmed@gmail.com', 'stdGAP' => 88.7
], [
'stdNo' => '30304',
'stdName' => 'Mona Khalid', 'stdEmail' => 'mona@gmail.com', 'stdGAP' => 78.5
], [
'stdNo' => '10002',
'stdName' => 'Bilal Hmaza', 'stdEmail' => 'bilal@gmail.com', 'stdGAP' => 98.7
], [
'stdNo' => '10005',
'stdName' => 'Said Ali', 'stdEmail' => 'said@gmail.com', 'stdGAP' => 98.7
], [
'stdNo' => '10007',
'stdName' => 'Mohammed ahmed', 'stdEmail' => 'mohamed@gmail.com', 'stdGAP' => 98.7
]
];

  $stdcount =0;
  foreach ($students as $student) {
    echo "<tr>";
    echo "<td>{$student['stdNo']}</td>";
    echo "<td>{$student['stdName']}</td>";
    echo "<td>{$student['stdEmail']}</td>";
    echo "<td >{$student['stdGAP']}</td>";
    echo "</tr>";
    $stdcount++;
  }
  echo "<tr>"."<td colspan='3'>"."The number of student : ".$stdcount ."<td>"."</tr>";
  ?>
</table>

</body>
</html>
