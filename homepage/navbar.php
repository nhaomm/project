<nav class="navbar navbar-expand-lg" style="background-color: #00008B;">
    <div class="container-fluid flex-column">
        <!-- โลโก้และชื่อ TVC E-library -->
        <a class="navbar-brand fs-2 font-monospace text-light text-center fw-bold mb-3" href="homepage.php">
            <img src="logo.jpg" width="30" height="24" alt="logo">
            TVC E-library
        </a>
        <!-- ปุ่มเมนูสำหรับหน้าจอเล็ก -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- แถบเมนู -->
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        หมวดหมู่
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item fs-4" href="#">ความรู้ทั่วไป</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item fs-4" href="#">บันเทิง</a></li>
                    </ul>
                </li>

            </ul>
            <form class="d-flex " role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>