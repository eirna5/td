<!DOCTYPE html>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>To-Do System</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>

        </style>

    </head>

    <body>

<style>

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #c7c7c7;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #ddd;}

#customers tr:hover {background-color: #d1fffe;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>


        
		    <center><div class="flex-center position-ref full-height">

		    <form method="post">
            <br><br><h1>TO DO LIST</h1><br>
            <a href="td_create" class="btn btn-warning" ><i class ='fa fa-plus'></i><b> Add List</b></a></br></br>


            
            <table class="table table-striped text-center" id="customers">
              <tr>
                  <td><b>List</b></td>
                  <td><b><center>Action</center></b></td>
              </tr>


                @foreach($tdArr as $td)
                <tr>
                    <td>{{$td->name}}</td>
                    <td>
                            <center>
                            <a href="td_edit/{{$td->id}}" class="btn btn-outline-success"><i class ='fa fa-check'></i> Edit</a>
                            <a href="td_delete/{{$td->id}}" class="btn btn-outline-danger"><i class ='fa fa-trash'></i> Delete</a>
                            </center>
                    </td>
                  </tr>
                @endforeach
            </table>
		    </form>  
        </div></center>


    </body>
</html>