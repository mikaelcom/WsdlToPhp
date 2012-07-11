<?php
/**
 * Class file for JmDataMovieAppTypeArrayOfCover
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeArrayOfCover
 * @date 10/07/2012
 */
class JmDataMovieAppTypeArrayOfCover extends JmDataMovieAppWsdlClass
{
	/**
	 * The Cover
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var JmDataMovieAppTypeCover
	 */
	public $Cover;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeCover Cover
	 * @return JmDataMovieAppTypeArrayOfCover
	 */
	public function __construct($_Cover = null)
	{
		parent::__construct(array('Cover'=>$_Cover));
	}
	/**
	 * Set Cover
	 * @param Cover Cover
	 * @return Cover
	 */
	public function setCover($_Cover)
	{
		return ($this->Cover = $_Cover);
	}
	/**
	 * Get Cover
	 * @return JmDataMovieAppTypeCover
	 */
	public function getCover()
	{
		return $this->Cover;
	}
	/**
	 * Returns the current element
	 * @see JmDataMovieAppWsdlClass::current()
	 * @return JmDataMovieAppTypeCover
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see JmDataMovieAppWsdlClass::item()
	 * @param int
	 * @return JmDataMovieAppTypeCover
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::first()
	 * @return JmDataMovieAppTypeCover
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::last()
	 * @return JmDataMovieAppTypeCover
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::offsetGet()
	 * @param int
	 * @return JmDataMovieAppTypeCover
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Cover'
	 */
	public function getAttributeName()
	{
		return 'Cover';
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