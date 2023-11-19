<?php
script('basicskeleton', 'script');
style('basicskeleton', 'style');
?>

<div id="content" style="margin-top: -1px; margin-left: -1px;">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('navigation/index')); ?>
		<?php print_unescaped($this->inc('settings/index')); ?>
	</div>

	<div id="app-content">
		<?php print_unescaped($this->inc('content/index')); ?>
	</div>
</div>