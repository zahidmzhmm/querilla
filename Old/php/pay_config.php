<?php
include "stripe/init.php";
$p_key = "pk_test_51HPfdZHI2zaeiIxo2AMT7y1KJMzpco6hHZxuaPQKA8xVZNAljEUWGI00wNqh35HxPjfViyqt3nXMIXMXlcufPV8N002w7INrIs";
$s_key = "sk_test_51HPfdZHI2zaeiIxomTMpkyK1YGPOl6Y4M7Eaa9cCVYvKAiR8Wfuoe0VV6XzsyUJQd8R837j32FPjxvzPBtEAnKgK00vZyJ8FAz";
//$p_key = "pk_live_51IBMy3KnxLnx8HMqqIvGBNkCCKshyfVZTWPcoLRqRfFf4PcQwfE9IRFwkXSLKoqfepwUQ92zPIN2TU0QnqrlPJtC007w0TxSB8";
//$s_key = "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";
\Stripe\Stripe::setApiKey($s_key);
?>