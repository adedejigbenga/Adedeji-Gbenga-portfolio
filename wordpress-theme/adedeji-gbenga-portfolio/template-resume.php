<?php
/**
 * Template Name: Resume Page
 * Assign this template to a Page (e.g. slug "resume") to power the
 * Resume links in the nav and footer. Content comes from the
 * "Portfolio Content" settings page — same source as the homepage.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();

$full_name  = agp_field( 'full_name' ) ?: 'Adedeji Gbenga';
$tagline    = agp_field( 'tagline' );
$skills     = agp_field( 'skills' );
$experience = agp_field( 'experience' );
$projects   = agp_field( 'projects' );
$hero_stats = agp_field( 'hero_stats' );

$all_skill_tags = array();
foreach ( (array) $skills as $skill ) {
    $all_skill_tags = array_merge( $all_skill_tags, agp_tags_to_array( $skill['tags'] ) );
}

$photo_id  = agp_field( 'profile_photo' );
$photo_url = $photo_id ? wp_get_attachment_image_url( $photo_id, 'medium' ) : '';
if ( ! $photo_url ) $photo_url = get_template_directory_uri() . '/assets/profile.png';
?>

<div class="resume-page">
  <div class="resume-toolbar">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-ghost">&larr; Back to portfolio</a>
    <div style="display:flex; gap:12px;">
      <a href="<?php echo esc_url( get_template_directory_uri() . '/assets/Adedeji-Gbenga-Resume.pdf' ); ?>" download class="btn btn-primary">Download PDF</a>
      <button class="btn btn-ghost" onclick="window.print()">Print</button>
    </div>
  </div>

  <div class="resume-doc">
    <aside class="resume-sidebar">
      <img class="resume-photo" src="<?php echo esc_url( $photo_url ); ?>" alt="<?php echo esc_attr( $full_name ); ?>">
      <h1><?php echo esc_html( $full_name ); ?></h1>
      <div class="role"><?php echo esc_html( $tagline ); ?></div>

      <div class="resume-side-section">
        <h4>Contact</h4>
        <ul class="resume-contact-list">
          <li><span class="ico">&#9993;</span> <?php echo esc_html( agp_field( 'contact_email' ) ); ?></li>
          <li><span class="ico">&#9743;</span> <?php echo esc_html( agp_field( 'contact_whatsapp_display' ) ); ?> (WhatsApp)</li>
          <li><span class="ico">&#8996;</span> <?php echo esc_html( agp_field( 'contact_github_display' ) ); ?></li>
          <li><span class="ico">in</span> <?php echo esc_html( preg_replace( '#^https?://(www\.)?#', '', agp_field( 'contact_linkedin_url' ) ) ); ?></li>
        </ul>
      </div>

      <?php if ( $all_skill_tags ) : ?>
      <div class="resume-side-section">
        <h4>Skills</h4>
        <div class="resume-skill-pills">
          <?php foreach ( $all_skill_tags as $tag ) : ?>
          <span><?php echo esc_html( $tag ); ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>

      <?php if ( $hero_stats ) : ?>
      <div class="resume-side-section">
        <h4>Highlights</h4>
        <div class="resume-highlights">
          <?php foreach ( array_slice( (array) $hero_stats, 0, 3 ) as $stat ) : ?>
          <div class="resume-highlight"><div class="num"><?php echo esc_html( $stat['number'] ); ?><span><?php echo esc_html( $stat['suffix'] ); ?></span></div><div class="lbl"><?php echo esc_html( $stat['label'] ); ?></div></div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>
    </aside>

    <main class="resume-main">
      <div class="resume-section">
        <h2>Summary</h2>
        <p class="resume-summary-text"><?php echo esc_html( agp_field( 'resume_summary' ) ); ?></p>
      </div>

      <?php if ( $experience ) : ?>
      <div class="resume-section">
        <h2>Work Experience</h2>
        <?php foreach ( $experience as $job ) : ?>
        <div class="resume-entry">
          <div class="resume-entry-top"><h3><?php echo esc_html( $job['role'] ); ?></h3><div class="date"><?php echo esc_html( $job['date'] ); ?></div></div>
          <div class="org"><?php echo esc_html( $job['org'] ); ?></div>
          <p><?php echo esc_html( $job['description'] ); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <?php if ( $projects ) : ?>
      <div class="resume-section">
        <h2>Selected Projects</h2>
        <?php foreach ( $projects as $project ) : ?>
        <div class="resume-entry">
          <div class="resume-entry-top"><h3><?php echo esc_html( $project['title'] ); ?></h3></div>
          <p><?php echo esc_html( $project['description'] ); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <div class="resume-section">
        <h2>Key Achievements</h2>
        <div class="resume-achievements-box"><?php echo esc_html( agp_field( 'resume_achievements' ) ); ?></div>
      </div>
    </main>
  </div>
</div>

<?php get_footer(); ?>
