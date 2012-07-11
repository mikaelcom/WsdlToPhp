<?php
/**
 * Class file for OvhTypeDedicatedHardRebootStatusReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedHardRebootStatusReturn
 * @date 02/07/2012
 */
class OvhTypeDedicatedHardRebootStatusReturn extends OvhWsdlClass
{
	/**
	 * The start
	 * @var string
	 */
	public $start;
	/**
	 * The end
	 * @var string
	 */
	public $end;
	/**
	 * Constructor
	 * @param string start
	 * @param string end
	 * @return OvhTypeDedicatedHardRebootStatusReturn
	 */
	public function __construct($_start = null,$_end = null)
	{
		parent::__construct(array('start'=>$_start,'end'=>$_end));
	}
	/**
	 * Set start
	 * @param string start
	 * @return string
	 */
	public function setStart($_start)
	{
		return ($this->start = $_start);
	}
	/**
	 * Get start
	 * @return string
	 */
	public function getStart()
	{
		return $this->start;
	}
	/**
	 * Set end
	 * @param string end
	 * @return string
	 */
	public function setEnd($_end)
	{
		return ($this->end = $_end);
	}
	/**
	 * Get end
	 * @return string
	 */
	public function getEnd()
	{
		return $this->end;
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