<?php
/*
<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" 
width=330 height=450 
src=" http://music.163.com/outchain/player?type=4&id=6514031&auto=1&height=430">
</iframe>
*/
?>


<div style="text-align:center;">
  
  <video id="video1" width="500" style="margin-top:15px;" controls="controls">
    <source src="7.Assassins.2013.BluRay.720p.x264.AAC-PHD.Sample.mp4" type="video/mp4" />
     
    Your browser does not support HTML5 video.
  </video>
  <br /> 
  <button onclick="playPause()">播放/暂停</button> 
  <button onclick="makeBig()">大</button>
  <button onclick="makeNormal()">中</button>
  <button onclick="makeSmall()">小</button>
  
</div> 

<script type="text/javascript">
var myVideo=document.getElementById("video1");

function playPause()
{ 
if (myVideo.paused) 
  myVideo.play(); 
else 
  myVideo.pause(); 
} 

function makeBig()
{ 
myVideo.width=560; 
} 

function makeSmall()
{ 
myVideo.width=320; 
} 

function makeNormal()
{ 
myVideo.width=420; 
} 
</script> 
<?php ?>