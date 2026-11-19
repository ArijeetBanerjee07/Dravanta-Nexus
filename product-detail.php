<?php 
require_once 'products_data.php';

// Retrieve requested product, default to moringa-leaf-powder
$prod_id = isset($_GET['product']) ? trim($_GET['product']) : (isset($_GET['id']) ? trim($_GET['id']) : 'moringa-leaf-powder');

if (!isset($products_catalog[$prod_id])) {
    // If not found, fall back to moringa-leaf-powder or first available product
    $prod_id = 'moringa-leaf-powder';
}

$product = $products_catalog[$prod_id];
$page_title = $product['name'] . " - Dravanta Nexus";
include 'header.php'; 
?>

<!-- Breadcrumbs -->
<div class="breadcrumb-bar">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="index.php">Home</a></li>
            <li><i class="fas fa-chevron-right"></i></li>
            <li><a href="products.php">Products</a></li>
            <li><i class="fas fa-chevron-right"></i></li>
            <li><a href="<?php echo htmlspecialchars($product['category_link']); ?>"><?php echo htmlspecialchars($product['category']); ?></a></li>
            <li><i class="fas fa-chevron-right"></i></li>
            <li><span><?php echo htmlspecialchars($product['name']); ?></span></li>
        </ul>
    </div>
</div>

<!-- Product Detail Hero Section -->
<section class="product-detail-section">
    <div class="container">
        <div class="product-detail-layout">
            
            <!-- Left: Gallery -->
            <div class="product-gallery-wrap">
                <div class="product-thumbs-col">
                    <button class="thumb-nav-btn" onclick="prevThumb()"><i class="fas fa-chevron-up"></i></button>
                    
                    <?php foreach ($product['gallery'] as $idx => $g_img): ?>
                        <div class="thumb-item <?php echo ($idx === 0) ? 'active' : ''; ?>" onclick="selectThumb(this, '<?php echo htmlspecialchars($g_img); ?>')">
                            <img src="<?php echo htmlspecialchars($g_img); ?>" alt="<?php echo htmlspecialchars($product['name']); ?> View <?php echo $idx + 1; ?>">
                        </div>
                    <?php endforeach; ?>
                    
                    <button class="thumb-nav-btn" onclick="nextThumb()"><i class="fas fa-chevron-down"></i></button>
                </div>

                <div class="product-main-view">
                    <div class="pill-natural-badge">
                        <i class="fas fa-leaf"></i> 100% NATURAL
                    </div>
                    <img id="mainProductImg" src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <button class="btn-view-zoom" title="Click to view full image" onclick="zoomImage()"><i class="fas fa-search-plus"></i></button>
                </div>
            </div>

            <!-- Right: Product Summary -->
            <div class="product-summary-col">
                <div class="category-tag-inline">
                    <?php echo htmlspecialchars($product['category_tag']); ?>
                </div>
                <h1 class="product-title-serif"><?php echo htmlspecialchars($product['name']); ?></h1>
                <p class="product-tagline-text"><?php echo htmlspecialchars($product['tagline']); ?></p>
                
                <div class="product-rating-row">
                    <div class="star-icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="rating-score"><?php echo htmlspecialchars($product['rating']); ?></span>
                    <span class="rating-reviews">(<?php echo htmlspecialchars($product['reviews_count']); ?> Reviews)</span>
                </div>

                <!-- 4 Badges in a row -->
                <div class="prop-badges-grid">
                    <div class="prop-badge-card">
                        <i class="fas fa-leaf"></i>
                        <span>Pure & Natural</span>
                    </div>
                    <div class="prop-badge-card">
                        <i class="fas fa-heartbeat"></i>
                        <span>Nutrient Rich</span>
                    </div>
                    <div class="prop-badge-card">
                        <i class="fas fa-ban"></i>
                        <span>No Additives</span>
                    </div>
                    <div class="prop-badge-card">
                        <i class="fas fa-seedling"></i>
                        <span>Vegan Friendly</span>
                    </div>
                </div>

                <!-- Pack Size Selector -->
                <div class="prod-option-group">
                    <label class="option-group-label">PACK SIZE</label>
                    <div class="option-btn-pills" id="packSizeOptions">
                        <?php foreach ($product['pack_sizes'] as $size): ?>
                            <button class="option-btn <?php echo ($size === $product['default_pack']) ? 'active' : ''; ?>" type="button" onclick="selectOption(this, 'packSizeOptions')">
                                <?php echo htmlspecialchars($size); ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Form Selector -->
                <div class="prod-option-group">
                    <label class="option-group-label">FORM</label>
                    <div class="option-btn-pills" id="formOptions">
                        <?php foreach ($product['forms'] as $f): ?>
                            <button class="option-btn <?php echo ($f === $product['default_form']) ? 'active' : ''; ?>" type="button" onclick="selectOption(this, 'formOptions')">
                                <?php echo htmlspecialchars($f); ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Origin -->
                <div class="prod-meta-origin">
                    ORIGIN: <strong><?php echo htmlspecialchars($product['origin']); ?></strong>
                </div>

                <!-- Action Buttons -->
                <div class="prod-action-row">
                    <a href="request-quote.php?product=<?php echo urlencode($product['name']); ?>" class="btn-quote-primary">REQUEST A QUOTE <i class="fas fa-arrow-right"></i></a>
                    <a href="<?php echo htmlspecialchars($product['image']); ?>" download="<?php echo htmlspecialchars($product['id']); ?>-spec.png" class="btn-spec-outline">DOWNLOAD SPEC SHEET <i class="fas fa-arrow-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Guarantees Bar -->
