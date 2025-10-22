<?php
/*
Template Name: CBM Modern Homepage
*/

// Get ACF field values with fallback defaults
$hero_heading = get_field('hero_heading') ?: 'Win a Child, Win a Life';
$hero_subtitle = get_field('hero_subtitle') ?: 'Transforming lives through Christ across 13 camps nationwide';
$hero_background = get_field('hero_background') ?: get_template_directory_uri() . '/photos/ms-703.jpg';

$stat_1_number = get_field('stat_1_number') ?: '53M+';
$stat_1_label = get_field('stat_1_label') ?: 'Children in Public Schools';
$stat_2_number = get_field('stat_2_number') ?: '13';
$stat_2_label = get_field('stat_2_label') ?: 'Camps Across the US';
$stat_3_number = get_field('stat_3_number') ?: '5';
$stat_3_label = get_field('stat_3_label') ?: 'International Affiliates';
$stat_4_number = get_field('stat_4_number') ?: '100K+';
$stat_4_label = get_field('stat_4_label') ?: 'Students Reached Annually';

$testimonial_text = get_field('testimonial_text') ?: 'My son came home from camp a changed person. He discovered his faith and found a community that loves Jesus. CBM doesn\'t just run camps - they change lives.';
$testimonial_author = get_field('testimonial_author') ?: 'Sarah M., Parent';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - Win a Child, Win a Life</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        body {
            font-family: 'Abel', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            background: transparent;
            backdrop-filter: blur(10px);
            box-shadow: none;
            z-index: 1000;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.2rem;
            font-weight: 700;
            color: white;
            white-space: nowrap;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            transition: color 0.3s;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
        }

        .nav-links a:hover {
            color: #48bb78;
        }

        .donate-btn {
            background: #48bb78;
            color: white !important;
            padding: 0.6rem 1.5rem;
            border-radius: 25px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .donate-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(72, 187, 120, 0.4);
            color: white !important;
        }

        /* Hero Section */
        .hero {
            margin-top: 0;
            padding-top: 0;
            height: 100vh;
            background: linear-gradient(135deg, rgba(44, 82, 130, 0.7), rgba(44, 82, 130, 0.7)), 
                        url('<?php echo esc_url($hero_background); ?>');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 2rem;
            position: relative;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease;
        }

        .hero-content p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            animation: fadeInUp 1s ease 0.2s both;
        }

        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease 0.4s both;
        }

        .btn {
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: #48bb78;
            color: white;
        }

        .btn-primary:hover {
            background: #38a169;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(72, 187, 120, 0.4);
        }

        .btn-secondary {
            background: white;
            color: #2c5282;
        }

        .btn-secondary:hover {
            background: #f7fafc;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Impact Stats */
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 4rem 5%;
            background: #f7fafc;
        }

        .stat-card {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.07);
            transition: transform 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: #2c5282;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #4a5568;
        }

        /* Programs Section */
        .programs {
            padding: 5rem 5%;
            background: white;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: #2c5282;
            margin-bottom: 1rem;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: #718096;
            margin-bottom: 3rem;
        }

        .program-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .program-card {
            padding: 2.5rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            color: white;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .program-card:nth-child(2) {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .program-card:nth-child(3) {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .program-card:hover {
            transform: translateY(-10px);
        }

        .program-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .program-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .program-card p {
            opacity: 0.95;
            line-height: 1.6;
        }

        /* Get Involved Section */
        .get-involved {
            padding: 5rem 5%;
            background: linear-gradient(135deg, #2c5282 0%, #4299e1 100%);
            color: white;
            text-align: center;
        }

        .involvement-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .involvement-card {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            transition: all 0.3s;
            cursor: pointer;
        }

        .involvement-card:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: scale(1.05);
        }

        .involvement-card h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        /* Testimonials */
        .testimonials {
            padding: 5rem 5%;
            background: #f7fafc;
        }

        .testimonial-container {
            max-width: 800px;
            margin: 3rem auto;
            text-align: center;
            padding: 3rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .testimonial-text {
            font-size: 1.3rem;
            font-style: italic;
            color: #4a5568;
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .testimonial-author {
            font-weight: 600;
            color: #2c5282;
        }

        /* Footer */
        footer {
            background: #1a202c;
            color: white;
            padding: 3rem 5%;
            text-align: center;
        }

        footer p {
            opacity: 0.8;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .hero-content p {
                font-size: 1.2rem;
            }
            
            .nav-links {
                gap: 1rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="logo">Children's Bible Ministries</div>
        <div class="nav-links">
            <a href="#programs">Programs</a>
            <a href="#locations">Locations</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <a href="#donate" class="donate-btn">Donate</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1><?php echo esc_html($hero_heading); ?></h1>
            <p><?php echo esc_html($hero_subtitle); ?></p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">Find a Camp Near You</a>
                <a href="#" class="btn btn-secondary">Get Involved</a>
            </div>
        </div>
    </section>

    <!-- Impact Stats -->
    <section class="stats">
        <div class="stat-card">
            <div class="stat-number"><?php echo esc_html($stat_1_number); ?></div>
            <div class="stat-label"><?php echo esc_html($stat_1_label); ?></div>
        </div>
        <div class="stat-card">
            <div class="stat-number"><?php echo esc_html($stat_2_number); ?></div>
            <div class="stat-label"><?php echo esc_html($stat_2_label); ?></div>
        </div>
        <div class="stat-card">
            <div class="stat-number"><?php echo esc_html($stat_3_number); ?></div>
            <div class="stat-label"><?php echo esc_html($stat_3_label); ?></div>
        </div>
        <div class="stat-card">
            <div class="stat-number"><?php echo esc_html($stat_4_number); ?></div>
            <div class="stat-label"><?php echo esc_html($stat_4_label); ?></div>
        </div>
    </section>

    <!-- Programs -->
    <section class="programs" id="programs">
        <h2 class="section-title">Our Ministry Programs</h2>
        <p class="section-subtitle">Spreading the gospel of Jesus Christ through diverse opportunities</p>
        
        <div class="program-grid">
            <div class="program-card">
                <div class="program-icon">⛺</div>
                <h3>Summer Camps & Retreats</h3>
                <p>Life-changing experiences where children encounter Christ through outdoor adventures, worship, and community.</p>
            </div>
            <div class="program-card">
                <div class="program-icon">📚</div>
                <h3>Released Time Bible Education</h3>
                <p>Weekly Bible instruction during school hours, reaching children where they are with God's Word.</p>
            </div>
            <div class="program-card">
                <div class="program-icon">✉️</div>
                <h3>Correspondence Lessons</h3>
                <p>Monthly Bible studies that earn camp discounts while building spiritual foundations at home.</p>
            </div>
        </div>
    </section>

    <!-- Get Involved -->
    <section class="get-involved">
        <h2 class="section-title" style="color: white;">Get Involved</h2>
        <p class="section-subtitle" style="color: rgba(255,255,255,0.9);">Join us in making an eternal impact</p>
        
        <div class="involvement-grid">
            <div class="involvement-card">
                <h3>Parents</h3>
                <p>Register your children for transformative camp experiences</p>
            </div>
            <div class="involvement-card">
                <h3>Churches</h3>
                <p>Partner with us to reach your community</p>
            </div>
            <div class="involvement-card">
                <h3>Volunteers</h3>
                <p>Serve as counselors and mentors</p>
            </div>
            <div class="involvement-card">
                <h3>Donors</h3>
                <p>Support life-changing ministry</p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <h2 class="section-title">Lives Changed</h2>
        <div class="testimonial-container">
            <p class="testimonial-text">"<?php echo esc_html($testimonial_text); ?>"</p>
            <p class="testimonial-author">— <?php echo esc_html($testimonial_author); ?></p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Children's Bible Ministries. All rights reserved.</p>
        <p>Teaching the Bible • Evangelizing the Unreached • Discipling Believers</p>
    </footer>

    <script>
        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Animate stats on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.stat-card, .program-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>