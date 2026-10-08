<?php
include "conexao.php";
$nome = "";
$email = "";
$area_interesse = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $area_interesse = $_POST["area_interesse"];

    if($nome == "" || $email == "" || $area_interesse == ""){
        return "ERRO";
    }
    else {
        $sql = "INSERT INTO hackaton(Nome, Email, Area_Interesse) VALUES ('$nome', '$email', '$area_interesse')";
        $conexao->query($sql);
        $nome = "";
        $email = "";
        $area_interesse = "";
    }
}

function consulta($conexao){
    return $conexao->query("SELECT * FROM hackaton");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Cadsatro Hackaton</title>
</head>

<body class="flex flex-col items-center justify-center w-full h-full py-6 bg-slate-200">
    <main class="flex justify-center items-center bg-white rounded-lg">

        <div class="flex flex-col justify-center items-center bg-teal-600 w-[400px] h-[420px] rounded-l-lg gap-4 p-4">

            <h1 class="text-4xl font-semibold text-white">Cadastrar Competidor</h1>

            <p class="text-white text-center">Preencha os dados abaixo pra registrar um novo competidor no Hackaton.</p>
        </div>

        <div class="flex flex-col justify-center items-center bg-white p-8 gap-6 rounded-r-lg">
            <div class="flex flex-col items-center">
                <h1 class="text-2xl text-teal-600 font-semibold">Cadastro Competidor</h1>
                <h3 class="">Informe os dados do competidor para continuar</h3>
            </div>

            <form action="index.php" method="POST" class="flex flex-col justify-center items-center gap-4">
                <input type="text" name="nome" placeholder="Nome competidor" class="bg-gray-200 text-teal-600 p-2 w-[450px] rounded-md">
                <input type="email" name="email" placeholder="E-mail" class="bg-gray-200 text-teal-600 p-2 w-[450px] rounded-md">
                <input type="text" name="area_interesse" placeholder="Área de interesse " class="bg-gray-200 text-teal-600 p-2 w-[450px] rounded-md">
                
                <div class="flex mt-4 gap-4">
                    <button type="reset" class="border-2 border-teal-600 text-teal-600 w-[150px] px-4 py-1 rounded-full transition duration-300 ease-in-out hover:bg-teal-600 hover:text-white">Limpar</button>
                    <button type="submit" class="bg-teal-600 text-white w-[200px] px-4 py-1 rounded-full transition duration-300 ease-in-out hover:border-2 border-teal-600 hover:text-teal-600 hover:bg-white">Cadastrar competidor</button>
                </div>
                
            </form>
        </div>

    </main>


    <table class="border-collapse border border-gray-300 w-full mt-6">
        <thead>
            <tr class="bg-teal-600 text-white">
                <th class="border border-gray-300 px-4 py-2">ID</th>
                <th class="border border-gray-300 px-4 py-2">Nome</th>
                <th class="border border-gray-300 px-4 py-2">E-mail</th>
                <th class="border border-gray-300 px-4 py-2">Área de Interesse</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                $resultado = consulta($conexao);

                while ($linha = $resultado->fetch_assoc()) {
            ?>
                <tr class="text-center hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">
                        <?php echo $linha["ID"]; ?>
                    </td>

                    <td class="border border-gray-300 px-4 py-2">
                        <?php echo $linha["Nome"]; ?>
                    </td>

                    <td class="border border-gray-300 px-4 py-2">
                        <?php echo $linha["Email"]; ?>
                    </td>

                    <td class="border border-gray-300 px-4 py-2">
                        <?php echo $linha["Area_Interesse"]; ?>
                    </td>
                </tr>
            <?php 
                } 
            ?>
        </tbody>
    </table>

</body>
</html>