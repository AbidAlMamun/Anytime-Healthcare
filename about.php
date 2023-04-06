<?php

/**
 * Can access direcly by URL
 */

define("_DIRECT_ACCESS", true);

require_once dirname(__FILE__) . "/helper/functions.php";

header_section("About Group 09");

?>

<main class="container py-2 my-3 border">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">About Us</h1>
        </div>
    </div>

    <hr>

    <div class="row d-flex justify-content-center align-items-center">
        <div class="row">

            <?php if (_get_is_logged_in()) side_menu(); ?>

            <div class="col-md-<?php echo _get_is_logged_in() ? "9" : "12"; ?> col-lg-<?php echo _get_is_logged_in() ? "9" : "7"; ?> m-auto">
                <div class="table-responsive">
                    <table class="table table-<?php echo _CONFIG['THEME_COLOR']; ?> table-striped min-width-400px">
                        <thead class="table-dark ?>">
                            <tr>
                                <th>Name (Bracu style)</th>
                                <th>ID (Bracu)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Abid Al Mamun</td>
                                <td>19301066</td>
                            </tr>                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</main>

<?php footer_section(); ?>