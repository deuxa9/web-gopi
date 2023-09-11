<!DOCTYPE html>
<html>
<head>
<style>
#emails {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#emails td, #emails th {
  border: 1px solid #ddd;
  padding: 8px;
}

#emails tr:nth-child(even){background-color: #f2f2f2;}

#emails tr:hover {background-color: #ddd;}

#emails th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #343a40;
  color: white;
}
</style>
</head>
<body>

<h1>History Email</h1>

<table id="emails">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Nomor Telepon</th>
    <th>Pesan</th>
    <th>Dibuat Pada</th>
  </tr>
@foreach($emails as $index => $item)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->email}}</td>
        <td>{{ $item->phone }}</td>
        <td>{{ $item->messages }}</td>
        <td>{{ $item->created_at }}</td>
    </tr>
@endforeach
</table>

</body>
</html>


