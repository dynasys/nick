<?php
    if(isset($_POST['view'])){
            $JID = $_POST['JID'];
            header("location: job_view.php?JID=".urlencode("$JID"));
        }

?>