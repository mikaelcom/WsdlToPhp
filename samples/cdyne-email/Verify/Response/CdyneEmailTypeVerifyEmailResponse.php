<?php
/**
 * Class file for CdyneEmailTypeVerifyEmailResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneEmailTypeVerifyEmailResponse
 * @date 02/07/2012
 */
class CdyneEmailTypeVerifyEmailResponse extends CdyneEmailWsdlClass
{
	/**
	 * The VerifyEmailResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneEmailTypeReturnIndicator
	 */
	public $VerifyEmailResult;
	/**
	 * Constructor
	 * @param CdyneEmailTypeReturnIndicator VerifyEmailResult
	 * @return CdyneEmailTypeVerifyEmailResponse
	 */
	public function __construct($_VerifyEmailResult = null)
	{
		parent::__construct(array('VerifyEmailResult'=>$_VerifyEmailResult));
	}
	/**
	 * Set VerifyEmailResult
	 * @param ReturnIndicator VerifyEmailResult
	 * @return ReturnIndicator
	 */
	public function setVerifyEmailResult($_VerifyEmailResult)
	{
		return ($this->VerifyEmailResult = $_VerifyEmailResult);
	}
	/**
	 * Get VerifyEmailResult
	 * @return CdyneEmailTypeReturnIndicator
	 */
	public function getVerifyEmailResult()
	{
		return $this->VerifyEmailResult;
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