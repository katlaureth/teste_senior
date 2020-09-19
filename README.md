# Teste Senior

## Passos

### Banco

* Criar banco de dados com o nome desejado
* Executar o script do arquivo tabelas.sql

### Gerador Dados CSV

* Com o path para o php.exe devidamente configurado, abrir a linha de comando na pasta raiz do projeto e executar: php gerador.php;
* O resultado esperado é um arquivo com o nome contendo "dados" e informações de data e hora da criação para gerar um arquivo de nome único.

### Importador

* Abrir o arquivo importador.php em um editor de texto;
* Alterar o valor da variável $user, substituindo <USUARIO> pelo username do banco de dados;
* Alterar o valor da variável $password, substituindo <SENHA> pela senha do usuário do banco de dados;
* Alterar o valor da variável $database, substituindo <BANCO> pelo nome do banco de dados;
* Alterar o valor da variável $database, substituindo <BANCO> pelo nome do banco de dados;
* Alterar o valor da variável $hostname, substituindo <SERVIDOR> pelo nome do servidor do banco de dados (no meu caso, usei "localhost");
* Alterar o valor da variável $nomeArquivo, substituindo <ARQUIVO> pelo nome do arquivo gerado pelo gerador.php;
* Com o path para o php.exe devidamente configurado, abrir a linha de comando na pasta raiz do projeto e executar: php importador.php;
* Após o termino da execução, o resultado esperado é 10 mil registros na tabela "produto".

#### Respostas para parte 4 e 6
Ambas estão no arquivo respostas.docx
___