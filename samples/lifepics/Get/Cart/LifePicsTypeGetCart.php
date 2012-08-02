<?php
/**
 * Class file for LifePicsTypeGetCart
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetCart
 * @date 02/08/2012
 */
class LifePicsTypeGetCart extends LifePicsWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
	/**
	 * The MerchantID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MerchantID;
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $UserID;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string MerchantID
	 * @param string UserID
	 * @return LifePicsTypeGetCart
	 */
	public function __construct($_SessionID = null,$_MerchantID = null,$_UserID = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'MerchantID'=>$_MerchantID,'UserID'=>$_UserID));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
	}
	/**
	 * Set MerchantID
	 * @param string MerchantID
	 * @return string
	 */
	public function setMerchantID($_MerchantID)
	{
		return ($this->MerchantID = $_MerchantID);
	}
	/**
	 * Get MerchantID
	 * @return string
	 */
	public function getMerchantID()
	{
		return $this->MerchantID;
	}
	/**
	 * Set UserID
	 * @param string UserID
	 * @return string
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = $_UserID);
	}
	/**
	 * Get UserID
	 * @return string
	 */
	public function getUserID()
	{
		return $this->UserID;
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