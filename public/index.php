<?php

/*
 * --------------------------------------------------------------------------
 * Register auto loaders
 * --------------------------------------------------------------------------
 *
 * Add registered class loaders required for our application.
 *
 */

require __DIR__ . '/../bootstrap/autoload.php';

/*
 * --------------------------------------------------------------------------
 * Initialize SideKit library
 * --------------------------------------------------------------------------
 *
 * This step is required *prior* adding the application script.
 *
 */

require __DIR__ . '/../bootstrap/sidekit.php';

/*
 * --------------------------------------------------------------------------
 * Initialize custom aliases
 * --------------------------------------------------------------------------
 *
 * Add custom aliases to the application. Added after sidekit to take
 * advantage of its loaded configuration values
 */

require __DIR__ . '/../bootstrap/aliases.php';

/*
 * --------------------------------------------------------------------------
 * Configure and Go!
 * --------------------------------------------------------------------------
 *
 * Bootstrap the configuration processes and get and Application ready to use.
 * Applying configuration details in a different file allow us to free up
 * unnecessary code on the entry script.
 */

$app = require __DIR__ . '/../bootstrap/web.php';

$app->run();
