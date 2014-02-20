<h2><?=$meeting[0]->mtitle?></h2>
<p class="text-info">会议日期 <?=$meeting[0]->mdate?></p>
<p class="text-info">会议时间 从 <?=$meeting[0]->start?> 到 <?=$meeting[0]->end?></p>
<p class="text-info">会议地点 <?=$meeting[0]->address?></p>
<p class="text-info">与会人员 <?php foreach ($people as $p) {
echo $p->pname;
echo " ";}
?>
</p>
<?php
if($meeting[0]->havefile)
	echo '<a role="button" class="btn btn-info" href="'.$meeting[0]->file.'">下载附件</a>';
?>


<p class="text-primary"><?=$meeting[0]->content?></p>
<button type="button" class="btn btn-info" onclick="javascript:history.back()">后退</button>