<section class="guarantees-bar-wrap">
    <div class="container">
        <div class="guarantees-bar">
            <div class="guarantee-box">
                <div class="guarantee-box-icon"><i class="fas fa-award"></i></div>
                <div class="guarantee-box-text">
                    <strong>Premium Quality</strong>
                    <span>Carefully sourced & finely processed</span>
                </div>
            </div>
            <div class="guarantee-box">
                <div class="guarantee-box-icon"><i class="fas fa-globe-americas"></i></div>
                <div class="guarantee-box-text">
                    <strong>Global Export</strong>
                    <span>Exporting worldwide with care</span>
                </div>
            </div>
            <div class="guarantee-box">
                <div class="guarantee-box-icon"><i class="fas fa-flask"></i></div>
                <div class="guarantee-box-text">
                    <strong>Lab Tested</strong>
                    <span>Quality & purity tested</span>
                </div>
            </div>
            <div class="guarantee-box">
                <div class="guarantee-box-icon"><i class="fas fa-cubes"></i></div>
                <div class="guarantee-box-text">
                    <strong>Bulk Supply</strong>
                    <span>Reliable supply for large orders</span>
                </div>
            </div>
            <div class="guarantee-box">
                <div class="guarantee-box-icon"><i class="fas fa-shield-alt"></i></div>
                <div class="guarantee-box-text">
                    <strong>Secure Packaging</strong>
                    <span>Hygienic & export-ready packaging</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tabbed Section -->
