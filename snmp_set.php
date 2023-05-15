<?php
// Configuration SNMP
$ip = '192.168.0.10'; // IP de l'appareil à modifier
$community = 'private'; // Communauté SNMP en lecture/écriture
$oid = '.1.3.6.1.2.1.1.5.0'; // OID de l'objet à modifier
$value = 'Nouvelle valeur'; // Nouvelle valeur de l'objet

// Requête SNMP SET
$success = snmpset($ip, $community, $oid, 's', $value);

// Vérification de la réussite de la requête
if ($success) {
    echo "La nouvelle valeur de l'objet $oid est : $value";
} else {
    echo "La requête SNMP SET a échoué";
}
?>