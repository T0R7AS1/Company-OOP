<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include ("./Company.php");
    include ("./SoftwareCompany.php");
    include ("./ConstructionCompany.php");
    include ("./Programmer.php");
    include ("./Builder.php");

    $programmer = new Programmer();
    $builder = new Builder();
    
    $programmer->printInfo();
    echo '<br><br><br>';
    $programmer->addSkill('Rusty');
    $programmer->addSkill('PHP');
    $programmer->addSkill('Pascal');
    $programmer->addSkill('Go');
    $programmer->addSkill('JAVA');
    $programmer->addSkill('Phyton');
    $programmer->printInfo();
    echo '<br><br><br>';
    $programmer->bankrupt();
    $programmer->addSkill('PHP');
    $programmer->printInfo();



    echo '<br> <br> <br>';

    $builder->printInfo();
    $builder->addSkill('Truck Driver');
    echo '<br> <br> <br>';
    $builder->printInfo();
    echo '<br> <br> <br>';
    $builder->bankrupt();
    $builder->addSkill('Tank Driver');
    $builder->printInfo();


    ?>
</body>
</html>