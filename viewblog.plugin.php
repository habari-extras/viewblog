<?php

class ViewBlog extends Plugin
{
	const VERSION = '1.0';

	public function filter_adminhandler_post_loadplugins_main_menu($mainmenus)
	{
        $mainmenus['view'] =
                array(
                    'url' => Site::get_url('habari'),
                    'title' => _t('View blog'),
                    'text' => _t('View Blog'),
                    'hotkey' => 'V',
                    'selected' => '');
        return $mainmenus;
	}
}
?>

