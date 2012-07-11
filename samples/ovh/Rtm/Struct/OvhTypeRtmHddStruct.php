<?php
/**
 * Class file for OvhTypeRtmHddStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmHddStruct
 * @date 02/07/2012
 */
class OvhTypeRtmHddStruct extends OvhWsdlClass
{
	/**
	 * The device
	 * @var string
	 */
	public $device;
	/**
	 * The model
	 * @var string
	 */
	public $model;
	/**
	 * The capacity
	 * @var string
	 */
	public $capacity;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The partitions
	 * @var OvhTypeMyArrayOfRtmHddPartitionStructType
	 */
	public $partitions;
	/**
	 * The smart
	 * @var OvhTypeRtmHddSmartStruct
	 */
	public $smart;
	/**
	 * The temperature
	 * @var int
	 */
	public $temperature;
	/**
	 * Constructor
	 * @param string device
	 * @param string model
	 * @param string capacity
	 * @param string status
	 * @param OvhTypeMyArrayOfRtmHddPartitionStructType partitions
	 * @param OvhTypeRtmHddSmartStruct smart
	 * @param int temperature
	 * @return OvhTypeRtmHddStruct
	 */
	public function __construct($_device = null,$_model = null,$_capacity = null,$_status = null,$_partitions = null,$_smart = null,$_temperature = null)
	{
		parent::__construct(array('device'=>$_device,'model'=>$_model,'capacity'=>$_capacity,'status'=>$_status,'partitions'=>new OvhTypeMyArrayOfRtmHddPartitionStructType($_partitions),'smart'=>$_smart,'temperature'=>$_temperature));
	}
	/**
	 * Set device
	 * @param string device
	 * @return string
	 */
	public function setDevice($_device)
	{
		return ($this->device = $_device);
	}
	/**
	 * Get device
	 * @return string
	 */
	public function getDevice()
	{
		return $this->device;
	}
	/**
	 * Set model
	 * @param string model
	 * @return string
	 */
	public function setModel($_model)
	{
		return ($this->model = $_model);
	}
	/**
	 * Get model
	 * @return string
	 */
	public function getModel()
	{
		return $this->model;
	}
	/**
	 * Set capacity
	 * @param string capacity
	 * @return string
	 */
	public function setCapacity($_capacity)
	{
		return ($this->capacity = $_capacity);
	}
	/**
	 * Get capacity
	 * @return string
	 */
	public function getCapacity()
	{
		return $this->capacity;
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
	 * Set partitions
	 * @param MyArrayOfRtmHddPartitionStructType partitions
	 * @return MyArrayOfRtmHddPartitionStructType
	 */
	public function setPartitions($_partitions)
	{
		return ($this->partitions = $_partitions);
	}
	/**
	 * Get partitions
	 * @return OvhTypeMyArrayOfRtmHddPartitionStructType
	 */
	public function getPartitions()
	{
		return $this->partitions;
	}
	/**
	 * Set smart
	 * @param rtmHddSmartStruct smart
	 * @return rtmHddSmartStruct
	 */
	public function setSmart($_smart)
	{
		return ($this->smart = $_smart);
	}
	/**
	 * Get smart
	 * @return OvhTypertmHddSmartStruct
	 */
	public function getSmart()
	{
		return $this->smart;
	}
	/**
	 * Set temperature
	 * @param int temperature
	 * @return int
	 */
	public function setTemperature($_temperature)
	{
		return ($this->temperature = $_temperature);
	}
	/**
	 * Get temperature
	 * @return int
	 */
	public function getTemperature()
	{
		return $this->temperature;
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