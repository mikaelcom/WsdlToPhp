<?php
/**
 * Class file for PayPalTypeUpdateAccessPermissionsRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeUpdateAccessPermissionsRequestType
 * @date 14/07/2012
 */
class PayPalTypeUpdateAccessPermissionsRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The PayerID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Unique PayPal customer account number, the value of which was returned by GetAuthDetails Response. Required Character length and limitations: 20 single-byte characters
	 * @var PayPalTypeUserIDType
	 */
	public $PayerID;
	/**
	 * Constructor
	 * @param PayPalTypeUserIDType PayerID
	 * @return PayPalTypeUpdateAccessPermissionsRequestType
	 */
	public function __construct($_PayerID)
	{
		PayPalWsdlClass::__construct(array('PayerID'=>$_PayerID));
	}
	/**
	 * Set PayerID
	 * @param UserIDType PayerID
	 * @return UserIDType
	 */
	public function setPayerID($_PayerID)
	{
		return ($this->PayerID = PayPalTypeUserIDType::valueIsValid($_PayerID)?$_PayerID:null);
	}
	/**
	 * Get PayerID
	 * @return PayPalTypeUserIDType
	 */
	public function getPayerID()
	{
		return $this->PayerID;
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