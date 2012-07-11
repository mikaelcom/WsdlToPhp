<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeInstanceState
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeInstanceState
 * Documentation : <p> The InstanceState data type. </p>
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeInstanceState extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The InstanceId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Provides an EC2 instance ID. </p>
	 * @var string
	 */
	public $InstanceId;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Specifies the current status of the instance. </p>
	 * @var string
	 */
	public $State;
	/**
	 * The ReasonCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Provides information about the cause of <i>OutOfService</i> instances. Specifically, it indicates whether the cause is Elastic Load Balancing or the instance behind the LoadBalancer. </p>
	 * @var string
	 */
	public $ReasonCode;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : <p> Provides a description of the instance. </p>
	 * @var string
	 */
	public $Description;
	/**
	 * Constructor
	 * @param string InstanceId
	 * @param string State
	 * @param string ReasonCode
	 * @param string Description
	 * @return AmazonElasticLoadBalancingTypeInstanceState
	 */
	public function __construct($_InstanceId = null,$_State = null,$_ReasonCode = null,$_Description = null)
	{
		parent::__construct(array('InstanceId'=>$_InstanceId,'State'=>$_State,'ReasonCode'=>$_ReasonCode,'Description'=>$_Description));
	}
	/**
	 * Set InstanceId
	 * @param string InstanceId
	 * @return string
	 */
	public function setInstanceId($_InstanceId)
	{
		return ($this->InstanceId = $_InstanceId);
	}
	/**
	 * Get InstanceId
	 * @return string
	 */
	public function getInstanceId()
	{
		return $this->InstanceId;
	}
	/**
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set ReasonCode
	 * @param string ReasonCode
	 * @return string
	 */
	public function setReasonCode($_ReasonCode)
	{
		return ($this->ReasonCode = $_ReasonCode);
	}
	/**
	 * Get ReasonCode
	 * @return string
	 */
	public function getReasonCode()
	{
		return $this->ReasonCode;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
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