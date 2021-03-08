$("#drapAndDrop").sortable({
	delay:150,
	stop:function(){
		var sData=new Array();
		$('#drapAndDrop>tr').each(function(){
			sData.push($(this).attr("id"));
		})
		updateData(sData);
	}
})
function updateData(data){
	$.ajax({
		type:'POST',
		url:'ajax.php',
		data:{data:data},
		success:function(data){
			alert('updateData has been success');
		}
	})

}