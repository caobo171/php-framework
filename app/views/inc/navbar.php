<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container">


        <a class="navbar-brand" href="#"><?php echo SITE_NAME ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL_ROOT ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL_ROOT ?>/pages/about">About</a>
                </li>
            </ul>

            <?php if (isLoggedIn()) : ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URL_ROOT ?>/users/logout">LogOut<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            <?php else : ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo URL_ROOT ?>/users/register">Register <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URL_ROOT ?>/users/login">Login</a>
                    </li>
                </ul>

            <?php endif; ?>


        </div>
    </div>
</nav>