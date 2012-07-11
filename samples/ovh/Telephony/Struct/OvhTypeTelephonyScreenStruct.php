<?php
/**
 * Class file for OvhTypeTelephonyScreenStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyScreenStruct
 * @date 02/07/2012
 */
class OvhTypeTelephonyScreenStruct extends OvhWsdlClass
{
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The numberScreen
	 * @var string
	 */
	public $numberScreen;
	/**
	 * The natureScreen
	 * @var string
	 */
	public $natureScreen;
	/**
	 * Constructor
	 * @param string status
	 * @param string numberScreen
	 * @param string natureScreen
	 * @return OvhTypeTelephonyScreenStruct
	 */
	public function __construct($_status = null,$_numberScreen = null,$_natureScreen = null)
	{
		parent::__construct(array('status'=>$_status,'numberScreen'=>$_numberScreen,'natureScreen'=>$_natureScreen));
	}
	/**
	 * Set status
	 * @param string status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get status
	 * @return string
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set numberScreen
	 * @param string numberScreen
	 * @return string
	 */
	public function setNumberScreen($_numberScreen)
	{
		return ($this->numberScreen = $_numberScreen);
	}
	/**
	 * Get numberScreen
	 * @return string
	 */
	public function getNumberScreen()
	{
		return $this->numberScreen;
	}
	/**
	 * Set natureScreen
	 * @param string natureScreen
	 * @return string
	 */
	public function setNatureScreen($_natureScreen)
	{
		return ($this->natureScreen = $_natureScreen);
	}
	/**
	 * Get natureScreen
	 * @return string
	 */
	public function getNatureScreen()
	{
		return $this->natureScreen;
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