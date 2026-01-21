<?php
// Ensure $BASE_URL exists even if footer.php is used without header.php
if (!isset($BASE_URL)) {
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $basePath = '';
    if ($host === 'localhost' || $host === '127.0.0.1') {
        $basePath = '/jalwaloginco';
    }
    $BASE_URL = $scheme . '://' . $host . $basePath;
}
?>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>Legal</h3>
            <ul>
                <li><a href="<?php echo $BASE_URL; ?>/about-us/">About Us</a></li>
                <li><a href="<?php echo $BASE_URL; ?>/responsible-gaming/">Responsible Gaming</a></li>
                <li><a href="<?php echo $BASE_URL; ?>/privacy-policy/">Privacy Policy</a></li>
                <li><a href="<?php echo $BASE_URL; ?>/terms-conditions/">Terms &amp; Conditions</a></li>
                <li><a href="<?php echo $BASE_URL; ?>/disclaimer/">Disclaimer</a></li>
                <li><a href="<?php echo $BASE_URL; ?>/contact-us/">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Support</h3>
            <p>24/7 Customer Support Available</p>
            <p>Email: <a href="mailto:info@jalwalogin.co">info@jalwalogin.co</a></p>
        </div>
        <div class="footer-section">
            <h3>About Us</h3>
            <p>
                Jalwa login is your trusted platform for online gaming and
                entertainment, offering a wide range of games and opportunities.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-bottom">
                    <p class="copy-right">© 2025, <a href="<?php echo $BASE_URL; ?>/">Jalwa login</a> All rights
                        reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>