<!DOCTYPE html>
<html>

<head>
</head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<body>

  <h2>Styling Tables</h2>

  <table id="myTable">
    <thead>
      <tr>
        <th>Date</th>
        <th>Amount</th>
        <th>Amount Number</th>
        <th>Reason</th>
        <th>Month</th>
        <th>Name of Payee</th>
        <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach($student as $students)
      <tr>
      <td>{{$students->date}}</td>
      <td>{{$students->amount}}</td>
      <td>{{$students->amountNum}}</td>
      <td>{{$students->reason}}</td>
      <td>{{$students->month}}</td>
      <td>{{$students->nameOfPayee}}</td>
      <td><a href="{{route ('add')}}" type="button" value="ADD">ADD</a>
      <a href="{{route('edit', $students->id)}}" type="button" value="EDIT">Edit</a>
      <form action="">
        <a href="" type="button" value="DELETE">
      </form>
      </td>
      </tr>
      @endforeach
    </tbody>

  </table>

</body>
<script>
  $(document).ready(function () {
    $('#myTable').DataTable();
  });
</script>

</html>