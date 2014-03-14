<?php 
$arr = array();
$arr[]=array("checked"=>FALSE,"pname"=>"pname","pid"=>"pid");
foreach ($all_people as $all_people) {
  $arr[]=array("checked"=>FALSE,"pname"=>$all_people->pname,"pid"=>$all_people->pid);
}
foreach ($people as $people) {
  $arr[$people->pid]=array("checked"=>TRUE,"pname"=>$arr[$people->pid]['pname']);
}

?>
<form id="meeting_edot" class="form-horizontal" role="form" method="post" action=<?php echo '"'.$base_url.'index.php/editmeeting/update/'.$meeting[0]->mid.'"';?> enctype="multipart/form-data">
  <div class="form-group">
    <label for="mtitle" class="col-sm-2 control-label">会议标题</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mtitle" name="mtitle" placeholder="请输入会议标题" value=<?php echo "'".$meeting[0]->mtitle."'";?>>
    </div>
  </div><div class="form-group">
    <label for="mdate" class="col-sm-2 control-label">会议日期</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mdate" name="mdate" placeholder="请输入会议日期" value=<?php echo "'".$meeting[0]->mdate."'";?>>
    </div>
  </div>
  <div class="form-group">
    <label for="address" class="col-sm-2 control-label">会议地点</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="address" name="address" placeholder="请输入会议地点" value=<?php echo "'".$meeting[0]->address."'";?>>
    </div>
  </div>
  <div class="form-group">
    <label for="start" class="col-sm-2 control-label">开始时间</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="start" name="start" placeholder="请输入会议开始时间" value=<?php echo "'".$meeting[0]->start."'";?>>
    </div>
  </div>
  <div class="form-group">
    <label for="end" class="col-sm-2 control-label">结束时间</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="end" name="end" placeholder="请输入会议结束时间" value=<?php echo "'".$meeting[0]->end."'";?>>
    </div>
  </div>

  <input type="hidden" name="old_file" value=<?php echo "'".$meeting[0]->file."'";?>>
  <input type="hidden" name="old_havefile" value=<?php echo "'".$meeting[0]->havefile."'";?>>


  <div class="form-group"> 
    <label  class="col-sm-2 control-label">与会人员</label>
    <div class="col-sm-10">
      <?php 
        for($i=1;$i<count($arr);$i++) 
        {
          
          echo '<label class="checkbox-inline">
        <input type="checkbox" id="inlineCheckbox" ';
         if($arr[$i]['checked'])
         echo "checked='checked' ";
        echo 'value='.$i.' name='.$i.'> '.$arr[$i]['pname'];
       
        echo "</label>";
        }
      ?>

    
    </div>
  </div>

  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">会议内容</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="7" id="content" name="content"> <?=$meeting[0]->content?></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="file" class="col-sm-2 control-label">附件</label>
    <div class="col-sm-10">
      <?php
        if($meeting[0]->havefile)
        {
          echo "<p class='text-info'>该会议有对应的附件,若上传新附件会覆盖原附件  ";
        echo '<a role="button" class="btn btn-info col-sm-offset-5" href="'.$meeting[0]->file.'">下载原附件</a>';
        echo "</p>";
        }
        else
          echo "<p class='text-info'>该会议没有对应的附件,可以上传新附件</p>";
      ?>
    
      <input type="file" class="form-control" id="file" name="file" placeholder="上传附件">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">提交</button>
    </div>
  </div>
</form>

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script src=<?php echo '"'.$base_url.'js/editmeeting.js"';?>></script>