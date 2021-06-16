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

            <form method="post" action="/saveForm" >
            {{csrf_field()}}
                Name: <input type="text" class="name-control" name="name" placeholder="Enter your name here">
                <br></br>
                User Name: <input type="text" class="user-name" name="u-name" ><br></br>
                Date of Birth: <input type="text" class="D-Birth" name="DoB"><br></br>
                Email: <input type="text" class="email" name="email"><br></br>
                Telephone No: <input type="text" class="tel-no" name="teleNo"><br></br>
                NIC No: <input type="text" class="nic" name="nic"><br></br>
                Gender: <input type="text" class="gen" name="gen"><br></br>
                Password: <input type="text" class="pass1" name="pass1"><br></br>
                Reenter Password: <input type="text" class="pass2" name="pass2"><br></br>



                <input type="submit" class="bt btn-primary" value="Submit">
               
                </form>

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
                </br>
        
                 

            </div>
        </div>        
    </div>
    </div>
</body>
</html>