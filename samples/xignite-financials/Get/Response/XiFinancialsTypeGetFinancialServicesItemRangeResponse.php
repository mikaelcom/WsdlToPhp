<?php
/**
 * Class file for XiFinancialsTypeGetFinancialServicesItemRangeResponse
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeGetFinancialServicesItemRangeResponse
 * @date 08/07/2012
 */
class XiFinancialsTypeGetFinancialServicesItemRangeResponse extends XiFinancialsWsdlClass
{
	/**
	 * The GetFinancialServicesItemRangeResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFinancialsTypeArrayOfFinancialServicesItem
	 */
	public $GetFinancialServicesItemRangeResult;
	/**
	 * Constructor
	 * @param XiFinancialsTypeArrayOfFinancialServicesItem GetFinancialServicesItemRangeResult
	 * @return XiFinancialsTypeGetFinancialServicesItemRangeResponse
	 */
	public function __construct($_GetFinancialServicesItemRangeResult = null)
	{
		parent::__construct(array('GetFinancialServicesItemRangeResult'=>new XiFinancialsTypeArrayOfFinancialServicesItem($_GetFinancialServicesItemRangeResult)));
	}
	/**
	 * Set GetFinancialServicesItemRangeResult
	 * @param ArrayOfFinancialServicesItem GetFinancialServicesItemRangeResult
	 * @return ArrayOfFinancialServicesItem
	 */
	public function setGetFinancialServicesItemRangeResult($_GetFinancialServicesItemRangeResult)
	{
		return ($this->GetFinancialServicesItemRangeResult = $_GetFinancialServicesItemRangeResult);
	}
	/**
	 * Get GetFinancialServicesItemRangeResult
	 * @return XiFinancialsTypeArrayOfFinancialServicesItem
	 */
	public function getGetFinancialServicesItemRangeResult()
	{
		return $this->GetFinancialServicesItemRangeResult;
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