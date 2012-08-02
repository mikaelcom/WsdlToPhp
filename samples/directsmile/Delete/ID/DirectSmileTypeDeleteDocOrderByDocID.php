<?php
/**
 * Class file for DirectSmileTypeDeleteDocOrderByDocID
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeDeleteDocOrderByDocID
 * @date 02/08/2012
 */
class DirectSmileTypeDeleteDocOrderByDocID extends DirectSmileWsdlClass
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
	 * The Key
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Key;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string Key
	 * @return DirectSmileTypeDeleteDocOrderByDocID
	 */
	public function __construct($_SessionID = null,$_Key = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'Key'=>$_Key));
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
	 * Set Key
	 * @param string Key
	 * @return string
	 */
	public function setKey($_Key)
	{
		return ($this->Key = $_Key);
	}
	/**
	 * Get Key
	 * @return string
	 */
	public function getKey()
	{
		return $this->Key;
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