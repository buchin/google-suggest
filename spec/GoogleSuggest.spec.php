<?php

describe('GoogleSuggest', function ()
{
	describe('::grab($keyword)', function ()
	{
		it('returns array of suggested keywords', function(){
			$keyword = 'ngoding';

			$suggested = Buchin\GoogleSuggest\GoogleSuggest::grab($keyword);

			expect(count($suggested))->toBeGreaterThan(0);
		});
	});
});