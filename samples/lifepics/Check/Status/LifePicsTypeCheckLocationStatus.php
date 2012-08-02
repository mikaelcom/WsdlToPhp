<?php
/**
 * Class file for LifePicsTypeCheckLocationStatus
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeCheckLocationStatus
 * @date 02/08/2012
 */
class LifePicsTypeCheckLocationStatus extends LifePicsWsdlClass
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
	 * The LocationID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LocationID;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string LocationID
	 * @return LifePicsTypeCheckLocationStatus
	 */
	public function __construct($_SessionID = null,$_LocationID = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'LocationID'=>$_LocationID));
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
	 * Set LocationID
	 * @param string LocationID
	 * @return string
	 */
	public function setLocationID($_LocationID)
	{
		return ($this->LocationID = $_LocationID);
	}
	/**
	 * Get LocationID
	 * @return string
	 */
	public function getLocationID()
	{
		return $this->LocationID;
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