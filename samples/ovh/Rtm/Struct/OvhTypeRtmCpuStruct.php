<?php
/**
 * Class file for OvhTypeRtmCpuStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmCpuStruct
 * @date 02/07/2012
 */
class OvhTypeRtmCpuStruct extends OvhWsdlClass
{
	/**
	 * The frequency
	 * @var string
	 */
	public $frequency;
	/**
	 * The core
	 * @var int
	 */
	public $core;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The cache
	 * @var string
	 */
	public $cache;
	/**
	 * The percentLoad
	 * @var int
	 */
	public $percentLoad;
	/**
	 * The loadAvg
	 * @var OvhTypeRtmCpuLoadAvgStruct
	 */
	public $loadAvg;
	/**
	 * Constructor
	 * @param string frequency
	 * @param int core
	 * @param string name
	 * @param string cache
	 * @param int percentLoad
	 * @param OvhTypeRtmCpuLoadAvgStruct loadAvg
	 * @return OvhTypeRtmCpuStruct
	 */
	public function __construct($_frequency = null,$_core = null,$_name = null,$_cache = null,$_percentLoad = null,$_loadAvg = null)
	{
		parent::__construct(array('frequency'=>$_frequency,'core'=>$_core,'name'=>$_name,'cache'=>$_cache,'percentLoad'=>$_percentLoad,'loadAvg'=>$_loadAvg));
	}
	/**
	 * Set frequency
	 * @param string frequency
	 * @return string
	 */
	public function setFrequency($_frequency)
	{
		return ($this->frequency = $_frequency);
	}
	/**
	 * Get frequency
	 * @return string
	 */
	public function getFrequency()
	{
		return $this->frequency;
	}
	/**
	 * Set core
	 * @param int core
	 * @return int
	 */
	public function setCore($_core)
	{
		return ($this->core = $_core);
	}
	/**
	 * Get core
	 * @return int
	 */
	public function getCore()
	{
		return $this->core;
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set cache
	 * @param string cache
	 * @return string
	 */
	public function setCache($_cache)
	{
		return ($this->cache = $_cache);
	}
	/**
	 * Get cache
	 * @return string
	 */
	public function getCache()
	{
		return $this->cache;
	}
	/**
	 * Set percentLoad
	 * @param int percentLoad
	 * @return int
	 */
	public function setPercentLoad($_percentLoad)
	{
		return ($this->percentLoad = $_percentLoad);
	}
	/**
	 * Get percentLoad
	 * @return int
	 */
	public function getPercentLoad()
	{
		return $this->percentLoad;
	}
	/**
	 * Set loadAvg
	 * @param rtmCpuLoadAvgStruct loadAvg
	 * @return rtmCpuLoadAvgStruct
	 */
	public function setLoadAvg($_loadAvg)
	{
		return ($this->loadAvg = $_loadAvg);
	}
	/**
	 * Get loadAvg
	 * @return OvhTypertmCpuLoadAvgStruct
	 */
	public function getLoadAvg()
	{
		return $this->loadAvg;
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