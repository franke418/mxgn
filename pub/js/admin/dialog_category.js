/**
 * @author Franke Yang
 */
function deleteCategory($id) {
	$("#pre_delete_category").attr('cid', $id);
	$("#dialog-category-confirm").dialog('open');
}


$(document).ready(function() {
	$("#dialog-category-confirm").dialog({
		autoOpen : false,
		resizable : false,
		height : 100,
		modal : true,
		buttons : {
			'！确定删除！' : function() {
				$delete_url = '/admin/category/delete/' + $('#pre_delete_category').attr('cid');
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
