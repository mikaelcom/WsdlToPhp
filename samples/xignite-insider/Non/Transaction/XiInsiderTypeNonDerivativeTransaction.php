<?php
/**
 * Class file for XiInsiderTypeNonDerivativeTransaction
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeNonDerivativeTransaction
 * @date 08/07/2012
 */
class XiInsiderTypeNonDerivativeTransaction extends XiInsiderWsdlClass
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
	 * The transactionDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $transactionDate;
	/**
	 * The deemedExecutionDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $deemedExecutionDate;
	/**
	 * The transactionCoding
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeTransactionCoding
	 */
	public $transactionCoding;
	/**
	 * The transactionTimeliness
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeValue
	 */
	public $transactionTimeliness;
	/**
	 * The transactionAmounts
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeTransactionAmounts
	 */
	public $transactionAmounts;
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
	 * @param XiInsiderTypeValue transactionDate
	 * @param XiInsiderTypeValue deemedExecutionDate
	 * @param XiInsiderTypeTransactionCoding transactionCoding
	 * @param XiInsiderTypeValue transactionTimeliness
	 * @param XiInsiderTypeTransactionAmounts transactionAmounts
	 * @param XiInsiderTypePostTransactionAmounts postTransactionAmounts
	 * @param XiInsiderTypeOwnershipNature ownershipNature
	 * @return XiInsiderTypeNonDerivativeTransaction
	 */
	public function __construct($_securityTitle = null,$_transactionDate = null,$_deemedExecutionDate = null,$_transactionCoding = null,$_transactionTimeliness = null,$_transactionAmounts = null,$_postTransactionAmounts = null,$_ownershipNature = null)
	{
		parent::__construct(array('securityTitle'=>$_securityTitle,'transactionDate'=>$_transactionDate,'deemedExecutionDate'=>$_deemedExecutionDate,'transactionCoding'=>$_transactionCoding,'transactionTimeliness'=>$_transactionTimeliness,'transactionAmounts'=>$_transactionAmounts,'postTransactionAmounts'=>$_postTransactionAmounts,'ownershipNature'=>$_ownershipNature));
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
	 * Set transactionDate
	 * @param value transactionDate
	 * @return value
	 */
	public function setTransactionDate($_transactionDate)
	{
		return ($this->transactionDate = $_transactionDate);
	}
	/**
	 * Get transactionDate
	 * @return XiInsiderTypevalue
	 */
	public function getTransactionDate()
	{
		return $this->transactionDate;
	}
	/**
	 * Set deemedExecutionDate
	 * @param value deemedExecutionDate
	 * @return value
	 */
	public function setDeemedExecutionDate($_deemedExecutionDate)
	{
		return ($this->deemedExecutionDate = $_deemedExecutionDate);
	}
	/**
	 * Get deemedExecutionDate
	 * @return XiInsiderTypevalue
	 */
	public function getDeemedExecutionDate()
	{
		return $this->deemedExecutionDate;
	}
	/**
	 * Set transactionCoding
	 * @param transactionCoding transactionCoding
	 * @return transactionCoding
	 */
	public function setTransactionCoding($_transactionCoding)
	{
		return ($this->transactionCoding = $_transactionCoding);
	}
	/**
	 * Get transactionCoding
	 * @return XiInsiderTypetransactionCoding
	 */
	public function getTransactionCoding()
	{
		return $this->transactionCoding;
	}
	/**
	 * Set transactionTimeliness
	 * @param value transactionTimeliness
	 * @return value
	 */
	public function setTransactionTimeliness($_transactionTimeliness)
	{
		return ($this->transactionTimeliness = $_transactionTimeliness);
	}
	/**
	 * Get transactionTimeliness
	 * @return XiInsiderTypevalue
	 */
	public function getTransactionTimeliness()
	{
		return $this->transactionTimeliness;
	}
	/**
	 * Set transactionAmounts
	 * @param transactionAmounts transactionAmounts
	 * @return transactionAmounts
	 */
	public function setTransactionAmounts($_transactionAmounts)
	{
		return ($this->transactionAmounts = $_transactionAmounts);
	}
	/**
	 * Get transactionAmounts
	 * @return XiInsiderTypetransactionAmounts
	 */
	public function getTransactionAmounts()
	{
		return $this->transactionAmounts;
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