<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beckas sida</title>
  <?php wp_head(); ?>
</head>
<body>
	<header>
  <h1>Travel Blog</h1>

  <button id="hamburger-menu" aria-label="Toggle menu" aria-expanded="false">
    <span></span>
    <span></span>
    <span></span>
  </button>
  <nav id="nav-menu">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'header-menu', 
      'container' => false, 
      'menu_class' => 'my-menu',   
    ));
    ?>
		 <?php get_search_form(); ?>
  </nav>

</header>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const hamburgerMenu = document.getElementById("hamburger-menu");
    const navMenu = document.getElementById("nav-menu");

    hamburgerMenu.addEventListener("click", function() {
      const isExpanded = hamburgerMenu.getAttribute("aria-expanded") === "true";
      hamburgerMenu.setAttribute("aria-expanded", !isExpanded);
      navMenu.classList.toggle("active");
    });
  });
</script>