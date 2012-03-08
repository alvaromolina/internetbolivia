<div>
<div class="friends_area" id="record-<?php  echo $row['p_id']?>">
<?php
if($row['userid'] == $row['posted_by'])
{
$memberPic = getUserImg($row['posted_by']);?>

<a href="javascript:;">
<img src="<?php echo $memberPic;?>" style="float:left; padding-right:9px;" width="50" height="50" border="0" alt="" />
</a>
<label style="float:left; width:390px;" class="name">
<b>
<a href="javascript:;">
<?php echo $row['firstname'] . ' ' . $row['lastname'];?>	
</a>
</b>
<?php
}
else
{
$username_gets = mysql_query("SELECT * from member where member_id=".$row['posted_by']." order by member_id desc limit 1");
while ($names = @mysql_fetch_array($username_gets))
{
$user_avatar_2 = $names['picture'];
$user_id_2 = $names['member_id'];
$fname_2 = $names['firstname'] . ' ' . $names['lastname'];
}

$s_memberPic = getUserImg( $row['posted_by'] );?>

<a href="javascript:;">
<img src="<?php echo $s_memberPic;?>" style="float:left; padding-right:9px;" width="50" height="50" border="0" alt="" />
</a>
<label style="float:left; width:390px;" class="name">
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
if($row['post_type'] == 2) {

$html .= '<em>';

$pdata = $row['post'];

$html .= '<div class="attach_content2">'.$pdata.'<br />';

$img = $row["cur_image"];

$urls = 'media/'.$img;

$clickc = "onclick=\"showimgs('$urls');\"";

$html .= '<div class="atc_images2"> <a href="javascript:;" '.$clickc.'>';

if (file_exists("media/".$row['cur_image'])) 
{
	$html .= '<img src="media/'.$row["cur_image"].'" width="100" border="0" style="">';
}
 
$html .= '</a>';
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

$days = floor($row['TimeSpent'] / (60 * 60 * 24)); 
$remainder = $row['TimeSpent'] % (60 * 60 * 24);
$hours = floor($remainder / (60 * 60));
$remainder = $remainder % (60 * 60);
$minutes = floor($remainder / 60);
$seconds = $remainder % 60;

if($days > 0) {

//$oldLocale = setlocale(LC_TIME, 'pt_BR');
$row['date_created'] = strftime("%b %e %Y", $row['date_created']); 

echo $row['date_created'];
// setlocale(LC_TIME, $oldLocale);
} 
elseif($days == 0 && $hours == 0 && $minutes == 0)
echo "few seconds ago";		
elseif($hours)
echo $hours.' hours ago';
elseif($days == 0 && $hours == 0)
echo $minutes.' minutes ago';
else
echo "few seconds ago"; ?>
</span> 
&nbsp;<a href="javascript: void(0)" id="post_id<?php  echo $row['p_id']?>" class="showCommentBox">Comment</a> 

-&nbsp;<span id="like-panel-<?php  echo $row['p_id']?>">
<?php if (@$flag_already_liked == 0) {$e = 'cool';?>

<a href="javascript: void(0)" id="post_id<?php  echo $row['p_id']?>" onclick="javascript: likethis(<?php echo $logged_id?>,<?php  echo $row['p_id']?>,1);">Like</a>
<?php }else { $e = 'uncool';?>

<a href="javascript: void(0)" id="post_id<?php  echo $row['p_id']?>" onclick="javascript: likethis(<?php echo $logged_id?>,<?php  echo $row['p_id']?>,2);">Unlike</a>
<?php }?>
</span>
</div>
</div>	
</label>
<?php
if($row['userid'] == @$logged_id || $row['posted_by'] == @$logged_id){
?>
<a href="#" class="delete_p" style="color:#ff0000;"><img src="hide.png" border="0" /></a>
<?php
}?>

<br clear="all" /><br clear="all" />

<div class="showPpl" id="ppl_like_div_<?php  echo $row['p_id']?>" <?=((@$row['likes']) ? "" : 'style="display:none"')?>>

<a class="t" href="javascript:;" onclick="alert('Sorry this feature is not available in this demo version.')">
<span id="like-stats-<?php  echo $row['p_id']?>"> <?php echo (($row['likes']) ? $row['likes'] : 0);?> 
people like this</span> 
</a>
<span></span>
</div>

<?php if($number_of_comments > $show_comments_per_page){?>

<div class="Vr yx clickOpen" id="collapsed_<?php  echo $row['p_id']?>" align="left"><span role="button" class="a-j ug Ss" tabindex="0"></span><div class="Ko"><span role="button" class="a-j zx" tabindex="0"><span class="Fw tx"><?php echo $number_of_comments?></span><span class="ux"> comments</span></span><span class="px"> &nbsp;-&nbsp; <span class="xo"><span class="uo"><?php echo @$namestring?>...</span></span></span></div></div>

<?php }?>

<div id="CommentPosted<?php  echo $row['p_id']?>">
<div id="loadComments<?php  echo $row['p_id']?>" style="display:none"></div>
<?php
$comment_num_row = mysql_num_rows(@$comments);
if($comment_num_row > 0)
{
//$comments = array_reverse(mysql_fetch_array($comments));
$allrows = array();
while ($rowed = mysql_fetch_array($comments)) {
$allrows[] = $rowed;
}
$allrows = array_reverse($allrows);	
//print_r($rows);
//while ($rows = array_reverse(mysql_fetch_array($comments)))
foreach($allrows as $rows)
{
$flag_already_liked_c = 0;
$nResult = mysql_query("SELECT * FROM facebook_likes_track WHERE member_id=".$user_id." AND comment_id=".$rows['c_id']);
if (mysql_num_rows($nResult))
{
$flag_already_liked_c = 1;
}

$comm_avatar = getUserImg($rows['userid']);

$days2 = floor($rows['CommentTimeSpent'] / (60 * 60 * 24));
$remainder = $rows['CommentTimeSpent'] % (60 * 60 * 24);
$hours = floor($remainder / (60 * 60));
$remainder = $remainder % (60 * 60);
$minutes = floor($remainder / 60);
$seconds = $remainder % 60;		?>



<div class="commentPanel" id="record-<?php  echo $rows['c_id'];?>" align="left">

<a href="javascript:;">
<img src="<?php echo $comm_avatar;?>" style="float:left; padding-right:9px;" width="40" height="40" border="0" alt="" />
</a>

<label class="name">
<b>
<a href="javascript:;">
<?php echo $rows['firstname'] . ' ' . $rows['lastname'];?>
</a>
</b>
<div class="name" style="text-align:justify;float:left;">
<em>
<?php  

echo clickable_link($rows['comments']);?></em>
</div>
<br/>
<div style="width:350px;float:right;">
<div style="float:left; padding-top:3px;">
<span class="timeanddate">
<?php
if($days2 > 0) 
{
//$oldLocale = setlocale(LC_TIME, 'pt_BR');
$rows['date_created'] = strftime("%b %e %Y", $rows['date_created']); 

echo $rows['date_created'];
//setlocale(LC_TIME, $oldLocale);
} 
elseif($days2 == 0 && $hours == 0 && $minutes == 0)
 echo "few seconds ago";			
elseif($hours)
echo $hours.' hours ago';
elseif($days2 == 0 && $hours == 0)
echo $minutes.' minutes ago';
else
echo "few seconds ago";?>
</span>

<?php

if($row['userid'] == @$logged_id || $rows['userid'] == @$logged_id)
{?>
&nbsp;<a href="javascript:void(0)" id="CID-<?php  echo $rows['c_id'];?>" class="c_delete">Delete</a>
<?php
}?>
-
<span id="clike-panel-<?php  echo $rows['c_id']?>">
<?php if ($flag_already_liked_c == 0) {$e = 'cool';?>

<a href="javascript: void(0)" id="post_id<?php  echo $rows['c_id']?>" onclick="javascript: Clikethis(<?php echo $logged_id?>,<?php  echo $rows['c_id']?>,1,<?php  echo $rows['post_id']?>);">Like</a>
<?php }else {$e = 'uncool';?>

<a href="javascript: void(0)" id="post_id<?php  echo $rows['c_id']?>" onclick="javascript: Clikethis(<?php echo $logged_id?>,<?php  echo $rows['c_id']?>,2,<?php  echo $rows['post_id']?>);">Unlike</a>
<?php }?>
</span>
</div>
<div id="ppl_clike_div_<?php  echo $rows['c_id']?>" <?=(($rows['clikes']) ? 'style="float:left;padding-top:3px;"' : 'style="display:none;padding-top:3px;float:left;"')?>>
- <a class="t" href="javascript:;" onclick="alert('Sorry this feature is not available in this demo version.')">
<span id="clike-stats-<?php  echo $rows['c_id']?>"> <?php echo $rows['clikes'];?> people like this</span> 
</a></div>
<span></span>
</div>
<br clear="all" />
</label>
</div>
<?php
}?>				
<?php
}?>
</div>

<div class="commentBox" align="right" id="commentBox-<?php  echo $row['p_id'];?>" <?php echo (($comment_num_row) ? '' :'style="display:none"')?>>

<img src="<?php echo $memberPic;?>" style="float:left; padding-right:6px;" width="37" height="37" border="0" alt="" class="CommentImg" />
<input type="hidden" id="owner<?php  echo $row['p_id'];?>" value="<?php  echo $row['posted_by']?>" />
<label id="record-<?php  echo $row['p_id'];?>">
<textarea class="commentMark" id="commentMark-<?php  echo $row['p_id'];?>" onblur="if (this.value=='') this.value = 'Write a comment'" onfocus="if (this.value=='Write a comment') this.value = ''" onKeyPress="return SubmitComment(this,event)" wrap="hard" name="commentMark" style=" background-color:#fff; overflow: hidden;" cols="60">Write a comment</textarea>
</label>
<br clear="all" />
</div>
</div>
</div>   
<?php
//} del loop

if($show_more_button == 1){?>
<br clear="all" /><br clear="all" />
<div id="bottomMoreButton" >
<a id="more_<?php echo @$next_records?>" class="more_records" name="2" href="javascript: void(0)">More posts ...</a>
</div>
<?php
}?>


