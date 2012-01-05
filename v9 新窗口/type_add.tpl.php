<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./css/dialog.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="./js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="./js/dialog.js"></script>
<script>
	$(function(){
		$('.c').click(function(){
			window.top.art.dialog({id:'add'}).close();void(0);
		})

		$('.aui_state_highlight').click(function(){
			var name = $("#name").val();
			var pwd  = $("#pwd").val();
		
		    $.post("./val.php", { name: name, pwd: pwd },
		     function(data){
			      if(data == '1'){
					  alert('Input the correct');
					  window.top.art.dialog({id:'add'}).close();void(0);
					  return true;
				  }else{
					  alert('Input the wrong');
					  $("#name").val('');
					  $("#pwd").val('');
					  return false;
				  }
		    });
		})
	})
</script>

<pre>
	<b>username:<input type="text" id="name" name="name" value=""></b><br />
	<b>password:<input type="password" id="pwd" name="pwd" value=""></b>
</pre>
<tr>
	<td colspan="2" class="aui_footer">
		<div class="aui_buttons">
			<button class="aui_state_highlight">stbmit</button>
			<button class="c">cancel</button>
		</div>
	</td>
</tr>