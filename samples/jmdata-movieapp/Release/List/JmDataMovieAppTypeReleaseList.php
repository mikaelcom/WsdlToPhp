<?php
/**
 * Class file for JmDataMovieAppTypeReleaseList
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeReleaseList
 * @date 10/07/2012
 */
class JmDataMovieAppTypeReleaseList extends JmDataMovieAppWsdlClass
{
	/**
	 * The ReleaseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleaseDate;
	/**
	 * The Movies
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var JmDataMovieAppTypeArrayOfMovieList
	 */
	public $Movies;
	/**
	 * Constructor
	 * @param string ReleaseDate
	 * @param JmDataMovieAppTypeArrayOfMovieList Movies
	 * @return JmDataMovieAppTypeReleaseList
	 */
	public function __construct($_ReleaseDate = null,$_Movies = null)
	{
		parent::__construct(array('ReleaseDate'=>$_ReleaseDate,'Movies'=>new JmDataMovieAppTypeArrayOfMovieList($_Movies)));
	}
	/**
	 * Set ReleaseDate
	 * @param string ReleaseDate
	 * @return string
	 */
	public function setReleaseDate($_ReleaseDate)
	{
		return ($this->ReleaseDate = $_ReleaseDate);
	}
	/**
	 * Get ReleaseDate
	 * @return string
	 */
	public function getReleaseDate()
	{
		return $this->ReleaseDate;
	}
	/**
	 * Set Movies
	 * @param ArrayOfMovieList Movies
	 * @return ArrayOfMovieList
	 */
	public function setMovies($_Movies)
	{
		return ($this->Movies = $_Movies);
	}
	/**
	 * Get Movies
	 * @return JmDataMovieAppTypeArrayOfMovieList
	 */
	public function getMovies()
	{
		return $this->Movies;
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