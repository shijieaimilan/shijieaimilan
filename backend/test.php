<?php
    if (isset($_POST['name']) && isset($_POST['info']))
    {
        echo "<strong>Post received.</strong> <br/> <br/> <strong>Name:</strong> " . $_POST['name'] . "<br/><strong>Info:</strong> " . $_POST['info'];
    }
    else
    {
        echo "Post not received.";
    }
?>