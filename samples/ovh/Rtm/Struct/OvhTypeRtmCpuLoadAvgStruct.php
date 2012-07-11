<?php
/**
 * Class file for OvhTypeRtmCpuLoadAvgStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmCpuLoadAvgStruct
 * @date 02/07/2012
 */
class OvhTypeRtmCpuLoadAvgStruct extends OvhWsdlClass
{
	/**
	 * The loadavg1
	 * @var string
	 */
	public $loadavg1;
	/**
	 * The loadavg5
	 * @var string
	 */
	public $loadavg5;
	/**
	 * The loadavg15
	 * @var string
	 */
	public $loadavg15;
	/**
	 * Constructor
	 * @param string loadavg1
	 * @param string loadavg5
	 * @param string loadavg15
	 * @return OvhTypeRtmCpuLoadAvgStruct
	 */
	public function __construct($_loadavg1 = null,$_loadavg5 = null,$_loadavg15 = null)
	{
		parent::__construct(array('loadavg1'=>$_loadavg1,'loadavg5'=>$_loadavg5,'loadavg15'=>$_loadavg15));
	}
	/**
	 * Set loadavg1
	 * @param string loadavg1
	 * @return string
	 */
	public function setLoadavg1($_loadavg1)
	{
		return ($this->loadavg1 = $_loadavg1);
	}
	/**
	 * Get loadavg1
	 * @return string
	 */
	public function getLoadavg1()
	{
		return $this->loadavg1;
	}
	/**
	 * Set loadavg5
	 * @param string loadavg5
	 * @return string
	 */
	public function setLoadavg5($_loadavg5)
	{
		return ($this->loadavg5 = $_loadavg5);
	}
	/**
	 * Get loadavg5
	 * @return string
	 */
	public function getLoadavg5()
	{
		return $this->loadavg5;
	}
	/**
	 * Set loadavg15
	 * @param string loadavg15
	 * @return string
	 */
	public function setLoadavg15($_loadavg15)
	{
		return ($this->loadavg15 = $_loadavg15);
	}
	/**
	 * Get loadavg15
	 * @return string
	 */
	public function getLoadavg15()
	{
		return $this->loadavg15;
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