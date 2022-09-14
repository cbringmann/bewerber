

$query = "SELECT * FROM posts LIMIT $page_1, $per_page";
$select_all_posts_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_all_posts_query)) {
$post_id = $row['post_id'];
$post_title = $row['post_title'];
$post_author = $row['post_user'];
$post_date = $row['post_date'];
$post_image = $row['post_image'];
$post_content = substr($row['post_content'],0,400);
$post_status = $row['post_status'];



?>