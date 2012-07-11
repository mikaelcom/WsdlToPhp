<?php
/**
 * Class file for JmDataMovieAppTypeGetNewMovieListingResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetNewMovieListingResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetNewMovieListingResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The GetNewMovieListingResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfReleaseList
	 */
	public $GetNewMovieListingResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfReleaseList GetNewMovieListingResult
	 * @return JmDataMovieAppTypeGetNewMovieListingResponse
	 */
	public function __construct($_GetNewMovieListingResult = null)
	{
		parent::__construct(array('GetNewMovieListingResult'=>new JmDataMovieAppTypeArrayOfReleaseList($_GetNewMovieListingResult)));
	}
	/**
	 * Set GetNewMovieListingResult
	 * @param ArrayOfReleaseList GetNewMovieListingResult
	 * @return ArrayOfReleaseList
	 */
	public function setGetNewMovieListingResult($_GetNewMovieListingResult)
	{
		return ($this->GetNewMovieListingResult = $_GetNewMovieListingResult);
	}
	/**
	 * Get GetNewMovieListingResult
	 * @return JmDataMovieAppTypeArrayOfReleaseList
	 */
	public function getGetNewMovieListingResult()
	{
		return $this->GetNewMovieListingResult;
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