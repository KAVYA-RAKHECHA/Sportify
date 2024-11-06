<?php
// Run Streamlit in the background
// $command = ' > /dev/null 2>&1 & echo $!';
$pid = exec("streamlit run /Applications/XAMPP/xamppfiles/htdocs/SPORTIFY/handle_ai_interaction.py");

// Give Streamlit a few seconds to start
sleep(3); // Adjust this if Streamlit takes longer to start

// Redirect to the Streamlit app
header("Location: http://localhost:8501");
exit();
?>