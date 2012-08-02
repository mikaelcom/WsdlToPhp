<?php
/**
 * Class file for LifePicsTypeUploadFileTagsSourceResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUploadFileTagsSourceResponse
 * @date 02/08/2012
 */
class LifePicsTypeUploadFileTagsSourceResponse extends LifePicsWsdlClass
{
	/**
	 * The UploadFileTagsSourceResult
	 * @var LifePicsTypeUploadFileTagsSourceResult
	 */
	public $UploadFileTagsSourceResult;
	/**
	 * Constructor
	 * @param LifePicsTypeUploadFileTagsSourceResult UploadFileTagsSourceResult
	 * @return LifePicsTypeUploadFileTagsSourceResponse
	 */
	public function __construct($_UploadFileTagsSourceResult = null)
	{
		parent::__construct(array('UploadFileTagsSourceResult'=>$_UploadFileTagsSourceResult));
	}
	/**
	 * Set UploadFileTagsSourceResult
	 * @param UploadFileTagsSourceResult UploadFileTagsSourceResult
	 * @return UploadFileTagsSourceResult
	 */
	public function setUploadFileTagsSourceResult($_UploadFileTagsSourceResult)
	{
		return ($this->UploadFileTagsSourceResult = $_UploadFileTagsSourceResult);
	}
	/**
	 * Get UploadFileTagsSourceResult
	 * @return LifePicsTypeUploadFileTagsSourceResult
	 */
	public function getUploadFileTagsSourceResult()
	{
		return $this->UploadFileTagsSourceResult;
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