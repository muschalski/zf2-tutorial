<?php

namespace Feed\Service;

class FeedService
{
	public function getFeed()
	{
			$link = "http://g1.globo.com/dynamo/rss2.xml";
			return simplexml_load_file($link) -> channel; 

	}

}