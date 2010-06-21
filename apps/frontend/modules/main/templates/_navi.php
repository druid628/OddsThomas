<div class="navigation">
	<div class="menuItem"><?PHP echo link_to('Home', 'main/index'); ?></div>
	<div class="menuItem"><?PHP echo link_to('Games', 'game/index'); ?></div>
	<?PHP  if($sf_user->hasPermission('AddOdds')): ?>
		<div class="menuItem"><?PHP echo link_to('Odds', 'odds/index'); ?></div>
	<?PHP endif; ?>
	<div class="menuItem"><?PHP echo link_to('Bets', 'bet/index'); ?></div>
	<div class="menuItem"><?PHP #echo link_to('Search', 'bondee/index'); ?></div>
	<div class="logout"><?PHP echo link_to('Logout', '@sf_guard_signout'); ?></div>
</div>