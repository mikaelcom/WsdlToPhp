<?php
/**
 * Class file for XiEdgarTypeArrayOfSharesAsOf
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeArrayOfSharesAsOf
 * @date 08/07/2012
 */
class XiEdgarTypeArrayOfSharesAsOf extends XiEdgarWsdlClass
{
	/**
	 * The SharesAsOf
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiEdgarTypeSharesAsOf
	 */
	public $SharesAsOf;
	/**
	 * Constructor
	 * @param XiEdgarTypeSharesAsOf SharesAsOf
	 * @return XiEdgarTypeArrayOfSharesAsOf
	 */
	public function __construct($_SharesAsOf = null)
	{
		parent::__construct(array('SharesAsOf'=>$_SharesAsOf));
	}
	/**
	 * Set SharesAsOf
	 * @param SharesAsOf SharesAsOf
	 * @return SharesAsOf
	 */
	public function setSharesAsOf($_SharesAsOf)
	{
		return ($this->SharesAsOf = $_SharesAsOf);
	}
	/**
	 * Get SharesAsOf
	 * @return XiEdgarTypeSharesAsOf
	 */
	public function getSharesAsOf()
	{
		return $this->SharesAsOf;
	}
	/**
	 * Returns the current element
	 * @see XiEdgarWsdlClass::current()
	 * @return XiEdgarTypeSharesAsOf
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiEdgarWsdlClass::item()
	 * @param int
	 * @return XiEdgarTypeSharesAsOf
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::first()
	 * @return XiEdgarTypeSharesAsOf
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::last()
	 * @return XiEdgarTypeSharesAsOf
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiEdgarWsdlClass::offsetGet()
	 * @param int
	 * @return XiEdgarTypeSharesAsOf
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SharesAsOf'
	 */
	public function getAttributeName()
	{
		return 'SharesAsOf';
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