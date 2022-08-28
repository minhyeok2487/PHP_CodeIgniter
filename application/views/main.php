토픽 메인 페이지 입니다
<ul>
<?php
foreach($topics as $entry) {
?>
    <li><a href="/index.php/topic/get/<?=$entry->user_no?>"><?=$entry->user_email?></a></li>
<?php
}
?>
</ul>