<?php
/**
 * Class file for PPInvoiceTypePhoneNumberType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypePhoneNumberType
 * @date 02/07/2012
 */
class PPInvoiceTypePhoneNumberType extends PPInvoiceWsdlClass
{
	/**
	 * The countryCode
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $countryCode;
	/**
	 * The phoneNumber
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $phoneNumber;
	/**
	 * The extension
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $extension;
	/**
	 * Constructor
	 * @param string countryCode
	 * @param string phoneNumber
	 * @param string extension
	 * @return PPInvoiceTypePhoneNumberType
	 */
	public function __construct($_countryCode,$_phoneNumber,$_extension = null)
	{
		parent::__construct(array('countryCode'=>$_countryCode,'phoneNumber'=>$_phoneNumber,'extension'=>$_extension));
	}
	/**
	 * Set countryCode
	 * @param string countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
	}
	/**
	 * Get countryCode
	 * @return string
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	/**
	 * Set phoneNumber
	 * @param string phoneNumber
	 * @return string
	 */
	public function setPhoneNumber($_phoneNumber)
	{
		return ($this->phoneNumber = $_phoneNumber);
	}
	/**
	 * Get phoneNumber
	 * @return string
	 */
	public function getPhoneNumber()
	{
		return $this->phoneNumber;
	}
	/**
	 * Set extension
	 * @param string extension
	 * @return string
	 */
	public function setExtension($_extension)
	{
		return ($this->extension = $_extension);
	}
	/**
	 * Get extension
	 * @return string
	 */
	public function getExtension()
	{
		return $this->extension;
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