<div class='login-box-gallery-mobile'>
	<div class='login-box-middle'>	
		<form action="<?=url_login_check()?>" method="post" autocomplete="off">
			<input type="hidden" name="url" value="<?php echo $outlogin_url ?>">
		<table width='100%' cellspacing=0 cellpadding=0><tr valign='top'>
		<td>
			<div  class='login-input'>
				<div class='login-user'>
					<input type="text" id="ol_id" name="mb_id" required  maxlength="20" placeholder='아이디'>
				</div>			
				<div class='login-pass'>
					<input type="password" name="mb_password" id="ol_pw" required maxlength="20" placeholder='비밀번호'>
				</div>
				<div style='clear:both'></div>
			</div>
		</td>
		<td width='80'>
			<div class='submit-button'>
				<input type="image" id="ol_submit" src='<?=$widget_config['url']?>/signin_button.png' />				
			</div>			
		</td>
		</tr>
		<tr valign='top'><td>	
			<div class='register_autologin'>
				<span class='auto_login'><input type="checkbox" name="auto_login" value="1" id="auto_login">자동 로그인</span>
				<a href='<?=url_register()?>' class='login-reg'>회원가입</a>
				<a href="<?=url_bbs()?>/password_lost.php" id="ol_password_lost">아이디/비번 찾기</a>						
			</div>
		</td></tr></table>
		</form>
		<div style='clear:both'></div>
	</div>
</div>