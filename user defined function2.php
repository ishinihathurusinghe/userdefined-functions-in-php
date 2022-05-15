<html>
<head>
    <title> user defined functions </title>
</head>

<body>
   <?php
       function get_month_name($monthval, $yearval){
           switch($monthval){

            case 1: $month_name = "duruthu"; break;
            case 2: $month_name = "nawan"; break;
            default: $month_name= "invalid month"; break;
           }

           return $yearval." " . $month_name;
       }

       echo get_month_name(2,2014);
   ?>
</body>
</html>