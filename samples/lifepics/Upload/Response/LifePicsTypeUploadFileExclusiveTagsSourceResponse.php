<?php
/**
 * Class file for LifePicsTypeUploadFileExclusiveTagsSourceResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUploadFileExclusiveTagsSourceResponse
 * @date 02/08/2012
 */
class LifePicsTypeUploadFileExclusiveTagsSourceResponse extends LifePicsWsdlClass
{
	/**
	 * The UploadFileExclusiveTagsSourceResult
	 * @var LifePicsTypeUploadFileExclusiveTagsSourceResult
	 */
	public $UploadFileExclusiveTagsSourceResult;
	/**
	 * Constructor
	 * @param LifePicsTypeUploadFileExclusiveTagsSourceResult UploadFileExclusiveTagsSourceResult
	 * @return LifePicsTypeUploadFileExclusiveTagsSourceResponse
	 */
	public function __construct($_UploadFileExclusiveTagsSourceResult = null)
	{
		parent::__construct(array('UploadFileExclusiveTagsSourceResult'=>$_UploadFileExclusiveTagsSourceResult));
	}
	/**
	 * Set UploadFileExclusiveTagsSourceResult
	 * @param UploadFileExclusiveTagsSourceResult UploadFileExclusiveTagsSourceResult
	 * @return UploadFileExclusiveTagsSourceResult
	 */
	public function setUploadFileExclusiveTagsSourceResult($_UploadFileExclusiveTagsSourceResult)
	{
		return ($this->UploadFileExclusiveTagsSourceResult = $_UploadFileExclusiveTagsSourceResult);
	}
	/**
	 * Get UploadFileExclusiveTagsSourceResult
	 * @return LifePicsTypeUploadFileExclusiveTagsSourceResult
	 */
	public function getUploadFileExclusiveTagsSourceResult()
	{
		return $this->UploadFileExclusiveTagsSourceResult;
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