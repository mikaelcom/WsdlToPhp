<?php
/**
 * Class file for XiInterBanksTypeListRatesResponse
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeListRatesResponse
 * @date 08/07/2012
 */
class XiInterBanksTypeListRatesResponse extends XiInterBanksWsdlClass
{
	/**
	 * The ListRatesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeArrayOfRateDescription
	 */
	public $ListRatesResult;
	/**
	 * Constructor
	 * @param XiInterBanksTypeArrayOfRateDescription ListRatesResult
	 * @return XiInterBanksTypeListRatesResponse
	 */
	public function __construct($_ListRatesResult = null)
	{
		parent::__construct(array('ListRatesResult'=>new XiInterBanksTypeArrayOfRateDescription($_ListRatesResult)));
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
	 * @return XiInterBanksTypeArrayOfRateDescription
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