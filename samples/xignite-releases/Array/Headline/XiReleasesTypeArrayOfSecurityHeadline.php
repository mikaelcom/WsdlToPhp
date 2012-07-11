<?php
/**
 * Class file for XiReleasesTypeArrayOfSecurityHeadline
 * @date 08/07/2012
 */
/**
 * Class XiReleasesTypeArrayOfSecurityHeadline
 * @date 08/07/2012
 */
class XiReleasesTypeArrayOfSecurityHeadline extends XiReleasesWsdlClass
{
	/**
	 * The SecurityHeadline
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var XiReleasesTypeSecurityHeadline
	 */
	public $SecurityHeadline;
	/**
	 * Constructor
	 * @param XiReleasesTypeSecurityHeadline SecurityHeadline
	 * @return XiReleasesTypeArrayOfSecurityHeadline
	 */
	public function __construct($_SecurityHeadline = null)
	{
		parent::__construct(array('SecurityHeadline'=>$_SecurityHeadline));
	}
	/**
	 * Set SecurityHeadline
	 * @param SecurityHeadline SecurityHeadline
	 * @return SecurityHeadline
	 */
	public function setSecurityHeadline($_SecurityHeadline)
	{
		return ($this->SecurityHeadline = $_SecurityHeadline);
	}
	/**
	 * Get SecurityHeadline
	 * @return XiReleasesTypeSecurityHeadline
	 */
	public function getSecurityHeadline()
	{
		return $this->SecurityHeadline;
	}
	/**
	 * Returns the current element
	 * @see XiReleasesWsdlClass::current()
	 * @return XiReleasesTypeSecurityHeadline
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see XiReleasesWsdlClass::item()
	 * @param int
	 * @return XiReleasesTypeSecurityHeadline
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see XiReleasesWsdlClass::first()
	 * @return XiReleasesTypeSecurityHeadline
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see XiReleasesWsdlClass::last()
	 * @return XiReleasesTypeSecurityHeadline
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see XiReleasesWsdlClass::offsetGet()
	 * @param int
	 * @return XiReleasesTypeSecurityHeadline
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'SecurityHeadline'
	 */
	public function getAttributeName()
	{
		return 'SecurityHeadline';
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