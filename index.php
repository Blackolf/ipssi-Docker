<?php
ini_set('SMTP', "server.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "email@domain.com");
mail("recipient", "subject", "message", "From: AAAAAAAAA");
phpinfo();
