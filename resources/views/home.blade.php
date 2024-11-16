<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutfan Syafiq-----Portofolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="#" class="portofolio">PORTOFOLIO</a>
        <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="/portofolio">About</a></li>
            <li><a href="/portofolio">Profile</a></li>
            <li><a href="/portofolio">Service</a></li>
            <li><a href="/portofolio">Contact</a></li>
            <li><a href="#" class="dark">-_-</a></li>
        </ul>
    </header>

    <section>
        <div id="judul">
            <h1 id="text" class="contaiter">Lutfan Syafiq</h1>
            <p>College Student of <a href="https://ua.ac.id/" target="_blank">Annuqayah University</a></p>
            <div class="botton">
                <div class="cv">
                    <a href="my cv.pdf" target="_blank">Show Curiculum Vetea >  </a>
                </div>
                <div class="por">
                    <a href="/portofolio">View Portofolio ></a>
                </div>
            </div>
        </div>
        <div>
            <img class="photo" src="img/am.png">
        </div>
    </section>

    <script>
        const gelap = document.querySelector('.dark');

        gelap.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });
    </script>
</body>
</html>