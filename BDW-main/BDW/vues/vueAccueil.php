<link rel="stylesheet" href="css/creer.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
<div class="container">
    <form method="post">
        <div class="container">
            <h3 class="mb-3">Bonjour, démarrez votre session d'écoute </h3>
            <div class="row mb-1">
                <div class="col-sm-4">
                    <div class="card h-75">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $line1 ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-play-fill rounded-circle" viewBox="0 0 16 16">
                                        <path
                                            d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                                    </svg>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card h-75">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $line2 ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-play-fill rounded-circle" viewBox="0 0 16 16">
                                        <path
                                            d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                                    </svg>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card h-75">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $line3 ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                        class="bi bi-play-fill rounded-circle" viewBox="0 0 16 16">
                                        <path
                                            d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                                    </svg>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card h-75">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $line4 ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            fill="currentColor" class="bi bi-play-fill rounded-circle"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                                        </svg>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card h-75">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $line5 ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            fill="currentColor" class="bi bi-play-fill rounded-circle"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                                        </svg>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card h-75">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?= $line6 ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            fill="currentColor" class="bi bi-play-fill rounded-circle"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                                        </svg>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container ">
                    <h3 class="mb-3">Découvrir...</h3>
                    <div class="row mt-4">
                        <div class="col-sm-2 text-center">
                            <div class="card" data-bs-toggle="collapse" href="#top5Groupe" aria-expanded="false"
                                aria-controls="top5Groupe">
                                <div class="card-body">
                                    <h5 class="card-title">Top 5 des artistes les plus écoutés</h5>
                                    <p class="card-text">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 text-center">
                            <div class="card" data-bs-toggle="collapse" href="#top5Album" aria-expanded="false"
                                aria-controls="top5Album">
                                <div class="card-body">
                                    <h5 class="card-title">Top 5 des albums les plus écoutés</h5>
                                    <p class="card-text">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 text-center">
                            <div class="card" data-bs-toggle="collapse" href="#top5Chanson" aria-expanded="false"
                                aria-controls="top5Chanson">
                                <div class="card-body">
                                    <h5 class="card-title">Top 5 des chansons les plus écoutés</h5>
                                    <p class="card-text">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse mt-3" id="top5Groupe">
                    <table class="table table-striped table-dark table-bordered" style="text-align:center;">
                        <thread class="thread-dark">
                            <tr>
                                <th scope="row">#</th>
                                <th scope="row">Groupe</th>
                            </tr>
                        </thread>
                        <?php for ($i = 0; $i < 5; $i++) { { ?>
                        <tr>
                            <th scope="row">
                                <?= $i + 1 ?>
                            </th>
                            <td>
                                <?= $chansons[$i]['groupe'] ?>
                            </td>
                        </tr>
                        <?php
                            }
                        } ?>
                    </table>
                </div>
                <div class="collapse mt-3" id="top5Album">
                    <table class="table table-striped table-dark table-bordered" style="text-align:center;">
                        <thread class="thread-dark">
                            <tr>
                                <th scope="row">#</th>
                                <th scope="row">Album</th>
                            </tr>
                        </thread>
                        <?php for ($i = 0; $i < 5; $i++) { { ?>
                        <tr>
                            <th scope="row">
                                <?= $i + 1 ?>
                            </th>
                            <td>
                                <?= $chansons[$i]['album'] ?>
                            </td>
                        </tr>
                        <?php
                            }
                        } ?>
                    </table>
                </div>
                <div class="collapse mt-3" id="top5Chanson">
                    <table class="table table-striped table-dark table-bordered" style="text-align:center;">
                        <thread class="thread-dark">
                            <tr>
                                <th scope="row">#</th>
                                <th scope="row">Chanson</th>
                            </tr>
                        </thread>
                        <?php for ($i = 0; $i < 5; $i++) { { ?>
                        <tr>
                            <th scope="row">
                                <?= $i + 1 ?>
                            </th>
                            <td>
                                <?= $chansons[$i]['titre'] ?>
                            </td>
                        </tr>
                        <?php
                            }
                        } ?>
                    </table>
                </div>
                <div class="container">
                    <h3 class="mb-3 mt-3">Découvrez les nouveaux albums</h3>
                    <div class="row mt-4">
                        <div class="col-sm-2 text-center">
                            <div class="card" data-bs-toggle="collapse" href="#album1" aria-expanded="false"
                                aria-controls="album1">
                                <div class="card-body">
                                    <h5 class="card-title">Tim Burton's The Nightmare Before Christmas</h5>
                                    <p class="card-text">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 text-center">
                            <div class="card" data-bs-toggle="collapse" href="#album2" aria-expanded="false"
                                aria-controls="album2">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Carmina Burana</h5>
                                    <p class="card-text">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse mt-3" id="album1">
                <table class="table table-striped table-dark table-bordered" style="text-align:center;">
                        <thread class="thread-dark">
                            <tr>
                                <th scope="row">#</th>
                                <th scope="row">Titre</th>
                                <th scope="row">Album</th>
                                <th scope="row">Groupe</th>
                                <th scope="row">Track</th>
                                <th scope="row">Dates</th>
                                <th scope="row">Genre</th>
                            </tr>
                        </thread>
                        <?php $i = 1 ?>
                        <?php foreach ($album1 as $chansons) { { ?>
                        <tr>
                            <th scope="row">
                                <?= $i ?>
                            </th>
                            <td>
                                <?= $chansons['titre'] ?>
                            </td>
                            <td>
                                <?= $chansons['album'] ?>
                            </td>
                            <td>
                                <?= $chansons['groupe'] ?>
                            </td>
                            <td>
                                <?= $chansons['track'] ?>
                            </td>
                            <td>
                                <?= $chansons['dates'] ?>
                            </td>
                            <td>
                                <?= $chansons['genre'] ?>
                            </td>
                            <?php $i++ ?>
                        </tr>
                        <?php
                            }
                        } ?>
                    </table>
                </div>
                <div class="collapse mt-3" id="album2">
                    <table class="table table-striped table-dark table-bordered" style="text-align:center;">
                        <thread class="thread-dark">
                            <tr>
                                <th scope="row">#</th>
                                <th scope="row">Titre</th>
                                <th scope="row">Album</th>
                                <th scope="row">Groupe</th>
                                <th scope="row">Track</th>
                                <th scope="row">Dates</th>
                                <th scope="row">Genre</th>
                            </tr>
                        </thread>
                        <?php $i = 1 ?>
                        <?php foreach ($album2 as $chansons) { { ?>
                        <tr>
                            <th scope="row">
                                <?= $i ?>
                            </th>
                            <td>
                                <?= $chansons['titre'] ?>
                            </td>
                            <td>
                                <?= $chansons['album'] ?>
                            </td>
                            <td>
                                <?= $chansons['groupe'] ?>
                            </td>
                            <td>
                                <?= $chansons['track'] ?>
                            </td>
                            <td>
                                <?= $chansons['dates'] ?>
                            </td>
                            <td>
                                <?= $chansons['genre'] ?>
                            </td>
                            <?php $i++ ?>
                        </tr>
                        <?php
                            }
                        } ?>
                    </table>
                </div>
    </form>
</div>
