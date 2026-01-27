<?php
// Base URL helper (works on both localhost subfolder and production domain)
// Localhost expected path: http://localhost/jalwaloginco
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$basePath = '';

if ($host === 'localhost' || $host === '127.0.0.1') {
    $basePath = '/jalwaloginco';
}

$BASE_URL = $scheme . '://' . $host . $basePath;
?>

<header id="myheader" class="myheader">
    <div class="container">
        <div class="row">
            <div class="nav__data">
                <div class="main-logo">
                    <a href="<?php echo $BASE_URL; ?>/"><img src="<?php echo $BASE_URL; ?>/assets/image/Jalwa game login logo.webp" alt="Jalwa game login"></a>
                </div>

                <div class="nav__menu" id="nav__menu">
                    <ul class="menu-list">

                        <li class="menu-link">
                            <a href="#" class="services-toggle">How to <i class="ri-arrow-down-s-fill"></i></a>
                            <ul class="sunmenu">
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/deposit-money/" target="_blank" rel="nofollow noopener noreferrer">Deposit Money</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/withdraw-money/" target="_blank" rel="nofollow noopener noreferrer">Withdraw Money</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/change-bank-account/" target="_blank" rel="nofollow noopener noreferrer">Change Bank Account</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/remove-bank-account/" target="_blank" rel="nofollow noopener noreferrer">Remove Bank Account</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/reset-account-password/" target="_blank" rel="nofollow noopener noreferrer">Reset Account Password</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/unlock-account/" target="_blank" rel="nofollow noopener noreferrer">Unlock Account</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/change-language/" target="_blank" rel="nofollow noopener noreferrer">Change Language</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/find-game-id/" target="_blank" rel="nofollow noopener noreferrer">Find Game ID</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/free-recharge-guide/" target="_blank" rel="nofollow noopener noreferrer">Free Recharge Guide</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/vip-levels/" target="_blank" rel="nofollow noopener noreferrer">VIP Levels</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/winning-tricks/" target="_blank" rel="nofollow noopener noreferrer">Winning Tricks</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/mistakes-to-avoid/" target="_blank" rel="nofollow noopener noreferrer">Mistakes to Avoid</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/available-bonuses/" target="_blank" rel="nofollow noopener noreferrer">Available Bonuses</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/become-agent/" target="_blank" rel="nofollow noopener noreferrer">Become Agent</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/colour-prediction-games-guide/" target="_blank" rel="nofollow noopener noreferrer">Colour Prediction Guide</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/errors-and-solutions/" target="_blank" rel="nofollow noopener noreferrer">Errors and Solutions</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/play-responsibly-guide/" target="_blank" rel="nofollow noopener noreferrer">Play Responsibly Guide</a></li>
                                
                            </ul>
                        </li>

                        <li class="menu-link"><a href="<?php echo $BASE_URL; ?>/responsible-gaming/" target="_blank" rel="nofollow noopener noreferrer">Responsible Gaming</a></li>
                        <li class="menu-link"><a href="<?php echo $BASE_URL; ?>/contact-us/" target="_blank" rel="nofollow noopener noreferrer">Contact Us</a></li>
                        <li class="menu-link"><a href="<?php echo $BASE_URL; ?>/about-us/" target="_blank" rel="nofollow noopener noreferrer">About Us</a></li>
                    </ul>
                </div>

                <div class="cta-buttonss">
                    <a href="https://jalwaclub3.com/#/register?invitationCode=217876380398" class="btnshead register-btn" target="_blank" rel="nofollow noopener noreferrer">® Register</a>
                    <a href="https://jalwaclub3.com/#/login" class="btnshead login-btn" target="_blank" rel="nofollow noopener noreferrer">🔒 Login</a>
                </div>

                <div class="nav__toggle" id="nav__toggle">
                    <i class="ri-menu-3-line pizza"></i>
                    <i class="ri-close-line close"></i>
                </div>
            </div>
        </div>
    </div>
</header>
