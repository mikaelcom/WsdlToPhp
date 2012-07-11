<?php
/**
 * Class file for XiHousingTypeGetHousingPricesByMetroAreaResponse
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeGetHousingPricesByMetroAreaResponse
 * @date 08/07/2012
 */
class XiHousingTypeGetHousingPricesByMetroAreaResponse extends XiHousingWsdlClass
{
	/**
	 * The GetHousingPricesByMetroAreaResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeArrayOfHousingStatisticsRecord
	 */
	public $GetHousingPricesByMetroAreaResult;
	/**
	 * Constructor
	 * @param XiHousingTypeArrayOfHousingStatisticsRecord GetHousingPricesByMetroAreaResult
	 * @return XiHousingTypeGetHousingPricesByMetroAreaResponse
	 */
	public function __construct($_GetHousingPricesByMetroAreaResult = null)
	{
		parent::__construct(array('GetHousingPricesByMetroAreaResult'=>new XiHousingTypeArrayOfHousingStatisticsRecord($_GetHousingPricesByMetroAreaResult)));
	}
	/**
	 * Set GetHousingPricesByMetroAreaResult
	 * @param ArrayOfHousingStatisticsRecord GetHousingPricesByMetroAreaResult
	 * @return ArrayOfHousingStatisticsRecord
	 */
	public function setGetHousingPricesByMetroAreaResult($_GetHousingPricesByMetroAreaResult)
	{
		return ($this->GetHousingPricesByMetroAreaResult = $_GetHousingPricesByMetroAreaResult);
	}
	/**
	 * Get GetHousingPricesByMetroAreaResult
	 * @return XiHousingTypeArrayOfHousingStatisticsRecord
	 */
	public function getGetHousingPricesByMetroAreaResult()
	{
		return $this->GetHousingPricesByMetroAreaResult;
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