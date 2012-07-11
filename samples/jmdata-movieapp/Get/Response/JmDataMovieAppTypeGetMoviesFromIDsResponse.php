<?php
/**
 * Class file for JmDataMovieAppTypeGetMoviesFromIDsResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetMoviesFromIDsResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetMoviesFromIDsResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetMoviesFromIDsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfMovieList
	 */
	public $GetMoviesFromIDsResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfMovieList GetMoviesFromIDsResult
	 * @return JmDataMovieAppTypeGetMoviesFromIDsResponse
	 */
	public function __construct($_GetMoviesFromIDsResult = null)
	{
		parent::__construct(array('GetMoviesFromIDsResult'=>new JmDataMovieAppTypeArrayOfMovieList($_GetMoviesFromIDsResult)));
	}
	/**
	 * Set GetMoviesFromIDsResult
	 * @param ArrayOfMovieList GetMoviesFromIDsResult
	 * @return ArrayOfMovieList
	 */
	public function setGetMoviesFromIDsResult($_GetMoviesFromIDsResult)
	{
		return ($this->GetMoviesFromIDsResult = $_GetMoviesFromIDsResult);
	}
	/**
	 * Get GetMoviesFromIDsResult
	 * @return JmDataMovieAppTypeArrayOfMovieList
	 */
	public function getGetMoviesFromIDsResult()
	{
		return $this->GetMoviesFromIDsResult;
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