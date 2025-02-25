
<?php include("./includes/header.php"); ?>
<section class="error-page section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1><?php echo $_SERVER['REDIRECT_STATUS']; ?></h1>
                <h2>Oops! Something went wrong</h2>
                <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                <a href="<?php echo BASE_URL; ?>" class="theme-btn">Back to Homepage</a>
            </div>
        </div>
    </div>
</section>
<?php include("./includes/footer.php"); ?>
