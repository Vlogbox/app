<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message success alert alert-success main-success-box" onclick="this.classList.add('hidden')"><?= $message ?></div>
