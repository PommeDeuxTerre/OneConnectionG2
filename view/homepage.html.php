<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneConnection</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>OneConnection</h1>
        <nav>
            <ul>
                <li><a href="./">Accueil</a></li>
                <?php
                foreach($menu as $category):
                ?>
                <li><a href="./?category=<?=$category['cg_id']?>"><?=$category['cg_name']?></a></li>
                <?php
                endforeach;
                ?>
                <li><a href="./?connect">Connexion</a></li>
            </ul>
        </nav>
    </header>
    <div id="content">
        <?php foreach($homepageArticle as $article):?>
            <div class="article">
                <h2><a href="./?article=<?=$article['ar_id']?>"><?=$article["ar_title"];?></a> écrit par <a href="./?user=<?=$article['us_id']?>"><?=$article['us_login']?></a> le <?=$article["ar_datetime"]?></h2>
                <p><?=$article['ar_text']?></p>
                <?php if ($article["cg_name"]!=""):?>
                <h3>Categories : </h3>
                <ul>
                    <?php
                    $category_names = explode(DB_SEPARATOR, $article["cg_name"]);
                    $category_ids = explode(",", $article["cg_id"]);
                    for ($i=0;$i<sizeof($category_ids);$i++):
                        $cg_name = $category_names[$i];
                        $cg_id = $category_ids[$i];
                    ?>
                    <li><a href="./?category=<?=$cg_id?>"><?=$cg_name?></a></li>
                    <?php endfor;?>
                </ul>
                <?php endif;?>
            </div>
        <?php endforeach;?>
    </div>
    <footer></footer>
</body>
</html>