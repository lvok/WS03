<?php 
use Framework\Session;
    
?>

<header class="site-header">
    <div class="nav-pill">
        <h1 class="brand">
            <a href="/WS03/Public/">
                <span class="brand-dot"></span>
                <span class="brand-text">Prosple</span>
            </a>
        </h1>

        <nav class="main-nav">
        <?php if(Session::has('user')): ?>
            <div class="nav-user-info">
                <span class="nav-welcome">Welcome, <?= Session::get('user')['name'] ?></span>
            </div>

        <form method="POST" action="/WS03/Public/auth/logout">
            <button type="submit" class="nav-link" >Logout</button>
        </form>
             <a href="/WS03/Public/listings/create" class="nav-cta">
                <i class="fa fa-edit"></i>
                <span>Post a Job</span>
            </a>
            <?php else: ?>
                <a href="/WS03/Public/listings" class="nav-link">Jobs</a>
            <a href="/WS03/Public/auth/login" class="nav-link">Login</a>
            <a href="/WS03/Public/auth/register" class="nav-link">Register</a>
            <?php endif; ?>
           
        </nav>
    </div>
</header>