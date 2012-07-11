<?php
/**
 * Class file for OvhTypeDedicatedRtmStatusReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDedicatedRtmStatusReturn
 * @date 02/07/2012
 */
class OvhTypeDedicatedRtmStatusReturn extends OvhWsdlClass
{
	/**
	 * The cpu
	 * @var OvhTypeRtmCpuStruct
	 */
	public $cpu;
	/**
	 * The hardDrives
	 * @var OvhTypeMyArrayOfRtmHddStructType
	 */
	public $hardDrives;
	/**
	 * The systemInfo
	 * @var OvhTypeRtmSystemStruct
	 */
	public $systemInfo;
	/**
	 * The memory
	 * @var OvhTypeRtmMemoryStruct
	 */
	public $memory;
	/**
	 * The motherboard
	 * @var OvhTypeRtmMotherboardStruct
	 */
	public $motherboard;
	/**
	 * The lspci
	 * @var OvhTypeMyArrayOfRtmLspciStructType
	 */
	public $lspci;
	/**
	 * The portsUsed
	 * @var OvhTypeRtmPortsStruct
	 */
	public $portsUsed;
	/**
	 * The raid
	 * @var OvhTypeRtmRaidStruct
	 */
	public $raid;
	/**
	 * Constructor
	 * @param OvhTypeRtmCpuStruct cpu
	 * @param OvhTypeMyArrayOfRtmHddStructType hardDrives
	 * @param OvhTypeRtmSystemStruct systemInfo
	 * @param OvhTypeRtmMemoryStruct memory
	 * @param OvhTypeRtmMotherboardStruct motherboard
	 * @param OvhTypeMyArrayOfRtmLspciStructType lspci
	 * @param OvhTypeRtmPortsStruct portsUsed
	 * @param OvhTypeRtmRaidStruct raid
	 * @return OvhTypeDedicatedRtmStatusReturn
	 */
	public function __construct($_cpu = null,$_hardDrives = null,$_systemInfo = null,$_memory = null,$_motherboard = null,$_lspci = null,$_portsUsed = null,$_raid = null)
	{
		parent::__construct(array('cpu'=>$_cpu,'hardDrives'=>new OvhTypeMyArrayOfRtmHddStructType($_hardDrives),'systemInfo'=>$_systemInfo,'memory'=>$_memory,'motherboard'=>$_motherboard,'lspci'=>new OvhTypeMyArrayOfRtmLspciStructType($_lspci),'portsUsed'=>$_portsUsed,'raid'=>$_raid));
	}
	/**
	 * Set cpu
	 * @param rtmCpuStruct cpu
	 * @return rtmCpuStruct
	 */
	public function setCpu($_cpu)
	{
		return ($this->cpu = $_cpu);
	}
	/**
	 * Get cpu
	 * @return OvhTypertmCpuStruct
	 */
	public function getCpu()
	{
		return $this->cpu;
	}
	/**
	 * Set hardDrives
	 * @param MyArrayOfRtmHddStructType hardDrives
	 * @return MyArrayOfRtmHddStructType
	 */
	public function setHardDrives($_hardDrives)
	{
		return ($this->hardDrives = $_hardDrives);
	}
	/**
	 * Get hardDrives
	 * @return OvhTypeMyArrayOfRtmHddStructType
	 */
	public function getHardDrives()
	{
		return $this->hardDrives;
	}
	/**
	 * Set systemInfo
	 * @param rtmSystemStruct systemInfo
	 * @return rtmSystemStruct
	 */
	public function setSystemInfo($_systemInfo)
	{
		return ($this->systemInfo = $_systemInfo);
	}
	/**
	 * Get systemInfo
	 * @return OvhTypertmSystemStruct
	 */
	public function getSystemInfo()
	{
		return $this->systemInfo;
	}
	/**
	 * Set memory
	 * @param rtmMemoryStruct memory
	 * @return rtmMemoryStruct
	 */
	public function setMemory($_memory)
	{
		return ($this->memory = $_memory);
	}
	/**
	 * Get memory
	 * @return OvhTypertmMemoryStruct
	 */
	public function getMemory()
	{
		return $this->memory;
	}
	/**
	 * Set motherboard
	 * @param rtmMotherboardStruct motherboard
	 * @return rtmMotherboardStruct
	 */
	public function setMotherboard($_motherboard)
	{
		return ($this->motherboard = $_motherboard);
	}
	/**
	 * Get motherboard
	 * @return OvhTypertmMotherboardStruct
	 */
	public function getMotherboard()
	{
		return $this->motherboard;
	}
	/**
	 * Set lspci
	 * @param MyArrayOfRtmLspciStructType lspci
	 * @return MyArrayOfRtmLspciStructType
	 */
	public function setLspci($_lspci)
	{
		return ($this->lspci = $_lspci);
	}
	/**
	 * Get lspci
	 * @return OvhTypeMyArrayOfRtmLspciStructType
	 */
	public function getLspci()
	{
		return $this->lspci;
	}
	/**
	 * Set portsUsed
	 * @param rtmPortsStruct portsUsed
	 * @return rtmPortsStruct
	 */
	public function setPortsUsed($_portsUsed)
	{
		return ($this->portsUsed = $_portsUsed);
	}
	/**
	 * Get portsUsed
	 * @return OvhTypertmPortsStruct
	 */
	public function getPortsUsed()
	{
		return $this->portsUsed;
	}
	/**
	 * Set raid
	 * @param rtmRaidStruct raid
	 * @return rtmRaidStruct
	 */
	public function setRaid($_raid)
	{
		return ($this->raid = $_raid);
	}
	/**
	 * Get raid
	 * @return OvhTypertmRaidStruct
	 */
	public function getRaid()
	{
		return $this->raid;
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