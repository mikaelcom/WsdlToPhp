<?php
/**
 * Class file for SPImagingTypeDownloadResponse
 * @date 06/07/2012
 */
/**
 * Class SPImagingTypeDownloadResponse
 * @date 06/07/2012
 */
class SPImagingTypeDownloadResponse extends SPImagingWsdlClass
{
	/**
	 * The DownloadResult
	 * @var SPImagingTypeDownloadResult
	 */
	public $DownloadResult;
	/**
	 * Constructor
	 * @param SPImagingTypeDownloadResult DownloadResult
	 * @return SPImagingTypeDownloadResponse
	 */
	public function __construct($_DownloadResult = null)
	{
		parent::__construct(array('DownloadResult'=>$_DownloadResult));
	}
	/**
	 * Set DownloadResult
	 * @param DownloadResult DownloadResult
	 * @return DownloadResult
	 */
	public function setDownloadResult($_DownloadResult)
	{
		return ($this->DownloadResult = $_DownloadResult);
	}
	/**
	 * Get DownloadResult
	 * @return SPImagingTypeDownloadResult
	 */
	public function getDownloadResult()
	{
		return $this->DownloadResult;
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