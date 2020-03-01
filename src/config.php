<?php

return [
    'acsservice_wsdl' => ENV('ACSMANAGER_ACSSERVICE_WSDL', 'http://10.32.29.1:8050/ACSService/?wsdl'),
    'acstaskservice_wsdl' => ENV('ACSMANAGER_ACSTASKSERVICE_WSDL', 'http://10.32.29.1:8050/ACSService/ACSTaskService?wsdl'),
    'default_group' => ENV('ACSMANAGER_DEFAULT_GROUP', 'root.zerotouch.fritzbox'),
];