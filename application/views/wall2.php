<?php 
  $show_comments_per_page = 2;
  $logged_id = getUserId();
  $show_more_button = 0;
  $memberPic=  base_url().'img/no-image-m.png';
  
  foreach ($posts as $row) {
    $flag_already_liked = 0;
    $number_of_comments = $row['num_comments'];
    
    if(isset($row['likes_users']) and in_array($logged_id,$row['likes_users']))
      $flag_already_liked = 1;
?>


<div>
<div class="friends_area" id="record-<?php  echo $row['_id']?>">
<?php
if(true) {
 
$user_avatar_2 = '';
$user_id_2 = '123';
$fname_2 =  ($row['name']=="")?"An&oacute;nimo":$row['name'];

if($row['f_user'])
  $s_memberPic = 'http://graph.facebook.com/'.$row['uid'].'/picture';  
else
  $s_memberPic = base_url().'img/no-image-m.png'.$row['f_user'];
  
?>

<a href="javascript:;">
<img class="rounded-corners" src="<?php echo $s_memberPic;?>" style="float:left; margin-right:10px;" width="50" height="50" border="0" alt="" />
</a>
<label style="float:left; width:510px;" class="name">
<b>
<a href="javascript:;">
<?php echo $fname_2; ?>
</a>
</b>
<?php
}?>

<br clear="all" /> 
<div class="name" style="text-align:justify;float:left;">
<em>
<?php  
$row['post'] = $row['post'];
$html ='';
if($row['file_type'] == 'image' or $row['file_type'] =='other') {

$html .= '<em>';

$pdata = clickable_link($row['post']);

$html .= '<div class="attach_content2">'.$pdata.'<br />';

$img = $row["file"];

$urls = base_url().'media/'.$img;


$clickc = "onclick=\"showimgs('$urls');\"";

if($row['file_type'] == 'image')
  $html .= '<div class="atc_images2"> <a href="javascript:;" '.$clickc.'>';


if (file_exists("media/".$row['file'])) 
{
  if($row['file_type'] == 'image')
    $html .= '<img src="'.base_url().'media/'.$row["file"].'" width="100" border="0" style="">';
  else
    $html .= '<a href="'.base_url().'media/'.$row["file"].'">'.$row["file"].' </a>';
}

if($row['file_type'] == 'image')
  $html .= '</div>';

$html .= '<br clear="all" />';
		
$html .= '</div>';

$html .= '</em>';
echo $html;
}
else 
{
$pdata = $row['post'];
echo clickable_link($pdata);

}?>
</em>
<br clear="all" />
<div style="height:10px;">
<span>

<?php  

  $now =  new MongoDate();
  $seconds = $now->sec - $row['date_created']->sec;

  $days = floor($seconds / (60 * 60 * 24)); 
  $remainder = $seconds % (60 * 60 * 24);



  $hours = floor($remainder / (60 * 60));
  $remainder = $remainder % (60 * 60);
  $minutes = floor($remainder / 60);
  $seconds = $remainder % 60;

if($days > 0) {


$newDate = new DateTime("now",new DateTimeZone('America/La_Paz'));
$newDate->setTimestamp($row['date_created']->sec);
echo $newDate->format('Y-m-d H:i:s');

} 
elseif($days == 0 && $hours == 0 && $minutes == 0)
echo "Hace unos segundos";		
elseif($hours)
echo $hours.' hours ago';
elseif($days == 0 && $hours == 0)
echo 'Hace '.$minutes.' minutos';
else
echo "Hace unos segundos"; ?>
</span> 
&nbsp;<a href="javascript: void(0)" id="post_id<?php  echo $row['_id']?>" class="showCommentBox">Comentar</a> 

<?php if ($fb_data['uid']) { ?>                    

-&nbsp;<span id="like-panel-<?php  echo $row['_id']?>">


<?php if (@$flag_already_liked == 0) {$e = 'cool';?>

<a href="javascript: void(0)" id="post_id<?php  echo $row['_id']?>" onclick="javascript: likethis('<?=base_url();?>','<?php echo $logged_id?>','<?php  echo $row['_id']?>',1);">Me gusta</a>
<?php }else { $e = 'uncool';?>

<a href="javascript: void(0)" id="post_id<?php  echo $row['_id']?>" onclick="javascript: likethis('<?=base_url();?>','<?php echo $logged_id?>','<?php  echo $row['_id']?>',2);">Ya no me gusta</a>
<?php }?>

</span>
<?php }?>

</div>
</div>	
</label>
<?php
if(($row['uid'] == @$logged_id || $row['posted_by'] == @$logged_id) and $fb_data['uid']){
?>
  <a class="delete_p close">&times;</a>
<?php
}?>

<br clear="all" /><br clear="all" />

<div class="showPpl" id="ppl_like_div_<?php  echo $row['_id']?>" <?=((@$row['likes']) ? "" : 'style="display:none"')?>>

<a class="t" href="javascript:;" >
<span id="like-stats-<?php  echo $row['_id']?>"> A <?php echo (($row['likes']) ? $row['likes'] : 0);?> 
 personas les gusta esto</span> 
</a>
<span></span>
</div>

<?php if($number_of_comments > $show_comments_per_page){?>

<div class="Vr yx clickOpen" id="collapsed_<?php  echo $row['_id']?>" align="left"><span role="button" class="a-j ug Ss" tabindex="0"></span><div class="Ko"><span role="button" class="a-j zx" tabindex="0"><span class="Fw tx"><?php echo $number_of_comments?></span><span class="ux"> comentarios</span></span><span class="px">  <span class="xo"><span class="uo">...</span></span></span></div></div>

<?php }?>

<div id="CommentPosted<?php  echo $row['_id']?>">
<div id="loadComments<?php  echo $row['_id']?>" style="display:none"></div>
<?php
  //$comment_num_row = mysql_num_rows(@$comments);
  $comment_num_row = 0;


if (isset($row['comments'])){

  $comment_count = 0;
$row['comments'] =array_slice($row['comments'], -2, 2);
foreach ($row['comments'] as $rows) {

  $flag_already_liked_c =0;  
  if(isset($rows['likes_users']) and in_array($logged_id,$rows['likes_users']))
    $flag_already_liked_c =1;

  if($rows['f_user'])
    $comm_avatar = 'http://graph.facebook.com/'.$rows['uid'].'/picture';    
  else
    $comm_avatar = base_url().'img/no-image-m.png';
    
    


  $now =  new MongoDate();
  $seconds = $now->sec - $rows['date_created']->sec;

  $days2 = floor($seconds / (60 * 60 * 24)); 
  $remainder = $seconds % (60 * 60 * 24);

  $hours = floor($remainder / (60 * 60));
  $remainder = $remainder % (60 * 60);
  $minutes = floor($remainder / 60);
  $seconds = $remainder % 60;

?>



<div class="commentPanel" id="record-<?php  echo $rows['c_id'];?>" align="left">

<a href="javascript:;">
<img class="rounded-corners" src="<?php echo $comm_avatar;?>" style="float:left; margin-right:10px;" width="40" height="40" border="0" alt="" />
</a>

<label class="name" style="display:inline;">
<b>
<a href="javascript:;">
<?php echo ($rows['name']=="")?"An&oacute;nimo":$rows['name'];;
?>
</a>
</b>
<div class="name" style="text-align:justify;float:left;">
<em>
<?php  

  echo clickable_link($rows['comment']);
  //echo $rows['comment'];
?>
</em>
</div>
<br/>
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

if($rows['uid'] == @$logged_id and  $fb_data['uid'])
{?>
&nbsp;<a href="javascript:void(0)" id="CID-<?php  echo $rows['c_id'];?>" class="c_delete">Borrar</a>
<?php
}?>

<?php if ($fb_data['uid']) { ?>                    

-
<span id="clike-panel-<?php  echo $rows['c_id']?>">

<?php if ($flag_already_liked_c == 0) {$e = 'cool';?>

<a href="javascript: void(0)" id="post_id<?php  echo $rows['c_id']?>" onclick="javascript: Clikethis('<?=base_url();?>','<?php echo $logged_id?>','<?php  echo $rows['c_id']?>',1,'<?php  echo $row['_id']?>');">Me gusta</a>
<?php }else {$e = 'uncool';?>

<a href="javascript: void(0)" id="post_id<?php  echo $rows['c_id']?>" onclick="javascript: Clikethis('<?=base_url();?>','<?php echo $logged_id?>','<?php  echo $rows['c_id']?>',2,'<?php  echo $row['_id']?>');">Ya no me gusta</a>
<?php }?>

</span>
<?php }?>

</div>
<div id="ppl_clike_div_<?php  echo $rows['c_id']?>" <?=(($rows['likes']) ? 'style="float:left;padding-top:3px;"' : 'style="display:none;padding-top:3px;float:left;"')?>>
- <a class="t" href="javascript:;" >
<span id="clike-stats-<?php  echo $rows['c_id']?>"> <?php echo $rows['likes'];?> personas les gusta esto</span> 
</a></div>
<span></span>
</div>
<br clear="all" />
</label>
</div>
<?php

$comment_count++;
if ($comment_count>= 2)
  break;
} //foreach
} //if
?>				
</div>

<div class="commentBox" align="right" id="commentBox-<?php  echo $row['_id'];?>" <?php echo (($comment_num_row) ? '' :'style="display:none"')?>>

<img src="<?php echo $memberPic;?>" style="float:left; padding-right:6px;" width="37" height="37" border="0" alt="" class="CommentImg" />
<input type="hidden" id="owner<?php  echo $row['_id'];?>" value="<?php  echo $row['posted_by']?>" />
<label id="record-<?php  echo $row['_id'];?>">
<textarea class="commentMark" id="commentMark-<?php  echo $row['_id'];?>" onblur="if (this.value=='') this.value = 'Escribe un comentario..'" onfocus="if (this.value=='Escribe un comentario..') this.value = ''" onKeyPress="return SubmitComment(this,event)" wrap="hard" name="commentMark" style=" background-color:#fff; overflow: hidden;" cols="60">Escribe un comentario..</textarea>
</label>
<br clear="all" />
</div>
</div>
</div>   
<?php
}  

