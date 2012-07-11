<?php
/**
 * Class file for OvhTypeRpsGetIoStatsResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRpsGetIoStatsResponse
 * @date 02/07/2012
 */
class OvhTypeRpsGetIoStatsResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeRpsGetIoStatsReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeRpsGetIoStatsReturn return
	 * @return OvhTypeRpsGetIoStatsResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param rpsGetIoStatsReturn return
	 * @return rpsGetIoStatsReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTyperpsGetIoStatsReturn
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