<?php
/**
 * Class file for XiNewsTypeArrayOfEarningAnnouncement
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeArrayOfEarningAnnouncement
 * @date 08/07/2012
 */
class XiNewsTypeArrayOfEarningAnnouncement extends XiNewsWsdlClass
{
	/**
	 * The EarningAnnouncement
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiNewsTypeEarningAnnouncement
	 */
	public $EarningAnnouncement;
	/**
	 * Constructor
	 * @param XiNewsTypeEarningAnnouncement EarningAnnouncement
	 * @return XiNewsTypeArrayOfEarningAnnouncement
	 */
	public function __construct($_EarningAnnouncement = null)
	{
		parent::__construct(array('EarningAnnouncement'=>$_EarningAnnouncement));
	}
	/**
	 * Set EarningAnnouncement
	 * @param EarningAnnouncement EarningAnnouncement
	 * @return EarningAnnouncement
	 */
	public function setEarningAnnouncement($_EarningAnnouncement)
	{
		return ($this->EarningAnnouncement = $_EarningAnnouncement);
	}
	/**
	 * Get EarningAnnouncement
	 * @return XiNewsTypeEarningAnnouncement
	 */
	public function getEarningAnnouncement()
	{
		return $this->EarningAnnouncement;
	}
	/**
	 * Returns the current element
	 * @see XiNewsWsdlClass::current()
	 * @return XiNewsTypeEarningAnnouncement
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiNewsWsdlClass::item()
	 * @param int
	 * @return XiNewsTypeEarningAnnouncement
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::first()
	 * @return XiNewsTypeEarningAnnouncement
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::last()
	 * @return XiNewsTypeEarningAnnouncement
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::offsetGet()
	 * @param int
	 * @return XiNewsTypeEarningAnnouncement
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'EarningAnnouncement'
	 */
	public function getAttributeName()
	{
		return 'EarningAnnouncement';
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