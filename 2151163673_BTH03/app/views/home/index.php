<!DOCTYPE html>
<html>
<head>
  <title>Quản lý thư viện - Danh sách sách</title>
  <style>
    /* CSS cho bố cục và giao diện */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    h1 {
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #333;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #ddd;
    }

    a {
      text-decoration: none;
      color: #333;
    }

    .add-link {
      display: inline-block;
      margin-top: 20px;
    }

    .navigation-link {
      display: block;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <h1>Danh sách sách</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Tên sách</th>
      <th>Năm xuất bản</th>
      <th>Tác giả</th>
      <th>Chỉnh sửa</th>
      <th>Xóa</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Sách 1</td>
      <td>2021</td>
      <td>Tác giả 1</td>
      <td><a href="edit.php?id=1">Chỉnh sửa</a></td>
      <td><a href="delete.php?id=1">Xóa</a></td>
    </tr>
    <!-- Thêm các hàng cho các sách khác -->
  </table>
  <a class="add-link" href="add.php">Thêm mới sách</a>
  <a class="navigation-link" href="menu.php">Menu điều hướng</a>
</body>
</html>
