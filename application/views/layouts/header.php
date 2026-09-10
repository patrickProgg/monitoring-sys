<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MONITORING</title>
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/loan.png" />

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/app.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/daterangepicker.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/material.icon.css" rel="stylesheet" />
    <link href="<?php echo base_url('public/css/styles.css'); ?>" rel="stylesheet">


    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugin.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/qrcode.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/feather.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/JsBarcode.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/daterangepicker.min.js"></script>

    <link id="bootstrap-style" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="app-style" href="<?php echo base_url(); ?>assets/css/app.min.css" rel="stylesheet" />

    <style>
        @import url('<?php echo base_url(); ?>assets/css/style.css');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        :root {
            --poppins: 'Poppins', sans-serif;

            --light: #F9F9F9;
            --blue: #3C91E6;
            --light-blue: #CFE8FF;
            --light-grey: rgb(220, 223, 226);
            --grey: #eee;
            --dark-grey: #AAAAAA;
            --dark: #342E37;
            --red: #DB504A;
            --yellow: #FFCE26;
            --light-yellow: #FFF2C6;
            --orange: #FD7238;
            --light-orange: #FFE0D3;
            --silver: #f3efefa2;
        }

        body.dark {
            --light: #0C0C1E;
            --grey: #060714;
            --dark: #FBFBFB;
        }

        body {
            background: var(--silver);
            /* background: silver; */
            overflow-x: hidden;
        }

        .btn {
            font-size: 11px;
            position: relative;
            overflow: hidden;
            border: none;
            isolation: isolate;
        }

        .btn.christmas-effects::before {
            content: "";
            position: absolute;
            inset: 1px;
            pointer-events: none;
            z-index: 1;

            /* border: 1px solid rgba(220, 248, 255, 0.9); */
            border-radius: inherit;

            box-shadow:
                inset 0 0 3px rgba(255, 255, 255, 0.5),
                inset 0 0 6px rgba(180, 230, 255, 0.35);

            /* Your snow/ice */
            background:
                radial-gradient(ellipse 14px 9px at 8% 100%,
                    #fff 0%,
                    #fff 65%,
                    transparent 70%),
                radial-gradient(ellipse 18px 10px at 23% 100%,
                    #fff 0%,
                    #fff 65%,
                    transparent 70%),
                radial-gradient(ellipse 15px 8px at 40% 100%,
                    #fff 0%,
                    #fff 65%,
                    transparent 70%),
                radial-gradient(ellipse 20px 10px at 58% 100%,
                    #fff 0%,
                    #fff 65%,
                    transparent 70%),
                radial-gradient(ellipse 16px 9px at 76% 100%,
                    #fff 0%,
                    #fff 65%,
                    transparent 70%),
                radial-gradient(ellipse 19px 10px at 92% 100%,
                    #fff 0%,
                    #fff 65%,
                    transparent 70%);

            filter: drop-shadow(0 -2px 2px rgba(190, 230, 250, 0.7));
        }

        #content main {
            width: 100%;
            /* padding: 8px 15px; */
            font-family: var(--poppins);
            /* max-height: calc(100vh - 56px); */
            overflow-y: auto;
        }

        #content main .head-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            grid-gap: 16px;
            flex-wrap: wrap;
        }

        .head-title .buttons {
            display: flex;
            flex-direction: column;
            /* Stack buttons vertically */
            gap: 10px;
            /* Add spacing between buttons */
        }

        #content main .head-title .btn-upload {
            height: 36px;
            padding: 0 16px;
            border-radius: 36px;
            background: var(--red);
            color: var(--light);
            display: flex;
            justify-content: center;
            align-items: center;
            grid-gap: 10px;
            font-weight: 500;
        }

        #content main .head-title .btn-download {
            height: 36px;
            padding: 0 16px;
            border-radius: 36px;
            background: var(--blue);
            color: var(--light);
            display: flex;
            justify-content: center;
            align-items: center;
            grid-gap: 10px;
            font-weight: 500;
        }

        #content main .table-data {
            display: flex;
            flex-wrap: wrap;
            grid-gap: 24px;
            margin-top: 10px;
            width: 100%;
            color: var(--dark);
            /* color: #ffffff; */
            font-size: 14px;
        }

        #content main .table-data>div {
            /* border-radius: 20px; */
            background: var(--light);
            padding: 24px;
            overflow-x: auto;
            background-color: rgb(255, 255, 255);
            /* background-color: transparent; */
            /* White background with 50% opacity */
        }

        #content main .table-data .head {
            display: flex;
            align-items: center;
            grid-gap: 16px;
            margin-bottom: 24px;
        }

        #content main .table-data .head h3 {
            margin-right: auto;
            font-size: 24px;
            font-weight: 600;
        }

        #content main .table-data .head .bx {
            cursor: pointer;
        }

        #content main .table-data .order {
            flex-grow: 1;
            flex-basis: 500px;
        }

        #content main .table-data .order table {
            width: 100%;
            border-collapse: collapse;
        }

        #content main .table-data .order table th {
            font-size: 13px;
            text-align: left;
            padding-left: 5px;
            color: var(--dark);
            /* background: silver; */
            font-weight: bold;
            background: var(--light-grey);
            padding-right: 0;
        }

        #content main .table-data .order table td {
            padding: 10px 0;
            font-size: 14px;
            padding-left: 5px;
            padding-right: 5px;
            background: transparent;

        }

        /* #content main .table-data .order table tbody tr:hover {
            background: var(--light-blue);
        } */

        .form-control {
            border: 1px solid #cfd1d8;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-size: .825rem;
            background: #ffffff;
            color: #2e323c;
        }

        .card {
            background: #ffffff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
        }

        /* MAIN */
        /* CONTENT */

        #content main .table-data .head {
            min-width: 420px;
        }

        #content main .table-data .order table {
            min-width: 420px;
        }


        .page-content {
            padding: 10px;
            padding-left: 100px;
            padding-right: 100px;
        }

        .main-content {
            width: 100%;
            /* padding: 10px; */
            margin-left: 0 !important;
            /* background-image: url('https://www.transparenttextures.com/patterns/clean-gray-paper.png'); */
            padding-top: 40px;
            overflow: hidden;
        }

        .navbar-nav .nav-link {
            color: var(--bs-dark);
            /* color: dark; */

            font-size: 14px;
        }

        .navbar .container-fluid {
            padding-left: 0 !important;
            height: 60px !important;
        }

        footer.footer {
            width: 100%;
            left: 0;
        }

        .active-nav {
            height: 50px;
            color: var(--bs-black) !important;
            padding-top: 11px;
            border-bottom: 3px solid var(--bs-primary) !important;
        }

        .navbar-nav .nav-link:hover {
            /* color: var(--bs-primary) !important; */
            color: var(--bs-black) !important;
        }

        #content main {
            overflow-x: hidden;
        }

        .page-title-box {
            color: black;
        }

        @media (max-width: 765px) {
            .menu-label {
                display: none;
            }

            .nav-link .text {
                display: none;
            }
        }

        #datefilter {
            text-align: center;
            background: transparent;
            border: none;
            border-bottom: 1px solid var(--bs-primary);
        }

        /* .dataTables_filter input {
            width: 300px !important;
            display: inline-block;
        } */

        input[type="text"] {
            text-transform: capitalize;
        }

        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_desc:before {
            display: none !important;
        }

        table.dataTable thead .sorting,
        table.dataTable thead .sorting_asc,
        table.dataTable thead .sorting_desc {
            cursor: pointer;
        }

        #snow {
            position: fixed;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
            z-index: 9999;
        }

        .snowflake {
            position: absolute;
            top: -50px;
            color: rgba(0, 140, 255, 0.8);
            font-size: 20px;
            user-select: none;
            animation: fall linear infinite;
            filter: drop-shadow(0 0 2px rgba(0, 100, 255, 0.4));
        }

        @keyframes fall {
            0% {
                transform: translateY(-50px) translateX(0) rotate(0deg);
            }

            25% {
                transform: translateY(25vh) translateX(30px) rotate(90deg);
            }

            50% {
                transform: translateY(50vh) translateX(-30px) rotate(180deg);
            }

            75% {
                transform: translateY(75vh) translateX(30px) rotate(270deg);
            }

            100% {
                transform: translateY(110vh) translateX(-20px) rotate(360deg);
            }
        }

        #cursor-dust {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 10000;
        }

        .cursor-particle {
            position: fixed;
            pointer-events: none;
            font-size: 10px;
            animation: christmasDust 0.8s ease-out forwards;
        }

        @keyframes christmasDust {
            0% {
                opacity: 1;
                transform: translate(0, 0) scale(1);
            }

            100% {
                opacity: 0;
                transform:
                    translate(var(--move-x), var(--move-y)) scale(0);
            }
        }

        #cursor-trail {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 10000;
        }

        #cursor-dust {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 10001;
        }

        .cursor-particle {
            position: fixed;
            pointer-events: none;
            user-select: none;
            animation: christmasDust 0.8s ease-out forwards;
        }

        @keyframes christmasDust {
            0% {
                opacity: 1;
                transform: translate(0, 0) scale(1);
            }

            100% {
                opacity: 0;
                transform:
                    translate(var(--move-x), var(--move-y)) scale(0);
            }
        }

        #frost-glass {
            position: fixed;
            inset: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            z-index: 10000;
            overflow: hidden;
            display: block;
        }

        .real-frost {
            position: absolute;
            overflow: visible;
            display: block;
            pointer-events: none;

            filter:
                drop-shadow(0 0 2px rgba(70, 160, 230, 0.8)) drop-shadow(0 0 8px rgba(100, 190, 245, 0.35));
        }

        .frost-arm {
            fill: none;

            stroke: rgba(75, 165, 230, 0.72);

            stroke-width: 1.4;

            stroke-linecap: round;

            stroke-linejoin: round;

            stroke-dasharray: 1;
            stroke-dashoffset: 1;

            animation:
                growCrystal 2.5s ease-out forwards;
        }


        .frost-branch {
            fill: none;

            stroke: rgba(75, 165, 230, 0.68);

            stroke-width: 1.2;

            stroke-linecap: round;

            stroke-linejoin: round;

            stroke-dasharray: 1;
            stroke-dashoffset: 1;

            animation:
                growCrystalBranch 1.5s ease-out forwards;
        }


        .frost-branch-small {
            fill: none;

            stroke: rgba(95, 180, 235, 0.58);

            stroke-width: 0.9;

            stroke-linecap: round;

            stroke-dasharray: 1;
            stroke-dashoffset: 1;

            animation:
                growCrystalBranch 1.2s ease-out forwards;
        }


        .frost-center {
            fill: none;

            stroke: rgba(100, 190, 240, 0.75);

            stroke-width: 1.4;

            stroke-linecap: round;

            stroke-dasharray: 1;
            stroke-dashoffset: 1;

            animation:
                growCrystal 1.5s ease-out forwards;
        }

        @keyframes growCrystal {

            0% {
                stroke-dashoffset: 1;
                opacity: 0;
            }

            20% {
                opacity: 0.4;
            }

            100% {
                stroke-dashoffset: 0;
                opacity: 1;
            }
        }

        @keyframes growCrystalBranch {

            0% {
                stroke-dashoffset: 1;
                opacity: 0;
            }

            100% {
                stroke-dashoffset: 0;
                opacity: 0.8;
            }
        }

        /* ========================================
   ICE GLASS OVERLAY
   ======================================== */

        #ice-overlay {
            position: fixed;
            inset: 0;

            pointer-events: none;

            z-index: 9996;

            opacity: 0;

            transition: opacity 2s ease;

            overflow: hidden;

            background:
                radial-gradient(ellipse at top left,
                    rgba(190, 230, 255, 0.35),
                    transparent 35%),
                radial-gradient(ellipse at top right,
                    rgba(180, 225, 255, 0.30),
                    transparent 35%),
                radial-gradient(ellipse at bottom left,
                    rgba(180, 225, 255, 0.30),
                    transparent 35%),
                radial-gradient(ellipse at bottom right,
                    rgba(190, 235, 255, 0.35),
                    transparent 35%);
        }


        #ice-overlay::before {
            content: "";

            position: absolute;
            inset: 0;

            background:
                linear-gradient(to bottom,
                    rgba(220, 245, 255, 0.45),
                    transparent 15%,
                    transparent 85%,
                    rgba(190, 230, 255, 0.45)),
                linear-gradient(to right,
                    rgba(220, 245, 255, 0.45),
                    transparent 15%,
                    transparent 85%,
                    rgba(190, 230, 255, 0.45));

            filter: blur(8px);
        }


        /* ========================================
   FROZEN CORNERS
   ======================================== */

        #ice-overlay::after {
            content: "";

            position: absolute;
            inset: 0;

            pointer-events: none;

            background:

                radial-gradient(circle at 0% 0%,
                    rgba(220, 245, 255, 0.55),
                    transparent 25%),

                radial-gradient(circle at 100% 0%,
                    rgba(220, 245, 255, 0.50),
                    transparent 25%),

                radial-gradient(circle at 0% 100%,
                    rgba(220, 245, 255, 0.50),
                    transparent 25%),

                radial-gradient(circle at 100% 100%,
                    rgba(220, 245, 255, 0.55),
                    transparent 25%);

            filter: blur(8px);
        }

        /* ========================================
   RANDOM ICE PATCH
   ======================================== */

        .ice-patch {

            position: absolute;

            pointer-events: none;

            border-radius:
                45% 55% 60% 40% / 55% 40% 60% 45%;

            background:

                radial-gradient(ellipse,
                    rgba(220, 245, 255, 0.30),
                    rgba(180, 225, 250, 0.14) 45%,
                    transparent 72%);

            filter:
                blur(5px);

            box-shadow:

                0 0 15px rgba(180, 225, 255, 0.20),

                inset 0 0 20px rgba(220, 245, 255, 0.15);

            animation:
                iceGrow 3s ease-out forwards;
        }


        @keyframes iceGrow {

            from {
                opacity: 0;
                transform:
                    scale(0.3) rotate(0deg);
            }

            to {
                opacity: 1;
            }
        }

        .ice-crack path {
            fill: none;

            /* Much clearer */
            stroke: rgba(255, 255, 255, 0.95);

            /* Thicker */
            stroke-width: 2.2px;

            stroke-linecap: round;
            stroke-linejoin: round;

            stroke-dasharray: 1;
            stroke-dashoffset: 1;

            /* Strong ice glow */
            filter:
                drop-shadow(0 0 2px rgba(255, 255, 255, 1)) drop-shadow(0 0 5px rgba(180, 230, 255, 0.95)) drop-shadow(0 0 10px rgba(150, 220, 255, 0.6));

            animation:
                iceCrackGrow 3s ease-out forwards;
        }

        @keyframes iceCrackGrow {

            0% {
                stroke-dashoffset: 1;
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            100% {
                stroke-dashoffset: 0;
                opacity: 1;
            }
        }

        .ice-crack {
            position: absolute;

            width: 150px;
            height: 350px;

            pointer-events: none;
            z-index: 5;
        }

        .main-ice-crack {
            stroke-width: 2.8px !important;
            stroke: rgba(255, 255, 255, 1) !important;
        }
    </style>

</head>

<body>
    <div id="ice-overlay"></div>
    <div id="frost-glass"></div>
    <div id="snow"></div>
    <div id="cursor-dust"></div>
    <canvas id="cursor-trail"></canvas>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm px-0" style="height: 50px; background-size: cover; background-position: center; background-repeat: no-repeat; background-image: linear-gradient(rgba(255, 255, 255, 1), rgba(255, 255, 255, 0.7)), url('<?php echo base_url("assets/images/blue.png"); ?>'); width: 100%; position:
        fixed; top: 0; width: 100%; z-index: 1050; padding:0">
        <!-- <nav class="navbar navbar-expand-lg navbar-dark shadow-sm px-0"
        style="height: 50px; background-color: #87CEEB; width: 100%; position: fixed; top: 0; z-index: 1050; padding: 0"> -->

        <a class="navbar-brand d-flex align-items-center" style="margin-left:129px;" href="<?= base_url(); ?>dashboard"
            style="height: 100%;">
            <img src="<?= base_url(); ?>assets/images/loan.png" alt="Logo" style="height: 30px;">
        </a>

        <ul class="navbar-nav flex-row align-items-center me-auto" style="margin: 0; padding: 0; column-gap: 12px;">
            <li class="nav-item" style="flex-shrink: 1; min-width: 0;">
                <a class="nav-link d-flex align-items-center gap-1 <?= ($this->uri->segment(1) == 'dashboard') ? 'active-nav' : '' ?>"
                    href="<?= base_url(); ?>dashboard">
                    <i class="bx bx-pulse"></i>
                    <span class="menu-label">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" style="flex-shrink: 1; min-width: 0;">
                <a class="nav-link d-flex align-items-center gap-1 <?= ($this->uri->segment(1) == 'client') ? 'active-nav' : '' ?>"
                    href="<?= base_url(); ?>client">
                    <i class='bx bx-user'></i>
                    <span class="menu-label">Client</span>
                </a>
            </li>
            <li class="nav-item" style="flex-shrink: 1; min-width: 0;">
                <a class="nav-link d-flex align-items-center gap-1 <?= ($this->uri->segment(1) == 'pull_out') ? 'active-nav' : '' ?>"
                    href="<?= base_url(); ?>pull_out">
                    <i class='bx bx-receipt'></i>
                    <span class="menu-label">Pull Out</span>
                </a>
            </li>
            <li class="nav-item" style="flex-shrink: 1; min-width: 0;">
                <a class="nav-link d-flex align-items-center gap-1 <?= ($this->uri->segment(1) == 'expenses') ? 'active-nav' : '' ?>"
                    href="<?= base_url(); ?>expenses">
                    <i class="bx bx-wallet"></i>
                    <span class="menu-label">Expenses</span>
                </a>
            </li>
            <li class="nav-item" style="flex-shrink: 1; min-width: 0;">
                <a class="nav-link d-flex align-items-center gap-1 <?= ($this->uri->segment(1) == 'history') ? 'active-nav' : '' ?>"
                    href="<?= base_url(); ?>history">
                    <i class='bx bx-history'></i>
                    <span class="menu-label">History</span>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto" style="margin-right:122px;">

            <li class="nav-item d-flex align-items-center">
                <a href="javascript:void(0)" class="nav-link d-flex align-items-center gap-2" id="snow-toggle"
                    onclick="toggleSnow()">

                    <i class="bx bx-snowflake"></i>

                    <span class="text" id="snow-text">Effects: OFF</span>

                    <div class="form-check form-switch mb-0">
                        <input class="form-check-input" type="checkbox" id="snow-switch"
                            onclick="event.stopPropagation(); toggleSnow();">
                    </div>

                </a>
            </li>

            <li class="nav-item">
                <a href="<?= base_url('logout') ?>" class="nav-link logout text-danger" id="logout-link">
                    <i class="bx bx-log-out"></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>

    </nav>
    <!-- Navbar End -->
    <script>
        feather.replace();

        document.addEventListener('DOMContentLoaded', function () {
            const logoutLink = document.getElementById('logout-link');

            logoutLink.addEventListener('click', function (e) {
                e.preventDefault(); // prevent immediate logout

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You will be logged out!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, logout!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // show loading swal
                        Swal.fire({
                            title: '<strong>Logging Out...</strong>',
                            html: '<i class="fa fa-spinner fa-spin" style="font-size: 24px; color: #4caf50;"></i><br><br>Please wait while we logged you out.',
                            showConfirmButton: false,
                            // background: 'linear-gradient(135deg, #f3f4f6, #e0f7fa)',
                            color: '#333',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            didOpen: () => {
                                const swalContent = Swal.getHtmlContainer();
                                if (swalContent) {
                                    swalContent.style.textAlign = 'center';
                                }
                            }
                        });
                        setTimeout(() => {
                            window.location.href = logoutLink.href;
                        }, 500);
                    }
                });
            });
        });

        function toggleSnow() {

            const snow =
                document.getElementById('snow');

            const text =
                document.getElementById('snow-text');

            const toggle =
                document.getElementById('snow-switch');

            const cursorDust =
                document.getElementById('cursor-dust');

            const cursorTrail =
                document.getElementById('cursor-trail');


            if (toggle.checked) {

                // =========================
                // EFFECTS ON
                // =========================

                snow.style.display = 'block';

                cursorDust.style.display = 'block';

                cursorTrail.style.display = 'block';

                applyChristmasButtonEffects(true);

                text.textContent =
                    'Effects: ON';

                localStorage.setItem(
                    'snowEnabled',
                    'true'
                );


                // Start 5 second idle timer
                startIdleEffects();


            } else {

                // =========================
                // EFFECTS OFF
                // =========================

                snow.style.display = 'none';

                cursorDust.style.display = 'none';

                cursorTrail.style.display = 'none';

                applyChristmasButtonEffects(false);

                text.textContent =
                    'Effects: OFF';

                localStorage.setItem(
                    'snowEnabled',
                    'false'
                );


                // EVERYTHING OFF
                stopIdleEffects();
            }
        }

        document.addEventListener(
            'DOMContentLoaded',
            function () {

                const snow =
                    document.getElementById('snow');

                const text =
                    document.getElementById('snow-text');

                const toggle =
                    document.getElementById('snow-switch');

                const cursorDust =
                    document.getElementById('cursor-dust');

                const cursorTrail =
                    document.getElementById('cursor-trail');

                const buttons =
                    document.querySelectorAll('.btn');

                const snowEnabled =
                    localStorage.getItem('snowEnabled');

                const iceOverlay =
                    document.getElementById('ice-overlay');


                // =========================
                // DEFAULT = OFF
                // =========================

                if (snowEnabled === 'true') {

                    toggle.checked = true;

                    snow.style.display = 'block';

                    cursorDust.style.display = 'block';

                    cursorTrail.style.display = 'block';

                    buttons.forEach(function (button) {

                        button.classList.add(
                            'christmas-effects'
                        );

                    });

                    text.textContent =
                        'Effects: ON';


                    // Start 5 second idle timer
                    startIdleEffects();


                } else {

                    toggle.checked = false;

                    snow.style.display = 'none';

                    cursorDust.style.display = 'none';

                    cursorTrail.style.display = 'none';

                    buttons.forEach(function (button) {

                        button.classList.remove(
                            'christmas-effects'
                        );

                    });

                    text.textContent =
                        'Effects: OFF';


                    stopIdleEffects();
                }

            }
        );

        function applyChristmasButtonEffects(enabled) {
            document.querySelectorAll('.btn').forEach(function (button) {
                if (enabled) {
                    button.classList.add('christmas-effects');
                } else {
                    button.classList.remove('christmas-effects');
                }
            });
        }

        $(document).on('draw.dt', function () {
            const enabled = localStorage.getItem('snowEnabled') === 'true';

            if (enabled) {
                applyChristmasButtonEffects(true);
            }
        });

        const snow = document.getElementById('snow');

        const flakes = ['❄', '❅', '❆'];

        for (let i = 0; i < 60; i++) {
            const flake = document.createElement('span');

            flake.classList.add('snowflake');

            // Random snowflake shape
            flake.textContent = flakes[Math.floor(Math.random() * flakes.length)];

            // Random position
            flake.style.left = Math.random() * 100 + 'vw';

            // Random size
            const size = Math.random() * 15 + 10;
            flake.style.fontSize = size + 'px';

            // Random speed
            const duration = Math.random() * 8 + 6;
            flake.style.animationDuration = duration + 's';

            // Random starting delay
            flake.style.animationDelay = -(Math.random() * duration) + 's';

            // Random opacity
            flake.style.opacity = Math.random() * 0.5 + 0.4;

            snow.appendChild(flake);
        }

        // =========================
        // CURSOR TRAIL
        // =========================

        const canvas = document.getElementById('cursor-trail');
        const ctx = canvas.getContext('2d');

        let trailPoints = [];

        const TRAIL_LENGTH = 35;
        const LINE_WIDTH = 3;

        function resizeTrailCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }

        resizeTrailCanvas();

        window.addEventListener('resize', resizeTrailCanvas);


        // Track cursor for BOTH effects
        document.addEventListener('mousemove', function (e) {

            mouseX = e.clientX;
            mouseY = e.clientY;

            // Add point to trail
            trailPoints.push({
                x: mouseX,
                y: mouseY,
                life: 1
            });

            if (trailPoints.length > TRAIL_LENGTH) {
                trailPoints.shift();
            }

            // Your Christmas particles
            createCursorParticle(mouseX, mouseY);
        });


        // Draw smooth trail
        function drawTrail() {

            ctx.clearRect(
                0,
                0,
                canvas.width,
                canvas.height
            );

            // Fade points
            trailPoints.forEach(point => {
                point.life -= 0.055;
            });

            trailPoints = trailPoints.filter(
                point => point.life > 0
            );


            if (trailPoints.length > 1) {

                ctx.beginPath();

                ctx.moveTo(
                    trailPoints[0].x,
                    trailPoints[0].y
                );

                // Smooth curve
                for (let i = 1; i < trailPoints.length; i++) {

                    const previous = trailPoints[i - 1];
                    const current = trailPoints[i];

                    const midX =
                        (previous.x + current.x) / 2;

                    const midY =
                        (previous.y + current.y) / 2;

                    ctx.quadraticCurveTo(
                        previous.x,
                        previous.y,
                        midX,
                        midY
                    );
                }


                // Light blue → pink
                const gradient = ctx.createLinearGradient(
                    trailPoints[0].x,
                    trailPoints[0].y,
                    trailPoints[trailPoints.length - 1].x,
                    trailPoints[trailPoints.length - 1].y
                );

                gradient.addColorStop(0, 'rgba(224, 247, 255, 0)');
                gradient.addColorStop(0.15, 'rgba(224, 247, 255, 0.18)');
                gradient.addColorStop(0.30, 'rgba(214, 243, 255, 0.55)');
                gradient.addColorStop(0.45, '#D6F3FF');
                gradient.addColorStop(0.60, '#C8EFFF');
                gradient.addColorStop(0.75, '#BDEBFF');
                gradient.addColorStop(0.90, '#A8E3FF');
                gradient.addColorStop(1, '#96DAFF');

                ctx.strokeStyle = gradient;
                ctx.lineWidth = LINE_WIDTH * 2.5;

                ctx.lineCap = 'round';
                ctx.lineJoin = 'round';

                // Large soft smoke glow
                ctx.shadowBlur = 25;
                ctx.shadowColor = 'rgba(214, 243, 255, 0.8)';

                ctx.stroke();

                // Extra soft outer haze
                ctx.globalAlpha = 0.35;
                ctx.lineWidth = LINE_WIDTH * 4;
                ctx.shadowBlur = 35;
                ctx.shadowColor = 'rgba(224, 247, 255, 0.55)';

                ctx.stroke();

                ctx.globalAlpha = 1;
                ctx.shadowBlur = 0;
            }

            requestAnimationFrame(drawTrail);
        }

        drawTrail();

        const cursorDust = document.getElementById('cursor-dust');

        let mouseX = window.innerWidth / 2;
        let mouseY = window.innerHeight / 2;

        let lastMouseMove = Date.now();

        const particles = ['❄', '✦', '✧', '•', '❅'];


        // Track mouse
        document.addEventListener('mousemove', function (e) {
            mouseX = e.clientX;
            mouseY = e.clientY;

            lastMouseMove = Date.now();

            createCursorParticle(mouseX, mouseY);
        });


        // Create particle
        function createCursorParticle(x, y) {

            const particle = document.createElement('span');

            particle.classList.add('cursor-particle');

            const particles = ['❄', '✦', '✧', '•', '❅'];

            particle.textContent =
                particles[Math.floor(Math.random() * particles.length)];

            // White particle
            particle.style.color = '#2F8FEF';

            particle.style.textShadow = `
                0 0 4px #6EC6FF,
                0 0 8px #4FA8FF,
                0 0 14px rgba(79, 168, 255, 0.75)
            `;

            particle.style.left =
                (x + Math.random() * 20 - 10) + 'px';

            particle.style.top =
                (y + Math.random() * 20 - 10) + 'px';

            particle.style.setProperty(
                '--move-x',
                (Math.random() * 60 - 30) + 'px'
            );

            particle.style.setProperty(
                '--move-y',
                (Math.random() * -60 - 10) + 'px'
            );

            particle.style.fontSize =
                (Math.random() * 8 + 6) + 'px';

            particle.style.animationDuration =
                (Math.random() * 0.6 + 0.6) + 's';

            cursorDust.appendChild(particle);

            setTimeout(() => {
                particle.remove();
            }, 1500);
        }


        // Idle effect
        setInterval(function () {

            // Create particles even when mouse isn't moving
            createCursorParticle(mouseX, mouseY);

        }, 180);

        const frostContainer =
            document.getElementById('frost-glass');

        function createFrostCrystal() {

            const svgNS = "http://www.w3.org/2000/svg";

            const svg = document.createElementNS(
                svgNS,
                "svg"
            );

            svg.classList.add("real-frost");

            const size = Math.random() * 100 + 70;

            svg.setAttribute("width", size);
            svg.setAttribute("height", size);
            svg.setAttribute("viewBox", "0 0 200 200");

            // ========================================
            // POSITION AROUND EDGES
            // ========================================

            const side = Math.random();

            if (side < 0.25) {

                svg.style.left =
                    `${Math.random() * 100}%`;

                svg.style.top =
                    `${Math.random() * 8 - 5}%`;

            } else if (side < 0.5) {

                svg.style.left =
                    `${Math.random() * 8 - 5}%`;

                svg.style.top =
                    `${Math.random() * 100}%`;

            } else if (side < 0.75) {

                svg.style.right =
                    `${Math.random() * 8 - 5}%`;

                svg.style.top =
                    `${Math.random() * 100}%`;

            } else {

                svg.style.left =
                    `${Math.random() * 100}%`;

                svg.style.bottom =
                    `${Math.random() * 8 - 5}%`;
            }

            svg.style.transform =
                `rotate(${Math.random() * 360}deg)`;

            svg.style.opacity =
                Math.random() * 0.30 + 0.55;


            const cx = 100;
            const cy = 100;


            // ========================================
            // LINE HELPER
            // ========================================

            function createLine(
                x1,
                y1,
                x2,
                y2,
                delay,
                className = "frost-branch"
            ) {

                const line =
                    document.createElementNS(
                        svgNS,
                        "path"
                    );

                line.setAttribute(
                    "d",
                    `M ${x1} ${y1} L ${x2} ${y2}`
                );

                line.setAttribute(
                    "pathLength",
                    "1"
                );

                line.classList.add(className);

                line.style.animationDelay =
                    `${delay}s`;

                svg.appendChild(line);
            }


            // ========================================
            // DESIGN 1
            // CLASSIC FEATHERY SNOWFLAKE
            // ========================================

            function designFeather() {

                for (let i = 0; i < 6; i++) {

                    const angle =
                        i * Math.PI / 3;

                    const length =
                        70 + Math.random() * 15;

                    const ex =
                        cx +
                        Math.cos(angle) *
                        length;

                    const ey =
                        cy +
                        Math.sin(angle) *
                        length;

                    createLine(
                        cx,
                        cy,
                        ex,
                        ey,
                        i * .18,
                        "frost-arm"
                    );


                    for (
                        let p = .18;
                        p < .92;
                        p += .12
                    ) {

                        const px =
                            cx +
                            Math.cos(angle) *
                            length *
                            p;

                        const py =
                            cy +
                            Math.sin(angle) *
                            length *
                            p;

                        const branch =
                            (1 - p) * 20 + 3;

                        // upper
                        createLine(
                            px,
                            py,
                            px +
                            Math.cos(angle + Math.PI / 3) *
                            branch,
                            py +
                            Math.sin(angle + Math.PI / 3) *
                            branch,
                            i * .15 + p * 1.8,
                            "frost-branch"
                        );

                        // lower
                        createLine(
                            px,
                            py,
                            px +
                            Math.cos(angle - Math.PI / 3) *
                            branch,
                            py +
                            Math.sin(angle - Math.PI / 3) *
                            branch,
                            i * .15 + p * 1.8 + .1,
                            "frost-branch"
                        );
                    }
                }
            }


            // ========================================
            // DESIGN 2
            // HEAVY FERN SNOWFLAKE
            // ========================================

            function designFern() {

                for (let i = 0; i < 6; i++) {

                    const angle =
                        i * Math.PI / 3;

                    const length = 75;

                    const ex =
                        cx +
                        Math.cos(angle) * length;

                    const ey =
                        cy +
                        Math.sin(angle) * length;

                    createLine(
                        cx,
                        cy,
                        ex,
                        ey,
                        i * .15,
                        "frost-arm"
                    );


                    for (
                        let p = .12;
                        p < .95;
                        p += .10
                    ) {

                        const px =
                            cx +
                            Math.cos(angle) *
                            length *
                            p;

                        const py =
                            cy +
                            Math.sin(angle) *
                            length *
                            p;

                        const branch =
                            7 + (1 - p) * 12;


                        // upper feather
                        const ux =
                            px +
                            Math.cos(angle + Math.PI / 3) *
                            branch;

                        const uy =
                            py +
                            Math.sin(angle + Math.PI / 3) *
                            branch;

                        createLine(
                            px,
                            py,
                            ux,
                            uy,
                            i * .12 + p * 2,
                            "frost-branch"
                        );


                        // lower feather
                        const lx =
                            px +
                            Math.cos(angle - Math.PI / 3) *
                            branch;

                        const ly =
                            py +
                            Math.sin(angle - Math.PI / 3) *
                            branch;

                        createLine(
                            px,
                            py,
                            lx,
                            ly,
                            i * .12 + p * 2 + .1,
                            "frost-branch"
                        );


                        // tiny feather
                        if (p < .75) {

                            createLine(
                                ux,
                                uy,
                                ux +
                                Math.cos(angle + Math.PI / 3) * 5,
                                uy +
                                Math.sin(angle + Math.PI / 3) * 5,
                                i * .12 + p * 2.2,
                                "frost-branch-small"
                            );

                            createLine(
                                lx,
                                ly,
                                lx +
                                Math.cos(angle - Math.PI / 3) * 5,
                                ly +
                                Math.sin(angle - Math.PI / 3) * 5,
                                i * .12 + p * 2.3,
                                "frost-branch-small"
                            );
                        }
                    }
                }
            }


            // ========================================
            // DESIGN 3
            // DIAMOND CRYSTAL
            // ========================================

            function designDiamond() {

                for (let i = 0; i < 6; i++) {

                    const angle =
                        i * Math.PI / 3;

                    const length = 72;

                    const ex =
                        cx +
                        Math.cos(angle) * length;

                    const ey =
                        cy +
                        Math.sin(angle) * length;


                    createLine(
                        cx,
                        cy,
                        ex,
                        ey,
                        i * .15,
                        "frost-arm"
                    );


                    const p = .72;

                    const px =
                        cx +
                        Math.cos(angle) *
                        length * p;

                    const py =
                        cy +
                        Math.sin(angle) *
                        length * p;


                    const diamond =
                        10 + Math.random() * 4;


                    const a1 =
                        angle + Math.PI / 3;

                    const a2 =
                        angle - Math.PI / 3;


                    // diamond sides
                    createLine(
                        px,
                        py,
                        px +
                        Math.cos(a1) * diamond,
                        py +
                        Math.sin(a1) * diamond,
                        i * .2 + .4,
                        "frost-branch"
                    );

                    createLine(
                        px,
                        py,
                        px +
                        Math.cos(a2) * diamond,
                        py +
                        Math.sin(a2) * diamond,
                        i * .2 + .5,
                        "frost-branch"
                    );
                }
            }


            // ========================================
            // DESIGN 4
            // STAR / SPIKE SNOWFLAKE
            // ========================================

            function designStar() {

                for (let i = 0; i < 6; i++) {

                    const angle =
                        i * Math.PI / 3;

                    const length = 82;


                    createLine(
                        cx,
                        cy,
                        cx +
                        Math.cos(angle) * length,
                        cy +
                        Math.sin(angle) * length,
                        i * .15,
                        "frost-arm"
                    );


                    // short spikes
                    for (
                        let p = .25;
                        p < .9;
                        p += .16
                    ) {

                        const px =
                            cx +
                            Math.cos(angle) *
                            length * p;

                        const py =
                            cy +
                            Math.sin(angle) *
                            length * p;

                        const spike =
                            5 + Math.random() * 5;


                        createLine(
                            px,
                            py,
                            px +
                            Math.cos(angle + Math.PI / 3) *
                            spike,
                            py +
                            Math.sin(angle + Math.PI / 3) *
                            spike,
                            i * .15 + p * 1.5,
                            "frost-branch-small"
                        );


                        createLine(
                            px,
                            py,
                            px +
                            Math.cos(angle - Math.PI / 3) *
                            spike,
                            py +
                            Math.sin(angle - Math.PI / 3) *
                            spike,
                            i * .15 + p * 1.5 + .1,
                            "frost-branch-small"
                        );
                    }
                }
            }


            // ========================================
            // DESIGN 5
            // DENSE CRYSTAL
            // ========================================

            function designDense() {

                for (let i = 0; i < 6; i++) {

                    const angle =
                        i * Math.PI / 3;

                    const length =
                        65 + Math.random() * 20;


                    createLine(
                        cx,
                        cy,
                        cx +
                        Math.cos(angle) * length,
                        cy +
                        Math.sin(angle) * length,
                        i * .1,
                        "frost-arm"
                    );


                    for (
                        let p = .15;
                        p < .9;
                        p += .10
                    ) {

                        const px =
                            cx +
                            Math.cos(angle) *
                            length * p;

                        const py =
                            cy +
                            Math.sin(angle) *
                            length * p;


                        const b =
                            5 + (1 - p) * 15;


                        for (
                            let s = -1;
                            s <= 1;
                            s += 2
                        ) {

                            const branchAngle =
                                angle +
                                s * Math.PI / 3;


                            createLine(
                                px,
                                py,
                                px +
                                Math.cos(branchAngle) * b,
                                py +
                                Math.sin(branchAngle) * b,
                                i * .1 + p * 2,
                                "frost-branch-small"
                            );
                        }
                    }
                }
            }

            // ========================================
            // DESIGN 6
            // REALISTIC FERN CRYSTAL
            // ========================================

            function designRealisticFern() {

                for (let i = 0; i < 6; i++) {

                    const angle =
                        i * Math.PI / 3;

                    // Slightly different arm length
                    const armLength =
                        68 + Math.random() * 18;


                    // ====================================
                    // MAIN ARM
                    // ====================================

                    const endX =
                        cx +
                        Math.cos(angle) *
                        armLength;

                    const endY =
                        cy +
                        Math.sin(angle) *
                        armLength;


                    createLine(
                        cx,
                        cy,
                        endX,
                        endY,
                        i * 0.18,
                        "frost-arm"
                    );


                    // ====================================
                    // MANY FEATHER BRANCHES
                    // ====================================

                    for (
                        let p = 0.10;
                        p < 0.94;
                        p += 0.075
                    ) {

                        const px =
                            cx +
                            Math.cos(angle) *
                            armLength *
                            p;

                        const py =
                            cy +
                            Math.sin(angle) *
                            armLength *
                            p;


                        // Branch gets smaller toward tip
                        const branchLength =
                            17 -
                            (p * 11) +
                            Math.random() * 2.5;


                        // Natural angle
                        const branchAngle =
                            (34 + Math.random() * 10)
                            * Math.PI / 180;


                        // =================================
                        // UPPER FEATHER
                        // =================================

                        const upperAngle =
                            angle + branchAngle;


                        const ux =
                            px +
                            Math.cos(upperAngle) *
                            branchLength;

                        const uy =
                            py +
                            Math.sin(upperAngle) *
                            branchLength;


                        createLine(
                            px,
                            py,
                            ux,
                            uy,
                            i * 0.18 +
                            p * 1.8,
                            "frost-branch"
                        );


                        // =================================
                        // LOWER FEATHER
                        // =================================

                        const lowerAngle =
                            angle - branchAngle;


                        const lx =
                            px +
                            Math.cos(lowerAngle) *
                            branchLength;

                        const ly =
                            py +
                            Math.sin(lowerAngle) *
                            branchLength;


                        createLine(
                            px,
                            py,
                            lx,
                            ly,
                            i * 0.18 +
                            p * 1.8 +
                            0.08,
                            "frost-branch"
                        );


                        // =================================
                        // SECONDARY FEATHERS
                        // =================================

                        if (
                            p > 0.14 &&
                            p < 0.86
                        ) {

                            const secondaryLength =
                                branchLength * 0.42;


                            // Upper secondary
                            const upperSecondaryAngle =
                                upperAngle +
                                (28 + Math.random() * 8)
                                * Math.PI / 180;


                            const usx =
                                px +
                                Math.cos(upperAngle) *
                                branchLength *
                                0.55;

                            const usy =
                                py +
                                Math.sin(upperAngle) *
                                branchLength *
                                0.55;


                            createLine(
                                usx,
                                usy,
                                usx +
                                Math.cos(upperSecondaryAngle) *
                                secondaryLength,
                                usy +
                                Math.sin(upperSecondaryAngle) *
                                secondaryLength,
                                i * 0.18 +
                                p * 1.8 +
                                0.22,
                                "frost-branch"
                            );


                            // Lower secondary
                            const lowerSecondaryAngle =
                                lowerAngle -
                                (28 + Math.random() * 8)
                                * Math.PI / 180;


                            const lsx =
                                px +
                                Math.cos(lowerAngle) *
                                branchLength *
                                0.55;

                            const lsy =
                                py +
                                Math.sin(lowerAngle) *
                                branchLength *
                                0.55;


                            createLine(
                                lsx,
                                lsy,
                                lsx +
                                Math.cos(lowerSecondaryAngle) *
                                secondaryLength,
                                lsy +
                                Math.sin(lowerSecondaryAngle) *
                                secondaryLength,
                                i * 0.18 +
                                p * 1.8 +
                                0.30,
                                "frost-branch"
                            );
                        }


                        // =================================
                        // TINY INNER FEATHERS
                        // =================================

                        if (
                            p > 0.25 &&
                            p < 0.75 &&
                            Math.random() > 0.35
                        ) {

                            const tinyLength =
                                branchLength * 0.25;


                            createLine(
                                px,
                                py,
                                px +
                                Math.cos(
                                    angle +
                                    Math.PI / 3
                                ) *
                                tinyLength,
                                py +
                                Math.sin(
                                    angle +
                                    Math.PI / 3
                                ) *
                                tinyLength,
                                i * 0.18 +
                                p * 1.8 +
                                0.4,
                                "frost-branch"
                            );


                            createLine(
                                px,
                                py,
                                px +
                                Math.cos(
                                    angle -
                                    Math.PI / 3
                                ) *
                                tinyLength,
                                py +
                                Math.sin(
                                    angle -
                                    Math.PI / 3
                                ) *
                                tinyLength,
                                i * 0.18 +
                                p * 1.8 +
                                0.45,
                                "frost-branch"
                            );
                        }
                    }
                }
            }


            // ========================================
            // RANDOMLY SELECT DESIGN
            // ========================================

            const designs = [
                designFeather,
                designFern,
                designDiamond,
                designStar,
                designDense,
                designRealisticFern
            ];

            const selectedDesign =
                designs[
                Math.floor(
                    Math.random() *
                    designs.length
                )
                ];

            selectedDesign();


            // ========================================
            // ADD TO SCREEN
            // ========================================

            frostContainer.appendChild(svg);
        }


        /*
         * Create crystals gradually
         */
        // ========================================
        // IDLE ICE + FROST SYSTEM
        // ========================================

        const FROST_IDLE_TIME = 5000;

        let frostIdleTimer = null;
        let frostTimer = null;

        let frostCount = 0;

        const MAX_FROST = 25;

        let frostActive = false;


        // ========================================
        // START ICE + FROST
        // ========================================

        function startIdleEffects() {

            const toggle =
                document.getElementById('snow-switch');

            const iceOverlay =
                document.getElementById('ice-overlay');

            if (!toggle || !toggle.checked) {
                return;
            }


            // Prevent duplicate timers
            clearTimeout(frostIdleTimer);


            frostIdleTimer =
                setTimeout(function () {

                    // Check again
                    if (!toggle.checked) {
                        return;
                    }


                    // =================================
                    // SHOW ICE
                    // =================================

                    iceOverlay.style.opacity = '1';

                    for (let i = 0; i < 10; i++) {

                        setTimeout(function () {

                            // Make sure effects are still ON
                            if (!toggle.checked) {
                                return;
                            }

                            createIceCrack();

                        }, i * 600);
                    }


                    // =================================
                    // START FROST
                    // =================================

                    frostActive = true;

                    frostCount = 0;

                    growFrost();

                }, FROST_IDLE_TIME);
        }

        function growFrost() {

            const toggle =
                document.getElementById('snow-switch');


            // Effects must be ON
            if (!toggle || !toggle.checked) {
                return;
            }


            // Must be idle
            if (!frostActive) {
                return;
            }


            if (frostCount >= MAX_FROST) {
                return;
            }


            createFrostCrystal();

            frostCount++;


            frostTimer =
                setTimeout(
                    growFrost,
                    Math.random() * 2500 + 1500
                );
        }


        // ========================================
        // STOP ICE + FROST
        // ========================================

        function stopIdleEffects() {

            const iceOverlay =
                document.getElementById('ice-overlay');


            clearTimeout(
                frostIdleTimer
            );

            clearTimeout(
                frostTimer
            );


            frostIdleTimer = null;

            frostTimer = null;


            // Hide ice
            iceOverlay.style.opacity = '0';


            // Remove ice patches
            iceOverlay.innerHTML = '';


            // Remove frost
            frostContainer.innerHTML = '';


            frostCount = 0;

            frostActive = false;
        }



        // ========================================
        // ACTIVITY DETECTED
        // ========================================

        function resetIdleEffects() {

            const toggle =
                document.getElementById('snow-switch');


            // If Effects OFF
            if (!toggle || !toggle.checked) {

                stopIdleEffects();

                return;
            }


            // User became active
            stopIdleEffects();


            // Start counting 5 seconds again
            startIdleEffects();
        }



        // ========================================
        // USER ACTIVITY
        // ========================================

        document.addEventListener(
            'mousemove',
            resetIdleEffects
        );

        document.addEventListener(
            'mousedown',
            resetIdleEffects
        );

        document.addEventListener(
            'keydown',
            resetIdleEffects
        );

        document.addEventListener(
            'scroll',
            resetIdleEffects
        );

        document.addEventListener(
            'touchstart',
            resetIdleEffects
        );

        // ========================================
        // ICE OVERLAY
        // ========================================

        const iceOverlay =
            document.getElementById('ice-overlay');


        function createIcePatch() {

            if (!iceOverlay) {
                return;
            }


            const patch =
                document.createElement('div');

            patch.classList.add(
                'ice-patch'
            );


            const size =
                80 + Math.random() * 180;


            patch.style.width =
                `${size}px`;

            patch.style.height =
                `${size}px`;


            // ====================================
            // POSITION AROUND EDGES
            // ====================================

            const side =
                Math.random();


            if (side < 0.25) {

                patch.style.left =
                    `${Math.random() * 100}%`;

                patch.style.top =
                    `${Math.random() * 12 - 6}%`;

            } else if (side < 0.5) {

                patch.style.left =
                    `${Math.random() * 12 - 6}%`;

                patch.style.top =
                    `${Math.random() * 100}%`;

            } else if (side < 0.75) {

                patch.style.right =
                    `${Math.random() * 12 - 6}%`;

                patch.style.top =
                    `${Math.random() * 100}%`;

            } else {

                patch.style.left =
                    `${Math.random() * 100}%`;

                patch.style.bottom =
                    `${Math.random() * 12 - 6}%`;
            }


            patch.style.transform =
                `rotate(${Math.random() * 360}deg)`;


            patch.style.opacity =
                0.12 + Math.random() * 0.20;


            iceOverlay.appendChild(
                patch
            );
        }

        function startIceEffect() {

            if (!iceOverlay) {
                return;
            }

            iceOverlay.innerHTML = '';

            for (let i = 0; i < 20; i++) {

                setTimeout(function () {

                    const toggle =
                        document.getElementById(
                            'snow-switch'
                        );

                    if (
                        toggle &&
                        toggle.checked
                    ) {
                        createIcePatch();
                    }

                }, i * 250);
            }
        }

        function createIceCrack() {

            const iceOverlay =
                document.getElementById('ice-overlay');

            if (!iceOverlay) return;

            const crack =
                document.createElement('div');

            crack.className = 'ice-crack';

            const svgNS =
                'http://www.w3.org/2000/svg';

            const svg =
                document.createElementNS(
                    svgNS,
                    'svg'
                );

            svg.setAttribute(
                'viewBox',
                '0 0 300 300'
            );


            // =========================// RANDOM EDGE
            // =========================

            const edge = Math.floor(Math.random() * 4);

            let startX;
            let startY;

            if (edge === 0) {
                // TOP
                startX = 20 + Math.random() * 260;
                startY = -5;

                crack.style.left = `${startX - 150}px`;
                crack.style.top = `-10px`;

            } else if (edge === 1) {
                // RIGHT
                startX = 305;
                startY = 20 + Math.random() * 260;

                crack.style.left = `calc(100% - 140px)`;
                crack.style.top = `${startY - 150}px`;

            } else if (edge === 2) {
                // BOTTOM
                startX = 20 + Math.random() * 260;
                startY = 305;

                crack.style.left = `${startX - 150}px`;
                crack.style.top = `calc(100% - 140px)`;

            } else {
                // LEFT
                startX = -5;
                startY = 20 + Math.random() * 260;

                crack.style.left = `-10px`;
                crack.style.top = `${startY - 150}px`;
            }


            // =========================
            // MAIN CRACK
            // =========================

            // =================================
            // REALISTIC ICE CRACK
            // =================================

            const path =
                document.createElementNS(svgNS, 'path');

            path.classList.add('main-ice-crack');

            let x = startX;
            let y = startY;

            let d = `M ${x} ${y}`;

            // Direction toward the inside
            let angle;

            if (edge === 0) {
                // TOP → DOWN
                angle = Math.PI / 2;

            } else if (edge === 1) {
                // RIGHT → LEFT
                angle = Math.PI;

            } else if (edge === 2) {
                // BOTTOM → UP
                angle = -Math.PI / 2;

            } else {
                // LEFT → RIGHT
                angle = 0;
            }

            // =================================
            // MAIN CRACK
            // =================================

            const points = [];

            points.push({
                x: x,
                y: y
            });

            const segments =
                12 + Math.floor(Math.random() * 7);

            for (let i = 0; i < segments; i++) {

                // Small natural direction change
                angle +=
                    (Math.random() - 0.5) * 0.28;

                // Longer near edge,
                // slightly shorter toward the end
                const progress = i / segments;

                const length =
                    18 -
                    progress * 5 +
                    Math.random() * 8;

                x += Math.cos(angle) * length;
                y += Math.sin(angle) * length;

                // Keep inside SVG
                x = Math.max(-20, Math.min(320, x));
                y = Math.max(-20, Math.min(320, y));

                points.push({
                    x: x,
                    y: y
                });

                d += ` L ${x} ${y}`;
            }

            path.setAttribute('d', d);
            path.setAttribute('pathLength', '1');

            svg.appendChild(path);


            // =================================
            // NATURAL BRANCHES
            // =================================

            for (let i = 2; i < points.length - 2; i++) {

                // Don't branch at every point
                if (Math.random() > 0.45) {
                    continue;
                }

                const point = points[i];

                // Branch becomes smaller farther inward
                const progress =
                    i / points.length;

                const branchLength =
                    25 -
                    progress * 12 +
                    Math.random() * 8;

                // Branch angle
                const side =
                    Math.random() > 0.5 ? 1 : -1;

                const branchAngle =
                    angle +
                    side *
                    (35 + Math.random() * 25) *
                    Math.PI / 180;

                let bx = point.x;
                let by = point.y;

                let branchPath =
                    `M ${bx} ${by}`;

                // Branch has several segments too
                const branchSegments =
                    2 + Math.floor(Math.random() * 2);

                for (let j = 0; j < branchSegments; j++) {

                    const branchTurn =
                        (Math.random() - 0.5) * 0.3;

                    const currentAngle =
                        branchAngle + branchTurn;

                    const segmentLength =
                        branchLength /
                        branchSegments;

                    bx +=
                        Math.cos(currentAngle) *
                        segmentLength;

                    by +=
                        Math.sin(currentAngle) *
                        segmentLength;

                    branchPath +=
                        ` L ${bx} ${by}`;
                }

                const branch =
                    document.createElementNS(
                        svgNS,
                        'path'
                    );

                branch.setAttribute(
                    'd',
                    branchPath
                );

                branch.setAttribute(
                    'pathLength',
                    '1'
                );

                branch.style.animationDelay =
                    `${0.4 + i * 0.08}s`;

                svg.appendChild(branch);
            }


            crack.appendChild(svg);

            iceOverlay.appendChild(crack);
        }
    </script>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">