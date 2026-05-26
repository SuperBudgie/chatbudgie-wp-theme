<?php get_header(); ?>

  <main>
    <section class="section hero">
      <div class="container two-col">
        <div>
          <div class="eyebrow">✦ AI Chatbot for WordPress</div>
          <h1>Add a Smart AI Chatbot to Your <span class="accent">WordPress</span> Site</h1>
          <p class="lead">ChatBudgie uses RAG technology to answer users based on your website content. Easy to use, private by design, and built for WordPress.</p>
          <div class="actions">
            <a href="https://github.com/SuperBudgie/chatbudgie-wp-plugin/releases/download/v1.1.0-beta/chatbudgie.zip" class="btn btn-primary"><span class="btn-symbol"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wordpress.svg" alt="WordPress logo"></span>Download Plugin</a>
            <a href="https://github.com/SuperBudgie/chatbudgie-wp-plugin" target="_blank" rel="noreferrer" class="btn btn-secondary">
              <span class="btn-symbol">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M12 .5a12 12 0 0 0-3.79 23.39c.6.11.82-.26.82-.58v-2.03c-3.34.73-4.04-1.41-4.04-1.41-.55-1.39-1.34-1.76-1.34-1.76-1.09-.75.08-.74.08-.74 1.2.08 1.84 1.24 1.84 1.24 1.07 1.83 2.81 1.3 3.49.99.11-.78.42-1.3.76-1.6-2.67-.3-5.47-1.33-5.47-5.92 0-1.31.47-2.38 1.24-3.22-.12-.3-.54-1.52.12-3.18 0 0 1.01-.32 3.3 1.23a11.5 11.5 0 0 1 6.01 0c2.29-1.55 3.3-1.23 3.3-1.23.66 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.6-2.81 5.61-5.48 5.91.43.37.81 1.1.81 2.22v3.29c0 .32.22.7.83.58A12 12 0 0 0 12 .5Z"/>
                </svg>
              </span>
              View on GitHub
            </a>
          </div>
        </div>
        <div class="art"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-chatbudgie.png" alt="ChatBudgie chatbot interface with blue budgie mascot" /></div>
      </div>
    </section>

    <section id="features" class="section feature feature-blue">
      <div class="container two-col">
        <div class="feature-intro">
          <div class="eyebrow">Feature</div>
          <h2>Smart Chat</h2>
          <p class="lead">Answers from your content, not the internet.</p>
          <p class="desc">ChatBudgie understands your website content using RAG technology and gives accurate, context-aware answers to your visitors.</p>
        </div>
        <div class="art"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/rag-flow.png" alt="RAG content flow illustration" /></div>
      </div>
    </section>

    <section id="how-it-works" class="section feature feature-green">
      <div class="container two-col">
        <div class="feature-intro">
          <div class="eyebrow green">Feature</div>
          <h2>Easy to Setup</h2>
          <p class="lead">Get started in just a few minutes.</p>
          <p class="desc">Don't need to set up various API keys. ChatBudgie will manage it for you.</p>
        </div>
        <div class="art"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/setup-steps.png" alt="Three step setup process illustration" /></div>
      </div>
    </section>

    <section class="section feature feature-purple">
      <div class="container two-col">
        <div class="feature-intro">
          <div class="eyebrow purple">Feature</div>
          <h2>Zero Maintenance</h2>
          <p class="lead">Set it up and let it work for you.</p>
          <p class="desc">ChatBudgie automatically keeps your knowledge base up to date. No manual work, no server management, no headaches.</p>
        </div>
        <div class="art"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/zero-maintenance.png" alt="Blue budgie mascot with automatic updates, indexing, and AI model selection" /></div>
      </div>
    </section>

    <section id="pricing" class="section pricing">
      <div class="container">
        <div class="pricing-head">
          <div class="eyebrow">Pricing</div>
          <h2>Simple, Transparent Pricing</h2>
          <p class="lead">Choose the token package that fits your needs. One-time purchase, no monthly fees.</p>
        </div>

        <div class="pricing-grid">
          <article class="price-card">
            <div class="price-content">
              <div class="token">5M Tokens</div>
              <div class="one-time">One-time purchase</div>
              <div class="old-price">$5</div>
              <div class="new-price">$4.95</div>
              <div class="price-note">For light usage</div>
              <ul class="features-list">
                <li><span class="check">✓</span>5 million tokens</li>
                <li><span class="check">✓</span>One-time payment</li>
                <li><span class="check">✓</span>No expiration</li>
              </ul>
            </div>
          </article>

          <article class="price-card">
            <div class="price-content">
              <div class="token">20M Tokens</div>
              <div class="one-time">One-time purchase</div>
              <div class="old-price">$20</div>
              <div class="new-price">$19.50</div>
              <div class="price-note">For growing sites</div>
              <ul class="features-list">
                <li><span class="check">✓</span>20 million tokens</li>
                <li><span class="check">✓</span>One-time payment</li>
                <li><span class="check">✓</span>No expiration</li>
              </ul>
            </div>
          </article>

          <article class="price-card featured">
            <div class="ribbon">★ Best Value</div>
            <div class="price-content">
              <div class="token">100M Tokens</div>
              <div class="one-time">One-time purchase</div>
              <div class="old-price">$100</div>
              <div class="new-price">$95</div>
              <div class="price-note">Best value</div>
              <ul class="features-list">
                <li><span class="check">✓</span>100 million tokens</li>
                <li><span class="check">✓</span>One-time payment</li>
                <li><span class="check">✓</span>No expiration</li>
              </ul>
              <!-- <a class="btn btn-primary" href="#">Buy Now</a> -->
            </div>
          </article>
        </div>
    </section>

    <section class="cta-banner">
      <div class="wp-emblem" aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wordpress.svg" alt="WordPress logo"></div>
      <div class="cta-copy">
        <h3>Ready to Add AI to Your Website?</h3>
        <p>Enhance support, engage visitors, and grow your business with ChatBudgie.</p>
      </div>
      <a href="https://github.com/SuperBudgie/chatbudgie-wp-plugin/releases/download/v1.1.0-beta/chatbudgie.zip" class="btn"><span class="btn-symbol"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/wordpress.svg" alt="WordPress logo"></span>Download Plugin</a>
    </section>
  </main>

<?php get_footer(); ?>
