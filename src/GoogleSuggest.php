<?php namespace Buchin\GoogleSuggest;

/**
* 
*/
class GoogleSuggest
{
	
	public static function grab($keyword = '')
	{
		if($content = trim(file_get_contents('http://google.com/complete/search?output=toolbar&q='.urlencode($keyword))))
        {
            $xml = simplexml_load_string(utf8_encode($content));
            
            foreach($xml->CompleteSuggestion as $sugg)
                $out[] = (string)$sugg->suggestion['data'];
        }

        return $out;
	}
}