<?php
/**
 * Class file for XiGlobalrealtimeTypeArrayOfGlobalQuote
 * @date 08/07/2012
 */
/**
 * Class XiGlobalrealtimeTypeArrayOfGlobalQuote
 * @date 08/07/2012
 */
class XiGlobalrealtimeTypeArrayOfGlobalQuote extends XiGlobalrealtimeWsdlClass
{
	/**
	 * The GlobalQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalrealtimeTypeGlobalQuote
	 */
	public $GlobalQuote;
	/**
	 * Constructor
	 * @param XiGlobalrealtimeTypeGlobalQuote GlobalQuote
	 * @return XiGlobalrealtimeTypeArrayOfGlobalQuote
	 */
	public function __construct($_GlobalQuote = null)
	{
		parent::__construct(array('GlobalQuote'=>$_GlobalQuote));
	}
	/**
	 * Set GlobalQuote
	 * @param GlobalQuote GlobalQuote
	 * @return GlobalQuote
	 */
	public function setGlobalQuote($_GlobalQuote)
	{
		return ($this->GlobalQuote = $_GlobalQuote);
	}
	/**
	 * Get GlobalQuote
	 * @return XiGlobalrealtimeTypeGlobalQuote
	 */
	public function getGlobalQuote()
	{
		return $this->GlobalQuote;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalrealtimeWsdlClass::current()
	 * @return XiGlobalrealtimeTypeGlobalQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalrealtimeWsdlClass::item()
	 * @param int
	 * @return XiGlobalrealtimeTypeGlobalQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeWsdlClass::first()
	 * @return XiGlobalrealtimeTypeGlobalQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeWsdlClass::last()
	 * @return XiGlobalrealtimeTypeGlobalQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalrealtimeWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalrealtimeTypeGlobalQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'GlobalQuote'
	 */
	public function getAttributeName()
	{
		return 'GlobalQuote';
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