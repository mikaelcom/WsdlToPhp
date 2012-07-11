<?php
/**
 * Class file for OvhTypeRtmMemoryStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmMemoryStruct
 * @date 02/07/2012
 */
class OvhTypeRtmMemoryStruct extends OvhWsdlClass
{
	/**
	 * The memusage
	 * @var int
	 */
	public $memusage;
	/**
	 * The swapusage
	 * @var int
	 */
	public $swapusage;
	/**
	 * The modules
	 * @var OvhTypeMyArrayOfRtmMemoryModuleStructType
	 */
	public $modules;
	/**
	 * Constructor
	 * @param int memusage
	 * @param int swapusage
	 * @param OvhTypeMyArrayOfRtmMemoryModuleStructType modules
	 * @return OvhTypeRtmMemoryStruct
	 */
	public function __construct($_memusage = null,$_swapusage = null,$_modules = null)
	{
		parent::__construct(array('memusage'=>$_memusage,'swapusage'=>$_swapusage,'modules'=>new OvhTypeMyArrayOfRtmMemoryModuleStructType($_modules)));
	}
	/**
	 * Set memusage
	 * @param int memusage
	 * @return int
	 */
	public function setMemusage($_memusage)
	{
		return ($this->memusage = $_memusage);
	}
	/**
	 * Get memusage
	 * @return int
	 */
	public function getMemusage()
	{
		return $this->memusage;
	}
	/**
	 * Set swapusage
	 * @param int swapusage
	 * @return int
	 */
	public function setSwapusage($_swapusage)
	{
		return ($this->swapusage = $_swapusage);
	}
	/**
	 * Get swapusage
	 * @return int
	 */
	public function getSwapusage()
	{
		return $this->swapusage;
	}
	/**
	 * Set modules
	 * @param MyArrayOfRtmMemoryModuleStructType modules
	 * @return MyArrayOfRtmMemoryModuleStructType
	 */
	public function setModules($_modules)
	{
		return ($this->modules = $_modules);
	}
	/**
	 * Get modules
	 * @return OvhTypeMyArrayOfRtmMemoryModuleStructType
	 */
	public function getModules()
	{
		return $this->modules;
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