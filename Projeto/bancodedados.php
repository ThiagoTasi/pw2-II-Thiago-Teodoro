<?php
// Configurações do banco de dados
$dsn = 'mysql:host=localhost;dbname=cadastro';
$username = 'root';
$password = '';

try{
    // Conexão com o banco de dados usando PDO
    $pdo = new PDO ($dsn,$username,$password);

    // Configura para lançar exceções em caso de erros
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
        $data_nascimento = $_POAT['data_nascimento'];
        $profissao = $_POST['profissao'];
        $nacionalidade = $_POST['nacionalidade'];
       

        // Prepara a consulta SQL
        $sql = "INSERT INTO lista (nome,endereco,cidade, bairro,estado,email,telefone,celular,cpf,genero data_nascimento,profissao,nacionalidade)
        VALUES (:nome, :endereco, :cidade, :bairro, :estado, :email, :telefone, :celular, :cpf, :genero, :data_nascimento, :profissao, :nacionalidade, )";

        // Prepara a declaração
        $stmt = $pdo->prepare($sql);

        // Associa os paramêtros com os valores
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
} catch(PDOException $e) {
    // Em caso de erro, exibe a mensagem de erro
    echo "Erro: " . $e->getMessage();
}
?>
<DOCTYPE html="html">
    <html lang="pt-BR">
        <head>
            <title>Formulário PHP PDO com Tailwind CSS</title>
            <link
                href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
                rel="stylesheet"></head>
            <body class="bg-gray-100">
                <div class="container mx-auto py-8">
                    <h2 class="text -2xl font-bold mb-4">Insira seus dados:</h2>
                    <form method="POST" class="max-w-lg">
                        <div class="mb-4">
                            <label for="nome" class="block text-gray-700">Nome:</label>
                            <input
                                type="text"
                                id="nome"
                                name="nome"
                                required="required"
                                class="form-input mt-1 block w-full"></div>

                            <div class="mb-4">
                                <label for="endereco" class="block text-gray-700">
                                    Endereco:</label>
                                <input
                                    type="text"
                                    id="Endereco"
                                    name="endereco"
                                    required="required"
                                    class="form-input mt-1 block w-full"></div>
    
                                <div class="mb-4">
                                    <label for="cidade" class="block text-gray-700">Cidade:</label>
                                    <input
                                        type="text"
                                        id="Cidade"
                                        name="cidade"
                                        required="required"
                                        class="form-input mt-1 block w-full"></div>
                        
                                    <div class="mb-4">
                                        <label for="bairro" class="block text-gray-700">Cidade:</label>
                                        <input
                                            type="text"
                                            id="Bairro"
                                            name="bairro"
                                            required="required"
                                            class="form-input mt-1 block w-full"></div>
                            
                                        <div class="mb-4">
                                        <label for="estado" class="block text-gray-700">Cidade:</label>
                                        <input
                                            type="text"
                                            id="Estado"
                                            name="estado"
                                            required="required"
                                            class="form-input mt-1 block w-full"></div>
                        
                                         <div class="mb-4">
                                        <label for="estado" class="block text-gray-700">Cidade:</label>
                                        <input
                                            type="text"
                                            id="Estado"
                                            name="estado"
                                            required="required"
                                            class="form-input mt-1 block w-full"></div>

                                        <div class="mb-4">
                                        <label for="email" class="block text-gray-700">Cidade:</label>
                                        <input
                                            type="text"
                                            id="Email"
                                            name="email"
                                            required="required"
                                            class="form-input mt-1 block w-full"></div>

                                        <div class="mb-4">
                                        <label for="telefone" class="block text-gray-700">Cidade:</label>
                                        <input
                                            type="num"
                                            id="Telefone"
                                            name="telefone"
                                            required="required"
                                            class="form-input mt-1 block w-full"></div>

                                        <div class="mb-4">
                                        <label for="celular" class="block text-gray-700">Cidade:</label>
                                        <input
                                            type="num"
                                            id="Celular"
                                            name="celular"
                                            required="required"
                                            class="form-input mt-1 block w-full"></div>

                                        <div class="mb-4">
                                        <label for="cpf" class="block text-gray-700">Cidade:</label>
                                        <input
                                            type="num"
                                            id="Cpf"
                                            name="cpf"
                                            required="required"
                                            class="form-input mt-1 block w-full"></div>

                                        <div class="mb-4">
                                        <label for="genero" class="block text-gray-700">Cidade:</label>
                                        <input
                                            type="text"
                                            id="Genero"
                                            name="genero"
                                            required="required"
                                            class="form-input mt-1 block w-full"></div>

                                        <div class="mb-4">
                                        <label for="data_nascimento" class="block text-gray-700">Cidade:</label>
                                        <input
                                            type="num"
                                            id="Data nascimento"
                                            name="data nascimento"
                                            required="required"
                                            class="form-input mt-1 block w-full"></div>

                                        <div class="mb-4">
                                        <label for="profissao" class="block text-gray-700">Cidade:</label>
                                        <input
                                            type="text"
                                            id="Profissao"
                                            name="prrofisao"
                                            required="required"
                                            class="form-input mt-1 block w-full"></div>

                                        <div class="mb-4">
                                        <label for="nacionalidade" class="block text-gray-700">Cidade:</label>
                                        <input
                                            type="text"
                                            id="Nacionalidade"
                                            name="nacionalidade"
                                            required="required"
                                            class="form-input mt-1 block w-full"></div>

                                            <button>
                                            type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white
    font-bold py-2 px-4 rounded">Enviar</button>
                                    </form>
                                </div>
                            </body>
                        </html>










                                                       

                                       
