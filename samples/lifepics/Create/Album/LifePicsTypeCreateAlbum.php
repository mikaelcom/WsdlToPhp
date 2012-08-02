<?php
/**
 * Class file for LifePicsTypeCreateAlbum
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeCreateAlbum
 * @date 02/08/2012
 */
class LifePicsTypeCreateAlbum extends LifePicsWsdlClass
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
	 * The AlbumName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $AlbumName;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string UserID
	 * @param string AlbumName
	 * @return LifePicsTypeCreateAlbum
	 */
	public function __construct($_SessionID = null,$_UserID = null,$_AlbumName = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'UserID'=>$_UserID,'AlbumName'=>$_AlbumName));
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
	 * Set AlbumName
	 * @param string AlbumName
	 * @return string
	 */
	public function setAlbumName($_AlbumName)
	{
		return ($this->AlbumName = $_AlbumName);
	}
	/**
	 * Get AlbumName
	 * @return string
	 */
	public function getAlbumName()
	{
		return $this->AlbumName;
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