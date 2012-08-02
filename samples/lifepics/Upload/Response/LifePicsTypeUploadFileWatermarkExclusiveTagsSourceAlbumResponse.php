<?php
/**
 * Class file for LifePicsTypeUploadFileWatermarkExclusiveTagsSourceAlbumResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUploadFileWatermarkExclusiveTagsSourceAlbumResponse
 * @date 02/08/2012
 */
class LifePicsTypeUploadFileWatermarkExclusiveTagsSourceAlbumResponse extends LifePicsWsdlClass
{
	/**
	 * The UploadFileWatermarkExclusiveTagsSourceAlbumResult
	 * @var LifePicsTypeUploadFileWatermarkExclusiveTagsSourceAlbumResult
	 */
	public $UploadFileWatermarkExclusiveTagsSourceAlbumResult;
	/**
	 * Constructor
	 * @param LifePicsTypeUploadFileWatermarkExclusiveTagsSourceAlbumResult UploadFileWatermarkExclusiveTagsSourceAlbumResult
	 * @return LifePicsTypeUploadFileWatermarkExclusiveTagsSourceAlbumResponse
	 */
	public function __construct($_UploadFileWatermarkExclusiveTagsSourceAlbumResult = null)
	{
		parent::__construct(array('UploadFileWatermarkExclusiveTagsSourceAlbumResult'=>$_UploadFileWatermarkExclusiveTagsSourceAlbumResult));
	}
	/**
	 * Set UploadFileWatermarkExclusiveTagsSourceAlbumResult
	 * @param UploadFileWatermarkExclusiveTagsSourceAlbumResult UploadFileWatermarkExclusiveTagsSourceAlbumResult
	 * @return UploadFileWatermarkExclusiveTagsSourceAlbumResult
	 */
	public function setUploadFileWatermarkExclusiveTagsSourceAlbumResult($_UploadFileWatermarkExclusiveTagsSourceAlbumResult)
	{
		return ($this->UploadFileWatermarkExclusiveTagsSourceAlbumResult = $_UploadFileWatermarkExclusiveTagsSourceAlbumResult);
	}
	/**
	 * Get UploadFileWatermarkExclusiveTagsSourceAlbumResult
	 * @return LifePicsTypeUploadFileWatermarkExclusiveTagsSourceAlbumResult
	 */
	public function getUploadFileWatermarkExclusiveTagsSourceAlbumResult()
	{
		return $this->UploadFileWatermarkExclusiveTagsSourceAlbumResult;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>