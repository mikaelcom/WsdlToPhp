<?php
/**
 * Class file for SPImagingTypeUploadResponse
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeUploadResponse
 * @date 06/07/2012
 */
class SPImagingTypeUploadResponse extends SPImagingWsdlClass
{
	/**
	 * The UploadResult
	 * @var SPImagingTypeUploadResult
	 */
	public $UploadResult;
	/**
	 * Constructor
	 * @param SPImagingTypeUploadResult UploadResult
	 * @return SPImagingTypeUploadResponse
	 */
	public function __construct($_UploadResult = null)
	{
		parent::__construct(array('UploadResult'=>$_UploadResult));
	}
	/**
	 * Set UploadResult
	 * @param UploadResult UploadResult
	 * @return UploadResult
	 */
	public function setUploadResult($_UploadResult)
	{
		return ($this->UploadResult = $_UploadResult);
	}
	/**
	 * Get UploadResult
	 * @return SPImagingTypeUploadResult
	 */
	public function getUploadResult()
	{
		return $this->UploadResult;
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