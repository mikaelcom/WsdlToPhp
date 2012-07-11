<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeOptionsBaseOfExtendedExpirationExtendedOption
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeOptionsBaseOfExtendedExpirationExtendedOption
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeOptionsBaseOfExtendedExpirationExtendedOption extends XiGlobalrealtimeoptionsTypeCommon
{
	/**
	 * The Quote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeQuickQuote
	 */
	public $Quote;
	/**
	 * The Expirations
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeArrayOfExtendedExpiration
	 */
	public $Expirations;
	/**
	 * The Security
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiGlobalrealtimeoptionsTypeSecurity
	 */
	public $Security;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeoptionsTypeQuickQuote Quote
	 * @param XiGlobalrealtimeoptionsTypeArrayOfExtendedExpiration Expirations
	 * @param XiGlobalrealtimeoptionsTypeSecurity Security
	 * @return XiGlobalrealtimeoptionsTypeOptionsBaseOfExtendedExpirationExtendedOption
	 */
	public function __construct($_Quote = null,$_Expirations = null,$_Security = null)
	{
		XiGlobalrealtimeoptionsWsdlClass::__construct(array('Quote'=>$_Quote,'Expirations'=>new XiGlobalrealtimeoptionsTypeArrayOfExtendedExpiration($_Expirations),'Security'=>$_Security));
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
	 * @return XiGlobalrealtimeoptionsTypeQuickQuote
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
	 * @return XiGlobalrealtimeoptionsTypeArrayOfExtendedExpiration
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
	 * @return XiGlobalrealtimeoptionsTypeSecurity
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