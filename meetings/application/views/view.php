<h2><?=$meeting[0]->mtitle?></h2>
<div class="row">
<p class="col-md-2"><strong>会议日期</strong> </p><p class="col-md-10"><?=$meeting[0]->mdate?></p>
<p class="col-md-2"><strong>会议时间</strong> </p><p class="col-md-10">从 <?=$meeting[0]->start?> 到 <?=$meeting[0]->end?></p>
<p class="col-md-2"><strong>会议地点</strong> </p><p class="col-md-10"><?=$meeting[0]->address?></p>
<p class="col-md-2"><strong>与会人员</strong> </p><p class="col-md-10"><?php foreach ($people as $p) {
echo $p->pname;
echo " ";}
?>
</p>
</div>

<div class="row">

<p class="col-md-2"><strong>会议内容</strong>  </p></div>
<div><?=$content?></div>

<button type="button" class="btn btn-default" onclick="javascript:history.back()">后退</button>
<a type="button" class="btn btn-primary" href=<?php echo '"'.$base_url.'index.php/editmeeting/modify/'.$meeting[0]->mid.'"';?>>编辑</a>
<a type="button" class="btn btn-danger" href=<?php echo '"'.$base_url.'index.php/editmeeting/deleteMeeting/'.$meeting[0]->mid.'"';?>>删除</a>

<?php
if($meeting[0]->havefile)
	echo '<a role="button" class="btn btn-info" href="'.$meeting[0]->file.'">下载附件</a>';
?>

