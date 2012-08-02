<?php
/**
 * Class file for DirectSmileTypeGetAvailableSetList
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeGetAvailableSetList
 * @date 02/08/2012
 */
class DirectSmileTypeGetAvailableSetList extends DirectSmileWsdlClass
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
	 * Constructor
	 * @param string SessionID
	 * @return DirectSmileTypeGetAvailableSetList
	 */
	public function __construct($_SessionID = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>