<section class="product-tabs-section">
    <div class="container">
        <!-- Tabs Header -->
        <div class="tabs-header-bar">
            <button class="tab-nav-btn active" onclick="openTab(event, 'tab-desc')">DESCRIPTION</button>
            <button class="tab-nav-btn" onclick="openTab(event, 'tab-specs')">SPECIFICATIONS</button>
            <button class="tab-nav-btn" onclick="openTab(event, 'tab-benefits')">BENEFITS</button>
            <button class="tab-nav-btn" onclick="openTab(event, 'tab-usage')">USAGE</button>
            <button class="tab-nav-btn" onclick="openTab(event, 'tab-packaging')">PACKAGING</button>
            <button class="tab-nav-btn" onclick="openTab(event, 'tab-docs')">DOCUMENTS</button>
        </div>

        <!-- Tab 1: Description -->
        <div id="tab-desc" class="tab-content-pane active">
            <div class="tab-three-cols-grid">
                <!-- Col 1: Text -->
                <div class="tab-desc-col">
                    <p><?php echo htmlspecialchars($product['description_p1']); ?></p>
                    <p><?php echo htmlspecialchars($product['description_p2']); ?></p>
                    
                    <ul class="tab-check-list">
                        <?php foreach ($product['bullet_points'] as $bp): ?>
                            <li><i class="far fa-check-circle"></i> <?php echo htmlspecialchars($bp); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Col 2: Nutrition Information -->
                <div class="info-card-bordered">
                    <h4 class="info-card-bordered-title">NUTRITIONAL INFORMATION (Per 100g)</h4>
                    <table class="nutrition-table">
                        <?php foreach ($product['nutrition'] as $nutrient => $val): ?>
                            <tr>
                                <td class="prop-name"><?php echo htmlspecialchars($nutrient); ?></td>
                                <td class="prop-val"><?php echo htmlspecialchars($val); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>

                <!-- Col 3: Product Highlights -->
                <div class="info-card-bordered">
                    <h4 class="info-card-bordered-title">PRODUCT HIGHLIGHTS</h4>
                    <ul class="highlights-list">
                        <?php foreach ($product['highlights'] as $hl_key => $hl_val): ?>
                            <li>
                                <div class="highlights-icon"><i class="fas fa-check"></i></div>
                                <div class="highlights-detail">
                                    <strong><?php echo htmlspecialchars($hl_key); ?></strong>
                                    <span><?php echo htmlspecialchars($hl_val); ?></span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Tab 2: Specifications -->
        <div id="tab-specs" class="tab-content-pane">
            <div class="tab-three-cols-grid">
                <div class="tab-desc-col">
                    <p>Our <?php echo htmlspecialchars($product['name']); ?> complies with global phytosanitary and food safety export specifications. Manufactured under GMP certified facilities with microbiological, heavy metal, and chemical screenings performed on every consignment.</p>
                    <ul class="tab-check-list">
                        <li><i class="far fa-check-circle"></i> Complete traceability from certified contracted Indian farm clusters</li>
                        <li><i class="far fa-check-circle"></i> Stringent moisture and foreign matter control exceeding export norms</li>
                        <li><i class="far fa-check-circle"></i> Heavy metals compliance (Lead, Arsenic, Cadmium, Mercury within WHO limits)</li>
                        <li><i class="far fa-check-circle"></i> Non-irradiated, pesticide-compliant, and non-GMO guaranteed</li>
                    </ul>
                </div>
                <div class="info-card-bordered">
                    <h4 class="info-card-bordered-title">QUALITY ATTRIBUTES</h4>
                    <table class="nutrition-table">
                        <tr><td class="prop-name">Product Name</td><td class="prop-val"><?php echo htmlspecialchars($product['name']); ?></td></tr>
                        <tr><td class="prop-name">Category</td><td class="prop-val"><?php echo htmlspecialchars($product['category']); ?></td></tr>
                        <tr><td class="prop-name">Country of Origin</td><td class="prop-val"><?php echo htmlspecialchars($product['origin']); ?></td></tr>
                        <tr><td class="prop-name">Export Grade</td><td class="prop-val">Grade A Premium</td></tr>
                    </table>
                </div>
                <div class="info-card-bordered">
                    <h4 class="info-card-bordered-title">CERTIFICATION STANDARDS</h4>
                    <ul class="highlights-list">
                        <li><i class="fas fa-certificate highlights-icon"></i><div class="highlights-detail"><strong>APEDA Registered</strong><span>Authorized Indian export authority</span></div></li>
                        <li><i class="fas fa-check-double highlights-icon"></i><div class="highlights-detail"><strong>GMP Compliant</strong><span>Good Manufacturing Practice</span></div></li>
                        <li><i class="fas fa-shield-alt highlights-icon"></i><div class="highlights-detail"><strong>ISO Certified</strong><span>Quality Management System</span></div></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Tab 3: Benefits -->
        <div id="tab-benefits" class="tab-content-pane">
            <div class="tab-three-cols-grid">
                <div class="tab-desc-col">
                    <p>Carefully cultivated and minimally processed, our <?php echo htmlspecialchars($product['name']); ?> offers superior bioavailable nutrients, natural flavor, and holistic health benefits.</p>
                    <ul class="tab-check-list">
                        <?php foreach ($product['bullet_points'] as $bp): ?>
                            <li><i class="far fa-check-circle"></i> <?php echo htmlspecialchars($bp); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="info-card-bordered">
                    <h4 class="info-card-bordered-title">PURITY ASSURANCE</h4>
                    <p style="font-size: 13px; color: #666; line-height: 1.7;">Free from synthetic adulterants, artificial colorings, chemical preservatives, or synthetic flow agents. 100% natural and sustainably produced.</p>
                </div>
                <div class="info-card-bordered">
                    <h4 class="info-card-bordered-title">THERAPEUTIC POTENCY</h4>
                    <p style="font-size: 13px; color: #666; line-height: 1.7;">State-of-the-art handling preserves volatile phyto-compounds, aroma, and delicate micronutrients from harvest to customer receipt.</p>
                </div>
            </div>
        </div>

        <!-- Tab 4: Usage -->
        <div id="tab-usage" class="tab-content-pane">
            <div class="tab-three-cols-grid">
                <div class="tab-desc-col">
                    <p>Versatile application in culinary masterpieces, dietary nutraceuticals, food and beverage processing, or commercial repackaging.</p>
                    <ul class="tab-check-list">
                        <li><i class="far fa-check-circle"></i> Consumer Packaged Goods (CPG) ready</li>
                        <li><i class="far fa-check-circle"></i> Bulk raw material for food processors &amp; herbal manufacturers</li>
                        <li><i class="far fa-check-circle"></i> Hospitality, catering, and gourmet supermarket shelf ready</li>
                    </ul>
                </div>
                <div class="info-card-bordered">
                    <h4 class="info-card-bordered-title">STORAGE RECOMMENDATION</h4>
                    <p style="font-size: 13px; color: #666; line-height: 1.7;">Store in original sealed packaging in a cool, dark, dry warehouse at ambient temperatures below 25&deg;C away from direct sunlight.</p>
                </div>
                <div class="info-card-bordered">
                    <h4 class="info-card-bordered-title">HANDLING TIP</h4>
                    <p style="font-size: 13px; color: #666; line-height: 1.7;">Reseal immediately after opening or transfer into airtight food-grade storage bins to protect against ambient moisture.</p>
                </div>
            </div>
        </div>

        <!-- Tab 5: Packaging -->
        <div id="tab-packaging" class="tab-content-pane">
            <div class="tab-three-cols-grid">
                <div class="tab-desc-col">
                    <p>We provide comprehensive packaging solutions ranging from custom-printed private label retail pouches to heavy-duty export drums and containerized jumbo bags.</p>
                    <ul class="tab-check-list">
                        <li><i class="far fa-check-circle"></i> Retail: Kraft zipper pouches, HDPE jars, PET bottles, tin cans</li>
                        <li><i class="far fa-check-circle"></i> Bulk: 25kg multi-wall paper bags with inner food-grade poly liner</li>
                        <li><i class="far fa-check-circle"></i> Export Palletization: ISPM-15 heat-treated wooden or plastic pallets</li>
                    </ul>
                </div>
                <div class="info-card-bordered">
                    <h4 class="info-card-bordered-title">EXPORT SPECIFICATIONS</h4>
                    <table class="nutrition-table">
                        <tr><td class="prop-name">Inner Liner</td><td class="prop-val">Food-Grade PE</td></tr>
                        <tr><td class="prop-name">Outer Casing</td><td class="prop-val">Multi-ply Corrugated / PP</td></tr>
                        <tr><td class="prop-name">Container Load</td><td class="prop-val">20ft / 40ft FCL &amp; LCL</td></tr>
                    </table>
                </div>
                <div class="info-card-bordered">
                    <h4 class="info-card-bordered-title">CUSTOM OEM SERVICES</h4>
                    <p style="font-size: 13px; color: #666; line-height: 1.7;">Custom branding, private label artwork, multilingual nutritional tables, and regional barcode printing available on contract.</p>
                </div>
            </div>
        </div>

        <!-- Tab 6: Documents -->
        <div id="tab-docs" class="tab-content-pane">
            <div class="tab-three-cols-grid">
                <div class="tab-desc-col">
                    <p>Every commercial export order includes complete regulatory documentation to facilitate smooth customs clearance at destination ports.</p>
                    <ul class="tab-check-list">
                        <li><i class="far fa-check-circle"></i> Certificate of Analysis (COA) per production lot</li>
                        <li><i class="far fa-check-circle"></i> Phytosanitary Certificate issued by Indian Plant Quarantine</li>
                        <li><i class="far fa-check-circle"></i> Certificate of Origin (COO) endorsed by Chamber of Commerce</li>
                        <li><i class="far fa-check-circle"></i> Non-GMO and Allergen Declarations</li>
                    </ul>
                </div>
                <div class="info-card-bordered">
                    <h4 class="info-card-bordered-title">EXPORT PAPERWORK</h4>
                    <table class="nutrition-table">
                        <tr><td class="prop-name">Commercial Invoice</td><td class="prop-val">Provided</td></tr>
                        <tr><td class="prop-name">Packing List</td><td class="prop-val">Provided</td></tr>
                        <tr><td class="prop-name">Bill of Lading</td><td class="prop-val">Provided</td></tr>
                        <tr><td class="prop-name">Lab Test COA</td><td class="prop-val">Provided</td></tr>
                    </table>
                </div>
                <div class="info-card-bordered">
                    <h4 class="info-card-bordered-title">PORT CLEARANCE SUPPORT</h4>
                    <p style="font-size: 13px; color: #666; line-height: 1.7;">Our logistics specialists coordinate with shipping lines and freight forwarders to ensure all port documentation is dispatched well ahead of cargo arrival.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products Section -->
