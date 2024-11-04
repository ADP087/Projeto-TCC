<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Agendamento de Horários</title>
</head>
<body>
    <header>
        <h1>Veja os horários disponiveis:</h1>
        <form id="form_sala">
            <label for="sala">Sala:</label>
            <select id="sala" name="sala" onclick='selecionarData(this)'>
                <?php
                for ($i = 1; $i <= 8; $i++) {
                    echo "<option value='$i'>Sala $i</option>";
                }
                ?>  
            </select>
        </form>

        <div class="dates">
        <?php
            $dias_da_semana = [
                1 => 'Segunda',
                2 => 'Terça',
                3 => 'Quarta',
                4 => 'Quinta',
                5 => 'Sexta'
            ];

            foreach ($dias_da_semana as $id_dia => $nome_dia) {
                echo "<span class='date' data-id_dia='$id_dia' onclick='selecionarData(this)'>$nome_dia</span> ";
            }
        ?>
        </div>
    </header>
    <section id="sempre_novo">

        <div id="tabela">
            <table id="tabela_horarios">
                <!-- Tabela interativa aqui-->
            </table>
            <br>

            <a href="agendar/index.php"><button>Quer agendar algum horário?</button></a>
            <a href="#"><button id="reiniciar_btn" onclick="reiniciarTabela()">Reiniciar a Tabela</button></a>
            <a href="Cadastro/cadastro.php"><button>Cadastrar Professor</button></a>
        </div>
    </section>

    <script src="agendar/script.js"></script>
</body>
</html>