<?php
class View
{
	public function generate($content_view, $template_view, $data = null)
	{
		include 'Application/Views/'.$template_view;
	}
}