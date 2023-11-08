<!-- pagina onde o cliente faz a reclamação sobre a empresa desejada -->

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho-Faculdade</title>

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <header>
        <h1 class="icone"><mark>Reclama</mark>.Com</h1>
        <ul>
            <li><a href="../pages/index.html">Home</a></li>
            <li><a href="../pages/reclamar.php">Reclamar</a></li>
            <li><a href="../pages/reclamacoes.php">Reclamações</a></li>
        </ul>
    </header>
    <h1 class="aviso">Preencha o formulario para reclamar</h1>
    <div class="div_form">
        <form class="formulario" id="formulario" action="reclamacoes.php" method="POST">
            <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ*" required>
            <input type="text" name="empresa" id="empresa" placeholder="Empresa*" required>
            <input type="text" name="nome" id="nome" placeholder="Nome(Opicional)">
            <input type="text" name="estado" id="estado" placeholder="Estado*" required>
            <input type="text" name="cidade" id="cidade" placeholder="Cidade*" required>

            <textarea name="comentario" id="comentario" cols="30" rows="10" placeholder="Comentário*"></textarea>
            <input type="submit" name="submit" value="Reclamar">
        </form>
    </div>
    
    <div class="inform">
        Nossa politicas e termos. <br><br>
        Bem-vindo ao Reclame.com, a plataforma online dedicada a dar voz aos consumidores de forma anônima. Aqui, proporcionamos um espaço seguro e eficaz para expressar suas preocupações, compartilhar experiências e fazer reclamações sobre produtos e serviços de diversas empresas. Acreditamos que a transparência e a honestidade são fundamentais para criar um ambiente de consumo mais justo e confiável.
        <br>
        Recursos Principais:
        <br><br>
        Anonimato Garantido:<br> No Reclame.com, a privacidade é nossa prioridade. Os usuários podem fazer reclamações de forma totalmente anônima, sem revelar sua identidade. Isso permite que as pessoas se sintam à vontade para compartilhar suas experiências sem medo de retaliação.
        <br><br>
        Reclamações Baseadas em CNPJ:<br> Para iniciar uma reclamação, tudo o que você precisa é do CNPJ (Cadastro Nacional da Pessoa Jurídica) da empresa em questão. Com essa informação, os usuários podem identificar facilmente a empresa e apresentar suas reclamações de maneira direta e eficaz.
    </div>
    <footer>
        <p>PROJETO CRIADO POR DENIS YARLEY MATRICULA 202303507828 - TRABALHO DES. WEB</p>
    </footer>
    <script src="../scripts/carrossel.js"></script>

</body>
</html>