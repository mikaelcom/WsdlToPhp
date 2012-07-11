<?php
/**
 * Class file for XiFinancialsTypeGetFinancialServicesItemResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetFinancialServicesItemResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetFinancialServicesItemResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetFinancialServicesItemResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeFinancialServicesItem
	 */
	public $GetFinancialServicesItemResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeFinancialServicesItem GetFinancialServicesItemResult
	 * @return XiFinancialsTypeGetFinancialServicesItemResponse
	 */
	public function __construct($_GetFinancialServicesItemResult = null)
	{
		parent::__construct(array('GetFinancialServicesItemResult'=>$_GetFinancialServicesItemResult));
	}
	/**
	 * Set GetFinancialServicesItemResult
	 * @param FinancialServicesItem GetFinancialServicesItemResult
	 * @return FinancialServicesItem
	 */
	public function setGetFinancialServicesItemResult($_GetFinancialServicesItemResult)
	{
		return ($this->GetFinancialServicesItemResult = $_GetFinancialServicesItemResult);
	}
	/**
	 * Get GetFinancialServicesItemResult
	 * @return XiFinancialsTypeFinancialServicesItem
	 */
	public function getGetFinancialServicesItemResult()
	{
		return $this->GetFinancialServicesItemResult;
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