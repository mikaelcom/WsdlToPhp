<?php
/**
 * Class file for XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuoteExtended
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuoteExtended
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuoteExtended extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The GlobalHistoricalQuoteExtended
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended
	 */
	public $GlobalHistoricalQuoteExtended;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended GlobalHistoricalQuoteExtended
	 * @return XiGlobalHistoricalTypeArrayOfGlobalHistoricalQuoteExtended
	 */
	public function __construct($_GlobalHistoricalQuoteExtended = null)
	{
		parent::__construct(array('GlobalHistoricalQuoteExtended'=>$_GlobalHistoricalQuoteExtended));
	}
	/**
	 * Set GlobalHistoricalQuoteExtended
	 * @param GlobalHistoricalQuoteExtended GlobalHistoricalQuoteExtended
	 * @return GlobalHistoricalQuoteExtended
	 */
	public function setGlobalHistoricalQuoteExtended($_GlobalHistoricalQuoteExtended)
	{
		return ($this->GlobalHistoricalQuoteExtended = $_GlobalHistoricalQuoteExtended);
	}
	/**
	 * Get GlobalHistoricalQuoteExtended
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended
	 */
	public function getGlobalHistoricalQuoteExtended()
	{
		return $this->GlobalHistoricalQuoteExtended;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalHistoricalWsdlClass::current()
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalHistoricalWsdlClass::item()
	 * @param int
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::first()
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::last()
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalHistoricalTypeGlobalHistoricalQuoteExtended
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'GlobalHistoricalQuoteExtended'
	 */
	public function getAttributeName()
	{
		return 'GlobalHistoricalQuoteExtended';
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