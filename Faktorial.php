<!DOCTYPE html>
<head>
    <title>Faktorial</title>
</head>
<body>
    <h2>Faktorial</h2>
    <form action="" method="POST">
        <input type="number" name="bil" id="bil"> 
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $count=1;
            $batas = $_POST['bil'];
            for($i=1; $i<= $batas; $i++){
                $count=$count*$i;
            }
            echo $count;
        }
    ?>
</body>
</html>