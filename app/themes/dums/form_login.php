<?PHP 
// DUMS Login Form

IF (!$page['parent']) 
{
	echo '
	<BR>
	<div class="row">
	<div class="large-6 small-6 large-centered small-centered columns">
	<div data-alert="" class="alert-box alert round">
    ERROR: No Parent Found!<BR>
    </div>
    </div>
  	</div>';
  	
}
ELSE 
{
?>

<!-- DUMS Login Form -->

<form method="post">
<div class="row">
<div class="large-6 small-6 large-centered small-centered columns">
<fieldset >
<legend>Login</legend>
<form data-abide method="post">


<?PHP // ERROR BOX
if (isset($_POST['usererror']))
{ ?>
<div data-alert="" class="alert-box alert round">
<?PHP echo $_POST['usererror']; ?>
<a href="" class="close">×</a>
</div>
<?PHP } ?>	
<div class="email-field">
<label>Email <small>required</small>
<input type="email" name="login" value="<?PHP IF(ISSET($_POST['login'])) { echo $_POST['login']; }?>" required>
</label>
</div>

<div class="name-field">
<label>Password <small>required</small>
<input type="password" name="password" value="<?PHP IF(ISSET($_POST['password'])) { echo $_POST['password']; }?>" required>
</label>
</div>
<div>
<button type="submit" name="submit" value="submit">Submit</button>
</div>
</form>
</fieldset>
</div>
</div>
</form>

<?PHP
}

?>