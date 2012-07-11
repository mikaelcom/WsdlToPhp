<?php
/**
 * Class file for CdyneDemographicsQTypeGetIncomeHouseValueByAddressResponse
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeGetIncomeHouseValueByAddressResponse
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeGetIncomeHouseValueByAddressResponse extends CdyneDemographicsQWsdlClass
{
	/**
	 * The GetIncomeHouseValueByAddressResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var CdyneDemographicsQTypeIncomeAndHouseValue
	 */
	public $GetIncomeHouseValueByAddressResult;
	/**
	 * Constructor
	 * @param CdyneDemographicsQTypeIncomeAndHouseValue GetIncomeHouseValueByAddressResult
	 * @return CdyneDemographicsQTypeGetIncomeHouseValueByAddressResponse
	 */
	public function __construct($_GetIncomeHouseValueByAddressResult = null)
	{
		parent::__construct(array('GetIncomeHouseValueByAddressResult'=>$_GetIncomeHouseValueByAddressResult));
	}
	/**
	 * Set GetIncomeHouseValueByAddressResult
	 * @param IncomeAndHouseValue GetIncomeHouseValueByAddressResult
	 * @return IncomeAndHouseValue
	 */
	public function setGetIncomeHouseValueByAddressResult($_GetIncomeHouseValueByAddressResult)
	{
		return ($this->GetIncomeHouseValueByAddressResult = $_GetIncomeHouseValueByAddressResult);
	}
	/**
	 * Get GetIncomeHouseValueByAddressResult
	 * @return CdyneDemographicsQTypeIncomeAndHouseValue
	 */
	public function getGetIncomeHouseValueByAddressResult()
	{
		return $this->GetIncomeHouseValueByAddressResult;
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