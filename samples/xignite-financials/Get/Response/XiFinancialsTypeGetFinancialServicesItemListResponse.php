<?php
/**
 * Class file for XiFinancialsTypeGetFinancialServicesItemListResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetFinancialServicesItemListResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetFinancialServicesItemListResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetFinancialServicesItemListResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeFinancialServicesItemList
	 */
	public $GetFinancialServicesItemListResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeFinancialServicesItemList GetFinancialServicesItemListResult
	 * @return XiFinancialsTypeGetFinancialServicesItemListResponse
	 */
	public function __construct($_GetFinancialServicesItemListResult = null)
	{
		parent::__construct(array('GetFinancialServicesItemListResult'=>$_GetFinancialServicesItemListResult));
	}
	/**
	 * Set GetFinancialServicesItemListResult
	 * @param FinancialServicesItemList GetFinancialServicesItemListResult
	 * @return FinancialServicesItemList
	 */
	public function setGetFinancialServicesItemListResult($_GetFinancialServicesItemListResult)
	{
		return ($this->GetFinancialServicesItemListResult = $_GetFinancialServicesItemListResult);
	}
	/**
	 * Get GetFinancialServicesItemListResult
	 * @return XiFinancialsTypeFinancialServicesItemList
	 */
	public function getGetFinancialServicesItemListResult()
	{
		return $this->GetFinancialServicesItemListResult;
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