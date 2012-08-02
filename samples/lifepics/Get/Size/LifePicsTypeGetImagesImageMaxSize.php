<?php
/**
 * Class file for LifePicsTypeGetImagesImageMaxSize
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetImagesImageMaxSize
 * @date 02/08/2012
 */
class LifePicsTypeGetImagesImageMaxSize extends LifePicsWsdlClass
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
	 * The ImageMaxSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ImageMaxSize;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string UserID
	 * @param string AlbumID
	 * @param string ImageMaxSize
	 * @return LifePicsTypeGetImagesImageMaxSize
	 */
	public function __construct($_SessionID = null,$_UserID = null,$_AlbumID = null,$_ImageMaxSize = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'UserID'=>$_UserID,'AlbumID'=>$_AlbumID,'ImageMaxSize'=>$_ImageMaxSize));
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
	 * Set ImageMaxSize
	 * @param string ImageMaxSize
	 * @return string
	 */
	public function setImageMaxSize($_ImageMaxSize)
	{
		return ($this->ImageMaxSize = $_ImageMaxSize);
	}
	/**
	 * Get ImageMaxSize
	 * @return string
	 */
	public function getImageMaxSize()
	{
		return $this->ImageMaxSize;
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