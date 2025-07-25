<?php
// redirect.php

// Try to redirect user to chrome://settings/resetProfileSettings?origin=userclick

header('Location: chrome://settings/resetProfileSettings?origin=userclick');
exit;
