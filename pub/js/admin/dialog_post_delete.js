function deletePost($id) {
	$title = $('#title' + $id).html();
	$('#delete_post_title').html($title);
	$('#delete_post_title').attr('pid', $id);
	$("#dialog-delete-confirm").dialog("open");
	return false;
}


$(document).ready(function() {
	$("#dialog-delete-confirm").dialog({
		autoOpen : false,
		resizable : false,
		height : 100,
		modal : true,
		buttons : {
			'！确定删除！' : function() {
				$delete_url = '/mxgn/m/delete_post/' + $('#delete_post_title').attr('pid');
				$.ajax({
					type : 'GET',
					url : $delete_url,
					success : function(data) {
						alert(data.message);
						if(data.status == true) {
							document.location.reload();
						}
					}
				});
			},
			'取消' : function() {
				$(this).dialog('close');
			}
		}
	});
});
