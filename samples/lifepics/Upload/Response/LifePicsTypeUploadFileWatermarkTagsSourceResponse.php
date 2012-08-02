<?php
/**
 * Class file for LifePicsTypeUploadFileWatermarkTagsSourceResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUploadFileWatermarkTagsSourceResponse
 * @date 02/08/2012
 */
class LifePicsTypeUploadFileWatermarkTagsSourceResponse extends LifePicsWsdlClass
{
	/**
	 * The UploadFileWatermarkTagsSourceResult
	 * @var LifePicsTypeUploadFileWatermarkTagsSourceResult
	 */
	public $UploadFileWatermarkTagsSourceResult;
	/**
	 * Constructor
	 * @param LifePicsTypeUploadFileWatermarkTagsSourceResult UploadFileWatermarkTagsSourceResult
	 * @return LifePicsTypeUploadFileWatermarkTagsSourceResponse
	 */
	public function __construct($_UploadFileWatermarkTagsSourceResult = null)
	{
		parent::__construct(array('UploadFileWatermarkTagsSourceResult'=>$_UploadFileWatermarkTagsSourceResult));
	}
	/**
	 * Set UploadFileWatermarkTagsSourceResult
	 * @param UploadFileWatermarkTagsSourceResult UploadFileWatermarkTagsSourceResult
	 * @return UploadFileWatermarkTagsSourceResult
	 */
	public function setUploadFileWatermarkTagsSourceResult($_UploadFileWatermarkTagsSourceResult)
	{
		return ($this->UploadFileWatermarkTagsSourceResult = $_UploadFileWatermarkTagsSourceResult);
	}
	/**
	 * Get UploadFileWatermarkTagsSourceResult
	 * @return LifePicsTypeUploadFileWatermarkTagsSourceResult
	 */
	public function getUploadFileWatermarkTagsSourceResult()
	{
		return $this->UploadFileWatermarkTagsSourceResult;
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