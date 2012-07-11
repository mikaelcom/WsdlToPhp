<?php
/**
 * Class file for SOYellowPagesTypeGetAllYPCategoriesResponse
 * @date 08/07/2012
 */
/**
 * Class SOYellowPagesTypeGetAllYPCategoriesResponse
 * @date 08/07/2012
 */
class SOYellowPagesTypeGetAllYPCategoriesResponse extends SOYellowPagesWsdlClass
{
	/**
	 * The GetAllYPCategoriesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOYellowPagesTypeCategories
	 */
	public $GetAllYPCategoriesResult;
	/**
	 * Constructor
	 * @param SOYellowPagesTypeCategories GetAllYPCategoriesResult
	 * @return SOYellowPagesTypeGetAllYPCategoriesResponse
	 */
	public function __construct($_GetAllYPCategoriesResult = null)
	{
		parent::__construct(array('GetAllYPCategoriesResult'=>$_GetAllYPCategoriesResult));
	}
	/**
	 * Set GetAllYPCategoriesResult
	 * @param Categories GetAllYPCategoriesResult
	 * @return Categories
	 */
	public function setGetAllYPCategoriesResult($_GetAllYPCategoriesResult)
	{
		return ($this->GetAllYPCategoriesResult = $_GetAllYPCategoriesResult);
	}
	/**
	 * Get GetAllYPCategoriesResult
	 * @return SOYellowPagesTypeCategories
	 */
	public function getGetAllYPCategoriesResult()
	{
		return $this->GetAllYPCategoriesResult;
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