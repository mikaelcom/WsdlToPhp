<?php
/**
 * Class file for JmDataMovieAppTypeArrayOfReleaseList
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeArrayOfReleaseList
 * @date 10/07/2012
 */
class JmDataMovieAppTypeArrayOfReleaseList extends JmDataMovieAppWsdlClass
{
	/**
	 * The ReleaseList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var JmDataMovieAppTypeReleaseList
	 */
	public $ReleaseList;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeReleaseList ReleaseList
	 * @return JmDataMovieAppTypeArrayOfReleaseList
	 */
	public function __construct($_ReleaseList = null)
	{
		parent::__construct(array('ReleaseList'=>$_ReleaseList));
	}
	/**
	 * Set ReleaseList
	 * @param ReleaseList ReleaseList
	 * @return ReleaseList
	 */
	public function setReleaseList($_ReleaseList)
	{
		return ($this->ReleaseList = $_ReleaseList);
	}
	/**
	 * Get ReleaseList
	 * @return JmDataMovieAppTypeReleaseList
	 */
	public function getReleaseList()
	{
		return $this->ReleaseList;
	}
	/**
	 * Returns the current element
	 * @see JmDataMovieAppWsdlClass::current()
	 * @return JmDataMovieAppTypeReleaseList
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see JmDataMovieAppWsdlClass::item()
	 * @param int
	 * @return JmDataMovieAppTypeReleaseList
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::first()
	 * @return JmDataMovieAppTypeReleaseList
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::last()
	 * @return JmDataMovieAppTypeReleaseList
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::offsetGet()
	 * @param int
	 * @return JmDataMovieAppTypeReleaseList
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'ReleaseList'
	 */
	public function getAttributeName()
	{
		return 'ReleaseList';
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