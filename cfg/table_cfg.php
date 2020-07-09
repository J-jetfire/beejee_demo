<?php
$sort = isset($_GET['sort']) ? $_GET['sort'] : "asc";
$column = isset($_GET['col']) ? $_GET['col'] : "id";
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$page = intval($page);
$limit = 3;

$total = getCount();
if ($page > $total) { $page = $total; }
if ($page < 1) { $page = 1; }
$offset = $limit * ($page - 1);

$options = getTasklist($limit, $offset, $column, $sort);

if (($sort == "asc") && (isset($_GET['sort']))) { $sort_col = "desc"; }
else { $sort_col = "asc"; }

if ($column == "username") {
   if ($sort == "asc") { $username_ico = 'class="sortDown"'; }
   else if ($sort == "desc") { $username_ico = 'class="sortUp"'; }
   else { $username_ico = ""; }
}
if ($column == "email") {
   if ($sort == "asc") { $email_ico = 'class="sortDown"'; }
   else if ($sort == "desc") { $email_ico = 'class="sortUp"'; }
   else { $email_ico = ""; }
}
if ($column == "status") {
   if ($sort == "asc") { $status_ico = 'class="sortDown"'; }
   else if ($sort == "desc") { $status_ico = 'class="sortUp"'; }
   else { $status_ico = ""; }
}

?>
