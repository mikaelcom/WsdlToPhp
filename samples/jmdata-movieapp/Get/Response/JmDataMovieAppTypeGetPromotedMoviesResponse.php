<?php
/**
 * Class file for JmDataMovieAppTypeGetPromotedMoviesResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetPromotedMoviesResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetPromotedMoviesResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetPromotedMoviesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfMovieList
	 */
	public $GetPromotedMoviesResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfMovieList GetPromotedMoviesResult
	 * @return JmDataMovieAppTypeGetPromotedMoviesResponse
	 */
	public function __construct($_GetPromotedMoviesResult = null)
	{
		parent::__construct(array('GetPromotedMoviesResult'=>new JmDataMovieAppTypeArrayOfMovieList($_GetPromotedMoviesResult)));
	}
	/**
	 * Set GetPromotedMoviesResult
	 * @param ArrayOfMovieList GetPromotedMoviesResult
	 * @return ArrayOfMovieList
	 */
	public function setGetPromotedMoviesResult($_GetPromotedMoviesResult)
	{
		return ($this->GetPromotedMoviesResult = $_GetPromotedMoviesResult);
	}
	/**
	 * Get GetPromotedMoviesResult
	 * @return JmDataMovieAppTypeArrayOfMovieList
	 */
	public function getGetPromotedMoviesResult()
	{
		return $this->GetPromotedMoviesResult;
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