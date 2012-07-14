<?php
/**
 * Class file for PayPalTypeGetMobileStatusRequestDetailsType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetMobileStatusRequestDetailsType
 * @date 14/07/2012
 */
class PayPalTypeGetMobileStatusRequestDetailsType extends PayPalWsdlClass
{
	/**
	 * The Phone
	 * Meta informations :
	 * 	- documentation : Phone number for status inquiry
	 * @var PayPalTypePhoneNumberType
	 */
	public $Phone;
	/**
	 * Constructor
	 * @param PayPalTypePhoneNumberType Phone
	 * @return PayPalTypeGetMobileStatusRequestDetailsType
	 */
	public function __construct($_Phone = null)
	{
		parent::__construct(array('Phone'=>$_Phone));
	}
	/**
	 * Set Phone
	 * @param PhoneNumberType Phone
	 * @return PhoneNumberType
	 */
	public function setPhone($_Phone)
	{
		return ($this->Phone = $_Phone);
	}
	/**
	 * Get Phone
	 * @return PayPalTypePhoneNumberType
	 */
	public function getPhone()
	{
		return $this->Phone;
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