
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://urania.icu/assets/css/main/app.css">
    <link rel="stylesheet" href="https://urania.icu/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="https://urania.icu/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="https://urania.icu/assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="https://urania.icu/assets/css/shared/iconly.css">
    <link rel="stylesheet" href="https://urania.icu/assets/css/pages/fontawesome.css">
    <link rel="stylesheet" href="https://urania.icu/assets/css/pages/datatables.css">
    <link rel="stylesheet" href="/npm/toastify-js@1.12.0/src/toastify.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="/"><img src="https://urania.icu/assets/images/logo/logo.png" alt="Logo"
                            srcset=""></a>
                </div>
                <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                        height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                        <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path
                                d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                opacity=".3"></path>
                            <g transform="translate(-210 -1)">
                                <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                <circle cx="220.5" cy="11.5" r="4"></circle>
                                <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <div class="form-check form-switch fs-6">
                        <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                        <label class="form-check-label"></label>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.XMR.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.XMR1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                        </path>
                    </svg>
                </div>
                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item">
                    <p>HELLOW THERE >_<</p>
                </li>
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item active">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                
                                                        <li class="sidebar-item ">
                        <a href="#" class='sidebar-link'>
                            <i class="bi-file-person"></i>
                            <span>About me (soon)</span>
                        </a>
                    </li>

                    <li
                        class="sidebar-item ">
                        <a href="#" class='sidebar-link'>
                            <i class="bi-book-half"></i>
                            <span>E-book (soon)</span>
                        </a>
                    </li>

                    <li class="sidebar-item has-sub ">
                        <a href="#" class="sidebar-link">
                            <i class="bi-telephone-fill"></i>
                            <span>Contack Me</span>
                        </a>
                        <ul class="submenu ">
                                                            <li class="submenu-item ">
                                    <a href="https://instagram.com/armnyessir">
                                        Instagram
                                                                            </a>
                                </li>
                                                            <li class="submenu-item ">
                                    <a href="https://wa.me/6281393138971">
                                        WhatsApp
                                                                            </a>
                                </li>
                                                            <li class="submenu-item ">
                                    <a href="https://t.me/cawlye">
                                        Telegram
                                                                            </a>
                                </li>
                                                            <li class="submenu-item ">
                                    <a href="https://github.com/indox0d3">
                                        Github
                                                                            </a>
                                </li>
                                                    </ul>
                    </li>
                
                <li class="sidebar-item">
                    <a href="#" onclick="confirmLogout()" class='sidebar-link'>
                        <i class="bi bi-tools"></i>
                        <span>My Project</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

                <div class="page-heading">
        <h3> Hello guys <3 </h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Welcome</h4>
                </div>
                <div class="card-body">
                    <h2>i hope y'all have a great day!</h2>
                </div>
            </div>
        </section>
    </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; INDOX0D3</p>
                    </div>
                    <div class="float-end">
                        <p><span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://github.com/indox0d3" target="_blank">INDOX0D3</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://urania.icu/assets/js/app.js"></script>
    <script src="https://urania.icu/assets/js/pages/dashboard.js"></script>
    <script src="https://urania.icu/assets/js/extensions/datatables.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'Hold On!',
                text: "Are you sure you want to see my project?",
                type: 'warning',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonColor: '#435EBE',
                confirmButtonText: 'Yes!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = "login.php";
                }
            });
        }
    </script>

    
</body>

</html>
