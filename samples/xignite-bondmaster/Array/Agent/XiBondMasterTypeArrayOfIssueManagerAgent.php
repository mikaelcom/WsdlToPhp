<?php
/**
 * Class file for XiBondMasterTypeArrayOfIssueManagerAgent
 * @date 08/07/2012
 */
/**
 * Class XiBondMasterTypeArrayOfIssueManagerAgent
 * @date 08/07/2012
 */
class XiBondMasterTypeArrayOfIssueManagerAgent extends XiBondMasterWsdlClass
{
	/**
	 * The IssueManagerAgent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiBondMasterTypeIssueManagerAgent
	 */
	public $IssueManagerAgent;
	/**
	 * Constructor
	 * @param XiBondMasterTypeIssueManagerAgent IssueManagerAgent
	 * @return XiBondMasterTypeArrayOfIssueManagerAgent
	 */
	public function __construct($_IssueManagerAgent = null)
	{
		parent::__construct(array('IssueManagerAgent'=>$_IssueManagerAgent));
	}
	/**
	 * Set IssueManagerAgent
	 * @param IssueManagerAgent IssueManagerAgent
	 * @return IssueManagerAgent
	 */
	public function setIssueManagerAgent($_IssueManagerAgent)
	{
		return ($this->IssueManagerAgent = $_IssueManagerAgent);
	}
	/**
	 * Get IssueManagerAgent
	 * @return XiBondMasterTypeIssueManagerAgent
	 */
	public function getIssueManagerAgent()
	{
		return $this->IssueManagerAgent;
	}
	/**
	 * Returns the current element
	 * @see XiBondMasterWsdlClass::current()
	 * @return XiBondMasterTypeIssueManagerAgent
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiBondMasterWsdlClass::item()
	 * @param int
	 * @return XiBondMasterTypeIssueManagerAgent
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::first()
	 * @return XiBondMasterTypeIssueManagerAgent
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::last()
	 * @return XiBondMasterTypeIssueManagerAgent
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiBondMasterWsdlClass::offsetGet()
	 * @param int
	 * @return XiBondMasterTypeIssueManagerAgent
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'IssueManagerAgent'
	 */
	public function getAttributeName()
	{
		return 'IssueManagerAgent';
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