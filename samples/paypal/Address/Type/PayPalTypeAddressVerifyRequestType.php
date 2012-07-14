<?php
/**
 * Class file for PayPalTypeAddressVerifyRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAddressVerifyRequestType
 * @date 14/07/2012
 */
class PayPalTypeAddressVerifyRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The Email
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Email address of buyer to be verified. Required Maximum string length: 255 single-byte characters Input mask: ?@?.??
	 * @var PayPalTypeEmailAddressType
	 */
	public $Email;
	/**
	 * The Street
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : First line of buyer’s billing or shipping street address to be verified. Required For verification, input value of street address must match the first three single-byte characters of the street address on file for the PayPal account. Maximum string length: 35 single-byte characters Alphanumeric plus - , . ‘ # \ Whitespace and case of input value are ignored.
	 * @var string
	 */
	public $Street;
	/**
	 * The Zip
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Postal code to be verified. Required For verification, input value of postal code must match the first five single-byte characters of the postal code on file for the PayPal account. Maximum string length: 16 single-byte characters Whitespace and case of input value are ignored.
	 * @var string
	 */
	public $Zip;
	/**
	 * Constructor
	 * @param PayPalTypeEmailAddressType Email
	 * @param string Street
	 * @param string Zip
	 * @return PayPalTypeAddressVerifyRequestType
	 */
	public function __construct($_Email,$_Street,$_Zip)
	{
		PayPalWsdlClass::__construct(array('Email'=>$_Email,'Street'=>$_Street,'Zip'=>$_Zip));
	}
	/**
	 * Set Email
	 * @param EmailAddressType Email
	 * @return EmailAddressType
	 */
	public function setEmail($_Email)
	{
		return ($this->Email = PayPalTypeEmailAddressType::valueIsValid($_Email)?$_Email:null);
	}
	/**
	 * Get Email
	 * @return PayPalTypeEmailAddressType
	 */
	public function getEmail()
	{
		return $this->Email;
	}
	/**
	 * Set Street
	 * @param string Street
	 * @return string
	 */
	public function setStreet($_Street)
	{
		return ($this->Street = $_Street);
	}
	/**
	 * Get Street
	 * @return string
	 */
	public function getStreet()
	{
		return $this->Street;
	}
	/**
	 * Set Zip
	 * @param string Zip
	 * @return string
	 */
	public function setZip($_Zip)
	{
		return ($this->Zip = $_Zip);
	}
	/**
	 * Get Zip
	 * @return string
	 */
	public function getZip()
	{
		return $this->Zip;
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