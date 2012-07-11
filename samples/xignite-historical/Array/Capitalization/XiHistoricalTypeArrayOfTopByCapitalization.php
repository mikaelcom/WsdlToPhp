<?php
/**
 * Class file for XiHistoricalTypeArrayOfTopByCapitalization
 * @date 08/07/2012
 */
/**
 * Class XiHistoricalTypeArrayOfTopByCapitalization
 * @date 08/07/2012
 */
class XiHistoricalTypeArrayOfTopByCapitalization extends XiHistoricalWsdlClass
{
	/**
	 * The TopByCapitalization
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiHistoricalTypeTopByCapitalization
	 */
	public $TopByCapitalization;
	/**
	 * Constructor
	 * @param XiHistoricalTypeTopByCapitalization TopByCapitalization
	 * @return XiHistoricalTypeArrayOfTopByCapitalization
	 */
	public function __construct($_TopByCapitalization = null)
	{
		parent::__construct(array('TopByCapitalization'=>$_TopByCapitalization));
	}
	/**
	 * Set TopByCapitalization
	 * @param TopByCapitalization TopByCapitalization
	 * @return TopByCapitalization
	 */
	public function setTopByCapitalization($_TopByCapitalization)
	{
		return ($this->TopByCapitalization = $_TopByCapitalization);
	}
	/**
	 * Get TopByCapitalization
	 * @return XiHistoricalTypeTopByCapitalization
	 */
	public function getTopByCapitalization()
	{
		return $this->TopByCapitalization;
	}
	/**
	 * Returns the current element
	 * @see XiHistoricalWsdlClass::current()
	 * @return XiHistoricalTypeTopByCapitalization
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiHistoricalWsdlClass::item()
	 * @param int
	 * @return XiHistoricalTypeTopByCapitalization
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::first()
	 * @return XiHistoricalTypeTopByCapitalization
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::last()
	 * @return XiHistoricalTypeTopByCapitalization
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiHistoricalWsdlClass::offsetGet()
	 * @param int
	 * @return XiHistoricalTypeTopByCapitalization
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'TopByCapitalization'
	 */
	public function getAttributeName()
	{
		return 'TopByCapitalization';
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