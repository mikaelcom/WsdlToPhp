<?php
/**
 * Class file for OvhTypeAutomatedMailGetStateReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAutomatedMailGetStateReturn
 * @date 02/07/2012
 */
class OvhTypeAutomatedMailGetStateReturn extends OvhWsdlClass
{
	/**
	 * The bounce
	 * @var int
	 */
	public $bounce;
	/**
	 * The sent
	 * @var int
	 */
	public $sent;
	/**
	 * The return
	 * @var string
	 */
	public $return;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor
	 * @param int bounce
	 * @param int sent
	 * @param string return
	 * @param string state
	 * @return OvhTypeAutomatedMailGetStateReturn
	 */
	public function __construct($_bounce = null,$_sent = null,$_return = null,$_state = null)
	{
		parent::__construct(array('bounce'=>$_bounce,'sent'=>$_sent,'return'=>$_return,'state'=>$_state));
	}
	/**
	 * Set bounce
	 * @param int bounce
	 * @return int
	 */
	public function setBounce($_bounce)
	{
		return ($this->bounce = $_bounce);
	}
	/**
	 * Get bounce
	 * @return int
	 */
	public function getBounce()
	{
		return $this->bounce;
	}
	/**
	 * Set sent
	 * @param int sent
	 * @return int
	 */
	public function setSent($_sent)
	{
		return ($this->sent = $_sent);
	}
	/**
	 * Get sent
	 * @return int
	 */
	public function getSent()
	{
		return $this->sent;
	}
	/**
	 * Set return
	 * @param string return
	 * @return string
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return string
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set state
	 * @param string state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Get state
	 * @return string
	 */
	public function getState()
	{
		return $this->state;
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