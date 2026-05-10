<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Proper HTML Table</title>

  <style>
    table {
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
      font-family: Arial, sans-serif;
    }

    th, td {
      border: 1px solid #333;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #ddd;
    }

    caption {
      font-size: 24px;
      margin-bottom: 10px;
      font-weight: bold;
    }
  </style>
</head>

<body>

  <table>
    <caption>Student Information</caption>

    <thead>
      <tr>
        <th>Full_name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>College</th>
        <th>Course</th>
        <th>Semester</th>
        <th>Edit</th>
        <th>Delete</th>

      </tr>
    </thead>

    <tbody>
        @foreach ( $datas as $data )
        
      <tr>
        <td>{{ $data->full_name }}</td>
        <td>{{ $data->phone }}</td>
        <td>{{ $data->email }} </td>
        <td>{{ $data->college }}</td>
       <td>{{ $data->course }}</td>
        <td>{{ $data->semester }}</td>
        <td><a href="{{ route('editpage', $data->id) }}"><button>edit</button></a></td>
        <td> <form method="post" action="{{ route('delete',$data) }}"><button type="submit">delete</button></form></td>
      </tr>
       
        @endforeach
    </tbody>

  </table>

</body>
</html>