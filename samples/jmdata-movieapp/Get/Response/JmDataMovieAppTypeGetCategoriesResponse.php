<?php
/**
 * Class file for JmDataMovieAppTypeGetCategoriesResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetCategoriesResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetCategoriesResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetCategoriesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfCategory
	 */
	public $GetCategoriesResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfCategory GetCategoriesResult
	 * @return JmDataMovieAppTypeGetCategoriesResponse
	 */
	public function __construct($_GetCategoriesResult = null)
	{
		parent::__construct(array('GetCategoriesResult'=>new JmDataMovieAppTypeArrayOfCategory($_GetCategoriesResult)));
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
	 * @return JmDataMovieAppTypeArrayOfCategory
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