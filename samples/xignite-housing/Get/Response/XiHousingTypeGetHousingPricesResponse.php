<?php
/**
 * Class file for XiHousingTypeGetHousingPricesResponse
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeGetHousingPricesResponse
 * @date 08/07/2012
 */
class XiHousingTypeGetHousingPricesResponse extends XiHousingWsdlClass
{
	/**
	 * The GetHousingPricesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeArrayOfHousingStatisticsRecord
	 */
	public $GetHousingPricesResult;
	/**
	 * Constructor
	 * @param XiHousingTypeArrayOfHousingStatisticsRecord GetHousingPricesResult
	 * @return XiHousingTypeGetHousingPricesResponse
	 */
	public function __construct($_GetHousingPricesResult = null)
	{
		parent::__construct(array('GetHousingPricesResult'=>new XiHousingTypeArrayOfHousingStatisticsRecord($_GetHousingPricesResult)));
	}
	/**
	 * Set GetHousingPricesResult
	 * @param ArrayOfHousingStatisticsRecord GetHousingPricesResult
	 * @return ArrayOfHousingStatisticsRecord
	 */
	public function setGetHousingPricesResult($_GetHousingPricesResult)
	{
		return ($this->GetHousingPricesResult = $_GetHousingPricesResult);
	}
	/**
	 * Get GetHousingPricesResult
	 * @return XiHousingTypeArrayOfHousingStatisticsRecord
	 */
	public function getGetHousingPricesResult()
	{
		return $this->GetHousingPricesResult;
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