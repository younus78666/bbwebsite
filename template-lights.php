<?php
/**
 * Template Name: BB Lights Product Page
 */

get_header();
?>

<main id="main-content" class="site-main product-page">
    
    <!-- Product Hero -->
    <section class="product-hero">
        <div class="product-hero-grid">
            <div class="product-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/lights-pack.png" alt="BB Lights Cigarettes Pack">
            </div>
            <div class="product-details-card">
                <span class="product-category">Refined Balance</span>
                <h1>BB Lights Cigarettes - Smooth & Refined Experience</h1>
                <p class="product-subtitle">Experience the refined balance of BB Lights Cigarettes. Crafted for smokers who appreciate premium tobacco quality with a gentler, smoother delivery without sacrificing taste integrity.</p>
                
                <div class="product-cta">
                    <a href="https://1smokes.ca/bb-lights-cigarettes/" class="btn btn-primary btn-large">Buy BB Lights Online</a>
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
                            <li><strong>Flavor Profile:</strong> Smooth, mellow, balanced</li>
                            <li><strong>Strength:</strong> Reduced strength</li>
                            <li><strong>Pack Size:</strong> 20 cigarettes per pack</li>
                            <li><strong>Carton Size:</strong> 10 packs (200 cigarettes)</li>
                            <li><strong>Filter Type:</strong> High-efficiency vented filter</li>
                            <li><strong>Tobacco Blend:</strong> Premium Virginia and lighter Burley blend</li>
                            <li><strong>Availability:</strong> Available across Canada</li>
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

                        <a href="https://1smokes.ca/bb-lights-cigarettes/" class="btn btn-primary btn-block">Buy Now & Save</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Overview -->
    <section class="product-section">
        <div class="container">
            <span class="section-label">Overview</span>
            <h2>What Makes BB Lights Cigarettes Special</h2>
            <p>BB Lights Cigarettes are designed for the discerning smoker who prefers a lighter experience without compromising on quality. Unlike many "light" brands that sacrifice flavor, BB Lights maintains the rich character of our premium tobacco blend but delivers it with a smoother, airier draw.</p>
            
            <p>Each BB Lights cigarette uses the same high-quality Virginia and Burley tobacco leaves as our Full Flavor line, but the blend is adjusted to highlight the brighter, sweeter notes of the Virginia tobacco. The result is a smoke that is satisfyingly flavorful yet significantly smoother on the throat.</p>

            <p>The key differentiator lies in the precision-engineered ventilation system in the filter. This allows for a partially aerated draw that cools the smoke and reduces the intensity of each puff, providing a sophisticated and mellow smoking experience perfect for those who find full-strength cigarettes too harsh.</p>
        </div>
    </section>

    <!-- Tobacco Blend Details -->
    <section class="product-section alt-bg">
        <div class="container">
            <span class="section-label">Composition</span>
            <h2>Refined Tobacco Blend</h2>
            
            <div class="two-column-layout">
                <div class="column">
                    <h3>Select Virginia Tobacco</h3>
                    <p>At the heart of BB Lights is a higher proportion of golden Virginia tobacco. Known for its naturally high sugar content and mild flavor, this tobacco provides the smooth base that defines the Lights experience. We select only the brightest leaves that have been cured to preserve their natural sweetness and delicate aroma.</p>
                    
                    <h3>Mellow Burley Accents</h3>
                    <p>To ensure the cigarette remains satisfying, we add a touch of select Burley tobacco. Unlike the robust Burley used in our Full Flavor line, the leaf chosen for BB Lights is lighter and air-cured to provide just enough body to structure the smoke without overpowering the smooth profile.</p>
                </div>
                <div class="column">
                    <h3>Advanced Filter Technology</h3>
                    <p>The defining feature of BB Lights is its advanced filtration technology. The filter creates a specific pressure drop that moderates the smoke volume and temperature. Laser-perforated ventilation zones mix fresh air with the smoke stream, diluting the intensity while smoothing out any rough edges in the flavor profile.</p>
                    
                    <p>This technical precision ensures that every puff delivers the consistent, mellow taste that BB Lights smokers expect, free from the harshness often associated with tobacco products.</p>
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
                    <h4>Smooth, Mellow Taste</h4>
                    <p>Enjoy the premium taste of tobacco without the heavy impact. BB Lights delivers a sophisticated flavor profile that is clean, crisp, and remarkably smooth. Perfect for social settings or for smokers who prefer a lighter touch.</p>
                </div>

                <div class="feature-detailed">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 6v6l4 2" />
                        </svg>
                    </div>
                    <h4>Reduced Intensity</h4>
                    <p>Experience satisfaction with less intensity. BB Lights are formulated to provide a satisfying nicotine delivery that feels lighter and less aggressive than full-flavor varieties, making for a more relaxed smoking experience.</p>
                </div>

                <div class="feature-detailed">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <h4>Easy Draw</h4>
                    <p>The vented filter design ensures an effortless draw. Smoke flows freely and coolly, enhancing individual flavor notes that might otherwise be masked by heat. This easy draw contributes to the overall feeling of lightness and refinement.</p>
                </div>

                <div class="feature-detailed">
                    <div class="feature-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <h4>Consistent Quality</h4>
                    <p>Just like our Full Flavor line, BB Lights undergoes rigorous quality control. Every pack is guaranteed to provide the same consistent, smooth burn and flavor, ensuring your experience is perfect every time.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose -->
    <section class="product-section alt-bg">
        <div class="container">
            <span class="section-label">Why Choose</span>
            <h2>Why Choose BB Lights</h2>
            
            <p>BB Lights offers a premium alternative for smokers who find standard cigarettes too strong or harsh.</p>

            <div class="comparison-points">
                <div class="point">
                    <h3>Gentle on the Throat</h3>
                    <p>The number one reason smokers choose BB Lights is the smoothness. The careful blend and vented filter work together to minimize throat irritation, providing a comfortable smoke from start to finish.</p>
                </div>

                <div class="point">
                    <h3>Premium Value</h3>
                    <p>Get the premium "light" cigarette experience without the premium price tag. BB Lights competes with top national brands in quality but beats them on price, especially when purchased in cartons.</p>
                </div>

                <div class="point">
                    <h3>No Artificial Aftertaste</h3>
                    <p>Because we rely on quality tobacco and physical filtration rather than chemical additives to achieve lightness, BB Lights leaves no chemical aftertaste—just the clean finish of good tobacco.</p>
                </div>

                <div class="point">
                    <h3>Ideal for Light Smokers</h3>
                    <p>If you smoke occasionally or prefer a milder sensation, BB Lights is the perfect choice. It offers the ritual and taste of smoking without the overwhelming intensity of full-strength brands.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Compare to Other BB Variants -->
    <section class="product-section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Comparison</span>
                <h2>Compare BB Lights to Other BB Variants</h2>
                <p>Find the perfect strength and flavor for your preference.</p>
            </div>

            <div class="variants-comparison">
                <div class="variant-compare current">
                    <h3>BB Lights (Current)</h3>
                    <p><strong>Best For:</strong> Smokers seeking a lighter, smoother experience</p>
                    <p>You are viewing BB Lights – our smoothest, most refined option. Perfect if you value a gentle draw and mellow flavor over intense strength.</p>
                </div>

                <div class="variant-compare">
                    <h3><a href="<?php echo home_url('/bb-full-flavor/'); ?>">BB Full Flavor</a></h3>
                    <p><strong>Best For:</strong> Experienced smokers wanting bold, authentic tobacco taste</p>
                    <p>BB Full Flavor delivers the complete robust tobacco experience. If you find Lights too mild and crave a stronger, richer throat hit, Full Flavor is the step up you need.</p>
                    <a href="<?php echo home_url('/bb-full-flavor/'); ?>" class="btn btn-outline btn-sm">View BB Full Flavor →</a>
                </div>

                <div class="variant-compare">
                    <h3><a href="<?php echo home_url('/bb-menthol/'); ?>">BB Menthol Cigarettes</a></h3>
                    <p><strong>Best For:</strong> Those who enjoy cooling menthol freshness</p>
                    <p>BB Menthol adds a crisp, cooling mint sensation to the smoking experience. If you like the smoothness of Lights but want that extra refreshing kick, try Menthol.</p>
                    <a href="<?php echo home_url('/bb-menthol/'); ?>" class="btn btn-outline btn-sm">View BB Menthol →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Buy -->
    <section class="product-section alt-bg">
        <div class="container">
            <span class="section-label">Buying Guide</span>
            <h2>How to Buy BB Lights Cigarettes in Canada</h2>
            
            <p>BB Lights Cigarettes are available for purchase online and in-store.</p>

            <div class="buying-process">
                <div class="step-detailed">
                    <span class="step-number">1</span>
                    <div class="step-content">
                        <h3>Visit 1Smokes.ca</h3>
                        <p>Go to our authorized partner <a href="https://1smokes.ca/bb-lights-cigarettes/">1Smokes.ca</a> to browse BB Lights products.</p>
                    </div>
                </div>

                <div class="step-detailed">
                    <span class="step-number">2</span>
                    <div class="step-content">
                        <h3>Verify Your Age</h3>
                        <p>You must be of legal smoking age (18+ or 19+ depending on province) to purchase. ID verification is required.</p>
                    </div>
                </div>

                <div class="step-detailed">
                    <span class="step-number">3</span>
                    <div class="step-content">
                        <h3>Select Cartons for Savings</h3>
                        <p>Choose 10-pack cartons to get the best value per pack. Stock up and save on your monthly smoking costs.</p>
                    </div>
                </div>

                <div class="step-detailed">
                    <span class="step-number">4</span>
                    <div class="step-content">
                        <h3>Fast Delivery</h3>
                        <p>Orders are shipped discretely and securely to your Canadian address via Canada Post or courier.</p>
                    </div>
                </div>
            </div>

            <div class="cta-box">
                <h3>Switch to a Smoother Smoke</h3>
                <p>Try BB Lights today and experience premium quality with a refined touch.</p>
                <a href="https://1smokes.ca/bb-lights-cigarettes/" class="btn btn-primary btn-large">Shop BB Lights Now</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="product-section">
        <div class="container">
            <h2>Frequently Asked Questions About BB Lights</h2>
            
            <div class="faq-grid">
                <div class="faq-item-detailed">
                    <h4>Are BB Lights significantly weaker than Full Flavor?</h4>
                    <p>BB Lights are designed to have reduced strength and intensity compared to Full Flavor, but they are not "weak" in terms of satisfaction. They offer a balanced smoke that is satisfying without being harsh. Most smokers find them to be a perfect middle ground.</p>
                </div>

                <div class="faq-item-detailed">
                    <h4>Do BB Lights use different tobacco?</h4>
                    <p>BB Lights use the same premium grade Virginia and Burley tobaccos as our other lines, but the specific blend ratio is adjusted to favor the milder leaves, and the filter technology is different to ensure a lighter draw.</p>
                </div>

                <div class="faq-item-detailed">
                    <h4>Where can I find BB Lights?</h4>
                    <p>BB Lights are widely available across Canada. You can buy them at most smoke shops, convenience stores, and specifically online at <a href="https://1smokes.ca/bb-lights-cigarettes/">1Smokes.ca</a> where you can find excellent deals on cartons.</p>
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
                    <p><strong>Tobacco Use Is Harmful:</strong> Smoking cigarettes, including BB Lights, causes serious health issues. "Lights" descriptions refer to taste and flavor, not reduced health risk. All cigarettes are harmful.</p>
                    
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
                    <p>Experience the bold, robust original taste of BB.</p>
                    <a href="<?php echo home_url('/bb-full-flavor/'); ?>" class="btn btn-outline">View Full Flavor</a>
                </div>

                <div class="related-product-card">
                    <div class="related-product-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/menthol-pack.png" alt="BB Menthol Cigarettes">
                    </div>
                    <h3><a href="<?php echo home_url('/bb-menthol/'); ?>">BB Menthol</a></h3>
                    <p>Cooling mint freshness meets premium tobacco.</p>
                    <a href="<?php echo home_url('/bb-menthol/'); ?>" class="btn btn-outline">View BB Menthol</a>
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
