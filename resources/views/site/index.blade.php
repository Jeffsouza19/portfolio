<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="stylesheet" href="{{ url(mix('site/css/style.css')) }}">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container header">
            <div class="logo">
                {{-- <img src="" alt=""> --}}
                Olá.
            </div>
            <div class="menu--navbar">
                <nav class="menu--item--navbar">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="container content">
                <div class="anima">
                    Ola galera! Este é meu portfolio ele ainda se encontra em desenvolvimento!
                </div>
                <div>
                    <img src="https://www.google.com/logos/google.jpg" alt="">
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <h1 class="skills--title">Tecnologias </h1>
                <div class="skills">
                    <div class="cards">
                        <div class="card--item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain-wordmark.svg" />
                            <p>texto de teste. Breve explicação. testando a quebra de linha dos itens</p>
                        </div>
                        <div class="card--item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" />
                            <p>texto de teste. Breve explicação. testando a quebra de linha dos itens</p>
                        </div>
                        <div class="card--item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" />
                            <p>texto de teste. Breve explicação. testando a quebra de linha dos itens</p>
                        </div>
                        <div class="card--item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" />
                            <p>texto de teste. Breve explicação. testando a quebra de linha dos itens</p>
                        </div>
                        <div class="card--item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" />
                            <p>texto de teste. Breve explicação. testando a quebra de linha dos itens</p>
                        </div>
                        <div class="card--item">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" />
                            <p>texto de teste. Breve explicação. testando a quebra de linha dos itens</p>
                        </div>
                    </div>
                    <aside class="card--detail">
                       <div class="card--item--detail">
                        <h1>Hello guys</h1>
                        <h3>Estas são as tecnologias nas quais eu trabalho e estudo atualmente. Para obter mais detalhes sobre cada uma, basta clicar no card.</h3>
                       </div>
                    </aside>
                </div>
                <div class="more">VER MAIS</div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container footer">
            Todos direitos reservados
        </div>
    </footer>

    <script src="{{ url(mix('site/js/script.js')) }}"></script>
</body>
</html>
