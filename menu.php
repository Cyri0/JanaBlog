        <nav>
            <a href="index.php">
                <div class="nav_img light_img"></div>
            </a>
            <ul>
                <li><a class="active" href="about.php">Rólam</a></li>
                <li id="dropdown">
                    <div id="dropbtn">Kritikák</div>
                    <div id="dropdown-content">
                        <a href="posts.php?type=music">Zenék</a>
                        <a href="posts.php?type=book">Könyvek</a>
                        <a href="posts.php?type=comic">Képregények</a>
                        <a href="posts.php?type=movie">Filmek</a>
                        <a href="posts.php?type=game">Videojátékok</a>
                    </div>
                </li>
                <li><a class="active" href="research.php">Kutatás</a></li>
                <li><a class="active" href="connection.php">Kapcsolat</a></li>
            </ul>
            <div class="mobile_menu" onclick="mobile_dropdown_handler()">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
                            
            <div class="mobile_menu_dropdown" id="mobile_dropdown_menu">
                <a href="about.php"><div>Rólam</div></a>
                <a href="posts.php?type=music"><div>Zenekritikák</div></a>
                <a href="posts.php?type=book"><div>Könyvelemzések</div></a>
                <a href="posts.php?type=comic"><div>Képregénykritikák</div></a>
                <a href="posts.php?type=movie"><div>Filmkritikák</div></a>
                <a href="posts.php?type=game"><div>Játékkritikák</div></a>
                <a href="research.php"><div>Kutatás</div></a>
                <a href="connection.php"><div>Kapcsolat</div></a>
            </div>
        </nav>