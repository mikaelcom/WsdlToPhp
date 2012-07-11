<?php
/**
 * Class file for XiSecurityTypeGetLargestDeclinesResponse
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeGetLargestDeclinesResponse
 * @date 08/07/2012
 */
class XiSecurityTypeGetLargestDeclinesResponse extends XiSecurityWsdlClass
{
	/**
	 * The GetLargestDeclinesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiSecurityTypeStockGrowthVariations
	 */
	public $GetLargestDeclinesResult;
	/**
	 * Constructor
	 * @param XiSecurityTypeStockGrowthVariations GetLargestDeclinesResult
	 * @return XiSecurityTypeGetLargestDeclinesResponse
	 */
	public function __construct($_GetLargestDeclinesResult = null)
	{
		parent::__construct(array('GetLargestDeclinesResult'=>$_GetLargestDeclinesResult));
	}
	/**
	 * Set GetLargestDeclinesResult
	 * @param StockGrowthVariations GetLargestDeclinesResult
	 * @return StockGrowthVariations
	 */
	public function setGetLargestDeclinesResult($_GetLargestDeclinesResult)
	{
		return ($this->GetLargestDeclinesResult = $_GetLargestDeclinesResult);
	}
	/**
	 * Get GetLargestDeclinesResult
	 * @return XiSecurityTypeStockGrowthVariations
	 */
	public function getGetLargestDeclinesResult()
	{
		return $this->GetLargestDeclinesResult;
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