<?php include 'header.php'; ?>

<!-- Header Section -->
<section class="page-header" style="background-image: none;">
    <style>
        .page-header::after {
            background-image: url('images/quote-banner.png');
        }
    </style>
    <div class="page-header-container">
        <div class="page-header-content">
            <h1 class="page-header-title">Request a Free<br>Export Quote</h1>
            <div class="page-header-subtitle">Premium Food & Herbal Products<br>Exported Worldwide</div>
            <p class="page-header-text">Get customized pricing, bulk order quotations, export documentation support, and global shipping assistance.</p>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin: 30px 0;">
                <div style="font-size: 14px; font-weight: 600; color: #18632e;"><i class="fas fa-check-circle" style="color: #799e69; margin-right: 8px;"></i> Rice Export</div>
                <div style="font-size: 14px; font-weight: 600; color: #18632e;"><i class="fas fa-check-circle" style="color: #799e69; margin-right: 8px;"></i> Neem Powder</div>
                <div style="font-size: 14px; font-weight: 600; color: #18632e;"><i class="fas fa-check-circle" style="color: #799e69; margin-right: 8px;"></i> Moringa Powder</div>
                <div style="font-size: 14px; font-weight: 600; color: #18632e;"><i class="fas fa-check-circle" style="color: #799e69; margin-right: 8px;"></i> Onion Powder</div>
                <div style="font-size: 14px; font-weight: 600; color: #18632e;"><i class="fas fa-check-circle" style="color: #799e69; margin-right: 8px;"></i> Moringa Capsules</div>
                <div style="font-size: 14px; font-weight: 600; color: #18632e;"><i class="fas fa-check-circle" style="color: #799e69; margin-right: 8px;"></i> Herbal Products</div>
            </div>
        </div>
    </div>
</section>

