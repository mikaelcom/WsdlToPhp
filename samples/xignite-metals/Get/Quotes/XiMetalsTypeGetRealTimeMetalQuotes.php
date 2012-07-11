<?php
/**
 * Class file for XiMetalsTypeGetRealTimeMetalQuotes
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetRealTimeMetalQuotes
 * @date 08/07/2012
 */
class XiMetalsTypeGetRealTimeMetalQuotes extends XiMetalsWsdlClass
{
	/**
	 * The Types
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Types;
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
	 * @param string Types
	 * @param XiMetalsTypeMetalCurrencyTypes Currency
	 * @return XiMetalsTypeGetRealTimeMetalQuotes
	 */
	public function __construct($_Types = null,$_Currency)
	{
		parent::__construct(array('Types'=>$_Types,'Currency'=>$_Currency));
	}
	/**
	 * Set Types
	 * @param string Types
	 * @return string
	 */
	public function setTypes($_Types)
	{
		return ($this->Types = $_Types);
	}
	/**
	 * Get Types
	 * @return string
	 */
	public function getTypes()
	{
		return $this->Types;
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