<?php
/**
 * Class file for DirectSmileTypeGetAccountInfoDSM
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAccountInfoDSM
 * @date 02/08/2012
 */
class DirectSmileTypeGetAccountInfoDSM extends DirectSmileWsdlClass
{
	/**
	 * The AccountID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var long
	 */
	public $AccountID;
	/**
	 * Constructor
	 * @param long AccountID
	 * @return DirectSmileTypeGetAccountInfoDSM
	 */
	public function __construct($_AccountID)
	{
		parent::__construct(array('AccountID'=>$_AccountID));
	}
	/**
	 * Set AccountID
	 * @param long AccountID
	 * @return long
	 */
	public function setAccountID($_AccountID)
	{
		return ($this->AccountID = $_AccountID);
	}
	/**
	 * Get AccountID
	 * @return long
	 */
	public function getAccountID()
	{
		return $this->AccountID;
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