<?php
/**
 * Class file for XiMetalsTypeGetLastLondonFixings
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLastLondonFixings
 * @date 08/07/2012
 */
class XiMetalsTypeGetLastLondonFixings extends XiMetalsWsdlClass
{
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
	 * @param XiMetalsTypeFixingCurrencyTypes Currency
	 * @return XiMetalsTypeGetLastLondonFixings
	 */
	public function __construct($_Currency)
	{
		parent::__construct(array('Currency'=>$_Currency));
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