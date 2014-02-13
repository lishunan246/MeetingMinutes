					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
						  <tr>
						    <th>序号</th>
						    <th>会议标题</th>
						    <th>会议时间</th>
						    <th>新建会议记录</th>
						  </tr>
						  <?php foreach ($meetings as $meeting) {
						  echo "<tr>
						    <td>".$meeting->mid."</td>
						    <td>".$meeting->mtitle."</td>
						    <td>".$meeting->mdate."</td>
						    <td>查看详情</td>
						  </tr>";	
						  }
						  ?>
						</table>
					</div>