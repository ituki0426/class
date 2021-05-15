<?php declare(strict_types); ?>
<body>
<?php
     require_once dirname(__FILE__) . '/DigitalClock.php';
     $currentTime=strotime('2018-08-22 17:15');
     $digitalClock = new DigitalClock();
     $digitalClock->setTime($currentTime);
     echo $digitalClock->show();
?>
</body>