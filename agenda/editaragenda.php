<?php
$db = new mysqli('localhost', 'root', '', 'agenda');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $acao = isset($_POST['acao']) ? $_POST['acao'] : null;
    // echo $id;
   
    if ($acao === 'atualizar dado') {
        // Atualizar o nome, se o novo nome foi recebido
    if (isset($_POST['novo_nome'])) {
        $novoNome = trim($_POST['novo_nome']);
        $novoNome = filter_var($novoNome, FILTER_SANITIZE_STRING);

        if ($novoNome === '') {
            echo "Erro: Novo nome não pode ser vazio.";
            exit();
        }

        $sqlUpdateNome = "UPDATE dados SET nome = '$novoNome' WHERE id = '$id'";
        $resultUpdateNome = $db->query($sqlUpdateNome);

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

        $sqlUpdateEndereco = "UPDATE dados SET endereco = '$novoEndereco' WHERE id = '$id'";
        $resultUpdateEndereco = $db->query($sqlUpdateEndereco);

        if ($resultUpdateEndereco === false) {
            echo "Erro: Falha ao atualizar o endereco.";
            exit();
        }
    }

    // Atualizar o cidade, se a nova cidade foi recebida
    if (isset($_POST['nova_cidade'])) {
        $novaCidade = trim($_POST['nova_cidade']);
        $novaCidade = filter_var($novaCidade, FILTER_SANITIZE_STRING);

        if ($novaCidade === '') {
            echo "Erro: Nova cidade não pode ser vazia.";
            exit();
        }

        $sqlUpdateCidade = "UPDATE dados SET cidade = '$novaCidade' WHERE id = '$id'";
        $resultUpdateCidade = $db->query($sqlUpdateCidade);

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

        $sqlUpdateBairro = "UPDATE dados SET bairro = '$novoBairro' WHERE id = '$id'";
        $resultUpdateBairro = $db->query($sqlUpdateBairro);

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

        $sqlUpdateEstado = "UPDATE dados SET estado = '$novoEstado' WHERE id = '$id'";
        $resultUpdateEstado = $db->query($sqlUpdateEstado);

        if ($resultUpdateEstado === false) {
            echo "Erro: Falha ao atualizar o esatdo.";
            exit();
        }
    }
    // Atualizar o email, se o novo email foi recebido
    if (isset($_POST['novo_email'])) {
        $novoEmail = trim($_POST['novo_email']);
        $novoEmail = filter_var($novoEmail, FILTER_SANITIZE_STRING);

        if (!filter_var($novoEmail,FILTER_VALIDATE_EMAIL)) { 
            echo "Erro: Email inaválido.";
            exit();
        }

        $sqlUpdateEmail = "UPDATE dados SET email = '$novoEmail' WHERE id = '$id'";
        $resultUpdateEmail = $db->query($sqlUpdateEmail);

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

        $sqlUpdateTelefone = "UPDATE dados SET telefone = '$novoTelefone' WHERE id = '$id'";
        $resultUpdateTelefone = $db->query($sqlUpdateTelefone);

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

        $sqlUpdateCelular = "UPDATE dados SET celular = '$novoCelular' WHERE id = '$id'";
        $resultUpdateCelular = $db->query($sqlUpdateCelular);

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

        $sqlUpdateCpf = "UPDATE dados SET cpf = '$novoCpf' WHERE id = '$id'";
        $resultUpdateCpf = $db->query($sqlUpdateCpf);

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

        $sqlUpdateGenero = "UPDATE dados SET genero = '$novoGenero' WHERE id = '$id'";
        $resultUpdateGenero = $db->query($sqlUpdateGenero);

        if ($resultUpdateGenero === false) {
            echo "Erro: Falha ao atualizar o genero.";
            exit();
        }
    }
    // Atualizar a data nascimento, se a nova data nascimento foi recebido
    if (isset($_POST['nova_data_nascimento'])) {
        $novaData_nascimento = trim($_POST['nova_data_nascimento']);
        $novaData_nascimento = filter_var($novaData_nascimento, FILTER_SANITIZE_STRING);

        if ($novaData_nascimento === '') {
            echo "Erro: Nova data_nascimento não pode ser vazio.";
            exit();
        }

        $sqlUpdateData_nascimento = "UPDATE dados SET data_nascimento = '$novaData_nascimento' WHERE id = '$id'";
        $resultUpdateData_nascimento = $db->query($sqlUpdateData_nascimento);

        if ($resultUpdateData_nascimento === false) {
            echo "Erro: Falha ao atualizar a data_nascimento.";
            exit();
        }
    }
    // Atualizar a profissao, se a nova profissao foi recebida
    if (isset($_POST['nova_profissao'])) {
        $novaProfissao = trim($_POST['nova_profissao']);
        $novaProfissao = filter_var($novaProfissao, FILTER_SANITIZE_STRING);

        if ($novaProfissao === '') {
            echo "Erro: Nova profissao não pode ser vazia.";
            exit();
        }

        $sqlUpdateProfissao = "UPDATE dados SET profissao = '$novaProfissao' WHERE id = '$id'";
        $resultUpdateProfissao = $db->query($sqlUpdateProfissao);

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

        $sqlUpdateNacionalidade = "UPDATE dados SET nacionalidade = '$novaNacionalidade' WHERE id = '$id'";
        $resultUpdateNacionalidade = $db->query($sqlUpdateNacionalidade);

        if ($resultUpdateNacionalidade === false) {
            echo "Erro: Falha ao atualizar a nacionalidade.";
            exit();
        }
    }

    // Redirecionar após a atualização
    header('Location: agenda.php');
    exit();
}

