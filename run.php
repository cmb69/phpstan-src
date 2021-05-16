<?php

// run command
// phpw . -d disable_functions= run.php

$runPhpStanWithTracing = function(string $resPath, bool $withOpcache) {
    if (is_file($resPath . '.xt')) {
        unlink($resPath . '.xt');
    }

    passthru('cd "' . __DIR__ . '/ui' . '" & phpw .. ../bin/phpstan clear-result-cache');

    $cmd = 'cd "' . __DIR__ . '/ui' . '" & phpw .. 1GB --with-xdebug'
        . ' -d opcache.enable=' . ($withOpcache ? 1 : 0)
        . ' -d xdebug.auto_trace=1'
        . ' -d xdebug.collect_params=3'
        . ' -d xdebug.collect_return=1'
        . ' -d xdebug.var_display_max_depth=0'
        . ' -d xdebug.trace_output_dir="' . __DIR__ . '"'
        . ' -d xdebug.trace_output_name="' . basename($resPath) . '"'
        . ' ../bin/phpstan analyse'; //--xdebug --debug --verbose
    echo '----- running:' . "\n" . $cmd . "\n";
    $t = microtime(true);
    passthru($cmd);
    echo '----- finished in: ' . (microtime(true) - $t)  . " seconds\n\n";
};

$runPhpStanWithTracing(__DIR__ . '/t_c0', false); // discard first run

$runPhpStanWithTracing(__DIR__ . '/t_c0', false);
$runPhpStanWithTracing(__DIR__ . '/t_c1', true);

$runPhpStanWithTracing(__DIR__ . '/t_c0_2nd', false);
$runPhpStanWithTracing(__DIR__ . '/t_c1_2nd', true);
