<?php
/**
 * Template Name: BB Full Flavor Product Page
 */

get_header(); ?>

<style>
/* EMERGENCY CACHE BYPASS - FORCING LUXURY DARK THEME */
:root {
    --luxury-charcoal: #1A1A1A !important;
    --luxury-off-white: #F9F7F2 !important;
    --luxury-gold: #D4AF37 !important;
}
body, .product-page {
    background-color: #1A1A1A !important;
    background: #1A1A1A !important;
    color: #F9F7F2 !important;
}
.c-anchor-nav {
    background: #1A1A1A !important;
    border-bottom: 1px solid rgba(255,255,255,0.1) !important;
}
.c-anchor-nav__list {
    display: flex !important;
    flex-direction: row !important;
    list-style: none !important;
    justify-content: center !important;
    gap: 2rem !important;
    padding: 0 !important;
}
.c-anchor-nav__list li { list-style: none !important; margin: 0 !important; }
.c-hero { background: #1A1A1A !important; padding-top: 100px !important; }
.c-hero__grid {
    display: grid !important;
    grid-template-columns: 1.2fr 1fr !important;
    gap: 4rem !important;
    align-items: center !important;
}
h1, h2, h3 { color: #D4AF37 !important; font-family: 'Playfair Display', serif !important; }
h1 { letter-spacing: -0.02em !important; font-size: 3.5rem !important; }
@media (max-width: 992px) {
    .c-hero__grid { grid-template-columns: 1fr !important; text-align: center !important; }
    .c-anchor-nav { display: none !important; }
}
</style>

<?php
// SEO: Schema.org Product & FAQ Markup
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "BB Full Flavor Cigarettes",
  "image": "<?php echo get_template_directory_uri(); ?>/images/full-flavor-pack.png",
  "description": "Premium full-flavor cigarettes with a robust Virginia and Burley tobacco blend.",
  "brand": {
    "@type": "Brand",
    "name": "BB"
  },
  "offers": {
    "@type": "Offer",
    "url": "<?php echo get_permalink(); ?>",
    "priceCurrency": "CAD",
    "price": "37.00",
    "availability": "https://schema.org/InStock"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Where are BB Cigarettes manufactured?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Manufactured in state-of-the-art facilities following strict Canadian quality controls."
    }
  }, {
    "@type": "Question",
    "name": "What makes Full Flavor different from Lights?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Full Flavor uses a higher ratio of Burley tobacco and a more open filter for maximum intensity."
    }
  }]
}
</script>
<?php ?>

