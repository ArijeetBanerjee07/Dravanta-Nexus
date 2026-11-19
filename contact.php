<?php include 'header.php'; ?>

<!-- Header Section -->
<section class="page-header" style="background-image: none;">
    <style>
        .page-header::after {
            background-image: url('images/contact-banner.png');
        }
    </style>
    <div class="page-header-container">
        <div class="page-header-content">
            <h1 class="page-header-title">Contact Us</h1>
            <div class="page-header-subtitle">Let's Grow Global Business Together</div>
            <p class="page-header-text">We are here to assist you with product inquiries, export requirements, quotations, and international trade partnerships.</p>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin: 30px 0;">
                <div style="font-size: 14px; font-weight: 600; color: #18632e;"><i class="fas fa-check-circle" style="color: #799e69; margin-right: 8px;"></i> Rice Export</div>
                <div style="font-size: 14px; font-weight: 600; color: #18632e;"><i class="fas fa-check-circle" style="color: #799e69; margin-right: 8px;"></i> Herbal Products</div>
                <div style="font-size: 14px; font-weight: 600; color: #18632e;"><i class="fas fa-check-circle" style="color: #799e69; margin-right: 8px;"></i> Moringa Products</div>
                <div style="font-size: 14px; font-weight: 600; color: #18632e;"><i class="fas fa-check-circle" style="color: #799e69; margin-right: 8px;"></i> Custom Bulk Orders</div>
                <div style="font-size: 14px; font-weight: 600; color: #18632e;"><i class="fas fa-check-circle" style="color: #799e69; margin-right: 8px;"></i> Neem Products</div>
            </div>

            <div style="display: flex; gap: 15px; margin-top: 20px;">
                <a href="request-quote.php" class="btn-submit" style="text-decoration: none;">REQUEST QUOTE <i class="fas fa-arrow-right"></i></a>
                <a href="#" class="btn-submit" style="background-color: #fff; color: #18632e; border: 1px solid #ddd; text-decoration: none;"><i class="fab fa-whatsapp"></i> WHATSAPP US</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info Cards -->
<section style="padding: -20px 20px 60px 20px; margin-top: -40px; position: relative; z-index: 10;">
    <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
        <!-- Card 1 -->
        <div style="background: #fff; padding: 25px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); display: flex; gap: 15px;">
            <div style="width: 45px; height: 45px; border: 1px solid #ddd; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #18632e; flex-shrink: 0;"><i class="fas fa-map-marker-alt"></i></div>
            <div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 5px; font-weight: 700;">Office Address</h4>
                <p style="font-size: 12.5px; color: #777; line-height: 1.6;">Muraidih, Dhanbad,<br>Jharkhand,<br>India</p>
            </div>
        </div>
        <!-- Card 2 -->
        <div style="background: #fff; padding: 25px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); display: flex; gap: 15px;">
            <div style="width: 45px; height: 45px; border: 1px solid #ddd; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #18632e; flex-shrink: 0;"><i class="fas fa-phone-alt"></i></div>
            <div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 5px; font-weight: 700;">Call Us</h4>
                <p style="font-size: 12.5px; color: #777; line-height: 1.6;">+91 7979099017</p>
            </div>
        </div>
        <!-- Card 3 -->
        <div style="background: #fff; padding: 25px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); display: flex; gap: 15px;">
            <div style="width: 45px; height: 45px; border: 1px solid #ddd; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #18632e; flex-shrink: 0;"><i class="fas fa-envelope"></i></div>
            <div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 5px; font-weight: 700;">Email Us</h4>
                <p style="font-size: 12.5px; color: #777; line-height: 1.6;">info@dravantanexus.com<br>inquiries@dravantanexus.com</p>
            </div>
        </div>
        <!-- Card 4 -->
        <div style="background: #fff; padding: 25px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); display: flex; gap: 15px;">
            <div style="width: 45px; height: 45px; border: 1px solid #ddd; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #18632e; flex-shrink: 0;"><i class="fas fa-globe-americas"></i></div>
            <div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 5px; font-weight: 700;">Export Markets</h4>
                <p style="font-size: 12.5px; color: #777; line-height: 1.6;">USA - UAE - Europe -<br>Australia - Africa</p>
            </div>
        </div>
    </div>
</section>

