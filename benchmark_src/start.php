<?php

define('BENCHMARK_TIME_DATA', 'BENCHMARK_TIME_DATA_SUM_');

define('BENCHMARK_MEMORY_DATA', 'BENCHMARK_MEMORY_DATA_SUM_');

define('BENCHMARK_GREY_COLOR', 'grey');

define('BENCHMARK_RED_COLOR', '#D4641D');

define('BENCHMARK_ERROR_RED_COLOR', '#BF3926');

define('BENCHMARK_LIGHT_GREEN_COLOR', '#64B56F');

define('BENCHMARK_GREEN_COLOR', '#36AB9B');

define('BENCHMARK_BLUE_COLOR', '#2788A0');

define('BENCHMARK_START_STEPS_COUNT', 5);

define('BENCHMARK_STEPS_COUNT', 20);

if(empty($_SESSION)) {
    @session_start();
}
define('BENCHMARK_FRAMEWORK_CONFIG', json_decode(file_get_contents(BENCHMARK_JSON_CONFIG_PATH), true));
define('BENCHMARK_FRAMEWORK_NAME', BENCHMARK_FRAMEWORK_CONFIG['mark']);

define('BENCHMARK_START_', microtime(true));
define('BENCHMARK_SESSION_ID', session_id());


register_shutdown_function('Benchmark_callRegisteredShutdown');

function Benchmark_callRegisteredShutdown() {
    $error = error_get_last();
    print "<div style='color: black; font-size: 14px; font-family: Verdana, Arial, serif'>";
    print "<b style='font-size: 16px'>" . BENCHMARK_FRAMEWORK_CONFIG['name'] . "</b> v." . (BENCHMARK_FRAMEWORK_CONFIG['mark'] == 'phalcon' ? Phalcon\Version::get() : BENCHMARK_FRAMEWORK_CONFIG['version']) . " <a href='" . BENCHMARK_FRAMEWORK_CONFIG['url'] . "' target='_blank' style='float:right; font-size: 12px'>homepage</a>";
    if (!empty($error)) {
        die("<div style='background-color: #FF786C; padding: 10px'>" . $error['message'] . "</div>");
    }
    print "<span style='color: cadetblue'>";
    $number = $_GET['number'] ?? 1;
    if ($number <= BENCHMARK_START_STEPS_COUNT) {
        $_SESSION[BENCHMARK_TIME_DATA . BENCHMARK_FRAMEWORK_NAME] = 0;
        $_SESSION[BENCHMARK_MEMORY_DATA . BENCHMARK_FRAMEWORK_NAME] = 0;
        print "<br><br>Data processing...";
        print benchmarkRedirect($number + 1);
        return;
    }
    $baseTime = round((microtime(true) - BENCHMARK_START_), 7);
    $sumTime = $_SESSION[BENCHMARK_TIME_DATA . BENCHMARK_FRAMEWORK_NAME];
    $_SESSION[BENCHMARK_TIME_DATA . BENCHMARK_FRAMEWORK_NAME] = $_SESSION[BENCHMARK_TIME_DATA . BENCHMARK_FRAMEWORK_NAME] + $baseTime;
    $baseMemory = round(memory_get_peak_usage(false) / 1024 / 1024, 5);
    $sumMemory = $_SESSION[BENCHMARK_MEMORY_DATA . BENCHMARK_FRAMEWORK_NAME];
    $_SESSION[BENCHMARK_MEMORY_DATA . BENCHMARK_FRAMEWORK_NAME] = $_SESSION[BENCHMARK_MEMORY_DATA . BENCHMARK_FRAMEWORK_NAME] + $baseMemory;
    if ($number >= (BENCHMARK_STEPS_COUNT + BENCHMARK_START_STEPS_COUNT)) {
        $_SESSION[BENCHMARK_TIME_DATA . BENCHMARK_FRAMEWORK_NAME] = 0;
        $_SESSION[BENCHMARK_MEMORY_DATA . BENCHMARK_FRAMEWORK_NAME] = 0;
        print "</span></div>";
        print "<div style='color: gray; font-size: 12px'>";
        $time = round(empty($sumTime) ? $baseTime :  ($sumTime + $baseTime) / BENCHMARK_STEPS_COUNT, 5);
        $memory = round(empty($sumMemory) ? $baseMemory : ($sumMemory + $baseMemory) / BENCHMARK_STEPS_COUNT, 2);
        print "<b>Time</b>: " . $time . " sec<br><div style='white-space: nowrap; vertical-align: middle'><span>" . benchmarkGraph(($time * 10000), BENCHMARK_GREEN_COLOR, true) . '</span> 0.01 &nbsp<span>' . benchmarkGraph(($time * 1000), BENCHMARK_GREEN_COLOR, true) . '</span> 0.1 &nbsp<span>' . benchmarkGraph(($time * 100), BENCHMARK_LIGHT_GREEN_COLOR) . '</span> 1.0</div>';
        print " <b>Memory</b>: " . $memory . " MB<br>" . benchmarkGraph($memory * 50, BENCHMARK_BLUE_COLOR);
        print "</div>";
    } else {
        $step = $number - BENCHMARK_START_STEPS_COUNT;
        print "<br><br>Data processing... {$step}/" . BENCHMARK_STEPS_COUNT;
        print benchmarkRedirect($number + 1);
    }

}

function benchmarkGraph(int $width, $color = BENCHMARK_GREY_COLOR, $limit = false) {
    $color = $width < 100 ? $color : ($width > 200 && !$limit ? BENCHMARK_ERROR_RED_COLOR : BENCHMARK_RED_COLOR);
    return "<div style='overflow:" . ($limit ? 'hidden' : '') . ";display: inline-block; border: 1px solid black; padding: 1px; width: 100px; max-width: 100px;" . ($limit ? "" : "border-right: 5px solid indianred;") . "background-color: white'><div style='background-color: {$color}; width: " . round($width) . "px; height: 10px; border: 1px solid gray;'></div></div>";
}

function benchmarkRedirect($number) {
    return "<script>setTimeout(function(){document.location = window.location.pathname + '?number=' + $number}, 500 + " . rand(0, 500) . ");</script>";
}


