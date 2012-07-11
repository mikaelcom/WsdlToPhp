<?php
/**
 * Class file for XiHousingTypeGetHousingSalesResponse
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeGetHousingSalesResponse
 * @date 08/07/2012
 */
class XiHousingTypeGetHousingSalesResponse extends XiHousingWsdlClass
{
	/**
	 * The GetHousingSalesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeArrayOfHousingStatisticsRecord
	 */
	public $GetHousingSalesResult;
	/**
	 * Constructor
	 * @param XiHousingTypeArrayOfHousingStatisticsRecord GetHousingSalesResult
	 * @return XiHousingTypeGetHousingSalesResponse
	 */
	public function __construct($_GetHousingSalesResult = null)
	{
		parent::__construct(array('GetHousingSalesResult'=>new XiHousingTypeArrayOfHousingStatisticsRecord($_GetHousingSalesResult)));
	}
	/**
	 * Set GetHousingSalesResult
	 * @param ArrayOfHousingStatisticsRecord GetHousingSalesResult
	 * @return ArrayOfHousingStatisticsRecord
	 */
	public function setGetHousingSalesResult($_GetHousingSalesResult)
	{
		return ($this->GetHousingSalesResult = $_GetHousingSalesResult);
	}
	/**
	 * Get GetHousingSalesResult
	 * @return XiHousingTypeArrayOfHousingStatisticsRecord
	 */
	public function getGetHousingSalesResult()
	{
		return $this->GetHousingSalesResult;
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