<?php   defined('C5_EXECUTE') or die("Access Denied.");
$wrapper_id = 'ccm-page-contents-subnav-' . $bid;
?>
<div id="<?php echo h($wrapper_id)?>"></div>
<script type="text/javascript">
$(document).ready(function(){
	var html = '<ul class="ccm-page-contents-subnav">';
	var count = 0;
	$('<?php echo h($selector); ?>').each(function(){
		count++;
		var id = $(this).prop('id');
		var text = $(this).text();
		if (!id) {
			id = 'section-'+count;
			$(this).prop('id',id);
		}
		html += '<li><a href="#'+id+'">'+text+'</a></li>';
	});
	html += '</ul>';
	$('#<?php echo h($wrapper_id)?>').html(html);
});
</script>