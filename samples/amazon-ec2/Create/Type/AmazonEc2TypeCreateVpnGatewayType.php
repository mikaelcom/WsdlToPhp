<?php
/**
 * Class file for AmazonEc2TypeCreateVpnGatewayType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeCreateVpnGatewayType
 * @date 10/07/2012
 */
class AmazonEc2TypeCreateVpnGatewayType extends AmazonEc2WsdlClass
{
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The availabilityZone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $availabilityZone;
	/**
	 * Constructor
	 * @param string type
	 * @param string availabilityZone
	 * @return AmazonEc2TypeCreateVpnGatewayType
	 */
	public function __construct($_type = null,$_availabilityZone = null)
	{
		parent::__construct(array('type'=>$_type,'availabilityZone'=>$_availabilityZone));
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set availabilityZone
	 * @param string availabilityZone
	 * @return string
	 */
	public function setAvailabilityZone($_availabilityZone)
	{
		return ($this->availabilityZone = $_availabilityZone);
	}
	/**
	 * Get availabilityZone
	 * @return string
	 */
	public function getAvailabilityZone()
	{
		return $this->availabilityZone;
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