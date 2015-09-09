<?php
	$created_at = date('F d, Y', strtotime($this->session->userdata['created_at']));
?>

<!DOCTYPE html>
<head>
	<title>User Information</title>
	<style type="text/css">
		#container
		{
			margin: 0 auto;
		}

		#post
		{
			width: 250px;
			height: 100px;
			border-style: solid;
			border-width: 5px;
		}

		#reply
		{
			margin-left: 50px;
			width: 250px;
			height: 100px;
			border-style: solid;
			border-width: 1px;
		}
	</style>
</head>
<body>
<div id="container">
	<h2><?= $this->session->userdata('name'); ?></h2>
<?=	"<h3><a href='/edit_profile/" . $this->session->userdata('id') . "'>EDIT PROFILE</a></h3>";
?>
	<form action="/show_dashboard" method="post">
		<input type="submit" value="Return to Dashboard"/>
	</form>
	<h3><a href="/logout">LOGOUT</a></h3>
	<p>Registered at:  <?= $created_at; ?></p>
	<p>User ID:  <?= $this->session->userdata('id'); ?></p>
	<p>Email Address:  <?= $this->session->userdata('email'); ?></p>
	<p>Description:</p>
		<p><?= $this->session->userdata('description'); ?></p>
	<h3>Leave a message for <?= $this->session->userdata('first_name'); ?></h3>

<?= "<form action='/post_message' method='post'>
		<input type='hidden' name='from_id' value='" . $this->session->userdata['current_user'] . "'>
		<input type='hidden' name='to_id' value='" . $this->session->userdata['id'] . "'>
		<textarea name='message' cols='40' rows='5'></textarea><br/><br/>
		<input type='submit' value='POST'/>
	</form><br/>";

	foreach ($posts as $post) 
	{
		$replies = $this->profile->get_all_replies_to_post_by_postid($post['id']);

		echo "<form action='/post_reply' method='post'>
				<div id='post'>
					<h4><b>" . $post['from_id'] ." wrote: " . $post['posted_at'] . "</b></h4>
					<p>" . $post['message'] . "</p>
				</div><br/>";

		foreach ($replies as $reply) 
		{
			echo "<div id='reply'>
					<p>" . $reply['user_name'] . " replied: " . $reply['replied_at'] . "</p>
					<p>" . $reply['reply'] . "</p>
				</div><br/>";
		}

		echo	"<textarea name='reply' cols='20' rows='3'></textarea>
				<input type='hidden' name='post_id' value='" . $post['id'] . "'/>
				<input type='hidden' name='user_name' value='" . $this->session->userdata['current_user'] . "'/><br/>
				<input type='submit' value='REPLY'/>
			</form><br/><br/>";
	}

?>
</div>
</body>
</html>