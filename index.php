<?php
    $root = "/montaini/";

    $title = "Montaini";
    $desc = "";
    $keywords = "";

    include "includes/head.inc.php";
    include "includes/nav.inc.php";

?>

<div class="background"></div>

<main class="accueil home">
    <section>

        <h1>Réservez vos vacances<br>à la montagne !</h1>

        <article>
            <div>
                <div class="selection">
                    <label for="recherche">Que recherchez-vous ?</label>
                    <div class="wrapper">
                        <select name="recherche" id="recherche">
                            <option>Séjour détente</option>
                            <option>Sports de glisse</option>
                            <option>Randonnées</option>
                            <option>Cure thermale</option>
                            <option>Alpinisme</option>
                        </select>
                    </div>
                </div>

                <div class="selection">
                    <label for="lieu">Où ça ?</label>
                    <div class="wrapper">
                        <select name="lieu" id="lieu">
                            <option>Alpes</option>
                            <option>Pyrénées</option>
                            <option>Massif Central</option>
                            <option>Vosges</option>
                            <option>Jura</option>
                        </select>
                    </div>
                </div>

                <div class="selection">
                    <label for="nombre">Pour combien ?</label>
                    <div class="wrapper">
                        <select name="nombre" id="nombre">
                            <?php
                                for ($i=1; $i < 11; $i++) {
                                    if($i == 1){
                                        echo '<option>'.$i.' personne</option>';
                                    } else {
                                        echo '<option>'.$i.' personnes</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="selection">
                    <label for="date">Quand ?</label>
                    <div class="wrapper">
                        <select name="date" id="date">
                            <option>Printemps 2021</option>
                            <option>Été 2021</option>
                            <option>Automne 2021</option>
                            <option>Hiver 2021</option>
                            <option>Printemps 2022</option>
                        </select>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <button>Trouver mes<br>vacances !</button>
        </article>

        <div class="curseur">
            <div></div>
        </div>
        
    </section>
</main>

<main class="accueil visite">
    <section>
        <div>
            <h2>Visites les plus<br>populaires</h2>
            <p class="p_visite">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit soluta sed fugiat pariatur et modi dicta esse perspiciatis libero eaque nesciunt molestiae dignissimos amet, saepe ea rerum velit alias minima?</p>
        </div>

        <div class="cartes">
            <article class="carte">
                <img src="img/photo/alpes.jpg" alt="Alpes françaises">
                <p class="p_lieu">Alpes françaises</p>
                <p class="p_activite">Ski et randonnée</p>
                <div>
                    <div class="info">
                        <img src="img/picto/calendrier.png" alt="Pictogramme d'un calendrier">
                        <p class="categorie">Disponibilité</p>
                        <p>Toute l'année</p>
                    </div>
                    <div class="info milieu">
                        <img src="img/picto/horloge.png" alt="Pictogramme d'une horloge">
                        <p class="categorie">Durée</p>
                        <p>1 jour</p>
                    </div>
                    <div class="info">
                        <img src="img/picto/etiquette.png" alt="Pictogramme d'une étiquette">
                        <p class="categorie">À partir de</p>
                        <p>166,50€</p>
                    </div>
                </div>
                <button>Choisir une date</button>
            </article>

            <article class="carte">
                <img src="img/photo/alpes.jpg" alt="Alpes françaises">
                <p class="p_lieu">Alpes françaises</p>
                <p class="p_activite">Ski et randonnée</p>
                <div>
                    <div class="info">
                        <img src="img/picto/calendrier.png" alt="Pictogramme d'un calendrier">
                        <p class="categorie">Disponibilité</p>
                        <p>Toute l'année</p>
                    </div>
                    <div class="info milieu">
                        <img src="img/picto/horloge.png" alt="Pictogramme d'une horloge">
                        <p class="categorie">Durée</p>
                        <p>1 jour</p>
                    </div>
                    <div class="info">
                        <img src="img/picto/etiquette.png" alt="Pictogramme d'une étiquette">
                        <p class="categorie">À partir de</p>
                        <p>166,50€</p>
                    </div>
                </div>
                <button>Choisir une date</button>
            </article>

            <article class="carte">
                <img src="img/photo/alpes.jpg" alt="Alpes françaises">
                <p class="p_lieu">Alpes françaises</p>
                <p class="p_activite">Ski et randonnée</p>
                <div>
                    <div class="info">
                        <img src="img/picto/calendrier.png" alt="Pictogramme d'un calendrier">
                        <p class="categorie">Disponibilité</p>
                        <p>Toute l'année</p>
                    </div>
                    <div class="info milieu">
                        <img src="img/picto/horloge.png" alt="Pictogramme d'une horloge">
                        <p class="categorie">Durée</p>
                        <p>1 jour</p>
                    </div>
                    <div class="info">
                        <img src="img/picto/etiquette.png" alt="Pictogramme d'une étiquette">
                        <p class="categorie">À partir de</p>
                        <p>166,50€</p>
                    </div>
                </div>
                <button>Choisir une date</button>
            </article>
        </div>

        <button>Charger plus</button>

    </section>
</main>


<script src="js/menu.js"></script>
</body>
</html>