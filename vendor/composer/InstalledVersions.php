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
    'pretty_version' => '2.4.2',
    'version' => '2.4.2.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'magento/project-community-edition',
  ),
  'versions' => 
  array (
    '2tvenom/cborencode' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '42aedccb861d01fc0554782348cc08f8ebf22332',
    ),
    'allure-framework/allure-codeception' => 
    array (
      'pretty_version' => '1.4.4',
      'version' => '1.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a69800eeef83007ced9502a3349ff72f5fb6b4e2',
    ),
    'allure-framework/allure-php-api' => 
    array (
      'pretty_version' => '1.1.8',
      'version' => '1.1.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '5ae2deac1c7e1b992cfa572167370de45bdd346d',
    ),
    'allure-framework/allure-phpunit' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '9399629c6eed79da4be18fd22adf83ef36c2d2e0',
    ),
    'amzn/amazon-pay-and-login-magento-2-module' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'amzn/amazon-pay-and-login-with-amazon-core-module' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'amzn/amazon-pay-module' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'amzn/amazon-pay-sdk-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'amzn/login-with-amazon-module' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'astock/stock-api-libphp' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'aws/aws-sdk-php' => 
    array (
      'pretty_version' => '3.173.16',
      'version' => '3.173.16.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e401bcb34e4ae88586a1f63bec6c0ddd12591e7a',
    ),
    'bacon/bacon-qr-code' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '3e9d791b67d0a2912922b7b7c7312f4b37af41e4',
    ),
    'beberlei/assert' => 
    array (
      'pretty_version' => 'v3.3.0',
      'version' => '3.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5367e3895976b49704ae671f75bc5f0ba1b986ab',
    ),
    'behat/gherkin' => 
    array (
      'pretty_version' => 'v4.8.0',
      'version' => '4.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2391482cd003dfdc36b679b27e9f5326bd656acd',
    ),
    'blueimp/jquery-file-upload' => 
    array (
      'replaced' => 
      array (
        0 => '5.6.14',
      ),
    ),
    'braintree/braintree_php' => 
    array (
      'pretty_version' => '5.2.0',
      'version' => '5.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6cf3447ecd0303caa6f2d4f22b653dc5c71b4589',
    ),
    'christian-riesen/base32' => 
    array (
      'pretty_version' => '1.5.2',
      'version' => '1.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a1cac38d50adb5ce9337a62019a0697cc5da3ca1',
    ),
    'codeception/codeception' => 
    array (
      'pretty_version' => '4.1.18',
      'version' => '4.1.18.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f47547bac347dfb5ea5351ff91148cbcc08e6818',
    ),
    'codeception/lib-asserts' => 
    array (
      'pretty_version' => '1.13.2',
      'version' => '1.13.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '184231d5eab66bc69afd6b9429344d80c67a33b6',
    ),
    'codeception/module-asserts' => 
    array (
      'pretty_version' => '1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '59374f2fef0cabb9e8ddb53277e85cdca74328de',
    ),
    'codeception/module-sequence' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b75be26681ae90824cde8f8df785981f293667e1',
    ),
    'codeception/module-webdriver' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '63ea08880a44df809bdfbca08597e1b68cee9f87',
    ),
    'codeception/phpunit-wrapper' => 
    array (
      'pretty_version' => '9.0.6',
      'version' => '9.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b0c06abb3181eedca690170f7ed0fd26a70bfacc',
    ),
    'codeception/stub' => 
    array (
      'pretty_version' => '3.7.0',
      'version' => '3.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '468dd5fe659f131fc997f5196aad87512f9b1304',
    ),
    'colinmollenhour/cache-backend-file' => 
    array (
      'pretty_version' => 'v1.4.5',
      'version' => '1.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '03c7d4c0f43b2de1b559a3527d18ff697d306544',
    ),
    'colinmollenhour/cache-backend-redis' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '389fb68de15660e39b055d149d31f3708b5d6cbc',
    ),
    'colinmollenhour/credis' => 
    array (
      'pretty_version' => '1.11.1',
      'version' => '1.11.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bd1da4698ab1918477f9e71e5ff0062b9a345008',
    ),
    'colinmollenhour/php-redis-session-abstract' => 
    array (
      'pretty_version' => 'v1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '39ca38da5e0a981bc1a7e39a86693c128784a513',
    ),
    'components/jquery' => 
    array (
      'replaced' => 
      array (
        0 => '1.11.0',
      ),
    ),
    'components/jqueryui' => 
    array (
      'replaced' => 
      array (
        0 => '1.10.4',
      ),
    ),
    'composer/ca-bundle' => 
    array (
      'pretty_version' => '1.2.9',
      'version' => '1.2.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '78a0e288fdcebf92aa2318a8d3656168da6ac1a5',
    ),
    'composer/composer' => 
    array (
      'pretty_version' => '1.10.19',
      'version' => '1.10.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '196601d50c08c3fae389a417a7689367fcf37cef',
    ),
    'composer/semver' => 
    array (
      'pretty_version' => '1.7.2',
      'version' => '1.7.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '647490bbcaf7fc4891c58f47b825eb99d19c377a',
    ),
    'composer/spdx-licenses' => 
    array (
      'pretty_version' => '1.5.5',
      'version' => '1.5.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'de30328a7af8680efdc03e396aad24befd513200',
    ),
    'composer/xdebug-handler' => 
    array (
      'pretty_version' => '1.4.5',
      'version' => '1.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f28d44c286812c714741478d968104c5e604a1d4',
    ),
    'container-interop/container-interop' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '79cbf1341c22ec75643d841642dd5d6acd83bdb8',
    ),
    'csharpru/vault-php' => 
    array (
      'pretty_version' => '4.2.0',
      'version' => '4.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'de812a9667a1111c4f4d4080b2c9166692ee9efe',
    ),
    'csharpru/vault-php-guzzle6-transport' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '33c392120ac9f253b62b034e0e8ffbbdb3513bd8',
    ),
    'dasprid/enum' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '5abf82f213618696dda8e3bf6f64dd042d8542b2',
    ),
    'dealerdirect/phpcodesniffer-composer-installer' => 
    array (
      'pretty_version' => 'v0.7.1',
      'version' => '0.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fe390591e0241955f22eb9ba327d137e501c771c',
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => '1.12.1',
      'version' => '1.12.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b17c5014ef81d212ac539f07a1001832df1b6d3b',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd56bf6102915de5702778fe20f2de3b2fe570b5b',
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
    'donatj/phpuseragentparser' => 
    array (
      'pretty_version' => 'v0.19.0',
      'version' => '0.19.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3f25d8e86a86dcf11617456db63ab7aa4170364d',
    ),
    'dotmailer/dotmailer-magento2-extension' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'dotmailer/dotmailer-magento2-extension-chat' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'dotmailer/dotmailer-magento2-extension-enterprise' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'dotmailer/dotmailer-magento2-extension-package' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'elasticsearch/elasticsearch' => 
    array (
      'pretty_version' => 'v7.7.0',
      'version' => '7.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d90a7ff4fb1936dc4376f09d723af75714f6f05',
    ),
    'endroid/qr-code' => 
    array (
      'pretty_version' => '3.9.6',
      'version' => '3.9.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '9cdd4f5d609bfc8811ca4a62b4d23eb16976242f',
    ),
    'ezimuel/guzzlestreams' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'abe3791d231167f14eb80d413420d1eab91163a8',
    ),
    'ezimuel/ringphp' => 
    array (
      'pretty_version' => '1.1.2',
      'version' => '1.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '0b78f89d8e0bb9e380046c31adfa40347e9f663b',
    ),
    'facebook/webdriver' => 
    array (
      'replaced' => 
      array (
        0 => '^1.7.1',
      ),
    ),
    'friendsofphp/php-cs-fixer' => 
    array (
      'pretty_version' => 'v2.16.10',
      'version' => '2.16.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '7dd27dde4852270de8f672636a0855ce7de47bf0',
    ),
    'google/recaptcha' => 
    array (
      'pretty_version' => '1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '614f25a9038be4f3f2da7cbfd778dc5b357d2419',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '6.5.5',
      'version' => '6.5.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '60d379c243457e073cff02bc323a2a86cb355631',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '53330f47520498c0ae1f61f7e2c90f55690c06a3',
    ),
    'hoa/consistency' => 
    array (
      'pretty_version' => '1.17.05.02',
      'version' => '1.17.05.02',
      'aliases' => 
      array (
      ),
      'reference' => 'fd7d0adc82410507f332516faf655b6ed22e4c2f',
    ),
    'hoa/console' => 
    array (
      'pretty_version' => '3.17.05.02',
      'version' => '3.17.05.02',
      'aliases' => 
      array (
      ),
      'reference' => 'e231fd3ea70e6d773576ae78de0bdc1daf331a66',
    ),
    'hoa/event' => 
    array (
      'pretty_version' => '1.17.01.13',
      'version' => '1.17.01.13',
      'aliases' => 
      array (
      ),
      'reference' => '6c0060dced212ffa3af0e34bb46624f990b29c54',
    ),
    'hoa/exception' => 
    array (
      'pretty_version' => '1.17.01.16',
      'version' => '1.17.01.16',
      'aliases' => 
      array (
      ),
      'reference' => '091727d46420a3d7468ef0595651488bfc3a458f',
    ),
    'hoa/file' => 
    array (
      'pretty_version' => '1.17.07.11',
      'version' => '1.17.07.11',
      'aliases' => 
      array (
      ),
      'reference' => '35cb979b779bc54918d2f9a4e02ed6c7a1fa67ca',
    ),
    'hoa/iterator' => 
    array (
      'pretty_version' => '2.17.01.10',
      'version' => '2.17.01.10',
      'aliases' => 
      array (
      ),
      'reference' => 'd1120ba09cb4ccd049c86d10058ab94af245f0cc',
    ),
    'hoa/protocol' => 
    array (
      'pretty_version' => '1.17.01.14',
      'version' => '1.17.01.14',
      'aliases' => 
      array (
      ),
      'reference' => '5c2cf972151c45f373230da170ea015deecf19e2',
    ),
    'hoa/stream' => 
    array (
      'pretty_version' => '1.17.02.21',
      'version' => '1.17.02.21',
      'aliases' => 
      array (
      ),
      'reference' => '3293cfffca2de10525df51436adf88a559151d82',
    ),
    'hoa/ustring' => 
    array (
      'pretty_version' => '4.17.01.16',
      'version' => '4.17.01.16',
      'aliases' => 
      array (
      ),
      'reference' => 'e6326e2739178799b1fe3fdd92029f9517fa17a0',
    ),
    'jms/metadata' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e5854ab1aa643623dc64adde718a8eec32b957a8',
    ),
    'jms/parser-lib' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c509473bc1b4866415627af0e1c6cc8ac97fa51d',
    ),
    'jms/serializer' => 
    array (
      'pretty_version' => '1.14.1',
      'version' => '1.14.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ba908d278fff27ec01fb4349f372634ffcd697c0',
    ),
    'justinrainbow/json-schema' => 
    array (
      'pretty_version' => '5.2.10',
      'version' => '5.2.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
    ),
    'khanamiryan/qrcode-detector-decoder' => 
    array (
      'pretty_version' => '1.0.4',
      'version' => '1.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '07fceefb79d895e858e52921afb9c1433d2f3d5e',
    ),
    'klarna/m2-payments' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'klarna/module-core' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'klarna/module-kp' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'klarna/module-ordermanagement' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'laminas/laminas-captcha' => 
    array (
      'pretty_version' => '2.9.0',
      'version' => '2.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b88f650f3adf2d902ef56f6377cceb5cd87b9876',
    ),
    'laminas/laminas-code' => 
    array (
      'pretty_version' => '3.4.1',
      'version' => '3.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1cb8f203389ab1482bf89c0e70a04849bacd7766',
    ),
    'laminas/laminas-config' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '71ba6d5dd703196ce66b25abc4d772edb094dae1',
    ),
    'laminas/laminas-console' => 
    array (
      'pretty_version' => '2.8.0',
      'version' => '2.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '478a6ceac3e31fb38d6314088abda8b239ee23a5',
    ),
    'laminas/laminas-crypt' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6f291fe90c84c74d737c9dc9b8f0ad2b55dc0567',
    ),
    'laminas/laminas-db' => 
    array (
      'pretty_version' => '2.12.0',
      'version' => '2.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '80cbba4e749f9eb7d8036172acb9ad41e8b6923f',
    ),
    'laminas/laminas-dependency-plugin' => 
    array (
      'pretty_version' => '2.1.2',
      'version' => '2.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c5b4bf87729d6f38c73ca8ed22a5d62ec641d075',
    ),
    'laminas/laminas-di' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '239b22408a1f8eacda6fc2b838b5065c4cf1d88e',
    ),
    'laminas/laminas-diactoros' => 
    array (
      'pretty_version' => '1.8.7p2',
      'version' => '1.8.7.0-patch2',
      'aliases' => 
      array (
      ),
      'reference' => '6991c1af7c8d2c8efee81b22ba97024781824aaa',
    ),
    'laminas/laminas-escaper' => 
    array (
      'pretty_version' => '2.7.0',
      'version' => '2.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e04bc5ae5990b17159d79d331055e2c645e5cc5',
    ),
    'laminas/laminas-eventmanager' => 
    array (
      'pretty_version' => '3.3.0',
      'version' => '3.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1940ccf30e058b2fd66f5a9d696f1b5e0027b082',
    ),
    'laminas/laminas-feed' => 
    array (
      'pretty_version' => '2.12.3',
      'version' => '2.12.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c91415633cb1be6f9d78683d69b7dcbfe6b4012',
    ),
    'laminas/laminas-filter' => 
    array (
      'pretty_version' => '2.10.0',
      'version' => '2.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cfb40b104e92a0b52bee696b74f958798ad8faa4',
    ),
    'laminas/laminas-form' => 
    array (
      'pretty_version' => '2.15.0',
      'version' => '2.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '359cd372c565e18a17f32ccfeacdf21bba091ce2',
    ),
    'laminas/laminas-http' => 
    array (
      'pretty_version' => '2.14.3',
      'version' => '2.14.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bfaab8093e382274efed7fdc3ceb15f09ba352bb',
    ),
    'laminas/laminas-hydrator' => 
    array (
      'pretty_version' => '2.4.2',
      'version' => '2.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4a0e81cf05f32edcace817f1f48cb4055f689d85',
    ),
    'laminas/laminas-i18n' => 
    array (
      'pretty_version' => '2.11.0',
      'version' => '2.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '85678f444b6dcb48e8a04591779e11c24e5bb901',
    ),
    'laminas/laminas-inputfilter' => 
    array (
      'pretty_version' => '2.10.1',
      'version' => '2.10.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b29ce8f512c966468eee37ea4873ae5fb545d00a',
    ),
    'laminas/laminas-json' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'db58425b7f0eba44a7539450cc926af80915951a',
    ),
    'laminas/laminas-loader' => 
    array (
      'pretty_version' => '2.7.0',
      'version' => '2.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bcf8a566cb9925a2e7cc41a16db09235ec9fb616',
    ),
    'laminas/laminas-log' => 
    array (
      'pretty_version' => '2.12.0',
      'version' => '2.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4e92d841b48868714a070b10866e94be80fc92ff',
    ),
    'laminas/laminas-mail' => 
    array (
      'pretty_version' => '2.13.1',
      'version' => '2.13.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '6f6fb7c6f332abea25461eefb3da15e104edfd56',
    ),
    'laminas/laminas-math' => 
    array (
      'pretty_version' => '2.7.1',
      'version' => '2.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8027b37e00accc43f28605c7d8fd081baed1f475',
    ),
    'laminas/laminas-mime' => 
    array (
      'pretty_version' => '2.8.0',
      'version' => '2.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9a59704f33106427a384d0ae421f96043174093a',
    ),
    'laminas/laminas-modulemanager' => 
    array (
      'pretty_version' => '2.9.0',
      'version' => '2.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '789bbd4ab391da9221f265f6bb2d594f8f11855b',
    ),
    'laminas/laminas-mvc' => 
    array (
      'pretty_version' => '2.7.15',
      'version' => '2.7.15.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e7198b03556a57fb5fd3ed919d9e1cf71500642',
    ),
    'laminas/laminas-psr7bridge' => 
    array (
      'pretty_version' => '0.2.2',
      'version' => '0.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '14780ef1d40effd59d77ab29c6d439b2af42cdfa',
    ),
    'laminas/laminas-serializer' => 
    array (
      'pretty_version' => '2.10.0',
      'version' => '2.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1c57f1bdf05da078493b774c9e8d77ee8b46b4bb',
    ),
    'laminas/laminas-server' => 
    array (
      'pretty_version' => '2.9.1',
      'version' => '2.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9b82e3e45f8f01ca6ac5d0003dba58f85043d7e4',
    ),
    'laminas/laminas-servicemanager' => 
    array (
      'pretty_version' => '2.7.11',
      'version' => '2.7.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '841abb656c6018afebeec1f355be438426d6a3dd',
    ),
    'laminas/laminas-session' => 
    array (
      'pretty_version' => '2.10.0',
      'version' => '2.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '921e6a9f807ee243a9a4f8a8a297929d0c2b50cd',
    ),
    'laminas/laminas-soap' => 
    array (
      'pretty_version' => '2.9.0',
      'version' => '2.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '11672a79e9074fd8e4e7aedd75849902e7b45e23',
    ),
    'laminas/laminas-stdlib' => 
    array (
      'pretty_version' => '3.3.1',
      'version' => '3.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd81c7ffe602ed0e6ecb18691019111c0f4bf1efe',
    ),
    'laminas/laminas-text' => 
    array (
      'pretty_version' => '2.7.1',
      'version' => '2.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3601b5eacb06ed0a12f658df860cc0f9613cf4db',
    ),
    'laminas/laminas-uri' => 
    array (
      'pretty_version' => '2.8.1',
      'version' => '2.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '79bd4c614c8cf9a6ba715a49fca8061e84933d87',
    ),
    'laminas/laminas-validator' => 
    array (
      'pretty_version' => '2.14.4',
      'version' => '2.14.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e370c4695db1c81e6dfad38d8c4dbdb37b23d776',
    ),
    'laminas/laminas-view' => 
    array (
      'pretty_version' => '2.11.5',
      'version' => '2.11.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '16611035d7b3a6ef2c636a9268c213146123b663',
    ),
    'laminas/laminas-zendframework-bridge' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '6ede70583e101030bcace4dcddd648f760ddf642',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9be3b16c877d477357c015cec057548cf9b2a14a',
    ),
    'league/flysystem-aws-s3-v3' => 
    array (
      'pretty_version' => '1.0.29',
      'version' => '1.0.29.0',
      'aliases' => 
      array (
      ),
      'reference' => '4e25cc0582a36a786c31115e419c6e40498f6972',
    ),
    'league/flysystem-cached-adapter' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd1925efb2207ac4be3ad0c40b8277175f99ffaff',
    ),
    'league/iso3166' => 
    array (
      'pretty_version' => '2.1.5',
      'version' => '2.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aed3b32fc293afdf2c6c6a322c2408eb5d20804a',
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
    ),
    'lusitanian/oauth' => 
    array (
      'pretty_version' => 'v0.8.11',
      'version' => '0.8.11.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fc11a53db4b66da555a6a11fce294f574a8374f9',
    ),
    'magento-hackathon/magento-composer-installer' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/adobe-stock-integration' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/composer' => 
    array (
      'pretty_version' => '1.6.0',
      'version' => '1.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/composer-root-update-plugin' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/framework' => 
    array (
      'pretty_version' => '103.0.2',
      'version' => '103.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/framework-amqp' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/framework-bulk' => 
    array (
      'pretty_version' => '101.0.0',
      'version' => '101.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/framework-message-queue' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/google-shopping-ads' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/inventory-composer-installer' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/inventory-composer-metapackage' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/inventory-metapackage' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/language-de_de' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/language-en_us' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/language-es_es' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/language-fr_fr' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/language-nl_nl' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/language-pt_br' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/language-zh_hans_cn' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/magento-coding-standard' => 
    array (
      'pretty_version' => '6',
      'version' => '6.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'efc9084db3d1bd145b92d6b8a2e9cb0faec54fa7',
    ),
    'magento/magento-composer-installer' => 
    array (
      'pretty_version' => '0.2.0',
      'version' => '0.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4adc8a98ae6ba18e9e3a8d03ce6c40adc33bb273',
    ),
    'magento/magento2-base' => 
    array (
      'pretty_version' => '2.4.2',
      'version' => '2.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/magento2-functional-testing-framework' => 
    array (
      'pretty_version' => '3.3.0',
      'version' => '3.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ea93feb4da34749f40bb74b780ca4fb47508a35e',
    ),
    'magento/module-admin-analytics' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-admin-notification' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-adobe-ims' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-adobe-ims-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-adobe-stock-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-adobe-stock-asset' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-adobe-stock-asset-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-adobe-stock-client' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-adobe-stock-client-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-adobe-stock-image' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-adobe-stock-image-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-adobe-stock-image-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-advanced-pricing-import-export' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-advanced-search' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-amqp' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-amqp-store' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-analytics' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-asynchronous-operations' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-authorization' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-authorizenet' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-authorizenet-acceptjs' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-authorizenet-cardinal' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-authorizenet-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-aws-s3' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-backend' => 
    array (
      'pretty_version' => '102.0.2',
      'version' => '102.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-backup' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-braintree-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-bundle' => 
    array (
      'pretty_version' => '101.0.2',
      'version' => '101.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-bundle-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-bundle-import-export' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cache-invalidate' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-captcha' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cardinal-commerce' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-catalog' => 
    array (
      'pretty_version' => '104.0.2',
      'version' => '104.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-analytics' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-catalog-cms-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-catalog-customer-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-catalog-customer-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-catalog-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-catalog-import-export' => 
    array (
      'pretty_version' => '101.1.2',
      'version' => '101.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-inventory' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-inventory-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-catalog-rule' => 
    array (
      'pretty_version' => '101.2.2',
      'version' => '101.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-rule-configurable' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-rule-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-catalog-search' => 
    array (
      'pretty_version' => '102.0.2',
      'version' => '102.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-url-rewrite' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-catalog-url-rewrite-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-catalog-widget' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-checkout' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-checkout-agreements' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-checkout-agreements-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-cms' => 
    array (
      'pretty_version' => '104.0.2',
      'version' => '104.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cms-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-cms-url-rewrite' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cms-url-rewrite-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-compare-list-graph-ql' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-config' => 
    array (
      'pretty_version' => '101.2.2',
      'version' => '101.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-configurable-import-export' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-configurable-product' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-configurable-product-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-configurable-product-sales' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-contact' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cookie' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cron' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-csp' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-currency-symbol' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-customer' => 
    array (
      'pretty_version' => '103.0.2',
      'version' => '103.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-customer-analytics' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-customer-balance-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-customer-downloadable-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-customer-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-customer-import-export' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-cybersource' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-deploy' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-developer' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-dhl' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-directory' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-directory-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-downloadable' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-downloadable-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-downloadable-import-export' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-eav' => 
    array (
      'pretty_version' => '102.1.2',
      'version' => '102.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-eav-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-elasticsearch' => 
    array (
      'pretty_version' => '101.0.2',
      'version' => '101.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-elasticsearch-6' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-elasticsearch-7' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-email' => 
    array (
      'pretty_version' => '101.1.2',
      'version' => '101.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-encryption-key' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-eway' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-fedex' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-gift-card-account-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-gift-card-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-gift-message' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-gift-message-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-google-adwords' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-google-analytics' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-google-optimizer' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-graph-ql-cache' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-grouped-catalog-inventory' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-grouped-import-export' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-grouped-product' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-grouped-product-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-import-export' => 
    array (
      'pretty_version' => '101.0.2',
      'version' => '101.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-indexer' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-instant-purchase' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-integration' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-inventory' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-advanced-checkout' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-bundle-import-export' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-bundle-product' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-bundle-product-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-bundle-product-indexer' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-cache' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-catalog' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-catalog-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-catalog-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-catalog-search' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-configurable-product' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-configurable-product-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-configurable-product-indexer' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-configuration' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-configuration-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-distance-based-source-selection' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-distance-based-source-selection-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-distance-based-source-selection-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-elasticsearch' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-export-stock' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-export-stock-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-grouped-product' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-grouped-product-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-grouped-product-indexer' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-import-export' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-frontend' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-multishipping' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-quote' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-quote-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-sales' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-sales-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-sales-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-shipping' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-shipping-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-shipping-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-in-store-pickup-webapi-extension' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-indexer' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-low-quantity-notification' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-low-quantity-notification-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-low-quantity-notification-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-multi-dimensional-indexer-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-product-alert' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-requisition-list' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-reservation-cli' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-reservations' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-reservations-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-sales' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-sales-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-sales-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-sales-frontend-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-setup-fixture-generator' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-shipping' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-shipping-admin-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-source-deduction-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-source-selection' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-inventory-source-selection-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-layered-navigation' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-admin-ui' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-api' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-assistance' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-frontend-ui' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-graph-ql' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-log' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-page-cache' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-quote' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-login-as-customer-sales' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-marketplace' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-content' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-content-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-content-catalog' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-content-cms' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-content-synchronization' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-content-synchronization-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-content-synchronization-catalog' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-content-synchronization-cms' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-api' => 
    array (
      'pretty_version' => '101.0.2',
      'version' => '101.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-media-gallery-catalog' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery-catalog-integration' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery-catalog-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery-cms-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery-integration' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery-metadata' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery-metadata-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery-renditions' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery-renditions-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery-synchronization' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery-synchronization-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery-synchronization-metadata' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery-ui' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-gallery-ui-api' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-media-storage' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-message-queue' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-msrp' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-msrp-configurable-product' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-msrp-grouped-product' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-multishipping' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-mysql-mq' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-new-relic-reporting' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-newsletter' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-newsletter-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-offline-payments' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-offline-shipping' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-page-cache' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-payment' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-paypal' => 
    array (
      'pretty_version' => '101.0.2',
      'version' => '101.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-paypal-captcha' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-paypal-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-persistent' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-product-alert' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-product-video' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-quote' => 
    array (
      'pretty_version' => '101.2.2',
      'version' => '101.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-quote-analytics' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-quote-bundle-options' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-quote-configurable-options' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-quote-downloadable-links' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-quote-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-re-captcha-admin-ui' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-checkout' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-contact' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-customer' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-frontend-ui' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-migration' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-newsletter' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-paypal' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-review' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-send-friend' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-ui' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-user' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-validation' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-validation-api' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-version-2-checkbox' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-version-2-invisible' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-re-captcha-version-3-invisible' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-related-product-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-release-notification' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-remote-storage' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-reports' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-require-js' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-review' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-review-analytics' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-review-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-reward-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-rma-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-robots' => 
    array (
      'pretty_version' => '101.1.0',
      'version' => '101.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-rss' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-rule' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sales' => 
    array (
      'pretty_version' => '103.0.2',
      'version' => '103.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sales-analytics' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-sales-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-sales-inventory' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sales-rule' => 
    array (
      'pretty_version' => '101.2.2',
      'version' => '101.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sales-sequence' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-sample-data' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-search' => 
    array (
      'pretty_version' => '101.1.2',
      'version' => '101.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-security' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-securitytxt' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-send-friend' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-send-friend-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-shipping' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-signifyd' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-sitemap' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-store' => 
    array (
      'pretty_version' => '101.1.2',
      'version' => '101.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-store-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-swagger' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-swagger-webapi' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-swagger-webapi-async' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-swatches' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-swatches-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-swatches-layered-navigation' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-tax' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-tax-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-tax-import-export' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-theme' => 
    array (
      'pretty_version' => '101.1.2',
      'version' => '101.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-theme-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-tinymce-3' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-translation' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-two-factor-auth' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-ui' => 
    array (
      'pretty_version' => '101.2.2',
      'version' => '101.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-ups' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-url-rewrite' => 
    array (
      'pretty_version' => '102.0.1',
      'version' => '102.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-url-rewrite-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-user' => 
    array (
      'pretty_version' => '101.2.2',
      'version' => '101.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-usps' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-variable' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-vault' => 
    array (
      'pretty_version' => '101.2.2',
      'version' => '101.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-vault-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-version' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-webapi' => 
    array (
      'pretty_version' => '100.4.1',
      'version' => '100.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-webapi-async' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-webapi-security' => 
    array (
      'pretty_version' => '100.4.0',
      'version' => '100.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-weee' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-weee-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-widget' => 
    array (
      'pretty_version' => '101.2.2',
      'version' => '101.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-wishlist' => 
    array (
      'pretty_version' => '101.2.2',
      'version' => '101.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/module-wishlist-analytics' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-wishlist-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/module-worldpay' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'magento/product-community-edition' => 
    array (
      'pretty_version' => '2.4.2',
      'version' => '2.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/project-community-edition' => 
    array (
      'pretty_version' => '2.4.2',
      'version' => '2.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/security-package' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/theme-adminhtml-backend' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/theme-frontend-blank' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/theme-frontend-luma' => 
    array (
      'pretty_version' => '100.4.2',
      'version' => '100.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'magento/zendframework1' => 
    array (
      'pretty_version' => '1.14.5',
      'version' => '1.14.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '6ad81500d33f085ca2391f2b59e37bd34203b29b',
    ),
    'mikey179/vfsstream' => 
    array (
      'pretty_version' => 'v1.6.8',
      'version' => '1.6.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '231c73783ebb7dd9ec77916c10037eff5a2b6efe',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '1.26.0',
      'version' => '1.26.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2209ddd84e7ef1256b7af205d0717fb62cfc9c33',
    ),
    'mtdowling/jmespath.php' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '42dae2cbd13154083ca6d70099692fef8ca84bfb',
    ),
    'mustache/mustache' => 
    array (
      'pretty_version' => 'v2.13.0',
      'version' => '2.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e95c5a008c23d3151d59ea72484d4f72049ab7f4',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.10.2',
      'version' => '1.10.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '776f831124e9c62e1a2c601ecc52e776d8bb7220',
      'replaced' => 
      array (
        0 => '1.10.2',
      ),
    ),
    'myclabs/php-enum' => 
    array (
      'pretty_version' => '1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '46cf3d8498b095bd33727b13fd5707263af99421',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.4.0',
      'version' => '4.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
    ),
    'paragonie/constant_time_encoding' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f34c2b11eb9d2c9318e13540a1dbc2a3afbd939c',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.99',
      'version' => '9.99.99.0',
      'aliases' => 
      array (
      ),
      'reference' => '84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
    ),
    'paragonie/sodium_compat' => 
    array (
      'pretty_version' => 'v1.14.0',
      'version' => '1.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a1cfe0b21faf9c0b61ac0c6188c4af7fd6fd0db3',
    ),
    'paypal/module-braintree' => 
    array (
      'pretty_version' => '4.2.1',
      'version' => '4.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'paypal/module-braintree-core' => 
    array (
      'pretty_version' => '4.2.1',
      'version' => '4.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'paypal/module-braintree-graph-ql' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'pdepend/pdepend' => 
    array (
      'pretty_version' => '2.7.1',
      'version' => '2.7.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'daba1cf0a6edaf172fa02a17807ae29f4c1c7471',
    ),
    'pelago/emogrifier' => 
    array (
      'pretty_version' => 'v3.1.0',
      'version' => '3.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6a5c7d44612d86c3901c93f1592f5440e6b2cd8',
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
    'php-amqplib/php-amqplib' => 
    array (
      'pretty_version' => 'v2.10.1',
      'version' => '2.10.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '6e2b2501e021e994fb64429e5a78118f83b5c200',
    ),
    'php-cs-fixer/diff' => 
    array (
      'pretty_version' => 'v1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbd31aeb251639ac0b9e7e29405c1441907f5759',
    ),
    'php-webdriver/webdriver' => 
    array (
      'pretty_version' => '1.8.2',
      'version' => '1.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3308a70be084d6d7fd1ee5787b4c2e6eb4b70aab',
    ),
    'phpcollection/phpcollection' => 
    array (
      'pretty_version' => '0.5.0',
      'version' => '0.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f2bcff45c0da7c27991bbc1f90f47c4b7fb434a6',
    ),
    'phpcompatibility/php-compatibility' => 
    array (
      'pretty_version' => '9.3.5',
      'version' => '9.3.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '9fb324479acf6f39452e0655d2429cc0d3914243',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.2.2',
      'version' => '5.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '069a785b2141f5bcf49f3e353548dc1cce6df556',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
    ),
    'phpmd/phpmd' => 
    array (
      'pretty_version' => '2.9.1',
      'version' => '2.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ce10831d4ddc2686c1348a98069771dd314534a8',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.7.5',
      'version' => '1.7.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '994ecccd8f3283ecf5ac33254543eb0ac946d525',
    ),
    'phpseclib/mcrypt_compat' => 
    array (
      'pretty_version' => '1.0.8',
      'version' => '1.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f74c7b1897b62f08f268184b8bb98d9d9ab723b0',
    ),
    'phpseclib/phpseclib' => 
    array (
      'pretty_version' => '2.0.30',
      'version' => '2.0.30.0',
      'aliases' => 
      array (
      ),
      'reference' => '136b9ca7eebef78be14abf90d65c5e57b6bc5d36',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => '1.12.2',
      'version' => '1.12.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '245710e971a030f42e08f4912863805570f23d39',
    ),
    'phpstan/phpstan' => 
    array (
      'pretty_version' => '0.12.23',
      'version' => '0.12.23.0',
      'aliases' => 
      array (
      ),
      'reference' => '71e529efced79e055fa8318b692e7f7d03ea4e75',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '8.0.2',
      'version' => '8.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ca6647ffddd2add025ab3f21644a441d7c146cdc',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '3.0.5',
      'version' => '3.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aa4be8575f26070b100fccb67faabb28f21f66f8',
    ),
    'phpunit/php-invoker' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '3.1.4',
      'version' => '3.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc9368fae6ef2ffa57eba80a7410bcef81df6258',
    ),
    'phpunit/php-token-stream' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a853a0e183b9db7eed023d7933a858fa1c8d25a3',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '9.1.5',
      'version' => '9.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '1b570cd7edbe136055bf5f651857dc8af6b829d2',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
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
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
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
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '3.8.0',
      'version' => '3.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd09ea80159c1929d75b3f9c60504d613aeb4a1e3',
    ),
    'react/promise' => 
    array (
      'pretty_version' => 'v2.8.0',
      'version' => '2.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f3cff96a19736714524ca0dd1d4130de73dbbbc4',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '3.8.0',
      ),
    ),
    'sebastian/code-unit' => 
    array (
      'pretty_version' => '1.0.8',
      'version' => '1.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '4.0.6',
      'version' => '4.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '55f4261989e546dc112258c7a75935a81a7ce382',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '3461e3fccc7cfdfc2720be910d3bd73c69be590d',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '5.1.3',
      'version' => '5.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '388b6ced16caa751030f6a69e588299fa09200ac',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '4.0.3',
      'version' => '4.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd89cc98761b8cb5a1a235a6b703ae50d34080e65',
    ),
    'sebastian/finder-facade' => 
    array (
      'pretty_version' => '2.0.0',
      'version' => '2.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9d3e74b845a2ce50e19b25b5f0c2718e153bee6c',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '4.0.0',
      'version' => '4.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bdb1e7c79e592b8c82cb1699be3c8743119b8a72',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
    ),
    'sebastian/phpcpd' => 
    array (
      'pretty_version' => '5.0.2',
      'version' => '5.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '8724382966b1861df4e12db915eaed2165e10bf3',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd9d8cf3c5804de4341c283ed787f099f5506172',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '81cd61ab7bbf2de744aba0ea61fae32f721df3d2',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
    ),
    'seld/jsonlint' => 
    array (
      'pretty_version' => '1.8.3',
      'version' => '1.8.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
    ),
    'seld/phar-utils' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8674b1d84ffb47cc59a101f5d5a3b61e87d23796',
    ),
    'spomky-labs/otphp' => 
    array (
      'pretty_version' => 'v10.0.1',
      'version' => '10.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f44cce5a9db4b8da410215d992110482c931232f',
    ),
    'squizlabs/php_codesniffer' => 
    array (
      'pretty_version' => '3.5.8',
      'version' => '3.5.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '9d583721a7157ee997f235f327de038e7ea6dac4',
    ),
    'symfony/config' => 
    array (
      'pretty_version' => 'v5.2.3',
      'version' => '5.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '50e0e1314a3b2609d32b6a5a0d0fb5342494c4ab',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v4.4.19',
      'version' => '4.4.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '24026c44fc37099fa145707fecd43672831b837a',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v5.2.3',
      'version' => '5.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f65f217b3314504a1ec99c2d6ef69016bb13490f',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v5.2.3',
      'version' => '5.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '62f72187be689540385dce6c68a5d4c16f034139',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5fa56b4074d1ae755beb55617ddafe6f5d78f665',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v4.4.19',
      'version' => '4.4.19.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c352647244bd376bf7d31efbd5401f13f50dad0c',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v1.1.9',
      'version' => '1.1.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '84e23fdcd2517bf37aecbd16967e83f0caee25a7',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1',
      ),
    ),
    'symfony/filesystem' => 
    array (
      'pretty_version' => 'v5.2.3',
      'version' => '5.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '262d033b57c73e8b59cd6e68a45c528318b15038',
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v5.2.3',
      'version' => '5.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '4adc8d172d602008c204c2e16956f99257248e03',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v5.2.3',
      'version' => '5.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '20c554c0f03f7cde5ce230ed248470cccbc34c36',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.2.3',
      'version' => '5.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '7dee6a43493f39b51ff6c5bb2bd576fe40a76c86',
    ),
    'symfony/options-resolver' => 
    array (
      'pretty_version' => 'v5.2.3',
      'version' => '5.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '5d0f633f9bbfcf7ec642a2b5037268e61b0a62ce',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c942b1ac76c82448322025e084cadc56048b4e',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5601e09b69f26c1828b13b6bb87cb07cddba3170',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '2d63434d922daf7da8dd863e7907e67ee3031483',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '43a0283138253ed1d48d352ab6d0bdb3f809f248',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5232de97ee3b75b0360528dae24e73db49566ab1',
    ),
    'symfony/polyfill-php70' => 
    array (
      'pretty_version' => 'v1.20.0',
      'version' => '1.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f03a781d984aae42cebd18e7912fa80f02ee644',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc3063ba22c2a1fd2f45ed856374d79114998f91',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v4.4.19',
      'version' => '4.4.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '7e950b6366d4da90292c2e7fa820b3c1842b965a',
    ),
    'symfony/property-access' => 
    array (
      'pretty_version' => 'v5.2.3',
      'version' => '5.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '3af8ed262bd3217512a13b023981fe68f36ad5f3',
    ),
    'symfony/property-info' => 
    array (
      'pretty_version' => 'v5.2.3',
      'version' => '5.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '4e4f368c3737b1c175d66f4fc0b99a5bcd161a77',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd15da7ba4957ffb8f1747218be9e1a121fd298a1',
    ),
    'symfony/service-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'symfony/stopwatch' => 
    array (
      'pretty_version' => 'v5.2.3',
      'version' => '5.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b12274acfab9d9850c52583d136a24398cdf1a0c',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v5.2.3',
      'version' => '5.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c95468897f408dd0aca2ff582074423dd0455122',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v5.2.3',
      'version' => '5.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '338cddc6d74929f6adf19ca5682ac4b8e109cdb0',
    ),
    'tedivm/jshrink' => 
    array (
      'pretty_version' => 'v1.3.3',
      'version' => '1.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '566e0c731ba4e372be2de429ef7d54f4faf4477a',
    ),
    'temando/module-shipping' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'temando/module-shipping-m2' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'temando/module-shipping-remover' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'thecodingmachine/safe' => 
    array (
      'pretty_version' => 'v1.3.3',
      'version' => '1.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a8ab0876305a4cdaef31b2350fcb9811b5608dbc',
    ),
    'theseer/fdomdocument' => 
    array (
      'pretty_version' => '1.6.6',
      'version' => '1.6.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '6e8203e40a32a9c770bcb62fe37e68b948da6dca',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '75a63c33a8577608444246075ea0af0d052e452a',
    ),
    'tinymce/tinymce' => 
    array (
      'replaced' => 
      array (
        0 => '3.4.7',
      ),
    ),
    'trentrichardson/jquery-timepicker-addon' => 
    array (
      'replaced' => 
      array (
        0 => '1.4.3',
      ),
    ),
    'true/punycode' => 
    array (
      'pretty_version' => 'v2.1.1',
      'version' => '2.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4d0c11a36dd7f4e7cd7096076cab6d3378a071e',
    ),
    'tubalmartin/cssmin' => 
    array (
      'pretty_version' => 'v4.1.1',
      'version' => '4.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3cbf557f4079d83a06f9c3ff9b957c022d7805cf',
    ),
    'twbs/bootstrap' => 
    array (
      'replaced' => 
      array (
        0 => '3.1.0',
      ),
    ),
    'vertex/module-address-validation' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'vertex/module-tax' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'vertex/product-magento-module' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'vertex/sdk' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'videlalvaro/php-amqplib' => 
    array (
      'replaced' => 
      array (
        0 => 'v2.10.1',
      ),
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v2.6.7',
      'version' => '2.6.7.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b786088918a884258c9e3e27405c6a4cf2ee246e',
    ),
    'webimpress/safe-writer' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5cfafdec5873c389036f14bf832a5efc9390dcdd',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.9.1',
      'version' => '1.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bafc69caeb4d49c39fd0779086c03a3738cbb389',
    ),
    'webonyx/graphql-php' => 
    array (
      'pretty_version' => 'v0.13.9',
      'version' => '0.13.9.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd9a94fddcad0a35d4bced212b8a44ad1bc59bdf3',
    ),
    'weew/helpers-array' => 
    array (
      'pretty_version' => 'v1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9bff63111f9765b4277750db8d276d92b3e16ed0',
    ),
    'wikimedia/less.php' => 
    array (
      'pretty_version' => '1.8.2',
      'version' => '1.8.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e238ad228d74b6ffd38209c799b34e9826909266',
    ),
    'yotpo/magento2-module-yotpo-reviews' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'yotpo/magento2-module-yotpo-reviews-bundle' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'zendframework/zend-captcha' => 
    array (
      'replaced' => 
      array (
        0 => '2.9.0',
      ),
    ),
    'zendframework/zend-code' => 
    array (
      'replaced' => 
      array (
        0 => '3.4.1',
      ),
    ),
    'zendframework/zend-config' => 
    array (
      'replaced' => 
      array (
        0 => '2.6.0',
      ),
    ),
    'zendframework/zend-console' => 
    array (
      'replaced' => 
      array (
        0 => '2.8.0',
      ),
    ),
    'zendframework/zend-crypt' => 
    array (
      'replaced' => 
      array (
        0 => '2.6.0',
      ),
    ),
    'zendframework/zend-db' => 
    array (
      'replaced' => 
      array (
        0 => '^2.11.0',
      ),
    ),
    'zendframework/zend-di' => 
    array (
      'replaced' => 
      array (
        0 => '2.6.1',
      ),
    ),
    'zendframework/zend-diactoros' => 
    array (
      'replaced' => 
      array (
        0 => '~1.8.7.0',
      ),
    ),
    'zendframework/zend-escaper' => 
    array (
      'replaced' => 
      array (
        0 => '^2.6.1',
      ),
    ),
    'zendframework/zend-eventmanager' => 
    array (
      'replaced' => 
      array (
        0 => '^3.2.1',
      ),
    ),
    'zendframework/zend-feed' => 
    array (
      'replaced' => 
      array (
        0 => '^2.12.0',
      ),
    ),
    'zendframework/zend-filter' => 
    array (
      'replaced' => 
      array (
        0 => '^2.9.2',
      ),
    ),
    'zendframework/zend-form' => 
    array (
      'replaced' => 
      array (
        0 => '^2.14.3',
      ),
    ),
    'zendframework/zend-http' => 
    array (
      'replaced' => 
      array (
        0 => '^2.11.2',
      ),
    ),
    'zendframework/zend-hydrator' => 
    array (
      'replaced' => 
      array (
        0 => '2.4.2',
      ),
    ),
    'zendframework/zend-i18n' => 
    array (
      'replaced' => 
      array (
        0 => '^2.10.1',
      ),
    ),
    'zendframework/zend-inputfilter' => 
    array (
      'replaced' => 
      array (
        0 => '2.10.1',
      ),
    ),
    'zendframework/zend-json' => 
    array (
      'replaced' => 
      array (
        0 => '2.6.1',
      ),
    ),
    'zendframework/zend-loader' => 
    array (
      'replaced' => 
      array (
        0 => '^2.6.1',
      ),
    ),
    'zendframework/zend-log' => 
    array (
      'replaced' => 
      array (
        0 => '2.12.0',
      ),
    ),
    'zendframework/zend-mail' => 
    array (
      'replaced' => 
      array (
        0 => '^2.10.0',
      ),
    ),
    'zendframework/zend-math' => 
    array (
      'replaced' => 
      array (
        0 => '2.7.1',
      ),
    ),
    'zendframework/zend-mime' => 
    array (
      'replaced' => 
      array (
        0 => '^2.7.2',
      ),
    ),
    'zendframework/zend-modulemanager' => 
    array (
      'replaced' => 
      array (
        0 => '^2.8.4',
      ),
    ),
    'zendframework/zend-mvc' => 
    array (
      'replaced' => 
      array (
        0 => '2.7.15',
      ),
    ),
    'zendframework/zend-psr7bridge' => 
    array (
      'replaced' => 
      array (
        0 => '0.2.2',
      ),
    ),
    'zendframework/zend-serializer' => 
    array (
      'replaced' => 
      array (
        0 => '^2.9.1',
      ),
    ),
    'zendframework/zend-server' => 
    array (
      'replaced' => 
      array (
        0 => '^2.8.1',
      ),
    ),
    'zendframework/zend-servicemanager' => 
    array (
      'replaced' => 
      array (
        0 => '2.7.11',
      ),
    ),
    'zendframework/zend-session' => 
    array (
      'replaced' => 
      array (
        0 => '^2.9.1',
      ),
    ),
    'zendframework/zend-soap' => 
    array (
      'replaced' => 
      array (
        0 => '^2.8.0',
      ),
    ),
    'zendframework/zend-stdlib' => 
    array (
      'replaced' => 
      array (
        0 => '^3.2.1',
      ),
    ),
    'zendframework/zend-text' => 
    array (
      'replaced' => 
      array (
        0 => '2.7.1',
      ),
    ),
    'zendframework/zend-uri' => 
    array (
      'replaced' => 
      array (
        0 => '^2.7.1',
      ),
    ),
    'zendframework/zend-validator' => 
    array (
      'replaced' => 
      array (
        0 => '^2.13.0',
      ),
    ),
    'zendframework/zend-view' => 
    array (
      'replaced' => 
      array (
        0 => '^2.11.4',
      ),
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
