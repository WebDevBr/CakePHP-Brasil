<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\Routing\Router;
	
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

	public function toHtmlResume($text, $lenght = 250, $end = '...')
	{
		$text = $this->parsedown->text($text);
		$text = strip_tags($text);
		if (mb_strlen($text, 'utf-8') > $lenght) {
			$text = mb_substr($text, 0, $lenght, 'utf-8');
		}
		return $text .= $end;
	}

	public function objectToArray($data) {
	   if (is_array($data) || is_object($data))
	    {
	        $result = array();
	        foreach ($data as $key => $value)
	        {
	            $result[$key] = (array) ($value);
	        }
	        return $result;
	    }
	    return $data;
	}


	public function checkRoute($route = null) {
		    list($controller, $action) = explode('#', $route);

		    $params = Router::parseNamedParams($this->request);
		    return ($params['controller'] == $controller && $params['action'] == $action);
		}


}