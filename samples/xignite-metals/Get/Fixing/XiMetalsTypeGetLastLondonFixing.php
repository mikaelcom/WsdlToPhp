<?php
/**
 * Class file for XiMetalsTypeGetLastLondonFixing
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLastLondonFixing
 * @date 08/07/2012
 */
class XiMetalsTypeGetLastLondonFixing extends XiMetalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeFixingTypes
	 */
	public $Type;
	/**
	 * The Currency
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeFixingCurrencyTypes
	 */
	public $Currency;
	/**
	 * Constructor
	 * @param XiMetalsTypeFixingTypes Type
	 * @param XiMetalsTypeFixingCurrencyTypes Currency
	 * @return XiMetalsTypeGetLastLondonFixing
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
		return ($this->Type = XiMetalsTypeFixingTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMetalsTypeFixingTypes
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
		return ($this->Currency = XiMetalsTypeFixingCurrencyTypes::valueIsValid($_Currency)?$_Currency:null);
	}
	/**
	 * Get Currency
	 * @return XiMetalsTypeFixingCurrencyTypes
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