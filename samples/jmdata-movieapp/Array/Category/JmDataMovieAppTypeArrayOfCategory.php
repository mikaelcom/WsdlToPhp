<?php
/**
 * Class file for JmDataMovieAppTypeArrayOfCategory
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeArrayOfCategory
 * @date 10/07/2012
 */
class JmDataMovieAppTypeArrayOfCategory extends JmDataMovieAppWsdlClass
{
	/**
	 * The Category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var JmDataMovieAppTypeCategory
	 */
	public $Category;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeCategory Category
	 * @return JmDataMovieAppTypeArrayOfCategory
	 */
	public function __construct($_Category = null)
	{
		parent::__construct(array('Category'=>$_Category));
	}
	/**
	 * Set Category
	 * @param Category Category
	 * @return Category
	 */
	public function setCategory($_Category)
	{
		return ($this->Category = $_Category);
	}
	/**
	 * Get Category
	 * @return JmDataMovieAppTypeCategory
	 */
	public function getCategory()
	{
		return $this->Category;
	}
	/**
	 * Returns the current element
	 * @see JmDataMovieAppWsdlClass::current()
	 * @return JmDataMovieAppTypeCategory
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see JmDataMovieAppWsdlClass::item()
	 * @param int
	 * @return JmDataMovieAppTypeCategory
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::first()
	 * @return JmDataMovieAppTypeCategory
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::last()
	 * @return JmDataMovieAppTypeCategory
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::offsetGet()
	 * @param int
	 * @return JmDataMovieAppTypeCategory
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Category'
	 */
	public function getAttributeName()
	{
		return 'Category';
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