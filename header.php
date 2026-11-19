<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dravanta Nexus - Home</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <header>
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-left">
                    <i class="fas fa-map-marker-alt"></i> Based in India, Exporting to the World
                </div>
                <div class="top-bar-right">
                    <div class="contact-info">
                        <span><i class="fas fa-envelope"></i> info@dravantanexus.com</span>
                        <span><i class="fas fa-phone-alt"></i> +91 7979099017</span>
                    </div>
                    <div class="social-icons">
                        <a href="https://www.linkedin.com/company/dravanta-nexus/?lipi=urn%3Ali%3Apage%3Ad_flagship3_company%3B2hVZXp9LRvGiu5GTmxecTA%3D%3D"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61579647188122"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/dravantanexus?igsh=eTVqcThjbjJrdnM0"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Navigation -->
        <nav class="main-nav">
            <div class="container">
                
                <!-- Logo -->
                <a href="index.php" class="logo">
                    <img src="logo.png" alt="Dravanta Nexus Logo" onerror="this.style.display='none'; document.getElementById('fallback-logo').style.display='flex';">
                    
                    <div class="logo-fallback" id="fallback-logo" style="display: none;">
                        <svg class="logo-icon-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="45" fill="none" stroke="#0a3d1c" stroke-width="4"/>
                            <path d="M50 85 V35" stroke="#0a3d1c" stroke-width="4" stroke-linecap="round"/>
                            <path d="M50 70 Q 20 70 20 40 Q 50 35 50 70" fill="none" stroke="#0a3d1c" stroke-width="4"/>
                            <path d="M50 60 Q 80 60 80 30 Q 50 25 50 60" fill="none" stroke="#0a3d1c" stroke-width="4"/>
                            <path d="M50 35 Q 40 25 50 15 Q 60 25 50 35" fill="#0a3d1c"/>
                        </svg>
                        <div class="logo-text-wrapper">
                            <span class="logo-title">DRAVANTA NEXUS</span>
                            <span class="logo-subtitle">IMPORT | EXPORT</span>
                        </div>
                    </div>
                </a>

                <!-- Nav Links -->
                <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
                <ul class="nav-links">
                    <li class="<?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>"><a href="index.php">HOME</a></li>
                    <li class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>"><a href="about.php">ABOUT US</a></li>
                    <li class="dropdown <?php echo ($current_page == 'products.php' || $current_page == 'product-detail.php' || $current_page == 'shop.php') ? 'active' : ''; ?>"><a href="products.php">PRODUCTS <i class="fas fa-chevron-down"></i></a></li>
                    <li class="<?php echo ($current_page == 'why-us.php') ? 'active' : ''; ?>"><a href="why-us.php">WHY US</a></li>
                    <li><a href="why-us.php#quality">QUALITY</a></li>
                    <li class="<?php echo ($current_page == 'certifications.php') ? 'active' : ''; ?>"><a href="certifications.php">CERTIFICATIONS</a></li>
                    <li class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>"><a href="contact.php">CONTACT US</a></li>
                </ul>

                <!-- CTA Button -->
                <a href="request-quote.php" class="quote-btn">GET A QUOTE</a>
                
                <!-- Hamburger Menu Button -->
                <button class="mobile-menu-btn" onclick="toggleMenu()">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>

    <script>
        function toggleMenu() {
            document.querySelector('.nav-links').classList.toggle('active');
        }
    </script>
