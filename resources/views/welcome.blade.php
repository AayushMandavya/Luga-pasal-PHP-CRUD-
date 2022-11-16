<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<body>
<h2 class="text-center">
     OutDoor Luga Pasal
    </h2>
    
    
    <form action="{{route('create')}}" method="post" class="form-control p-3 text-center">
        @csrf
        <label>Bh Number</label>
        <input type="text" name="BhNo" class="form-control">
        <label>Bh Quantity</label>
        <input type="text" name="quantity" class="form-control">
        <label>Bh Status</label>
        <input type="text" name="status" class="form-control">
        <label>Bh Remarks</label>
        <input type="text" name="remarks" class="form-control">
        <button type="submit" class="btn btn-success">Add</button>
    </form>
    <table class="table table-hover w-75 mx-auto my-3">
        <thead>
            <tr class="table-primary">
                <th>Sn</th>
                <th>BH-NO</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Remarks</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-danger">
            @foreach($items as $value)
            <tr class="table-primary">
                <th scope="row">{{$loop->index+1}}</th>
                
                <td>{{$value->bhno}}</td>
                <td>{{$value->quantity}}</td>
                <td>{{$value->status}}</td>
                <td>{{$value->remarks}}</td>

                <td>
                        <a class="btn btn-primary" href="/edit/{{$value->id}}">Edit</button>
                        <a class="btn btn-danger" href="/destroy/{{$value->id}}">Delete</a>

                </td>
                </tr>

            @endforeach
            </tr>
        </tbody>
    
</body>
</html>