<!-- Form & Info Split -->
<section style="padding: 60px 20px; background: #fff; margin-top: -30px; position: relative; z-index: 10;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 40px;">
        
        <!-- Form Section -->
        <div style="flex: 1.2; min-width: 300px;">
            <h3 style="font-family: 'Playfair Display', serif; font-size: 24px; color: var(--primary-dark); margin-bottom: 25px; padding-bottom: 15px; border-bottom: 2px solid #f0f0f0;">Get Your Custom Quote</h3>
            
            <form action="#" method="POST" class="custom-form" style="box-shadow: 0 5px 25px rgba(0,0,0,0.04); border: 1px solid #f0f0f0; padding: 30px;">
                <div class="form-row">
                    <div class="form-group">
                        <label>Name <span>*</span></label>
                        <input type="text" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label>Company Name <span>*</span></label>
                        <input type="text" class="form-control" placeholder="Enter company name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Country <span>*</span></label>
                        <select class="form-control" required>
                            <option value="">Select your country</option>
                            <option value="USA">USA</option>
                            <option value="UAE">UAE</option>
                            <option value="UK">UK</option>
                            <option value="Germany">Germany</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Contact Number <span>*</span></label>
                        <input type="text" class="form-control" placeholder="Enter contact number" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Email Address <span>*</span></label>
                        <input type="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label>Product Interested In <span>*</span></label>
                        <select class="form-control" required>
                            <option value="">Select product</option>
                            <option value="Rice">Basmati Rice</option>
                            <option value="Herbs">Herbal Powders</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Quantity Required <span>*</span></label>
                        <select class="form-control" required>
                            <option value="">Select quantity</option>
                            <option value="1-5">1 - 5 MT</option>
                            <option value="5-20">5 - 20 MT</option>
                            <option value="20+">20+ MT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Packaging Requirement <span>*</span></label>
                        <select class="form-control" required>
                            <option value="">Select packaging</option>
                            <option value="bulk">Bulk (25kg/50kg Bags)</option>
                            <option value="retail">Retail Packaging</option>
                            <option value="custom">Custom / OEM</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 20px;">
                    <label>Destination Port / Country <span>*</span></label>
                    <input type="text" class="form-control" placeholder="Enter port or country" required>
                </div>
                <div class="form-group" style="margin-bottom: 25px;">
                    <label>Product Specifications / Your Message <span>*</span></label>
                    <textarea class="form-control" placeholder="Write your message here..." required></textarea>
                </div>
                <button type="submit" class="btn-submit">REQUEST QUOTE NOW <i class="fas fa-arrow-right"></i></button>
            </form>
        </div>

        <!-- Info / Trust Section -->
        <div style="flex: 1; min-width: 300px;">
            <div style="background-color: #fcfcfc; border: 1px solid #eaeaea; border-radius: 12px; overflow: hidden; height: 100%;">
                <div style="padding: 30px;">
                    <h3 style="color: var(--primary-dark); font-size: 20px; font-family: 'Playfair Display', serif; margin-bottom: 5px;">Trusted. Reliable.</h3>
                    <h4 style="color: #c99c4d; font-size: 22px; font-family: 'Playfair Display', serif; font-weight: 700; margin-bottom: 25px;">Global Export Partner.</h4>
                    
                    <div style="display: flex; flex-direction: column; gap: 15px;">
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="color: #799e69; font-size: 24px;"><i class="fas fa-check-square"></i></div>
                            <div>
                                <h5 style="color: var(--primary-dark); font-size: 14px; margin-bottom: 3px; font-weight: 700;">APEDA Registered</h5>
                                <p style="font-size: 12px; color: #666; margin: 0;">Govt. of India Recognized Exporter</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="color: #799e69; font-size: 24px;"><i class="fas fa-check-square"></i></div>
                            <div>
                                <h5 style="color: var(--primary-dark); font-size: 14px; margin-bottom: 3px; font-weight: 700;">Organic Products</h5>
                                <p style="font-size: 12px; color: #666; margin: 0;">100% Natural & Premium Quality</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="color: #799e69; font-size: 24px;"><i class="fas fa-check-square"></i></div>
                            <div>
                                <h5 style="color: var(--primary-dark); font-size: 14px; margin-bottom: 3px; font-weight: 700;">Export Documentation Support</h5>
                                <p style="font-size: 12px; color: #666; margin: 0;">Complete Export Assistance</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="color: #799e69; font-size: 24px;"><i class="fas fa-check-square"></i></div>
                            <div>
                                <h5 style="color: var(--primary-dark); font-size: 14px; margin-bottom: 3px; font-weight: 700;">Global Shipping</h5>
                                <p style="font-size: 12px; color: #666; margin: 0;">Sea & Air Freight Worldwide</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="color: #799e69; font-size: 24px;"><i class="fas fa-check-square"></i></div>
                            <div>
                                <h5 style="color: var(--primary-dark); font-size: 14px; margin-bottom: 3px; font-weight: 700;">Premium Quality</h5>
                                <p style="font-size: 12px; color: #666; margin: 0;">Strict Quality Control & Testing</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 15px; align-items: flex-start;">
                            <div style="color: #799e69; font-size: 24px;"><i class="fas fa-check-square"></i></div>
                            <div>
                                <h5 style="color: var(--primary-dark); font-size: 14px; margin-bottom: 3px; font-weight: 700;">Custom Packaging</h5>
                                <p style="font-size: 12px; color: #666; margin: 0;">Private Label & OEM Available</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="height: 250px; position: relative;">
                    <img src="images/quote-second.png" style="width: 100%; height: 100%; object-fit: cover;" alt="Global Export Container">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Request Quote -->
