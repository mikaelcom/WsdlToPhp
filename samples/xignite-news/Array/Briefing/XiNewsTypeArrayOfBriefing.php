<?php
/**
 * Class file for XiNewsTypeArrayOfBriefing
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeArrayOfBriefing
 * @date 08/07/2012
 */
class XiNewsTypeArrayOfBriefing extends XiNewsWsdlClass
{
	/**
	 * The Briefing
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiNewsTypeBriefing
	 */
	public $Briefing;
	/**
	 * Constructor
	 * @param XiNewsTypeBriefing Briefing
	 * @return XiNewsTypeArrayOfBriefing
	 */
	public function __construct($_Briefing = null)
	{
		parent::__construct(array('Briefing'=>$_Briefing));
	}
	/**
	 * Set Briefing
	 * @param Briefing Briefing
	 * @return Briefing
	 */
	public function setBriefing($_Briefing)
	{
		return ($this->Briefing = $_Briefing);
	}
	/**
	 * Get Briefing
	 * @return XiNewsTypeBriefing
	 */
	public function getBriefing()
	{
		return $this->Briefing;
	}
	/**
	 * Returns the current element
	 * @see XiNewsWsdlClass::current()
	 * @return XiNewsTypeBriefing
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiNewsWsdlClass::item()
	 * @param int
	 * @return XiNewsTypeBriefing
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::first()
	 * @return XiNewsTypeBriefing
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::last()
	 * @return XiNewsTypeBriefing
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiNewsWsdlClass::offsetGet()
	 * @param int
	 * @return XiNewsTypeBriefing
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'Briefing'
	 */
	public function getAttributeName()
	{
		return 'Briefing';
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