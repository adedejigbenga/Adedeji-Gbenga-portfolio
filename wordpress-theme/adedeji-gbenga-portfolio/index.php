<?php if ( ! defined( 'ABSPATH' ) ) exit; get_header();

$full_name    = agp_field( 'full_name' ) ?: 'Adedeji Gbenga';
$hero_kicker  = agp_field( 'hero_kicker' );
$hero_intro   = agp_field( 'hero_intro' );
$tagline      = agp_field( 'tagline' );
$hero_tags    = agp_tags_to_array( agp_field( 'hero_tags' ) );
$hero_stats   = agp_field( 'hero_stats' );
$about_bio    = agp_field( 'about_bio' );
$about_facts  = agp_field( 'about_facts' );
$skills       = agp_field( 'skills' );
$experience   = agp_field( 'experience' );
$projects     = agp_field( 'projects' );

$photo_id  = agp_field( 'profile_photo' );
$photo_url = $photo_id ? wp_get_attachment_image_url( $photo_id, 'large' ) : '';
if ( ! $photo_url ) $photo_url = get_template_directory_uri() . '/assets/profile.png';
?>

<header class="hero" id="home">
  <div class="container hero-grid">
    <div>
      <div class="hero-kicker"><span class="dot"></span> <?php echo esc_html( $hero_kicker ); ?></div>
      <h1 class="reveal"><?php echo esc_html( $hero_intro ); ?> <span class="gradient-text"><?php echo esc_html( $full_name ); ?></span></h1>
      <p class="hero-role reveal"><?php echo esc_html( $tagline ); ?></p>
      <div class="hero-actions reveal">
        <a href="#projects" class="btn btn-primary">View Projects</a>
        <a href="<?php echo esc_url( get_template_directory_uri() . '/assets/Adedeji-Gbenga-Resume.pdf' ); ?>" download class="btn btn-ghost">Download Resume</a>
        <a href="#contact" class="btn btn-ghost">Contact Me</a>
      </div>
      <?php if ( $hero_stats ) : ?>
      <div class="hero-stats reveal">
        <?php foreach ( $hero_stats as $stat ) : ?>
        <div class="stat"><div class="num"><span><?php echo esc_html( $stat['number'] ); ?></span><?php echo esc_html( $stat['suffix'] ); ?></div><div class="label"><?php echo esc_html( $stat['label'] ); ?></div></div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
    <div class="hero-card reveal">
      <div class="hero-avatar"><img src="<?php echo esc_url( $photo_url ); ?>" alt="<?php echo esc_attr( $full_name ); ?>"></div>
      <div class="hero-card-name"><?php echo esc_html( $full_name ); ?></div>
      <div class="hero-card-role"><?php echo esc_html( $tagline ); ?></div>
      <?php if ( $hero_tags ) : ?>
      <div class="hero-tags">
        <?php foreach ( $hero_tags as $tag ) : ?>
        <span class="tag"><?php echo esc_html( $tag ); ?></span>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</header>

