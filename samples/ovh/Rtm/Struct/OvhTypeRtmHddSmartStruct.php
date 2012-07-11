<?php
/**
 * Class file for OvhTypeRtmHddSmartStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmHddSmartStruct
 * @date 02/07/2012
 */
class OvhTypeRtmHddSmartStruct extends OvhWsdlClass
{
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The multizoneErrorRate
	 * @var int
	 */
	public $multizoneErrorRate;
	/**
	 * The currentPendingSector
	 * @var int
	 */
	public $currentPendingSector;
	/**
	 * The udmaCrcError
	 * @var int
	 */
	public $udmaCrcError;
	/**
	 * The offlineUncorrectable
	 * @var int
	 */
	public $offlineUncorrectable;
	/**
	 * Constructor
	 * @param string status
	 * @param int multizoneErrorRate
	 * @param int currentPendingSector
	 * @param int udmaCrcError
	 * @param int offlineUncorrectable
	 * @return OvhTypeRtmHddSmartStruct
	 */
	public function __construct($_status = null,$_multizoneErrorRate = null,$_currentPendingSector = null,$_udmaCrcError = null,$_offlineUncorrectable = null)
	{
		parent::__construct(array('status'=>$_status,'multizoneErrorRate'=>$_multizoneErrorRate,'currentPendingSector'=>$_currentPendingSector,'udmaCrcError'=>$_udmaCrcError,'offlineUncorrectable'=>$_offlineUncorrectable));
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
	 * Set multizoneErrorRate
	 * @param int multizoneErrorRate
	 * @return int
	 */
	public function setMultizoneErrorRate($_multizoneErrorRate)
	{
		return ($this->multizoneErrorRate = $_multizoneErrorRate);
	}
	/**
	 * Get multizoneErrorRate
	 * @return int
	 */
	public function getMultizoneErrorRate()
	{
		return $this->multizoneErrorRate;
	}
	/**
	 * Set currentPendingSector
	 * @param int currentPendingSector
	 * @return int
	 */
	public function setCurrentPendingSector($_currentPendingSector)
	{
		return ($this->currentPendingSector = $_currentPendingSector);
	}
	/**
	 * Get currentPendingSector
	 * @return int
	 */
	public function getCurrentPendingSector()
	{
		return $this->currentPendingSector;
	}
	/**
	 * Set udmaCrcError
	 * @param int udmaCrcError
	 * @return int
	 */
	public function setUdmaCrcError($_udmaCrcError)
	{
		return ($this->udmaCrcError = $_udmaCrcError);
	}
	/**
	 * Get udmaCrcError
	 * @return int
	 */
	public function getUdmaCrcError()
	{
		return $this->udmaCrcError;
	}
	/**
	 * Set offlineUncorrectable
	 * @param int offlineUncorrectable
	 * @return int
	 */
	public function setOfflineUncorrectable($_offlineUncorrectable)
	{
		return ($this->offlineUncorrectable = $_offlineUncorrectable);
	}
	/**
	 * Get offlineUncorrectable
	 * @return int
	 */
	public function getOfflineUncorrectable()
	{
		return $this->offlineUncorrectable;
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