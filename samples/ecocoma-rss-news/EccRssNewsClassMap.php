<?php
/**
 * ClassMap 
 * @date 03/07/2012
 */
/**
 * ClassMap
 * @date 03/07/2012
 */
class EccRssNewsClassMap
{
	final public static function classMap()
	{
		return array (
  'GetRSS' => 'EccRssNewsTypeGetRSS',
  'GetRSSResponse' => 'EccRssNewsTypeGetRSSResponse',
  'rss' => 'EccRssNewsTypeRss',
  'ArrayOfItem' => 'EccRssNewsTypeArrayOfItem',
  'item' => 'EccRssNewsTypeItem',
  'GetExtendedRSS' => 'EccRssNewsTypeGetExtendedRSS',
  'GetExtendedRSSResponse' => 'EccRssNewsTypeGetExtendedRSSResponse',
);
	}
}
?>