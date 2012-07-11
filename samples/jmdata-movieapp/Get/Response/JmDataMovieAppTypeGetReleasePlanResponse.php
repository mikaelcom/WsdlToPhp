<?php
/**
 * Class file for JmDataMovieAppTypeGetReleasePlanResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetReleasePlanResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetReleasePlanResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetReleasePlanResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfReleaseList
	 */
	public $GetReleasePlanResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfReleaseList GetReleasePlanResult
	 * @return JmDataMovieAppTypeGetReleasePlanResponse
	 */
	public function __construct($_GetReleasePlanResult = null)
	{
		parent::__construct(array('GetReleasePlanResult'=>new JmDataMovieAppTypeArrayOfReleaseList($_GetReleasePlanResult)));
	}
	/**
	 * Set GetReleasePlanResult
	 * @param ArrayOfReleaseList GetReleasePlanResult
	 * @return ArrayOfReleaseList
	 */
	public function setGetReleasePlanResult($_GetReleasePlanResult)
	{
		return ($this->GetReleasePlanResult = $_GetReleasePlanResult);
	}
	/**
	 * Get GetReleasePlanResult
	 * @return JmDataMovieAppTypeArrayOfReleaseList
	 */
	public function getGetReleasePlanResult()
	{
		return $this->GetReleasePlanResult;
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