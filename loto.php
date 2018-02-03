<?php
//SEO
$seo['title'] = "Derniers Résultats du Loto";
$seo['meta_description'] = "";
//Include Header Page
include ('header.php');
//Define URL FDJ to scrap
$urlhn = "https://www.fdj.fr/jeux/jeux-de-tirage/loto/resultats";
//Identify elements to scrap
$input = @file_get_contents($urlhn) or die("Impossible to get : $urlhn");
$getDate = '<h3 class="dateTirage mt20 fl">(.*)<\/h3>';
$getNumbers = '<p class="loto_boule">(.*)<\/p>';
$getChance = '<p class="loto_boule_c">(.*)<\/p>';
$getJoker = '<p class="tirage_joker_plus" style="width:125px;float: left; margin-top: 17px;">(.*)<\/p>';
$getGains = '<table class="tableErgo" cellspacing="0">(.*)<\/table>';
?>

<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading text-uppercase">Derniers Résultats du Loto</h1>
            <?php if(preg_match_all("/$getNumbers/siU", $input, $numbers, PREG_SET_ORDER)
                AND (preg_match_all("/$getDate/siU", $input, $date, PREG_SET_ORDER))
                AND (preg_match_all("/$getChance/siU", $input, $chance, PREG_SET_ORDER))
                AND (preg_match_all("/$getJoker/siU", $input, $joker, PREG_SET_ORDER))) :
                ?>

                <p><i class="fa fa-calendar"></i> <?= utf8_encode($date[0][1]); ?>  </p>

                <p>
                    <span class="btn btn-lg btn-dark rounded"><?= $numbers[0][1]; ?></span>
                    <span class="btn btn-lg btn-dark rounded"><?= $numbers[1][1]; ?></span>
                    <span class="btn btn-lg btn-dark rounded"><?= $numbers[2][1]; ?></span>
                    <span class="btn btn-lg btn-dark rounded"><?= $numbers[3][1]; ?></span>
                    <span class="btn btn-lg btn-dark rounded"><?= $numbers[4][1]; ?></span>
                    <span class="btn btn-lg btn-warning rounded"><?= $chance[0][1]; ?></span>
                </p>

                <h3><small><i class="fa fa-trophy"></i> JOCKER +</small></h3>
                <h3><span class="badge badge-dark"><?= $joker[0][1]; ?></span></h3>
            <?php endif; ?>
        </div>
    </section>

    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header bg-primary text-white text-uppercase">
                            Résultats du Loto
                        </div>
                        <div class="card-body">
                            <?php if(preg_match_all("/$getGains/siU", $input, $gains, PREG_SET_ORDER)): ?>
                                <div class="table-responsive table-striped table-hover">
                                    <table class="table" cellspacing="0">
                                        <?= $gains[0][1]; ?>
                                    </table>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include ('footer.php'); ?>
