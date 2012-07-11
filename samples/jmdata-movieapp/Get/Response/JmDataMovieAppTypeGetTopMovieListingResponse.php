<?php
/**
 * Class file for JmDataMovieAppTypeGetTopMovieListingResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetTopMovieListingResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetTopMovieListingResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetTopMovieListingResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfMovieList
	 */
	public $GetTopMovieListingResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfMovieList GetTopMovieListingResult
	 * @return JmDataMovieAppTypeGetTopMovieListingResponse
	 */
	public function __construct($_GetTopMovieListingResult = null)
	{
		parent::__construct(array('GetTopMovieListingResult'=>new JmDataMovieAppTypeArrayOfMovieList($_GetTopMovieListingResult)));
	}
	/**
	 * Set GetTopMovieListingResult
	 * @param ArrayOfMovieList GetTopMovieListingResult
	 * @return ArrayOfMovieList
	 */
	public function setGetTopMovieListingResult($_GetTopMovieListingResult)
	{
		return ($this->GetTopMovieListingResult = $_GetTopMovieListingResult);
	}
	/**
	 * Get GetTopMovieListingResult
	 * @return JmDataMovieAppTypeArrayOfMovieList
	 */
	public function getGetTopMovieListingResult()
	{
		return $this->GetTopMovieListingResult;
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