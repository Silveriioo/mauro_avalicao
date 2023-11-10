<?php

function connection()
{
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = '';
    $database = '';

    global $conn;

    if (!isset($conn)) {
        $conn = mysqli_connect($hostname, $username, $password, $database);

        if (mysqli_connect_error()) {
            die('Ouve uma falha na conexão ' . mysqli_connect_error());
        }
    }
    return $conn;
}

function tabelaDatabase()
{
    global $conn;
    $conn = connection();

    $html = "<table id='myTable' class='display bg-white'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>";

    $sql = "SELECT id, data FROM mauro.queue";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $html .= "<tr>";
            $html .= "<td>" . $row["id"] . "</td>";
            $html .= "<td>" . $row["data"] . "</td>";
            $html .= "</tr>";
        }
    } else {
        $html .= "<tr><td colspan='2'>Nenhum dado encontrado na tabela.</td></tr>";
    }

    $html .= "</tbody></table>";

    return $html;
}

function graphItem()
{
    global $conn;
    $conn = connection();

    $tableHTML = tabelaDatabase();

    echo $tableHTML;
}

function ExplicacaoArray()
{


    // Criando um array associativo de informações sobre amigos
    $amigos = array(
        array("nome" => "Alice", "idade" => 25, "cidade" => "São Paulo"),
        array("nome" => "Bob", "idade" => 30, "cidade" => "Rio de Janeiro"),
        array("nome" => "Charlie", "idade" => 22, "cidade" => "Belo Horizonte"),
        array("nome" => "David", "idade" => 28, "cidade" => "Porto Alegre")
    );
    
    // Exibindo as informações sobre os amigos
    echo "Informações sobre os Amigos:<br>";
    
    foreach ($amigos as $amigo) {
        echo "Nome: " . $amigo["nome"] . "<br>" . " Idade: " . $amigo["idade"] . "<br>" . " Cidade: " . $amigo["cidade"] . "<br><br>";
    }
    
    // Função para calcular a média de idades
    function calcularMediaIdades($amigos) {
        $somaIdades = 0;
    
        foreach ($amigos as $amigo) {
            $somaIdades += $amigo["idade"];
        }
    
        $media = $somaIdades / count($amigos);
    
        return $media;
    }
    
    // Exibindo a média de idades
    $mediaIdades = calcularMediaIdades($amigos);
    echo "<br>Média de Idades: " . $mediaIdades;
    
    

}