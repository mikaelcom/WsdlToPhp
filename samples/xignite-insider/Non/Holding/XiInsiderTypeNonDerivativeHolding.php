<?php
/**
 * Class file for XiInsiderTypeNonDerivativeHolding
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeNonDerivativeHolding
 * @date 08/07/2012
 */
class XiInsiderTypeNonDerivativeHolding extends XiInsiderWsdlClass
{
	/**
	 * The securityTitle
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $securityTitle;
	/**
	 * The postTransactionAmounts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypePostTransactionAmounts
	 */
	public $postTransactionAmounts;
	/**
	 * The ownershipNature
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeOwnershipNature
	 */
	public $ownershipNature;
	/**
	 * Constructor
	 * @param XiInsiderTypeValue securityTitle
	 * @param XiInsiderTypePostTransactionAmounts postTransactionAmounts
	 * @param XiInsiderTypeOwnershipNature ownershipNature
	 * @return XiInsiderTypeNonDerivativeHolding
	 */
	public function __construct($_securityTitle = null,$_postTransactionAmounts = null,$_ownershipNature = null)
	{
		parent::__construct(array('securityTitle'=>$_securityTitle,'postTransactionAmounts'=>$_postTransactionAmounts,'ownershipNature'=>$_ownershipNature));
	}
	/**
	 * Set securityTitle
	 * @param value securityTitle
	 * @return value
	 */
	public function setSecurityTitle($_securityTitle)
	{
		return ($this->securityTitle = $_securityTitle);
	}
	/**
	 * Get securityTitle
	 * @return XiInsiderTypevalue
	 */
	public function getSecurityTitle()
	{
		return $this->securityTitle;
	}
	/**
	 * Set postTransactionAmounts
	 * @param postTransactionAmounts postTransactionAmounts
	 * @return postTransactionAmounts
	 */
	public function setPostTransactionAmounts($_postTransactionAmounts)
	{
		return ($this->postTransactionAmounts = $_postTransactionAmounts);
	}
	/**
	 * Get postTransactionAmounts
	 * @return XiInsiderTypepostTransactionAmounts
	 */
	public function getPostTransactionAmounts()
	{
		return $this->postTransactionAmounts;
	}
	/**
	 * Set ownershipNature
	 * @param ownershipNature ownershipNature
	 * @return ownershipNature
	 */
	public function setOwnershipNature($_ownershipNature)
	{
		return ($this->ownershipNature = $_ownershipNature);
	}
	/**
	 * Get ownershipNature
	 * @return XiInsiderTypeownershipNature
	 */
	public function getOwnershipNature()
	{
		return $this->ownershipNature;
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