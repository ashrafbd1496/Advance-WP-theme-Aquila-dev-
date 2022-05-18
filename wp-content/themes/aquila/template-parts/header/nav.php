<?php 
/**
 * Navbar Navigation Template
 * @package Aquila
 */

  $menu_class = \AQUILA_THEME\Inc\Menus::get_instance();
  $header_menu_id = $menu_class->get_menu_id('aquila-header-menu');
  $header_menus = wp_get_nav_menu_items($header_menu_id);
  // echo '<pre>';
  // print_r($header_menus);
  // wp_die();
  
 ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <?php if (function_exists('the_custom_logo')) {
      the_custom_logo();
  } ?>

  <?php 
      // wp_nav_menu([
      //   'theme_location' => 'aquila-header-menu',
      //   'container_class' => 'my_extra_menu_class'
      // ]);
   ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>