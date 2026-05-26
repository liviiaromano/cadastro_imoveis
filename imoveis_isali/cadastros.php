<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Imóvel</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<header>
    <nav>
        <ul class="menu">
            <li><a href="index.php">Início</a></li>
            <li><a href="imoveis.php">Cadastrar Imóveis</a></li>
            <li><a href="cadastros.php">Imóveis Cadastrados</a></li>
            <li><a href="localização.php">Localização</a></li>
                
        </ul>
    </nav>
</header>

<?php
    require_once 'classes/Imoveis.php';

    $imovel = new Imoveis();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $imovel = new Imoveis();
        $imovel->adicionarImoveis($_POST['nome'], $_POST['localizacao'], $_POST['valor'], $_POST['tipo']);
        echo "Imóvel cadastrado com sucesso!";
    }

        $lista = $imovel->listarImovel(); 

?>

<section class="lista-section">
    <h2>Imóveis cadastrados</h2>
        <?php if (empty($lista)): ?>
            <p>Nenhum imóvel cadastrado.</p>
        <?php else: ?>
            <table class="tabela-dados">
                <thead>
                    <tr>
                            <th>Nome</th>
                            <th>Localizacao</th>
                            <th>Valor</th>
                            <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($lista as $f): ?>
                    <tr>
                            <td><strong><?php echo htmlspecialchars($f['nome']); ?></strong></td>
                            <td><?php echo htmlspecialchars($f['localizacao']); ?></td>
                            <td><?php echo htmlspecialchars($f['valor']); ?></td>
                            <td><?php echo htmlspecialchars($f['tipo']); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
</section>


<footer>
    <p>&copy; <?php echo date('Y'); ?> Gestão de Imóveis. Todos os direitos reservados.</p>
</footer> 