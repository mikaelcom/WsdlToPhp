<?php
/**
 * Class file for XiQuotesTypeArrayOfMissingTickRange
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeArrayOfMissingTickRange
 * @date 08/07/2012
 */
class XiQuotesTypeArrayOfMissingTickRange extends XiQuotesWsdlClass
{
	/**
	 * The MissingTickRange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiQuotesTypeMissingTickRange
	 */
	public $MissingTickRange;
	/**
	 * Constructor
	 * @param XiQuotesTypeMissingTickRange MissingTickRange
	 * @return XiQuotesTypeArrayOfMissingTickRange
	 */
	public function __construct($_MissingTickRange = null)
	{
		parent::__construct(array('MissingTickRange'=>$_MissingTickRange));
	}
	/**
	 * Set MissingTickRange
	 * @param MissingTickRange MissingTickRange
	 * @return MissingTickRange
	 */
	public function setMissingTickRange($_MissingTickRange)
	{
		return ($this->MissingTickRange = $_MissingTickRange);
	}
	/**
	 * Get MissingTickRange
	 * @return XiQuotesTypeMissingTickRange
	 */
	public function getMissingTickRange()
	{
		return $this->MissingTickRange;
	}
	/**
	 * Returns the current element
	 * @see XiQuotesWsdlClass::current()
	 * @return XiQuotesTypeMissingTickRange
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiQuotesWsdlClass::item()
	 * @param int
	 * @return XiQuotesTypeMissingTickRange
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::first()
	 * @return XiQuotesTypeMissingTickRange
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::last()
	 * @return XiQuotesTypeMissingTickRange
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiQuotesWsdlClass::offsetGet()
	 * @param int
	 * @return XiQuotesTypeMissingTickRange
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'MissingTickRange'
	 */
	public function getAttributeName()
	{
		return 'MissingTickRange';
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