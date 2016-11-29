<h1>Manage Blocks: <?php echo $pages['page_title']; ?> <?php if ($pages['language_code'] != 'en') {
	echo '(' . $page_lang['language'] . ')';
} ?> </h1>
<div id="ctxmenu"><?php if ($pages['do_not_delete'] == 0) { ?> <a href="cms/homepageblock/add/<?php echo $pages['page_id']; ?>">Add Block</a><?php } ?> </div>

<div class="tableWrapper">
	<div class="main_action" style="padding-bottom:20px;">
		<div class="category_name" style="float:left; padding-left:15px; font-size:12px; font-weight:bold;">Block Title</div>
		<div class="action" style="float:right; padding-right:30px; font-size:12px; font-weight:bold">Action</div>
	</div>
	<ul id="menutree">
		<?php foreach ($block as $row) { ?>
			<li id="menu_<?php echo $row['block_id']; ?>"><div class="menu_item"> <?php echo $row['block_title']; ?></div><div class="menu_item_options"><a href="cms/homepageblock/edit/<?php echo $row['block_id'] ?>">Edit</a> | <a href="cms/homepageblock/delete/<?php echo $row['block_id'] ?>" onclick="return confirm('Are you sure you want to Delete this Product ?');">Delete</a></div><div style="clear:both"></div></li>
		<?php } ?>
	</ul>
</div>

<div id="dialog-modal" title="Working">
	<p style="text-align: center; padding-top: 40px;">Updating the sort order...</p>
</div>