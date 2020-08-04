<div class="col-lg-4">
	<div class="panel panel-default">
	<?php
		$me=mysqli_query($conn,"select * from chat_member left join chatroom on chatroom.chatroomid=chat_member.chatroomid where chat_member.userid='".$_SESSION['id']."' order by chatroom.date_created desc");
		$numme=mysqli_num_rows($me);
	?>
		<div class="panel-heading"><center><strong>My Chatrooms <span class="badge"><?php echo $numme; ?></span></strong></center></div>
		<div class="panel-body">
		<table width="100%" class="table table-striped table-bordered table-hover" id="myChatRoom">
			<thead>
			<th>Chat Room Name</th>
			<th></th>
			</thead>
			<tbody>
			<?php
				$my=mysqli_query($conn,"select * from chat_member left join chatroom on chatroom.chatroomid=chat_member.chatroomid where chat_member.userid='".$_SESSION['id']."' order by chatroom.date_created desc");
					while($myrow=mysqli_fetch_array($my)){
						$nq=mysqli_query($conn,"select * from chat_member where chatroomid='".$myrow['chatroomid']."'");
						?>
						<tr>
							<td><span class="glyphicon glyphicon-user"></span><span class="badge"><?php echo mysqli_num_rows($nq); ?></span> <a href="chatroom.php?id=<?php echo $myrow['chatroomid']; ?>"><?php echo $myrow['chat_name']; ?></a></td>
							<td>
								<?php
									$memb=mysqli_query($conn,"select * from chatroom where userid='".$_SESSION['id']."' and chatroomid='".$myrow['chatroomid']."'");
									if (mysqli_num_rows($memb)>0){
										?>
										<button type="button" class="btn btn-danger btn-sm delete2" value="<?php echo $myrow['chatroomid']; ?>">Delete</button>
										<?php
									}
									else{
										?>
										<button type="button" class="btn btn-warning btn-sm leave2" value="<?php echo $myrow['chatroomid']; ?>">Leave</button>
										<?php
									}
								?>
							</td>
						</tr>
						<?php
					}
			?>
			</tbody>
		</table>
		</div>
	</div>
	<div >
	<form name="video" action="" method="post">
	<h3 style="color:white;">Enter the youtube Song or Playlist URL here and enjoy the songs without ads. Enjoy!!</h3>
  <input type="text" name="video" id="video" placeholder="Enter the url here..." style="padding:10px 10px 10px 10px;width:100%;border-radius:5px;">
	</form>
		<?php
		 $str = (isset($_POST['video']) ? $_POST['video'] : '');
		 if(strpos($str,"watch?v=") !== false){
		 $str3=str_replace("watch?v=","embed/",$str);
		 }
		 else{
			$str3=str_replace("playlist","embed/videoseries",$str);
		 }
		 echo "
		<iframe width='430' id='song' height='315' src='$str3' border-radius='10px' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
		";
		?>
	
</div>
</div>

 