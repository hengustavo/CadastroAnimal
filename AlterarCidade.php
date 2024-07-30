<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alteração de Cidade</h1>
    <?php
    include('includes/conexao.php');
        echo "<p>Id: $id</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Estado: $estado</p>";
        $sql = "UPDATE cidade SET
                nome = '$nome',
                estado= '$estado'
                WHERE id = $id";
                $result = mysqli_query($con,$sql);
            if ($result)
            echo "Dados atualizados";
            else
            echo "Erro ao autalizar dados!\n".mysqli_error($con);
    ?>
    </form>
    
</body>
</html>