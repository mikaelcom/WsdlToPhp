<?php
/**
 * Class file for XiFinancialsTypeGetFinancialServicesItemsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetFinancialServicesItemsResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetFinancialServicesItemsResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetFinancialServicesItemsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfFinancialServicesItem
	 */
	public $GetFinancialServicesItemsResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeArrayOfFinancialServicesItem GetFinancialServicesItemsResult
	 * @return XiFinancialsTypeGetFinancialServicesItemsResponse
	 */
	public function __construct($_GetFinancialServicesItemsResult = null)
	{
		parent::__construct(array('GetFinancialServicesItemsResult'=>new XiFinancialsTypeArrayOfFinancialServicesItem($_GetFinancialServicesItemsResult)));
	}
	/**
	 * Set GetFinancialServicesItemsResult
	 * @param ArrayOfFinancialServicesItem GetFinancialServicesItemsResult
	 * @return ArrayOfFinancialServicesItem
	 */
	public function setGetFinancialServicesItemsResult($_GetFinancialServicesItemsResult)
	{
		return ($this->GetFinancialServicesItemsResult = $_GetFinancialServicesItemsResult);
	}
	/**
	 * Get GetFinancialServicesItemsResult
	 * @return XiFinancialsTypeArrayOfFinancialServicesItem
	 */
	public function getGetFinancialServicesItemsResult()
	{
		return $this->GetFinancialServicesItemsResult;
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