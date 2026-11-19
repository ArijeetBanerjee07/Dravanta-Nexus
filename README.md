# Dravanta Nexus — Global Food & Herbal Exports

Official website and digital catalog for **Dravanta Nexus**, an export house headquartered in Jharkhand, India, delivering premium food, agricultural commodities, and herbal wellness products to global markets.

---

## 🌾 Overview

Dravanta Nexus connects international importers, distributors, and retailers with authentic, certified Indian agricultural and herbal products. The website is built with lightweight, server-side PHP and vanilla CSS, featuring high-performance pages, a dynamic product catalog, and direct B2B inquiry routing.

---

## 🚀 Key Features

- **Dynamic Product Catalog (`products.php` & `product-detail.php`)**:
  - Full catalog filtering across categories: Rice, Moringa, Herbal Powders, and Agricultural Commodities.
  - Interactive product detail pages driven by a centralized data engine (`products_data.php`).
  - Multi-angle thumbnail galleries with image switcher.
  - Technical export specifications, nutritional profiles, and export packaging options.
  - Dynamic "Related Products" recommendation carousel.
- **B2B Inquiry & Quote Request System**:
  - Direct RFQ (Request for Quote) forms on product detail and dedicated quote pages (`request-quote.php`, `contact.php`).
- **Comprehensive Corporate Pages**:
  - **About Us (`about.php`)**: Mission, vision, core values, and founder's note.
  - **Certifications (`certifications.php`)**: APEDA, FSSAI, ISO, and Spices Board compliance.
  - **Why Choose Us (`why-us.php`)**: Farm-to-port quality control, laboratory testing, and supply chain reliability.
  - **Legal & Policies**: Terms & Conditions (`terms.php`), Privacy Policy (`privacy-policy.php`), and Return Policy (`refund-policy.php`).
- **Responsive & Modern Design**:
  - Mobile-first layouts with smooth breakpoints for phones, tablets, and desktop displays.
  - Typography powered by *Playfair Display*, *Great Vibes*, and *Plus Jakarta Sans*.

---

## 🗂️ Project Structure

```text
Dravanta_Nexus_Website/
│
├── index.php                 # Home page
├── about.php                 # About Us page
├── products.php              # Product catalog (Shop page)
├── product-detail.php        # Dynamic product detail page (Shop Inside)
├── products_data.php         # Centralized product catalog database
├── certifications.php        # Global certifications & standards
├── why-us.php                # Value proposition & quality assurance
├── contact.php               # Contact page & general inquiry form
├── request-quote.php         # B2B Request For Quote (RFQ)
├── privacy-policy.php        # Privacy policy
├── refund-policy.php         # Refund & return policy
├── terms.php                 # Terms & conditions
├── header.php                # Global header & navigation bar
├── footer.php                # Global footer & quick links
├── style.css                 # Master responsive stylesheet
│
└── images/
    ├── Actual_Image/         # High-resolution source assets
    ├── products/             # Catalog product photography
    ├── shop/                 # Product detail & gallery thumbnails
    └── ...                   # Page banners, logos, and trust badges
```

---

## 💻 Local Development Setup

### Prerequisites
- [PHP](https://www.php.net/) (v7.4 or v8.x recommended)
- Any modern web browser

### Running Locally
1. Clone the repository:
   ```bash
   git clone https://github.com/xspacewebdevelopment-dot/Dravanta-Nexus.git
   cd Dravanta-Nexus
   ```

2. Start the built-in PHP development server:
   ```bash
   php -S localhost:8000
   ```

3. Open your browser and navigate to:
   ```
   http://localhost:8000
   ```

---

## 📦 Products Export Catalog

| Category | Key Offerings |
| :--- | :--- |
| **Rice** | 1121 Basmati Rice, Traditional Basmati, Sona Masoori, Brown Rice, Red Rice, Broken Rice |
| **Moringa** | Pure Leaf Powder, Standardized Capsules (Original, Ginger, Lemon, Mint) |
| **Herbal Powders** | Neem, Ashwagandha, Beetroot, Amla, Tulsi, Giloy, Hibiscus |
| **Dehydrated Food** | Toasted Onion Powder, Garlic Flakes & Powders |

---

## 📜 License & Ownership

Copyright © 2024 Dravanta Nexus. All rights reserved.
Unauthorized copying, modification, or distribution of code or brand assets is strictly prohibited.
