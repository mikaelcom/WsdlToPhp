<?php
/**
 * Class file for JmDataMovieAppTypeArrayOfMovieList
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeArrayOfMovieList
 * @date 10/07/2012
 */
class JmDataMovieAppTypeArrayOfMovieList extends JmDataMovieAppWsdlClass
{
	/**
	 * The MovieList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var JmDataMovieAppTypeMovieList
	 */
	public $MovieList;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeMovieList MovieList
	 * @return JmDataMovieAppTypeArrayOfMovieList
	 */
	public function __construct($_MovieList = null)
	{
		parent::__construct(array('MovieList'=>$_MovieList));
	}
	/**
	 * Set MovieList
	 * @param MovieList MovieList
	 * @return MovieList
	 */
	public function setMovieList($_MovieList)
	{
		return ($this->MovieList = $_MovieList);
	}
	/**
	 * Get MovieList
	 * @return JmDataMovieAppTypeMovieList
	 */
	public function getMovieList()
	{
		return $this->MovieList;
	}
	/**
	 * Returns the current element
	 * @see JmDataMovieAppWsdlClass::current()
	 * @return JmDataMovieAppTypeMovieList
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see JmDataMovieAppWsdlClass::item()
	 * @param int
	 * @return JmDataMovieAppTypeMovieList
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::first()
	 * @return JmDataMovieAppTypeMovieList
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::last()
	 * @return JmDataMovieAppTypeMovieList
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::offsetGet()
	 * @param int
	 * @return JmDataMovieAppTypeMovieList
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'MovieList'
	 */
	public function getAttributeName()
	{
		return 'MovieList';
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