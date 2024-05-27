<?php
require 'config.php';

$sql = "SELECT id, title, author, description FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="col-md-4">';
        echo '  <div class="card">';
        echo '    <div class="card-body">';
        echo '      <h5 class="card-title">' . $row["title"] . '</h5>';
        echo '      <h6 class="card-subtitle mb-2 text-muted">' . $row["author"] . '</h6>';
        echo '      <p class="card-text">' . $row["description"] . '</p>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }
} else {
    echo "0 résultats";
}

$conn->close();
?>