<!-- Form & Image Split -->
<section style="padding: 40px 20px; background: #fff;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 40px;">
        <div style="flex: 1; min-width: 300px;">
            <h3 style="font-family: 'Playfair Display', serif; font-size: 28px; color: var(--primary-dark); margin-bottom: 25px; padding-bottom: 15px; border-bottom: 2px solid #f0f0f0;">Get A Free Quote</h3>
            
            <form action="#" method="POST" class="custom-form" style="box-shadow: none; padding: 0;">
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
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Contact Number <span>*</span></label>
                        <input type="text" class="form-control" placeholder="Enter contact number" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Email <span>*</span></label>
                        <input type="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label>Product Interested In <span>*</span></label>
                        <select class="form-control" required>
                            <option value="">Select product</option>
                            <option value="Rice">Rice</option>
                            <option value="Herbs">Herbs</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Quantity Required <span>*</span></label>
                        <input type="text" class="form-control" placeholder="Enter quantity" required>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 25px;">
                    <label>Product Specification / Your Message <span>*</span></label>
                    <textarea class="form-control" placeholder="Write your message here..." required></textarea>
                </div>
                <button type="submit" class="btn-submit">SEND INQUIRY <i class="fas fa-arrow-right"></i></button>
            </form>
        </div>

        <div style="flex: 1; min-width: 300px; position: relative; border-radius: 12px; overflow: hidden; min-height: 500px;">
            <img src="images/contact-second.png" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top:0; left:0;" alt="Shipping">
            <div style="position: absolute; bottom: 30px; right: 30px; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.15); text-align: center; max-width: 200px;">
                <div style="color: #c99c4d; font-size: 30px; margin-bottom: 10px;"><i class="fas fa-award"></i></div>
                <h4 style="color: var(--primary-dark); font-weight: 800; font-size: 15px; margin: 0;">Trusted Global Export Partner</h4>
                <div style="width: 40px; height: 2px; background: #c99c4d; margin: 10px auto 0;"></div>
            </div>
        </div>
    </div>
</section>

<!-- Why Contact Us Grid -->
<section style="padding: 60px 20px; background-color: #fbfdf9; border-top: 1px solid #f0f0f0;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 40px;">
            <h3 style="color: var(--primary-dark); font-size: 14px; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; display: inline-flex; align-items: center; gap: 15px;"><img src="images/leaf.png" style="height: 15px; transform: scaleX(-1);"> WHY CONTACT US? <img src="images/leaf.png" style="height: 15px;"></h3>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 20px;">
            <div style="background: #fff; padding: 30px 20px; border-radius: 10px; text-align: center; box-shadow: 0 5px 20px rgba(0,0,0,0.03); border: 1px solid #f9f9f9;">
                <div style="width: 60px; height: 60px; margin: 0 auto 15px; background: #fbfdf9; border: 1px solid #eaeaea; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #18632e; font-size: 24px;"><i class="fas fa-bolt"></i></div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 8px; font-weight: 700;">Fast Response</h4>
                <p style="font-size: 12px; color: #777; margin: 0;">Get replies within 24 hours</p>
            </div>
            <div style="background: #fff; padding: 30px 20px; border-radius: 10px; text-align: center; box-shadow: 0 5px 20px rgba(0,0,0,0.03); border: 1px solid #f9f9f9;">
                <div style="width: 60px; height: 60px; margin: 0 auto 15px; background: #fbfdf9; border: 1px solid #eaeaea; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #18632e; font-size: 24px;"><i class="fas fa-globe"></i></div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 8px; font-weight: 700;">Global Shipping</h4>
                <p style="font-size: 12px; color: #777; margin: 0;">Worldwide export support</p>
            </div>
            <div style="background: #fff; padding: 30px 20px; border-radius: 10px; text-align: center; box-shadow: 0 5px 20px rgba(0,0,0,0.03); border: 1px solid #f9f9f9;">
                <div style="width: 60px; height: 60px; margin: 0 auto 15px; background: #fbfdf9; border: 1px solid #eaeaea; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #18632e; font-size: 24px;"><i class="fas fa-boxes"></i></div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 8px; font-weight: 700;">Bulk Orders</h4>
                <p style="font-size: 12px; color: #777; margin: 0;">Large quantity fulfillment</p>
            </div>
            <div style="background: #fff; padding: 30px 20px; border-radius: 10px; text-align: center; box-shadow: 0 5px 20px rgba(0,0,0,0.03); border: 1px solid #f9f9f9;">
                <div style="width: 60px; height: 60px; margin: 0 auto 15px; background: #fbfdf9; border: 1px solid #eaeaea; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #18632e; font-size: 24px;"><i class="fas fa-certificate"></i></div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 8px; font-weight: 700;">Quality Assurance</h4>
                <p style="font-size: 12px; color: #777; margin: 0;">International standards maintained</p>
            </div>
            <div style="background: #fff; padding: 30px 20px; border-radius: 10px; text-align: center; box-shadow: 0 5px 20px rgba(0,0,0,0.03); border: 1px solid #f9f9f9;">
                <div style="width: 60px; height: 60px; margin: 0 auto 15px; background: #fbfdf9; border: 1px solid #eaeaea; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #18632e; font-size: 24px;"><i class="fas fa-box-open"></i></div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 8px; font-weight: 700;">Custom Packaging</h4>
                <p style="font-size: 12px; color: #777; margin: 0;">Private label & OEM support</p>
            </div>
            <div style="background: #fff; padding: 30px 20px; border-radius: 10px; text-align: center; box-shadow: 0 5px 20px rgba(0,0,0,0.03); border: 1px solid #f9f9f9;">
                <div style="width: 60px; height: 60px; margin: 0 auto 15px; background: #fbfdf9; border: 1px solid #eaeaea; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #18632e; font-size: 24px;"><i class="fas fa-file-invoice"></i></div>
                <h4 style="font-size: 14px; color: #333; margin-bottom: 8px; font-weight: 700;">Export Documentation</h4>
                <p style="font-size: 12px; color: #777; margin: 0;">Complete export assistance</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Banner -->
