<?php
/**
 * Class file for OvhTypeRtmSystemOsStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmSystemOsStruct
 * @date 02/07/2012
 */
class OvhTypeRtmSystemOsStruct extends OvhWsdlClass
{
	/**
	 * The current
	 * @var string
	 */
	public $current;
	/**
	 * The os
	 * @var string
	 */
	public $os;
	/**
	 * Constructor
	 * @param string current
	 * @param string os
	 * @return OvhTypeRtmSystemOsStruct
	 */
	public function __construct($_current = null,$_os = null)
	{
		parent::__construct(array('current'=>$_current,'os'=>$_os));
	}
	/**
	 * Set current
	 * @param string current
	 * @return string
	 */
	public function setCurrent($_current)
	{
		return ($this->current = $_current);
	}
	/**
	 * Get current
	 * @return string
	 */
	public function getCurrent()
	{
		return $this->current;
	}
	/**
	 * Set os
	 * @param string os
	 * @return string
	 */
	public function setOs($_os)
	{
		return ($this->os = $_os);
	}
	/**
	 * Get os
	 * @return string
	 */
	public function getOs()
	{
		return $this->os;
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