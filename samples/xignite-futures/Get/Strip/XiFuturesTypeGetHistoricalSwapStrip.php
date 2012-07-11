<?php
/**
 * Class file for XiFuturesTypeGetHistoricalSwapStrip
 * @date 08/07/2012
 */
/**
 * Class XiFuturesTypeGetHistoricalSwapStrip
 * @date 08/07/2012
 */
class XiFuturesTypeGetHistoricalSwapStrip extends XiFuturesWsdlClass
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
	 * The AsOfDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AsOfDate;
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
	 * @param string AsOfDate
	 * @param XiFuturesTypeStripTypes StripType
	 * @return XiFuturesTypeGetHistoricalSwapStrip
	 */
	public function __construct($_Symbol = null,$_AsOfDate = null,$_StripType)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'AsOfDate'=>$_AsOfDate,'StripType'=>$_StripType));
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
	 * Set AsOfDate
	 * @param string AsOfDate
	 * @return string
	 */
	public function setAsOfDate($_AsOfDate)
	{
		return ($this->AsOfDate = $_AsOfDate);
	}
	/**
	 * Get AsOfDate
	 * @return string
	 */
	public function getAsOfDate()
	{
		return $this->AsOfDate;
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