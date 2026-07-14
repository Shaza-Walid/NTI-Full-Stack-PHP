<?php
session_start();                  // Start the session.
session_destroy();                // Remove all session data.
header("Location: index.php");    // Redirect the user back to Home page.
exit();
