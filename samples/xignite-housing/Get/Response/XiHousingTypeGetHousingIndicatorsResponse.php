<?php
/**
 * Class file for XiHousingTypeGetHousingIndicatorsResponse
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeGetHousingIndicatorsResponse
 * @date 08/07/2012
 */
class XiHousingTypeGetHousingIndicatorsResponse extends XiHousingWsdlClass
{
	/**
	 * The GetHousingIndicatorsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeArrayOfHousingIndicator
	 */
	public $GetHousingIndicatorsResult;
	/**
	 * Constructor
	 * @param XiHousingTypeArrayOfHousingIndicator GetHousingIndicatorsResult
	 * @return XiHousingTypeGetHousingIndicatorsResponse
	 */
	public function __construct($_GetHousingIndicatorsResult = null)
	{
		parent::__construct(array('GetHousingIndicatorsResult'=>new XiHousingTypeArrayOfHousingIndicator($_GetHousingIndicatorsResult)));
	}
	/**
	 * Set GetHousingIndicatorsResult
	 * @param ArrayOfHousingIndicator GetHousingIndicatorsResult
	 * @return ArrayOfHousingIndicator
	 */
	public function setGetHousingIndicatorsResult($_GetHousingIndicatorsResult)
	{
		return ($this->GetHousingIndicatorsResult = $_GetHousingIndicatorsResult);
	}
	/**
	 * Get GetHousingIndicatorsResult
	 * @return XiHousingTypeArrayOfHousingIndicator
	 */
	public function getGetHousingIndicatorsResult()
	{
		return $this->GetHousingIndicatorsResult;
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