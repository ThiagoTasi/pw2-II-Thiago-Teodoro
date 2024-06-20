<?php
$bd = new mysqli('localhost', 'root', '', 'agenda');

if ($bd->connect_error) {
    echo "Erro: Falha ao conectar ao banco de dados. " . $bd->connect_error;
    exit();
}

// Verificar se o ID foi recebido e validar como inteiro
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
} else {
    echo "Erro: ID nao recebido.";
    exit();
}

// Buscar o nome, telefone e email atuais do contato
$sqlContato = "SELECT nome, endereco, cidade, bairro, estado, email, telefone, celular, cpf, genero, data_nascimento, profissao, nacionalidade FROM contatos WHERE id = $id";
$resultContato = $bd->query($sqlContato);

if ($resultContato->num_rows == 0) {
    echo "Erro: Contato não encontrado no banco de dados.";
    exit();
}

$contato = $resultContato->fetch_assoc();
$nomeOriginal = $contato['nome'];
$enderecoOriginal = $contato['endereco'];
$cidadeOriginal = $contato['cidade'];
$bairroOriginal = $contato['bairro'];
$estadoOriginal = $contato['estado'];
$emailOriginal = $contato['email'];
$telefoneOriginal = $contato['telefone'];
$celularOriginal = $contato['celular'];
$cpfOriginal = $contato['cpf'];
$generoOriginal = $contato['genero'];
$data_nascimentoOriginal = $contato['data_nascimento'];
$profissaoOriginal = $contato['profissao'];
$nacionalidadeOriginal = $contato['nacionalidade'];




