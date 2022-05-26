<section class="links links-info-page">
    <div class="container">
        <a href="?page=landing">На головну</a>
        <p>&nbsp|&nbsp</p>
        <a href="?page=container">Афіша</a>
        <p class="full-name">&nbsp|&nbsp</p>
        <a class="full-name" href="?page=posterinfo">Ілон Маск Про колонію на Марсі</a>
        <p class="short-name">&nbsp|&nbsp</p>
        <a class="short-name" href="?page=posterinfo">Ілон Маск Про Марс</a>
    </div>
</section>

<section class="poster-main-info">
    <div class="container">
        <h1>
            Ілон Маск<br> Про колонію на Марсі
        </h1>
        <hr>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="block">
                    <img src="img/cosmonaut.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="full-poster-info">
                    <div class="written-info">
                        <img src="img/poster/calendar.png" alt="">
                        <p>Дата проведення:&nbsp <br> Від 12 лютого - До 25 лютого</p>
                    </div>
                    <div class="written-info">
                        <img src="img/poster/theater.png" alt="">
                        <p>Велика зала на 2 поверсі</p>
                    </div>
                    <div class="written-info">
                        <img src="img/poster/banknotes.png" alt="">
                        <p>Ціна:</p>
                        <p class="price">200 ГРН.</p>
                    </div>
                </div>
                <div class="button">
                    <button onclick="show('block')">Придбати квиток</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="additional-info-block additional-info-block-info-page">
    <div class="container">
        <h1>
            Про подію
        </h1>
        <hr>
        <div class="block">
            <div class="spacing">
                <p>
                    Як передає CNBC засновник SpaceX Ілон Маск пропонує створити колонію на Марсі, аби людство могло
                    мешкати одразу на
                    декількох планетах. Однак аби досягти цієї мети необхідно заселити й супутник Землі — Місяць.
                    <br><br>
                    За словами Маска півстоліття з того часу, як люди вперше побували на Місяці — це занадто великий
                    термін.
                    <br><br>
                    “... Нам потрібно повернутися туди і побудувати постійну базу – повторюся, велику житлову
                    перманентну базу на Місяці. А
                    потім побудувати місто на Марсі, щоб стати космічною цивілізацією, міжпланетним видом” - Ілон Маск.
                    <br><br>
                    За його словами на Червону планету спочатку відправлятимуть лише добровольців, готових до жорстких
                    умов. Однак Ілон Маск
                    й досі вважає, що це буде чудовою пригодою, необхідною для розвитку людства.
                    <br><br>
                    Про це та багато чого іншого можете дізнатися в научно пізнавальній події із назвою “Ілон Маск про
                    колонію на Марсі”.
                </p>
            </div>
        </div>
        <div class="form">
            <button onclick="show('block')">Придбати квиток</button>
        </div>
    </div>
</section>

<div onclick="show('none')" id="bg-form" class="bg-gray"></div>

<?php
$surname = "";
$name = "";
$email = "";
$phone = "";
$card = "";

if(isset($_POST["surname"])){
    $surname = $_POST["surname"];
}
if(isset($_POST["name"])){
    $name = $_POST["name"];
}
if(isset($_POST["email"])){
    $email = $_POST["email"];
}
if(isset($_POST["phone"])){
    $phone = $_POST["phone"];
}
if(isset($_POST["card"])){
    $card = $_POST["card"];
}

echo $surname;
echo $name;
echo $email;
echo $phone;
echo $card;

?>

<section id="form-input" class="window">
    <div class="pop-up">
        <h1>[ Введіть дані ]</h1>
        <hr>
        <form action="?page=posterinfo" name="form" method="POST">
            <label>
                <input type="text" placeholder="Прізвище" name="surname" class="input">
            </label>
            <label>
                <input type="text" placeholder="Ім'я" name="name" class="input">
            </label>
            <label>
                <input type="email" placeholder="E-mail" name="email" class="input">
            </label>
            <label>
                <input type='tel' placeholder="Телефон" name="phone" class="input">
            </label>
            <label>
                <input type="number" placeholder="Номер банківської картки" name="card" class="input">
            </label>
            <input type="submit" value="Купити квиток" name="ok" class="button">
        </form>
    </div>
</section>

<script>
    function show(state) {
        document.getElementById('form-input').style.display = state;
        document.getElementById('bg-form').style.display = state;
    }
</script>