<main id="main-content" class="site-main product-page">

    <!-- A. STICKY TOP BAR (Regulatory/Health) -->
    <div class="c-top-bar" role="complementary">
        <div class="container">
            <div class="c-top-bar__inner">
                <span class="c-top-bar__warning">⚠️ HEALTH WARNING: Tobacco smoke contains over 70 chemicals that cause cancer.</span>
                <span class="c-top-bar__shipping">Free Shipping on Orders Over $200 across Canada</span>
            </div>
        </div>
    </div>

    <!-- B. PRODUCT ANCHOR NAV -->
    <nav class="c-anchor-nav" aria-label="Product Page Navigation">
        <div class="container">
            <ul class="c-anchor-nav__list">
                <li><a href="#overview">Overview</a></li>
                <li><a href="#specs">Specs</a></li>
                <li><a href="#notes">Notes</a></li>
                <li><a href="#compare">Compare</a></li>
                <li><a href="#buy">How to Buy</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
        </div>
    </nav>

    <!-- C. HERO (Conversion Focused) -->
    <section id="overview" class="c-section c-hero">
        <div class="container">
            <div class="c-hero__grid">
                <div class="c-hero__content">
                    <span class="c-badge c-badge--gold">Flagship Variant</span>
                    <h1 class="c-hero__title">BB Full Flavor Cigarettes</h1>
                    <p class="c-hero__subheadline">Bold, robust, and unapologetically classic. The definitive choice for the discerning smoker seeking a premium experience.</p>
                    
                    <div class="c-hero__chips">
                        <span class="c-chip">Full Strength</span>
                        <span class="c-chip">Robust Blend</span>
                        <span class="c-chip">Precision Burn</span>
                    </div>

                    <div class="c-hero__trust">
                        <span class="c-trust-icon">✓ Premium Leaf</span>
                        <span class="c-trust-icon">✓ Canadian Quality</span>
                    </div>

                    <div class="c-hero__pricing">
                        <span class="c-price">From $37.00 <small>per carton</small></span>
                    </div>

                    <div class="c-hero__actions">
                        <a href="https://1smokes.ca/bb-cigarettes-online/" class="c-btn c-btn--gold">Buy BB Full Flavor</a>
                        <a href="#specs" class="c-btn c-btn--outline">Detailed Specs</a>
                    </div>
                </div>

                <div class="c-hero__visual">
                    <div class="c-hero__image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/full-flavor-pack.png" class="c-hero__main-img" alt="BB Full Flavor Cigarettes Pack">
                        <div class="c-spec-card">
                            <h4 class="c-spec-card__title">Quick Specs</h4>
                            <ul class="c-spec-card__list">
                                <li><span>Strength:</span> <strong>Full</strong></li>
                                <li><span>Aroma:</span> <strong>Robust</strong></li>
                                <li><span>Size:</span> <strong>King Size</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- D. AT A GLANCE -->
    <section class="c-section c-glance">
        <div class="container">
            <div class="c-grid c-grid--3-col">
                <div class="c-card c-card--glance">
                    <h3 class="c-card__title">Bold Profile</h3>
                    <p>A deep, uncompromising tobacco character that delivers a consistent, satisfying draw.</p>
                </div>
                <div class="c-card c-card--glance">
                    <h3 class="c-card__title">Artisan Blend</h3>
                    <p>Carefully selected Virginia and Burley leaves, aged to perfection for a smooth finish.</p>
                </div>
                <div class="c-card c-card--glance">
                    <h3 class="c-card__title">Precision Crafted</h3>
                    <p>Engineered filters and high-grade paper for an even burn from start to finish.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- E. SPECS & BLEND (Interactive) -->
    <section id="specs" class="c-section c-specs">
        <div class="container">
            <h2 class="c-section-title">Technical Specifications</h2>
            <div class="c-tabs">
                <div class="c-tabs__nav">
                    <button class="c-tabs__btn is-active" data-tab="tab-specs">Detailed Specs</button>
                    <button class="c-tabs__btn" data-tab="tab-blend">Tobacco Blend</button>
                </div>
                <div class="c-tabs__content">
                    <div id="tab-specs" class="c-tabs__pane is-active">
                        <table class="c-table">
                            <tr><td>Strength</td><td>Full-Bodied / Robust</td></tr>
                            <tr><td>Pack Size</td><td>20 Premium Cigarettes</td></tr>
                            <tr><td>Carton Size</td><td>10 Packs (200 Total)</td></tr>
                            <tr><td>Filter</td><td>Acetate High-Flow Filter</td></tr>
                            <tr><td>Dimensions</td><td>84mm King Size</td></tr>
                        </table>
                    </div>
                    <div id="tab-blend" class="c-tabs__pane">
                        <p>The BB Full Flavor blend is a refined composition of premium flue-cured Virginia tobacco and air-cured Burley. This specific ratio provides the bright sweetness of Virginia balanced by the robust, earthy notes of Burley, creating a signature profile that is both powerful and smooth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- F. SMOKING NOTES -->
    <section id="notes" class="c-section c-notes">
        <div class="container">
            <h2 class="c-section-title">The Experience</h2>
            <div class="c-grid c-grid--2x2">
                <div class="c-note">
                    <div class="c-note__icon">🍂</div>
                    <div class="c-note__body">
                        <h4>Rich Aroma</h4>
                        <p>A warm, classic tobacco scent with subtle hints of natural sweetness.</p>
                    </div>
                </div>
                <div class="c-note">
                    <div class="c-note__icon">💨</div>
                    <div class="c-note__body">
                        <h4>Effortless Draw</h4>
                        <p>Engineered for low resistance, ensuring a smooth and voluminous smoke.</p>
                    </div>
                </div>
                <div class="c-note">
                    <div class="c-note__icon">⚖️</div>
                    <div class="c-note__body">
                        <h4>Steady Burn</h4>
                        <p>Slow-burning paper provides a long-lasting, consistent smoking session.</p>
                    </div>
                </div>
                <div class="c-note">
                    <div class="c-note__icon">🍮</div>
                    <div class="c-note__body">
                        <h4>Clean Finish</h4>
                        <p>A crisp aftertaste that underscores the high quality of the leaf selection.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- G. VALUE PROPS (Why Choose...) -->
    <section class="c-section c-values">
        <div class="container">
            <h2 class="c-section-title">Why Choose BB Full Flavor</h2>
            <div class="c-grid c-grid--3-col">
                <div class="c-value-card">
                    <h4>Luxury Quality</h4>
                    <p>We use leaf grades usually reserved for much more expensive boutique brands.</p>
                </div>
                <div class="c-value-card">
                    <h4>Direct Value</h4>
                    <p>By shortening the supply chain, we offer premium luxury at a direct-to-consumer price.</p>
                </div>
                <div class="c-value-card">
                    <h4>Canadian Trust</h4>
                    <p>Compliant with all federal standards, ensuring safety and legality at every step.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- H. COMPARISON -->
    <section id="compare" class="c-section c-compare">
        <div class="container">
            <h2 class="c-section-title">Find Your Perfect Match</h2>
            <div class="c-compare__table-wrapper">
                <table class="c-compare-table">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th class="is-current">BB Full Flavor</th>
                            <th>BB Lights</th>
                            <th>BB Menthol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tobacco Profile</td>
                            <td class="is-current">Robust / Bold</td>
                            <td>Refined / Mellow</td>
                            <td>Minty / Fresh</td>
                        </tr>
                        <tr>
                            <td>Strength</td>
                            <td class="is-current">Full (10/10)</td>
                            <td>Light (6/10)</td>
                            <td>Medium (7/10)</td>
                        </tr>
                        <tr>
                            <td>Best For</td>
                            <td class="is-current">Experienced Smokers</td>
                            <td>Moderate Smokers</td>
                            <td>Refreshing Change</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- I. HOW TO BUY (Stepper) -->
    <section id="buy" class="c-section c-buy">
        <div class="container">
            <h2 class="c-section-title">How to Order</h2>
            <div class="c-stepper">
                <div class="c-step">
                    <span class="c-step__num">01</span>
                    <h4>Age Verification</h4>
                    <p>Confirm your legal status through our secure age-gate.</p>
                </div>
                <div class="c-step">
                    <span class="c-step__num">02</span>
                    <h4>Select Quantity</h4>
                    <p>Choose between single packs or value cartons.</p>
                </div>
                <div class="c-step">
                    <span class="c-step__num">03</span>
                    <h4>Secure Checkout</h4>
                    <p>Safe processing via automated partner platforms.</p>
                </div>
                <div class="c-step">
                    <span class="c-step__num">04</span>
                    <h4>Quick Delivery</h4>
                    <p>Discreet shipping to your Canadian address.</p>
                </div>
            </div>
            
            <div class="c-notice-box">
                <h4>Shipping & Compliance</h4>
                <ul>
                    <li>Shipments require adult signature upon delivery.</li>
                    <li>Compliant with Provincial tobacco acts across Canada.</li>
                    <li>Estimated shipping: 3-5 business days.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- J. FAQ -->
    <section id="faq" class="c-section c-faq">
        <div class="container">
            <h2 class="c-section-title">Frequently Asked Questions</h2>
            <div class="c-accordion">
                <div class="c-accordion__item">
                    <button class="c-accordion__trigger">Where are BB Cigarettes manufactured?</button>
                    <div class="c-accordion__content"><p>Manufactured in state-of-the-art facilities following strict Canadian quality controls.</p></div>
                </div>
                <div class="c-accordion__item">
                    <button class="c-accordion__trigger">What makes "Full Flavor" different from "Lights"?</button>
                    <div class="c-accordion__content"><p>Full Flavor uses a higher ratio of Burley tobacco and a more open filter for maximum intensity.</p></div>
                </div>
            </div>
            <div class="c-faq__support">
                <p>Still have questions? Our support team is ready to assist.</p>
                <a href="/contact" class="c-btn c-btn--outline">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- K. RELATED VARIANTS -->
    <section class="c-section c-variants">
        <div class="container">
            <h2 class="c-section-title">Explore Other Varieties</h2>
            <div class="c-grid c-grid--2-col">
                <div class="c-product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/lights-pack.png" alt="BB Lights">
                    <h3>BB Lights</h3>
                    <p>Smooth and refined for a lighter experience.</p>
                    <a href="/bb-lights" class="c-btn c-btn--gold">View Lights</a>
                </div>
                <div class="c-product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/menthol-pack.png" alt="BB Menthol">
                    <h3>BB Menthol</h3>
                    <p>A cooling blend of tobacco and fresh mint.</p>
                    <a href="/bb-menthol" class="c-btn c-btn--gold">View Menthol</a>
                </div>
            </div>
        </div>
    </section>

    <!-- STICKY MOBILE CTA -->
    <div class="c-sticky-cta" id="mobileStickyCTA">
        <span class="c-sticky-cta__price">$37.00 / carton</span>
        <a href="https://1smokes.ca/bb-cigarettes-online/" class="c-btn c-btn--gold">Order Now</a>
    </div>

</main>

<?php get_footer(); ?>
