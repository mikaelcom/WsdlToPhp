<?php
/**
 * Class file for LifePicsTypeUploadFileResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUploadFileResponse
 * @date 02/08/2012
 */
class LifePicsTypeUploadFileResponse extends LifePicsWsdlClass
{
	/**
	 * The UploadFileResult
	 * @var LifePicsTypeUploadFileResult
	 */
	public $UploadFileResult;
	/**
	 * Constructor
	 * @param LifePicsTypeUploadFileResult UploadFileResult
	 * @return LifePicsTypeUploadFileResponse
	 */
	public function __construct($_UploadFileResult = null)
	{
		parent::__construct(array('UploadFileResult'=>$_UploadFileResult));
	}
	/**
	 * Set UploadFileResult
	 * @param UploadFileResult UploadFileResult
	 * @return UploadFileResult
	 */
	public function setUploadFileResult($_UploadFileResult)
	{
		return ($this->UploadFileResult = $_UploadFileResult);
	}
	/**
	 * Get UploadFileResult
	 * @return LifePicsTypeUploadFileResult
	 */
	public function getUploadFileResult()
	{
		return $this->UploadFileResult;
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