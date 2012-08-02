<?php
/**
 * Class file for LifePicsTypeGetAlbums
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetAlbums
 * @date 02/08/2012
 */
class LifePicsTypeGetAlbums extends LifePicsWsdlClass
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
	 * @param string UserID
	 * @return LifePicsTypeGetAlbums
	 */
	public function __construct($_SessionID = null,$_UserID = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'UserID'=>$_UserID));
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