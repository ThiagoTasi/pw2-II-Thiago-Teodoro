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


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Agenda</title>
</head>
<body class="bg-gray-100">
    <div class="p-3 mb-2 bg-gray-700 text-white container text-center rounded">
        <h2 class="text-2xl font-bold mb-4">Insira seus dados:</h2>
    </div>
    <div class="container mx-auto py-8">
        <form method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label for="nome" class="block text-gray-700 text-sm font-bold mb-2">Nome:</label>
                <input type="text" id="nome" name="nome" required class="border-2 border-gray-900" size="100">
            </div>
            <div class="mb-4">
                <label for="endereco" class="block text-gray-700 text-sm font-bold mb-2">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required class="border-2 border-gray-900" size="100">
            </div>
            <div class="mb-4">
                <label for="cidade" class="block text-gray-700 text-sm font-bold mb-2">Cidade:</label>
                <input type="text" id="cidade" name="cidade" required class="border-2 border-gray-900" size="100">
            </div>
            <div class="mb-4">
                <label for="bairro" class="block text-gray-700 text-sm font-bold mb-2">Bairro:</label>
                <input type="text" id="bairro" name="bairro" required class="border-2 border-gray-900" size="100">
            </div>
            <div class="mb-4">
                <label for="estado" class="block text-gray-700 text-sm font-bold mb-2">Estado:</label>
                <input type="text" id="estado" name="estado" required class="border-2 border-gray-900" size="100">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" required class="border-2 border-gray-900" size="100">
            </div>
            <div class="mb-4">
                <label for="telefone" class="block text-gray-700 text-sm font-bold mb-2">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required class="border-2 border-gray-900" size="100">
            </div>
            <div class="mb-4">
                <label for="celular" class="block text-gray-700 text-sm font-bold mb-2">Celular:</label>
                <input type="tel" id="celular" name="celular" required class="border-2 border-gray-900" size="100">
            </div>
            <div class="mb-4">
                <label for="cpf" class="block text-gray-700 text-sm font-bold mb-2">CPF:</label>
                <input type="text" id="cpf" name="cpf" required class="border-2 border-gray-900" size="100">
            </div>
            <div class="mb-4">
                <label for="genero" class="block text-gray-700 text-sm font-bold mb-2">Genero:</label>
                <input type="text" id="genero" name="genero" required class="border-2 border-gray-900" size="100">
            </div>
            <div class="mb-4">
                <label for="data_nascimento" class="block text-gray-700 text-sm font-bold mb-2">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" required class="border-2 border-gray-900" size="100">
            </div>
            <div class="mb-4">
                <label for="profissao" class="block text-gray-700 text-sm font-bold mb-2">Profissão:</label>
                <input type="text" id="profissao" name="profissao" required class="border-2 border-gray-900" size="100">
            </div>
            <div class="mb-4">
                <label for="nacionalidade" class="block text-gray-700 text-sm font-bold mb-2">Nacionalidade:</label>
                <input type="text" id="nacionalidade" name="nacionalidade" required class="border-2 border-gray-900" size="100">
            </div>
            <div class="flex items-center justify-between">
                <a href="crud.php">
                    <input type="submit" name="acao" id="acao" value="adicionar" formaction="crud.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" />
                    <input type="reset" id="acao" value="excluir" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" />
                    <input type="submit"
                </a>
            </div>
        </form>
    </div>
    <footer>
        
    </footer>
        
</body>
</html>