<?php 
	function public_helper($string = '')
	{
		return base_url('public/'.$string);
	}
	function admin_url($string='')
	{
		return base_url('admin/'.$string);
	}
	function docgia_url($string='')
	{
		return base_url('docgia/'.$string);
	}
?> 