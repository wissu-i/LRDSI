<?php
include('connect.php');
$news = mysqli_query($conn, 'select * from news');

while($row = mysqli_fetch_array($news)) {
   echo '<div class="news-item">';
   echo '<h3>' . $row['title'] . '</h3>';
   echo '<p>' . $row['content'] . '</p>';
   echo '</div>';
}
?>