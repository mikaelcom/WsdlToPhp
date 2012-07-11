<?php
/**
 * Class file for XiInsiderTypeOwnershipNature
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeOwnershipNature
 * @date 08/07/2012
 */
class XiInsiderTypeOwnershipNature extends XiInsiderWsdlClass
{
	/**
	 * The directOrIndirectOwnership
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $directOrIndirectOwnership;
	/**
	 * The natureOfOwnership
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $natureOfOwnership;
	/**
	 * Constructor
	 * @param XiInsiderTypeValue directOrIndirectOwnership
	 * @param XiInsiderTypeValue natureOfOwnership
	 * @return XiInsiderTypeOwnershipNature
	 */
	public function __construct($_directOrIndirectOwnership = null,$_natureOfOwnership = null)
	{
		parent::__construct(array('directOrIndirectOwnership'=>$_directOrIndirectOwnership,'natureOfOwnership'=>$_natureOfOwnership));
	}
	/**
	 * Set directOrIndirectOwnership
	 * @param value directOrIndirectOwnership
	 * @return value
	 */
	public function setDirectOrIndirectOwnership($_directOrIndirectOwnership)
	{
		return ($this->directOrIndirectOwnership = $_directOrIndirectOwnership);
	}
	/**
	 * Get directOrIndirectOwnership
	 * @return XiInsiderTypevalue
	 */
	public function getDirectOrIndirectOwnership()
	{
		return $this->directOrIndirectOwnership;
	}
	/**
	 * Set natureOfOwnership
	 * @param value natureOfOwnership
	 * @return value
	 */
	public function setNatureOfOwnership($_natureOfOwnership)
	{
		return ($this->natureOfOwnership = $_natureOfOwnership);
	}
	/**
	 * Get natureOfOwnership
	 * @return XiInsiderTypevalue
	 */
	public function getNatureOfOwnership()
	{
		return $this->natureOfOwnership;
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