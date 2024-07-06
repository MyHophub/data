<?php if(isset($_GET['A'])) { $link = $_GET['A']; }?>
<?php if(isset($_GET['B'])) { $name = $_GET['B']; }?>
<?php if(isset($_GET['C'])) { $img = $_GET['C']; }?>
<?php if(isset($_GET['C'])) { $tag = $_GET['D']; }?>


<center><textarea id="cop"rows="10" cols="45">


<tr><td><center><div class="block"><div class="cardk">
<a href="/play.php?A=<?php echo $link ;?>&B=<?php echo $name ;?>&C=<?php echo $img ;?>&D=<?php echo $tag ;?>">
<table><tr>
<th><img src="<?php echo $img ;?>" width="110" height="110" alt=""></th>
<td><b style="color: ;font-style: oblique;"><?php echo $name ;?></b><br>
<b style="color:red"><i class="fa fa-folder-open" aria-hidden="true"></i> <?php echo $tag ;?></b>
</tr></table></div></div></center></tr>


</textarea><br><br><br>
<button onclick="my()">Copy Data</button>
<script> 

function my() {
 document.getElementById("cop").select();
    document.execCommand("copy");

  }
  
  </script>
