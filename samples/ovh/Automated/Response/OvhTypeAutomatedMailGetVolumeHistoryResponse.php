<?php
/**
 * Class file for OvhTypeAutomatedMailGetVolumeHistoryResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeAutomatedMailGetVolumeHistoryResponse
 * @date 02/07/2012
 */
class OvhTypeAutomatedMailGetVolumeHistoryResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeMyArrayOfAutomatedMailGetVolumeHistoryStructType
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeMyArrayOfAutomatedMailGetVolumeHistoryStructType return
	 * @return OvhTypeAutomatedMailGetVolumeHistoryResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>new OvhTypeMyArrayOfAutomatedMailGetVolumeHistoryStructType($_return)));
	}
	/**
	 * Set return
	 * @param MyArrayOfAutomatedMailGetVolumeHistoryStructType return
	 * @return MyArrayOfAutomatedMailGetVolumeHistoryStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTypeMyArrayOfAutomatedMailGetVolumeHistoryStructType
	 */
	public function getReturn()
	{
		return $this->return;
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