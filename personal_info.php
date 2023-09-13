<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Personal Information</title>
    </head>
<body style="background-color: #d0d8e4;">
    <div style="padding: 50px;">
      <h2>Personal Information</h2>
      
       <?php 
    
            $name = "Hridoy Jmadder";
            $age = 27;
            $country = "Bangladesh";
            $introduction = "Hello, I am Hridoy Jomaddder. I am 27 years old and I come from Bangladesh. I am very happy to part of Ostad Php & Laravel Batch-2.";
            
            echo " <div style='font-size:18px;'> Name: $name </div>";
            echo "<div style='font-size:18px;'> Age: $age </div>";
            echo " <div style='font-size:18px;'> Name:$country </div>";
            echo "<p> Introduction: $introduction </p>";
    
       ?>

    </div>
</body>
</html>