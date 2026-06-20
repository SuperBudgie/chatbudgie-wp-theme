  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        <div>
          <a class="logo footer-logo" href="/" style="margin-bottom: 14px; display:inline-flex;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-full.png" alt="ChatBudgie" />
          </a>
          <p><?php esc_html_e( 'Smart Chat - Real Connection.', 'chatbudgie' ); ?></p>
        </div>
        <div>
          <h4><?php esc_html_e( 'Navigation', 'chatbudgie' ); ?></h4>
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'primary',
              'container'      => false,
              'menu_class'     => 'footer-menu',
              'fallback_cb'    => false,
            )
          );
          ?>
        </div>
        <div>
          <h4><?php esc_html_e( 'Legal', 'chatbudgie' ); ?></h4>
          <ul>
            <li><a href="/privacy-policy/"><?php esc_html_e( 'Privacy Policy', 'chatbudgie' ); ?></a></li>
            <li><a href="/terms-of-service/"><?php esc_html_e( 'Terms of Service', 'chatbudgie' ); ?></a></li>
          </ul>
        </div>
        <div>
          <h4><?php esc_html_e( 'Contact', 'chatbudgie' ); ?></h4>
          <ul>
            <li><a href="mailto:support@superbudgie.com">support@superbudgie.com</a></li>
            <li><?php esc_html_e( 'Supported by SuperBudgie.', 'chatbudgie' ); ?></li>
          </ul>
        </div>
      </div>
      <div class="copyright"><?php esc_html_e( '© 2026 ChatBudgie. All rights reserved.', 'chatbudgie' ); ?></div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>

  </html>
