<?php
/**
 * Class file for XiHousingTypeGetHousingSalesByStateResponse
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeGetHousingSalesByStateResponse
 * @date 08/07/2012
 */
class XiHousingTypeGetHousingSalesByStateResponse extends XiHousingWsdlClass
{
	/**
	 * The GetHousingSalesByStateResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeArrayOfHousingStatisticsRecord
	 */
	public $GetHousingSalesByStateResult;
	/**
	 * Constructor
	 * @param XiHousingTypeArrayOfHousingStatisticsRecord GetHousingSalesByStateResult
	 * @return XiHousingTypeGetHousingSalesByStateResponse
	 */
	public function __construct($_GetHousingSalesByStateResult = null)
	{
		parent::__construct(array('GetHousingSalesByStateResult'=>new XiHousingTypeArrayOfHousingStatisticsRecord($_GetHousingSalesByStateResult)));
	}
	/**
	 * Set GetHousingSalesByStateResult
	 * @param ArrayOfHousingStatisticsRecord GetHousingSalesByStateResult
	 * @return ArrayOfHousingStatisticsRecord
	 */
	public function setGetHousingSalesByStateResult($_GetHousingSalesByStateResult)
	{
		return ($this->GetHousingSalesByStateResult = $_GetHousingSalesByStateResult);
	}
	/**
	 * Get GetHousingSalesByStateResult
	 * @return XiHousingTypeArrayOfHousingStatisticsRecord
	 */
	public function getGetHousingSalesByStateResult()
	{
		return $this->GetHousingSalesByStateResult;
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