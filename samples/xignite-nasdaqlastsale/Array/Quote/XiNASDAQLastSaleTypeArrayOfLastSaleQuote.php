<?php
/**
 * Class file for XiNASDAQLastSaleTypeArrayOfLastSaleQuote
 * @date 08/07/2012
 */
/**
 * Class XiNASDAQLastSaleTypeArrayOfLastSaleQuote
 * @date 08/07/2012
 */
class XiNASDAQLastSaleTypeArrayOfLastSaleQuote extends XiNASDAQLastSaleWsdlClass
{
	/**
	 * The LastSaleQuote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public $LastSaleQuote;
	/**
	 * Constructor
	 * @param XiNASDAQLastSaleTypeLastSaleQuote LastSaleQuote
	 * @return XiNASDAQLastSaleTypeArrayOfLastSaleQuote
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
	 * @return XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public function getLastSaleQuote()
	{
		return $this->LastSaleQuote;
	}
	/**
	 * Returns the current element
	 * @see XiNASDAQLastSaleWsdlClass::current()
	 * @return XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiNASDAQLastSaleWsdlClass::item()
	 * @param int
	 * @return XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiNASDAQLastSaleWsdlClass::first()
	 * @return XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiNASDAQLastSaleWsdlClass::last()
	 * @return XiNASDAQLastSaleTypeLastSaleQuote
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiNASDAQLastSaleWsdlClass::offsetGet()
	 * @param int
	 * @return XiNASDAQLastSaleTypeLastSaleQuote
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