<section class="related-products-section">
    <div class="container">
        <div class="section-header-flex">
            <h3>RELATED PRODUCTS</h3>
            <div class="slider-controls-pills">
                <button class="ctrl-arrow-btn" onclick="prevRelated()"><i class="fas fa-chevron-left"></i></button>
                <button class="ctrl-arrow-btn" onclick="nextRelated()"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>

        <div class="related-grid-5" id="relatedGrid">
            <?php 
            foreach ($product['related'] as $rel_id):
                if (isset($products_catalog[$rel_id])):
                    $rel = $products_catalog[$rel_id];
            ?>
                <a href="product-detail.php?product=<?php echo urlencode($rel_id); ?>" class="related-card">
                    <div class="related-card-img-box">
                        <img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['name']); ?>">
                    </div>
                    <div class="related-card-body">
                        <h4 class="related-card-title"><?php echo htmlspecialchars($rel['name']); ?></h4>
                        <p class="related-card-desc"><?php echo htmlspecialchars($rel['tagline']); ?></p>
                        <span class="related-card-link">VIEW PRODUCT <i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
            <?php 
                endif;
            endforeach; 
            ?>
        </div>
    </div>
</section>

<!-- Bulk Orders CTA Banner -->
<section class="bulk-banner-section">
    <div class="container">
        <div class="bulk-banner-card">
            <div class="bulk-banner-left">
                <div class="bulk-banner-icon">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <div class="bulk-banner-text">
                    <h3>Looking for Bulk Orders of <?php echo htmlspecialchars($product['name']); ?>?</h3>
                    <p>We provide customized solutions with competitive export pricing and guaranteed timely delivery.</p>
                </div>
            </div>
            <div class="bulk-banner-right">
                <a href="request-quote.php?product=<?php echo urlencode($product['name']); ?>&type=bulk" class="btn-bulk-quote">GET A CUSTOM QUOTE <i class="fas fa-arrow-right"></i></a>
                <span class="bulk-call-direct">or call us directly +91 7979099017</span>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Scripts for Gallery, Options & Tabs -->
