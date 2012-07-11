<?php
/**
 * Class file for XiGlobalHistoricalTypeArrayOfCorporateAction
 * @date 08/07/2012
 */
/**
 * Class XiGlobalHistoricalTypeArrayOfCorporateAction
 * @date 08/07/2012
 */
class XiGlobalHistoricalTypeArrayOfCorporateAction extends XiGlobalHistoricalWsdlClass
{
	/**
	 * The CorporateAction
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiGlobalHistoricalTypeCorporateAction
	 */
	public $CorporateAction;
	/**
	 * Constructor
	 * @param XiGlobalHistoricalTypeCorporateAction CorporateAction
	 * @return XiGlobalHistoricalTypeArrayOfCorporateAction
	 */
	public function __construct($_CorporateAction = null)
	{
		parent::__construct(array('CorporateAction'=>$_CorporateAction));
	}
	/**
	 * Set CorporateAction
	 * @param CorporateAction CorporateAction
	 * @return CorporateAction
	 */
	public function setCorporateAction($_CorporateAction)
	{
		return ($this->CorporateAction = $_CorporateAction);
	}
	/**
	 * Get CorporateAction
	 * @return XiGlobalHistoricalTypeCorporateAction
	 */
	public function getCorporateAction()
	{
		return $this->CorporateAction;
	}
	/**
	 * Returns the current element
	 * @see XiGlobalHistoricalWsdlClass::current()
	 * @return XiGlobalHistoricalTypeCorporateAction
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiGlobalHistoricalWsdlClass::item()
	 * @param int
	 * @return XiGlobalHistoricalTypeCorporateAction
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::first()
	 * @return XiGlobalHistoricalTypeCorporateAction
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::last()
	 * @return XiGlobalHistoricalTypeCorporateAction
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiGlobalHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiGlobalHistoricalTypeCorporateAction
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'CorporateAction'
	 */
	public function getAttributeName()
	{
		return 'CorporateAction';
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