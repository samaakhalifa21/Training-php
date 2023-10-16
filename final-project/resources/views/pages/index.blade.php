
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <a class="nav-link" href="{{url('/course/create')}}">CreateProduct</a>
</head>
<body>
    
    <h1>Product</h1>
    <div>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Product_Code</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($courses as $course)
            <tr>
             <td>{{$course->title}}</td>  
             <td>{{$course->price}}</td> 
             <td>{{$course->product_code}}</td> 
             <td>{{$course->description}}</td>  
             <td>
            <a href="{{route('course.edit',['course'=>$course])}}">Edit</a>
        
            <a href="{{route('course.delete',['course'=>$course])}}"> Delete</a>
        
            <a href="{{route('course.show',['course'=>$course])}}"> Show</a>
        </td>
        
               
        </tr>
        @endforeach
    </table>
        
    </div>
</body>
</html>