<?php
/**
 * Class file for LifePicsTypeUploadFileWatermarkResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUploadFileWatermarkResponse
 * @date 02/08/2012
 */
class LifePicsTypeUploadFileWatermarkResponse extends LifePicsWsdlClass
{
	/**
	 * The UploadFileWatermarkResult
	 * @var LifePicsTypeUploadFileWatermarkResult
	 */
	public $UploadFileWatermarkResult;
	/**
	 * Constructor
	 * @param LifePicsTypeUploadFileWatermarkResult UploadFileWatermarkResult
	 * @return LifePicsTypeUploadFileWatermarkResponse
	 */
	public function __construct($_UploadFileWatermarkResult = null)
	{
		parent::__construct(array('UploadFileWatermarkResult'=>$_UploadFileWatermarkResult));
	}
	/**
	 * Set UploadFileWatermarkResult
	 * @param UploadFileWatermarkResult UploadFileWatermarkResult
	 * @return UploadFileWatermarkResult
	 */
	public function setUploadFileWatermarkResult($_UploadFileWatermarkResult)
	{
		return ($this->UploadFileWatermarkResult = $_UploadFileWatermarkResult);
	}
	/**
	 * Get UploadFileWatermarkResult
	 * @return LifePicsTypeUploadFileWatermarkResult
	 */
	public function getUploadFileWatermarkResult()
	{
		return $this->UploadFileWatermarkResult;
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