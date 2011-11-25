<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Default controller.
 *
 * @package    Kohana-wordPress
 * @category   controller
 * @author     Me Make It
 * @copyright  (c) 2011 Me Make It
 */
class Controller_Default extends Controller {
	/**
	 * Display the homepage.
	 *
	 * @access  public
	 * @return  void
	 */
	public function action_index()
	{
		echo HTML::chars(___('Welcome to Kohana'));
	}
} // End Controller_Default
