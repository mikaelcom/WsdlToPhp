<?php
/**
 * Class file for JmDataMovieAppTypeGetFavoriteMoviesResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetFavoriteMoviesResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetFavoriteMoviesResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetFavoriteMoviesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfMovieList
	 */
	public $GetFavoriteMoviesResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfMovieList GetFavoriteMoviesResult
	 * @return JmDataMovieAppTypeGetFavoriteMoviesResponse
	 */
	public function __construct($_GetFavoriteMoviesResult = null)
	{
		parent::__construct(array('GetFavoriteMoviesResult'=>new JmDataMovieAppTypeArrayOfMovieList($_GetFavoriteMoviesResult)));
	}
	/**
	 * Set GetFavoriteMoviesResult
	 * @param ArrayOfMovieList GetFavoriteMoviesResult
	 * @return ArrayOfMovieList
	 */
	public function setGetFavoriteMoviesResult($_GetFavoriteMoviesResult)
	{
		return ($this->GetFavoriteMoviesResult = $_GetFavoriteMoviesResult);
	}
	/**
	 * Get GetFavoriteMoviesResult
	 * @return JmDataMovieAppTypeArrayOfMovieList
	 */
	public function getGetFavoriteMoviesResult()
	{
		return $this->GetFavoriteMoviesResult;
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