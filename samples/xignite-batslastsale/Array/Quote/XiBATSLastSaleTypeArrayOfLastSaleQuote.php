<?php
/**
 * Class file for XiBATSLastSaleTypeArrayOfLastSaleQuote
 * @date 08/07/2012
 */
/**
 * Class XiBATSLastSaleTypeArrayOfLastSaleQuote
 * @date 08/07/2012
 */
class XiBATSLastSaleTypeArrayOfLastSaleQuote extends XiBATSLastSaleWsdlClass
{
	/**
	 * The LastSaleQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBATSLastSaleTypeLastSaleQuote
	 */
	public $LastSaleQuote;
	/**
	 * Constructor
	 * @param XiBATSLastSaleTypeLastSaleQuote LastSaleQuote
	 * @return XiBATSLastSaleTypeArrayOfLastSaleQuote
	 */
	public function __construct($_LastSaleQuote = null)
	{
		parent::__construct(array('LastSaleQuote'=>$_LastSaleQuote));
	}
	/**
	 * Set LastSaleQuote
	 * @param LastSaleQuote LastSaleQuote
	 * @return LastSaleQuote
	 */
	public function setLastSaleQuote($_LastSaleQuote)
	{
		return ($this->LastSaleQuote = $_LastSaleQuote);
	}
	/**
	 * Get LastSaleQuote
	 * @return XiBATSLastSaleTypeLastSaleQuote
	 */
	public function getLastSaleQuote()
	{
		return $this->LastSaleQuote;
	}
	/**
	 * Returns the current element
	 * @see XiBATSLastSaleWsdlClass::current()
	 * @return XiBATSLastSaleTypeLastSaleQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBATSLastSaleWsdlClass::item()
	 * @param int
	 * @return XiBATSLastSaleTypeLastSaleQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBATSLastSaleWsdlClass::first()
	 * @return XiBATSLastSaleTypeLastSaleQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBATSLastSaleWsdlClass::last()
	 * @return XiBATSLastSaleTypeLastSaleQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBATSLastSaleWsdlClass::offsetGet()
	 * @param int
	 * @return XiBATSLastSaleTypeLastSaleQuote
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'LastSaleQuote'
	 */
	public function getAttributeName()
	{
		return 'LastSaleQuote';
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