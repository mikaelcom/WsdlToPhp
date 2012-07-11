<?php
/**
 * Class file for XiMetalsTypeGetRealTimeMetalQuote
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetRealTimeMetalQuote
 * @date 08/07/2012
 */
class XiMetalsTypeGetRealTimeMetalQuote extends XiMetalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalTypes
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
	 * @param XiMetalsTypeMetalTypes Type
	 * @param XiMetalsTypeMetalCurrencyTypes Currency
	 * @return XiMetalsTypeGetRealTimeMetalQuote
	 */
	public function __construct($_Type,$_Currency)
	{
		parent::__construct(array('Type'=>$_Type,'Currency'=>$_Currency));
	}
	/**
	 * Set Type
	 * @param MetalTypes Type
	 * @return MetalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMetalsTypeMetalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMetalsTypeMetalTypes
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