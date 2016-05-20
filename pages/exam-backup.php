<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
    $(".divs div").each(function(e) {
        if (e != 0)
            $(this).hide();
    });

    $("#next").click(function(){
        if ($(".divs div:visible").next().length != 0)
            $(".divs div:visible").next().show().prev().hide();
        else {
            // $(".divs div:visible").hide();
            // $(".divs div:first").show();
            $("#next").hide();
            $(".divs").hide();
            $("#finish").show();
        }
        return false;
    });
});
 </script>
 <script type="text/javascript">
var i=0;
function get_timeelapsed(){
var j = "time" + i;
document.getElementById(j).value = sec;
sec=0;
i++;
}

var sec =0;
setInterval(incrz, 1000);
function incrz(){
++sec;
// document.getElementById("time").innerHTML = sec;
}
    
</script>

<?php 
$uid = $_SESSION['id']; // setting Userid varibale of logged in user
$ip=$_SERVER['REMOTE_ADDR']; // getting ip address of remote client machine
if($r =(isset($_REQUEST['testTopicId']))? $_REQUEST['testTopicId'] : get_next_topic($_SESSION['id'])){
update_testlog($uid,$r,$ip);
// update_testlog($uid,$r,$ip); 
 
?>
<script type="text/javascript">

window.onbeforeunload = function() {
    
  return "Have you finished your test?";
};
</script>

<form action="submit" method="post">

<div class="intro-text">
    <div class="row col-md-12">
<p style='float:left'>Time Left: <label id="timer"></label></p>    
<p style='float:right'>Topic: <?=get_topic($r)?></p>
</div>


<div class="divs">
<input type="hidden" name="topic" value="<?php echo $r; ?>">
<!-- show time and topic -->


<?php 
$num=getTopicTimeLimit($r);
$qarray =getquestions_by_topicid($r);
if($qarray){
$i=0;
foreach ($qarray as $k) {
echo "<div class='text-left'><p>Question 1:&nbsp;<b><i>{$k[3]}</i></b></p>";
echo "<input type='hidden' name='qid[]' value='{$k[0]}'>";
echo "<input type='hidden' name='sec[]' id=\"time{$i}\" value=''>";
echo "<input type='hidden' name='qtype{$k[0]}' value='$k[2]'>";
if($k[4]==""){
if($k[2] == 1){
// multiple choice
$or = get_qoptions($k[0]);
$c=0;
$ans = "ans".$k[0];
echo "<table class='table table-bordered table-hover table-sm'><tbody>";
foreach ($or as $x){
echo "<tr><td><input class='' type='radio' name='{$ans}' value='{$x[0]}'></td><td>". $x[2];
echo "</td></tr><tr></tr>";
$c++;
}
echo "</tbody></table>";
}
if($k[2] == 2){
// single answer
echo "Answer <input class='form-control SafariFix' name='ans{$k[0]}'>";
}

}else{
// start else
echo "<table class='table-responsive table'><tr><td>";
if($k[2] == 1){
// multiple choice
$or = get_qoptions($k[0]);
$c=0;
$ans = "ans".$k[0];
foreach ($or as $x){
echo $x[2]."<input class='form-control' type='radio' name='{$ans}' value='{$x[0]}'>";
$c++;
}
}
if($k[2] == 2){
// single answer
echo "Answer <input class='form-control' name='ans{$k[0]}'>";
}
echo "</td><td>";
if($k[4] !=""){ echo "<img src='logo/logo.png'>"; }
echo "</td></tr></table>";
}
echo "</div>";
$i++;
}
}   
?>
</div> 


<!-- end of divs  -->


<!-- for multiple choice                 -->



<!-- <p>topic id <?=$r?></p> -->

<!-- 
<p>Question 1:&nbsp;<b><i>What is moral?</i></b></p>
<p> 1) <input class="form-control" type="radio"></p>   
<p> 2) <input class="form-control" type="radio"></p> 
<p> 3) <input class="form-control" type="radio"></p> 

</div>

for single answer
<div class="cls2">
<p>Question 2:&nbsp; 
<b><i>What is moral?</i></b>
</p>
<p>Answer: <input class="form-control" type="text"></p>
</div> -->

<!-- for assay type answer -->
<!-- <div class="cls3">
<p>Question 3:&nbsp; 
<b><i>What is moral?</i></b>
</p>
<p>Answer: <textarea class="form-control"></textarea></p>
</div>
</div> -->
<!-- Button for next div -->
<br><br>
<a href="" id="next" class="btn btn-lg btn-primary" onclick="get_timeelapsed();">Next</a>
<input type="submit" id="finish" name="submit_test" value="submit" class="btn btn-lg btn-primary" style="display:none"> 
</form>


</div>


<script type="text/javascript">
setInterval(countdown,1000);
var st_time = <?php echo $num;?>;
var new_time = st_time;
function countdown(){
    
        $('#timer').text(new_time);
        new_time--;
        if(new_time == 0){
            alert("Time Up!");
            $('form').submit();
        }
            

    
    
}

</script>

<?php 



} else {
    //include('pages/test_already_completed.php');

    ?>
        <script type="text/javascript">window.location.href="status.php";</script>
        <?php
}?>
