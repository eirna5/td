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
        <div class="flex-center position-ref full-height">
		 <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

<!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-secondary navbar-light">

<!-- Links -->
<ul class="navbar-nav">
<li class="nav-item">
    <a class="nav-link" href="/td_show"><b>BACK</b></a>
</li>
</ul>
</nav>


<br><br><center><h2>Please Edit Your Task Here!</h2>
<br>
                    <form method="post" action="../td_update/{{$tdArr->id}}">
                    @csrf
                        <div class="form-group" id="customers">
                            <input class="form-control" type="textname" name="name" required value="{{$tdArr->name}}"/>
                            <br>
                            <button class="btn btn-info float-right" type="submit" name="submit">Add Task</button>
                        </div>
                    </form>




	 