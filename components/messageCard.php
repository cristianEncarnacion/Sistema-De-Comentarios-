<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    echo '<div class="card">';
    echo '    <div class="card-body p-4">';
    echo '        <div class="d-flex">';
    echo '            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>';
    echo '            < class="ms-4">';
    echo "                <p class='mb-1'>$name</p>";
    echo "                <div class='small text-muted'><p class='card-text'>$message</p></div>";
    echo '            </div>';
    echo '            </div>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';
}
?>
