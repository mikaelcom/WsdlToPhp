<?php
/**
 * Class file for XiGlobaloptionsTypeOptionsBaseOfExtendedExpirationExtendedOption
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeOptionsBaseOfExtendedExpirationExtendedOption
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeOptionsBaseOfExtendedExpirationExtendedOption extends XiGlobaloptionsTypeCommon
{
	/**
	 * The Quote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeQuickQuote
	 */
	public $Quote;
	/**
	 * The Expirations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeArrayOfExtendedExpiration
	 */
	public $Expirations;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobaloptionsTypeSecurity
	 */
	public $Security;
	/**
	 * Constructor
	 * @param XiGlobaloptionsTypeQuickQuote Quote
	 * @param XiGlobaloptionsTypeArrayOfExtendedExpiration Expirations
	 * @param XiGlobaloptionsTypeSecurity Security
	 * @return XiGlobaloptionsTypeOptionsBaseOfExtendedExpirationExtendedOption
	 */
	public function __construct($_Quote = null,$_Expirations = null,$_Security = null)
	{
		XiGlobaloptionsWsdlClass::__construct(array('Quote'=>$_Quote,'Expirations'=>new XiGlobaloptionsTypeArrayOfExtendedExpiration($_Expirations),'Security'=>$_Security));
	}
	/**
	 * Set Quote
	 * @param QuickQuote Quote
	 * @return QuickQuote
	 */
	public function setQuote($_Quote)
	{
		return ($this->Quote = $_Quote);
	}
	/**
	 * Get Quote
	 * @return XiGlobaloptionsTypeQuickQuote
	 */
	public function getQuote()
	{
		return $this->Quote;
	}
	/**
	 * Set Expirations
	 * @param ArrayOfExtendedExpiration Expirations
	 * @return ArrayOfExtendedExpiration
	 */
	public function setExpirations($_Expirations)
	{
		return ($this->Expirations = $_Expirations);
	}
	/**
	 * Get Expirations
	 * @return XiGlobaloptionsTypeArrayOfExtendedExpiration
	 */
	public function getExpirations()
	{
		return $this->Expirations;
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return XiGlobaloptionsTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
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