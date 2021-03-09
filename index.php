<?php
    $root = "/montaini/";

    $title = "Montaini";
    $desc = "";
    $keywords = "";

    include "includes/head.inc.php";
    include "includes/nav.inc.php";

?>

<div class="background"></div>

<main class="home">
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
    </section>
</main>


<script src="js/menu.js"></script>
</body>
</html>