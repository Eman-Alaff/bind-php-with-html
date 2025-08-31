<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>Students List</title>
  <style>
    body {
      font-family: 'DG Jory','Aref_Menna';
      background-color: #ffeec7;
    }

    table {
      width: 77%;
      margin: 0 auto;
      border-collapse: collapse;
      border-radius: 30px;
      overflow: hidden;
      background-color: rgba(255, 255, 255, 0.2);
      box-shadow: 0 0 25px rgba(0,0,0,0.4);
      font-size:19px;
    }

    th, td {
      padding: 12px 15px;
      text-align: center;
      color : #2e895d;
      border-bottom: 3.5px solid #ffebb6;
    }

    th {
      background-color: #f6a316;
      color: white;
      font-size : 25px;
    }
  h2 {
      text-align: center;
      color: #34a572;
      font-size : 45px;
    }
    tr:hover {
      background-color: #cadbdaff;
      font-size:21px;

      }

  </style>
</head>
<body>

<h2>Students list</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Name </th>
    <th>Email</th>
    <th>GPA</th>
  </tr>
  

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
