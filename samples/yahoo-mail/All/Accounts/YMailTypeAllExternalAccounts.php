<?php
/**
 * Class file for YMailTypeAllExternalAccounts
 * @date 02/07/2012
 */
/**
 * Class YMailTypeAllExternalAccounts
 * @date 02/07/2012
 */
class YMailTypeAllExternalAccounts extends YMailWsdlClass
{
	/**
	 * The extAccount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeExternalAccountAlias
	 */
	public $extAccount;
	/**
	 * The extAccountsTotal
	 * Meta informations :
	 * 	- use : optional
	 * @var int
	 */
	public $extAccountsTotal;
	/**
	 * Constructor
	 * @param YMailTypeExternalAccountAlias extAccount
	 * @param int extAccountsTotal
	 * @return YMailTypeAllExternalAccounts
	 */
	public function __construct($_extAccount = null,$_extAccountsTotal = null)
	{
		parent::__construct(array('extAccount'=>$_extAccount,'extAccountsTotal'=>$_extAccountsTotal));
	}
	/**
	 * Set extAccount
	 * @param ExternalAccountAlias extAccount
	 * @return ExternalAccountAlias
	 */
	public function setExtAccount($_extAccount)
	{
		return ($this->extAccount = $_extAccount);
	}
	/**
	 * Get extAccount
	 * @return YMailTypeExternalAccountAlias
	 */
	public function getExtAccount()
	{
		return $this->extAccount;
	}
	/**
	 * Set extAccountsTotal
	 * @param int extAccountsTotal
	 * @return int
	 */
	public function setExtAccountsTotal($_extAccountsTotal)
	{
		return ($this->extAccountsTotal = $_extAccountsTotal);
	}
	/**
	 * Get extAccountsTotal
	 * @return int
	 */
	public function getExtAccountsTotal()
	{
		return $this->extAccountsTotal;
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