<!DOCTYPE html>
<html lang="en">
<head>
  <a class="nav-link" href="{{url('/home')}}">Home</a>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<div class ="row">
        <div class ="col-lg-12-margin-tb">
          <div class="pull-left">
              <h2> Show Product</h2>
          </div>
          <div class="pull-right">
              
      </div>
  </div>
  <div class ="row">
      <div class ="col-lg-12-margin-tb">
        <div class="pull-left">
           <strong> Title :</strong>
           {{$course->title}}
  
  
        </div>
    </div>
  </div>
  
  <div class ="row">
      <div class ="col-lg-12-margin-tb">
        <div class="pull-left">
           <strong> Description :</strong>
           {{$course->description }}
  
  
        </div>
    </div>
  </div>
  <div class ="row">
      <div class ="col-lg-12-margin-tb">
        <div class="pull-left">
           <strong> Product_Code :</strong>
           {{$course->product_code }}
  
  
        </div>
    </div>
  </div>
  <div class ="row">
      <div class ="col-lg-12-margin-tb">
        <div class="pull-left">
           <strong> Price :</strong>
           {{$course->price }}
  
  
        </div>
    </div>
  </div>
    
</body>
</html>