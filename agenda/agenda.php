<?php
$db = new mysqli('localhost', 'root', '', 'agenda');

function getDados() {
    global $db;
    $sql = "SELECT * FROM dados";
    $resultado = $db->query($sql);
    $dados = [];
    while ($row = $resultado->fetch_assoc()) {
        $dados[] = $row;
    }
    return $dados;
}
// function adicionarDado

function adicionarDado($nome,$endereco,$cidade,$bairro,$estado,$email,$telefone,$celular,$cpf,$genero,$data_nascimento,$profissao,$nacionalidade) {
    global $db;

    $sql = "INSERT INTO dados(nome,endereco,cidade,bairro,estado,email,telefone,celular,cpf,genero,data_nascimento,profissao,nacionalidade) VALUES('$nome','$endereco','$cidade','$bairro','$estado','$email','$telefone','$celular','$cpf','$genero','$data_nascimento','$profissao','$nacionalidade')"; 

    if ($nome != '' && $endereco != '' && $cidade != '' && $bairro != '' && $estado != '' && $email != '' && $telefone != '' && $celular != '' && $cpf != '' && $genero != '' && $data_nascimento != '' && $profissao != '' && $nacionalidade != '') {
        $db->query($sql);
    }
}

// function editarDado

function editarDado($id,$nome,$endereco,$cidade,$bairro,$estado,$email,$telefone,$celular,$cpf,$genero,$data_nascimento,$profissao,$nacionalidade) {
    global $db;
    $sql = "UPDATE dados SET nome ='$nome',endereco='$endereco',cidade='$cidade',bairro='$bairro',estado='$estado',email='$email',telefone='$telefone',celular='$celular',cpf='$cpf',genero='$genero',data_nascimento='$data_nascimento',profissao='$profissao',nacionalidade='$nacionalidade' WHERE id = '$id'";
    $db->query($sql);
}

// function excluirDado

function excluirDado($id){ 
    global $db;
    $sql = "DELETE FROM dados WHERE id = '$id'";
    $db->query($sql);

}

