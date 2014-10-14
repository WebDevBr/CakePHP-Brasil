<?php

namespace App\View\Helper;

use Cake\View\Helper;

class MarkdownHelper extends Helper
{

	protected $parsedown;

	public function __construct()
	{
		$this->parsedown = new \Parsedown();
	}

	public function toHtml($text)
	{
		return $this->parsedown->text($text);
	}

}