<script>
    // Tab switching
    function openTab(evt, tabId) {
        const tabPanes = document.querySelectorAll('.tab-content-pane');
        tabPanes.forEach(pane => pane.classList.remove('active'));
        
        const tabBtns = document.querySelectorAll('.tab-nav-btn');
        tabBtns.forEach(btn => btn.classList.remove('active'));
        
        document.getElementById(tabId).classList.add('active');
        evt.currentTarget.classList.add('active');
    }

    // Thumbnail Selection
    function selectThumb(thumbEl, imgSrc) {
        document.querySelectorAll('.thumb-item').forEach(item => item.classList.remove('active'));
        thumbEl.classList.add('active');
        
        const mainImg = document.getElementById('mainProductImg');
        mainImg.style.opacity = '0.3';
        setTimeout(() => {
            mainImg.src = imgSrc;
            mainImg.style.opacity = '1';
        }, 150);
    }

    // Option Button Selection (Pack size & Form)
    function selectOption(btnEl, groupContainerId) {
        const container = document.getElementById(groupContainerId);
        container.querySelectorAll('.option-btn').forEach(btn => btn.classList.remove('active'));
        btnEl.classList.add('active');
    }

    // Prev / Next Thumbnail Navigation
    let activeThumbIndex = 0;
    const thumbItems = document.querySelectorAll('.thumb-item');
    
    function nextThumb() {
        if (thumbItems.length === 0) return;
        activeThumbIndex = (activeThumbIndex + 1) % thumbItems.length;
        thumbItems[activeThumbIndex].click();
    }

    function prevThumb() {
        if (thumbItems.length === 0) return;
        activeThumbIndex = (activeThumbIndex - 1 + thumbItems.length) % thumbItems.length;
        thumbItems[activeThumbIndex].click();
    }

    // Image Zoom modal preview
    function zoomImage() {
        const currentSrc = document.getElementById('mainProductImg').src;
        window.open(currentSrc, '_blank');
    }

    // Related products scroll
    function nextRelated() {
        const grid = document.getElementById('relatedGrid');
        grid.scrollBy({ left: 260, behavior: 'smooth' });
    }
    function prevRelated() {
        const grid = document.getElementById('relatedGrid');
        grid.scrollBy({ left: -260, behavior: 'smooth' });
    }
</script>

<?php include 'footer.php'; ?>