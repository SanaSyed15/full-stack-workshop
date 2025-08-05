<!DOCTYPE html>
<html>
    <body>
        <?php
        echo"My first PHP script!<br>"; //Single line comment
        $txt="sana";  #this is also single line comment
        echo 'My name is '.$txt.'<br>';//Concatenation of strings
        echo "<br>";

        print("Hello"); //Print function
        echo "<br>";

        $x=10;
        $y=25;
        echo"the sum of $x and $y is ".($x+$y)."<br>"; //Variable interpolation

        echo"PHP Strings"; //Double quotes can be used for strings
        echo "<br>";
        echo'PHP Strings'; //Single quotes can be used for strings
        echo "<br>";

        $txt1="Hello";
        $txt2="World";
        echo $txt1." ".$txt2;//Concatenation of strings
        echo "<br>";
        echo $txt2;
        echo "<br>";
        echo"$txt1 $txt2"; //Variable interpolation
        echo "<br>";
        echo"<br>";
        //while loop
        echo "While loop example:<br>";
        $i=1;
        while($i<6){
            echo"number is $i <br>";
            $i++;
        }

        //do while loop
        echo"<br>Do while loop example:<br>";
        $i=1;
        do{
            echo"number is $i <br>";
            $i++;
        }while($i<6);
        echo"<br>";

        //for loop
        echo"for loop example:<br>";
        for($i=1;$i<6;$i++){
            echo"number is $i <br>";
        }

        //arrays
        echo"<br>Arrays example:<br>";
        $colors=array("yellow pink", "blackish blue", "greenish red", "white", "brown");
        //for each loop
        foreach($colors as $color){
            echo"$color <br>";
        }

        //break in while loop
        echo"<br>Break in while loop example:<br>";
        $i=1;
        while($i<6){
            if($i==3){
                break;
            }
            echo"number is $i <br>";
            $i++;
        }

        //continue in while loop
        echo"<br>Continue in while loop example<br>";
        $i=1;
        while($i<6){
            if($i==3){
                continue;
            }
            $i++;
            echo"number is $i <br>";
        }

        









    

        ?>
    </body>