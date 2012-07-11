<?php
/**
 * Class file for XiSecurityTypeArrayOfDividendHistory
 * @date 08/07/2012
 */
/**
 * Class XiSecurityTypeArrayOfDividendHistory
 * @date 08/07/2012
 */
class XiSecurityTypeArrayOfDividendHistory extends XiSecurityWsdlClass
{
	/**
	 * The DividendHistory
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiSecurityTypeDividendHistory
	 */
	public $DividendHistory;
	/**
	 * Constructor
	 * @param XiSecurityTypeDividendHistory DividendHistory
	 * @return XiSecurityTypeArrayOfDividendHistory
	 */
	public function __construct($_DividendHistory = null)
	{
		parent::__construct(array('DividendHistory'=>$_DividendHistory));
	}
	/**
	 * Set DividendHistory
	 * @param DividendHistory DividendHistory
	 * @return DividendHistory
	 */
	public function setDividendHistory($_DividendHistory)
	{
		return ($this->DividendHistory = $_DividendHistory);
	}
	/**
	 * Get DividendHistory
	 * @return XiSecurityTypeDividendHistory
	 */
	public function getDividendHistory()
	{
		return $this->DividendHistory;
	}
	/**
	 * Returns the current element
	 * @see XiSecurityWsdlClass::current()
	 * @return XiSecurityTypeDividendHistory
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiSecurityWsdlClass::item()
	 * @param int
	 * @return XiSecurityTypeDividendHistory
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::first()
	 * @return XiSecurityTypeDividendHistory
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::last()
	 * @return XiSecurityTypeDividendHistory
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiSecurityWsdlClass::offsetGet()
	 * @param int
	 * @return XiSecurityTypeDividendHistory
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'DividendHistory'
	 */
	public function getAttributeName()
	{
		return 'DividendHistory';
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