if ($db->connect_error) {
    echo "Erro: Falha ao conectar ao banco de dados. " . $db->connect_error;
    exit();
}
    }
    

// Verificar se o ID foi recebido
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
} else {
    echo "Erro: ID nao recebido.";
    exit();
}

// Buscar dados atuais
$sqlDado = "SELECT nome,endereco,cidade,bairro,estado,email,telefone,celular,cpf,genero,data_nascimento,profissao,nacionalidade FROM dados WHERE id = $id";
$resultDado = $db->query($sqlDado);

if ($resultDado->num_rows == 0) {
    echo "Erro: Contato não encontrado no banco de dados.";
    exit();
}

$dado = $resultDado->fetch_assoc();
$nomeOriginal = $dado['nome'];
$enderecoOriginal = $dado['endereco'];
$cidadeOriginal = $dado['cidade'];
$bairroOriginal = $dado['bairro'];
$estadoOriginal = $dado['estado'];
$emailOriginal = $dado['email'];
$telefoneOriginal = $dado['telefone'];
$celularOriginal = $dado['celular'];
$cpfOriginal = $dado['cpf'];
$generoOriginal = $dado['genero'];
$data_nascimentoOriginal = $dado['data_nascimento'];
$profissaoOriginal = $dado['profissao'];
$nacionalidadeOriginal = $dado['nacionalidade'];

// Fechar a conexão com o banco de dados
$db->close();

// echo $id;
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>Editar Dado</title>
    </head>
    <body>
        <div class="dado">
            <h1 class="text-info bg-dark">Editar dado</h1>
            <form method="post" novalidate="novalidate">
                <input style="display: none" name="id" id="id" value="<?php echo $id; ?>">
                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        type="text"
                        id="novo_nome"
                        name="novo_nome"
                        value="<?php echo ($nomeOriginal); ?>"
                        required="required">
                    <label for="novo_nome" class="lbl_titulo">Nome:</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        type="text"
                        id="novo_endereco"
                        name="novo_endereco"
                        value="<?php echo ($enderecoOriginal); ?>"
                        required="required">
                    <label for="novo_endereco" class="lbl_titulo">Endereco:</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        type="text"
                        id="nova_cidade"
                        name="nova_cidade"
                        value="<?php echo($cidadeOriginal); ?>"
                        required="required">
                    <label for="nova_cidade" class="lbl_titulo">Cidade:</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        type="text"
                        id="novo_bairro"
                        name="novo_bairro"
                        value="<?php echo($bairroOriginal); ?>"
                        required="required">
                    <label for="novo_bairro" class="lbl_titulo">Bairro:</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        type="text"
                        id="novo_estado"
                        name="novo_estado"
                        value="<?php echo($estadoOriginal); ?>"
                        required="required">
                    <label for="novo_estado" class="lbl_titulo">Estado:</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        type="email"
                        id="novo_email"
                        name="novo_email"
                        value="<?php echo($emailOriginal); ?>"
                        required="required">
                    <label for="novo_email" class="lbl_titulo">Email:</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        type="text"
                        id="novo_telefone"
                        name="novo_telefone"
                        value="<?php echo($telefoneOriginal); ?>"
                        required="required">
                    <label for="novo_telefone" class="lbl_titulo">Telefone:</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        type="text"
                        id="novo_celular"
                        name="novo_celular"
                        value="<?php echo($celularOriginal); ?>"
                        required="required">
                    <label for="novo_celular" class="lbl_titulo">Celular:</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        type="text"
                        id="novo_cpf"
                        name="novo_cpf"
                        value="<?php echo($cpfOriginal); ?>"
                        required="required">
                    <label for="novo_cpf" class="lbl_titulo">Cpf:</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        type="text"
                        id="novo_genero"
                        name="novo_genero"
                        value="<?php echo($generoOriginal); ?>"
                        required="required">
                    <label for="novo_genero" class="lbl_titulo">Genero:</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        type="text"
                        id="nova_data_nascimento"
                        name="nova_data_nascimento"
                        value="<?php echo($data_nascimentoOriginal); ?>"
                        required="required">
                    <label for="nova_data_nascimento" class="lbl_titulo">Data_nascimento:</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        type="text"
                        id="nova_profissao"
                        name="nova_profissao"
                        value="<?php echo($profissaoOriginal); ?>"
                        required="required">
                    <label for="nova_profissao" class="lbl_titulo">Profissao:</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        type="text"
                        id="nova_nacionalidade"
                        name="nova_nacionalidade"
                        value="<?php echo($nacionalidadeOriginal); ?>"
                        required="required">
                    <label for="nova_nacionalidade" class="lbl_titulo">Nacionalidade:</label>
                </div>
                <div class="col-md-4">
                    <input
                        type="submit"
                        name="acao"
                        id="acao"
                        value="atualizar dado"
                        class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>