<?php

$nav1 = "accueil";
$nav2 = "planifier";
$nav3 = "quoiFaire";
$nav4 = "infosLive";
$nav5 = "contact";

?>

<header>
    <nav>
        <a href="<?=$root?>index.php" title="#"><img src="<?=$root?>img/logo/montaini.svg" alt="Logo de Montaini"></a>
        <div>
            <ul>
                <li><a href="<?=$root?>index.php?page=accueil" title="#"<?php
                    if(!isset($_GET['page']) || $_GET['page'] == $nav1){
                        echo ' class="actif"';
                    }
                ?>>Accueil</a></li>
                <li><a href="index.php?page=planifier" title="#"<?php
                    if(isset($_GET['page']) && $_GET['page'] == $nav2){
                        echo ' class="actif"';
                    }
                ?>>Planifier</a></li>
                <li><a href="index.php?page=quoiFaire" title="#"<?php
                    if(isset($_GET['page']) && $_GET['page'] == $nav3){
                        echo ' class="actif"';
                    }
                ?>>Quoi faire</a></li>
                <li><a href="index.php?page=infosLive" title="#"<?php
                    if(isset($_GET['page']) && $_GET['page'] == $nav4){
                        echo ' class="actif"';
                    }
                ?>>Infos live</a></li>
                <li><a href="index.php?page=contact" title="#contact"<?php
                    if(isset($_GET['page']) && $_GET['page'] == $nav5){
                        echo ' class="actif"';
                    }
                ?>>Contact</a></li>
            </ul>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" x="0" y="0" viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M505.749,475.587l-145.6-145.6c28.203-34.837,45.184-79.104,45.184-127.317c0-111.744-90.923-202.667-202.667-202.667    S0,90.925,0,202.669s90.923,202.667,202.667,202.667c48.213,0,92.48-16.981,127.317-45.184l145.6,145.6    c4.16,4.16,9.621,6.251,15.083,6.251s10.923-2.091,15.083-6.251C514.091,497.411,514.091,483.928,505.749,475.587z     M202.667,362.669c-88.235,0-160-71.765-160-160s71.765-160,160-160s160,71.765,160,160S290.901,362.669,202.667,362.669z" fill="#fdfdfd" data-original="#000000" style=""/>
	</g>
</g></svg>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M256,0c-74.439,0-135,60.561-135,135s60.561,135,135,135s135-60.561,135-135S330.439,0,256,0z" fill="#fdfdfd" data-original="#000000" style="" class=""/>
	</g>
</g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M423.966,358.195C387.006,320.667,338.009,300,286,300h-60c-52.008,0-101.006,20.667-137.966,58.195    C51.255,395.539,31,444.833,31,497c0,8.284,6.716,15,15,15h420c8.284,0,15-6.716,15-15    C481,444.833,460.745,395.539,423.966,358.195z" fill="#fdfdfd" data-original="#000000" style="" class=""/>
	</g></svg>
    </nav>
</header>