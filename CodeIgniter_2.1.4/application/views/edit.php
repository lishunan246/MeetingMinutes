<form id="meeting_edot" class="form-horizontal" role="form" method="post" action=<?php echo '"'.$base_url.'index.php/editmeeting/create"';?> enctype="multipart/form-data">
  <div class="form-group">
    <label for="mtitle" class="col-sm-2 control-label">会议标题</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="mtitle" name="mtitle" placeholder="请输入会议标题">
    </div>
  </div><div class="form-group">
    <label for="mdate" class="col-sm-2 control-label">会议日期</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="mdate" name="mdate" placeholder="请输入会议日期">
    </div>
  </div>
  <div class="form-group">
    <label for="address" class="col-sm-2 control-label">会议地点</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="address" name="address" placeholder="请输入会议地点">
    </div>
  </div>
  <div class="form-group">
    <label for="start" class="col-sm-2 control-label">开始时间</label>
    <div class="col-sm-10">
      <input type="time" class="form-control" id="start" name="start" placeholder="请输入会议开始时间">
    </div>
  </div>
  <div class="form-group">
    <label for="end" class="col-sm-2 control-label">结束时间</label>
    <div class="col-sm-10">
      <input type="time" class="form-control" id="end" name="end" placeholder="请输入会议结束时间">
    </div>
  </div>


  <div class="form-group"> 
    <label  class="col-sm-2 control-label">与会人员</label>
    <div class="col-sm-10">
      <?php 
        foreach ($people as $person) 
        {
          echo '<label class="checkbox-inline">
        <input type="checkbox" id="inlineCheckbox" value='.$person->pid.' name='.$person->pid.'> '.$person->pname.'
      </label>';
        }
      ?>

    
    </div>
  </div>

  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">会议内容</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="7" id="content" name="content"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="file" class="col-sm-2 control-label">附件</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="file" name="file" placeholder="上传附件">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">提交</button>
    </div>
  </div>
</form>