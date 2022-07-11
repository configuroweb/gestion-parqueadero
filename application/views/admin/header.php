<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gestión Parqueadero</title>
    <link rel="icon" href="<?= base_url('assets/images/ico.png'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="</?=base_url('assets/css/bootstrap.css');?>"> -->
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-responsive-bs4/2.3.0/responsive.bootstrap4.min.js" integrity="sha512-Isz8YdCq0qR8rvj22HWFFfj9vi+ambuHruMv9ctDBb2BDiSfOcY76BcoH5uSVj1nHDbCUb9qeG2CDSTYkaf8QQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
</head>

<body class="bg-light" style="font-family: Quicksand;">
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
        }

        .list-group>.active {
            background-color: #ca4040;
        }

        #size {
            width: 85px;
            margin-top: 5px;
        }

        #more_info {
            text-decoration: none;
        }

        #more_info:hover {
            opacity: 0.7
        }

        .disabled {
            cursor: not-allowed !important;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
        <div class="navbar-brand mt-1 ml-1">
            <h5><span class="text-primary">ConfiguroWeb</span></h5>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <h6 class="nav-link mt-2 mr-3" id="font_size">
                    <?php foreach ($user as $u) : ?>
                        <i class="fas fa-user-circle text-primary"></i>&nbsp; Hola de nuevo, <?= $u->name; ?>
                    <?php endforeach; ?>
                </h6>
            </li>
            <li class="nav-item">
                <h6>
                    <a href="<?= base_url('admin/logout'); ?>" class="nav-link text-white btn btn-sm bg-primary border-0" id="size">
                        Cerrar Sesión
                    </a>
                </h6>
            </li>
        </ul>
    </nav>