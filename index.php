<?php
//SEO
$seo['title'] = "Euromillions & Loto PHP Scraper";
$seo['meta_description'] = "";
//Include Header Page
include ('header.php');
?>

<main role="main">
    <section class="jumbotron text-center">
        <div class="container-fluid">
            <h1 class="jumbotron-heading">SCRAPER PHP EUROMILLIONS & LOTO</h1>
            <p class="text-muted">Exemple PHP pour scraper les derniers résultats EuroMillions & Lotos.</p>
        </div>
    </section>

    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="" alt="Euromillions Scraper PHP" src="img/euromillions.png" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body text-center">
                            <h4>Euromillions</h4>
                            <p class="card-text">Découvrez les derniers résultats du tirage Euromillions.</p>
                            <a href="euromillions.php" class="btn btn-primary text-uppercase">Voir les résultats EuroMillions</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="" alt="Loto Scraper PHP" src="img/loto.png" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body text-center">
                            <h4>Loto</h4>
                            <p class="card-text">Découvrez les derniers résultats du tirage du Loto.</p>
                            <a href="loto.php" class="btn btn-primary text-uppercase">Voir les résultats du Loto</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1613ad5f2b1%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1613ad5f2b1%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.234375%22%20y%3D%22120.3%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                        <div class="card-body text-center">
                            <h4>Prochainement</h4>
                            <p class="card-text">..........................................................................................................................................................</p>
                            <a href="" class="btn btn-secondary text-uppercase btn-disable">Prochainement...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include ('footer.php'); ?>
