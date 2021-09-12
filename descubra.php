<?php


// variables 
$questionOne = $_POST["question_one"];
$questionTwo = $_POST["question_two"];
$questionThree = $_POST["question_three"];
$questionFour = $_POST["question_four"];
$resultado = "";
//------------------------//
//--validation form--//
if ($questionOne  && $questionTwo &&  $questionThree && $questionFour) {
    //Question Mechanics //
    //Possibilities back end
    if (
        $questionOne == "dados"
        &&
        $questionTwo == "func"
        &&
        $questionThree == "sim"
        &&
        $questionFour == "servidor"
    ) {
        //Show at the display back end
        $resultado .= "<div class='container--backend'>";
        $resultado .= "<h2>Back End</h2> ";
        $resultado .= "</div>";
    } else if (
        $questionOne ==  "dados"
        &&
        $questionTwo == "func"
    ) {
        //Show at the display back end
        $resultado .= "<div class='container--backend'>";
        $resultado .= "<h2>Back End</h2> ";
        $resultado .= "</div>";
    } else if (
        $questionOne == "interface"
        &&
        $questionTwo == "func"
    ) {
        //Show at the display back end
        $resultado .= "<div class='container--backend'>";
        $resultado .= "<h2>Back End</h2> ";
        $resultado .= "</div>";
    }
    //---------//
    //Possibilities front end
    else if (
        $questionOne == "interface"
        &&
        $questionTwo == "exp"
        &&
        $questionFour == "tela"
    ) {
        //Show at the display front end
        $resultado .= "<div class='container--frontend'>";
        $resultado .= " <h2>Front End</h2>";
        $resultado .= "</div>";
    } else if (
        $questionOne == "dados"
        &&
        $questionTwo == "exp"
    ) {
        //Show at the display front end
        $resultado .= "<div class='container--frontend'>";
        $resultado .= " <h2>Front End</h2>";
        $resultado .= "</div>";
    } else if (
        $questionOne == "interface"
        &&
        $questionTwo == "exp"
    ) {
        //Show at the display front end
        $resultado .= "<div class='container--frontend'>";
        $resultado .= " <h2>Front End</h2>";
        $resultado .= "</div>";
    }
    //----------//  
    //Possibilities  full stack
    else if (
        $questionTwo == "ambos"
        &&
        $questionThree == "sim"
    ) {
        //Show at the display full stack
        $resultado .= "<div class='container--fullstack'>";
        $resultado .= "<h2>Full Stack</h2>";
        $resultado .= "</div>";
    } else if (
        $questionOne == "ambos"
        &&
        $questionTwo == "ambos"
        &&
        $questionThree == "não"
    ) {
        //Show at the display full stack
        $resultado .= "<div class='container--fullstack'>";
        $resultado .= "<h2>Full Stack</h2>";
        $resultado .= "</div>";
    }
    //------------------//
    else {
        //Show at the display full stack
        $resultado .= "<div class='container--fullstack'>";
        $resultado .= "<h2>Full Stack</h2>";
        $resultado .= "</div>";
    }
    //End Question Mechanics //
} else {
    $resultado.= "<div class='error'>";
    $resultado.="<h2>Erro!!</h2>";
    $resultado.= "<h3>Por favor responda todas perguntas</h3>";
    $resultado.="</div>";
}
//-- End validation form--//
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/descubra.css" />
    <title>Resultado</title>
</head>

<body>
    <div class="container--resultado">
        <?php
        echo  $resultado;
        ?>
    </div>
    <div class="container--button">
        <a href="./index.php">
            <button>Refazer o teste</button>
        </a>
    </div>

</body>

</html>