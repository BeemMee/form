<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        .space {
            width: 150px;
        }
        th {
            width: 250px;
        }
    </style>
</head>
<body>
<table border="3">
  <tr>
    <th colspan="2">ผู้ส่ง</th>
    <th rowspan="6" colspan="2" class="space"></th>
  </tr>
  <tr>
    <td>ชื่อ</td>
    <td><?php echo $_GET["Firstsong"]; ?></td>
  </tr>
  <tr>
    <td>นามสกุล</td>
    <td><?php echo $_GET["Lastsong"]; ?></td>
  </tr>
  <tr>
    <td>เบอร์ติดต่อ</td>
    <td><?php echo $_GET["numbersong"]; ?></td>
  </tr>
  <tr>
    <td>รายระเอียดสินค้า</td>
    <td><?php echo $_GET["linesong"]; ?></td>
  </tr>
  <tr>
    <td>วันที่ส่ง</td>
    <td><?php echo $_GET["vansong"]; ?></td>
  </tr>
  <tr>
    <th rowspan="11" colspan="2" class="space"></th>
    <th colspan="2">ผู้รับ</th>
  </tr>
  <tr>
    <th>ชื่อ</th>
    <th><?php echo $_GET["Firstrub"]; ?></th>
  </tr>
  <tr>
    <th>นามสกุล</th>
    <th><?php echo $_GET["Lastrub"]; ?></th>
  </tr>
  <tr>
    <th>เบอร์ติดต่อ</th>
    <th><?php echo $_GET["numberrub"]; ?></th>
  </tr>
  <tr>
    <th>จังหวัด</th>
    <th><?php echo $_GET["jungwat"]; ?></th>
  </tr>
  <tr>
    <th>อำเภอ/เขต</th>
    <th><?php echo $_GET["Aum"]; ?></th>
  </tr>
  <tr>
    <th>ตำบล</th>
    <th><?php echo $_GET["Tam"]; ?></th>
  </tr>
  <tr>
    <th>บ้านเลขที่</th>
    <th><?php echo $_GET["ban"]; ?></th>
  </tr>
  <tr>
    <th>รหัสไปรษณีย์</th>
    <th><?php echo $_GET["pai"]; ?></th>
  </tr>
  <tr>
    <th>รายระเอียดที่อยู่</th>
    <th><?php echo $_GET["linerub"]; ?></th>
  </tr>
  <tr>
    <th>วันที่สั่ง</th>
    <th><?php echo $_GET["vanrub"]; ?></th>
  </tr>
</table>
</body>
</html>