<?php
/**
 * Class file for LifePicsTypeGetAlbumsImageMaxSize
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeGetAlbumsImageMaxSize
 * @date 02/08/2012
 */
class LifePicsTypeGetAlbumsImageMaxSize extends LifePicsWsdlClass
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
	 * @param string ImageMaxSize
	 * @return LifePicsTypeGetAlbumsImageMaxSize
	 */
	public function __construct($_SessionID = null,$_UserID = null,$_ImageMaxSize = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'UserID'=>$_UserID,'ImageMaxSize'=>$_ImageMaxSize));
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