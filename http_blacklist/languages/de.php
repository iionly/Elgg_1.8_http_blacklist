<?php

$german = array(
	'http_blacklist:httpblkey' => 'Gebe Deinen Project Honey Pot API-Key ein: ',
	'http_blacklist:httpblkey:description' => '(Registriere einen (kostenlosen) Account auf http://www.projecthoneypot.org/ und erzeuge Deinen persönlichen API-Key)',
	'http_blacklist:httpblmaxdays' => 'Zeitintervall während dem in der Blacklist enthaltene IPs geblockt/umgeleitet werden sollen: ',
	'http_blacklist:httpblmaxdays:description' => '(Wert zwischen 0 und 255 Tagen; wenn eine IP letztmalig im angegebenen Zeitintervall aufgefallen ist, wird sie vom http:blacklist-Plugin berücksichtigt)',
	'http_blacklist:httpblmaxthreat' => 'Blockiere in der Blacklist enthaltene IPs oder leite sie um, wenn ihr Threat-Score höher ist als...',
	'http_blacklist:httpblmaxthreat:description' => '(Wert zwischen 0 und 255; ein höherer Threat-Score bedeutet eine größere Gefahr; gebe hier einen Schwellenwert an unterhalb dessen die IP nicht geblockt/umgeleitet werden soll)',
	'http_blacklist:httpblhoneypot' => 'Deine Honeypot-Seite (optional). Gebe die URL ohne http:// ein, auf die umgeleitet werden soll: ',
	'http_blacklist:httpblhoneypot:description' => '(weitere Informationen über die Einrichtung einer Honeypot-Seite ist auf der Project Honey Pot-Webseite verfügbar; wenn Du hier keine URL eingibst, werden die entsprechenden IPs geblockt anstatt umgeleitet)'
);
add_translation("de",$german);