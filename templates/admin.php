<?php
    require_once "curl-purge.php";

    if (isset($_POST['all'])) {
        $message = request();
    }
    
    if (isset($_POST['file']) && isset($_POST['url'])) {
        $message = request($_POST['url']);
    }

?>

<div class="wrap">

    <h1>Clean PageSpeed Cache</h1>
    <?php settings_errors(); ?>

    <form method="POST">
        <div id="url-container">
            <div class="options">
                <p>
                    <label>URL</label>
                    <br />
                    <input class="regular-text" type="text" name="url">
                </p>
            </div>
        </div><!-- #url-container -->
        <p> <?php if (isset($message)) echo $message; ?> </p>
        <button class="button button-primary" type="submit" name="file">Clean Specific File</button>
        <button class="button button-primary" type="submit" name="all">Clean All Cache</button>
    </form>

</div>
