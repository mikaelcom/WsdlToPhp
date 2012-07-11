<?php
/**
 * ClassMap 
 * @date 08/07/2012
 */
/**
 * ClassMap
 * @date 08/07/2012
 */
class UsgsDownloadClassMap
{
	final public static function classMap()
	{
		return array (
  'getData' => 'UsgsDownloadTypeGetData',
  'getDataResponse' => 'UsgsDownloadTypeGetDataResponse',
  'getDownloadStatus' => 'UsgsDownloadTypeGetDownloadStatus',
  'getDownloadStatusResponse' => 'UsgsDownloadTypeGetDownloadStatusResponse',
  'initiateDownload' => 'UsgsDownloadTypeInitiateDownload',
  'initiateDownloadResponse' => 'UsgsDownloadTypeInitiateDownloadResponse',
  'setDownloadComplete' => 'UsgsDownloadTypeSetDownloadComplete',
  'setDownloadCompleteResponse' => 'UsgsDownloadTypeSetDownloadCompleteResponse',
);
	}
}
?>