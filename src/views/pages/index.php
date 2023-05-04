<!DOCTYPE html>
<html lang="en">

    <?php $render('header'); ?>

    <body class="sb-nav-fixed">

        <?php $render('navbar'); ?>

        <div id="layoutSidenav">

            <?php $render('sidenav', array("name"=>$name)); ?>

            <div id="layoutSidenav_content">

                <main>

                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Home</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Home</li>
                        </ol>

                        <div class="row">
                            <div class="col">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Lojas</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?=$base?>/lojas">Ver detalhes</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                    </div>

                </main>

                <?php $render('footer'); ?>
    
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=$base?>/../src/views/pages/js/scripts.js"></script>
        <script type="text/javascript" src="<?=$base?>/../src/assets/js/home.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?=$base?>/../src/views/pages/assets/demo/chart-area-demo.js"></script>
        <script src="<?=$base?>/../src/views/pages/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?=$base?>/../src/views/pages/js/datatables-simple-demo.js"></script>

    </body>

</html>