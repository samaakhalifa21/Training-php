

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet"href="css/main.css">
</head>
<body text =red>
  <h1> Create a Product</h1>  
<form action ="{{route('course.store')}}" method="POST">
    @csrf
<fieldset>
Title <input type="text" name ="title" id="title" required placeholder="title" ><br>
Description <input type="text" name ="description" id="description" required placeholder="description "><br>
ProdcuctCode <input type="number" name ="product_code" id="productcode" required placeholder="productcode" ><br>
Price <input type="number" name ="price" id="price" required placeholder="price"><br>

<input type="submit" name ="submit" id=" submit" value="submit" >
</fieldset>
</form>
</body>
</html>
