<?php

class qa_html_theme_layer extends qa_html_theme_base
{
	function head_css() {
		$this->output('<LINK REL="stylesheet" TYPE="text/css" HREF="'.QA_HTML_THEME_LAYER_URLTOROOT.'child-theme.css"/>');

        parent::head_css();
    }
}
