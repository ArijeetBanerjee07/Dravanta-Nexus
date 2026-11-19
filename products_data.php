<?php
// Centralized Product Database for Dravanta Nexus

$products_catalog = [
    // -------------------------------------------------------------
    // RICE PRODUCTS
    // -------------------------------------------------------------
    'basmati-rice' => [
        'id' => 'basmati-rice',
        'name' => 'Basmati Rice',
        'category' => 'Rice',
        'category_tag' => '🌾 PREMIUM GRAINS',
        'category_link' => 'products.php#rice-category',
        'tagline' => 'Extra long grain, aged & aromatic traditional Indian Basmati rice.',
        'rating' => '4.9',
        'reviews_count' => 184,
        'image' => 'images/products/basmati-rice.png',
        'gallery' => [
            'images/products/basmati-rice.png',
            'images/products/1121-basmati-rice.png',
            'images/products/brown-rice.png',
            'images/products/broken-rice.png',
        ],
        'pack_sizes' => ['1kg', '5kg', '10kg', '25kg', '50kg'],
        'default_pack' => '25kg',
        'forms' => ['Raw Milled', 'Aged 2 Years', 'Steam Milled'],
        'default_form' => 'Aged 2 Years',
        'origin' => 'India (Punjab / Haryana)',
        'description_p1' => 'Our Traditional Basmati Rice is cultivated in the mineral-rich waters of the Himalayan foothills. Naturally aged for over 24 months, the grains mature to achieve their signature sweet fragrance, delicate pearly appearance, and elongation up to twice their raw length when cooked.',
        'description_p2' => 'Processed in modern automated milling facilities with advanced Sortex optical sorting, ensuring 100% pure grains free from chalky spots, foreign matter, and broken bits. It is the premier choice for gourmet international distributors and five-star hospitality.',
        'bullet_points' => [
            'Extra-long slender grain with average cooked length of 18mm - 20mm',
            'Naturally aged for 24+ months for delicate aroma and non-sticky fluffiness',
            '100% Sortex double-polished and hygienically moisture controlled',
            'Ideal for authentic Dum Biryani, royal Pulao, and gourmet dining'
        ],
        'nutrition' => [
            'Energy' => '350 kcal',
            'Protein' => '8.2 g',
            'Carbohydrate' => '78.5 g',
            'Dietary Fiber' => '1.6 g',
            'Fat' => '0.5 g',
            'Calcium' => '24 mg',
            'Iron' => '1.4 mg',
            'Purity' => '95% Min',
            'Moisture' => '< 12.5%'
        ],
        'highlights' => [
            'Botanical / Variety' => 'Oryza Sativa (Traditional Basmati)',
            'Grain Length' => '7.4 mm - 8.4 mm (Raw)',
            'Processing' => 'Naturally Aged & Sortex Polished',
            'Color' => 'Creamy White',
            'Shelf Life' => '24 Months',
            'Storage' => 'Store in a cool, dry, well-ventilated warehouse.'
        ],
        'related' => ['1121-basmati-rice', 'non-basmati-rice', 'brown-rice', 'red-rice', 'broken-rice']
    ],

    '1121-basmati-rice' => [
        'id' => '1121-basmati-rice',
        'name' => '1121 Basmati Rice',
        'category' => 'Rice',
        'category_tag' => '🌾 PREMIUM GRAINS',
        'category_link' => 'products.php#rice-category',
        'tagline' => 'World-renowned extra long grain Golden Sella & White Basmati rice.',
        'rating' => '4.9',
        'reviews_count' => 210,
        'image' => 'images/products/1121-basmati-rice.png',
        'gallery' => [
            'images/products/1121-basmati-rice.png',
            'images/products/basmati-rice.png',
            'images/products/brown-rice.png',
            'images/products/broken-rice.png',
        ],
        'pack_sizes' => ['5kg', '10kg', '25kg', '50kg'],
        'default_pack' => '25kg',
        'forms' => ['Golden Sella', 'Creamy Sella', 'Steam Milled'],
        'default_form' => 'Golden Sella',
        'origin' => 'India',
        'description_p1' => 'Recognized worldwide for possessing the longest raw grain (8.35 mm+), 1121 Basmati Rice elongates to an astonishing 20mm - 24mm upon cooking without breaking. It holds parboiling nutrients intact, making it exceptionally resilient in commercial kitchen preparation.',
        'description_p2' => 'Favored across the Middle East, Europe, and North America, our 1121 Golden Sella undergoes careful hydrothermal processing that seals in vital minerals and produces firm, separate, aromatic grains.',
        'bullet_points' => [
            'World-record raw grain length (8.35mm+) elongating up to 24mm cooked',
            'Golden Sella hydrothermal parboiling retains natural micronutrients',
            'Resistant to overcooking and high-volume commercial heat holding',
            'Top export grade trusted by institutional caterers and distributors worldwide'
        ],
        'nutrition' => [
            'Energy' => '355 kcal',
            'Protein' => '8.6 g',
            'Carbohydrate' => '79.1 g',
            'Dietary Fiber' => '1.9 g',
            'Fat' => '0.6 g',
            'Calcium' => '29 mg',
            'Iron' => '1.8 mg',
            'Moisture' => '< 12.0%',
            'Purity' => '95% Min'
        ],
        'highlights' => [
            'Botanical / Variety' => 'Oryza Sativa (1121 Basmati)',
            'Grain Length' => '8.35 mm+ (Raw)',
            'Processing' => 'Parboiled / Steam / Sella',
            'Color' => 'Golden / Pale Cream',
            'Shelf Life' => '24 Months',
            'Storage' => 'Store in clean, dry conditions away from moisture.'
        ],
        'related' => ['basmati-rice', 'non-basmati-rice', 'brown-rice', 'red-rice', 'broken-rice']
    ],

    'non-basmati-rice' => [
        'id' => 'non-basmati-rice',
        'name' => 'Non Basmati Rice',
        'category' => 'Rice',
        'category_tag' => '🌾 GRAINS & CEREALS',
        'category_link' => 'products.php#rice-category',
        'tagline' => 'High-yield Sona Masoori, IR64, and Parboiled non-basmati rice.',
        'rating' => '4.7',
        'reviews_count' => 95,
        'image' => 'images/products/non-basmati-rice.png',
        'gallery' => [
            'images/products/non-basmati-rice.png',
            'images/products/basmati-rice.png',
            'images/products/broken-rice.png',
            'images/products/brown-rice.png',
        ],
        'pack_sizes' => ['5kg', '10kg', '25kg', '50kg'],
        'default_pack' => '50kg',
        'forms' => ['Sona Masoori', 'IR64 Raw', 'IR64 Parboiled'],
        'default_form' => 'Sona Masoori',
        'origin' => 'India (Andhra / Telangana / Chhattisgarh)',
        'description_p1' => 'Our Non-Basmati Rice portfolio includes popular cultivars like Sona Masoori (lightweight, aromatic, low starch) and IR64 (sturdy, economical, high nutritional value). These staple grains feed millions globally and serve as a dependable bulk commodity.',
        'description_p2' => 'Milled in high-capacity Sortex-equipped facilities, our non-basmati varieties offer exceptional value, low broken percentages, and uniform grain sizing tailored for supermarkets, food processors, and government relief programs.',
        'bullet_points' => [
            'Lightweight, easy to digest, and low glycemic index in Sona Masoori',
            'IR64 Parboiled offers robust grain strength and rich carbohydrate content',
            'Customizable milling grades: 5%, 10%, 15%, or 25% broken specifications',
            'Cost-effective staple supply for bulk container vessel shipments'
        ],
        'nutrition' => [
            'Energy' => '348 kcal',
            'Protein' => '7.8 g',
            'Carbohydrate' => '77.9 g',
            'Dietary Fiber' => '1.5 g',
            'Fat' => '0.5 g',
            'Calcium' => '22 mg',
            'Iron' => '1.2 mg',
            'Moisture' => '< 13.0%',
            'Purity' => '95% Min'
        ],
        'highlights' => [
            'Botanical / Variety' => 'Sona Masoori / IR64 / Swarna',
            'Grain Length' => '5.0 mm - 6.2 mm',
            'Processing' => 'Double Polished / Parboiled',
            'Color' => 'Bright White / Silky Cream',
            'Shelf Life' => '24 Months',
            'Storage' => 'Cool, dry, and insect-proof warehouse.'
        ],
        'related' => ['basmati-rice', '1121-basmati-rice', 'brown-rice', 'broken-rice', 'red-rice']
    ],

    'brown-rice' => [
        'id' => 'brown-rice',
        'name' => 'Brown Rice',
        'category' => 'Rice',
        'category_tag' => '🌾 HEALTH & WHOLE GRAINS',
        'category_link' => 'products.php#rice-category',
        'tagline' => 'Nutrient-rich, unpolished 100% whole grain brown rice.',
        'rating' => '4.8',
        'reviews_count' => 112,
        'image' => 'images/products/brown-rice.png',
        'gallery' => [
            'images/products/brown-rice.png',
            'images/products/basmati-rice.png',
            'images/products/red-rice.png',
            'images/products/broken-rice.png',
        ],
        'pack_sizes' => ['1kg', '5kg', '10kg', '25kg'],
        'default_pack' => '5kg',
        'forms' => ['Whole Grain', 'Quick Cook'],
        'default_form' => 'Whole Grain',
        'origin' => 'India',
        'description_p1' => 'Our Brown Rice retains the natural outer bran and germ layers, preserving valuable dietary fiber, B-complex vitamins, and magnesium. With its nutty flavor and hearty chew, it is the premier choice for fitness enthusiasts and health-conscious families.',
        'description_p2' => 'Gently de-husked without damaging the nutrient-dense aleurone layer, our Brown Rice has a lower glycemic index, assisting in balanced blood sugar levels and prolonged satiety.',
        'bullet_points' => [
            '100% whole grain with intact bran layer and germ',
            'High in insoluble dietary fiber and vital minerals (magnesium, phosphorus)',
            'Naturally rich nutty aroma and wholesome firm texture',
            'Certified non-GMO, chemical-free polishing, and vacuum-pack protected'
        ],
        'nutrition' => [
            'Energy' => '360 kcal',
            'Protein' => '7.9 g',
            'Carbohydrate' => '76.2 g',
            'Dietary Fiber' => '3.5 g',
            'Fat' => '2.8 g',
            'Calcium' => '33 mg',
            'Iron' => '2.1 mg',
            'Magnesium' => '143 mg',
            'Moisture' => '< 12.0%'
        ],
        'highlights' => [
            'Botanical / Variety' => 'Oryza Sativa (De-husked Whole Grain)',
            'Grain Length' => '7.0 mm - 7.5 mm',
            'Processing' => 'Husk Removed Only (Unpolished Bran)',
            'Color' => 'Warm Golden Brown',
            'Shelf Life' => '18 Months',
            'Storage' => 'Cool dry place, airtight vacuum packaging recommended.'
        ],
        'related' => ['basmati-rice', 'red-rice', 'non-basmati-rice', 'broken-rice', '1121-basmati-rice']
    ],

    'red-rice' => [
        'id' => 'red-rice',
        'name' => 'Red Rice',
        'category' => 'Rice',
        'category_tag' => '🌾 HERITAGE GRAINS',
        'category_link' => 'products.php#rice-category',
        'tagline' => 'Antioxidant-dense Himalayan red rice packed with anthocyanins.',
        'rating' => '4.8',
        'reviews_count' => 76,
        'image' => 'images/products/red-rice.png',
        'gallery' => [
            'images/products/red-rice.png',
            'images/products/brown-rice.png',
            'images/products/basmati-rice.png',
            'images/products/broken-rice.png',
        ],
        'pack_sizes' => ['1kg', '5kg', '10kg', '25kg'],
        'default_pack' => '5kg',
        'forms' => ['Whole Grain Red', 'Semi-Polished'],
        'default_form' => 'Whole Grain Red',
        'origin' => 'India (Himalayan Valley & Kerala)',
        'description_p1' => 'Our Red Rice gets its striking ruby color from anthocyanins—the same potent antioxidants found in deep berries. Treasured in traditional Ayurvedic nutrition for thousands of years, red rice aids cellular recovery, cardiovascular health, and immune vitality.',
        'description_p2' => 'Sustainably farmed using natural spring irrigation, this heirloom grain cooks into a firm, earthy delicacy that adds vibrant color and unmatched nutrient density to salads, bowls, and gourmet sides.',
        'bullet_points' => [
            'Abundant in anthocyanin antioxidants and polyphenols',
            'Significantly higher zinc, iron, and fiber than white rice varieties',
            'Pleasant earthy taste with a satisfying chewy bite',
            'Sustainably harvested from indigenous, pesticide-free heritage farms'
        ],
        'nutrition' => [
            'Energy' => '356 kcal',
            'Protein' => '7.5 g',
            'Carbohydrate' => '75.8 g',
            'Dietary Fiber' => '3.8 g',
            'Fat' => '2.4 g',
            'Iron' => '5.5 mg',
            'Zinc' => '3.3 mg',
            'Moisture' => '< 12.0%'
        ],
        'highlights' => [
            'Botanical / Variety' => 'Oryza Sativa (Heirloom Red Grain)',
            'Grain Length' => '6.8 mm - 7.2 mm',
            'Processing' => 'Unpolished Anthocyanin Bran Intact',
            'Color' => 'Deep Ruby Red',
            'Shelf Life' => '18 Months',
            'Storage' => 'Airtight container in cool, dry conditions.'
        ],
        'related' => ['brown-rice', 'basmati-rice', '1121-basmati-rice', 'broken-rice', 'non-basmati-rice']
    ],

    'broken-rice' => [
        'id' => 'broken-rice',
        'name' => 'Broken Rice',
        'category' => 'Rice',
        'category_tag' => '🌾 PROCESSING & INDUSTRIAL GRAINS',
        'category_link' => 'products.php#rice-category',
        'tagline' => '100% Sortex clean broken rice for brewing, flour milling & culinary use.',
        'rating' => '4.6',
        'reviews_count' => 64,
        'image' => 'images/products/broken-rice.png',
        'gallery' => [
            'images/products/broken-rice.png',
            'images/products/basmati-rice.png',
            'images/products/non-basmati-rice.png',
            'images/products/brown-rice.png',
        ],
        'pack_sizes' => ['25kg', '50kg', '1000kg (Jumbo Bags)'],
        'default_pack' => '50kg',
        'forms' => ['100% Broken', 'Semi-Broken (2/3 Grain)'],
        'default_form' => '100% Broken',
        'origin' => 'India',
        'description_p1' => 'Our 100% Sortex Broken Rice is separated during the precision milling of premium basmati and non-basmati grades. Because it comes from the same wholesome rice grain, it retains 100% of the original nutritional properties, starch quality, and taste.',
        'description_p2' => 'Widely imported across Southeast Asia, Africa, and the Americas for traditional dishes (like Com Tam, rice porridge, and congee), as well as beer brewing, rice flour, noodles, baby food, and pet food manufacturing.',
        'bullet_points' => [
            '100% Sortex cleaned, free from stones, dust, and paddy husks',
            'Uniform grain size fractionation tailored to buyer specification',
            'High starch extraction efficiency for industrial brewing and distilleries',
            'Cost-effective solution available in bulk 50kg PP bags and containerized jumbo bags'
        ],
        'nutrition' => [
            'Energy' => '345 kcal',
            'Protein' => '7.4 g',
            'Carbohydrate' => '77.2 g',
            'Dietary Fiber' => '1.2 g',
            'Fat' => '0.5 g',
            'Moisture' => '< 13.5%',
            'Foreign Matter' => '< 0.1%'
        ],
        'highlights' => [
            'Botanical / Variety' => 'Sortex Milled Broken Grain',
            'Grain Size' => '1/3 to 2/3 Broken Fraction',
            'Processing' => 'Cleaned, De-stoned, Optical Sorted',
            'Color' => 'Milky White',
            'Shelf Life' => '24 Months',
            'Storage' => 'Bulk moisture-resistant bags in dry warehouse.'
        ],
        'related' => ['non-basmati-rice', 'basmati-rice', '1121-basmati-rice', 'brown-rice', 'red-rice']
    ],

    // -------------------------------------------------------------
    // MORINGA PRODUCTS
    // -------------------------------------------------------------
    'moringa-leaf-powder' => [
        'id' => 'moringa-leaf-powder',
        'name' => 'Moringa Leaf Powder',
        'category' => 'Moringa Products',
        'category_tag' => '🌿 HERBAL GOODS & SUPERFOODS',
        'category_link' => 'products.php#moringa-category',
        'tagline' => '100% natural shade-dried moringa leaf powder rich in nutrients & antioxidants.',
        'rating' => '4.8',
        'reviews_count' => 120,
        'image' => 'images/products/moringa-leaf-powder.png',
        'gallery' => [
            'images/products/moringa-leaf-powder.png',
            'images/shop/thumb-2.png',
            'images/shop/thumb-3.png',
            'images/shop/thumb-4.png',
            'images/shop/thumb-5.png',
        ],
        'pack_sizes' => ['100g', '250g', '500g', '1kg', '5kg', '25kg'],
        'default_pack' => '500g',
        'forms' => ['Powder', 'Capsule'],
        'default_form' => 'Powder',
        'origin' => 'India (Tamil Nadu / Karnataka)',
        'description_p1' => 'Moringa Leaf Powder is made from carefully selected, shade-dried moringa leaves that are finely ground to preserve their natural nutrients, vitamins, and minerals. Known globally as the "Miracle Tree", it is one of the most nutrient-dense botanicals on Earth.',
        'description_p2' => 'Our processing utilizes low-temperature dehydration below 40°C, ensuring vital enzymes, delicate chlorophyll, and water-soluble vitamins are completely preserved without thermal degradation. 100% pure with zero fillers or preservatives.',
        'bullet_points' => [
            'Rich in essential nutrients, iron, calcium, and 46 natural antioxidants',
            'Supports cellular immunity, sustained daily energy & metabolic wellness',
            'Natural detoxifier with powerful anti-inflammatory plant compounds',
            'Ideal for wellness smoothies, fresh juices, soups, and dietary supplement blending'
        ],
        'nutrition' => [
            'Energy' => '358 kcal',
            'Protein' => '27.1 g',
            'Carbohydrate' => '38.2 g',
            'Dietary Fiber' => '19.2 g',
            'Fat' => '5.3 g',
            'Calcium' => '2003 mg',
            'Iron' => '28.2 mg',
            'Vitamin A' => '6780 IU',
            'Vitamin C' => '220 mg'
        ],
        'highlights' => [
            'Botanical Name' => 'Moringa Oleifera',
            'Part Used' => 'Leaves',
            'Processing' => 'Shade Dried & Fine Micro-Milled',
            'Color' => 'Vibrant Olive Green',
            'Shelf Life' => '24 Months',
            'Storage' => 'Store in a cool, dry place away from direct sunlight.'
        ],
        'related' => ['moringa-capsule-original', 'neem-powder', 'ashwagandha-powder', 'onion-powder', 'moringa-capsule-mint']
    ],

    'moringa-powder' => [
        'id' => 'moringa-powder',
        'name' => 'Moringa Powder',
        'category' => 'Moringa Products',
        'category_tag' => '🌿 HERBAL GOODS & SUPERFOODS',
        'category_link' => 'products.php#moringa-category',
        'tagline' => '100% pure, natural & chemical-free export grade moringa leaf powder.',
        'rating' => '4.8',
        'reviews_count' => 115,
        'image' => 'images/products/moringa-powder.png',
        'gallery' => [
            'images/products/moringa-powder.png',
            'images/shop/thumb-2.png',
            'images/shop/thumb-3.png',
            'images/shop/thumb-4.png',
        ],
        'pack_sizes' => ['100g', '250g', '500g', '1kg', '5kg', '25kg'],
        'default_pack' => '1kg',
        'forms' => ['Fine Powder (80 Mesh)', 'Ultra Fine (100 Mesh)'],
        'default_form' => 'Fine Powder (80 Mesh)',
        'origin' => 'India',
        'description_p1' => 'Our bulk-grade Moringa Powder offers commercial food, nutraceutical, and cosmetics manufacturers an unadulterated botanical ingredient verified by third-party laboratory tests for purity, heavy metals, and micro-biology.',
        'description_p2' => 'Sourced exclusively from organically cultivated Moringa trees, the leaves are gently separated, triple-washed in RO water, and solar-dehydrated under strict GMP protocols.',
        'bullet_points' => [
            'High bioavailability of plant-based protein (27%+) and essential amino acids',
            'Microbiologically tested and compliant with US-FDA and EU food standards',
            'Smooth soluble consistency blending effortlessly into powdered mixes',
            'Available in custom retail packaging and 25kg multi-wall export bags'
        ],
        'nutrition' => [
            'Energy' => '358 kcal',
            'Protein' => '27.1 g',
            'Carbohydrate' => '38.2 g',
            'Dietary Fiber' => '19.2 g',
            'Fat' => '5.3 g',
            'Calcium' => '2003 mg',
            'Iron' => '28.2 mg',
            'Potassium' => '1324 mg',
            'Magnesium' => '368 mg'
        ],
        'highlights' => [
            'Botanical Name' => 'Moringa Oleifera',
            'Part Used' => 'Leaves',
            'Mesh Size' => '80 - 100 Mesh',
            'Color' => 'Natural Deep Green',
            'Shelf Life' => '24 Months',
            'Storage' => 'Airtight packaging in cool, dark environment.'
        ],
        'related' => ['moringa-leaf-powder', 'moringa-capsule-original', 'neem-powder', 'ashwagandha-powder', 'tulsi-powder']
    ],

    'moringa-capsule-original' => [
        'id' => 'moringa-capsule-original',
        'name' => 'Moringa Capsule (Original)',
        'category' => 'Moringa Products',
        'category_tag' => '💊 NUTRACEUTICAL CAPSULES',
        'category_link' => 'products.php#moringa-category',
        'tagline' => 'Convenient daily immunity booster packed in pure vegetable capsules.',
        'rating' => '4.9',
        'reviews_count' => 140,
        'image' => 'images/products/moringa-capsule-original.png',
        'gallery' => [
            'images/products/moringa-capsule-original.png',
            'images/products/moringa-capsule-mint.png',
            'images/products/moringa-capsule-lemon.png',
            'images/products/moringa-capsule-ginger.png',
        ],
        'pack_sizes' => ['60 Capsules', '120 Capsules', '500 Capsules (Bulk)', '1000 Capsules'],
        'default_pack' => '120 Capsules',
        'forms' => ['500mg Veg Capsule', '750mg Veg Capsule'],
        'default_form' => '500mg Veg Capsule',
        'origin' => 'India',
        'description_p1' => 'Our Original Moringa Capsules provide all the concentrated benefits of raw organic moringa leaf powder in easy-to-swallow 100% vegetarian HPMC capsules. Perfectly measured at 500mg per capsule for optimum daily absorption.',
        'description_p2' => 'Free from gelatin, artificial binders, flow agents, or chemical preservatives. Each capsule delivers essential vitamins, bioavailable iron, and plant polyphenols to strengthen natural defense mechanisms.',
        'bullet_points' => [
            '500mg pure organic moringa leaf powder per vegetable capsule',
            '100% Vegan (Plant-based HPMC shell), Halal & Kosher compliant',
            'No fillers, talc, magnesium stearate, or artificial preservatives',
            'Convenient on-the-go daily nutrition for busy lifestyles'
        ],
        'nutrition' => [
            'Moringa Leaf Extract' => '500 mg per cap',
            'Total Polyphenols' => 'High Potency',
            'Bioavailable Iron' => '1.4 mg / serving',
            'Calcium' => '45 mg / serving',
            'Vitamin A' => '320 IU / serving',
            'Heavy Metals' => 'Passed (WHO Standard)'
        ],
        'highlights' => [
            'Active Ingredient' => '100% Pure Moringa Oleifera Leaf Powder',
            'Capsule Shell' => 'Vegetarian Cellulose (HPMC)',
            'Dosage' => '1 - 2 capsules twice daily with meals',
            'Color' => 'Translucent shell with olive green powder',
            'Shelf Life' => '24 Months',
            'Storage' => 'Keep bottle tightly closed in a cool, dry place.'
        ],
        'related' => ['moringa-capsule-mint', 'moringa-capsule-lemon', 'moringa-capsule-ginger', 'moringa-leaf-powder', 'neem-powder']
    ],

    'moringa-capsule-mint' => [
        'id' => 'moringa-capsule-mint',
        'name' => 'Moringa Capsule (Mint Flavour)',
        'category' => 'Moringa Products',
        'category_tag' => '💊 NUTRACEUTICAL CAPSULES',
        'category_link' => 'products.php#moringa-category',
        'tagline' => 'Refreshing botanical mint flavor with superior moringa health benefits.',
        'rating' => '4.7',
        'reviews_count' => 68,
        'image' => 'images/products/moringa-capsule-mint.png',
        'gallery' => [
            'images/products/moringa-capsule-mint.png',
            'images/products/moringa-capsule-original.png',
            'images/products/moringa-capsule-lemon.png',
            'images/products/moringa-capsule-ginger.png',
        ],
        'pack_sizes' => ['60 Capsules', '120 Capsules', 'Bulk Jars'],
        'default_pack' => '60 Capsules',
        'forms' => ['500mg Flavoured Veg Capsule'],
        'default_form' => '500mg Flavoured Veg Capsule',
        'origin' => 'India',
        'description_p1' => 'Infused with steam-distilled natural peppermint extract (Mentha Piperita), our Mint Flavoured Moringa Capsules provide a crisp, refreshing experience without any grassy aftertaste. Designed specifically for consumers sensitive to green herbal tastes.',
        'description_p2' => 'Peppermint aids digestive comfort and eases bloating, pairing synergistically with the alkalizing and detoxifying qualities of moringa.',
        'bullet_points' => [
            'Natural spearmint / peppermint infusion eliminates herbal aftertaste',
            'Promotes digestive comfort while delivering potent moringa nutrients',
            'HPMC vegetarian capsule shell certified vegan and allergen-free',
            'Ideal for regular morning or post-meal wellness routines'
        ],
        'nutrition' => [
            'Moringa Leaf Powder' => '450 mg',
            'Peppermint Extract' => '50 mg',
            'Energy' => '2 kcal / cap',
            'Dietary Fiber' => '0.3 g',
            'Antioxidants' => 'High'
        ],
        'highlights' => [
            'Key Actives' => 'Moringa Oleifera + Mentha Piperita Extract',
            'Shell Type' => 'Vegetarian HPMC',
            'Taste / Aroma' => 'Cool Refreshing Mint',
            'Shelf Life' => '24 Months',
            'Storage' => 'Cool dry location away from heat.'
        ],
        'related' => ['moringa-capsule-original', 'moringa-capsule-lemon', 'moringa-capsule-ginger', 'moringa-leaf-powder', 'tulsi-powder']
    ],

    'moringa-capsule-lemon' => [
        'id' => 'moringa-capsule-lemon',
        'name' => 'Moringa Capsule (Lemon Flavour)',
        'category' => 'Moringa Products',
        'category_tag' => '💊 NUTRACEUTICAL CAPSULES',
        'category_link' => 'products.php#moringa-category',
        'tagline' => 'Zesty lemon and Vitamin C infusion for amplified antioxidant defense.',
        'rating' => '4.8',
        'reviews_count' => 74,
        'image' => 'images/products/moringa-capsule-lemon.png',
        'gallery' => [
            'images/products/moringa-capsule-lemon.png',
            'images/products/moringa-capsule-original.png',
            'images/products/moringa-capsule-mint.png',
            'images/products/moringa-capsule-ginger.png',
        ],
        'pack_sizes' => ['60 Capsules', '120 Capsules', 'Bulk Jars'],
        'default_pack' => '60 Capsules',
        'forms' => ['500mg Flavoured Veg Capsule'],
        'default_form' => '500mg Flavoured Veg Capsule',
        'origin' => 'India',
        'description_p1' => 'Our Lemon Flavoured Moringa Capsules blend pure moringa leaf extract with natural citrus bioflavonoids and lemon peel extract. The citrus notes provide a lively, uplifting essence while boosting Vitamin C synergy for iron absorption.',
        'description_p2' => 'Vitamin C significantly increases the bio-absorption of plant-derived non-heme iron present in moringa, making this variant particularly beneficial for energy and stamina support.',
        'bullet_points' => [
            'Enriched with citrus bioflavonoids to maximize iron bioavailability',
            'Zesty citrus flavor profile with zero synthetic dyes or flavorings',
            'Strengthens immune resistance, collagen formation, and cellular repair',
            '100% vegetarian capsule with clean label botanical ingredients'
        ],
        'nutrition' => [
            'Moringa Powder' => '420 mg',
            'Citrus Bioflavonoids' => '80 mg',
            'Vitamin C' => '35 mg',
            'Iron' => '2.1 mg'
        ],
        'highlights' => [
            'Key Actives' => 'Moringa Oleifera + Citrus Limon Peel Extract',
            'Shell Type' => 'Vegetarian HPMC',
            'Taste / Aroma' => 'Zesty Lemon Citrus',
            'Shelf Life' => '24 Months',
            'Storage' => 'Protect from moisture and sunlight.'
        ],
        'related' => ['moringa-capsule-original', 'moringa-capsule-mint', 'moringa-capsule-ginger', 'amla-powder', 'moringa-leaf-powder']
    ],

    'moringa-capsule-ginger' => [
        'id' => 'moringa-capsule-ginger',
        'name' => 'Moringa Capsule (Ginger Flavour)',
        'category' => 'Moringa Products',
        'category_tag' => '💊 NUTRACEUTICAL CAPSULES',
        'category_link' => 'products.php#moringa-category',
        'tagline' => 'Energizing ginger root and moringa blend for joint and digestive health.',
        'rating' => '4.8',
        'reviews_count' => 82,
        'image' => 'images/products/moringa-capsule-ginger.png',
        'gallery' => [
            'images/products/moringa-capsule-ginger.png',
            'images/products/moringa-capsule-original.png',
            'images/products/moringa-capsule-mint.png',
            'images/products/moringa-capsule-lemon.png',
        ],
        'pack_sizes' => ['60 Capsules', '120 Capsules', 'Bulk Jars'],
        'default_pack' => '60 Capsules',
        'forms' => ['500mg Flavoured Veg Capsule'],
        'default_form' => '500mg Flavoured Veg Capsule',
        'origin' => 'India',
        'description_p1' => 'Pairing organic moringa with premium sun-dried Indian ginger (Zingiber Officinale), this formulation provides a warm, invigorating daily tonic. Gingerols from ginger work alongside moringa isothiocyanates to relieve joint stiffness and support digestive vitality.',
        'description_p2' => 'Highly popular among active adults and athletes seeking natural relief from exercise-induced soreness and healthy circulatory stimulation.',
        'bullet_points' => [
            'Synergistic combination of anti-inflammatory moringa and warming ginger',
            'Standardized gingerol content for enhanced joint mobility and gut health',
            'Stimulates healthy circulation and immune vitality during cold weather',
            'Non-GMO, clean extraction, encapsulated in vegetarian capsules'
        ],
        'nutrition' => [
            'Moringa Leaf Powder' => '400 mg',
            'Ginger Root Extract' => '100 mg (5% Gingerols)',
            'Total Active Botanicals' => '500 mg',
            'Potassium' => '32 mg'
        ],
        'highlights' => [
            'Key Actives' => 'Moringa Oleifera + Zingiber Officinale',
            'Shell Type' => 'Vegetarian HPMC',
            'Taste / Aroma' => 'Warm Ginger Spice',
            'Shelf Life' => '24 Months',
            'Storage' => 'Cool, dry location.'
        ],
        'related' => ['moringa-capsule-original', 'ashwagandha-powder', 'moringa-capsule-mint', 'giloy-powder', 'moringa-leaf-powder']
    ],

    // -------------------------------------------------------------
    // HERBAL POWDERS
    // -------------------------------------------------------------
    'neem-powder' => [
        'id' => 'neem-powder',
        'name' => 'Neem Powder',
        'category' => 'Herbal Powders',
        'category_tag' => '🌿 AYURVEDIC HERBS',
        'category_link' => 'products.php#herbal-category',
        'tagline' => '100% pure organic neem leaf powder for natural detox & skin health.',
        'rating' => '4.8',
        'reviews_count' => 108,
        'image' => 'images/products/neem-powder.png',
        'gallery' => [
            'images/products/neem-powder.png',
            'images/products/tulsi-powder.png',
            'images/products/ashwagandha-powder.png',
            'images/products/amla-powder.png',
        ],
        'pack_sizes' => ['100g', '250g', '500g', '1kg', '5kg', '25kg'],
        'default_pack' => '500g',
        'forms' => ['Micro-fine Powder (80-100 Mesh)'],
        'default_form' => 'Micro-fine Powder (80-100 Mesh)',
        'origin' => 'India (Rajasthan / Gujarat)',
        'description_p1' => 'Our Neem Leaf Powder is prepared from wild-crafted Azadirachta Indica leaves collected from pesticide-free rural trees. Celebrated in Ayurveda as "Sarva Roga Nivarini" (the curer of all ailments), neem is renowned for its profound blood-purifying, anti-microbial, and clarifying properties.',
        'description_p2' => 'Shade-dried to safeguard its bitter glycosides (azadirachtin and nimbin), our neem powder is equally suited for oral dietary supplements and topical cosmetic formulations such as face masks, scalp treatments, and clarifying herbal soaps.',
        'bullet_points' => [
            'Traditional blood purifier supporting clear, blemish-free skin and scalp health',
            'Powerful antimicrobial and antibacterial botanical defense',
            '100% pure leaf with zero chemical additives, colors, or binders',
            'Versatile for both internal health supplementation and organic cosmetic skincare'
        ],
        'nutrition' => [
            'Energy' => '280 kcal',
            'Protein' => '14.3 g',
            'Carbohydrate' => '47.5 g',
            'Dietary Fiber' => '15.8 g',
            'Fat' => '2.1 g',
            'Calcium' => '510 mg',
            'Phosphorus' => '80 mg',
            'Bitter Glycosides' => 'Naturally Rich'
        ],
        'highlights' => [
            'Botanical Name' => 'Azadirachta Indica',
            'Part Used' => 'Leaves',
            'Processing' => 'Shade Dried & Micro-Pulverized',
            'Color' => 'Forest Green',
            'Shelf Life' => '24 Months',
            'Storage' => 'Airtight container away from sunlight and moisture.'
        ],
        'related' => ['tulsi-powder', 'ashwagandha-powder', 'moringa-leaf-powder', 'giloy-powder', 'amla-powder']
    ],

    'tulsi-powder' => [
        'id' => 'tulsi-powder',
        'name' => 'Tulsi Powder',
        'category' => 'Herbal Powders',
        'category_tag' => '🌿 AYURVEDIC HERBS',
        'category_link' => 'products.php#herbal-category',
        'tagline' => 'Sacred Holy Basil leaf powder for stress relief & respiratory wellness.',
        'rating' => '4.9',
        'reviews_count' => 98,
        'image' => 'images/products/tulsi-powder.png',
        'gallery' => [
            'images/products/tulsi-powder.png',
            'images/products/neem-powder.png',
            'images/products/ashwagandha-powder.png',
            'images/products/giloy-powder.png',
        ],
        'pack_sizes' => ['100g', '250g', '500g', '1kg', '5kg', '25kg'],
        'default_pack' => '500g',
        'forms' => ['Fine Powder', 'Tea Cut Granules'],
        'default_form' => 'Fine Powder',
        'origin' => 'India (Varanasi / Madhya Pradesh)',
        'description_p1' => 'Regarded in India as the "Queen of Herbs", Holy Basil (Ocimum Sanctum) is a revered adaptogen known to regulate cortisol levels, ease anxiety, and reinforce the respiratory and pulmonary systems.',
        'description_p2' => 'Our Tulsi powder is milled from fresh, shade-dried Rama and Krishna Tulsi leaves, capturing the natural eugenol and essential oils that lend it a fragrant, sweet-herbal aroma and soothing taste.',
        'bullet_points' => [
            'Natural adaptogen helping the body adapt to mental and environmental stressors',
            'Supports clear breathing, bronchial soothing, and pulmonary immunity',
            'Rich in essential volatile oils like eugenol, camphene, and caryophyllene',
            'Makes a calming herbal tea infusion or restorative smoothie blend'
        ],
        'nutrition' => [
            'Energy' => '295 kcal',
            'Protein' => '13.8 g',
            'Carbohydrate' => '51.2 g',
            'Dietary Fiber' => '14.6 g',
            'Fat' => '2.8 g',
            'Vitamin C' => '28 mg',
            'Eugenol Content' => 'Standardized Active'
        ],
        'highlights' => [
            'Botanical Name' => 'Ocimum Sanctum (Holy Basil)',
            'Part Used' => 'Leaves & Tender Shoots',
            'Processing' => 'Shade Dried & Fine Ground',
            'Color' => 'Earthy Olive Green',
            'Shelf Life' => '24 Months',
            'Storage' => 'Cool, dry location; seal tightly after each use.'
        ],
        'related' => ['neem-powder', 'ashwagandha-powder', 'giloy-powder', 'moringa-leaf-powder', 'amla-powder']
    ],

    'ashwagandha-powder' => [
        'id' => 'ashwagandha-powder',
        'name' => 'Ashwagandha Powder',
        'category' => 'Herbal Powders',
        'category_tag' => '🌿 AYURVEDIC HERBS & ADAPTOGENS',
        'category_link' => 'products.php#herbal-category',
        'tagline' => 'Potent root powder standardized with withanolides for stamina & calm.',
        'rating' => '4.9',
        'reviews_count' => 165,
        'image' => 'images/products/ashwagandha-powder.png',
        'gallery' => [
            'images/products/ashwagandha-powder.png',
            'images/products/neem-powder.png',
            'images/products/tulsi-powder.png',
            'images/products/amla-powder.png',
        ],
        'pack_sizes' => ['100g', '250g', '500g', '1kg', '5kg', '25kg'],
        'default_pack' => '500g',
        'forms' => ['Fine Powder', 'Root Cut'],
        'default_form' => 'Fine Powder',
        'origin' => 'India (Madhya Pradesh / Rajasthan)',
        'description_p1' => 'Our Ashwagandha Powder is prepared from mature, sustainably harvested roots of Withania Somnifera (Indian Ginseng). Widely revered in global wellness, Ashwagandha acts as a premier adaptogen that stabilizes adrenals, reduces chronic fatigue, and restores natural sleep cycles.',
        'description_p2' => 'Using traditional slow pulverization techniques, we ensure the heat-sensitive withanolides and alkaloids remain biologically intact to deliver maximum strength in every teaspoon.',
        'bullet_points' => [
            'Natural adaptogen clinically recognized to lower cortisol and soothe stress',
            'Boosts physical strength, endurance, muscle recovery, and stamina',
            'Enhances cognitive focus, memory consolidation, and deep restful sleep',
            '100% pure root powder with zero chemical additives or preservatives'
        ],
        'nutrition' => [
            'Energy' => '325 kcal',
            'Protein' => '9.5 g',
            'Carbohydrate' => '68.2 g',
            'Dietary Fiber' => '12.4 g',
            'Fat' => '1.2 g',
            'Iron' => '3.8 mg',
            'Calcium' => '230 mg',
            'Withanolides' => 'Naturally Standardized'
        ],
        'highlights' => [
            'Botanical Name' => 'Withania Somnifera',
            'Part Used' => 'Roots',
            'Processing' => 'Sun Dried & Micro-Pulverized',
            'Color' => 'Creamy Pale Tan',
            'Shelf Life' => '24 Months',
            'Storage' => 'Airtight jar in a cool, dry pantry.'
        ],
        'related' => ['moringa-leaf-powder', 'neem-powder', 'tulsi-powder', 'giloy-powder', 'amla-powder']
    ],

    'amla-powder' => [
        'id' => 'amla-powder',
        'name' => 'Amla Powder',
        'category' => 'Herbal Powders',
        'category_tag' => '🌿 AYURVEDIC HERBS & VITAMIN C',
        'category_link' => 'products.php#herbal-category',
        'tagline' => 'Sun-dried Indian Gooseberry powder with unmatched natural Vitamin C.',
        'rating' => '4.8',
        'reviews_count' => 88,
        'image' => 'images/products/amla-powder.png',
        'gallery' => [
            'images/products/amla-powder.png',
            'images/products/hibiscus-powder.png',
            'images/products/neem-powder.png',
            'images/products/ashwagandha-powder.png',
        ],
        'pack_sizes' => ['100g', '250g', '500g', '1kg', '5kg', '25kg'],
        'default_pack' => '500g',
        'forms' => ['Fine Powder (80 Mesh)'],
        'default_form' => 'Fine Powder (80 Mesh)',
        'origin' => 'India (Uttar Pradesh)',
        'description_p1' => 'Our Amla Powder is processed from wild-harvested Indian Gooseberries (Phyllanthus Emblica). It represents one of the richest plant-based sources of bioavailable Vitamin C and tannins, functioning as a powerhouse antioxidant for gut flora, hair follicles, and glowing skin.',
        'description_p2' => 'The seedless fruit pulp is sun-dried and pulverized under controlled conditions to retain natural ascorbic acid, ensuring robust stability against oxidative degradation.',
        'bullet_points' => [
            'Contains 20x more Vitamin C by volume than fresh oranges',
            'Strengthens hair roots, delays premature graying, and promotes radiant skin',
            'Supports digestive fire (Agni) and healthy gut microflora',
            'Versatile for internal dietary tonics and topical hair mask mixtures'
        ],
        'nutrition' => [
            'Energy' => '310 kcal',
            'Protein' => '4.8 g',
            'Carbohydrate' => '69.5 g',
            'Dietary Fiber' => '18.4 g',
            'Fat' => '0.8 g',
            'Vitamin C' => '620 mg',
            'Calcium' => '85 mg',
            'Iron' => '2.8 mg'
        ],
        'highlights' => [
            'Botanical Name' => 'Phyllanthus Emblica',
            'Part Used' => 'Seedless Fruit Pulp',
            'Processing' => 'De-seeded, Dried & Milled',
            'Color' => 'Warm Brownish Green',
            'Shelf Life' => '24 Months',
            'Storage' => 'Airtight packaging; protect from humidity.'
        ],
        'related' => ['hibiscus-powder', 'neem-powder', 'moringa-leaf-powder', 'tulsi-powder', 'ashwagandha-powder']
    ],

    'giloy-powder' => [
        'id' => 'giloy-powder',
        'name' => 'Giloy Powder',
        'category' => 'Herbal Powders',
        'category_tag' => '🌿 AYURVEDIC HERBS & IMMUNITY',
        'category_link' => 'products.php#herbal-category',
        'tagline' => 'Guduchi stem extract powder revered as the root of immortality.',
        'rating' => '4.8',
        'reviews_count' => 72,
        'image' => 'images/products/giloy-powder.png',
        'gallery' => [
            'images/products/giloy-powder.png',
            'images/products/neem-powder.png',
            'images/products/tulsi-powder.png',
            'images/products/ashwagandha-powder.png',
        ],
        'pack_sizes' => ['100g', '250g', '500g', '1kg', '5kg', '25kg'],
        'default_pack' => '500g',
        'forms' => ['Fine Stem Powder', 'Satva Extract'],
        'default_form' => 'Fine Stem Powder',
        'origin' => 'India',
        'description_p1' => 'Giloy (Tinospora Cordifolia), known in Sanskrit as "Amrita" (nectar of life), is one of the most potent immune-modulators in Ayurvedic medicine. Sourced from wild-growing mature climbing vines, the nutrient-rich stems are cleaned, dried, and powdered.',
        'description_p2' => 'Celebrated for its ability to regulate body temperature, support liver detoxification, and increase white blood cell count, Giloy is an essential ingredient for preventative wellness formulations.',
        'bullet_points' => [
            'High concentration of alkaloids and glycosides for immune defense',
            'Natural antipyretic supporting healthy body temperature balance',
            'Promotes liver function and gentle metabolic cleansing',
            '100% natural, additive-free botanical powder'
        ],
        'nutrition' => [
            'Energy' => '290 kcal',
            'Protein' => '8.6 g',
            'Carbohydrate' => '62.4 g',
            'Dietary Fiber' => '16.2 g',
            'Fat' => '1.1 g',
            'Active Alkaloids' => 'Standardized'
        ],
        'highlights' => [
            'Botanical Name' => 'Tinospora Cordifolia (Guduchi)',
            'Part Used' => 'Mature Climbing Stems',
            'Processing' => 'Shade Dried & Fine Pulverized',
            'Color' => 'Pale Khaki Tan',
            'Shelf Life' => '24 Months',
            'Storage' => 'Keep in airtight container away from moisture.'
        ],
        'related' => ['tulsi-powder', 'neem-powder', 'ashwagandha-powder', 'moringa-leaf-powder', 'amla-powder']
    ],

    'hibiscus-powder' => [
        'id' => 'hibiscus-powder',
        'name' => 'Hibiscus Powder',
        'category' => 'Herbal Powders',
        'category_tag' => '🌿 BOTANICALS & HAIR CARE',
        'category_link' => 'products.php#herbal-category',
        'tagline' => 'Vibrant ruby red botanical powder for natural hair conditioning & beauty.',
        'rating' => '4.9',
        'reviews_count' => 104,
        'image' => 'images/products/hibiscus-powder.png',
        'gallery' => [
            'images/products/hibiscus-powder.png',
            'images/products/amla-powder.png',
            'images/products/neem-powder.png',
            'images/products/beetroot.png',
        ],
        'pack_sizes' => ['100g', '250g', '500g', '1kg', '5kg', '25kg'],
        'default_pack' => '500g',
        'forms' => ['Fine Petal Powder (80-100 Mesh)'],
        'default_form' => 'Fine Petal Powder (80-100 Mesh)',
        'origin' => 'India',
        'description_p1' => 'Our Hibiscus Powder is prepared from hand-picked, sun-dried deep crimson petals of Hibiscus Sabdariffa. Packed with natural alpha-hydroxy acids (AHAs), amino acids, and anthocyanins, it has earned the nickname "nature\'s Botox" for hair and skin.',
        'description_p2' => 'Used globally in herbal shampoos, botanical hair dyes, revitalizing face masks, and tart herbal tea formulations, our hibiscus powder delivers intense natural pigment and conditioning properties.',
        'bullet_points' => [
            'Stimulates hair follicle growth and prevents premature shedding and split ends',
            'Natural conditioning mucilage gives hair silky softness and radiant shine',
            'Rich in natural AHAs and antioxidants for skin elasticity and complexion toning',
            'Food-grade certified: perfect for antioxidant-rich herbal teas and beverages'
        ],
        'nutrition' => [
            'Energy' => '305 kcal',
            'Protein' => '6.4 g',
            'Carbohydrate' => '68.1 g',
            'Dietary Fiber' => '14.5 g',
            'Fat' => '1.0 g',
            'Anthocyanins' => 'Rich Pigment',
            'Vitamin C' => '180 mg'
        ],
        'highlights' => [
            'Botanical Name' => 'Hibiscus Sabdariffa',
            'Part Used' => 'Flower Petals / Calyces',
            'Processing' => 'Carefully Dried & Micro-Ground',
            'Color' => 'Deep Ruby Red / Burgundy',
            'Shelf Life' => '24 Months',
            'Storage' => 'Protect from direct light and humidity.'
        ],
        'related' => ['amla-powder', 'beetroot', 'neem-powder', 'moringa-leaf-powder', 'tulsi-powder']
    ],

    // -------------------------------------------------------------
    // ADDITIONAL PRODUCTS (FROM HOME PAGE)
    // -------------------------------------------------------------
    'onion-powder' => [
        'id' => 'onion-powder',
        'name' => 'Onion Powder',
        'category' => 'Dehydrated Food',
        'category_tag' => '🧅 DEHYDRATED FOODS',
        'category_link' => 'products.php',
        'tagline' => 'Premium dehydrated red & white onion powder with rich authentic flavor.',
        'rating' => '4.8',
        'reviews_count' => 92,
        'image' => 'images/products/onion-powder.png',
        'gallery' => [
            'images/products/onion-powder.png',
            'images/products/beetroot.png',
            'images/products/moringa-leaf-powder.png',
            'images/products/basmati-rice.png',
        ],
        'pack_sizes' => ['500g', '1kg', '5kg', '10kg', '25kg'],
        'default_pack' => '1kg',
        'forms' => ['Fine Powder (80-100 Mesh)', 'Minced Flakes', 'Granules'],
        'default_form' => 'Fine Powder (80-100 Mesh)',
        'origin' => 'India (Maharashtra / Gujarat)',
        'description_p1' => 'Our Dehydrated Onion Powder is manufactured from premium quality fresh Indian onions cultivated in the nutrient-dense soils of Nashik and Mahuva. Harvested at peak maturity, peeled, sorted, washed, and dehydrated in modern conveyor dryers.',
        'description_p2' => 'It delivers the pungent, savory, sweet aromatic punch of fresh onions in a convenient, non-perishable powder that dissolves instantly into seasoning blends, spice mixes, sauces, soups, and ready-to-eat foods.',
        'bullet_points' => [
            '100% pure dehydrated onion with no anti-caking agents, MSG, or starch',
            'High organoleptic intensity: 1 kg of powder replaces 10 kg of fresh onions',
            'Standardized moisture (< 5.0%) preventing clumping and preserving shelf life',
            'Hygienically processed and metal detected for premier international export'
        ],
        'nutrition' => [
            'Energy' => '342 kcal',
            'Protein' => '10.2 g',
            'Carbohydrate' => '79.1 g',
            'Dietary Fiber' => '15.2 g',
            'Fat' => '1.0 g',
            'Sodium' => '25 mg',
            'Calcium' => '380 mg',
            'Moisture' => '< 5.0%'
        ],
        'highlights' => [
            'Botanical Name' => 'Allium Cepa',
            'Part Used' => 'Bulb',
            'Processing' => 'Continuous Dehydration & Pin-Milling',
            'Color' => 'Pale Cream / Pinkish White',
            'Shelf Life' => '24 Months',
            'Storage' => 'Cool, dry location in moisture-barrier bags.'
        ],
        'related' => ['beetroot', 'basmati-rice', 'neem-powder', 'moringa-leaf-powder', 'ashwagandha-powder']
    ],

    'beetroot' => [
        'id' => 'beetroot',
        'name' => 'Beetroot Powder',
        'category' => 'Dehydrated Food',
        'category_tag' => '🍠 NATURAL EXTRACTS & SUPERFOODS',
        'category_link' => 'products.php',
        'tagline' => 'Natural vibrant beetroot extract rich in dietary nitrates & betacyanins.',
        'rating' => '4.9',
        'reviews_count' => 134,
        'image' => 'images/products/beetroot.png',
        'gallery' => [
            'images/products/beetroot.png',
            'images/products/onion-powder.png',
            'images/products/hibiscus-powder.png',
            'images/products/moringa-leaf-powder.png',
        ],
        'pack_sizes' => ['250g', '500g', '1kg', '5kg', '25kg'],
        'default_pack' => '500g',
        'forms' => ['Fine Powder', 'Water Soluble Extract'],
        'default_form' => 'Fine Powder',
        'origin' => 'India',
        'description_p1' => 'Our Beetroot Powder is crafted from farm-fresh, deeply pigmented Indian beets. Rich in dietary nitrates that naturally convert into nitric oxide in the bloodstream, it supports healthy vascular circulation, stamina, and cardiovascular athletic performance.',
        'description_p2' => 'Widely used as an all-natural, clean-label plant food coloring for frostings, pastas, juices, and sports endurance formulations, our beetroot powder delivers vibrant color and earthy-sweet flavor without artificial additives.',
        'bullet_points' => [
            'High concentration of dietary nitrates for peak nitric oxide production',
            'Natural food colorant (E162 betanin replacement) with vibrant magenta pigment',
            'Enhances stamina, oxygen utilization, and muscle endurance in athletes',
            '100% pure root, non-GMO, gluten-free, and spray-dried for instant solubility'
        ],
        'nutrition' => [
            'Energy' => '330 kcal',
            'Protein' => '11.5 g',
            'Carbohydrate' => '65.0 g',
            'Dietary Fiber' => '19.8 g',
            'Fat' => '1.5 g',
            'Potassium' => '3050 mg',
            'Iron' => '7.8 mg',
            'Nitrates' => 'Naturally High'
        ],
        'highlights' => [
            'Botanical Name' => 'Beta Vulgaris',
            'Part Used' => 'Taproot',
            'Processing' => 'Cold-Pressed, Spray-Dried / Dehydrated',
            'Color' => 'Deep Ruby Magenta',
            'Shelf Life' => '24 Months',
            'Storage' => 'Airtight packaging in cool, dark storage.'
        ],
        'related' => ['onion-powder', 'hibiscus-powder', 'moringa-leaf-powder', 'ashwagandha-powder', 'basmati-rice']
    ],
];
?>