<section style="background-color: #f1f6ed; padding: 30px 20px; border-top: 1px solid #e1eadb; border-bottom: 1px solid #e1eadb;">
    <div style="max-width: 1000px; margin: 0 auto; text-align: center;">
        <h3 style="color: var(--primary-dark); font-size: 16px; font-weight: 700; margin-bottom: 25px;">Serving Customers Across The Globe</h3>
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 20px;">
            <div style="text-align: center; flex: 1;">
                <div style="font-size: 32px; font-weight: 800; color: #18632e; margin-bottom: 5px;">25+</div>
                <div style="font-size: 13px; color: #555; font-weight: 600;">Countries Served</div>
            </div>
            <div style="width: 1px; background-color: #d1dacb;"></div>
            <div style="text-align: center; flex: 1;">
                <div style="font-size: 32px; font-weight: 800; color: #18632e; margin-bottom: 5px;">500+</div>
                <div style="font-size: 13px; color: #555; font-weight: 600;">Shipments Delivered</div>
            </div>
            <div style="width: 1px; background-color: #d1dacb;"></div>
            <div style="text-align: center; flex: 1;">
                <div style="font-size: 32px; font-weight: 800; color: #18632e; margin-bottom: 5px;">100+</div>
                <div style="font-size: 13px; color: #555; font-weight: 600;">Business Partners</div>
            </div>
            <div style="width: 1px; background-color: #d1dacb;"></div>
            <div style="text-align: center; flex: 1;">
                <div style="font-size: 32px; font-weight: 800; color: #18632e; margin-bottom: 5px;">99%</div>
                <div style="font-size: 13px; color: #555; font-weight: 600;">Customer Satisfaction</div>
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
                    <i class="fas fa-question-circle"></i> Which countries do you export to?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">We export worldwide based on import regulations. Our primary markets include the USA, UAE, UK, Europe, Australia, and Africa.</div>
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
                    <i class="fas fa-question-circle"></i> What certifications do you have?
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">Our facilities and products are FSSAI, APEDA, GMP, HACCP, and Organic certified to meet international standards.</div>
            </div>
        </div>
    </div>
</section>

<!-- Visit Our Office Map -->
<section style="max-width: 1200px; margin: 60px auto; padding: 0 20px; display: flex; flex-wrap: wrap; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
    <div style="flex: 1; min-width: 300px; background-color: var(--primary-dark); padding: 50px 40px; color: #fff;">
        <h3 style="font-size: 24px; font-weight: 700; margin-bottom: 10px; color: #fff;">Visit Our Office</h3>
        <div style="width: 50px; height: 2px; background: #c99c4d; margin-bottom: 30px;"></div>
        
        <div style="display: flex; gap: 15px; margin-bottom: 25px;">
            <div style="color: #c99c4d; font-size: 20px;"><i class="fas fa-map-marker-alt"></i></div>
            <div style="font-size: 14px; line-height: 1.6; color: #ddd;">Muraidih, Dhanbad,<br>Jharkhand, India</div>
        </div>
        <div style="display: flex; gap: 15px; margin-bottom: 25px;">
            <div style="color: #c99c4d; font-size: 20px;"><i class="fas fa-phone-alt"></i></div>
            <div style="font-size: 14px; line-height: 1.6; color: #ddd;">+91 7979099017</div>
        </div>
        <div style="display: flex; gap: 15px; margin-bottom: 25px;">
            <div style="color: #c99c4d; font-size: 20px;"><i class="fas fa-envelope"></i></div>
            <div style="font-size: 14px; line-height: 1.6; color: #ddd;">info@dravantanexus.com</div>
        </div>
        <div style="display: flex; gap: 15px;">
            <div style="color: #c99c4d; font-size: 20px;"><i class="far fa-clock"></i></div>
            <div style="font-size: 14px; line-height: 1.6; color: #ddd;">Mon - Sat : 9:00 AM - 6:00 PM</div>
        </div>
    </div>
    <div style="flex: 2; min-width: 300px; min-height: 400px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1m3!1d224345.83923192776!2d77.06889754725782!3d28.52758200617607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1683901234567!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-banner">
    <div>
        <h2 class="cta-banner-text">Ready To Import Premium Quality Food & Herbal Products?</h2>
        <p class="cta-banner-sub">Partner with us for reliable sourcing, competitive pricing, and worldwide delivery.</p>
    </div>
    <div class="cta-buttons">
        <a href="request-quote.php" class="btn-gold">GET A QUOTE <i class="fas fa-arrow-right"></i></a>
        <a href="#" class="btn-outline-white">CONTACT SALES TEAM <i class="fas fa-arrow-right"></i></a>
    </div>
</section>

<?php include 'footer.php'; ?>
