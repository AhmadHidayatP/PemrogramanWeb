<?php
if (session_status() === PHP_SESSION_NONE)
 session_start();
include "fungsi/pesan_kilat.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="
<meta name=" author" content="Nama Anda">
    <meta name="generator" content="Hugo 9.118.2">
    <title>Aplikasi Kantor Siapa</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="icon" href="assets/img/favicons/favicon.ico">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, 1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0.5em 1.5em rgba(0, 0, 0), inset 0.125cm .Sem rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.Srem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: irem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154,
            249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(-bs-white);
        --bs-btn-bg: var (--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #652800;
        -bs-btn-hover-border-color: #652800;
        --bs-btn-focus-shadow-rgb: var (--bd-violet-rgb);
        --bs-btn-active-color: var(-bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
        z-index: 1500;
    }

    .bd-mode-toggle.dropdown-menu .active .bi {
        display: block important;
    }
    </style>
    <link href="assets/custom/sign-in.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.6468.5.5-6910.7681-7 78.5.5 6 8 1-.708 01-3.5- 3.58.5.5 011-768-798L6.5 10.29316.646-6.6478.5.5 001.7">
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 1547 7 10 8 1v14zm@ 148 89 118 las 8 0 0 1 162" />
        </symbol>
        <symbol id="moon-stars-fiLL" viewBox="0 0 16 16">
            <path d="M6.278.768.768 8 01.08.858 7.268 7.208 000-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 8 1,04-.055 1.533--16.787. 787 0 81.81.316.733.733 0 0 1-.031.89348.349 8.349.00 18. 344 1603.734 16 8 12.286 0 7.71 0 4.266 2.114 1.312 5.124.86
A.752.752 8816.2782" />
            <path
                d="M10.794 3.148.217.217 0 0 1.412 01.387 1.162c.173.518.579. 974 1.897 1.69711.162.3873.217.21700164121-1.162.387a1. 734 1.73401.697 1.0971.387 1.1623.217.217081.412 0 1.387-1.16241.734 1.7340989.31 6.5931-1.162.38/a.21/.21 70010-41211.162.387a1.734 1.734 690 1.097-1.8971.387- 1.162zM13.863.099.145.145 0 81.274 91.258.774c.115.346.38 6.617.732.7321.774.2588.145.145 0 0 10274L-.774.258a1.156 1.156 600-.732.7321-.258.774.145.1451-.274 BL-.258-.7 74a1.156 1.156 0 6 0-732-7321-774-.2588.145.145 0 0 10-2 741.774-.258.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 6 16. 16">
            <path
                d="M8 1284 40 10 6-8 44008082MB 08.5.5 9 8 1.5.5v2a.5. 
5 0 0 1-1 @V-24.5.50018 0zmo 13.5.501.5.5v2a.5.5 6
 81-1 BV-24.5.5 8 8 1 8 137m8-5.5.500 1-5.5h-28.5.5 
 981 B-1h2a.5.5 8 8 1.5.57M3 8.5.5 0 8 1.5.5h 7.5.5 
 9819-1h 24.5.5 в 0 1 3 8zm10.657-5.6578.5.56610771-1.414 
 1.415 a.5.5.0 1 1-.707-170811.414-1.4148.5.5 061.707/Bzm-9.193 
 9.1938.5.500 18.707L3.05 13.6578.5.5 8 6 1-.707-.70711.41 4-1.4148.5.5 8 0 1.707 @zm9.193 2.121.5.5 081-787 01-1.4 14-1.414.5.50 8 1.707-.78711.414 1.4148.5.5 8 0 18.787zM 4.464 4.465.5.5 601-.707 8L2.343 3.058.5.5 8 11.707--797 11.414 1.414.5.5 8 0 1 0.708z" />
        </symbol>
    </svg>
    <div class="dropdown position-fixed bottom-e end-0 mb-3 me-3 bd-mode-tog
gle">
        <button class="btn btn-bd primary py 2 dropdown toggle d flex align-items c
enter" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-Label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="lem" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">
                Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="hd-theme-text">
            <li>
                <button type="button" class="dropdown item d-flex align items center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi ne-2 opacity-50 theme-icon" width="lem" height="lem">
                        <use href="#sun-fill"> </use>
                    </svg>
                    Light
                    <svg class="bi res-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown item d-flex align items center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi ne-2 opacity-50 theme-icon" width="lem" height="lem">
                        <use href="#moon-stars-fill"> </use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown item d-flex align items center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi ne-2 opacity-50 theme-icon" width="lem" height="lem">
                        <use href="#circle-half"> </use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
    <main class="form signio w 100 m-auto">
        <form action="cek_login.php" method="post">
            <tag class="ab-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Lakukan Login</h1>
                <?php if (isset($_SESSION['flashdata'])){
                foreach ($_SESSION['flashdata'] as $key => $val){
                    echo get_flashdata($key);
                }
            }
            ?>
                <div class="form-floating">
                    <input type="text" class="form-control" name="username" placeholder="username" required>
                    <label>Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <label>Password</label>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Masuk</button>
                <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
        </form>
    </main>