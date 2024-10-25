<?php
session_start();

if (isset($_SESSION['worker'])) {
    $worker = $_SESSION['worker'];
} else {
    $worker = ''; 
}

if (isset($_SESSION['milk'])) {
    $milk = $_SESSION['milk'];
} else {
    $milk = 0; 
}

if (isset($_SESSION['soft_drink'])) {
    $soft_drink = $_SESSION['soft_drink'];
} else {
    $soft_drink = 0; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Supermarket managment</h1>
    <form action="" method="post">
    Worker name: <input type="text" name="worker" >

    <h2>Choose product:</h2>
    <br>
    <select id="product" name = "product">
        <option value="milk">Milk</option>
        <option value="soft_drink">Soft Drink</option>
    </select>

    <h2>Product quantity:</h2>
    <input type="number" id="quantity" name="quantity">

    <div>
        <input type="submit" name="send" value="add" id="add"></input>
        <input type="submit" name="send" value="remove" id="remove"></input>
        <input type="submit" name="send" value="reset" id="reset"></input>
    </div>

    <div class="inventory">
        <h2>Inventary: </h2>
        <br>
    <?php  
    
    

if (isset($_POST["send"])){
    if ($_POST["send"] == "add"){
       if (isset($_POST["worker"]) & isset($_POST["product"]) & isset($_POST["quantity"])) {
           if ($_POST["worker"] != "") {
                $worker = $_POST["worker"];
                $_SESSION['worker'] = $worker;
            }
            switch ($_POST['product']) {
                case 'milk':
                    $milk += (int)$_POST['quantity'];
                    $_SESSION['milk'] = $milk ;
                    break;
                case 'soft_drink':
                    $soft_drink += (int)$_POST['quantity'];
                    $_SESSION['soft_drink'] = $soft_drink ;
                    break;
            }
        }
    }elseif ($_POST["send"] == "remove") {
        if (isset($_POST["worker"]) & isset($_POST["product"]) & isset($_POST["quantity"])) {
            if ($_POST["worker"] != "") {
                 $worker = $_POST["worker"];
                 $_SESSION['worker'] = $worker;
             }
             switch ($_POST['product']) {
                 case 'milk':
                     
                     if (($milk - (int)$_POST['quantity']) < 0) {
                        echo'No puedes quitar mas de lo que ya hay. <br><br> ';
                     }else{
                        $milk -= (int)$_POST['quantity'];
                     }
                     $_SESSION['milk'] = $milk ;
                     break;
                 case 'soft_drink':
                    if (($soft_drink - (int)$_POST['quantity']) < 0) {
                        echo'No puedes quitar mas de lo que ya hay. <br><br> ';
                     }else{
                        $soft_drink -= (int)$_POST['quantity'];
                     }
                     $_SESSION['soft_drink'] = $soft_drink ;
                     break;
             }
         }


    }elseif ($_POST["send"] == "reset") {
        session_unset(); 
        session_destroy();  

        $worker = 0;
        $milk = 0;
        $soft_drink = 0;
    }
} 

        echo "worker: $worker<br>";
        echo "unit milk: $milk<br>";
        echo "unit soft drink: $soft_drink";

        

    ?>
    </div>
    </form>
    
</body>
</html>