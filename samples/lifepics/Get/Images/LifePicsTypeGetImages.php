<?php
/**
 * Class file for LifePicsTypeGetImages
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetImages
 * @date 02/08/2012
 */
class LifePicsTypeGetImages extends LifePicsWsdlClass
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
	 * The AlbumID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AlbumID;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string UserID
	 * @param string AlbumID
	 * @return LifePicsTypeGetImages
	 */
	public function __construct($_SessionID = null,$_UserID = null,$_AlbumID = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'UserID'=>$_UserID,'AlbumID'=>$_AlbumID));
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
	 * Set AlbumID
	 * @param string AlbumID
	 * @return string
	 */
	public function setAlbumID($_AlbumID)
	{
		return ($this->AlbumID = $_AlbumID);
	}
	/**
	 * Get AlbumID
	 * @return string
	 */
	public function getAlbumID()
	{
		return $this->AlbumID;
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