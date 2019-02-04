<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <h1>Lopers</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Distance</th>
    </tr>
    @foreach ($lopers as $loper)
    <tr>
        <td>{{ $loper->id }}</td>
        <td>{{ $loper->name }}</td>
        <td>{{ $loper->email }}</td>
        <td>{{ $loper->distance }}</td>
    </tr>
  
    @endforeach
</table> 
</body>


</html>


