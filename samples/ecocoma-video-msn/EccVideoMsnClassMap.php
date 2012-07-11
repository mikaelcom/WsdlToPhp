<?php
/**
 * ClassMap 
 * @date 03/07/2012
 */
/**
 * ClassMap
 * @date 03/07/2012
 */
class EccVideoMsnClassMap
{
	final public static function classMap()
	{
		return array (
  'GetVideo' => 'EccVideoMsnTypeGetVideo',
  'GetVideoResponse' => 'EccVideoMsnTypeGetVideoResponse',
  'rss' => 'EccVideoMsnTypeRss',
  'ArrayOfItem' => 'EccVideoMsnTypeArrayOfItem',
  'item' => 'EccVideoMsnTypeItem',
  'GetExtendedVideo' => 'EccVideoMsnTypeGetExtendedVideo',
  'GetExtendedVideoResponse' => 'EccVideoMsnTypeGetExtendedVideoResponse',
);
	}
}
?>