<?php namespace Buchin\GoogleSuggest;

/**
* 
*/
class GoogleSuggest
{
	
	public static function grab($keyword = '', $lang = '', $country = '', $source = '')
	{
        $url = 'http://google.com/complete/search?';

        $query = [
            'output' => 'toolbar',
            'q' => $keyword,
        ];

        if(!empty($lang)){
            $query['hl'] = $lang;
        }

        if(!empty($country)){
            $query['gl'] = $country;
        }

        if(!empty($source)){
            $query['ds'] = $source;
        }

        $url .= http_build_query($query);

		if($content = trim(file_get_contents($url)));
        {
            $xml = simplexml_load_string(utf8_encode($content));
            
            foreach($xml->CompleteSuggestion as $sugg)
                $out[] = (string)$sugg->suggestion['data'];
        }

        return $out;
	}
}