<?php
require_once('markdown_extended.php');

function markhtml($mark){
	return trim(MarkdownExtended($mark));
}
?>
