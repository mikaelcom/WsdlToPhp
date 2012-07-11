<?php
/**
 * Class file for CdynePhoneVerifyTypeCheckPhoneNumberResponse
 * @date 03/07/2012
 */
/**
 * Class CdynePhoneVerifyTypeCheckPhoneNumberResponse
 * @date 03/07/2012
 */
class CdynePhoneVerifyTypeCheckPhoneNumberResponse extends CdynePhoneVerifyWsdlClass
{
	/**
	 * The CheckPhoneNumberResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var CdynePhoneVerifyTypePhoneReturn
	 */
	public $CheckPhoneNumberResult;
	/**
	 * Constructor
	 * @param CdynePhoneVerifyTypePhoneReturn CheckPhoneNumberResult
	 * @return CdynePhoneVerifyTypeCheckPhoneNumberResponse
	 */
	public function __construct($_CheckPhoneNumberResult)
	{
		parent::__construct(array('CheckPhoneNumberResult'=>$_CheckPhoneNumberResult));
	}
	/**
	 * Set CheckPhoneNumberResult
	 * @param PhoneReturn CheckPhoneNumberResult
	 * @return PhoneReturn
	 */
	public function setCheckPhoneNumberResult($_CheckPhoneNumberResult)
	{
		return ($this->CheckPhoneNumberResult = $_CheckPhoneNumberResult);
	}
	/**
	 * Get CheckPhoneNumberResult
	 * @return CdynePhoneVerifyTypePhoneReturn
	 */
	public function getCheckPhoneNumberResult()
	{
		return $this->CheckPhoneNumberResult;
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