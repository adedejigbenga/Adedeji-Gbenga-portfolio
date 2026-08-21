<?php
/**
 * Single source of truth for the real site content. Used two ways:
 *  1. agp_field() falls back to this whenever a Meta Box value is
 *     empty, so the site can never render blank.
 *  2. agp_seed_defaults() copies this into the settings option once,
 *     so the "Portfolio Content" admin screen opens pre-filled.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function agp_defaults() {
    return array(
        'full_name'   => 'Adedeji Gbenga',
        'tagline'     => 'Full Stack & WordPress Developer',
        'hero_kicker' => 'Available for freelance & contract work',
        'hero_intro'  => 'Building fast, reliable web experiences as',
        'hero_tags'   => 'React.js, PHP, WordPress, TailwindCSS, SEO',
        'about_bio'   => "<p>I'm Adedeji Gbenga, a full stack and WordPress developer with over 7 years of experience shipping websites and web apps across fintech, exhibitions, ecommerce, hospitality, and service businesses.</p>\n<p>My work spans building custom fintech interfaces in React and TailwindCSS, developing 200+ WordPress sites with WooCommerce and Elementor, and supporting clients end-to-end with SEO, performance optimization, and digital marketing so their sites don't just launch — they perform.</p>\n<p>I also mentor developers and marketers, having trained 100+ interns and students in full stack development, WordPress, and digital marketing through BTO Academy and other platforms.</p>",

        'hero_stats' => array(
            array( 'number' => '200', 'suffix' => '+', 'label' => 'Websites delivered' ),
            array( 'number' => '7', 'suffix' => '+', 'label' => 'Years experience' ),
            array( 'number' => '100', 'suffix' => '+', 'label' => 'People trained' ),
            array( 'number' => '75', 'suffix' => 'K+', 'label' => 'Social reach grown' ),
        ),

        'about_facts' => array(
            array( 'number' => '200', 'suffix' => '+', 'label' => 'Websites customised & delivered globally' ),
            array( 'number' => '100', 'suffix' => '+', 'label' => 'Interns & students trained' ),
            array( 'number' => '75', 'suffix' => 'K+', 'label' => 'Social following grown for a fintech brand' ),
            array( 'number' => '5', 'suffix' => '+', 'label' => 'Industries served: fintech, ecommerce, hospitality & more' ),
        ),

        'skills' => array(
            array( 'icon' => '</>', 'title' => 'Frontend & Full Stack', 'tags' => 'HTML, CSS, JavaScript, PHP, React.js, TailwindCSS' ),
            array( 'icon' => 'W', 'title' => 'WordPress Expertise', 'tags' => 'Custom Themes, Plugins, WooCommerce, Elementor' ),
            array( 'icon' => '↗', 'title' => 'SEO & Analytics', 'tags' => 'Technical SEO, On-page Optimization, Keyword Research, Google Analytics' ),
            array( 'icon' => '✎', 'title' => 'Digital Marketing', 'tags' => 'Email Marketing, Social Growth, Branding' ),
            array( 'icon' => '◆', 'title' => 'Design Tools', 'tags' => 'Figma, Adobe XD, UI/UX Support' ),
            array( 'icon' => '⚙', 'title' => 'Additional', 'tags' => 'API Integration, Speed Optimization, Security, Performance' ),
        ),

        'experience' => array(
            array( 'role' => 'Full Stack Frontend Developer', 'org' => 'PayVessel', 'date' => 'Jan 2025 — Present', 'description' => 'Build fintech interfaces using React.js and TailwindCSS, focused on usability and performance for financial products.' ),
            array( 'role' => 'Web & Digital Support', 'org' => 'Rexclarke Adventures', 'date' => 'Jan 2025 — Present', 'description' => 'Provide website maintenance and visibility improvements.' ),
            array( 'role' => 'Web & Brand Support', 'org' => 'Omiren Styles', 'date' => 'Feb 2025 — Present', 'description' => 'Offer website updates and branding-aligned digital presentation support.' ),
            array( 'role' => 'Website Developer', 'org' => 'Atlantic Exhibition', 'date' => 'Aug 2024 — Present', 'description' => 'Develop event platforms and maintain user experience and responsive delivery for business use.' ),
            array( 'role' => 'Marketing & Web Consultant', 'org' => 'Atlantic Exhibition Nigeria Ltd.', 'date' => 'Sep 2024 — Present', 'description' => 'Manage multi-channel marketing and coordinate content across design and copywriting teams.' ),
            array( 'role' => 'Full Stack & WordPress Developer', 'org' => 'MSORG Developers', 'date' => 'Mar 2024 — Present', 'description' => 'Create custom WordPress solutions with responsive design and optimization support.' ),
            array( 'role' => 'Social Media Manager', 'org' => 'FundedNext', 'date' => 'Jan 2022 — Apr 2024', 'description' => 'Grew social reach to 75K+ followers using targeted content strategy for a finance audience.' ),
            array( 'role' => 'Frontend Developer', 'org' => 'Kyivstar (Remote)', 'date' => 'May 2022 — Dec 2023', 'description' => 'Built React.js interfaces, integrated APIs, and improved page load performance for better user experience.' ),
            array( 'role' => 'Digital Marketing Consultant', 'org' => 'Quietlane Residence & Hotels', 'date' => 'Apr 2021 — Present', 'description' => 'Execute hospitality marketing campaigns focused on bookings and online visibility.' ),
            array( 'role' => 'Digital Marketing Consultant', 'org' => 'Kolseg Studios', 'date' => 'Feb 2021 — Present', 'description' => 'Develop marketing campaigns for improved recognition and traffic growth.' ),
            array( 'role' => 'Instructor & Mentor', 'org' => 'BTO Academy & Platforms', 'date' => 'Jan 2020 — Present', 'description' => 'Train interns and students in WordPress, full stack development, and digital marketing.' ),
            array( 'role' => 'WordPress Developer', 'org' => 'Zocode Technologies', 'date' => 'Jun 2019 — Feb 2022', 'description' => 'Designed and customised 200+ WordPress websites across multiple industries with SEO optimization.' ),
            array( 'role' => 'Freelance Web Developer', 'org' => 'Fiverr & Remote Clients', 'date' => 'Jan 2018 — Present', 'description' => 'Provide custom websites, WordPress support, ecommerce solutions, and technical fixes.' ),
        ),

        'projects' => array(
            array( 'icon' => '🌐', 'title' => 'Glow Ghana', 'description' => 'Business website build with full branding implementation and on-page SEO setup.', 'tags' => 'WordPress, SEO, Branding' ),
            array( 'icon' => '🏗️', 'title' => 'Megastruct', 'description' => 'Corporate site delivery covering design, structure, and SEO-ready content.', 'tags' => 'WordPress, SEO' ),
            array( 'icon' => '🌍', 'title' => 'Radiant CCA Africa', 'description' => 'Business website delivery with branding and search-visibility implementation.', 'tags' => 'WordPress, Branding' ),
            array( 'icon' => '🔗', 'title' => 'Proxy Club', 'description' => 'Visibility support and marketing-oriented website updates for an active platform.', 'tags' => 'Marketing, Web Support' ),
            array( 'icon' => '💳', 'title' => 'PayVessel Interfaces', 'description' => 'Fintech-facing interfaces built with React.js and TailwindCSS, prioritizing usability and performance.', 'tags' => 'React.js, TailwindCSS, Fintech' ),
            array( 'icon' => '🎪', 'title' => 'Atlantic Exhibition Platform', 'description' => 'Event platform development focused on responsive delivery and business usability.', 'tags' => 'WordPress, Events' ),
            array( 'icon' => '👨‍👩‍👧', 'title' => 'Whittlesea Family Services (Safe Bridge)', 'description' => 'Custom WordPress build for a Melbourne family services provider offering supervised child contact and court-ready observational reporting, with a fully custom theme and branded page templates.', 'tags' => 'WordPress, Custom Theme, PHP' ),
            array( 'icon' => '🛍️', 'title' => 'Africroots', 'description' => 'WordPress/WooCommerce redesign for an African ecommerce brand — new child theme, homepage layout, and shop experience.', 'tags' => 'WordPress, WooCommerce, Ecommerce' ),
        ),

        'contact_email'            => 'Adedejigbenga56@gmail.com',
        'contact_whatsapp_display' => '+234 813 197 7893',
        'contact_whatsapp_number'  => '2348131977893',
        'contact_github_url'       => 'https://github.com/adedejigbenga',
        'contact_github_display'   => 'github.com/adedejigbenga',
        'contact_linkedin_url'     => 'https://www.linkedin.com/in/adedeji-gbenga-8330653a4',

        'resume_summary'      => "Full Stack Developer, WordPress Developer, SEO Specialist, and Digital Marketer with over 7 years of experience across fintech, ecommerce, hospitality, and exhibitions sectors. Delivered 200+ websites, trained 100+ interns and students, and grown a fintech brand's social following to 75K+.",
        'resume_achievements' => 'Customised 200+ websites globally · Trained 100+ interns and students · Scaled a fintech brand\'s social media to 75K+ followers · Improved client brand visibility through SEO and digital marketing.',
    );
}
