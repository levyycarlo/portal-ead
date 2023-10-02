<?php 

if(isset($_GET['id']) && isset($_GET['id_curso'])){
    
    
$id = $_GET['id'];
$id_curso = $_GET['id_curso'];
$hrefLogin="../homepage/optionLogin.php?id=$id&id_curso=$id_curso";
$hrefCadastro="../login/Cadastro/cadastroHTML.php?id=$id&id_curso=$id_curso";
$hrefsobre="../sobrenos/sobre.php?id=$id&id_curso=$id_curso";
$hrefsobreProd="../sobrenos/sobre.php#produtos?id=$id&id_curso=$id_curso";

}else{
    $hrefLogin="../homepage/optionLogin.php";
    $hrefCadastro="../login/Cadastro/cadastroHTML.php";
    $hrefsobre="../sobrenos/sobre.php";
    $hrefsobreProd="../sobrenos/sobre.php#produtos";

}







?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola Sucelso - Tecnologia e Educação</title>
    <link rel="stylesheet" href="css/template.css">
   <script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        const mostrarMensagem = urlParams.get('mostrar_mensagem');

        if (mostrarMensagem === 'true') {
            alert('Cadastro bem-sucedido na Escola Sucelso!');
        }
    });
</script>
<style>
    #login{
        background-color: bla;
    }
</style>
</head>

<body>

    <header>
        <div  class="container">
            <div class="logo">
                <a href=""><img src="img/logo.png" alt="Logo Escola Sucelso"></a>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                    <a href="<?php echo $hrefLogin?>"  id="login"><li>LOGIN</li></a>
                        <a href="<?php echo $hrefCadastro?>" ><li>CADASTRO</li></a>
                        <a href="<?php echo $hrefsobre?>" ><li>SOBRE</li></a>
                        <a href="<?php echo $hrefsobreProd?>" ><li>CURSOS</li></a>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <section class="banner">
        <div class="container column">
            <div class="banner_headline">
                <h1>Bem-vindo à Escola Sucelso</h1>
                <h2>Excelência em Educação Tecnológica desde 2023</h2>
            </div>
            <div class="banner_options">
                <div class="banner1">
                    <div class="banner_title">
                        Nossos Cursos Online
                    </div>
                    <div class="banner_desc">Descubra nossa ampla gama de cursos de tecnologia.</div>
                    <a href="../sobrenos/sobre.html#produtos">Saiba mais</a>
                </div>

                    <div class="banner1">
                        <div class="banner_title">
                            Conheça Nossa Equipe
                        </div>
                        <div class="banner_desc">
                        Conheça a equipe dedicada que torna a Escola Sucelso possível.
                        </div>
                    </div>

                    <div class="banner2">
                        <div class="banner_title">
                            Nossa História
                        </div>
                        <div class="banner_desc">A Escola Sucelso foi fundada em 2023 com a visão de proporcionar educação de alta qualidade para jovens desenvolvedores em busca de mudar o mundo por meio da tecnologia.</div>
                    </div>

                    <div class="banner3">
                        <div class="banner_title">
                            O que Fazemos?
                        </div>
                        <div class="banner_desc">Nossos cursos são projetados para atender às necessidades tanto de iniciantes quanto de programadores experientes que desejam aprimorar suas habilidades tecnológicas.</div>
                    </div>
            </div>
        </div>
    </section>

    <section id="geral">
        <div class="container">
            <section>

                <div class="widget">

                    <div class="widget_title">
                        <div class="widget_title_text">Notícias e Atualizações</div>
                        <div class="widget_title_bar"></div>
                    </div>
                    <div class="widget_body flex">

                        <article>
                            <a href="#">

                                <div class="news_date">
                                    <div class="news_posted_at">12 DEZ 2023</div>
                                    <div class="news_comments">2</div>
                                </div>

                                <div class="news_thumbnail">
                                    <img src="img/dr.jpg" alt="">
                                </div>

                                <div class="news_title">
                                    Novos Cursos Adicionados!
                                </div>

                                <div class="news_resume">

                                    Fique por dentro das últimas novidades - estamos lançando novos cursos emocionantes para impulsionar sua carreira na tecnologia.
                                </div>

                            </a>
                        </article>

                        <article>
                            <a href="#">

                                <div class="news_date">
                                    <div class="news_posted_at">12 DEZ 2023</div>
                                    <div class="news_comments">2</div>
                                </div>

                                <div class="news_thumbnail">
                                    <img src="img/dr.jpg" alt="">
                                </div>

                                <div class="news_title">
                                    Novos Recursos Online!
                                </div>

                                <div class="news_resume">

                                    Estamos sempre aprimorando nossa plataforma de ensino online para proporcionar a melhor experiência de aprendizado em tecnologia.
                                </div>

                            </a>
                        </article>

                        <article>
                            <a href="#">

                                <div class="news_date">
                                    <div class="news_posted_at">12 DEZ 2023</div>
                                    <div class="news_comments">2</div>
                                </div>

                                <div class="news_thumbnail">
                                    <img src="img/dr.jpg" alt="">
                                </div>

                                <div class="news_title">
                                    Evento de Tecnologia em Breve!
                                </div>

                                <div class="news_resume">

                                    Participe do nosso próximo evento de tecnologia, onde você poderá se conectar com profissionais experientes e aprender com os melhores.
                                </div>

                            </a>
                        </article>

                    </div>

                </div>

            </section>

            <aside>
                <div class="widget">

                    <div class="widget_title">
                        <div class="widget_title_text">Tecnologias Utilizadas</div>
                        <div class="widget_title_bar"></div>
                    </div>
                    <div class="widget_body">
                        <div class="widget_itens"><p>PHP</p></div>
                        <div class="widget_itens"><p>MySQL</p></div>
                        <div class="widget_itens"><p>JavaScript</p></div>
                        <div class="widget_itens"><p>HTML</p></div>
                        <div class="widget_itens"><p>CSS</p></div>
                        <div class="widget_itens"><p>VS CODE</p></div>
                    </div>

                </div>

                <div class="widget">

                    <div class="widget_title">
                        <div class="widget_title_text">Contato</div>
                        <div class="widget_title_bar"></div>
                    </div>
                    <div class="widget_body">
                        <p>Entre em contato conosco para obter mais informações:</p>
                        <div>Telefone: <strong>(XX) XXXX-XXXX</strong></div>
                        <div>Email: <a href="mailto:contato@escolasucelso.com">contato@escolasucelso.com</a></div>
                        <div>Visite nossa <a href="contato.html">página de contato</a>.</div>
                    </div>

                </div>

            </aside>

        </div>
    </section>
        <div class="footer_copy">
            © 2023 Escola Sucelso - Todos os direitos reservados.
        </div>

    </footer>

</body>

</html>
