<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        spl_autoload_register(function($className){
            include_once $className . '.php';
        });
        $aCourse = Course::getCourse();
        $aCourse->setDegree(new BscDegree());
        $aCourse->view("Software Design", 
                "This course provides students with "
                        . "prossional knowledge ...","samar");
        
        $aCourse->setDegree(new MscDegree());
        $aCourse->view("Software Design", 
                "This course provides students with "
                        ."prossional knowledge ...","asma");
         $aCourse->setDegree(new PhdDegree());
        $aCourse->view("Software Design", 
                "This course provides students with "
                        . "prossional knowledge ...","ali");
         $aCourse->setDegree(new DipDegree());
        $aCourse->view("Software Design", 
                "This course provides students with "
                        . "prossional knowledge ...","hosny");
        ?>
    </body>
</html>
