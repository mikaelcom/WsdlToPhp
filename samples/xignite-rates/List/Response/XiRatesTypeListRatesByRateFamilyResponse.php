<?php
/**
 * Class file for XiRatesTypeListRatesByRateFamilyResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeListRatesByRateFamilyResponse
 * @date 08/07/2012
 */
class XiRatesTypeListRatesByRateFamilyResponse extends XiRatesWsdlClass
{
	/**
	 * The ListRatesByRateFamilyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeArrayOfRateDescription
	 */
	public $ListRatesByRateFamilyResult;
	/**
	 * Constructor
	 * @param XiRatesTypeArrayOfRateDescription ListRatesByRateFamilyResult
	 * @return XiRatesTypeListRatesByRateFamilyResponse
	 */
	public function __construct($_ListRatesByRateFamilyResult = null)
	{
		parent::__construct(array('ListRatesByRateFamilyResult'=>new XiRatesTypeArrayOfRateDescription($_ListRatesByRateFamilyResult)));
	}
	/**
	 * Set ListRatesByRateFamilyResult
	 * @param ArrayOfRateDescription ListRatesByRateFamilyResult
	 * @return ArrayOfRateDescription
	 */
	public function setListRatesByRateFamilyResult($_ListRatesByRateFamilyResult)
	{
		return ($this->ListRatesByRateFamilyResult = $_ListRatesByRateFamilyResult);
	}
	/**
	 * Get ListRatesByRateFamilyResult
	 * @return XiRatesTypeArrayOfRateDescription
	 */
	public function getListRatesByRateFamilyResult()
	{
		return $this->ListRatesByRateFamilyResult;
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