<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-main',
    'version' => 'dev-main',
    'aliases' => 
    array (
    ),
    'reference' => '97bc6417761fd9470097d0323aa1d98cee02a5ee',
    'name' => 'laravel/laravel',
  ),
  'versions' => 
  array (
    'asm89/stack-cors' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b9c31def6a83f84b4d4a40d35996d375755f0e08',
    ),
    'barryvdh/laravel-snappy' => 
    array (
      'pretty_version' => 'v0.4.7',
      'version' => '0.4.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c412d0c8f40b1326ba0fb16e94957fd1e68374f0',
    ),
    'brick/math' => 
    array (
      'pretty_version' => '0.8.15',
      'version' => '0.8.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '9b08d412b9da9455b210459ff71414de7e6241cd',
    ),
    'cordoval/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'davedevelopment/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'davejamesmiller/laravel-breadcrumbs' => 
    array (
      'pretty_version' => '5.3.2',
      'version' => '5.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '99f92a706faefb5e1816caa96e877a0184509e5b',
    ),
    'dnoegel/php-xdg-base-dir' => 
    array (
      'pretty_version' => 'v0.1.1',
      'version' => '0.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f350df0268e904597e3bd9c4685c53e0e333feea',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e864bbf5904cb8f5bb334f99209b48018522f042',
    ),
    'dragonmantank/cron-expression' => 
    array (
      'pretty_version' => 'v2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '72b6fbf76adb3cf5bc0db68559b33d41219aba27',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '2.1.17',
      'version' => '2.1.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ade6887fd9bd74177769645ab5c474824f8a418a',
    ),
    'facade/flare-client-php' => 
    array (
      'pretty_version' => '1.3.2',
      'version' => '1.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'db1e03426e7f9472c9ecd1092aff00f56aa6c004',
    ),
    'facade/ignition' => 
    array (
      'pretty_version' => '2.0.7',
      'version' => '2.0.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e6bedc1e74507d584fbcb041ebe0f7f215109cf2',
    ),
    'facade/ignition-contracts' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f445db0fb86f48e205787b2592840dd9c80ded28',
    ),
    'fideloper/proxy' => 
    array (
      'pretty_version' => '4.3.0',
      'version' => '4.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ec38ad69ee378a1eec04fb0e417a97cfaf7ed11a',
    ),
    'filp/whoops' => 
    array (
      'pretty_version' => '2.7.2',
      'version' => '2.7.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '17d0d3f266c8f925ebd035cd36f83cf802b47d4a',
    ),
    'fruitcake/laravel-cors' => 
    array (
      'pretty_version' => 'v1.0.6',
      'version' => '1.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d127dbec313e2e227d65e0c483765d8d7559bf6',
    ),
    'fzaninotto/faker' => 
    array (
      'pretty_version' => 'v1.9.1',
      'version' => '1.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fc10d778e4b84d5bd315dad194661e091d307c6f',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '6.5.4',
      'version' => '6.5.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4a1b6930528a8f7ee03518e6442ec7a44155d9d',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => 'v1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a59da6cf61d80060647ff4d3eb2c03a2bc694646',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.6.1',
      'version' => '1.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '239400de7a173fe9901b9ac7c06497751f00727a',
    ),
    'h4cc/wkhtmltoimage-amd64' => 
    array (
      'pretty_version' => '0.12.4',
      'version' => '0.12.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c4e33f635207af89a704205b8902fb5715ca88be',
    ),
    'h4cc/wkhtmltopdf-amd64' => 
    array (
      'pretty_version' => '0.12.4',
      'version' => '0.12.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '4e2ab2d032a5d7fbe2a741de8b10b8989523c95b',
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '776503d3a8e85d4f9a1148614f95b7a608b046ad',
    ),
    'illuminate/auth' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/bus' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/container' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/database' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/events' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/mail' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/queue' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/redis' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/session' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/support' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/testing' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/validation' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'illuminate/view' => 
    array (
      'replaced' => 
      array (
        0 => 'v7.15.0',
      ),
    ),
    'knplabs/knp-snappy' => 
    array (
      'pretty_version' => 'v1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '7bac60fb729147b7ccd8532c07df3f52a4afa8a4',
    ),
    'kodova/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v7.15.0',
      'version' => '7.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '739c44a3f7041430a3fb357f2dcfdb78f55005d7',
    ),
    'laravel/laravel' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
      ),
      'reference' => '97bc6417761fd9470097d0323aa1d98cee02a5ee',
    ),
    'laravel/tinker' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cde90a7335a2130a4488beb68f4b2141869241db',
    ),
    'laravel/ui' => 
    array (
      'pretty_version' => 'v2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '15368c5328efb7ce94f35ca750acde9b496ab1b1',
    ),
    'laravelcollective/html' => 
    array (
      'pretty_version' => 'v6.1.2',
      'version' => '6.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5ef9a3c9ae2423fe5618996f3cde375d461a3fc6',
    ),
    'laraveles/spanish' => 
    array (
      'pretty_version' => '1.4.6',
      'version' => '1.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd8eb80c966abc5a4fa45fe3aa58734ab6fddb5a5',
    ),
    'league/commonmark' => 
    array (
      'pretty_version' => '1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '412639f7cfbc0b31ad2455b2fe965095f66ae505',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.0.69',
      'version' => '1.0.69.0',
      'aliases' => 
      array (
      ),
      'reference' => '7106f78428a344bc4f643c233a94e48795f10967',
    ),
    'league/fractal' => 
    array (
      'pretty_version' => '0.19.2',
      'version' => '0.19.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '06dc15f6ba38f2dde2f919d3095d13b571190a7c',
    ),
    'maatwebsite/excel' => 
    array (
      'pretty_version' => '3.1.19',
      'version' => '3.1.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '96527a9ebc2e79e9a5fa7eaef7e23c9e9bcc587c',
    ),
    'maennchen/zipstream-php' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c4c5803cc1f93df3d2448478ef79394a5981cc58',
    ),
    'markbaker/complex' => 
    array (
      'pretty_version' => '1.4.8',
      'version' => '1.4.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '8eaa40cceec7bf0518187530b2e63871be661b72',
    ),
    'markbaker/matrix' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5348c5a67e3b75cd209d70103f916a93b1f1ed21',
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6c6a7c533469873deacf998237e7649fc6b36223',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '38914429aac460e8e4616c8cb486ecb40ec90bb1',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.9.5',
      'version' => '1.9.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b2c28789e80a97badd14145fda39b545d83ca3ef',
      'replaced' => 
      array (
        0 => '1.9.5',
      ),
    ),
    'myclabs/php-enum' => 
    array (
      'pretty_version' => '1.7.6',
      'version' => '1.7.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f36467c7a87e20fbdc51e524fd8f9d1de80187c',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.35.0',
      'version' => '2.35.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4b9bd835261ef23d36397a46a76b496a458305e5',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.5.0',
      'version' => '4.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '53c2753d756f5adb586dca79c2ec0e2654dd9463',
    ),
    'nunomaduro/collision' => 
    array (
      'pretty_version' => 'v4.2.0',
      'version' => '4.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd50490417eded97be300a92cd7df7badc37a9018',
    ),
    'opis/closure' => 
    array (
      'pretty_version' => '3.5.4',
      'version' => '3.5.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d0deef692f66dae5d70663caee2867d0971306b',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '45a2ec53a73c70ce41d55cedef9063630abaf1b6',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.1.0',
      'version' => '5.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7462d5f123dfc080dfdf26897032a6513644fc95',
    ),
    'phpoffice/phpspreadsheet' => 
    array (
      'pretty_version' => '1.13.0',
      'version' => '1.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '21bfb5b3243b8ceb9eda499a4d699fc42c11a9d1',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.7.4',
      'version' => '1.7.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b2ada2ad5d8a32b89088b8adc31ecd2e3a13baf3',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => 'v1.10.3',
      'version' => '1.10.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '451c3cd1418cf640de218914901e51b064abb093',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '7.0.10',
      'version' => '7.0.10.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f1884187926fbb755a9aaf0b3836ad3165b478bf',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '050bedf145a257b1ff02746c31894800e5122946',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '2.1.2',
      'version' => '2.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '1038454804406b0b5f5f520358e78c1c2f71501e',
    ),
    'phpunit/php-token-stream' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '995192df77f63a59e47f025390d2d1fdf8f425ff',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '8.5.5',
      'version' => '8.5.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '63dda3b212a0025d380a745f91bdb4d8c985adb7',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f73288fd15629204f9d42b7055f72dacbe811fc',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
        1 => '1.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.10.4',
      'version' => '0.10.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a8aec1b2981ab66882a01cce36a49b6317dc3560',
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'ramsey/collection' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '925ad8cf55ba7a3fc92e332c58fd0478ace3e1ca',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '4.0.1',
      'version' => '4.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ba8fff1d3abb8bb4d35a135ed22a31c6ef3ede3d',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '4.0.1',
      ),
    ),
    'scrivo/highlight.php' => 
    array (
      'pretty_version' => 'v9.18.1.1',
      'version' => '9.18.1.1',
      'aliases' => 
      array (
      ),
      'reference' => '52fc21c99fd888e33aed4879e55a3646f8d40558',
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '4.2.3',
      'version' => '4.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '3.1.2',
      'version' => '3.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '68609e1261d215ea5b21b7987539cbfbe156ec3e',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '7cfd9e65d11ffb5af41198476395774d4c8a84c5',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '773f97c67f28de00d397be301821b06708fca0be',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '3aaaa15fa71d27650d62a948be022fe3b48541a3',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '99732be0ddb3361e16ad77b68ba41efc8e979019',
    ),
    'spatie/laravel-permission' => 
    array (
      'pretty_version' => '3.13.0',
      'version' => '3.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '49b8063fbb9ec52ebef98cc6ec527a80d8853141',
    ),
    'swiftmailer/swiftmailer' => 
    array (
      'pretty_version' => 'v6.2.3',
      'version' => '6.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v5.1.1',
      'version' => '5.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f0a271bc9b7d02a053d36fcdcb12662e2a8096e',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v5.1.1',
      'version' => '5.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e544e24472d4c97b2d11ade7caacd446727c6bf9',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.1.2',
      'version' => '2.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dd99cb3a0aff6cadd2a8d7d7ed72c2161e218337',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v5.1.1',
      'version' => '5.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '7d0b927b9d3dc41d7d46cda38cbfcd20cdcbb896',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v5.1.1',
      'version' => '5.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc0d059e2e997e79ca34125a52f3e33de4424ac7',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v2.1.2',
      'version' => '2.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '405952c4e90941a17e52ef7489a2bd94870bb290',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.1.1',
      'version' => '5.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4298870062bfc667cb78d2b379be4bf5dec5f187',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v5.1.1',
      'version' => '5.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e0d853bddc2b2cfb0d67b0b4496c03fffe1d37fa',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v5.1.1',
      'version' => '5.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1151e5d51a680b22e758d05c6647dd9857503ec8',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.1.1',
      'version' => '5.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c0c418f05e727606e85b482a8591519c4712cf45',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e94c8b1bbe2bc77507a1056cdb06451c75b427f9',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c4de7601eefbf25f9d47190abe07f79fe0a27424',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e094b0770f7833fdf257e6ba4775be4e258230b2',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3bff59ea7047e925be6b7f2059d60af31bb46d6a',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1357b1d168eb7f68ad6a134838e46b0b159444a9',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa79b11539418b02fc5e1897267673ba2c19419c',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f048e612a3905f34931127360bdd2def19a5e582',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a760d8964ff79ab9bf057613a5808284ec852ccc',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.17.0',
      'version' => '1.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e30b2799bc1ad68f7feb62b60a73743589438dd',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v5.1.1',
      'version' => '5.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '7f6378c1fa2147eeb1b4c385856ce9de0d46ebd1',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v5.1.1',
      'version' => '5.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bbd0ba121d623f66d165a55a108008968911f3eb',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.1.2',
      'version' => '2.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '66a8f0957a3ca54e4f724e49028ab19d75a8918b',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v5.1.1',
      'version' => '5.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac70459db781108db7c6d8981dd31ce0e29e3298',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v5.1.1',
      'version' => '5.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd387f07d4c15f9c09439cf3f13ddbe0b2c5e8be2',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.1.2',
      'version' => '2.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e5ca07c8f817f865f618aa072c2fe8e0e637340e',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0',
      ),
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.1.1',
      'version' => '5.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '46a942903059b0b05e601f00eb64179e05578c0f',
    ),
    'tavo1987/ec-validador-cedula-ruc' => 
    array (
      'pretty_version' => 'v1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '379b50bc5dfda20d935df2bdd3c0de94e4fc024e',
    ),
    'tavo1987/laravel-ec-validator' => 
    array (
      'pretty_version' => 'v2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4d6d7dd4af2df6a3b51f9e192ef530934edd8e45',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.2',
      'version' => '2.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dda2ee426acd6d801d5b7fd1001cde9b5f790e15',
    ),
    'ultramsg/whatsapp-php-sdk' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '54f57faeb00641ea780e9ea36f50bd6b11400547',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v4.1.7',
      'version' => '4.1.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'db63b2ea280fdcf13c4ca392121b0b2450b51193',
    ),
    'voku/portable-ascii' => 
    array (
      'pretty_version' => '1.5.1',
      'version' => '1.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e7f9bd5deff09a57318f9b900ab33a05acfcf4d3',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
    ),
    'yajra/laravel-datatables' => 
    array (
      'pretty_version' => 'v1.5.0',
      'version' => '1.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '50de5e20ef01da1a353e0a81c0ad5f9da6a985ec',
    ),
    'yajra/laravel-datatables-buttons' => 
    array (
      'pretty_version' => 'v4.9.2',
      'version' => '4.9.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3d7bb45c00e82f7cb84ad11ec905a95d24c51821',
    ),
    'yajra/laravel-datatables-editor' => 
    array (
      'pretty_version' => 'v1.21.0',
      'version' => '1.21.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd46f8110af82daa14463c6ad7fbec23d75b90c3a',
    ),
    'yajra/laravel-datatables-fractal' => 
    array (
      'pretty_version' => 'v1.6.0',
      'version' => '1.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0aa387a9b3738248fa61110f0378904ef42b4a73',
    ),
    'yajra/laravel-datatables-html' => 
    array (
      'pretty_version' => 'v4.28.0',
      'version' => '4.28.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7009a1a1174cd2d3c6d084a9a8804badb81e48db',
    ),
    'yajra/laravel-datatables-oracle' => 
    array (
      'pretty_version' => 'v9.10.1',
      'version' => '9.10.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '01b4a4fdbd13e4d77fa2d27916cdafac789d2d1a',
    ),
  ),
);
    private static $canGetVendors;
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }


        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>}
     */
    public static function getRawData()
    {
        return self::$installed;
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            // @phpstan-ignore-next-line
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                }
            }
        }

        $installed[] = self::$installed;

        return $installed;
    }
}