<section style="padding: 60px 20px; background-color: #fbfdf9;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 40px;">
            <h3 style="color: var(--primary-dark); font-size: 14px; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; display: inline-flex; align-items: center; gap: 15px;"><img src="images/leaf.png" style="height: 15px; transform: scaleX(-1);"> WHY REQUEST A QUOTE FROM US? <img src="images/leaf.png" style="height: 15px;"></h3>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 20px;">
            <div style="background: #fff; padding: 30px 20px; border-radius: 10px; text-align: center; border: 1px solid #eaeaea;">
                <div style="width: 50px; height: 50px; margin: 0 auto 15px; color: #18632e; font-size: 24px;"><i class="fas fa-tags"></i></div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 8px; font-weight: 700;">Competitive Pricing</h4>
                <p style="font-size: 12px; color: #777; margin: 0;">Direct sourcing from farmers</p>
            </div>
            <div style="background: #fff; padding: 30px 20px; border-radius: 10px; text-align: center; border: 1px solid #eaeaea;">
                <div style="width: 50px; height: 50px; margin: 0 auto 15px; color: #18632e; font-size: 24px;"><i class="fas fa-bolt"></i></div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 8px; font-weight: 700;">Fast Response</h4>
                <p style="font-size: 12px; color: #777; margin: 0;">Quotes within 24 hours</p>
            </div>
            <div style="background: #fff; padding: 30px 20px; border-radius: 10px; text-align: center; border: 1px solid #eaeaea;">
                <div style="width: 50px; height: 50px; margin: 0 auto 15px; color: #18632e; font-size: 24px;"><i class="fas fa-file-alt"></i></div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 8px; font-weight: 700;">Export Expertise</h4>
                <p style="font-size: 12px; color: #777; margin: 0;">End-to-end documentation</p>
            </div>
            <div style="background: #fff; padding: 30px 20px; border-radius: 10px; text-align: center; border: 1px solid #eaeaea;">
                <div style="width: 50px; height: 50px; margin: 0 auto 15px; color: #18632e; font-size: 24px;"><i class="fas fa-boxes"></i></div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 8px; font-weight: 700;">Flexible MOQ</h4>
                <p style="font-size: 12px; color: #777; margin: 0;">Suitable for startups & bulk</p>
            </div>
            <div style="background: #fff; padding: 30px 20px; border-radius: 10px; text-align: center; border: 1px solid #eaeaea;">
                <div style="width: 50px; height: 50px; margin: 0 auto 15px; color: #18632e; font-size: 24px;"><i class="fas fa-ship"></i></div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 8px; font-weight: 700;">Worldwide Delivery</h4>
                <p style="font-size: 12px; color: #777; margin: 0;">Global shipping options</p>
            </div>
            <div style="background: #fff; padding: 30px 20px; border-radius: 10px; text-align: center; border: 1px solid #eaeaea;">
                <div style="width: 50px; height: 50px; margin: 0 auto 15px; color: #18632e; font-size: 24px;"><i class="fas fa-certificate"></i></div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 8px; font-weight: 700;">Quality Assurance</h4>
                <p style="font-size: 12px; color: #777; margin: 0;">International standards</p>
            </div>
        </div>
    </div>
</section>

