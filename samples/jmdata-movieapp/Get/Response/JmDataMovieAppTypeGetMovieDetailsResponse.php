<?php
/**
 * Class file for JmDataMovieAppTypeGetMovieDetailsResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetMovieDetailsResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetMovieDetailsResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetMovieDetailsResult
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeMovieDetail
	 */
	public $GetMovieDetailsResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeMovieDetail GetMovieDetailsResult
	 * @return JmDataMovieAppTypeGetMovieDetailsResponse
	 */
	public function __construct($_GetMovieDetailsResult)
	{
		parent::__construct(array('GetMovieDetailsResult'=>$_GetMovieDetailsResult));
	}
	/**
	 * Set GetMovieDetailsResult
	 * @param MovieDetail GetMovieDetailsResult
	 * @return MovieDetail
	 */
	public function setGetMovieDetailsResult($_GetMovieDetailsResult)
	{
		return ($this->GetMovieDetailsResult = $_GetMovieDetailsResult);
	}
	/**
	 * Get GetMovieDetailsResult
	 * @return JmDataMovieAppTypeMovieDetail
	 */
	public function getGetMovieDetailsResult()
	{
		return $this->GetMovieDetailsResult;
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