$acao = isset($_GET['acao'])? $_GET['acao'] : null;
$id = isset($_GET['id']) ? intval($_GET['id']): 0;
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : null;
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : null;
$estado = isset($_POST['estado']) ? $_POST['estado'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
$celular = isset($_POST['celular']) ? $_POST['celular'] : null;
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
$genero = isset($_POST['genero']) ? $_POST['genero'] : null;
$data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : null;
$profissao = isset($_POST['profissao']) ? $_POST['profissao'] : null;
$nacionalidade = isset($_POST['nacionalidade']) ? $_POST['nacionalidade'] : null;

if($acao === 'adicionar') {
    adicionarDado($nome,$endereco,$cidade,$bairro,$estado,$email,$telefone,$celular,$cpf,$genero,$data_nascimento,$profissao,$nacionalidade);
    header('Location: agenda.php');
    exit();

} elseif ($acao === 'editar') {
    $id = intval($_GET['id']);
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
    //editarDado($id, $nome,$endereco,$cidade,$bairro,$estado,$email,$telefone,$celular,$cpf,$genero,$data_nascimento,$profissao,$nacionalidade); // utilizei a nova function 
    header("Location: editaragenda.php?id=$id&nome=" . urlencode($nome) . "&endereco=" . urlencode($endereco) . "&cidade=" . urlencode($cidade) . "&bairro=" . urlencode($bairro) . "&estado=" . urlencode($estado) . "&email=" . urlencode($email) . "&telefone=" . urlencode($telefone) . "&celular=" . urlencode($celular) . "&cpf=" . urlencode($cpf) . "&genero=" . urlencode($genero) . "&data_nascimento=" . urlencode($data_nascimento) . "&profissao=" . urlencode($profissao) . "&nacionalidade=" . urlencode($nacionalidade));
    exit();

} elseif ($acao === 'excluir') {
    excluirDado($id); // utilizei a nova function 
    header('Location: agenda.php');
    exit();
}

$dados = getDados();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
<div class="conteudo">
    <h1 class="text-info.bg-secondary">Agenda</h1>
    
    <form action="?acao=adicionar" method="post" novalidate="novalidate">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
            <label for="nome" class="lbl_titulo">Nome:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereco" required>
            <label for="endereco" class="lbl_titulo">Endereco:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
            <label for="cidade" class="lbl_titulo">Cidade:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" required>
            <label for="Bairro" class="lbl_titulo">Bairro:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" required>
            <label for="Estado" class="lbl_titulo">Estado:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            <label for="Email" class="lbl_titulo">Email:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Numero" required>
            <label for="telefone" class="lbl_titulo">Telefone:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="celular" name="celular" placeholder="Numero" required>
            <label for="celular" class="lbl_titulo">Celular:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Cpf" required>
            <label for="cpf" class="lbl_titulo">Cpf:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="genero" class="form-control" id="genero" name="genero" placeholder="Genero" required>
            <label for="genero" class="lbl_titulo">Genero:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Data_nascimento" required>
            <label for="data_nascimento" class="lbl_titulo">Data_nascimento:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Profissao" required>
            <label for="profissao" class="lbl_titulo">Profissao:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="Nacionalidade" required>
            <label for="nacionalidade" class="lbl_titulo">Nacionalidade:</label>
        </div>
        <div>
            <input type="submit" name="acao" id="acao" value="adicionar">
            <input type="reset" value="limpar">
        </div>
        </form>
    <br>
    <div id="style_table">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereco</th>
                <th scope="col">Cidade</th>
                <th scope="col">Bairro</th>
                <th scope="col">Estado</th>
                <th scope="col">Email</th>
                <th scope="col">Telefona</th>
                <th scope="col">Celular</th>
                <th scope="col">Cpf</th>
                <th scope="col">Genero</th>
                <th scope="col">Data_nascimento</th>
                <th scope="col">Profissao</th>
                <th scope="col">Nacionalidade</th>
                <th scope="col">Ações</th>
</tr>
        </thead>
        <tbody>
            <?php foreach ($dados as $dado): ?>
            <tr>
                <td><?php echo $dado['id']; ?></td>
                <td><?php echo $dado['nome']; ?></td>
                <td><?php echo $dado['endereco']; ?></td>
                <td><?php echo $dado['cidade']; ?></td>
                <td><?php echo $dado['bairro']; ?></td>
                <td><?php echo $dado['estado']; ?></td>
                <td><?php echo $dado['email']; ?></td>
                <td><?php echo $dado['telefone']; ?></td>
                <td><?php echo $dado['celular']; ?></td>
                <td><?php echo $dado['cpf']; ?></td>
                <td><?php echo $dado['genero']; ?></td>
                <td><?php echo $dado['data_nascimento']; ?></td>
                <td><?php echo $dado['profissao']; ?></td>
                <td><?php echo $dado['nacionalidade']; ?></td>
                <td>
                    <a
                    href="?acao=editar&id=<?php echo $dado['id']; ?>&nome=<?php echo urlencode($dado['nome']); ?>&endereco=<?php echo urlencode($dado['endereco']); ?>&cidade=<?php echo urlencode($dado['cidade']);?>&bairro=<?php echo urlencode($dado['bairro']);?>&estado=<?php echo urlencode($dado['estado']);?>&email=<?php echo urlencode($dado['email']);?>&telefone=<?php echo urlencode($dado['telefone']);?>&celular=<?php echo urlencode($dado['celular']);?>&cpf=<?php echo urlencode($dado['cpf']);?>&genero=<?php echo urlencode($dado['genero']);?>&data_nascimento=<?php echo urlencode($dado['data_nascimento']);?>&profissao=<?php echo urlencode($dado['profissao']);?>&nacionalidade=<?php echo urlencode($dado['nacionalidade']); ?>;" 
                    class="btn btn-primary"
                    >
                        Editar
                    </a>

                    <a href="?acao=excluir&id=<?php echo $dado['id']; ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
                    