<?php
/**
 * Class file for OvhTypeTelephonyScreenBlackWhiteChoiceReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeTelephonyScreenBlackWhiteChoiceReturn
 * @date 02/07/2012
 */
class OvhTypeTelephonyScreenBlackWhiteChoiceReturn extends OvhWsdlClass
{
	/**
	 * The incomingScreenlist
	 * @var string
	 */
	public $incomingScreenlist;
	/**
	 * The outgoingScreenlist
	 * @var string
	 */
	public $outgoingScreenlist;
	/**
	 * The outgoingCodeUnlock
	 * @var string
	 */
	public $outgoingCodeUnlock;
	/**
	 * Constructor
	 * @param string incomingScreenlist
	 * @param string outgoingScreenlist
	 * @param string outgoingCodeUnlock
	 * @return OvhTypeTelephonyScreenBlackWhiteChoiceReturn
	 */
	public function __construct($_incomingScreenlist = null,$_outgoingScreenlist = null,$_outgoingCodeUnlock = null)
	{
		parent::__construct(array('incomingScreenlist'=>$_incomingScreenlist,'outgoingScreenlist'=>$_outgoingScreenlist,'outgoingCodeUnlock'=>$_outgoingCodeUnlock));
	}
	/**
	 * Set incomingScreenlist
	 * @param string incomingScreenlist
	 * @return string
	 */
	public function setIncomingScreenlist($_incomingScreenlist)
	{
		return ($this->incomingScreenlist = $_incomingScreenlist);
	}
	/**
	 * Get incomingScreenlist
	 * @return string
	 */
	public function getIncomingScreenlist()
	{
		return $this->incomingScreenlist;
	}
	/**
	 * Set outgoingScreenlist
	 * @param string outgoingScreenlist
	 * @return string
	 */
	public function setOutgoingScreenlist($_outgoingScreenlist)
	{
		return ($this->outgoingScreenlist = $_outgoingScreenlist);
	}
	/**
	 * Get outgoingScreenlist
	 * @return string
	 */
	public function getOutgoingScreenlist()
	{
		return $this->outgoingScreenlist;
	}
	/**
	 * Set outgoingCodeUnlock
	 * @param string outgoingCodeUnlock
	 * @return string
	 */
	public function setOutgoingCodeUnlock($_outgoingCodeUnlock)
	{
		return ($this->outgoingCodeUnlock = $_outgoingCodeUnlock);
	}
	/**
	 * Get outgoingCodeUnlock
	 * @return string
	 */
	public function getOutgoingCodeUnlock()
	{
		return $this->outgoingCodeUnlock;
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