if($show_more_button == 1){?>
<br clear="all" /><br clear="all" />
<div id="bottomMoreButton" >
<a id="more_<?php echo @$next_records?>" class="more_records" name="2" href="javascript: void(0)">More posts ...</a>
</div>
<?php
}?>

<?php
if($mode == 'show' and $pages > 1){


  $cont = $page - 1;
  if($cont <= 0)
    $cont = 1;

  $pages_max = $cont + 9;
  if($pages_max > $pages){
    $pages_max = $pages;
    $cont = $pages_max - 9;
    if($cont <= 0)
      $cont = 1;          
  }


?>
<div class="pagination">
  <ul>
  <li <?php if($page=='1') {echo 'class="disabled"';}?> > <a  <?php if($page>1) { ?>   href="javascript:go_to_page(<? echo $page-1; ?>)" <? } ?>>Anterior</a></li>
<?php
    if($cont > 1) 
      echo '<li class="disabled"><a>...</a></li>';
?>    
<?php
  while($cont<=$pages_max) {
    if($cont == $page)
      $class = "active";
    else
      $class = "";
  ?>
    <li class="<?=$class?>">
      <a href="javascript:go_to_page(<?=$cont?>)"><?=$cont?></a>
    </li>
<?php

    $cont++;
  } 
    if($pages_max < $pages) 
      echo '<li class="disabled"><a>...</a></li>';
  ?>

    <li <?php if($page==$pages) {echo 'class="disabled"';}?> > <a  <?php if($page<$pages) { ?>   href="javascript:go_to_page(<? echo $page+1; ?>)" <? } ?>> Siguiente</a></li>
  </ul>
</div>

<?php
  }
?>