<section id="about">
  <div class="container about-grid">
    <div class="reveal">
      <div class="eyebrow">About</div>
      <h2 class="section-title">A builder who bridges code, design &amp; growth</h2>
      <div class="about-text"><?php echo wp_kses_post( $about_bio ); ?></div>
    </div>
    <?php if ( $about_facts ) : ?>
    <div class="about-facts reveal">
      <?php foreach ( $about_facts as $fact ) : ?>
      <div class="fact-card"><div class="n"><?php echo esc_html( $fact['number'] . $fact['suffix'] ); ?></div><div class="l"><?php echo esc_html( $fact['label'] ); ?></div></div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<section id="skills" style="background:var(--bg-alt);">
  <div class="container">
    <div class="eyebrow reveal">What I Use</div>
    <h2 class="section-title reveal">Tools &amp; technologies</h2>
    <p class="section-sub reveal">A stack built for shipping full products — from pixel-perfect frontends to SEO-ready, revenue-driving sites.</p>
    <?php if ( $skills ) : ?>
    <div class="skills-grid">
      <?php foreach ( $skills as $skill ) : ?>
      <div class="skill-card reveal">
        <div class="icon"><?php echo esc_html( $skill['icon'] ); ?></div>
        <h3><?php echo esc_html( $skill['title'] ); ?></h3>
        <div class="skill-tags">
          <?php foreach ( agp_tags_to_array( $skill['tags'] ) as $tag ) : ?>
          <span><?php echo esc_html( $tag ); ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<section id="experience">
  <div class="container">
    <div class="eyebrow reveal">Experience</div>
    <h2 class="section-title reveal">Where I've worked</h2>
    <p class="section-sub reveal">A track record across development, marketing consulting, and mentorship roles.</p>
    <?php if ( $experience ) : ?>
    <div class="timeline">
      <?php foreach ( $experience as $job ) : ?>
      <div class="timeline-item reveal">
        <div class="timeline-date"><?php echo esc_html( $job['date'] ); ?></div>
        <h3><?php echo esc_html( $job['role'] ); ?></h3>
        <div class="timeline-org"><?php echo esc_html( $job['org'] ); ?></div>
        <p><?php echo esc_html( $job['description'] ); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<section id="projects" style="background:var(--bg-alt);">
  <div class="container">
    <div class="eyebrow reveal">Projects</div>
    <h2 class="section-title reveal">Selected work</h2>
    <p class="section-sub reveal">A sample of client sites and platforms delivered with a focus on branding, SEO, and conversion.</p>
    <?php if ( $projects ) : ?>
    <div class="projects-grid">
      <?php foreach ( $projects as $project ) : ?>
      <div class="project-card reveal">
        <div class="project-thumb"><?php echo esc_html( $project['icon'] ); ?></div>
        <div class="project-body">
          <h3><?php echo esc_html( $project['title'] ); ?></h3>
          <p><?php echo esc_html( $project['description'] ); ?></p>
          <div class="project-tags">
            <?php foreach ( agp_tags_to_array( $project['tags'] ) as $tag ) : ?>
            <span><?php echo esc_html( $tag ); ?></span>
            <?php endforeach; ?>
          </div>
          <a href="#contact" class="project-link">Ask about this project &rarr;</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="eyebrow reveal">Contact</div>
    <h2 class="section-title reveal">Let's work together</h2>
    <p class="section-sub reveal">Have a project in mind, need a WordPress site, or want help with SEO and growth? Reach out.</p>
    <div class="contact-grid">
      <div class="contact-list reveal">
        <div class="contact-item">
          <div class="icon">@</div>
          <div><div class="label">Email</div><div class="value"><?php echo esc_html( agp_field( 'contact_email' ) ); ?></div></div>
        </div>
        <div class="contact-item">
          <div class="icon">&#9743;</div>
          <div><div class="label">WhatsApp</div><div class="value"><?php echo esc_html( agp_field( 'contact_whatsapp_display' ) ); ?></div></div>
        </div>
        <div class="contact-item">
          <div class="icon">&#8996;</div>
          <div><div class="label">GitHub</div><div class="value"><?php echo esc_html( agp_field( 'contact_github_display' ) ); ?></div></div>
        </div>
        <a class="contact-item" href="<?php echo esc_url( agp_field( 'contact_linkedin_url' ) ); ?>" target="_blank" rel="noopener">
          <div class="icon">in</div>
          <div><div class="label">LinkedIn</div><div class="value">Connect on LinkedIn</div></div>
        </a>
      </div>
      <form class="form-card reveal" id="contactForm">
        <div class="form-row">
          <div class="field"><label for="name">Name</label><input type="text" id="name" name="name" required placeholder="Your name"></div>
          <div class="field"><label for="email">Email</label><input type="email" id="email" name="email" required placeholder="you@example.com"></div>
        </div>
        <div class="field"><label for="subject">Subject</label><input type="text" id="subject" name="subject" placeholder="What's this about?"></div>
        <div class="field"><label for="message">Message</label><textarea id="message" name="message" rows="5" required placeholder="Tell me about your project..."></textarea></div>
        <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center;">Send Message</button>
        <p class="form-note">This opens your email client with the message pre-filled — no data is stored or sent anywhere else.</p>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>
