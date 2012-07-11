<?php
/**
 * Class file for XiSecurityTypeGetLargestCapDeclinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetLargestCapDeclinesResponse
 * @date 08/07/2012
 */
class XiSecurityTypeGetLargestCapDeclinesResponse extends XiSecurityWsdlClass
{
	/**
	 * The GetLargestCapDeclinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeStockGrowthVariations
	 */
	public $GetLargestCapDeclinesResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeStockGrowthVariations GetLargestCapDeclinesResult
	 * @return XiSecurityTypeGetLargestCapDeclinesResponse
	 */
	public function __construct($_GetLargestCapDeclinesResult = null)
	{
		parent::__construct(array('GetLargestCapDeclinesResult'=>$_GetLargestCapDeclinesResult));
	}
	/**
	 * Set GetLargestCapDeclinesResult
	 * @param StockGrowthVariations GetLargestCapDeclinesResult
	 * @return StockGrowthVariations
	 */
	public function setGetLargestCapDeclinesResult($_GetLargestCapDeclinesResult)
	{
		return ($this->GetLargestCapDeclinesResult = $_GetLargestCapDeclinesResult);
	}
	/**
	 * Get GetLargestCapDeclinesResult
	 * @return XiSecurityTypeStockGrowthVariations
	 */
	public function getGetLargestCapDeclinesResult()
	{
		return $this->GetLargestCapDeclinesResult;
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