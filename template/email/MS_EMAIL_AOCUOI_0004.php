<?php
  $email = new action_email();
  $email->gui_email();
?>
<div class="send-email_">
	<form action="" method="post">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Enter You Emai*">
			<div class="input-group-btn">
				<button class="btn btn-default" type="submit" name="send_email">
					<i class="fa fa-paper-plane" aria-hidden="true"></i>
				</button>
			</div>
		</div>
	</form>
</div>