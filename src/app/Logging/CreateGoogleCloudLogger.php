<?php

namespace App\Logging;

use Google\Cloud\Logging\LoggingClient;
use Monolog\Logger;

class CreateGoogleCloudLogger {
    public function __invoke() {

      $name = "googlecloud";
       $logging = new LoggingClient([
          'projectId' => "hello-project-v2-20171225"
       ]);

      //  $logger = new Logger($name);
      //  echo "123";
       return $logging->psrLogger('app');      
    }
}