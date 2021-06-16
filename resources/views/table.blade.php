<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="text-left">
    <h1>Registration Form </h1> 
        <div class="row">
            <div class="col-md-12">
            @foreach($errors->all() as $err)
            <div class="alert alert-danger" role="alert" >
            {{$err}}
            </div>
            @endforeach
                <table class="table table-dark">
                    <th>Name</th>
                    <th>Date of Birth</thh>
                    <th>Telephone No</th>
                    <th>NIC No</th>
                    <th>Gender</th>

                    @foreach($name as $nm)
                    <tr> 
                        <td>{{$nm->name}}</td>
                        <td>{{$task->task}}</td>
                        <td>{{$task->iscompleted}}</td>
                        <td>{{$task->id}}</td>
                        <td>{{$task->task}}</td>
                    </tr>
                    @endforeach
                    
                 

            </div>
        </div>        
    </div>
    </div>
</body>
</html>