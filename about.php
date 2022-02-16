<?php


include_once './config_php/database.php';
$database = new Database();
$db = $database->getConnection();


?> 

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Le Bon Gite</title>
</head>


<body>

<header>
        <nav>
            <a class="menu" href="index.php">Accueil</a>
            <a class="menu" href="accommodation.php">Hebergement</a>
            <a class="menu" href="contact.php">Contactez-nous</a>
            <a class="menu" href="about.php">A-propos</a>
        </nav>
    </header>

    <main>
        <div class="containerlarge">
            
        <div class="formulairelarge">
            <h1 class="title" style="color:white">A-propos </h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis adipisci magni sit. Veniam adipisci esse consequatur. Optio fugiat recusandae, impedit quidem aut saepe rerum, cumque aperiam magni asperiores in autem.
            Cum unde expedita magni cumque obcaecati, veritatis ipsam temporibus autem vero mollitia a est ratione doloribus, explicabo illum repellat soluta quasi nulla perspiciatis repellendus molestias quas iusto. Iste, commodi vero.
            Quae labore dolor eaque nisi deserunt! Cumque officia nisi esse nulla illo facere libero beatae animi eveniet asperiores incidunt, tempore perspiciatis ipsum sapiente! Magni impedit cumque provident, dignissimos explicabo laborum!
            <br> <br> Optio asperiores qui ipsum odio sapiente! Fuga magni modi, animi laboriosam autem sed optio architecto aliquam voluptas, hic nulla exercitationem libero veniam temporibus rem, quidem tempore at soluta beatae voluptatibus. <br>
            Facere repudiandae dolorum nobis officia, sed culpa explicabo? Aspernatur mollitia quisquam iste odit, consectetur est dolor magnam voluptatem vel maiores laudantium. Velit tempora iste perferendis doloremque quod! Nostrum, incidunt possimus?
            Sequi nam repellat fugit voluptate, animi in praesentium adipisci fuga officia voluptas et iusto id ullam esse placeat sed. Sequi odio natus quibusdam itaque quidem voluptatibus consequatur optio facilis nulla.
            Voluptate quod sunt quaerat est dolor, ex, molestiae ipsa sit, eaque doloremque assumenda repellendus. Esse sint illo consectetur cumque id quam dolor, consequuntur nisi non qui officia obcaecati ullam accusamus.
            Odit, doloribus veniam voluptate pariatur nesciunt velit id quo reprehenderit. Vel molestias, a in quaerat dignissimos, aliquid nobis distinctio facilis et error ipsa, dolores maiores ad praesentium! Quia, maxime dolore.</p>
            </div>
        </div>

    </main>

    <footer>
        <div class="footbar">

        </div>
    </footer>

</body>

</html>