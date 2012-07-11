<?php
/**
 * Class file for JmDataMovieAppTypeSearchMovieResponse
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeSearchMovieResponse
 * @date 10/07/2012
 */
class JmDataMovieAppTypeSearchMovieResponse extends JmDataMovieAppWsdlClass
{
	/**
	 * The SearchMovieResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfMovieList
	 */
	public $SearchMovieResult;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeArrayOfMovieList SearchMovieResult
	 * @return JmDataMovieAppTypeSearchMovieResponse
	 */
	public function __construct($_SearchMovieResult = null)
	{
		parent::__construct(array('SearchMovieResult'=>new JmDataMovieAppTypeArrayOfMovieList($_SearchMovieResult)));
	}
	/**
	 * Set SearchMovieResult
	 * @param ArrayOfMovieList SearchMovieResult
	 * @return ArrayOfMovieList
	 */
	public function setSearchMovieResult($_SearchMovieResult)
	{
		return ($this->SearchMovieResult = $_SearchMovieResult);
	}
	/**
	 * Get SearchMovieResult
	 * @return JmDataMovieAppTypeArrayOfMovieList
	 */
	public function getSearchMovieResult()
	{
		return $this->SearchMovieResult;
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