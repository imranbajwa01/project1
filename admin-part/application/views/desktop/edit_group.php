<script type="text/javascript" src="<?php echo base_url();?>/js/basic.js"></script>
<br>
<?php 
if($resultstatus){ echo "<div class='alert alert-success'>".$resultstatus."</div>"; }
 ?> 
<form method="post" action="<?php echo site_url('group/update_group/'.$gid);?>">
<a href="<?php echo site_url('group');?>"   class="btn btn-danger">Back</a>
<div class="row" style="margin-top:10px;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php if($title){ echo $title; } ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   
                                        <div class="form-group">
                                            <label>Group Name</label>
		                                         <input type='text'  class="form-control"  name='groupname'  value="<?php echo $group['group_name']; ?>">

                                         </div>
										 
									     <div class="form-group">
                                            
 <input type="submit" value="Submit" class="btn btn-default"> 
                                         </div>
										 
										 
										 
										 
								
								</div>
							</div>
						</div>
					</div>
				</div>
</div>

</form>
