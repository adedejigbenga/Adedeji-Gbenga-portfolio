<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$agp_resume = agp_resume_page();
$agp_footer_name = agp_field( 'full_name' ) ?: 'Adedeji Gbenga';
$agp_whatsapp_number = agp_field( 'contact_whatsapp_number' );
?>
<footer>
  <div class="container footer-inner">
    <div>&copy; <span id="year"><?php echo esc_html( date_i18n( 'Y' ) ); ?></span> <?php echo esc_html( $agp_footer_name ); ?>. All rights reserved.</div>
    <div class="footer-socials">
      <a href="mailto:<?php echo esc_attr( agp_field( 'contact_email' ) ); ?>">Email</a>
      <?php if ( $agp_whatsapp_number ) : ?>
      <a href="https://wa.me/<?php echo esc_attr( $agp_whatsapp_number ); ?>" target="_blank" rel="noopener">WhatsApp</a>
      <?php endif; ?>
      <a href="<?php echo esc_url( agp_field( 'contact_github_url' ) ); ?>" target="_blank" rel="noopener">GitHub</a>
      <a href="<?php echo esc_url( agp_field( 'contact_linkedin_url' ) ); ?>" target="_blank" rel="noopener">LinkedIn</a>
      <?php if ( $agp_resume ) : ?>
      <a href="<?php echo esc_url( get_permalink( $agp_resume ) ); ?>">Resume</a>
      <?php endif; ?>
    </div>
  </div>
</footer>

<button class="to-top" id="toTop" aria-label="Back to top">&uarr;</button>

<?php wp_footer(); ?>
</body>
</html>
