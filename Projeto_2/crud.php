<?php
// Conectar ao banco de dados
$db = new mysqli('localhost', 'root', '', 'agenda');

// Funções para CRUD
function getContatos() {
    global $db;
    $sql ="SELECT * FROM agenda";
    $result = $db->query($sql);
    $contatos = [];
    while ($row = $result->fetch_assoc()) {
        $contatos[] = $row;
    }
    return $contatos;
}

function adicionarContato($nome,$endereco,$cidade,$bairro,$estado,$email,$telefone,$celular,$cpf,$genero,$data_nascimento,$profissao,$nacionalidade){
    global $db;
    $sql = "INSERT INTO agenda(nome,endereco,cidade,bairro,estado,email,telefone,celular,cpf,genero,data_nascimento,profissao,nacionalidade) VALUES('$nome','$endereco','$cidade','$bairro','$estado','$email','$telefone','$celular','$cpf','$genero','$data_nascimento','$profissao','$nacionalidade')";
    $db->query($sql);
}

function editarContato($id,$nome,$endereco,$cidade,$bairro,$estado,$email,$telefone,$celular,$cpf,$genero,$data_nascimento,$profissao,$nacionalidade) {
    global $db;
    $sql = "UPDATE contatos SET nome ='$nome',endereco='$endereco',cidade='$cidade',bairro='$bairro',estado='$estado',email='$email',telefone='$telefone',celular='$celular',cpf='$cpf',genero='$genero',data_nascimento='$data_nascimento',profissao='$profissao',nacionalidade='$nacionalidade';WHERE id = $id";
    $db->query($sql);
}

function excluirContato($id) {
    global $db;
    $sql = "DELETE FROM contatos WHERE id = $id";
    $db->query($sql);
}

//Açoes do CRUD
$acao = isset($_POST['acao']) ? $_POST['acao'] : '';
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : '';
$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : '';
$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : '';
$estado = isset($_POST['estado']) ? $_POST['estado'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
$celular = isset($_POST['celular']) ? $_POST['celular'] : '';
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$genero = isset($_POST['genero']) ? $_POST['genero'] : '';
$data_nascimento = isset($_POST['data_nascimento']) ? $_POST['data_nascimento'] : '';
$profissao = isset($_POST['profissao']) ? $_POST['profissao'] : '';
$nacionalidade = isset($_POST['nacionalidade']) ? $_POST['nacionalidade'] : '';
 
if($acao === 'adicionar') {
    adicionarContato($nome,$endereco,$cidade,$bairro,$estado,$email,$telefone,$celular,$cpf,$genero,$data_nascimento,$profissao,$nacionalidade);
    header('Location: index.php');
    exit();
} elseif ($acao === 'editar') {
    // $id = intval($_POST['id']);
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
    editarContato($id, $nome,$endereco,$cidade,$bairro,$estado,$email,$telefone,$celular,$cpf,$genero,$data_nascimento,$profissao,$nacionalidade); // utilizei a nova function criada
    header("Location: editagenda.php?id=$id&nome=" . urlencode($nome) . "&endereco=" . urlencode($endereco) . "&cidade=" . urlencode($cidade),"&bairro=" . urlencode($bairro),"&estado=" . urlencode($estado),"&email=" . urlencode($email),"&telefone=" . urlencode($telefone),"&celular=" . urlencode($celular),"&cpf=" . urlencode($cpf),"&genero=" . urlencode($genero),"&data_nascimento=" . urlencode($data_nascimento),"&profissao=" . urlencode($profissao),"&nacionalidade=" . urlencode($nacionalidade));
    exit();
} elseif ($acao === 'excluir') {
    excluirContato($id); // utilizei a nova function criada 
    header('Location: agenda.php');
    exit();
}



//Obter todos os nomes
$contatos = getContatos();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Agenda</title>
</head>
<body>
</head>

<body class="bg-gray-100">
    <div class="p-3 mb-2 bg-gray-700 text-white container text-center rounded">
        <h2 class="text-2xl font-bold mb-4">Insira seus dados:</h2>
    </div>
    <div class="container mx-auto py-8">
        
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Enviar</button>
            </div>
        </form>
    </div>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereco</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Estado</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>Cpf</th>
                <th>Genero</th>
                <th>Data_nascimento</th>
                <th>Profissao</th>
                <th>Nacionalidade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contatos as $contato): ?>
            <tr>
                <td><?php echo $contato['id']; ?></td>
                <td><?php echo $contato['nome']; ?></td>
                <td><?php echo $contato['endereco']; ?></td>
                <td><?php echo $contato['cidade']; ?></td>
                <td><?php echo $contato['bairro']; ?></td>
                <td><?php echo $contato['estado']; ?></td>
                <td><?php echo $contato['email']; ?></td>
                <td><?php echo $contato['telefone']; ?></td>
                <td><?php echo $contato['celular']; ?></td>
                <td><?php echo $contato['cpf']; ?></td>
                <td><?php echo $contato['genero']; ?></td>
                <td><?php echo $contato['data_nascimento']; ?></td>
                <td><?php echo $contato['profissao']; ?></td>
                <td><?php echo $contato['nacionalidade']; ?></td>
                <td>
                    <a href="?acao=editar&id=<?php echo $contato['id']; ?>&nome=<?php echo urlencode($contato['nome']); ?>&endereco=<?php echo urlencode($contato['endereco']); ?>&cidade=<?php echo urlencode($contato['cidade']);?>&bairro=<?php echo urlencode($contato['bairro']);?>&estado=<?php echo urlencode($contato['estado']);?>&email=<?php echo urlencode($contato['email']);?>&telefone=<?php echo urlencode($contato['telefone']);?>&celular=<?php echo urlencode($contato['celular']);?>&cpf=<?php echo urlencode($contato['cpf']);?>&genero=<?php echo urlencode($contato['genero']);?>&data_nascimento=<?php echo urlencode($contato['data_nascimento']);?>&profissao=<?php echo urlencode($contato['profissao']);?>&nacionalidade=<?php echo urlencode($contato['nacionalidade']); ?>;" class="btn btn-primary">Editar</a>
                    <a href="?acao=excluir&id=<?php echo $contato['id']; ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>