<?php include 'header.php'; ?>

<!-- Header Section -->
<section class="page-header" style="background-image: none;">
    <style>
        .page-header::after {
            background-image: url('images/refund-banner.png');
        }
    </style>
    <div class="page-header-container">
        <div class="page-header-content">
            <h1 class="page-header-title">Refund & Return Policy</h1>
            <div class="page-header-subtitle">Our commitment to quality and satisfaction.</div>
            <p class="page-header-text">We strive to ensure that every shipment meets your expectations. Due to the nature of food and herbal products, our return policy is designed to protect product integrity.</p>
        </div>
    </div>
</section>

<!-- Policies Grid -->
<section class="info-grid-section">
    <div class="info-grid">
        <!-- 1 -->
        <div class="info-card">
            <div class="info-icon"><i class="fas fa-box"></i></div>
            <div class="info-content">
                <h3>1. Eligibility for Return</h3>
                <p>To be eligible for a return, the goods must be in their original, unopened packaging, unused, and in the same condition that you received them. Returns are only accepted if initiated within 7 days of cargo delivery at the destination port.</p>
            </div>
        </div>
        <!-- 2 -->
        <div class="info-card">
            <div class="info-icon"><i class="fas fa-ban"></i></div>
            <div class="info-content">
                <h3>2. Non-Returnable Items</h3>
                <p>Custom bulk orders, private label OEM products, and highly perishable agricultural goods are generally non-returnable unless a significant defect or quality discrepancy is proven via third-party inspection.</p>
            </div>
        </div>
        <!-- 3 -->
        <div class="info-card">
            <div class="info-icon"><i class="fas fa-money-bill-wave"></i></div>
            <div class="info-content">
                <h3>3. Refund Process</h3>
                <p>Once your return is received and inspected, we will notify you of the approval or rejection of your refund. If approved, the refund will be processed and a credit will automatically be applied to your original method of payment within 14-21 business days.</p>
            </div>
        </div>
        <!-- 4 -->
        <div class="info-card">
            <div class="info-icon"><i class="fas fa-exchange-alt"></i></div>
            <div class="info-content">
                <h3>4. Exchange Policy</h3>
                <p>We only replace items if they are defective, damaged in transit, or if an incorrect product was shipped. Exchanges are subject to product availability and mutual agreement on shipping terms.</p>
            </div>
        </div>
    </div>
</section>

<!-- Split Section -->
<section style="padding: 60px 20px; background-color: #fbfdf9; border-top: 1px solid #f0f0f0;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 50px; align-items: center;">
        <div style="flex: 1; min-width: 300px;">
            <h4 style="color: #c99c4d; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; font-size: 13px; margin-bottom: 10px;">Procedure</h4>
            <h2 style="font-family: 'Playfair Display', serif; font-size: 32px; color: var(--primary-dark); margin-bottom: 25px; line-height: 1.2;">Damage or Shortage Claims</h2>
            <p style="color: #555; line-height: 1.8; margin-bottom: 25px; font-size: 15px;">If your cargo arrives with visible damage or shortages, it must be documented immediately with the freight forwarder or shipping line.</p>
            
            <div style="display: flex; flex-direction: column; gap: 20px;">
                <div style="display: flex; gap: 15px;">
                    <div style="width: 40px; height: 40px; background: #eef5eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #18632e; font-size: 16px; font-weight: 700; flex-shrink: 0;">1</div>
                    <div>
                        <h5 style="color: var(--primary-dark); font-weight: 700; margin-bottom: 5px; font-size: 15px;">Document the Issue</h5>
                        <p style="font-size: 13px; color: #666; margin: 0; line-height: 1.5;">Take clear photographs of the damaged cargo, container seals, and packaging immediately upon arrival.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 15px;">
                    <div style="width: 40px; height: 40px; background: #eef5eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #18632e; font-size: 16px; font-weight: 700; flex-shrink: 0;">2</div>
                    <div>
                        <h5 style="color: var(--primary-dark); font-weight: 700; margin-bottom: 5px; font-size: 15px;">Note on Delivery Receipt</h5>
                        <p style="font-size: 13px; color: #666; margin: 0; line-height: 1.5;">Ensure the damage or shortage is clearly noted on the Bill of Lading or Delivery Receipt before signing.</p>
                    </div>
                </div>
                <div style="display: flex; gap: 15px;">
                    <div style="width: 40px; height: 40px; background: #eef5eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #18632e; font-size: 16px; font-weight: 700; flex-shrink: 0;">3</div>
                    <div>
                        <h5 style="color: var(--primary-dark); font-weight: 700; margin-bottom: 5px; font-size: 15px;">Notify Us Promptly</h5>
                        <p style="font-size: 13px; color: #666; margin: 0; line-height: 1.5;">Contact our support team within 48 hours of cargo arrival with all supporting documentation to initiate a claim.</p>
                    </div>
                </div>
            </div>
        </div>
        <div style="flex: 1; min-width: 300px; position: relative;">
            <img src="images/refund-second.png" style="width: 100%; border-radius: 12px; box-shadow: 0 15px 40px rgba(0,0,0,0.1);" alt="Cargo Inspection">
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-banner">
    <div>
        <h2 class="cta-banner-text">Need Help with a Return or Claim?</h2>
        <p class="cta-banner-sub">Our customer support team is ready to assist you with any concerns regarding your shipment.</p>
    </div>
    <div class="cta-buttons">
        <a href="contact.php" class="btn-gold">CONTACT SUPPORT <i class="fas fa-arrow-right"></i></a>
    </div>
</section>

<?php include 'footer.php'; ?>
