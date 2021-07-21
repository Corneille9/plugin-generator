<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Plugin Genenator</title>
    <link rel="icon" type="image/png" sizes="738x238" href="assets/img/PageIcon.png">
    <link rel="icon" type="image/png" sizes="738x238" href="assets/img/PageIcon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>

<body style="background-color: #ddecf8;">
<div class="register-photo" style="padding-top: 10px;background-color: rgb(221,236,248);"><img <?php if(empty($error)) { ?> data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="800"<?php } ?> src="assets/img/logo.png" style="height: 70px;margin-top: 10px;margin-left: 50px;" alt="Orion Origin">
    <div class="border rounded shadow-lg form-container" style="max-width: 1300px;min-height: 600px;margin-top: 40px;">
        <div <?php if(empty($error)) { ?> data-aos="zoom-in-up" data-aos-duration="800" data-aos-delay="600" <?php } ?> class="image-holder" style="width: 200px;"></div>
        <form class="text-center" <?php if(empty($error)) { ?> data-aos="zoom-in-down" data-aos-duration="800" data-aos-delay="600" <?php } ?> method="post" style="background-color: #0d2145;">
            <h2 class="text-nowrap text-center text-white" <?php if(empty($error)) { ?> data-aos="fade-down" data-aos-duration="850" data-aos-delay="850" <?php } ?> style="margin-bottom: 60px;font-size: 30px;"><strong>PLUGIN GENERATOR</strong></h2>
            <header style="font-weight: bold;">
                <?php if(!empty($error)) { ?><p style="font-weight: bold;color: rgb(255,38,38);font-size:large" data-aos="fade-left" data-aos-duration="900" data-aos-delay="900"><?php echo $error;?></p><?php } ?>
            </header>
            <div class="form-row" style="margin-bottom: 10px;">
                <div class="col" <?php if(empty($error)) { ?> data-aos="fade-right" data-aos-duration="900" data-aos-delay="900" <?php } ?>>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-plug" style="font-size: 15px;opacity: 1;color: #0d2145;"></i></span></div><input class="form-control" type="text" placeholder="Plugin Name" name="plugin_name" value="<?php echo $plugin_name;?>" style="color: #0d2145;font-weight: bold;"></div>
                </div>
                <div class="col" <?php if(empty($error)) { ?> data-aos="fade-left" data-aos-duration="900" data-aos-delay="900" <?php } ?>>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="material-icons" style="font-size: 15px;color: #0d2145;">polymer</i></span></div><input class="form-control" type="text" placeholder="Plugin Slut" name="plugin_slut" value="<?php echo $plugin_slut;?>" style="color: #0d2145;font-weight: bold;"></div>
                </div>
            </div>
            <div class="form-row" style="margin-bottom: 10px;">
                <div class="col" <?php if(empty($error)) { ?> data-aos="zoom-in" data-aos-duration="950" data-aos-delay="950" <?php } ?>>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-link" style="font-size: 15px;color: #0d2145;"></i></span></div><input class="form-control" type="text" placeholder="Plugin Uri" name="plugin_uri" value="<?php echo $plugin_uri;?>" style="color: #0d2145;font-weight: bold;"></div>
                </div>
            </div>
            <div class="form-row" style="margin-bottom: 10px;">
                <div class="col" <?php if(empty($error)) { ?> data-aos="fade-right" data-aos-duration="900" data-aos-delay="900" <?php } ?>>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text" style="width: 43px;color: #0d2145;"><i class="fa fa-user" style="font-size: 19px;"></i></span></div><input class="form-control" type="text" placeholder="Author Name" name="author" value="<?php echo $author;?>" style="color: #0d2145;font-weight: bold;"></div>
                </div>
                <div class="col" <?php if(empty($error)) { ?> data-aos="fade-left" data-aos-duration="900" data-aos-delay="900" <?php } ?>>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-envelope" style="font-size: 15px;color: #0d2145;"></i></span></div><input class="form-control" type="email" placeholder="Author Email" name="email" value="<?php echo $email;?>" style="color: #0d2145;font-weight: bold;"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col" <?php if(empty($error)) { ?> data-aos="zoom-in" data-aos-duration="950" data-aos-delay="950" <?php } ?>>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-link" style="font-size: 15px;color: #0d2145;"></i></span></div><input class="form-control" type="text" placeholder="Author Uri" name="author_uri" value="<?php echo $author_uri;?>" style="color: #0d2145;font-weight: bold;"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-8 m-auto" <?php if(empty($error)) { ?> data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000" <?php } ?>><button class="btn btn-primary btn-block btn-lg text-center bg-info" type="submit" style="font-weight: bold;border-radius: 10px;font-size: 23px;background-color: rgba(7,89,248,0.99);padding: 10px;padding-top: 9px;" name="generate">Build plugin</button></div>
            </div>
        </form>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="assets/js/aos.js"></script>
</body>

</html>