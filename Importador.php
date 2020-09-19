<?php 
$user = "<USUARIO>"; 
$password = "<SENHA>"; 
$database = "<BANCO>"; 
$hostname = "<SERVIDOR>"; 
$connection = mysqli_connect( $hostname, $user, $password );
$nomeArquivo = "<ARQUIVO>.csv";
$dadosArray = [];

if (($h = fopen($nomeArquivo, "r")) !== FALSE)
{
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
    {
        $dadosArray[] = $data;
    }

    fclose($h);
}
if (!$connection) {
    error_log("Falha ao conectar no MySQL: " . mysqli_error($connection));
    die('Erro interno do servidor');
}

$db_select = mysqli_select_db($connection, $database);

if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($connection));
    die('Erro interno do servidor');
}

foreach ($dadosArray as $i => $dado) {
    if($i === 0) continue;

    $sql = "insert into `teste`.`produto` (`codigo`, `descricao`, `preco`) values (" . $dado[0] . "," . "'" . $dado[1] . "'" . "," . $dado[2] . ");";
    echo $sql;
    echo "\n";
    if ($connection->query($sql) === TRUE) {
        echo "SUCESSO";
      } else {
          echo 44;
        echo "ERRO: " . $sql . "<br>" . $connection->error;
      }
    echo "\n";
}

$connection->close();
?>
