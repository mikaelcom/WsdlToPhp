<?php
/**
 * Class file for OvhTypeBillingGetReferencesToExpiredStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeBillingGetReferencesToExpiredStruct
 * @date 02/07/2012
 */
class OvhTypeBillingGetReferencesToExpiredStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The expired
	 * @var string
	 */
	public $expired;
	/**
	 * Constructor
	 * @param string name
	 * @param string type
	 * @param string expired
	 * @return OvhTypeBillingGetReferencesToExpiredStruct
	 */
	public function __construct($_name = null,$_type = null,$_expired = null)
	{
		parent::__construct(array('name'=>$_name,'type'=>$_type,'expired'=>$_expired));
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
	 * Set expired
	 * @param string expired
	 * @return string
	 */
	public function setExpired($_expired)
	{
		return ($this->expired = $_expired);
	}
	/**
	 * Get expired
	 * @return string
	 */
	public function getExpired()
	{
		return $this->expired;
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