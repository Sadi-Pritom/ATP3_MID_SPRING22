
@php
$name="Sadi";
@endphp
<html>

    <form action="{{route('login')}}" method="post">
    {{@csrf_field()}}
        <input type="text" value="<?php echo $name;?>" name="uname" placeholder="Username"><br>
        <input type="password" name="pass"placeholder="Password"><br>
       <input type="submit" value="Login"> 
      <!-- <a href="/home">Login</a>  --> 


    </form>
     
</html> 
   