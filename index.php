<?php
if (intval(explode('.', phpversion())[0]) < 7) {
    die("The application requires PHP version higher than 7.0 (Current version " . phpversion() . ")");
}
if(empty($_GET['frame'])) {
    $version = explode('-', explode('+', explode(' ', phpversion())[0])[0])[0];
    echo "<div style='font-size:12px'><b>PHP Framework benchmarks</b>. Check your server for compatibility: <a href='https://github.com/phphleb/php-framework-benchmarks'>github.com/phphleb/php-framework-benchmarks</a>. Current PHP version " . $version . '</div><br>';
}
$config = json_decode(file_get_contents("config.json"), true);
$frameworkList = $config['frameworks'];
foreach ($frameworkList as $key => $target) {
    $frameworkConfig = json_decode(file_get_contents(__DIR__ . "/{$target}/_benchmark_config.json"), true);
    $helloPatch = trim($frameworkConfig['hello_world_uri'], ' /\\');
    echo '<iframe src="/' . $helloPatch . '/" width="99%" height="140" align="left" style="background-color: whitesmoke"></iframe><br><br>';
}


