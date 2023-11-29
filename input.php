<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Bincang Kuliner</h3>
            </div>

            <ul class="list-unstyled components">
                <div class="d-flex flex-row">
                    <div id="text" class="w-50 ml-4" style="margin-top: 13px;"></div>
                    <p class="fw-bold" style="margin-left: -35px;">Food</p>
                </div>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Kategori</a>
                        </li>
                        <li>
                            <a href="#">My Forum</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Member</a>
                </li>
                <li>
                    <a href="#">Profile</a>
                </li>
                <li>
                    <a href="#">Source Code</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="input.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" style="background: #fff; color:#7386D5;">Add Discussion</a>
                </li>
                <li>
                    <a href="logout.php" class="article">Log out</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">My forum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="input.php">Add Discuss</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <section>
                <h1 class="fw-bold">Tambah Diskusi</h1>
                <p>Tambahkan judul dan isi diskusi anda!</p>
                <form action="inputDiskusi.php" method="post" class="mt-5 px-5">
                    <div class="mb-3 row">
                        <label for="author" class="col-sm-3 col-form-label">Judul:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Diskusi" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="quote" class="col-sm-3 col-form-label">Isi Diskusi:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="isi" id="quote" placeholder="Isi Diskusi" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href=inputQuote.php>
                            <button type="submit" class="btn btn-primary">Tambah Diskusi Makanan</button>
                        </a>
                    </div>
                </form>
            </section>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="./js/script.js"></script>
    <script src="./jd/autotyping.js"></script>
</body>

</html>