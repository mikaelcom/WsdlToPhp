<?php
/**
 * Class file for XiMetalsTypeGetLastRealTimeMetalQuoteGMT
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLastRealTimeMetalQuoteGMT
 * @date 08/07/2012
 */
class XiMetalsTypeGetLastRealTimeMetalQuoteGMT extends XiMetalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalCurrencyTypes
	 */
	public $Currency;
	/**
	 * Constructor
	 * @param string Type
	 * @param XiMetalsTypeMetalCurrencyTypes Currency
	 * @return XiMetalsTypeGetLastRealTimeMetalQuoteGMT
	 */
	public function __construct($_Type = null,$_Currency)
	{
		parent::__construct(array('Type'=>$_Type,'Currency'=>$_Currency));
	}
	/**
	 * Set Type
	 * @param string Type
	 * @return string
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return string
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Currency
	 * @param MetalCurrencyTypes Currency
	 * @return MetalCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiMetalsTypeMetalCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiMetalsTypeMetalCurrencyTypes
	 */
	public function getCurrency()
	{
		return $this->Currency;
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