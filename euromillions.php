<?php
//SEO
$seo['title'] = "Derniers Résultats EuroMillions";
$seo['meta_description'] = "";
//Include Header Page
include ('header.php');
//Define URL FDJ to scrap
$urlhn = "https://www.fdj.fr/jeux/jeux-de-tirage/euromillions/resultats";
//Identify elements to scrap
$input = @file_get_contents($urlhn) or die("Impossible to get : $urlhn");
$getDate = '<h3 class="dateTirage mt20 fl">(.*)<\/h3>';
$getNumbers = '<p class="euro_num">(.*)<\/p>';
$getChance = '<p class="euro_num_c">(.*)<\/p>';
$getMyMillion = '<p class="tirage_my_million"><span>(.*)<\/span><\/p>';
$getGains = '<table class="tableErgo" cellspacing="0">(.*)<\/table>';
?>

<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading text-uppercase">Derniers Résultats EuroMillions</h1>
            <?php if(preg_match_all("/$getNumbers/siU", $input, $numbers, PREG_SET_ORDER)
                AND (preg_match_all("/$getDate/siU", $input, $date, PREG_SET_ORDER))
                AND (preg_match_all("/$getChance/siU", $input, $chance, PREG_SET_ORDER))
                AND (preg_match_all("/$getMyMillion/siU", $input, $myMillion, PREG_SET_ORDER))) :
                ?>

                <p><i class="fa fa-calendar"></i> <?= utf8_encode($date[0][1]); ?>  </p>

                <p>
                    <span class="btn btn-lg btn-dark rounded"><?= $numbers[0][1]; ?></span>
                    <span class="btn btn-lg btn-dark rounded"><?= $numbers[1][1]; ?></span>
                    <span class="btn btn-lg btn-dark rounded"><?= $numbers[2][1]; ?></span>
                    <span class="btn btn-lg btn-dark rounded"><?= $numbers[3][1]; ?></span>
                    <span class="btn btn-lg btn-dark rounded"><?= $numbers[4][1]; ?></span>
                    <span class="btn btn-lg btn-warning rounded"><?= $chance[0][1]; ?></span>
                    <span class="btn btn-lg btn-warning rounded"><?= $chance[1][1]; ?></span>
                </p>

                <h3><small><i class="fa fa-trophy"></i> MY MYLLION</small></h3>
                <h3><span class="badge badge-dark"><?= $myMillion[0][1]; ?></span></h3>
            <?php endif; ?>
        </div>
    </section>

    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header bg-primary text-white text-uppercase">
                            Résultats EuroMillions
                        </div>
                        <div class="card-body">
                            <?php if(preg_match_all("/$getGains/siU", $input, $gains, PREG_SET_ORDER)): ?>
                                <div class="table-responsive table-striped table-hover">
                                    <table class="table" cellspacing="0">
                                        <?=
                                        str_replace(
                                            array(
                                                '<span class="etoile fl sprite-jeux-form_combien_etoile">&nbsp;</span>',
                                                '<span class="etoile sprite-jeux-form_combien_etoile">&nbsp;</span>'
                                            ),
                                            array(
                                                '<i class="fa fa-star"></i> ',
                                                '<i class="fa fa-star"></i> '
                                            ),
                                            $gains[0][1]
                                        ); ?>
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
