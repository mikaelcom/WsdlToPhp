<?php
/**
 * Class file for XiRatesTypeGetLastLondonFixing
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetLastLondonFixing
 * @date 08/07/2012
 */
class XiRatesTypeGetLastLondonFixing extends XiRatesWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeFixingTypes
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeFixingCurrencyTypes
	 */
	public $Currency;
	/**
	 * Constructor
	 * @param XiRatesTypeFixingTypes Type
	 * @param XiRatesTypeFixingCurrencyTypes Currency
	 * @return XiRatesTypeGetLastLondonFixing
	 */
	public function __construct($_Type,$_Currency)
	{
		parent::__construct(array('Type'=>$_Type,'Currency'=>$_Currency));
	}
	/**
	 * Set Type
	 * @param FixingTypes Type
	 * @return FixingTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiRatesTypeFixingTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiRatesTypeFixingTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Currency
	 * @param FixingCurrencyTypes Currency
	 * @return FixingCurrencyTypes
	 */
	public function setCurrency($_Currency)
	{
		return ($this->Currency = XiRatesTypeFixingCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiRatesTypeFixingCurrencyTypes
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