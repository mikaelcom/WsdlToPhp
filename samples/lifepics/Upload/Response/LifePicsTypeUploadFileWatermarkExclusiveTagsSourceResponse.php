<?php
/**
 * Class file for LifePicsTypeUploadFileWatermarkExclusiveTagsSourceResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUploadFileWatermarkExclusiveTagsSourceResponse
 * @date 02/08/2012
 */
class LifePicsTypeUploadFileWatermarkExclusiveTagsSourceResponse extends LifePicsWsdlClass
{
	/**
	 * The UploadFileWatermarkExclusiveTagsSourceResult
	 * @var LifePicsTypeUploadFileWatermarkExclusiveTagsSourceResult
	 */
	public $UploadFileWatermarkExclusiveTagsSourceResult;
	/**
	 * Constructor
	 * @param LifePicsTypeUploadFileWatermarkExclusiveTagsSourceResult UploadFileWatermarkExclusiveTagsSourceResult
	 * @return LifePicsTypeUploadFileWatermarkExclusiveTagsSourceResponse
	 */
	public function __construct($_UploadFileWatermarkExclusiveTagsSourceResult = null)
	{
		parent::__construct(array('UploadFileWatermarkExclusiveTagsSourceResult'=>$_UploadFileWatermarkExclusiveTagsSourceResult));
	}
	/**
	 * Set UploadFileWatermarkExclusiveTagsSourceResult
	 * @param UploadFileWatermarkExclusiveTagsSourceResult UploadFileWatermarkExclusiveTagsSourceResult
	 * @return UploadFileWatermarkExclusiveTagsSourceResult
	 */
	public function setUploadFileWatermarkExclusiveTagsSourceResult($_UploadFileWatermarkExclusiveTagsSourceResult)
	{
		return ($this->UploadFileWatermarkExclusiveTagsSourceResult = $_UploadFileWatermarkExclusiveTagsSourceResult);
	}
	/**
	 * Get UploadFileWatermarkExclusiveTagsSourceResult
	 * @return LifePicsTypeUploadFileWatermarkExclusiveTagsSourceResult
	 */
	public function getUploadFileWatermarkExclusiveTagsSourceResult()
	{
		return $this->UploadFileWatermarkExclusiveTagsSourceResult;
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