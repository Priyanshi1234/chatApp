		<div class="col-lg-8">
            <div class="panel panel-default" style="height:50px;">
				<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span  id="user_details"><span class="glyphicon glyphicon-user"></span><span class="badge"><?php echo mysqli_num_rows($cmem); ?></span></span> <?php echo $chatrow['chat_name']; ?></strong></span>
				<div class="showme hidden" style="position: absolute; left:-120px; top:20px;">
					<div class="well">
						<strong>Room Member/s:</strong>
						<div style="height: 10px;"></div>
					<?php
						$rm=mysqli_query($conn,"select * from chat_member left join `user` on user.userid=chat_member.userid where chatroomid='$id'");
						while($rmrow=mysqli_fetch_array($rm)){
							?>
							<span>
							<?php
								$creq=mysqli_query($conn,"select * from chatroom where chatroomid='$id'");
								$crerow=mysqli_fetch_array($creq);
								
								if ($crerow['userid']==$rmrow['userid']){
									?>
										<span class="glyphicon glyphicon-user"></span>
									<?php
								}
								
							?>
							<?php echo $rmrow['uname']; ?></span><br>
							<?php
						}
						
					?>
						
					</div>
				</div>
				<div class="pull-right" style="margin-right:10px; margin-top:7px;">
					<?php
						if ($chatrow['userid']==$_SESSION['id']){
							?>
							<a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Lobby</a>
							<a href="#delete_room" data-toggle="modal" class="btn btn-danger">Delete Room</a>
							<a href="#add_member" data-toggle="modal" class="btn btn-primary">Add Member</a>
							<?php
						}
						else{
							?>
							<a href="index.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Lobby</a>
							<a href="#leave_room" data-toggle="modal" class="btn btn-warning">Leave Room</a>
							<?php
						}
					?>
				</div>
			</div>
			<div>
				<div class="panel panel-default" style="height: 400px;width:100%;float:left;">
					<div style="height:10px;"></div>
					<span style="margin-left:10px;">Welcome to Chatroom</span><br>
					
					<div style="height:10px;"></div>
					<div id="chat_area" style="margin-left:10px; max-height:320px; overflow-y:scroll;">
					</div>				
			</div>			
		</div>
	
	<div class="input-group" style="width:100%;">
					<input type="text" class="form-control" placeholder="Type message..." id="chat_msg">
					<span class="input-group-btn">
					<button class="btn btn-success" style="background-color:green;" type="submit" id="send_msg" value="<?php echo $id; ?>">
					<span class="glyphicon glyphicon-comment" ></span> Send
					</button>
					</span>
				</div>	
		<div>
			<h1 style="color:white;">Play Games Here....</h1>
		<?php
		 echo "
		 <iframe id='game' src='https://www.arkadium.com/free-online-games/'  width='100%' height='500' style='margin-top:20px;background-color:white;border-radius:5px;' border='0' ></iframe>
		";
		?>
	
</div>
</div>
		