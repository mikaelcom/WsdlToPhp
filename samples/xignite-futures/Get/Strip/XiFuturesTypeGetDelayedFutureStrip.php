<?php
/**
 * Class file for XiFuturesTypeGetDelayedFutureStrip
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetDelayedFutureStrip
 * @date 08/07/2012
 */
class XiFuturesTypeGetDelayedFutureStrip extends XiFuturesWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Symbol;
	/**
	 * The StripType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFuturesTypeStripTypes
	 */
	public $StripType;
	/**
	 * Constructor
	 * @param string Symbol
	 * @param XiFuturesTypeStripTypes StripType
	 * @return XiFuturesTypeGetDelayedFutureStrip
	 */
	public function __construct($_Symbol = null,$_StripType)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'StripType'=>$_StripType));
	}
	/**
	 * Set Symbol
	 * @param string Symbol
	 * @return string
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = $_Symbol);
	}
	/**
	 * Get Symbol
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set StripType
	 * @param StripTypes StripType
	 * @return StripTypes
	 */
	public function setStripType($_StripType)
	{
		return ($this->StripType = XiFuturesTypeStripTypes::valueIsValid($_StripType)?$_StripType:null);
	}
	/**
	 * Get StripType
	 * @return XiFuturesTypeStripTypes
	 */
	public function getStripType()
	{
		return $this->StripType;
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