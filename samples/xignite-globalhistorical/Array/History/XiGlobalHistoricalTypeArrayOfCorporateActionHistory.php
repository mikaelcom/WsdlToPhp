<?php
/**
 * Class file for XiGlobalHistoricalTypeArrayOfCorporateActionHistory
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeArrayOfCorporateActionHistory
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeArrayOfCorporateActionHistory extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The CorporateActionHistory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalHistoricalTypeCorporateActionHistory
	 */
	public $CorporateActionHistory;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeCorporateActionHistory CorporateActionHistory
	 * @return XiGlobalHistoricalTypeArrayOfCorporateActionHistory
	 */
	public function __construct($_CorporateActionHistory = null)
	{
		parent::__construct(array('CorporateActionHistory'=>$_CorporateActionHistory));
	}
	/**
	 * Set CorporateActionHistory
	 * @param CorporateActionHistory CorporateActionHistory
	 * @return CorporateActionHistory
	 */
	public function setCorporateActionHistory($_CorporateActionHistory)
	{
		return ($this->CorporateActionHistory = $_CorporateActionHistory);
	}
	/**
	 * Get CorporateActionHistory
	 * @return XiGlobalHistoricalTypeCorporateActionHistory
	 */
	public function getCorporateActionHistory()
	{
		return $this->CorporateActionHistory;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalHistoricalWsdlClass::current()
	 * @return XiGlobalHistoricalTypeCorporateActionHistory
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalHistoricalWsdlClass::item()
	 * @param int
	 * @return XiGlobalHistoricalTypeCorporateActionHistory
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::first()
	 * @return XiGlobalHistoricalTypeCorporateActionHistory
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::last()
	 * @return XiGlobalHistoricalTypeCorporateActionHistory
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalHistoricalTypeCorporateActionHistory
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CorporateActionHistory'
	 */
	public function getAttributeName()
	{
		return 'CorporateActionHistory';
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