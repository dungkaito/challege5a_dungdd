<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">VCS Classroom</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link
                <?php
                    if(isset($_GET['action']) && $_GET['action'] == 'people')
                        echo 'active'; 
                ?>
                " href="?controller=user&action=people">Mọi người</a>
            </li>
            <li class="nav-item">
                <a class="nav-link
                <?php
                    if(isset($_GET['action']) && $_GET['action'] == 'classwork')
                        echo 'active'; 
                ?>
                " href="classwork.html">Bài tập</a>
            </li>
            <li class="nav-item">
                <a class="nav-link
                <?php
                    if(isset($_GET['action']) && $_GET['action'] == 'challenge')
                        echo 'active'; 
                ?>
                " href="challenge.html">Thử thách</a>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item pr-3">
                <a href="?controller=user&action=messenger"><i class="fab fa-facebook-messenger"></i></a>
            </li>
            <li class="nav-item">
                <a href="?controller=user&action=logout"><i class="fa fa-sign-out fa-1x" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
</nav>