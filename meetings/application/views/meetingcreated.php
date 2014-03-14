
<?php if($display_errors)
	{
		echo "<p class='text-warning'>已经成功新建会议记录,但文件上传失败。如必要请重新编辑</p>";
		
		echo $display_errors;
		
	}
	else
echo "<p>恭喜，已经成功新建会议记录</p>";
	?>

<a href=<?php echo '"'.$base_url.'index.php/meetinglist"';?> role="button" class="btn btn-primary">查看会议列表</a>
<a href=<?php echo '"'.$base_url.'index.php/viewmeeting/index/'.$mid.'"';?> role="button" class="btn btn-default">查看此会议</a>