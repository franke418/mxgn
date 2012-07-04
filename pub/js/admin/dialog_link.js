/**
 * @author Franke Yang
 */
function deleteLink($id) {
	$("#pre_delete_link").attr('cid', $id);
	$("#dialog-link-confirm").dialog('open');
}


$(document).ready(function() {
	$("#dialog-link-confirm").dialog({
		autoOpen : false,
		resizable : false,
		height : 100,
		modal : true,
		buttons : {
			'！确定删除！' : function() {
				$delete_url = '/admin/setting/link_delete/' + $('#pre_delete_link').attr('cid');
				$.ajax({
					type : 'GET',
					url : $delete_url,
					success : function(data) {
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
