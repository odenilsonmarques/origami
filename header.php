<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Origami</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="custom-header">
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#AF47D2">
            <div class="container">
                <a class="navbar-brand" href="#">
                    Origami
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <nav class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#">catálogo</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#pricing">Videos</a>
                        </li> 
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#pricing">Sobre nós</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="#contact">Converse com a gente</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </header>