// validar e atualizar os dados no banco de dados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    // Atualizar o nome, se o novo nome foi recebido
    if (isset($_POST['novo_nome'])) {
        $novoNome = trim($_POST['novo_nome']);
        $novoNome = filter_var($novoNome, FILTER_SANITIZE_STRING);

        if ($novoNome === '') {
            echo "Erro: Novo nome não pode ser vazio.";
            exit();
        }

        $sqlUpdateNome = "UPDATE contatos SET nome = '$novoNome' WHERE id = $id";
        $resultUpdateNome = $bd->query($sqlUpdateNome);

        if ($resultUpdateNome === false) {
            echo "Erro: Falha ao atualizar o nome.";
            exit();
        }
    }

    // Atualizar o endereco, se o novo endereco foi recebido
    if (isset($_POST['novo_endereco'])) {
        $novoEndereco = trim($_POST['novo_endereco']);
        $novoEndereco = filter_var($novoEndereco, FILTER_SANITIZE_STRING);

        if ($novoEndereco === '') {
            echo "Erro: Novo endereco não pode ser vazio.";
            exit();
        }

        $sqlUpdateEndereco = "UPDATE contatos SET endereco = '$novoEndereco' WHERE id = $id";
        $resultUpdateEndereco = $bd->query($sqlUpdateTelefone);

        if ($resultUpdateEndereco === false) {
            echo "Erro: Falha ao atualizar o endereco.";
            exit();
        }
    }

    // Atualizar o cidade, se a nova cidade foi recebida
    if (isset($_POST['nova_cidade'])) {
        $novaCidade = trim($_POST['nova_cidade']);
        $novaCidade = filter_var($novaCidade, FILTER_SANITIZE_EMAIL);

        if (!filter_var($novaCidade, FILTER_VALIDATE_EMAIL)) {
            echo "Erro: Cidade inválida.";
            exit();
        }

        $sqlUpdateCidade = "UPDATE contatos SET cidade = '$novaCidade' WHERE id = $id";
        $resultUpdateCidade = $bd->query($sqlUpdateCidade);

        if ($resultUpdateCidade === false) {
            echo "Erro: Falha ao atualizar a cidade.";
            exit();
        }
    }
    // Atualizar o bairro, se o novo bairro foi recebido
    if (isset($_POST['novo_bairro'])) {
        $novoBairro = trim($_POST['novo_bairro']);
        $novoBairro = filter_var($novoBairro, FILTER_SANITIZE_STRING);

        if ($novoBairro === '') {
            echo "Erro: Novo bairro não pode ser vazio.";
            exit();
        }

        $sqlUpdateBairro = "UPDATE contatos SET nome = '$novoBairro' WHERE id = $id";
        $resultUpdateBairro = $bd->query($sqlUpdateBairro);

        if ($resultUpdateBairro === false) {
            echo "Erro: Falha ao atualizar o bairro.";
            exit();
        }
    }
    // Atualizar o estado, se o novo estado foi recebido
    if (isset($_POST['novo_estado'])) {
        $novoEstado = trim($_POST['novo_estado']);
        $novoEstado = filter_var($novoEstado, FILTER_SANITIZE_STRING);

        if ($novoEstado === '') {
            echo "Erro: Novo estado não pode ser vazio.";
            exit();
        }

        $sqlUpdateEstado = "UPDATE contatos SET nome = '$novoEstado' WHERE id = $id";
        $resultUpdateEstado = $bd->query($sqlUpdateEstado);

        if ($resultUpdateEstado === false) {
            echo "Erro: Falha ao atualizar o esatdo.";
            exit();
        }
    }
    // Atualizar o email, se o novo email foi recebido
    if (isset($_POST['novo_email'])) {
        $novoEmail = trim($_POST['novo_email']);
        $novoEmail = filter_var($novoEmail, FILTER_SANITIZE_STRING);

        if ($novoEmail === '') {
            echo "Erro: Novo email não pode ser vazio.";
            exit();
        }

        $sqlUpdateEmail = "UPDATE contatos SET nome = '$novoEmail' WHERE id = $id";
        $resultUpdateEmail = $bd->query($sqlUpdateEmail);

        if ($resultUpdateEmail === false) {
            echo "Erro: Falha ao atualizar o email.";
            exit();
        }
    }
    // Atualizar o telefone, se o novo telefone foi recebido
    if (isset($_POST['novo_telefone'])) {
        $novoTelefone = trim($_POST['novo_telefone']);
        $novoTelefone = filter_var($novoTelefone, FILTER_SANITIZE_STRING);

        if ($novoTelefone === '') {
            echo "Erro: Novo telefone não pode ser vazio.";
            exit();
        }

        $sqlUpdateTelefone = "UPDATE contatos SET nome = '$novoTelefone' WHERE id = $id";
        $resultUpdateTelefone = $bd->query($sqlUpdateTelefone);

        if ($resultUpdateTelefone === false) {
            echo "Erro: Falha ao atualizar o telefone.";
            exit();
        }
    }
    // Atualizar o celular, se o novo celular foi recebido
    if (isset($_POST['novo_celular'])) {
        $novoCelular = trim($_POST['novo_celular']);
        $novoCelular = filter_var($novoCelular, FILTER_SANITIZE_STRING);

        if ($novoCelular === '') {
            echo "Erro: Novo celular não pode ser vazio.";
            exit();
        }

        $sqlUpdateCelular = "UPDATE contatos SET nome = '$novoCelular' WHERE id = $id";
        $resultUpdateCelular = $bd->query($sqlUpdateCelular);

        if ($resultUpdateCelular === false) {
            echo "Erro: Falha ao atualizar o celular.";
            exit();
        }
    }
    // Atualizar o cpf, se o novo cpf foi recebido
    if (isset($_POST['novo_cpf'])) {
        $novoCpf= trim($_POST['novo_cpf']);
        $novoCpf = filter_var($novoCpf, FILTER_SANITIZE_STRING);

        if ($novoCpf === '') {
            echo "Erro: Novo cpf não pode ser vazio.";
            exit();
        }

        $sqlUpdateCpf = "UPDATE contatos SET nome = '$novoCpf' WHERE id = $id";
        $resultUpdateCpf = $bd->query($sqlUpdateCpf);

        if ($resultUpdateCpf === false) {
            echo "Erro: Falha ao atualizar o cpf.";
            exit();
        }
    }
    // Atualizar o genero, se o novo genero foi recebido
    if (isset($_POST['novo_genero'])) {
        $novoGenero = trim($_POST['novo_genero']);
        $novoGenero = filter_var($novoGenero, FILTER_SANITIZE_STRING);

        if ($novoGenero === '') {
            echo "Erro: Novo genero não pode ser vazio.";
            exit();
        }

        $sqlUpdateGenero = "UPDATE contatos SET nome = '$novoGenero' WHERE id = $id";
        $resultUpdateGenero = $bd->query($sqlUpdateGenero);

        if ($resultUpdateGenero === false) {
            echo "Erro: Falha ao atualizar o genero.";
            exit();
        }
    }
    // Atualizar a data nascimento, se a nova data nascimento foi recebido
    if (isset($_POST['nova_data_nascimento'])) {
        $novaDta_nascimento = trim($_POST['novo_data_nascimento']);
        $novaData_nascimento = filter_var($novoData_nascimento, FILTER_SANITIZE_STRING);

        if ($novaData_nascimento === '') {
            echo "Erro: Nova data_nascimento não pode ser vazio.";
            exit();
        }

        $sqlUpdateData_nascimento = "UPDATE contatos SET nome = '$novaData_nascimento' WHERE id = $id";
        $resultUpdateDta_nascimento = $bd->query($sqlUpdateDta_nascimento);

        if ($resultUpdateData_nascimento === false) {
            echo "Erro: Falha ao atualizar a data_nascimento.";
            exit();
        }
    }
    // Atualizar a profissao, se a nova profissao foi recebido
    if (isset($_POST['nova_profissao'])) {
        $novaProfissao = trim($_POST['nova_profissao']);
        $novaProfissao = filter_var($novoProfissao, FILTER_SANITIZE_STRING);

        if ($novaProfissao === '') {
            echo "Erro: Nova profissao não pode ser vazia.";
            exit();
        }

        $sqlUpdateProfissao = "UPDATE contatos SET nome = '$novaProfissao' WHERE id = $id";
        $resultUpdateProfissao = $bd->query($sqlUpdateProfissao);

        if ($resultUpdateProfissao === false) {
            echo "Erro: Falha ao atualizar a profissao.";
            exit();
        }
    }
    // Atualizar a nacionalidade, se a nova nacionalidade foi recebida
    if (isset($_POST['nova_nacionalidade'])) {
        $novaNacionalidade = trim($_POST['nova_nacionalidade']);
        $novaNacionalidade = filter_var($novaNacionalidade, FILTER_SANITIZE_STRING);

        if ($novaNacionalidade === '') {
            echo "Erro: Nova nacionalidade não pode ser vazia.";
            exit();
        }

        $sqlUpdateNacionalidade = "UPDATE contatos SET nome = '$novaNacionalidade' WHERE id = $id";
        $resultUpdateNacionalidade = $bd->query($sqlUpdateNacionalidade);

        if ($resultUpdateNacionalidade === false) {
            echo "Erro: Falha ao atualizar a nacionalidade.";
            exit();
        }
    }


    // Redirecionar após a atualização
    header('Location: agenda.php');
    exit();
}

