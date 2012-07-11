<?php
/**
 * Class file for JmDataMovieAppTypeGetMovieDetailsFromEANResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetMovieDetailsFromEANResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetMovieDetailsFromEANResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetMovieDetailsFromEANResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeMovieDetail
	 */
	public $GetMovieDetailsFromEANResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeMovieDetail GetMovieDetailsFromEANResult
	 * @return JmDataMovieAppTypeGetMovieDetailsFromEANResponse
	 */
	public function __construct($_GetMovieDetailsFromEANResult)
	{
		parent::__construct(array('GetMovieDetailsFromEANResult'=>$_GetMovieDetailsFromEANResult));
	}
	/**
	 * Set GetMovieDetailsFromEANResult
	 * @param MovieDetail GetMovieDetailsFromEANResult
	 * @return MovieDetail
	 */
	public function setGetMovieDetailsFromEANResult($_GetMovieDetailsFromEANResult)
	{
		return ($this->GetMovieDetailsFromEANResult = $_GetMovieDetailsFromEANResult);
	}
	/**
	 * Get GetMovieDetailsFromEANResult
	 * @return JmDataMovieAppTypeMovieDetail
	 */
	public function getGetMovieDetailsFromEANResult()
	{
		return $this->GetMovieDetailsFromEANResult;
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