<!-- Export To -->
<section style="padding: 60px 20px; background-color: #fff; text-align: center;">
    <div style="max-width: 1000px; margin: 0 auto;">
        <h3 style="color: var(--primary-dark); font-size: 14px; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; display: inline-flex; align-items: center; gap: 15px; margin-bottom: 40px;"><img src="images/leaf.png" style="height: 15px; transform: scaleX(-1);"> WE EXPORT TO <img src="images/leaf.png" style="height: 15px;"></h3>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px;">
            <div style="padding: 15px; border: 1px solid #eee; border-radius: 8px; display: flex; align-items: center; justify-content: center; gap: 10px; font-weight: 600; font-size: 14px; color: #444;">
                <img src="https://flagcdn.com/w40/us.png" width="30" alt="USA"> USA
            </div>
            <div style="padding: 15px; border: 1px solid #eee; border-radius: 8px; display: flex; align-items: center; justify-content: center; gap: 10px; font-weight: 600; font-size: 14px; color: #444;">
                <img src="https://flagcdn.com/w40/ae.png" width="30" alt="UAE"> UAE
            </div>
            <div style="padding: 15px; border: 1px solid #eee; border-radius: 8px; display: flex; align-items: center; justify-content: center; gap: 10px; font-weight: 600; font-size: 14px; color: #444;">
                <img src="https://flagcdn.com/w40/gb.png" width="30" alt="UK"> UK
            </div>
            <div style="padding: 15px; border: 1px solid #eee; border-radius: 8px; display: flex; align-items: center; justify-content: center; gap: 10px; font-weight: 600; font-size: 14px; color: #444;">
                <img src="https://flagcdn.com/w40/ca.png" width="30" alt="Canada"> Canada
            </div>
            <div style="padding: 15px; border: 1px solid #eee; border-radius: 8px; display: flex; align-items: center; justify-content: center; gap: 10px; font-weight: 600; font-size: 14px; color: #444;">
                <img src="https://flagcdn.com/w40/de.png" width="30" alt="Germany"> Germany
            </div>
            <div style="padding: 15px; border: 1px solid #eee; border-radius: 8px; display: flex; align-items: center; justify-content: center; gap: 10px; font-weight: 600; font-size: 14px; color: #444;">
                <img src="https://flagcdn.com/w40/au.png" width="30" alt="Australia"> Australia
            </div>
            <div style="padding: 15px; border: 1px solid #eee; border-radius: 8px; display: flex; align-items: center; justify-content: center; gap: 10px; font-weight: 600; font-size: 14px; color: #444;">
                <img src="https://flagcdn.com/w40/sa.png" width="30" alt="Saudi Arabia"> Saudi Arabia
            </div>
            <div style="padding: 15px; border: 1px solid #eee; border-radius: 8px; display: flex; align-items: center; justify-content: center; gap: 10px; font-weight: 600; font-size: 14px; color: #444;">
                <img src="https://flagcdn.com/w40/sg.png" width="30" alt="Singapore"> Singapore
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 40px;">
        <div style="flex: 1; min-width: 250px;">
            <h2 style="font-family: 'Playfair Display', serif; font-size: 36px; color: var(--primary-dark); line-height: 1.2;">Frequently<br>Asked Questions</h2>
            <img src="images/leaf.png" alt="Leaf" style="margin-top: 20px; width: 60px; opacity: 0.5;">
        </div>
        <div style="flex: 2; min-width: 300px;">
            <div class="faq-item">
                <div class="faq-question" onclick="this.parentElement.classList.toggle('active')">
                    <i class="fas fa-question-circle"></i> What is your MOQ?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">Minimum order quantity varies by product. For most items, it is 1 MT (Metric Ton), but we accommodate smaller pilot orders for new buyers.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="this.parentElement.classList.toggle('active')">
                    <i class="fas fa-question-circle"></i> How quickly will I receive a quotation?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">Once we receive your inquiry with detailed specifications, our team will process it and send a comprehensive quotation within 24 hours.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="this.parentElement.classList.toggle('active')">
                    <i class="fas fa-question-circle"></i> Do you provide private labeling?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">Yes, customized branding and packaging are available. We provide complete OEM support for bulk orders.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="this.parentElement.classList.toggle('active')">
                    <i class="fas fa-question-circle"></i> What payment methods do you accept?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">We accept International Bank Transfers (T/T), Letter of Credit (L/C) at sight, and other mutually agreed secure payment methods.</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-banner">
    <div>
        <h2 class="cta-banner-text">Ready To Import Premium Quality Food & Herbal Products?</h2>
        <p class="cta-banner-sub">Partner with us for reliable sourcing, competitive pricing, and worldwide delivery.</p>
    </div>
    <div class="cta-buttons">
        <a href="request-quote.php" class="btn-gold">REQUEST QUOTE <i class="fas fa-arrow-right"></i></a>
        <a href="contact.php" class="btn-outline-white">CONTACT SALES TEAM <i class="fas fa-arrow-right"></i></a>
    </div>
</section>

<?php include 'footer.php'; ?>
