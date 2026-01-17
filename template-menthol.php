<?php
/**
 * Template Name: BB Menthol Product Page
 */

get_header();
?>

<main id="main-content" class="site-main product-page">
    
    <!-- Product Hero -->
    <section class="product-hero">
        <div class="product-hero-grid">
            <div class="product-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menthol-pack.png" alt="BB Menthol Cigarettes Pack">
            </div>
            <div class="product-details-card">
                <span class="product-category">Cool Refresh</span>
                <h1>BB Menthol Cigarettes - Cool & Refreshing Experience</h1>
                <p class="product-subtitle">Experience the distinctive minty freshness of BB Menthol. Premium tobacco meets cooling menthol for a refreshing sensation from first light to last draw.</p>
                
                <div class="product-cta">
                    <a href="https://1smokes.ca/bb-canadian-blend-cigarettes-menthol/" class="btn btn-primary btn-large">Buy BB Menthol Online</a>
                    <p class="age-notice">⚠️ 18+ Only (19+ in some provinces). Must be of legal smoking age.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Specs & Calculator Section -->
    <section class="product-section specs-calculator-section">
        <div class="container">
            <div class="two-column-layout">
                <div class="column">
                    <div class="product-specs-box">
                        <h3>Product Specifications</h3>
                        <ul>
                            <li><strong>Flavor Profile:</strong> Cool, minty, refreshing</li>
                            <li><strong>Strength:</strong> Medium strength with cooling</li>
                            <li><strong>Pack Size:</strong> 20 cigarettes per pack</li>
                            <li><strong>Carton Size:</strong> 10 packs (200 cigarettes)</li>
                            <li><strong>Filter Type:</strong> Menthol infused filter</li>
                            <li><strong>Tobacco Blend:</strong> Premium blend with menthol infusion</li>
                            <li><strong>Availability:</strong> Available across Canada (where regulations permit)</li>
                        </ul>
                    </div>
                </div>
                <div class="column">
                    <div class="hero-calculator">
                        <div class="calc-header">
                            <h3>Bulk Savings Calculator</h3>
                            <p>See how much you save with our carton deals</p>
                        </div>

                        <div class="calc-input-group">
                            <label for="cartonQty">Number of Cartons (1 carton = 10 packs)</label>
                            <div class="qty-control">
                                <button class="qty-btn minus" id="qtyMinus">-</button>
                                <input type="number" id="cartonQty" value="1" min="1" max="100">
                                <button class="qty-btn plus" id="qtyPlus">+</button>
                            </div>
                        </div>

                        <div class="calc-breakdown">
                            <div class="calc-row">
                                <span>Price Per Carton:</span>
                                <span class="calc-value" id="pricePerCarton">$37.00</span>
                            </div>
                            <div class="calc-row">
                                <span>Total Price:</span>
                                <span class="calc-value highlight" id="totalPrice">$37.00</span>
                            </div>
                            <div class="calc-row savings-row">
                                <span>Your Savings:</span>
                                <span class="calc-value savings" id="totalSavings">$22.90</span>
                            </div>
                            <p class="savings-note" id="savingsNote">You save $2.29 per pack!</p>
                        </div>

                        <a href="https://1smokes.ca/bb-canadian-blend-cigarettes-menthol/" class="btn btn-primary btn-block">Buy Now & Save</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Overview -->
    <section class="product-section">
        <div class="container">
            <span class="section-label">Overview</span>
            <h2>What Makes BB Menthol Cigarettes Special</h2>
            <p>BB Menthol Cigarettes offer a unique departure from traditional tobacco, delivering a crisp, cooling sensation that invigorates the senses. Designed for smokers who crave freshness, BB Menthol combines our signature high-quality tobacco with a blast of premium menthol flavor.</p>
            
            <p>Unlike standard cigarettes, BB Menthol is crafted to balance the robust taste of tobacco with the clean, icy finish of mint. This balance ensures that the tobacco flavor is not lost but rather enhanced by the cooling effect, providing a multi-dimensional smoking experience.</p>

            <p>Quality is paramount in our Menthol line. We use precise infusion techniques to ensure that the menthol flavor is evenly distributed throughout the cigarette, guaranteeing that the first puff is just as refreshing as the last. Whether you are a dedicated menthol smoker or looking for an occasional change of pace, BB Menthol delivers consistent satisfaction.</p>
        </div>
    </section>

    <!-- Menthol Blend Details -->
    <section class="product-section alt-bg">
        <div class="container">
            <span class="section-label">Composition</span>
            <h2>Premium Menthol Infusion</h2>
            
            <div class="two-column-layout">
                <div class="column">
                    <h3>The Tobacco Base</h3>
                    <p>Every great menthol cigarette starts with great tobacco. BB Menthol uses a specially selected blend of high-quality leaves chosen for their ability to carry the menthol flavor without being overpowered. This sturdy base ensures that you still get the satisfaction of a real cigarette.</p>
                    
                    <h3>Cooling Technology</h3>
                    <p>Our menthol infusion process is designed to deliver a clean, non-chemical cooling sensation. By integrating the menthol flavor directly into the filter and tobacco blend, we achieve a smooth, icy draw that cools the throat and refreshes the palate with every inhalation.</p>
                </div>
                <div class="column">
                    <h3>Perfect Balance</h3>
                    <p>The secret to BB Menthol's popularity is the ratio. We've spent years refining the balance between tobacco strength and menthol intensity. The result is a cigarette that is neither too harsh nor too minty—it's the perfect equilibrium for a smooth, cool smoke.</p>
                    
                    <p>This attention to detail sets BB Menthol apart from competitors who often use overpowering artificial additives to mask inferior tobacco.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features & Benefits -->
    <section class="product-section">
        <div class="container">
            <span class="section-label">Features</span>
            <h2>Key Features & Smoking Benefits</h2>
            <div class="features-grid-detailed">
                <div class="feature-detailed">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                        </svg>
                    </div>
                    <h4>Icy Fresh Flavor</h4>
                    <p>Experience the immediate cooling sensation of premium menthol. It clears the palate and provides a refreshing break from the heaviness of standard tobacco smoke.</p>
                </div>

                <div class="feature-detailed">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 6v6l4 2" />
                        </svg>
                    </div>
                    <h4>Smooth Throat Hit</h4>
                    <p>The cooling properties of menthol naturally soothe the throat, reducing the harshness of the smoke and making each draw feel smoother and lighter on the lungs.</p>
                </div>

                <div class="feature-detailed">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <h4>Consistent Coolness</h4>
                    <p>Advanced manufacturing ensures that the menthol is evenly distributed, so you don't get "hot spots" or flavorless puffs. Consistency is key to the BB Menthol experience.</p>
                </div>

                <div class="feature-detailed">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <h4>Invigorating Experience</h4>
                    <p>The combination of nicotine and menthol provides a uniquely invigorating effect, perfect for waking up the senses or enjoying a refreshing pause in your day.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose -->
    <section class="product-section alt-bg">
        <div class="container">
            <span class="section-label">Why Choose</span>
            <h2>Why Choose BB Menthol</h2>
            
            <p>BB Menthol is the preferred choice for smokers who demand freshness without compromising on tobacco quality.</p>

            <div class="comparison-points">
                <div class="point">
                    <h3>Genuine Refreshment</h3>
                    <p>While other brands can taste chemical or overly sweet, BB Menthol delivers a crisp, authentic mint taste that feels genuinely refreshing.</p>
                </div>

                <div class="point">
                    <h3>Premium Quality, Affordable Price</h3>
                    <p>Enjoy top-tier menthol cigarettes without the top-tier price. BB Menthol offers the same quality as leading national brands at a fraction of the cost.</p>
                </div>

                <div class="point">
                    <h3>Reduced Aftertaste</h3>
                    <p>The clean finish of menthol helps leave your mouth feeling fresher after smoking compared to non-menthol varieties, reducing the lingering "ashtray" taste.</p>
                </div>

                <div class="point">
                    <h3>Available in Cartons</h3>
                    <p>Stock up on freshness. BB Menthol is available in 10-pack cartons, offering massive savings for regular menthol smokers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Compare to Other BB Variants -->
    <section class="product-section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Comparison</span>
                <h2>Compare BB Menthol to Other BB Variants</h2>
                <p>Find your perfect match.</p>
            </div>

            <div class="variants-comparison">
                <div class="variant-compare current">
                    <h3>BB Menthol (Current)</h3>
                    <p><strong>Best For:</strong> Those who enjoy cooling menthol freshness</p>
                    <p>You are viewing BB Menthol – the cool, refreshing choice. Perfect for those who want a minty kick with their smoke.</p>
                </div>

                <div class="variant-compare">
                    <h3><a href="<?php echo home_url('/bb-full-flavor/'); ?>">BB Full Flavor</a></h3>
                    <p><strong>Best For:</strong> Experienced smokers wanting bold, authentic tobacco taste</p>
                    <p>The classic choice. Full strength, full flavor, no mint. Just purified, robust tobacco satisfaction.</p>
                    <a href="<?php echo home_url('/bb-full-flavor/'); ?>" class="btn btn-outline btn-sm">View Full Flavor →</a>
                </div>

                <div class="variant-compare">
                    <h3><a href="<?php echo home_url('/bb-lights/'); ?>">BB Lights Cigarettes</a></h3>
                    <p><strong>Best For:</strong> Smokers seeking a lighter, smoother experience</p>
                    <p>A smoother, mellower option without the menthol. Perfect if you want a lighter smoke but prefer the natural tobacco taste.</p>
                    <a href="<?php echo home_url('/bb-lights/'); ?>" class="btn btn-outline btn-sm">View BB Lights →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Buy -->
    <section class="product-section alt-bg">
        <div class="container">
            <span class="section-label">Buying Guide</span>
            <h2>How to Buy BB Menthol Cigarettes in Canada</h2>
            
            <p>Purchase BB Menthol securely online or in-store.</p>

            <div class="buying-process">
                <div class="step-detailed">
                    <span class="step-number">1</span>
                    <div class="step-content">
                        <h3>Visit 1Smokes.ca</h3>
                        <p>Go to <a href="https://1smokes.ca/bb-canadian-blend-cigarettes-menthol/">1Smokes.ca</a> to find BB Menthol products.</p>
                    </div>
                </div>

                <div class="step-detailed">
                    <span class="step-number">2</span>
                    <div class="step-content">
                        <h3>Verify Your Age</h3>
                        <p>You must be of legal smoking age (18+ or 19+ depending on province) to order.</p>
                    </div>
                </div>

                <div class="step-detailed">
                    <span class="step-number">3</span>
                    <div class="step-content">
                        <h3>Select Quantity</h3>
                        <p>We recommend buying cartons (10 packs) to lock in the lowest price per pack.</p>
                    </div>
                </div>

                <div class="step-detailed">
                    <span class="step-number">4</span>
                    <div class="step-content">
                        <h3>Fast Shipping</h3>
                        <p>Receive your order quickly and discreetly via Canada Post or courier.</p>
                    </div>
                </div>
            </div>

            <div class="cta-box">
                <h3>Get Freshness Delivered</h3>
                <p>Order BB Menthol today and enjoy the cool sensation of premium quality.</p>
                <a href="https://1smokes.ca/bb-canadian-blend-cigarettes-menthol/" class="btn btn-primary btn-large">Shop BB Menthol Now</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="product-section">
        <div class="container">
            <h2>Frequently Asked Questions About BB Menthol</h2>
            
            <div class="faq-grid">
                <div class="faq-item-detailed">
                    <h4>Is BB Menthol available in all provinces?</h4>
                    <p>Menthol availability can vary due to specific provincial regulations. Please check the product listing on <a href="https://1smokes.ca/bb-canadian-blend-cigarettes-menthol/">1Smokes.ca</a> or your local retailer to confirm availability in your region.</p>
                </div>

                <div class="faq-item-detailed">
                    <h4>How strong is the menthol flavor?</h4>
                    <p>BB Menthol offers a distinct and noticeable mint flavor that is designed to be refreshing without being overpowering. It strikes a balance that allows the tobacco quality to shine through.</p>
                </div>

                <div class="faq-item-detailed">
                    <h4>Can I buy mixed cartons?</h4>
                    <p>Typically cartons are sold as single units of one variety, but some online retailers may offer "sampler packs" or bulk savings when you buy different cartons together. Check specific retailer offers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Canadian Compliance -->
    <section class="compliance-notice">
        <div class="container">
            <div class="notice-box">
                <h3>⚠️ Important Health & Legal Information</h3>
                
                <div class="compliance-content">
                    <h4>Health Warnings</h4>
                    <p><strong>Tobacco Use Is Harmful:</strong> Smoking cigarettes, including menthol varieties, causes serious health issues. Menthol does not make cigarettes safer.</p>
                    
                    <p><strong>Addiction Warning:</strong> Nicotine is highly addictive.</p>

                    <h4>Legal Age Requirements</h4>
                    <p>You must be of legal age in your province to purchase tobacco products (18+ or 19+). Providing tobacco to minors is illegal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="product-section">
        <div class="container">
            <h2>Explore Other BB Cigarettes Variants</h2>
            <div class="related-products">
                <div class="related-product-card">
                    <div class="related-product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/full-flavor-pack.png" alt="BB Full Flavor Cigarettes">
                    </div>
                    <h3><a href="<?php echo home_url('/bb-full-flavor/'); ?>">BB Full Flavor</a></h3>
                    <p>Bold, authentic tobacco taste.</p>
                    <a href="<?php echo home_url('/bb-full-flavor/'); ?>" class="btn btn-outline">View Full Flavor</a>
                </div>

                <div class="related-product-card">
                    <div class="related-product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/lights-pack.png" alt="BB Lights Cigarettes">
                    </div>
                    <h3><a href="<?php echo home_url('/bb-lights/'); ?>">BB Lights</a></h3>
                    <p>Smooth, refined, lighter experience.</p>
                    <a href="<?php echo home_url('/bb-lights/'); ?>" class="btn btn-outline">View Lights</a>
                </div>

                <div class="related-product-card">
                    <div class="related-product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/hero-product.png" alt="All BB Cigarettes Variants">
                    </div>
                    <h3><a href="<?php echo home_url('/'); ?>">View All Variants</a></h3>
                    <p>Compare all options on our homepage.</p>
                    <a href="<?php echo home_url('/'); ?>" class="btn btn-outline">Compare All</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
