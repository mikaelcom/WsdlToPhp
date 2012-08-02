<?php
/**
 * Class file for LifePicsTypeUploadFileTagsSourceAlbumResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUploadFileTagsSourceAlbumResponse
 * @date 02/08/2012
 */
class LifePicsTypeUploadFileTagsSourceAlbumResponse extends LifePicsWsdlClass
{
	/**
	 * The UploadFileTagsSourceAlbumResult
	 * @var LifePicsTypeUploadFileTagsSourceAlbumResult
	 */
	public $UploadFileTagsSourceAlbumResult;
	/**
	 * Constructor
	 * @param LifePicsTypeUploadFileTagsSourceAlbumResult UploadFileTagsSourceAlbumResult
	 * @return LifePicsTypeUploadFileTagsSourceAlbumResponse
	 */
	public function __construct($_UploadFileTagsSourceAlbumResult = null)
	{
		parent::__construct(array('UploadFileTagsSourceAlbumResult'=>$_UploadFileTagsSourceAlbumResult));
	}
	/**
	 * Set UploadFileTagsSourceAlbumResult
	 * @param UploadFileTagsSourceAlbumResult UploadFileTagsSourceAlbumResult
	 * @return UploadFileTagsSourceAlbumResult
	 */
	public function setUploadFileTagsSourceAlbumResult($_UploadFileTagsSourceAlbumResult)
	{
		return ($this->UploadFileTagsSourceAlbumResult = $_UploadFileTagsSourceAlbumResult);
	}
	/**
	 * Get UploadFileTagsSourceAlbumResult
	 * @return LifePicsTypeUploadFileTagsSourceAlbumResult
	 */
	public function getUploadFileTagsSourceAlbumResult()
	{
		return $this->UploadFileTagsSourceAlbumResult;
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