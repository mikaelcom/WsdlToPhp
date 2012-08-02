<?php
/**
 * Class file for LifePicsTypeUploadFileExclusiveTagsSourceAlbumResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUploadFileExclusiveTagsSourceAlbumResponse
 * @date 02/08/2012
 */
class LifePicsTypeUploadFileExclusiveTagsSourceAlbumResponse extends LifePicsWsdlClass
{
	/**
	 * The UploadFileExclusiveTagsSourceAlbumResult
	 * @var LifePicsTypeUploadFileExclusiveTagsSourceAlbumResult
	 */
	public $UploadFileExclusiveTagsSourceAlbumResult;
	/**
	 * Constructor
	 * @param LifePicsTypeUploadFileExclusiveTagsSourceAlbumResult UploadFileExclusiveTagsSourceAlbumResult
	 * @return LifePicsTypeUploadFileExclusiveTagsSourceAlbumResponse
	 */
	public function __construct($_UploadFileExclusiveTagsSourceAlbumResult = null)
	{
		parent::__construct(array('UploadFileExclusiveTagsSourceAlbumResult'=>$_UploadFileExclusiveTagsSourceAlbumResult));
	}
	/**
	 * Set UploadFileExclusiveTagsSourceAlbumResult
	 * @param UploadFileExclusiveTagsSourceAlbumResult UploadFileExclusiveTagsSourceAlbumResult
	 * @return UploadFileExclusiveTagsSourceAlbumResult
	 */
	public function setUploadFileExclusiveTagsSourceAlbumResult($_UploadFileExclusiveTagsSourceAlbumResult)
	{
		return ($this->UploadFileExclusiveTagsSourceAlbumResult = $_UploadFileExclusiveTagsSourceAlbumResult);
	}
	/**
	 * Get UploadFileExclusiveTagsSourceAlbumResult
	 * @return LifePicsTypeUploadFileExclusiveTagsSourceAlbumResult
	 */
	public function getUploadFileExclusiveTagsSourceAlbumResult()
	{
		return $this->UploadFileExclusiveTagsSourceAlbumResult;
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