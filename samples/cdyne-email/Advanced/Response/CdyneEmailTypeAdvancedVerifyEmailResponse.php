<?php
/**
 * Class file for CdyneEmailTypeAdvancedVerifyEmailResponse
 * @date 02/07/2012
 */
/**
 * Class CdyneEmailTypeAdvancedVerifyEmailResponse
 * @date 02/07/2012
 */
class CdyneEmailTypeAdvancedVerifyEmailResponse extends CdyneEmailWsdlClass
{
	/**
	 * The AdvancedVerifyEmailResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneEmailTypeReturnIndicator
	 */
	public $AdvancedVerifyEmailResult;
	/**
	 * Constructor
	 * @param CdyneEmailTypeReturnIndicator AdvancedVerifyEmailResult
	 * @return CdyneEmailTypeAdvancedVerifyEmailResponse
	 */
	public function __construct($_AdvancedVerifyEmailResult = null)
	{
		parent::__construct(array('AdvancedVerifyEmailResult'=>$_AdvancedVerifyEmailResult));
	}
	/**
	 * Set AdvancedVerifyEmailResult
	 * @param ReturnIndicator AdvancedVerifyEmailResult
	 * @return ReturnIndicator
	 */
	public function setAdvancedVerifyEmailResult($_AdvancedVerifyEmailResult)
	{
		return ($this->AdvancedVerifyEmailResult = $_AdvancedVerifyEmailResult);
	}
	/**
	 * Get AdvancedVerifyEmailResult
	 * @return CdyneEmailTypeReturnIndicator
	 */
	public function getAdvancedVerifyEmailResult()
	{
		return $this->AdvancedVerifyEmailResult;
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