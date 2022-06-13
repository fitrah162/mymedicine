<!doctype html>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Show Products</title>
</head>

<body>

        <div class="container">
  <h2>List Medicines</h2>
  <p>The .table-hover class enables a hover state on table rows:</p> 
  @if ($message)          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Form</th>
        <th>Restriction and Formula</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
       
      <tr>
        <td>{{$message->generic_Name}}</td>
        <td>{{$message->form}}</td>
        <td>{{$message->restriction_Formula}}</td>
        <td>{{$message->description}}</td>
        <td>{{$message->kategori->name}}</td>
      </tr>
     
    </tbody>
  </table>
  @else
    <h2>Tidak ada data</h2>
  @endif
</div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>