<?php
/**
 * Class file for XWebACHDirectoryTypeGetParticipantsByStateRequest
 * @date 09/07/2012
 */
/**
 * Class XWebACHDirectoryTypeGetParticipantsByStateRequest
 * @date 09/07/2012
 */
class XWebACHDirectoryTypeGetParticipantsByStateRequest extends XWebACHDirectoryWsdlClass
{
	/**
	 * The State
	 * @var State
	 */
	public $State;
	/**
	 * Constructor
	 * @param State State
	 * @return XWebACHDirectoryTypeGetParticipantsByStateRequest
	 */
	public function __construct($_State = null)
	{
		parent::__construct(array('State'=>$_State));
	}
	/**
	 * Set State
	 * @param State State
	 * @return State
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return State
	 */
	public function getState()
	{
		return $this->State;
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