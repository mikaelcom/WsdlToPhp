<?php
/**
 * Class file for XiStatisticsTypeGetCategoriesResponse
 * @date 08/07/2012
 */
/**
 * Class XiStatisticsTypeGetCategoriesResponse
 * @date 08/07/2012
 */
class XiStatisticsTypeGetCategoriesResponse extends XiStatisticsWsdlClass
{
	/**
	 * The GetCategoriesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiStatisticsTypeArrayOfCategory
	 */
	public $GetCategoriesResult;
	/**
	 * Constructor
	 * @param XiStatisticsTypeArrayOfCategory GetCategoriesResult
	 * @return XiStatisticsTypeGetCategoriesResponse
	 */
	public function __construct($_GetCategoriesResult = null)
	{
		parent::__construct(array('GetCategoriesResult'=>new XiStatisticsTypeArrayOfCategory($_GetCategoriesResult)));
	}
	/**
	 * Set GetCategoriesResult
	 * @param ArrayOfCategory GetCategoriesResult
	 * @return ArrayOfCategory
	 */
	public function setGetCategoriesResult($_GetCategoriesResult)
	{
		return ($this->GetCategoriesResult = $_GetCategoriesResult);
	}
	/**
	 * Get GetCategoriesResult
	 * @return XiStatisticsTypeArrayOfCategory
	 */
	public function getGetCategoriesResult()
	{
		return $this->GetCategoriesResult;
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