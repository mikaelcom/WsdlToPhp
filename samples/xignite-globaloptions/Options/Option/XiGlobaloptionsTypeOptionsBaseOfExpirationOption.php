<?php
/**
 * Class file for XiGlobaloptionsTypeOptionsBaseOfExpirationOption
 * @date 08/07/2012
 */
/**
 * Class XiGlobaloptionsTypeOptionsBaseOfExpirationOption
 * @date 08/07/2012
 */
class XiGlobaloptionsTypeOptionsBaseOfExpirationOption extends XiGlobaloptionsTypeCommon
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
	 * @var XiGlobaloptionsTypeArrayOfExpiration
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
	 * @param XiGlobaloptionsTypeArrayOfExpiration Expirations
	 * @param XiGlobaloptionsTypeSecurity Security
	 * @return XiGlobaloptionsTypeOptionsBaseOfExpirationOption
	 */
	public function __construct($_Quote = null,$_Expirations = null,$_Security = null)
	{
		XiGlobaloptionsWsdlClass::__construct(array('Quote'=>$_Quote,'Expirations'=>new XiGlobaloptionsTypeArrayOfExpiration($_Expirations),'Security'=>$_Security));
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
	 * @param ArrayOfExpiration Expirations
	 * @return ArrayOfExpiration
	 */
	public function setExpirations($_Expirations)
	{
		return ($this->Expirations = $_Expirations);
	}
	/**
	 * Get Expirations
	 * @return XiGlobaloptionsTypeArrayOfExpiration
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