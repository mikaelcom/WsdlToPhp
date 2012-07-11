<?php
/**
 * Class file for XiCurrenciesTypeGetRealTimeCrossRate
 * @date 08/07/2012
 */
/**
 * Class XiCurrenciesTypeGetRealTimeCrossRate
 * @date 08/07/2012
 */
class XiCurrenciesTypeGetRealTimeCrossRate extends XiCurrenciesWsdlClass
{
	/**
	 * The From
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCurrencies
	 */
	public $From;
	/**
	 * The To
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiCurrenciesTypeCurrencies
	 */
	public $To;
	/**
	 * Constructor
	 * @param XiCurrenciesTypeCurrencies From
	 * @param XiCurrenciesTypeCurrencies To
	 * @return XiCurrenciesTypeGetRealTimeCrossRate
	 */
	public function __construct($_From,$_To)
	{
		parent::__construct(array('From'=>$_From,'To'=>$_To));
	}
	/**
	 * Set From
	 * @param Currencies From
	 * @return Currencies
	 */
	public function setFrom($_From)
	{
		return ($this->From = XiCurrenciesTypeCurrencies::valueIsValid($_From)?$_From:null);
	}
	/**
	 * Get From
	 * @return XiCurrenciesTypeCurrencies
	 */
	public function getFrom()
	{
		return $this->From;
	}
	/**
	 * Set To
	 * @param Currencies To
	 * @return Currencies
	 */
	public function setTo($_To)
	{
		return ($this->To = XiCurrenciesTypeCurrencies::valueIsValid($_To)?$_To:null);
	}
	/**
	 * Get To
	 * @return XiCurrenciesTypeCurrencies
	 */
	public function getTo()
	{
		return $this->To;
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