<?php
/**
 * Class file for LifePicsTypeUploadFileRotateResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeUploadFileRotateResponse
 * @date 02/08/2012
 */
class LifePicsTypeUploadFileRotateResponse extends LifePicsWsdlClass
{
	/**
	 * The UploadFileRotateResult
	 * @var LifePicsTypeUploadFileRotateResult
	 */
	public $UploadFileRotateResult;
	/**
	 * Constructor
	 * @param LifePicsTypeUploadFileRotateResult UploadFileRotateResult
	 * @return LifePicsTypeUploadFileRotateResponse
	 */
	public function __construct($_UploadFileRotateResult = null)
	{
		parent::__construct(array('UploadFileRotateResult'=>$_UploadFileRotateResult));
	}
	/**
	 * Set UploadFileRotateResult
	 * @param UploadFileRotateResult UploadFileRotateResult
	 * @return UploadFileRotateResult
	 */
	public function setUploadFileRotateResult($_UploadFileRotateResult)
	{
		return ($this->UploadFileRotateResult = $_UploadFileRotateResult);
	}
	/**
	 * Get UploadFileRotateResult
	 * @return LifePicsTypeUploadFileRotateResult
	 */
	public function getUploadFileRotateResult()
	{
		return $this->UploadFileRotateResult;
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