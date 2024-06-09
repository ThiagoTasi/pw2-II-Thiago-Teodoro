<?php
// Configurações do banco de dados
$dsn = 'mysql:host=localhost;dbname=agenda';
$username = 'root';
$password = '';

try {
    // Conexão com o banco de dados usando PDO
    $pdo = new PDO($dsn, $username, $password);

    // Configura para lançar exceções em caso de erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verifica se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtém os dados do formulário
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $estado = $_POST['estado'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];
        $cpf = $_POST['cpf'];
        $genero = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $profissao = $_POST['profissao'];
        $nacionalidade = $_POST['nacionalidade'];

        // Prepara a consulta SQL
        $sql = "INSERT INTO agenda (nome, endereco, cidade, bairro, estado, email, telefone, celular, cpf, genero, data_nascimento, profissao, nacionalidade)
                VALUES (:nome, :endereco, :cidade, :bairro, :estado, :email, :telefone, :celular, :cpf, :genero, :data_nascimento, :profissao, :nacionalidade)";

        // Prepara a declaração
        $stmt = $pdo->prepare($sql);

        // Associa os parâmetros com os valores
        $stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindValue(':endereco', $endereco, PDO::PARAM_STR);
        $stmt->bindValue(':cidade', $cidade, PDO::PARAM_STR);
        $stmt->bindValue(':bairro', $bairro, PDO::PARAM_STR);
        $stmt->bindValue(':estado', $estado, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':telefone', $telefone, PDO::PARAM_STR);
        $stmt->bindValue(':celular', $celular, PDO::PARAM_STR);
        $stmt->bindValue(':cpf', $cpf, PDO::PARAM_STR);
        $stmt->bindValue(':genero', $genero, PDO::PARAM_STR);
        $stmt->bindValue(':data_nascimento', $data_nascimento, PDO::PARAM_STR);
        $stmt->bindValue(':profissao', $profissao, PDO::PARAM_STR);
        $stmt->bindValue(':nacionalidade', $nacionalidade, PDO::PARAM_STR);

        // Executa a consulta
        $stmt->execute();

        echo "Dados inseridos com sucesso!";
    }
} catch (PDOException $e) {
    // Em caso de erro, exibe a mensagem de erro
    echo "Erro: " . $e->getMessage();
}
?>










                                                       

                                       
