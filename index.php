<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="build/css/styles.css">
        <script
          src="https://code.jquery.com/jquery-2.2.4.min.js"
          integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
          crossorigin="anonymous"></script>
        <script src="build/js/siema.min.js"></script>
        <script src="build/js/script.js"></script>
        <script src="build/assets/js/custom.js"></script>
        <script src="build/assets/js/grid.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <title>Riddle of Steel</title>
    </head>
    <body>
        <nav class="navigation" id="navigation">
            <h2 class="sro">Navigation principale</h2>
            <div class="navigation-button navigation-button__open">Menu</div>
            <div class="navigation-button navigation-button__close">Fermer</div>

            <a href="/" class="navigation-logo" title="Retour à l'accueil">
                <img src="build/assets/images/logo.png" alt="Riddle of Steel" />
            </a>

            <ul class="navigation-menu">
                <li class="navigation-menu__item current">
                    <a href="#intro">Accueil</a>
                </li>
                <li class="navigation-menu__item">
                    <a href="#about">À propos</a>
                </li>
                <li class="navigation-menu__item">
                    <a href="#infos">Infos pratiques</a>
                </li>
                <li class="navigation-menu__item">
                    <a href="#clubs">Nos clubs</a>
                </li>
                <li class="navigation-menu__item">
                    <a href="#ressources">Ressources</a>
                </li>
                <li class="navigation-menu__item">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </nav>

        <div id="intro" class="slider">
            <div class="siema">
                <figure class="slider-image">
                    <img src="build/assets/images/2.jpg" alt="">
                </figure>
                <figure class="slider-image">
                    <img src="build/assets/images/banner.jpg" alt="">
                </figure>
            </div>
            <h1 class="slider-title">
                Riddle of Steel
                <span class="slider-subtitle">Weapon Academy</span>
            </h1>
        </div>

        <section id="school" class="section">
            <h2 class="section-title">À propos</h2>
            <div class="section-content">
                <section class="section-content__text content">
                    <h3 class="content-title">
                        La Riddle of Steel Weapon Academy est une école de combat à l'arme en Latex.
                    </h3>
                    <p>Elle fut créée il y'a une vingtaine d'année par Mark Gilbert en Angleterre.</p>
                    <p>C'est le fruit d'une réflexion sur le combat à l'arme en latex dans les jeux de rôles Grandeur Nature. </p>
                    <p>Cependant, étant une discipline découlant du 'GN', nous ne voulons pas nous défaire de l'aspect ludique et sécuritaire du combat. C'est dans cette optique que nous organisons des cours, non pas pour former des escrimeurs, mais former les gens au travers de leurs désirs, qu'ils soient motivés par l'aspect plus technique, plus ludique ou tout simplement théâtral.</p>

                    <p class="content-subtitle">Principes de cette école</p>
                    <ul class="content-list">
                        <li class="content-list__item">
                            Apprendre à n'importe quelle personne qui s'intéresse au combat à l'arme en latex.
                        </li>
                        <li class="content-list__item">
                            Progresser dans les techniques d'arme à travers l'entraînement et la pratique.
                        </li>
                        <li class="content-list__item">
                            Augmenter la sécurité du combat à l'arme en latex.
                        </li>
                        <li class="content-list__item">
                            Promouvoir le combat à l'arme en latex comme étant un Art de combat.
                        </li>
                    </ul>
                </section>
                <figure class="section-content__img">
                    <img src="build/assets/images/2.jpg" alt="">
                </figure>
            </div>
        </section>

        <section id="about" class="section">
            <h2 class="section-title">L'escrime ludique</h2>
            <div class="section-content">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/AkaD_sOpXiA" allow="autoplay; encrypted-media" allowfullscreen class="section-content__img"></iframe>
                <div class="section-content__text content">
                    <p>
                        L’escrime ludique est peu à peu devenue une activité à part entière, pratiquée tant pour l’aspect sportif que pour sa dimension divertissante et conviviale.
                    </p>
                    <p>
                        L’escrime ludique est une discipline sportive et ludique fondée sur une adaptation de diverses techniques d’escrime sportive, des arts martiaux historiques européens (AMHE), d’escrime artistique et d’arts martiaux variés, en vue d’être utilisées dans le but de toucher les parties valables de ses adversaires, selon les principes de sécurité liés à l’utilisation des répliques d'armes en mousse.
                    </p>
                </div>
            </div>
        </section>

        <div class="section-img first">
            <p class="section-img__texte">Soyez prêt pour le combat en GN</p>
        </div>

        <section id="pratique" class="section">
            <h2 class="section-title">Informations pratiques</h2>
            <p>Si vous n'êtes pas famillier avec notre école, vous vous posez sans doute quelques questions</p>

            <div class="carousel-container">
                <div class="carousel">
                    <div class="carousel-item active">
                        <div class="carousel-text">
                            <p class="carousel-text__title">
                                À qui s'adressent les entraînements?
                            </p>
                            <div class="carousel-text__answer">
                                <p>
                                    À toutes les personnes qui veulent apprendre et en savoir plus sur le combat à l'arme en latex.
                                </p>
                            </div>
                        </div>
                        <figure class="carousel-img">
                            <img src="build/assets/images/2.jpg" alt="">
                        </figure>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-text">
                            <p class="carousel-text__title">
                                Quel équipement dois-je apporter?
                            </p>
                            <div class="carousel-text__answer">
                                <p>
                                    Une tenue de sport, des baskets qui ne font pas de marque sur le sol et tes armes en latex, bouclier. Nous recommandons l'utilisation de genouillères.
                                </p>
                            </div>
                        </div>
                        <figure class="carousel-img">
                            <img src="build/assets/images/2.jpg" alt="">
                        </figure>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-text">
                            <p class="carousel-text__title">
                                Combien cela coûte-t-il?
                            </p>
                            <div class="carousel-text__answer">
                                <p>
                                    Comme nous louons plusieurs salles, nous demandons à nos membres une participation financière.
                                </p>
                                <p>
                                    Le P.A.F. de l'abonnement à l'année est de 80 euros. <br />
                                    Il est également possible d'acheter des cartes non nominatives au tarif de 25 et 50 euros pour respectivement 6 et 15 séances.
                                    Le tarif à la séance est de 5 euros.
                                </p>
                                <p>
                                    Les cartes, comme les abonnements sont vallables dans toutes les salles !
                                    Et bien évidemment la première séance est gratuite.
                                    Numéro de compte : BE73 0688 9338 3060.
                                </p>
                            </div>
                        </div>
                        <figure class="carousel-img">
                            <img src="build/assets/images/2.jpg" alt="">
                        </figure>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-text">
                            <p class="carousel-text__title">
                                Y a-t-il une assurance?
                            </p>
                            <div class="carousel-text__answer">
                                <p>
                                    Oui, vous êtes assurés via l'assurance fédérale prise par Riddle of Steel Asbl auprès de la Fédération belge du jeu de rôles grandeur nature.
                                </p>
                            </div>
                        </div>
                        <figure class="carousel-img">
                            <img src="build/assets/images/2.jpg" alt="">
                        </figure>
                    </div>
                </div>

                <div class="carousel-buttons">
                    <div class="carousel-buttons__single btn0">0</div>
                    <div class="carousel-buttons__single btn1">1</div>
                    <div class="carousel-buttons__single btn2">2</div>
                    <div class="carousel-buttons__single btn3">3</div>
                </div>
            </div>

        </section>

        <div class="section-bg">
            <section id="salles" class="section">
                <h2 class="section-title">Nos différents clubs</h2>

                <ul class="clubs-container">
                    <li class="club-item club card">
                        <div class="wrapper bruxelles">
                            <div class="data">
                                <div class="content">
                                    <h1 class="title">Ros Bruxelles</h1>
                                    <p class="intro">Le dimanche de 17h à 19h</p>
                                    <div class="text">
                                        <p><strong>Centre Sportif de la Forêt de Soignes</strong></p>
                                        <p>Salle G2</p>
                                        <p>Chaussée de Wavre, 2057- 1160 Bruxelles</p>
                                        <p>Métro Herman-Debroux - Ligne 5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="club-item club card">
                        <div class="wrapper liege">
                            <div class="data">
                                <div class="content">
                                    <h1 class="title">Ros Liège</h1>
                                    <p class="intro">Le dimanche de 17h à 20h</p>
                                    <div class="text">
                                        <p><strong>Ecole Saint Servais</strong></p>
                                        <p>Rue Saint Gilles, 104- 4000 Liege</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="club-item club card">
                        <div class="wrapper namur">
                            <div class="data">
                                <div class="content">
                                    <h1 class="title">Ros Namur</h1>
                                    <p class="intro">Le mercredi de 18h à 20h</p>
                                    <div class="text">
                                        <p>Avenue Jean Materne, n°264 - 5100 Jambes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="club-item club card">
                        <div class="wrapper nivelles">
                            <div class="data">
                                <div class="content">
                                    <h1 class="title">Ros Nivelles</h1>
                                    <p class="intro">Le vendredi de 19h30 à 21h30</p>
                                    <div class="text">
                                        <p><strong>Haute École Paul Henri Spaak de Nivelles</strong></p>
                                        <p>Salle Psychomotricité</p>
                                        <p>Rue Émile Vandervelde, 3 -1400 Nivelles</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="club-item club card">
                        <div class="wrapper charleroi">
                            <div class="data">
                                <div class="content">
                                    <h1 class="title">Ros Charleroi</h1>
                                    <p class="intro">Le dimanche de 17h à 19h</p>
                                    <div class="text">
                                        <p>Place Albert 1er, 38 - 6030 Marchienne-au-Pont</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="club-item club card">
                        <div class="wrapper meerhout">
                            <div class="data">
                                <div class="content">
                                    <h1 class="title">Ros Meerhout</h1>
                                    <p class="intro">Le dimanche de 10h à 12h</p>
                                    <div class="text">
                                        <p>Bevrijdingslaan 96A - 2450 Meerhout</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="club-item club card">
                        <div class="wrapper canada">
                            <div class="data">
                                <div class="content">
                                    <h1 class="title">Ros Canada</h1>
                                    <p class="intro">Le mercredi de 18h15 à 19h15</p>
                                    <div class="text">
                                        <p><strong>En partenariat avec l'ordre du combat récréatif</strong></p>
                                        <p>Gymnase de l'école primaire de St-Mathias-sur-le-Richelieu, Québec</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="club-item club card">
                        <div class="wrapper lure">
                            <div class="data">
                                <div class="content">
                                    <h1 class="title">Ros Lure</h1>
                                    <p class="intro">Le samedi de 19h à 21h</p>
                                    <div class="text">
                                        <p><strong>en partenariat avec l'association "Incontrôlable compagnie"</strong></p>
                                        <p>5, Rue du docteur Bertrand, 70200 Lure</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="club-item club card">
                        <div class="wrapper strasbourg">
                            <div class="data">
                                <div class="content">
                                    <h1 class="title">Ros Lure</h1>
                                    <p class="intro">Le mardi de 20h à 22h</p>
                                    <div class="text">
                                        <p><strong>Centre socio-culturel du Marais</strong></p>
                                        <p>8 Rue de Touraine 67300 Schiltigheim </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="club-item club card">
                        <div class="wrapper metz">
                            <div class="data">
                                <div class="content">
                                    <h1 class="title">Ros Metz</h1>
                                    <p class="intro">Le mercredi de 21h à 23h</p>
                                    <div class="text">
                                        <p><strong>MJC des 4 Bornes</strong></p>
                                        <p>Dans le dojo</p>
                                        <p>Rue Etienne Gantrel, 57050 Metz</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
        </div>

        <div class="section-img first">
            <p class="section-img__texte">Soyez prêt pour le combat en GN</p>
        </div>

        <section id="pratique" class="section">
            <h2 class="section-title">Informations pratiques</h2>
            <p>Si vous n'êtes pas famillier avec notre école, vous vous posez sans doute quelques questions</p>

            <div class="carousel-container">
                <div class="carousel">
                    <div class="carousel-item active">
                        <div class="carousel-text">
                            <p class="carousel-text__title">
                                Traité d'escrime ludique
                            </p>
                            <div class="carousel-text__answer">
                                <p>
                                    Cliquez ici pour accéder au document de référence sur l'escrime ludique.
                                </p>
                            </div>
                            <p class="carousel-text__title">
                                B.W.A.T
                            </p>
                            <div class="carousel-text__answer">
                                <p>
                                    Le document B.W.A.T est le document de références concernant l'homologation des armes dans nos clubs. Consultez le en cliquant ici
                                </p>
                            </div>
                            <p class="carousel-text__title">
                                Glossaire
                            </p>
                            <div class="carousel-text__answer">
                                <p>
                                    Cliquez ici pour vous familiariser avec les termes employés en escrime ludique
                                </p>
                            </div>
                            <p class="carousel-text__title">
                                Exercices
                            </p>
                            <div class="carousel-text__answer">
                                <p>
                                    Nous mettons à votre disposition une série d'exercice que vous retrouverez également lors de nos séances. Cliquez ici
                                </p>
                            </div>
                        </div>
                        <figure class="carousel-img">
                            <img src="build/assets/images/2.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>

        </section>

        <div class="section-bg">
            <section id="contact" class="section">
                <h2 class="section-title">Contact</h2>
                <p>Si vous recherchez d'autres informations, n'hésitez pas à posez vos questions via notre formulaire de contact. </p>

                <?php
                    $errors = [];
                    $old_data = [];

                    if(isset($_POST["name"]) && isset($_POST["subject"]) && isset($_POST["sender_email"]) && isset($_POST["message"])) {
                        $name = $_POST["name"];
                        $subject = $_POST["subject"];
                        $sender_email = $_POST["sender_email"];
                        $message = $_POST["message"];

                        $old_data = $_POST;

                        $errors = [
                            "name" => ($name != "" && $name != null) ? false : "Veuillez entrer votre nom",
                            "subject" => ($subject != "" && $subject != null) ? false : "Veuillez entrer un sujet",
                            "sender_email" => ($sender_email != "" && $sender_email != null && filter_var($sender_email, FILTER_VALIDATE_EMAIL)) ? false : "Veuillez entrer un email valide",
                            "message" => ($message != "" && $message != null) ? false : "Veuillez écrire un message",
                        ];

                        if(empty(array_filter($errors))){
                            var_dump(mail("anne.m.remacle@gmail.com", $_POST["subject"], "nouveau message de ".$_POST["sender_email"].": ".$_POST["message"]));

                            $old_data = [];
                        }
                    }


                ?>

                <form id="contact" action="#contact" method="POST" class="form" role="form">
                    <?php if(empty(array_filter($errors))): ?>
                        <div class="message success" id="sendmessage">Merci, votre message a été envoyé!</div>
                    <?php endif; ?>
                    <div class="form-group">
                        <input
                            id="name"
                            type="text"
                            name="name"
                            class="form-control"
                            placeholder="Nom et prénom"
                            value="<?php echo isset($old_data["name"]) ? $old_data["name"] : ''; ?>"
                        />
                        <div class="validation">
                            <?php if(isset($errors["name"])) :?>
                                <p><?php echo $errors["name"]; ?></p>
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="form-group">
                        <input
                            id="email"
                            type="email"
                            class="form-control"
                            name="sender_email"
                            placeholder="Votre adresse mail"
                            value="<?php echo isset($old_data["sender_email"]) ? $old_data["sender_email"] : ''; ?>"
                        />
                        <div class="validation">
                            <?php if(isset($errors["sender_email"])) :?>
                                <p><?php echo $errors["sender_email"]; ?></p>
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="form-group">
                        <input
                            id="subject"
                            type="text"
                            class="form-control"
                            name="subject"
                            placeholder="Sujet"
                            value="<?php echo isset($old_data["subject"]) ? $old_data["subject"] : ''; ?>"
                        />
                        <div class="validation">
                            <?php if(isset($errors["subject"])) :?>
                                <p><?php echo $errors["subject"]; ?></p>
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea
                            class="form-control"
                            name="message"
                            rows="5"
                            placeholder="Message"
                        ><?php echo isset($old_data["message"]) ? $old_data["message"] : ''; ?></textarea>
                        <div class="validation">
                            <?php if(isset($errors["message"])) :?>
                                <p><?php echo $errors["message"]; ?></p>
                            <?php endif;?>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-theme btn-lg btn-block">Envoyer</button>
                    </div>
                </form>
            </section>
        </div>

        <section id="bottom-widget" class="socials section">
            <h2 class="section-title">Retrouvez nous en ligne</h2>
            <div class="socials-container">
                <a href="https://fr-fr.facebook.com/Riddle-of-Steel-296714857049503/" class="socials-single" target="_blank">
                    <span class="fa-stack fa-2x socials-single__icon">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                    </span>
                    <p class="socials-single__title">Facebook</p>
                </a>
                <a href="https://www.youtube.com/user/0Riddleofsteel0" class="socials-single" target="_blank">
                    <span class="fa-stack fa-2x socials-single__icon">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
                    </span>
                    <p class="socials-single__title">Youtube</p>
                </a>
                <a href="mailto:0riddleofsteel0@gmail.com" class="socials-single" target="_blank">
                    <span class="fa-stack fa-2x socials-single__icon">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                    <p class="socials-single__title">Email</p>
                </a>
            </div>
        </section>
    </body>
</html>
