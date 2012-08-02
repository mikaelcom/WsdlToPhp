<?php
/**
 * Class file for DirectSmileTypeRestartJob
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeRestartJob
 * @date 02/08/2012
 */
class DirectSmileTypeRestartJob extends DirectSmileWsdlClass
{
	/**
	 * The Sid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Sid;
	/**
	 * The GUID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $GUID;
	/**
	 * Constructor
	 * @param string Sid
	 * @param string GUID
	 * @return DirectSmileTypeRestartJob
	 */
	public function __construct($_Sid = null,$_GUID = null)
	{
		parent::__construct(array('Sid'=>$_Sid,'GUID'=>$_GUID));
	}
	/**
	 * Set Sid
	 * @param string Sid
	 * @return string
	 */
	public function setSid($_Sid)
	{
		return ($this->Sid = $_Sid);
	}
	/**
	 * Get Sid
	 * @return string
	 */
	public function getSid()
	{
		return $this->Sid;
	}
	/**
	 * Set GUID
	 * @param string GUID
	 * @return string
	 */
	public function setGUID($_GUID)
	{
		return ($this->GUID = $_GUID);
	}
	/**
	 * Get GUID
	 * @return string
	 */
	public function getGUID()
	{
		return $this->GUID;
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