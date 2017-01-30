<html>
<form method="post" action="">
    <input type="text" id="email" name="name" required>
    <input type="button" value="Send Email" onclick="send()/>
</form>
<script type="text/javascript">
  function send() {
    var link = 'mailto:charandestroyer@gmail.com?subject=Message from '
             +document.getElementById('email').value
             +'&body='+document.getElementById('email').value;
    window.location.href = https://mail.google.com/mail/;
}
</script>
public void SendEmail(string subject, string message)
{
     // Standard C# Send Mail stuff    
}
</html>