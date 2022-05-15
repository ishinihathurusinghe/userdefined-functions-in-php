<html>

<head>
    <title> user define functions  </title>
</head>
<body>
   <?php
     function get_month_name($monthval){

        switch($monthval){

            case 1: $month_name = "duruthu"; break;
            case 2: $month_name = "navam"; break;
            case 3: $month_name = "madin"; break;
            case 4: $month_name = "bak"; break;
            case 5: $month_name = "vesak"; break;
            case 6: $month_name = "poson"; break;
            case 7: $month_name = "asala"; break;
            case 8: $month_name = "nikini"; break;
            case 9: $month_name = "binara"; break;
            case 10: $month_name = "vap"; break;
            default: $month_name = "invalid month"; break;

        }

        return $month_name;
     }

     echo get_month_name(6);
   ?>
</body>
</html>