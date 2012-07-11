<?php
/**
 * Class file for SPPeopleTypeArrayOfPrincipalInfo
 * @date 06/07/2012
 */
/**
 * Class SPPeopleTypeArrayOfPrincipalInfo
 * @date 06/07/2012
 */
class SPPeopleTypeArrayOfPrincipalInfo extends SPPeopleWsdlClass
{
	/**
	 * The PrincipalInfo
	 * @var SPPeopleTypePrincipalInfo
	 */
	public $PrincipalInfo;
	/**
	 * Constructor
	 * @param SPPeopleTypePrincipalInfo PrincipalInfo
	 * @return SPPeopleTypeArrayOfPrincipalInfo
	 */
	public function __construct($_PrincipalInfo = null)
	{
		parent::__construct(array('PrincipalInfo'=>$_PrincipalInfo));
	}
	/**
	 * Set PrincipalInfo
	 * @param PrincipalInfo PrincipalInfo
	 * @return PrincipalInfo
	 */
	public function setPrincipalInfo($_PrincipalInfo)
	{
		return ($this->PrincipalInfo = $_PrincipalInfo);
	}
	/**
	 * Get PrincipalInfo
	 * @return SPPeopleTypePrincipalInfo
	 */
	public function getPrincipalInfo()
	{
		return $this->PrincipalInfo;
	}
	/**
	 * Returns the current element
	 * @see SPPeopleWsdlClass::current()
	 * @return SPPeopleTypePrincipalInfo
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see SPPeopleWsdlClass::item()
	 * @param int
	 * @return SPPeopleTypePrincipalInfo
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see SPPeopleWsdlClass::first()
	 * @return SPPeopleTypePrincipalInfo
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see SPPeopleWsdlClass::last()
	 * @return SPPeopleTypePrincipalInfo
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see SPPeopleWsdlClass::offsetGet()
	 * @param int
	 * @return SPPeopleTypePrincipalInfo
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'PrincipalInfo'
	 */
	public function getAttributeName()
	{
		return 'PrincipalInfo';
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