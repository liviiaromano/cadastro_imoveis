<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gestão de Imóveis</title>
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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $imovel = new Imoveis();
        $imovel->adicionarImoveis($_POST['nome'], $_POST['localizacao'], $_POST['valor'], $_POST['tipo']);
        echo "Imóvel adicionado com sucesso!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Imóvel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Cadastrar Imóveis</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>
        <label>Localização</label>
        <input type="text" name="localizacao" required><br>
        <label>Valor</label>
        <input type="text" name="valor" required><br>
        <label>Tipo</label>
        <input type="text" name="tipo" required><br>        
        <button type="submit">Cadastrar Imóvel</button>
    </form>  
</body>

<footer>
    <p>&copy; <?php echo date('Y'); ?> Gestão de Imóveis. Todos os direitos reservados.</p>
</footer>  