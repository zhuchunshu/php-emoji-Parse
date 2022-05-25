<?php
namespace Zhuchunshu\EmojiParse;


use Astrotomic\Twemoji\Twemoji;

class Emoji
{
	/**
	 * @param string $subject
	 * @param callable $callback
	 * @return array|string|string[]|null
	 */
	public function parse(string $subject,callable $callback)
	{
		return preg_replace_callback('/::([^:\s]*?):([^:\s]*?)::/sm', $callback, $subject);
	}
	
	public function twemoji($text): \Astrotomic\Twemoji\EmojiText
	{
		return Twemoji::text($text);
	}
}