<?php
/**
 * Class file for XiVWAPTypeArrayOfHistoricalVWAP
 * @date 08/07/2012
 */
/**
 * Class XiVWAPTypeArrayOfHistoricalVWAP
 * @date 08/07/2012
 */
class XiVWAPTypeArrayOfHistoricalVWAP extends XiVWAPWsdlClass
{
	/**
	 * The HistoricalVWAP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiVWAPTypeHistoricalVWAP
	 */
	public $HistoricalVWAP;
	/**
	 * Constructor
	 * @param XiVWAPTypeHistoricalVWAP HistoricalVWAP
	 * @return XiVWAPTypeArrayOfHistoricalVWAP
	 */
	public function __construct($_HistoricalVWAP = null)
	{
		parent::__construct(array('HistoricalVWAP'=>$_HistoricalVWAP));
	}
	/**
	 * Set HistoricalVWAP
	 * @param HistoricalVWAP HistoricalVWAP
	 * @return HistoricalVWAP
	 */
	public function setHistoricalVWAP($_HistoricalVWAP)
	{
		return ($this->HistoricalVWAP = $_HistoricalVWAP);
	}
	/**
	 * Get HistoricalVWAP
	 * @return XiVWAPTypeHistoricalVWAP
	 */
	public function getHistoricalVWAP()
	{
		return $this->HistoricalVWAP;
	}
	/**
	 * Returns the current element
	 * @see XiVWAPWsdlClass::current()
	 * @return XiVWAPTypeHistoricalVWAP
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiVWAPWsdlClass::item()
	 * @param int
	 * @return XiVWAPTypeHistoricalVWAP
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiVWAPWsdlClass::first()
	 * @return XiVWAPTypeHistoricalVWAP
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiVWAPWsdlClass::last()
	 * @return XiVWAPTypeHistoricalVWAP
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiVWAPWsdlClass::offsetGet()
	 * @param int
	 * @return XiVWAPTypeHistoricalVWAP
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'HistoricalVWAP'
	 */
	public function getAttributeName()
	{
		return 'HistoricalVWAP';
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