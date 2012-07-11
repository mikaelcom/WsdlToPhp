<?php
/**
 * Class file for XiCurrenciesTypeCurrency
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeCurrency
 * @date 08/07/2012
 */
class XiCurrenciesTypeCurrency extends XiCurrenciesWsdlClass
{
	/**
	 * The Symbol
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCurrencies
	 */
	public $Symbol;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCurrencies Symbol
	 * @param string Name
	 * @return XiCurrenciesTypeCurrency
	 */
	public function __construct($_Symbol,$_Name = null)
	{
		parent::__construct(array('Symbol'=>$_Symbol,'Name'=>$_Name));
	}
	/**
	 * Set Symbol
	 * @param Currencies Symbol
	 * @return Currencies
	 */
	public function setSymbol($_Symbol)
	{
		return ($this->Symbol = XiCurrenciesTypeCurrencies::valueIsValid($_Symbol)?$_Symbol:null);
	}
	/**
	 * Get Symbol
	 * @return XiCurrenciesTypeCurrencies
	 */
	public function getSymbol()
	{
		return $this->Symbol;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
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