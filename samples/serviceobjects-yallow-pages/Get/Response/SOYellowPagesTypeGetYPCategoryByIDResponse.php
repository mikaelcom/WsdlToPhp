<?php
/**
 * Class file for SOYellowPagesTypeGetYPCategoryByIDResponse
 * @date 08/07/2012
 */
/**
 * Class SOYellowPagesTypeGetYPCategoryByIDResponse
 * @date 08/07/2012
 */
class SOYellowPagesTypeGetYPCategoryByIDResponse extends SOYellowPagesWsdlClass
{
	/**
	 * The GetYPCategoryByIDResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOYellowPagesTypeCategory
	 */
	public $GetYPCategoryByIDResult;
	/**
	 * Constructor
	 * @param SOYellowPagesTypeCategory GetYPCategoryByIDResult
	 * @return SOYellowPagesTypeGetYPCategoryByIDResponse
	 */
	public function __construct($_GetYPCategoryByIDResult = null)
	{
		parent::__construct(array('GetYPCategoryByIDResult'=>$_GetYPCategoryByIDResult));
	}
	/**
	 * Set GetYPCategoryByIDResult
	 * @param Category GetYPCategoryByIDResult
	 * @return Category
	 */
	public function setGetYPCategoryByIDResult($_GetYPCategoryByIDResult)
	{
		return ($this->GetYPCategoryByIDResult = $_GetYPCategoryByIDResult);
	}
	/**
	 * Get GetYPCategoryByIDResult
	 * @return SOYellowPagesTypeCategory
	 */
	public function getGetYPCategoryByIDResult()
	{
		return $this->GetYPCategoryByIDResult;
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