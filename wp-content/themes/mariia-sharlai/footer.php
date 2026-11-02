<?php
if (!defined('ABSPATH')) {
    exit;
}
$home = trailingslashit(home_url('/'));
?>
  </main>
  <footer class="site-footer">
    <div class="footer-grid">
      <div class="footer-brand stack">
        <span class="h"><span class="w1">Mariia</span> <span class="w2">Sharlai</span></span>
        <p class="sub" style="font-size:15px">Dance classes in Tampere.<br>DanceDaily, Satakunnankatu 29, 33210 Tampere</p>
      </div>
      <div>
        <p class="meta">Groups</p>
        <a href="<?php echo esc_url($home . 'mini-dance/'); ?>">Mini</a>
        <a href="<?php echo esc_url($home . 'commercial-dance-for-kids/'); ?>">Kids</a>
        <a href="<?php echo esc_url($home . 'k-pop-course/'); ?>">K-Pop</a>
        <a href="<?php echo esc_url($home . 'faq/'); ?>">FAQ</a>
      </div>
      <div>
        <p class="meta">Contact</p>
        <a href="mailto:mariiasharlai@gmail.com">mariiasharlai@gmail.com</a>
        <a href="https://wa.me/358408574850">WhatsApp</a>
        <a href="https://t.me/+358408574850">Telegram</a>
        <a href="<?php echo esc_url($home . '#contact'); ?>">Studio</a>
      </div>
      <div>
        <p class="meta">Social</p>
        <a href="https://www.facebook.com/profile.php?id=100089243650656">Facebook</a>
        <a href="https://www.instagram.com/mariiasharlai_dance">Instagram</a>
        <a href="https://www.tiktok.com/@dance.sharlai">TikTok</a>
        <a href="<?php echo esc_url($home . 'privacy-policy/'); ?>">Privacy policy</a>
        <a href="<?php echo esc_url($home . 'terms-of-sale/'); ?>">Terms of sale</a>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; 2026 Mariia Sharlai, toiminimi, Y-tunnus 3554803-3</span>
      <span class="lang">EN</span>
    </div>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
