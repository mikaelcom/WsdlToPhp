<?php
/**
 * Class file for JmDataMovieAppTypeGetFrontpageMoviesResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetFrontpageMoviesResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetFrontpageMoviesResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetFrontpageMoviesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfCover
	 */
	public $GetFrontpageMoviesResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfCover GetFrontpageMoviesResult
	 * @return JmDataMovieAppTypeGetFrontpageMoviesResponse
	 */
	public function __construct($_GetFrontpageMoviesResult = null)
	{
		parent::__construct(array('GetFrontpageMoviesResult'=>new JmDataMovieAppTypeArrayOfCover($_GetFrontpageMoviesResult)));
	}
	/**
	 * Set GetFrontpageMoviesResult
	 * @param ArrayOfCover GetFrontpageMoviesResult
	 * @return ArrayOfCover
	 */
	public function setGetFrontpageMoviesResult($_GetFrontpageMoviesResult)
	{
		return ($this->GetFrontpageMoviesResult = $_GetFrontpageMoviesResult);
	}
	/**
	 * Get GetFrontpageMoviesResult
	 * @return JmDataMovieAppTypeArrayOfCover
	 */
	public function getGetFrontpageMoviesResult()
	{
		return $this->GetFrontpageMoviesResult;
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