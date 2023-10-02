<?php 

if(isset($_GET['id']) && isset($_GET['id_curso'])){
    
    
$id = $_GET['id'];
$id_curso = $_GET['id_curso'];
$hrefHome="../homepage/index.php?id=<?php echo $id ?>&id_curso=<?php echo $id_curso ?>";
$hrefsobre="#sobre?id=<?php echo $id ?>&id_curso=<?php echo $id_curso ?>";
$hrefCurso="#produtos?id=<?php echo $id ?>&id_curso=<?php echo $id_curso ?>";
$hrefPreco="#preco?id=<?php echo $id ?>&id_curso=<?php echo $id_curso ?>";
$hrefQualidade="#qualidade?id=<?php echo $id ?>&id_curso=<?php echo $id_curso ?>";

}else{
    $hrefHome="../homepage/index.php";
    $hrefCurso="#sobre";
    $hrefsobre="#produtos";
    $hrefPreco="#preco";
    $hrefQualidade="#qualidade";

}







?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>SUCELSO</title>
</head>
<body>

    <div class="superinfo-bg">
        <div class="superinfo">
            <p>Todos os dias - Qualquer horário</p>
            <a href="">+55 71 9999-9999</a>
            <p>Av. Ali Perto, 330, Bahia>Vitória - BA</p>
        </div>
    </div>

    <header class="menu-bg">
        <div class="menu">
            <div class="menu-logo">
                <a href="#">SUCELSO</a>
            </div>
            <div>
                <nav class="menu-nav">
                    <ul>
                        <li class="#home"><a href="<?php echo $hrefHome?>">Home</a></li>
                        <li class="#sobre"><a href="#sobre">Sobre</a></li>
                        <li class="#produtos"><a href="#produtos">Cursos</a></li>
                        <li class="#preco"><a href="#preco">Preço</a></li>
                        <li class="#qualidade"><a href="#qualidade">Qualidade</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <h1 class="introducao">SOBRE NOSSA ESCOLA <br>
        </h1>

    <section class="sobre" id="sobre">
        <div class="sobre-info">
            <h1>Sobre</h1>
            <P>A "Sucelso" é uma escola de tecnologia líder, especializada em fornecer conhecimento prático e de alta qualidade em programação e desenvolvimento web. Com uma equipe de instrutores altamente qualificados, a Sucelso oferece uma ampla gama de cursos online, incluindo videoaulas interativas e práticas, para estudantes que desejam aprender PHP, Java e HTML/CSS.</P>
            <p>Nossos cursos são projetados para atender às necessidades tanto de iniciantes quanto de programadores experientes que desejam aprimorar suas habilidades. Na Sucelso, valorizamos o aprendizado prático, e nossos instrutores estão sempre à disposição para responder a perguntas e fornecer orientações personalizadas aos alunos. Junte-se a nós na jornada de aprendizado e desenvolvimento de suas habilidades em programação e desenvolvimento web com nossos cursos de PHP, Java e HTML/CSS de alta qualidade.</p>
        </div>
        <div class="sobre-img1">
            <img src="img/sobre1.jpg" alt="foto sobre">
        </div>
        <div class="sobre-img2">
            <img src="img/sobre2.jpg" alt="foto sobre 2">
        </div>
    </section>

    <section class="produtos" id="produtos">
        <h1>Cursos</h1>
        <div class="produtos-container">

            <div class="produtos-item purple">
                <h2>Php</h2>
                <img src="img/produtos1.jpg" alt="Produtos 1">
            </div>

            <div class="produtos-item pink">
                <h2>Java</h2>
                <img src="img/produtos2.jpg" alt="Produtos 2">
            </div>

            <div class="produtos-item blue">
                <h2>Html/CSS</h2>
                <img src="img/produtos3.jpg" alt="Produtos 3">
            </div>

        </div>
    </section>

    <section class="preco" id="preco">

        <div class="preco-item">
            <h2>Php</h2>
            <span><sup>R$</sup>Free</span>
            <ul>
                <li>Acesso Irrestrito</li>
                <li>Conteúdo Secreto</li>
                <li>Suporte 24h</li>
                <li>Compra Segura</li>
                <li>Dowload dos itens</li>
            </ul>
            <a href="../login/Cadastro/cadastro.html">Comprar</a>
        </div>

        <div class="preco-item">
            <h2>Java</h2>
            <span><sup>R$</sup>Free</span>
            <ul>
                <li>Acesso Irrestrito</li>
                <li>Conteúdo Secreto</li>
                <li>Suporte 24h</li>
                <li>Compra Segura</li>
                <li>Dowload dos itens</li>
            </ul>
            <a href="../login/Cadastro/cadastro.html">Comprar</a>
        </div>

        <div class="preco-item">
            <h2>Html/CSS</h2>
            <span><sup>R$</sup>Free</span>
            <ul>
                <li>Acesso Irrestrito</li>
                <li>Conteúdo Secreto</li>
                <li>Suporte 24h</li>
                <li>Compra Segura</li>
                <li>Dowload dos itens</li>
            </ul>
            <a href="../login/Cadastro/cadastro.html">Comprar</a>
        </div>

    </section>

    <section class="qualidade" id="qualidade">

        <div class="qualidade-itens">
            <h2>Inteligente</h2>
            <p>A abordagem educacional da Sucelso é verdadeiramente inteligente. Nossos cursos são projetados com base nas mais recentes tendências e práticas da indústria de tecnologia. Mantemos nossos currículos atualizados para garantir que nossos alunos estejam sempre um passo à frente no mundo da programação e do desenvolvimento web.</p>
        </div>

        <div class="qualidade-itens">
            <h2>Compacto</h2>
            <p> Na Sucelso, acreditamos na aprendizagem eficiente e compacta. Nossos cursos são estruturados de forma a oferecer o máximo de conhecimento em um formato conciso. Com videoaulas de alta qualidade e exercícios práticos, você pode absorver o conhecimento de que precisa em um período de tempo mais curto, economizando seu tempo precioso.</p>
        </div>

        <div class="qualidade-itens">
            <h2>Econômico</h2>
            <p>A Sucelso se preocupa com o seu bolso. Oferecemos uma educação de alta qualidade a preços acessíveis. Nossos cursos são uma escolha econômica para quem busca adquirir habilidades valiosas em programação. Acreditamos que a educação de qualidade não deve ser um fardo financeiro, e é por isso que mantemos nossos cursos acessíveis a todos.</p>
        </div>

        <div class="qualidade-itens">
            <h2>Transparente</h2>
            <p>Nossa abordagem é totalmente transparente. Desde o início, você terá acesso a informações detalhadas sobre o conteúdo do curso, os requisitos e as expectativas. Não há surpresas desagradáveis. Nossos instrutores estão sempre disponíveis para esclarecer suas dúvidas, tornando o processo de aprendizado mais transparente e compreensível.</p>
        </div>

        <div class="qualidade-itens">
            <h2>Opaco</h2>
            <p>Na Sucelso, não acreditamos em informações opacas. Tudo o que ensinamos é apresentado de forma clara e acessível. Não usamos jargões desnecessários ou complicamos conceitos simples. Nossos instrutores têm a habilidade de tornar até os tópicos mais complexos tão claros quanto o dia.</p>
        </div>

        <div class="qualidade-itens">
            <h2>Sustentável</h2>
            <p>A Sucelso está comprometida com a sustentabilidade. Nossos materiais de ensino são digitalizados para reduzir o uso de papel, e nossas operações são eficientes em termos de energia. Acreditamos que a educação deve ser sustentável para o planeta, assim como para o seu futuro. Ao escolher a Sucelso, você está fazendo uma escolha sustentável para o seu aprendizado.</p>
        </div>

    </section>

    <section class="newsletter">

        <div class="newsletter-info">
            <h1>Newsletter</h1>
            <p>Assine e fique por dentro das novidades</p>
        </div>
        <form action="" method="GET" class="newsletter-form">
            <input type="email" name="email" placeholder="Seu e-mail" class="email">
            <input type="submit" name="Assinar" class="botao">
        </form>

    </section>

    <footer>
        <div class="footer">
            <p>SUCELSO © Todos os direitos reservados.</p>
        </div>
    </footer>
  <script src="js/script.js"></script>
</body>
</html>
