<div class="row pager" id="pager">
<?php
if ($page != 1) $pervpage = '<a href=?page=1&col='.$column.'&sort='.$sort.'><<</a>
                               <a href=?page='. ($page - 1) .'&col='.$column.'&sort='.$sort.'><</a> ';
if ($page != $total) $nextpage = ' <a href=?page='. ($page + 1) .'&col='.$column.'&sort='.$sort.'>></a>
                                   <a href=?page=' .$total. '&col='.$column.'&sort='.$sort.'>>></a>';
if($page - 2 > 0) $page2left = ' <a href=?page='. ($page - 2) .'&col='.$column.'&sort='.$sort.'>'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page1left = '<a href=?page='. ($page - 1) .'&col='.$column.'&sort='.$sort.'>'. ($page - 1) .'</a> | ';
if($page + 2 <= $total) $page2right = ' | <a href=?page='. ($page + 2) .'&col='.$column.'&sort='.$sort.'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href=?page='. ($page + 1) .'&col='.$column.'&sort='.$sort.'>'. ($page + 1) .'</a>';

echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage;
?>
</div>
