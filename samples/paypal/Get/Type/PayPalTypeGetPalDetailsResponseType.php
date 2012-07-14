<?php
/**
 * Class file for PayPalTypeGetPalDetailsResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeGetPalDetailsResponseType
 * @date 14/07/2012
 */
class PayPalTypeGetPalDetailsResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The Pal
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Pal;
	/**
	 * The Locale
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Locale;
	/**
	 * Constructor
	 * @param string Pal
	 * @param string Locale
	 * @return PayPalTypeGetPalDetailsResponseType
	 */
	public function __construct($_Pal,$_Locale)
	{
		PayPalWsdlClass::__construct(array('Pal'=>$_Pal,'Locale'=>$_Locale));
	}
	/**
	 * Set Pal
	 * @param string Pal
	 * @return string
	 */
	public function setPal($_Pal)
	{
		return ($this->Pal = $_Pal);
	}
	/**
	 * Get Pal
	 * @return string
	 */
	public function getPal()
	{
		return $this->Pal;
	}
	/**
	 * Set Locale
	 * @param string Locale
	 * @return string
	 */
	public function setLocale($_Locale)
	{
		return ($this->Locale = $_Locale);
	}
	/**
	 * Get Locale
	 * @return string
	 */
	public function getLocale()
	{
		return $this->Locale;
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