<?php
/**
 * ClassMap 
 * @date 03/07/2012
 */
/**
 * ClassMap
 * @date 03/07/2012
 */
class EccRssCustomClassMap
{
	final public static function classMap()
	{
		return array (
  'GetRSS' => 'EccRssCustomTypeGetRSS',
  'GetRSSResponse' => 'EccRssCustomTypeGetRSSResponse',
  'rss' => 'EccRssCustomTypeRss',
  'ArrayOfItem' => 'EccRssCustomTypeArrayOfItem',
  'item' => 'EccRssCustomTypeItem',
  'GetExtendedRSS' => 'EccRssCustomTypeGetExtendedRSS',
  'GetExtendedRSSResponse' => 'EccRssCustomTypeGetExtendedRSSResponse',
);
	}
}
?>