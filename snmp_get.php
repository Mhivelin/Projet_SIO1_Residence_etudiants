<?php

$ip = 'localhost'; // Adresse IP de l'hôte
$community = 'public'; // Communauté SNMP
$oid = '.1.3.6.1.2.1.1.5.0'; // OID de l'objet à récupérer

// Requête SNMP GET
$value = snmpget($ip, $community, $oid);

// Affichage de la valeur
echo "La valeur de l'objet $oid est : $value";
?>