					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
						  <tr>						    
						    <th>会议标题</th>
						    <th>会议时间</th>
						    <?php 
						    echo ' <th><a href="'.$base_url.'index.php/editmeeting/index/">新建会议记录</a></th>';
						    ?>
						
						  </tr>
						  <?php foreach ($meetings as $meeting) {
						  echo "<tr>						    
						    <td>".$meeting->mtitle."</td>
						    <td>".$meeting->mdate."</td>
						    <td><a href=".$base_url.'index.php/viewmeeting/index/'.$meeting->mid.">查看详情</a></td>
						  </tr>";	
						  }
						  ?>
						</table>
					</div>