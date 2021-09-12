<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='./styles/index.css' />
    <title>Test Dev</title>
</head>

<body>

    <div class="container--title">
        <h1 align='center'>Descubra sua vocação dev</h1>
    </div>
    <div class="container--supreme">
        <form method="POST" action="./descubra.php">
            <div class="container-form">
                <div >
                    <h4> 1-Com o que vc gosta mais de trabalhar?</h4>
                    <div class="div--input">
                        <input type='radio' value="dados" name="question_one" checked />
                        <label>Dados</label>
                    </div>
                    <div  class="div--input">
                        <input type='radio' value="interface" name="question_one" />
                        <label>Criar interface</label>
                    </div>
                    <div  class="div--input">
                        <input type='radio' value="ambos" name="question_one" />
                        <label>Ambos</label>
                    </div>
                </div>
                <div >
                    <h4> 2-Qual a sua preocupação?</h4>
                    <div class="div--input">
                        <input type='radio' value="exp" name="question_two" checked />
                        <label>Experiencia do usuario</label>
                    </div>
                    <div class="div--input">
                        <input type='radio' value='func' name="question_two" />
                        <label>Funcionamento da aplicação</label>
                    </div>
                    <div class="div--input">
                        <input type='radio' value='ambos' name="question_two" />
                        <label>Ambos</label>
                    </div>
                </div>
                <div >
                    <h4> 3- Voce possui um bom raciocionio logico?</h4>
                    <div class="div--input">
                        <input type='radio' value="sim" name="question_three" checked  />
                        <label>Sim</label>
                    </div>
                    <div class="div--input">
                        <input type='radio' value="não" name="question_three" />
                        <label>Não</label>
                    </div>
                </div>
                <div>
                    <h4>4-Com o que voce pretende lidar?</h4>
                    <div class="div--input">
                        <input type='radio' value="servidor" name="question_four" checked />
                        <label>Servidor</label>
                    </div>
                    <div class="div--input">
                        <input type='radio' value="tela" name="question_four" />
                        <label>Tela do usuario</label>
                    </div>
                    <div class="div--input" >
                        <input type='radio' value="ambos" name="question_four" />
                        <label>Ambos</label>
                    </div>
                </div>
                <div class='container--submit'>
                    <input type='submit' value="Ver Perfil" />
                </div>

            </div>
        </form>
    </div>
</body>

</html>