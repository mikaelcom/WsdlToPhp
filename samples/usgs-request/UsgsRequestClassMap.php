<?php
/**
 * ClassMap 
 * @date 08/07/2012
 */
/**
 * ClassMap
 * @date 08/07/2012
 */
class UsgsRequestClassMap
{
	final public static function classMap()
	{
		return array (
  'processAOI' => 'UsgsRequestTypeProcessAOI',
  'processAOIResponse' => 'UsgsRequestTypeProcessAOIResponse',
  'processAOI2' => 'UsgsRequestTypeProcessAOI2',
  'processAOI2Response' => 'UsgsRequestTypeProcessAOI2Response',
  'getTiledDataDirectURLs' => 'UsgsRequestTypeGetTiledDataDirectURLs',
  'getTiledDataDirectURLsResponse' => 'UsgsRequestTypeGetTiledDataDirectURLsResponse',
  'getTiledDataDirectURLs2' => 'UsgsRequestTypeGetTiledDataDirectURLs2',
  'getTiledDataDirectURLs2Response' => 'UsgsRequestTypeGetTiledDataDirectURLs2Response',
  'validateChunks' => 'UsgsRequestTypeValidateChunks',
  'validateChunksResponse' => 'UsgsRequestTypeValidateChunksResponse',
);
	}
}
?>