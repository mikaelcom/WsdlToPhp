<?php
/**
 * Class file for XiGlobalrealtimeoptionsTypeOptionsBaseOfExpirationOption
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeoptionsTypeOptionsBaseOfExpirationOption
 * @date 08/07/2012
 */
class XiGlobalrealtimeoptionsTypeOptionsBaseOfExpirationOption extends XiGlobalrealtimeoptionsTypeCommon
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
	 * @var XiGlobalrealtimeoptionsTypeArrayOfExpiration
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
	 * @param XiGlobalrealtimeoptionsTypeArrayOfExpiration Expirations
	 * @param XiGlobalrealtimeoptionsTypeSecurity Security
	 * @return XiGlobalrealtimeoptionsTypeOptionsBaseOfExpirationOption
	 */
	public function __construct($_Quote = null,$_Expirations = null,$_Security = null)
	{
		XiGlobalrealtimeoptionsWsdlClass::__construct(array('Quote'=>$_Quote,'Expirations'=>new XiGlobalrealtimeoptionsTypeArrayOfExpiration($_Expirations),'Security'=>$_Security));
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
	 * @param ArrayOfExpiration Expirations
	 * @return ArrayOfExpiration
	 */
	public function setExpirations($_Expirations)
	{
		return ($this->Expirations = $_Expirations);
	}
	/**
	 * Get Expirations
	 * @return XiGlobalrealtimeoptionsTypeArrayOfExpiration
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