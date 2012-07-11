<?php
/**
 * Class file for XiHousingTypeArrayOfHousingStatisticsRecord
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeArrayOfHousingStatisticsRecord
 * @date 08/07/2012
 */
class XiHousingTypeArrayOfHousingStatisticsRecord extends XiHousingWsdlClass
{
	/**
	 * The HousingStatisticsRecord
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHousingTypeHousingStatisticsRecord
	 */
	public $HousingStatisticsRecord;
	/**
	 * Constructor
	 * @param XiHousingTypeHousingStatisticsRecord HousingStatisticsRecord
	 * @return XiHousingTypeArrayOfHousingStatisticsRecord
	 */
	public function __construct($_HousingStatisticsRecord = null)
	{
		parent::__construct(array('HousingStatisticsRecord'=>$_HousingStatisticsRecord));
	}
	/**
	 * Set HousingStatisticsRecord
	 * @param HousingStatisticsRecord HousingStatisticsRecord
	 * @return HousingStatisticsRecord
	 */
	public function setHousingStatisticsRecord($_HousingStatisticsRecord)
	{
		return ($this->HousingStatisticsRecord = $_HousingStatisticsRecord);
	}
	/**
	 * Get HousingStatisticsRecord
	 * @return XiHousingTypeHousingStatisticsRecord
	 */
	public function getHousingStatisticsRecord()
	{
		return $this->HousingStatisticsRecord;
	}
	/**
	 * Returns the current element
	 * @see XiHousingWsdlClass::current()
	 * @return XiHousingTypeHousingStatisticsRecord
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHousingWsdlClass::item()
	 * @param int
	 * @return XiHousingTypeHousingStatisticsRecord
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::first()
	 * @return XiHousingTypeHousingStatisticsRecord
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::last()
	 * @return XiHousingTypeHousingStatisticsRecord
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHousingWsdlClass::offsetGet()
	 * @param int
	 * @return XiHousingTypeHousingStatisticsRecord
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'HousingStatisticsRecord'
	 */
	public function getAttributeName()
	{
		return 'HousingStatisticsRecord';
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