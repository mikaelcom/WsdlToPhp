<?php
/**
 * Class file for JmDataMovieAppTypeArrayOfStore
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeArrayOfStore
 * @date 10/07/2012
 */
class JmDataMovieAppTypeArrayOfStore extends JmDataMovieAppWsdlClass
{
	/**
	 * The Store
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var JmDataMovieAppTypeStore
	 */
	public $Store;
	/**
	 * Constructor
	 * @param JmDataMovieAppTypeStore Store
	 * @return JmDataMovieAppTypeArrayOfStore
	 */
	public function __construct($_Store = null)
	{
		parent::__construct(array('Store'=>$_Store));
	}
	/**
	 * Set Store
	 * @param Store Store
	 * @return Store
	 */
	public function setStore($_Store)
	{
		return ($this->Store = $_Store);
	}
	/**
	 * Get Store
	 * @return JmDataMovieAppTypeStore
	 */
	public function getStore()
	{
		return $this->Store;
	}
	/**
	 * Returns the current element
	 * @see JmDataMovieAppWsdlClass::current()
	 * @return JmDataMovieAppTypeStore
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see JmDataMovieAppWsdlClass::item()
	 * @param int
	 * @return JmDataMovieAppTypeStore
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::first()
	 * @return JmDataMovieAppTypeStore
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::last()
	 * @return JmDataMovieAppTypeStore
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see JmDataMovieAppWsdlClass::offsetGet()
	 * @param int
	 * @return JmDataMovieAppTypeStore
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Store'
	 */
	public function getAttributeName()
	{
		return 'Store';
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