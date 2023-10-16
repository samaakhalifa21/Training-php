<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet"href="css/main.css">
</head>
<body text =red>
  <h1> Edit a Product</h1>  
<form action ="{{route('course.update',['course'=>$course])}}" method="POST">
    @csrf
    @method('put')
<fieldset>
Title <input type="text" name ="title" id="title" required placeholder="title" value ="{{$course->title}}" ><br>
Description <input type="text" name ="description" id="description" required placeholder="description "value ="{{$course->description}}"><br>
ProductCode <input type="number" name ="product_code" id="productcode" required placeholder="productcode" value ="{{$course->product_code}}"><br>
Price <input type="number" name ="price" id="price" required placeholder="price"value ="{{$course->price}}"><br>

<input type="submit" name ="submit" id=" submit" value="update" >
</fieldset>
</form>
</body>
</html>
