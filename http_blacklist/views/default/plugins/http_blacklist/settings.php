<?php

$plugin = elgg_extract("entity", $vars);
if (!$plugin->httpblmaxdays) {
	$plugin->httpblmaxdays = 21;
}

if (!$plugin->httpblmaxthreat) {
	$plugin->httpblmaxthreat = 25;
}

?>
<div>
	<?php
		echo elgg_echo('http_blacklist:httpblkey');
		echo elgg_view("input/text", array("name" => "params[httpblkey]", "value" => $plugin->httpblkey));
		echo '<div class="elgg-subtext">'.elgg_echo('http_blacklist:httpblkey:description').'</div>';
	?>
</div>
<div>
	<?php
		echo elgg_echo('http_blacklist:httpblmaxdays');
		echo elgg_view("input/text", array("name" => "params[httpblmaxdays]", "value" => $plugin->httpblmaxdays));
		echo '<div class="elgg-subtext">'.elgg_echo('http_blacklist:httpblmaxdays:description').'</div>';
	?>
</div>
<div>
	<?php
		echo elgg_echo('http_blacklist:httpblmaxthreat');
		echo elgg_view("input/text", array("name" => "params[httpblmaxthreat]", "value" => $plugin->httpblmaxthreat));
		echo '<div class="elgg-subtext">'.elgg_echo('http_blacklist:httpblmaxthreat:description').'</div>';
	?>
</div>
<div>
	<?php
		echo elgg_echo('http_blacklist:httpblhoneypot');
		echo elgg_view("input/text", array("name" => "params[httpblhoneypot]", "value" => $plugin->httpblhoneypot));
		echo '<div class="elgg-subtext">'.elgg_echo('http_blacklist:httpblhoneypot:description').'</div>';
	?>
</div>
