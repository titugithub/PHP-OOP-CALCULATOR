<?php
    include "functions.php";
?>
<form action="" method = "post">
    <table>
        <tr>
            <td>Enter your first number :</td>
            <td><input type="number" name="num1" id=""></td>
        </tr>
        <tr>
            <td>Enter your second number :</td>
            <td><input type="number" name="num2" id=""></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="calculate" name = "calculation"></td>
        </tr>

    </table>
</form>

<?php 
    if (isset($_POST['calculation'])):
        $numOne = $_POST['num1'];
        $numTwo = $_POST['num2'];

        if(empty($numOne) or empty($numTwo)):
            echo 'Field must not be empty';
            else :
                echo "First number = $numOne <br>Second number = $numTwo <br><br><br>";
                $cal = new Calculationn;
                $cal-> add($numOne , $numTwo) ;
                $cal-> sub($numOne , $numTwo) ;
                $cal-> mul($numOne , $numTwo) ;
                $cal-> div($numOne , $numTwo) ;
        endif;
       
            

    endif;
    


    
?>