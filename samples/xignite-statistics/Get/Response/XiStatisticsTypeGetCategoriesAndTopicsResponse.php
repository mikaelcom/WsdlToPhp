<?php
/**
 * Class file for XiStatisticsTypeGetCategoriesAndTopicsResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetCategoriesAndTopicsResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetCategoriesAndTopicsResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetCategoriesAndTopicsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeArrayOfCategory
	 */
	public $GetCategoriesAndTopicsResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeArrayOfCategory GetCategoriesAndTopicsResult
	 * @return XiStatisticsTypeGetCategoriesAndTopicsResponse
	 */
	public function __construct($_GetCategoriesAndTopicsResult = null)
	{
		parent::__construct(array('GetCategoriesAndTopicsResult'=>new XiStatisticsTypeArrayOfCategory($_GetCategoriesAndTopicsResult)));
	}
	/**
	 * Set GetCategoriesAndTopicsResult
	 * @param ArrayOfCategory GetCategoriesAndTopicsResult
	 * @return ArrayOfCategory
	 */
	public function setGetCategoriesAndTopicsResult($_GetCategoriesAndTopicsResult)
	{
		return ($this->GetCategoriesAndTopicsResult = $_GetCategoriesAndTopicsResult);
	}
	/**
	 * Get GetCategoriesAndTopicsResult
	 * @return XiStatisticsTypeArrayOfCategory
	 */
	public function getGetCategoriesAndTopicsResult()
	{
		return $this->GetCategoriesAndTopicsResult;
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