

<?php
$postVar = $_POST['data'];

if (!empty($postVar)) {
    mail("email@email.com","email subject","The POST was set and button was pressed");
}
?>