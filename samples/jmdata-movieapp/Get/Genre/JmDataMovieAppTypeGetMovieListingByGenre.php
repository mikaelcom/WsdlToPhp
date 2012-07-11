<?php
/**
 * Class file for JmDataMovieAppTypeGetMovieListingByGenre
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeGetMovieListingByGenre
 * @date 10/07/2012
 */
class JmDataMovieAppTypeGetMovieListingByGenre extends JmDataMovieAppWsdlClass
{
	/**
	 * The APIKEY
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $APIKEY;
	/**
	 * The movieType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $movieType;
	/**
	 * The category
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $category;
	/**
	 * The topmovies
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $topmovies;
	/**
	 * Constructor
	 * @param string APIKEY
	 * @param int movieType
	 * @param int category
	 * @param int topmovies
	 * @return JmDataMovieAppTypeGetMovieListingByGenre
	 */
	public function __construct($_APIKEY = null,$_movieType,$_category,$_topmovies)
	{
		parent::__construct(array('APIKEY'=>$_APIKEY,'movieType'=>$_movieType,'category'=>$_category,'topmovies'=>$_topmovies));
	}
	/**
	 * Set APIKEY
	 * @param string APIKEY
	 * @return string
	 */
	public function setAPIKEY($_APIKEY)
	{
		return ($this->APIKEY = $_APIKEY);
	}
	/**
	 * Get APIKEY
	 * @return string
	 */
	public function getAPIKEY()
	{
		return $this->APIKEY;
	}
	/**
	 * Set movieType
	 * @param int movieType
	 * @return int
	 */
	public function setMovieType($_movieType)
	{
		return ($this->movieType = $_movieType);
	}
	/**
	 * Get movieType
	 * @return int
	 */
	public function getMovieType()
	{
		return $this->movieType;
	}
	/**
	 * Set category
	 * @param int category
	 * @return int
	 */
	public function setCategory($_category)
	{
		return ($this->category = $_category);
	}
	/**
	 * Get category
	 * @return int
	 */
	public function getCategory()
	{
		return $this->category;
	}
	/**
	 * Set topmovies
	 * @param int topmovies
	 * @return int
	 */
	public function setTopmovies($_topmovies)
	{
		return ($this->topmovies = $_topmovies);
	}
	/**
	 * Get topmovies
	 * @return int
	 */
	public function getTopmovies()
	{
		return $this->topmovies;
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