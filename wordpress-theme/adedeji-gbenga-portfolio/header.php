<?php if ( ! defined( 'ABSPATH' ) ) exit; ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
$agp_resume = agp_resume_page();
$agp_name_parts = explode( ' ', agp_field( 'full_name' ) ?: 'Adedeji Gbenga', 2 );
?>

<nav class="nav" id="nav">
  <div class="nav-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php echo esc_html( $agp_name_parts[0] ); ?><span>.</span><?php echo esc_html( $agp_name_parts[1] ?? '' ); ?></a>
    <ul class="nav-links" id="navLinks">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#home">Home</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#about">About</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#skills">What I Use</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#experience">Experience</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#projects">Projects</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">Contact</a></li>
      <li><a href="<?php echo $agp_resume ? esc_url( get_permalink( $agp_resume ) ) : '#'; ?>" class="nav-cta btn btn-ghost" style="padding:8px 18px;">Resume</a></li>
    </ul>
    <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
    </button>
  </div>
</nav>
