<?php
$user_id = getUserId();

$logged_in = 1;
$comment_count = count($comments);



foreach ($comments as $rows) {


  if($comment_count > $comments_from ) {

  $now =  new MongoDate();
  $seconds = $now->sec - $rows['date_created']->sec;

  $days2 = floor($seconds / (60 * 60 * 24)); 
  $remainder = $seconds % (60 * 60 * 24);
  
  $hours = floor($remainder / (60 * 60));
  $remainder = $remainder % (60 * 60);
  $minutes = floor($remainder / 60);
  $seconds = $remainder % 60;	
  if($rows['f_user'])
    $member_avatar = 'http://graph.facebook.com/'.$rows['uid'].'/picture';    
  else
    $member_avatar = base_url().'img/no-image-m.png';

?>

<div class="commentPanel" id="record-<?php  echo $rows['c_id'];?>" align="left">

<a href="#">
<img class="rounded-corners" src="<?php echo $member_avatar;?>" style="float:left; margin-right:9px;" width="40" height="40" border="0" alt="" />
</a>

<label class="name" style="display: inline;">
<b>
<a href="#">
<?php echo ($rows['name']=="")?"An&oacute;nimo":$rows['name'];
?>
</a>
</b>
<div class="name" style="text-align:justify;float:left;">
<em>
<?php  
$rows['comment'] =  ($rows['comment']);

echo clickable_link($rows['comment']);

//echo $rows['comment'];

?>
</em>
</div>

<br clear="all" />

<div style="width:400px;float:right;">
<div style="float:left; padding-top:3px;">
<span class="timeanddate">
<?php
if($days2 > 0)
{
$newDate = new DateTime("now",new DateTimeZone('America/La_Paz'));
$newDate->setTimestamp($rows['date_created']->sec);
echo $newDate->format('Y-m-d H:i:s');
}
elseif($days2 == 0 && $hours == 0 && $minutes == 0)
 echo "Hace unos segundos";			
elseif($hours)
echo 'Hace '.$hours.' horas';
elseif($days2 == 0 && $hours == 0)
echo 'Hace '.$minutes.' minutos';
else
echo "Hace unos segundos";?>
</span>
<?php
if($rows['uid'] == $user_id and $fb_data['uid']){?>
&nbsp;<a href="#" id="CID-<?php  echo $rows['c_id'];?>" class="c_delete">Borrar</a>
<?php
}?>
<?php if ($fb_data['uid']) { ?>                    
 - 
<span id="clike-panel-<?php  echo $rows['c_id']?>">

<?php if (@$flag_already_liked_c == 0) {?>

<a href="javascript: void(0)" id="post_id<?php  echo $rows['c_id']?>" onclick="javascript: Clikethis('<?=base_url();?>','<?php echo $user_id?>','<?php  echo $rows['c_id']?>',1,'<?php  echo $post_id?>');">Me gusta</a>
<?php }else {?>

<a href="javascript: void(0)" id="post_id<?php  echo $rows['c_id']?>" onclick="javascript: Clikethis('<?=base_url();?>','<?php echo $user_id?>','<?php  echo $rows['c_id']?>',2,'<?php  echo $post_id?>');">Ya no me gusta</a>
<?php }?>

</span>
<?php }?>

</div>
<div id="ppl_clike_div_<?php  echo $rows['c_id']?>" <?=(($rows['likes']) ? 'float:left;padding-top:3px;' : 'style="display:none;float:left;padding-top:3px;"')?>>
- <a class="t" href="javascript:;">
<span id="clike-stats-<?php  echo $rows['c_id']?>"> <?php echo $rows['likes'];?> personas les gusta esto</span>
</a>
</div>
</div>
<br clear="all" />
</label>
</div>
<?php
  }
  $comment_count--;
}

?>	
