<script type="text/javascript" src="<?php echo base_url();?>/js/basic.js"></script>

<?php 
if($resultstatus){ echo "<div class='alert alert-success'>".$resultstatus."</div>"; }
 ?> 

<div class="row" style="margin-top:10px;">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php if($title){ echo $title; } ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                	<li>For Category 1 Choose any Topic Like Math, Physics etc then Question will automatically added to Category 1.</li>
                                	<li>For Category 2 Question Choose Category 2 Option.</li>
                                	<li>For Category 3 Questions Choose Category 3 Option.</li>
                                <form method="post" action="<?php echo site_url('qbank/add_new_mul');?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Question Type</label>
		                                        <select class="form-control"  name="qus_type" OnChange="get_ques_type(this.value)">
												<option value="0"> Multiple Choice -single answers</option>
												<option value="1" selected> Multiple Choice -multiple answers</option>
												<option value="2">Fill in the Blank</option>
												<option value="3">Short Answer</option>
												<option value="4">Essay</option>
												<option value="5">Matching</option>
												</select>

                                         </div>

                                        <div class="form-group">
                                            <label>Select Category</label>
											<select class="form-control"  name="cid">
											<?php foreach($category as $value){ ?>
											<option value="<?php echo $value->cid; ?>"><?php echo $value->category_name; ?></option>
											<?php } ?></select>
										 </div>



                                        <div class="form-group">
                                            <label>Select Difficulty Level</label>
                                         <select class="form-control" name="did">
										<?php foreach($difficult_level as $value){ ?>
										<option value="<?php echo $value->did; ?>"><?php echo $value->level_name; ?></option>
										<?php } ?></select> 

                                         </div>
                                        <div class="form-group">
                                            <label>Question</label>
                                            <textarea name="question"></textarea> 
										 </div>
										 <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="userfile"> 
										 </div>



                                        <div class="form-group">
                                            <label>Description (Optional)</label>
                                            <textarea name="description"></textarea> 
                                            <p class="help-block">
                                            	Describe how question can be solved. <br>
												User can see description after submitting quiz in view answer section.
                                            </p>
										 </div>
<div class="form-group">
<table>
<tr><td valign="top">Options</td><td valign="top">
</td><td valign="top"></tr>
<tr><td valign="top">1) &nbsp;&nbsp; <input id="CheckBox[]" type="checkbox"  name="CheckBox[]" value="0" /></td><td valign="top">
<textarea name="option[]"></textarea> </td><td valign="top"><label>Points</label><input type="number" name="point[]" /></td></tr>
<tr><td valign="top">2) &nbsp;&nbsp; <input id="CheckBox[]" type="checkbox"  name="CheckBox[]" value="1" /></td><td valign="top">
<textarea name="option[]"></textarea> </td><td valign="top"><label>Points</label><input type="number" name="point[]" /></td></tr>


<?php $op="3"; ?>
<?php
if($this->input->post('add')){
for($j=1; $j<=$this->input->post('add'); $j++){ 
?>
<tr><td valign="top"><?php echo $op.")"; ?> &nbsp;&nbsp; <input id="CheckBox[]" type="checkbox"  name="CheckBox[]" value="<?php echo $op-1; ?>" /></td><td valign="top"><textarea name="option[]"></textarea> <td valign="top"><label>Points</label><input type="number" name="point[]" /></td> </td></tr>
<?php
$op++;
}
}
?>
<tr><td valign="top"></td><td valign="top"><br>
<input type="submit" value="Submit"  class="btn btn-default"> </td></tr>
</table>                                  




</div>





								</form>

								</div>
							</div>
						</div>
					</div>
				</div>
</div>

<div id="content" class="testd"><br>

<div class="formbox">

<form method="post" action="<?php echo site_url('qbank/add_new/1');?>">
<label>Add more options </label>
<div><select name="add" class="form-control" style="width:100px;float:left;">
<?php for($x=1; $x <= 100; $x++ ){ ?>
<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
<?php } ?></select>&nbsp;&nbsp;
<input type="submit" value="Add"   class="form-control" style="width:100px;float:left;margin-left:10px">
</div></form>


<div style="clear:both;"></div>
</div>

</div>



<script type="text/javascript">
		 
tinyMCE.init({
	
    mode : "textareas",
		theme : "advanced",
		relative_urls:false,
	 plugins: "jbimages",
	
  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================
	
 
	
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "jbimages,insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		
		
	});
 
</script>
