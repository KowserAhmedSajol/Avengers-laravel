<!DOCTYPE html>
<html>
<head>
<style>
    body{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 6px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 0px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}
</style>
</head>
<body>

<h2>AVENGERS</h2>
<a class="button button1" href="/add">ADD NEW AVENGER</a>
<table>
  <tr>
    <th>NAME</th>
    <th>KNOWN AS</th>
    <th>ABILITY</th>
    <th>USES</th>
    <th>VILLAIN</th>
    <th>GENDER</th>
    <th>IMAGE</th>
    <th>ACTION</th>
  </tr>
  @foreach($datas as $data)
  <tr>
    <td>{{$data['name']}}</td>
    <td>{{$data['knownAs']}}</td>
    <td>{{$data['ability']}}</td>
    <td>{{$data['uses']}}</td>
    <td>{{$data['villain']}}</td>
    <td>{{$data['gender']}}</td>
    <td><img style="height: 80px; width:100px;" src="uploads/images/{{$data['image']}}"></td>
    <td>
        <a class="button button1" href="show/{{$data['id']}}">SHOW</a>
        <a class="button button2" href="">EDIT</a>
        <a class="button button3" href="delete/{{$data['id']}}">DELETE</a>
    </td>
  </tr>
@endforeach
</table>

</body>
</html>


