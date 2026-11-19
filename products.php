<?php 
require_once 'products_data.php';

$page_title = "Products - Dravanta Nexus";
include 'header.php'; 
?>

<!-- Breadcrumbs -->
<div class="breadcrumb-bar">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="index.php">Home</a></li>
            <li><i class="fas fa-chevron-right"></i></li>
            <li><span>Products</span></li>
        </ul>
    </div>
</div>

<!-- Hero Section -->
<section class="shop-hero-section">
    <div class="container shop-hero-container">
        <div class="shop-hero-content">
            <h1 class="shop-hero-title">Our Products</h1>
            <h2 class="shop-hero-tagline">Pure by Nature. Trusted Worldwide.</h2>
            <p class="shop-hero-desc">We offer a wide range of premium quality food and herbal products sourced from trusted farmers and processed with care to ensure purity, safety and best quality.</p>
            
            <div class="shop-trust-badges">
                <div class="trust-badge-item">
                    <div class="trust-badge-icon"><i class="fas fa-leaf"></i></div>
                    <div class="trust-badge-info">
                        <strong>100% Natural</strong>
                        <span>Pure & Safe</span>
                    </div>
                </div>
                <div class="trust-badge-item">
                    <div class="trust-badge-icon"><i class="fas fa-award"></i></div>
                    <div class="trust-badge-info">
                        <strong>Premium Quality</strong>
                        <span>Best Standards</span>
                    </div>
                </div>
                <div class="trust-badge-item">
                    <div class="trust-badge-icon"><i class="fas fa-globe-americas"></i></div>
                    <div class="trust-badge-info">
                        <strong>Global Exports</strong>
                        <span>Worldwide Delivery</span>
                    </div>
                </div>
                <div class="trust-badge-item">
                    <div class="trust-badge-icon"><i class="fas fa-handshake"></i></div>
                    <div class="trust-badge-info">
                        <strong>Trusted Partner</strong>
                        <span>Reliable & Transparent</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop-hero-image-wrapper">
            <img src="images/Actual_Image/Home Page/Second Image.png" alt="Our Premium Products" class="shop-hero-img" style="max-height: 380px; object-fit: cover;">
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="shop-categories-section">
    <div class="container">
        <div class="section-header-centered">
            <h2 class="section-title-serif">Our Product Categories</h2>
            <div class="title-divider-leaf">
                <span></span>
                <i class="fas fa-leaf"></i>
                <span></span>
            </div>
            <p class="section-subtitle-text">High quality products, carefully sourced and processed for global markets.</p>
        </div>

        <!-- Category 1: Rice -->
        <div class="category-row-block" id="rice-category">
            <div class="cat-block-layout">
                <div class="cat-sidebar-card">
                    <div class="cat-sidebar-top">
                        <div class="cat-icon-circle"><i class="fas fa-seedling"></i></div>
                        <h3>01.<br>Rice</h3>
                        <p>We offer a wide variety of premium quality rice known for its rich aroma, taste and superior quality.</p>
                    </div>
                    <a href="product-detail.php?product=basmati-rice" class="btn-cat-outline">VIEW ALL RICE PRODUCTS <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="cat-products-grid">
                    <?php
                    $rice_ids = ['basmati-rice', '1121-basmati-rice', 'non-basmati-rice', 'brown-rice', 'red-rice', 'broken-rice'];
                    foreach ($rice_ids as $r_id):
                        if (isset($products_catalog[$r_id])):
                            $p = $products_catalog[$r_id];
                    ?>
                        <a href="product-detail.php?product=<?php echo urlencode($r_id); ?>" class="cat-product-item">
                            <div class="cat-product-img-box">
                                <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
                            </div>
                            <div class="cat-product-meta">
                                <h4><?php echo htmlspecialchars($p['name']); ?></h4>
                                <p><?php echo htmlspecialchars($p['tagline']); ?></p>
                            </div>
                        </a>
                    <?php 
                        endif;
                    endforeach; 
                    ?>
                </div>
            </div>
            <div class="cat-bottom-action">
                <a href="product-detail.php?product=basmati-rice">VIEW ALL RICE PRODUCTS <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <!-- Category 2: Moringa Products -->
        <div class="category-row-block" id="moringa-category">
            <div class="cat-block-layout">
                <div class="cat-sidebar-card">
                    <div class="cat-sidebar-top">
                        <div class="cat-icon-circle"><i class="fas fa-leaf"></i></div>
                        <h3>02.<br>Moringa<br>Products</h3>
                        <p>Nutrient-rich moringa in powder form and delicious capsules available in different tastes and varieties.</p>
                    </div>
                    <a href="product-detail.php?product=moringa-leaf-powder" class="btn-cat-outline">VIEW ALL MORINGA PRODUCTS <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="cat-products-grid grid-5-col">
                    <?php
                    $moringa_ids = ['moringa-powder', 'moringa-capsule-original', 'moringa-capsule-mint', 'moringa-capsule-lemon', 'moringa-capsule-ginger'];
                    foreach ($moringa_ids as $m_id):
                        if (isset($products_catalog[$m_id])):
                            $p = $products_catalog[$m_id];
                    ?>
                        <a href="product-detail.php?product=<?php echo urlencode($m_id); ?>" class="cat-product-item">
                            <div class="cat-product-img-box">
                                <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
                            </div>
                            <div class="cat-product-meta">
                                <h4><?php echo htmlspecialchars($p['name']); ?></h4>
                                <p><?php echo htmlspecialchars($p['tagline']); ?></p>
                            </div>
                        </a>
                    <?php 
                        endif;
                    endforeach; 
                    ?>
                </div>
            </div>
            <div class="cat-bottom-action">
                <a href="product-detail.php?product=moringa-leaf-powder">VIEW ALL MORINGA PRODUCTS <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <!-- Category 3: Herbal Powders -->
        <div class="category-row-block" id="herbal-category">
            <div class="cat-block-layout">
                <div class="cat-sidebar-card">
                    <div class="cat-sidebar-top">
                        <div class="cat-icon-circle"><i class="fas fa-mortar-pestle"></i></div>
                        <h3>03.<br>Herbal<br>Powders</h3>
                        <p>A wide range of herbal powders made from carefully selected natural herbs and leaves.</p>
                    </div>
                    <a href="product-detail.php?product=neem-powder" class="btn-cat-outline">VIEW ALL HERBAL POWDERS <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="cat-products-grid">
                    <?php
                    $herbal_ids = ['neem-powder', 'tulsi-powder', 'ashwagandha-powder', 'amla-powder', 'giloy-powder', 'hibiscus-powder'];
                    foreach ($herbal_ids as $h_id):
                        if (isset($products_catalog[$h_id])):
                            $p = $products_catalog[$h_id];
                    ?>
                        <a href="product-detail.php?product=<?php echo urlencode($h_id); ?>" class="cat-product-item">
                            <div class="cat-product-img-box">
                                <img src="<?php echo htmlspecialchars($p['image']); ?>" alt="<?php echo htmlspecialchars($p['name']); ?>">
                            </div>
                            <div class="cat-product-meta">
                                <h4><?php echo htmlspecialchars($p['name']); ?></h4>
                                <p><?php echo htmlspecialchars($p['tagline']); ?></p>
                            </div>
                        </a>
                    <?php 
                        endif;
                    endforeach; 
                    ?>
                </div>
            </div>
            <div class="cat-bottom-action">
                <a href="product-detail.php?product=neem-powder">VIEW ALL HERBAL POWDERS <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <!-- Why Choose Our Products Bar -->
        <div class="shop-features-strip">
            <h3 class="shop-features-strip-title">Why Choose Our Products?</h3>
            <div class="shop-features-row">
                <div class="shop-feature-card">
                    <div class="shop-feature-icon"><i class="fas fa-seedling"></i></div>
                    <div class="shop-feature-text">
                        <strong>Carefully Sourced</strong>
                        <span>from trusted farmers</span>
                    </div>
                </div>
                <div class="shop-feature-card">
                    <div class="shop-feature-icon"><i class="fas fa-certificate"></i></div>
                    <div class="shop-feature-text">
                        <strong>Hygienically Processed</strong>
                        <span>& quality checked</span>
                    </div>
                </div>
                <div class="shop-feature-card">
                    <div class="shop-feature-icon"><i class="fas fa-leaf"></i></div>
                    <div class="shop-feature-text">
                        <strong>Natural & Chemical Free</strong>
                        <span>products</span>
                    </div>
                </div>
                <div class="shop-feature-card">
                    <div class="shop-feature-icon"><i class="fas fa-box-open"></i></div>
                    <div class="shop-feature-text">
                        <strong>Custom Packaging</strong>
                        <span>as per requirement</span>
                    </div>
                </div>
                <div class="shop-feature-card">
                    <div class="shop-feature-icon"><i class="fas fa-shipping-fast"></i></div>
                    <div class="shop-feature-text">
                        <strong>Timely Delivery</strong>
                        <span>worldwide</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>