<?php
/**
 * Class file for LifePicsTypeUploadFileRotateAlbumResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUploadFileRotateAlbumResponse
 * @date 02/08/2012
 */
class LifePicsTypeUploadFileRotateAlbumResponse extends LifePicsWsdlClass
{
	/**
	 * The UploadFileRotateAlbumResult
	 * @var LifePicsTypeUploadFileRotateAlbumResult
	 */
	public $UploadFileRotateAlbumResult;
	/**
	 * Constructor
	 * @param LifePicsTypeUploadFileRotateAlbumResult UploadFileRotateAlbumResult
	 * @return LifePicsTypeUploadFileRotateAlbumResponse
	 */
	public function __construct($_UploadFileRotateAlbumResult = null)
	{
		parent::__construct(array('UploadFileRotateAlbumResult'=>$_UploadFileRotateAlbumResult));
	}
	/**
	 * Set UploadFileRotateAlbumResult
	 * @param UploadFileRotateAlbumResult UploadFileRotateAlbumResult
	 * @return UploadFileRotateAlbumResult
	 */
	public function setUploadFileRotateAlbumResult($_UploadFileRotateAlbumResult)
	{
		return ($this->UploadFileRotateAlbumResult = $_UploadFileRotateAlbumResult);
	}
	/**
	 * Get UploadFileRotateAlbumResult
	 * @return LifePicsTypeUploadFileRotateAlbumResult
	 */
	public function getUploadFileRotateAlbumResult()
	{
		return $this->UploadFileRotateAlbumResult;
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