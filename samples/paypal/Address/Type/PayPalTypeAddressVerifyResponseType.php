<?php
/**
 * Class file for PayPalTypeAddressVerifyResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeAddressVerifyResponseType
 * @date 14/07/2012
 */
class PayPalTypeAddressVerifyResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The ConfirmationCode
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Confirmation of a match, with one of the following tokens: None: The input value of the Email object does not match any email address on file at PayPal. Confirmed: If the value of the StreetMatch object is Matched, PayPal responds that the entire postal address is confirmed. Unconfirmed: PayPal responds that the postal address is unconfirmed
	 * @var PayPalTypeAddressStatusCodeType
	 */
	public $ConfirmationCode;
	/**
	 * The StreetMatch
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : PayPal has compared the postal address you want to verify with the postal address on file at PayPal. None: The input value of the Email object does not match any email address on file at PayPal. In addition, an error response is returned. No further comparison of other input values has been made. Matched: The street address matches the street address on file at PayPal. Unmatched: The street address does not match the street address on file at PayPal.
	 * @var PayPalTypeMatchStatusCodeType
	 */
	public $StreetMatch;
	/**
	 * The ZipMatch
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : PayPal has compared the zip code you want to verify with the zip code on file for the email address. None: The street address was unmatched. No further comparison of other input values has been made. Matched: The zip code matches the zip code on file at PayPal. Unmatched: The zip code does not match the zip code on file at PayPal.
	 * @var PayPalTypeMatchStatusCodeType
	 */
	public $ZipMatch;
	/**
	 * The CountryCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Two-character country code (ISO 3166) on file for the PayPal email address.
	 * @var PayPalTypeCountryCodeType
	 */
	public $CountryCode;
	/**
	 * The PayPalToken
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : The token prevents a buyer from using any street address other than the address on file at PayPal during additional purchases he might make from the merchant. It contains encrypted information about the user’s street address and email address. You can pass the value of the token with the Buy Now button HTML address_api_token variable so that PayPal prevents the buyer from using any street address or email address other than those verified by PayPal. The token is valid for 24 hours. Character length and limitations: 94 single-byte characters
	 * @var string
	 */
	public $PayPalToken;
	/**
	 * Constructor
	 * @param PayPalTypeAddressStatusCodeType ConfirmationCode
	 * @param PayPalTypeMatchStatusCodeType StreetMatch
	 * @param PayPalTypeMatchStatusCodeType ZipMatch
	 * @param PayPalTypeCountryCodeType CountryCode
	 * @param string PayPalToken
	 * @return PayPalTypeAddressVerifyResponseType
	 */
	public function __construct($_ConfirmationCode,$_StreetMatch,$_ZipMatch = null,$_CountryCode = null,$_PayPalToken = null)
	{
		PayPalWsdlClass::__construct(array('ConfirmationCode'=>$_ConfirmationCode,'StreetMatch'=>$_StreetMatch,'ZipMatch'=>$_ZipMatch,'CountryCode'=>$_CountryCode,'PayPalToken'=>$_PayPalToken));
	}
	/**
	 * Set ConfirmationCode
	 * @param AddressStatusCodeType ConfirmationCode
	 * @return AddressStatusCodeType
	 */
	public function setConfirmationCode($_ConfirmationCode)
	{
		return ($this->ConfirmationCode = PayPalTypeAddressStatusCodeType::valueIsValid($_ConfirmationCode)?$_ConfirmationCode:null);
	}
	/**
	 * Get ConfirmationCode
	 * @return PayPalTypeAddressStatusCodeType
	 */
	public function getConfirmationCode()
	{
		return $this->ConfirmationCode;
	}
	/**
	 * Set StreetMatch
	 * @param MatchStatusCodeType StreetMatch
	 * @return MatchStatusCodeType
	 */
	public function setStreetMatch($_StreetMatch)
	{
		return ($this->StreetMatch = PayPalTypeMatchStatusCodeType::valueIsValid($_StreetMatch)?$_StreetMatch:null);
	}
	/**
	 * Get StreetMatch
	 * @return PayPalTypeMatchStatusCodeType
	 */
	public function getStreetMatch()
	{
		return $this->StreetMatch;
	}
	/**
	 * Set ZipMatch
	 * @param MatchStatusCodeType ZipMatch
	 * @return MatchStatusCodeType
	 */
	public function setZipMatch($_ZipMatch)
	{
		return ($this->ZipMatch = PayPalTypeMatchStatusCodeType::valueIsValid($_ZipMatch)?$_ZipMatch:null);
	}
	/**
	 * Get ZipMatch
	 * @return PayPalTypeMatchStatusCodeType
	 */
	public function getZipMatch()
	{
		return $this->ZipMatch;
	}
	/**
	 * Set CountryCode
	 * @param CountryCodeType CountryCode
	 * @return CountryCodeType
	 */
	public function setCountryCode($_CountryCode)
	{
		return ($this->CountryCode = PayPalTypeCountryCodeType::valueIsValid($_CountryCode)?$_CountryCode:null);
	}
	/**
	 * Get CountryCode
	 * @return PayPalTypeCountryCodeType
	 */
	public function getCountryCode()
	{
		return $this->CountryCode;
	}
	/**
	 * Set PayPalToken
	 * @param string PayPalToken
	 * @return string
	 */
	public function setPayPalToken($_PayPalToken)
	{
		return ($this->PayPalToken = $_PayPalToken);
	}
	/**
	 * Get PayPalToken
	 * @return string
	 */
	public function getPayPalToken()
	{
		return $this->PayPalToken;
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