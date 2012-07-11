<?php
/**
 * Class file for CdynePhoneVerifyTypeCheckPhoneNumbersResponse
 * @date 03/07/2012
 */
/**
 * Class CdynePhoneVerifyTypeCheckPhoneNumbersResponse
 * @date 03/07/2012
 */
class CdynePhoneVerifyTypeCheckPhoneNumbersResponse extends CdynePhoneVerifyWsdlClass
{
	/**
	 * The CheckPhoneNumbersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdynePhoneVerifyTypeArrayOfPhoneReturn
	 */
	public $CheckPhoneNumbersResult;
	/**
	 * Constructor
	 * @param CdynePhoneVerifyTypeArrayOfPhoneReturn CheckPhoneNumbersResult
	 * @return CdynePhoneVerifyTypeCheckPhoneNumbersResponse
	 */
	public function __construct($_CheckPhoneNumbersResult = null)
	{
		parent::__construct(array('CheckPhoneNumbersResult'=>new CdynePhoneVerifyTypeArrayOfPhoneReturn($_CheckPhoneNumbersResult)));
	}
	/**
	 * Set CheckPhoneNumbersResult
	 * @param ArrayOfPhoneReturn CheckPhoneNumbersResult
	 * @return ArrayOfPhoneReturn
	 */
	public function setCheckPhoneNumbersResult($_CheckPhoneNumbersResult)
	{
		return ($this->CheckPhoneNumbersResult = $_CheckPhoneNumbersResult);
	}
	/**
	 * Get CheckPhoneNumbersResult
	 * @return CdynePhoneVerifyTypeArrayOfPhoneReturn
	 */
	public function getCheckPhoneNumbersResult()
	{
		return $this->CheckPhoneNumbersResult;
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