// Fechar a conexão com o banco de dados
$bd->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Editar Contato</title>
    </head>
    <body>
        <h1>Editar Contato</h1>
        <form method="post">
            <div>
                <label for="novo_nome">Nome:</label>
                <input
                    type="text"
                    id="novo_nome"
                    name="novo_nome"
                    value="<?php echo htmlspecialchars($nomeOriginal); ?>"
                    required="required">
            </div>
            <div>
                <label for="novo_endereco">Endereco:</label>
                <input
                    type="text"
                    id="novo_endereco"
                    name="novo_endereco"
                    value="<?php echo htmlspecialchars($enderecoOriginal); ?>"
                    required="required">
            </div>
            <div>
                <label for="nova_cidade">Cidade:</label>
                <input
                    type="text"
                    id="nova_cidade"
                    name="nova_cidade"
                    value="<?php echo htmlspecialchars($cidadeOriginal); ?>"
                    required="required">
            </div>
            <div>
                <label for="novo_bairro">Bairro:</label>
                <input
                    type="text"
                    id="novo_bairro"
                    name="novo_bairro"
                    value="<?php echo htmlspecialchars($bairroOriginal); ?>"
                    required="required">
            </div>
            <div>
                <label for="novo_estado">Estado:</label>
                <input
                    type="text"
                    id="novo_estado"
                    name="novo_estado"
                    value="<?php echo htmlspecialchars($estadoOriginal); ?>"
                    required="required">
            </div>
            <div>
                <label for="novo_email">Email:</label>
                <input
                    type="text"
                    id="novo_email"
                    name="novo_email"
                    value="<?php echo htmlspecialchars($emailOriginal); ?>"
                    required="required">
            </div>
            <div>
                <label for="novo_telefone">Telefone:</label>
                <input
                    type="text"
                    id="novo_telefone"
                    name="novo_telefone"
                    value="<?php echo htmlspecialchars($telefoneOriginal); ?>"
                    required="required">
            </div>
            <div>
                <label for="novo_celular">Celular:</label>
                <input
                    type="text"
                    id="novo_celular"
                    name="novo_celular"
                    value="<?php echo htmlspecialchars($celularOriginal); ?>"
                    required="required">
            </div>
            <div>
                <label for="novo_cpf">Cpf:</label>
                <input
                    type="text"
                    id="novo_cpf"
                    name="novo_cpf"
                    value="<?php echo htmlspecialchars($cpfOriginal); ?>"
                    required="required">
            </div>
            <div>
                <label for="novo_genero">Genero:</label>
                <input
                    type="text"
                    id="novo_genero"
                    name="novo_genero"
                    value="<?php echo htmlspecialchars($generoOriginal); ?>"
                    required="required">
            </div>
            <div>
                <label for="nova_data_nascimento">Data_nascimento:</label>
                <input
                    type="text"
                    id="nova_data_nascimento"
                    name="nova_data_nascimento"
                    value="<?php echo htmlspecialchars($data_nascimentoOriginal); ?>"
                    required="required">
            </div>
            <div>
                <label for="nova_profissao">Profissao:</label>
                <input
                    type="text"
                    id="nova_profissao"
                    name="nova_profissao"
                    value="<?php echo htmlspecialchars($profissaoOriginal); ?>"
                    required="required">
            </div>
            <div>
                <label for="nova_nacionalidade">Nacionalidade:</label>
                <input
                    type="text"
                    id="nova_nacionalidade"
                    name="nova_nacionalidade"
                    value="<?php echo htmlspecialchars($nacionalidadeOriginal); ?>"
                    required="required">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit">Atualizar Contato</button>
        </form>
    </body>
</html>