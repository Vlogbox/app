<?php
// if (!isset($params['escape']) || $params['escape'] !== false) {
//     $message = h($message);
// }
?>
<div class="message error alert alert-danger main-error-box" role="alert" onclick="this.classList.add('hidden');"><?= $message ?></div>
