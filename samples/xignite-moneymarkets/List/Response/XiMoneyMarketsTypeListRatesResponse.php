<?php
/**
 * Class file for XiMoneyMarketsTypeListRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiMoneyMarketsTypeListRatesResponse
 * @date 08/07/2012
 */
class XiMoneyMarketsTypeListRatesResponse extends XiMoneyMarketsWsdlClass
{
	/**
	 * The ListRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiMoneyMarketsTypeArrayOfRateDescription
	 */
	public $ListRatesResult;
	/**
	 * Constructor
	 * @param XiMoneyMarketsTypeArrayOfRateDescription ListRatesResult
	 * @return XiMoneyMarketsTypeListRatesResponse
	 */
	public function __construct($_ListRatesResult = null)
	{
		parent::__construct(array('ListRatesResult'=>new XiMoneyMarketsTypeArrayOfRateDescription($_ListRatesResult)));
	}
	/**
	 * Set ListRatesResult
	 * @param ArrayOfRateDescription ListRatesResult
	 * @return ArrayOfRateDescription
	 */
	public function setListRatesResult($_ListRatesResult)
	{
		return ($this->ListRatesResult = $_ListRatesResult);
	}
	/**
	 * Get ListRatesResult
	 * @return XiMoneyMarketsTypeArrayOfRateDescription
	 */
	public function getListRatesResult()
	{
		return $this->ListRatesResult;
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