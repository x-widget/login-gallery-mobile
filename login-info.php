<div class='login-box-gallery-mobile logout-box-gallery-mobile'>
<div class='logout-inner'>
	<table width='100%' cellpadding=0 cellspacing=0><tr valign='top'>
	<td>
		<div class='user-info'>
		<? if ( super_admin() ) {  ?>
				<div class='top'>
					<div class='left'>
						<div><a href="<?=url_bbs()?>/member_confirm.php?url=register_form.php">내 프로필</a></div>
					</div>
					<div class='right'>
						<?if ( admin() ){?>
						<div><a class='info text' href='<?=x::url_admin()?>'>X-ADMIN</a></div>
						<? if ( super_admin() ) {?>
						<div><a class='info text' href='<?=g::url()?>/adm'>ADMIN</a></div>
						<? }?>						
					<?}?>					
					</div>
					<div style='clear;both'></div>
				</div>
		<? }?>
			
			<div class='user-meta'>
				<span class='user-icon-points'>
					<span class='user-message'>
						<img src='<?=$widget_config['url']?>/msg-icon.png'/>
						<?
						if( g::memo_new() == 0 ) $no_msgs = 'no-msg';
						?>
						<a href="<?=url_bbs()?>/memo.php" target="_blank" class='user_memo'>쪽지 <span class='memo-not-read <?=$no_msgs?>'>[<?=g::memo_new()?>] </span></a>
				
					</span>
					<br>
					<span class='user-points'>
						<img src='<?=$widget_config['url']?>/star.png'/>
						<? if ( admin() ) {?>
							<a href="<?=url_site_config()?>" class='user-win'>사이트 관리</a>
						<? }
							else {?>	
								<a href="<?=url_bbs()?>/point.php" target="_blank" class='user-win'>포인트</a> <?=$point?>
						<? }?>
					</span>
				</span>
				
			</div>
			</div>
	</td>
	<td class='logout-btn-td'>
		<div class='log_out'>
			<a href="<?=url_bbs()?>/logout.php"><img src='<?=$widget_config['url']?>/signout_button.png'/></a>
		</div>
	</td>
	</tr></table>
	<div class='user-logged-name'><?=my('nick')?> IS LOGGED IN</div>
</div>
</div> 