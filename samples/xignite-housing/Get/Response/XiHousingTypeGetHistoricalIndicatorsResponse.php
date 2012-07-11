<?php
/**
 * Class file for XiHousingTypeGetHistoricalIndicatorsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeGetHistoricalIndicatorsResponse
 * @date 08/07/2012
 */
class XiHousingTypeGetHistoricalIndicatorsResponse extends XiHousingWsdlClass
{
	/**
	 * The GetHistoricalIndicatorsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeArrayOfHousingStatisticsRecord
	 */
	public $GetHistoricalIndicatorsResult;
	/**
	 * Constructor
	 * @param XiHousingTypeArrayOfHousingStatisticsRecord GetHistoricalIndicatorsResult
	 * @return XiHousingTypeGetHistoricalIndicatorsResponse
	 */
	public function __construct($_GetHistoricalIndicatorsResult = null)
	{
		parent::__construct(array('GetHistoricalIndicatorsResult'=>new XiHousingTypeArrayOfHousingStatisticsRecord($_GetHistoricalIndicatorsResult)));
	}
	/**
	 * Set GetHistoricalIndicatorsResult
	 * @param ArrayOfHousingStatisticsRecord GetHistoricalIndicatorsResult
	 * @return ArrayOfHousingStatisticsRecord
	 */
	public function setGetHistoricalIndicatorsResult($_GetHistoricalIndicatorsResult)
	{
		return ($this->GetHistoricalIndicatorsResult = $_GetHistoricalIndicatorsResult);
	}
	/**
	 * Get GetHistoricalIndicatorsResult
	 * @return XiHousingTypeArrayOfHousingStatisticsRecord
	 */
	public function getGetHistoricalIndicatorsResult()
	{
		return $this->GetHistoricalIndicatorsResult;
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