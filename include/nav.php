<nav>
    <div class="controller-container" aria-hidden="true">
        <span id="nav-opener"><i class="fas fa-bars"></i></span>
    </div>
    <div class="menu">
        <a class="<?php echo ($page == "home" ? "active" : "")?>" href="index.php"> <span>Home</span> <i class="fas fa-angle-right"></i></a>
        
        <div class="dropdown">
            <button class="dropbtn"><span>Projects</span> 
                <i class="fas fa-angle-down"></i>
            </button>
            <div class="dropdown-content">
                <a class="<?php echo ($page == "projects" ? "active" : "")?>" href="Projects.php"><span>Portfolio</span> <i class="fas fa-angle-right"></i></a>
                <a class="<?php echo ($page == "raster" ? "active" : "")?>" href="rasterizer.php"><span>Rasterizer</span> <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        
        <a class="<?php echo ($page == "resume" ? "active" : "")?>" href="resume.php"><span>R&eacute;sum&eacute;</span> <i class="fas fa-angle-right"></i></a>
        
        <div class="dropdown">
            <button class="dropbtn"><span>Photos</span> 
                <i class="fa fa-angle-down"></i>
            </button>
            <div class="dropdown-content">
                <a class="<?php echo ($page == "gallery" ? "active" : "")?>" href="gallery.php"><span>Gallery</span> <i class="fas fa-angle-right"></i></a>
                <a class="<?php echo ($page == "slides" ? "active" : "")?>" href="gallery2.php"><span>Slideshow</span> <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        
        <a class="<?php echo ($page == "contact" ? "active" : "")?>" href="contact.php"><span>Contact</span> <i class="fas fa-angle-right"></i></a>
        
        <a class="<?php echo ($page == "messages" ? "active" : "")?>" href="messages.php"><span>Messages</span> <i class="fas fa-angle-right"></i></a>
    </div>
</nav>

<script src="./js/nav_controller.js"></script>