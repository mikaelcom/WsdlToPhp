<?php
/**
 * Class file for JmDataMovieAppTypeGetMovieListingByGenreResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetMovieListingByGenreResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetMovieListingByGenreResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetMovieListingByGenreResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfMovieList
	 */
	public $GetMovieListingByGenreResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfMovieList GetMovieListingByGenreResult
	 * @return JmDataMovieAppTypeGetMovieListingByGenreResponse
	 */
	public function __construct($_GetMovieListingByGenreResult = null)
	{
		parent::__construct(array('GetMovieListingByGenreResult'=>new JmDataMovieAppTypeArrayOfMovieList($_GetMovieListingByGenreResult)));
	}
	/**
	 * Set GetMovieListingByGenreResult
	 * @param ArrayOfMovieList GetMovieListingByGenreResult
	 * @return ArrayOfMovieList
	 */
	public function setGetMovieListingByGenreResult($_GetMovieListingByGenreResult)
	{
		return ($this->GetMovieListingByGenreResult = $_GetMovieListingByGenreResult);
	}
	/**
	 * Get GetMovieListingByGenreResult
	 * @return JmDataMovieAppTypeArrayOfMovieList
	 */
	public function getGetMovieListingByGenreResult()
	{
		return $this->GetMovieListingByGenreResult;
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