<?php
/**
 * Class file for OvhTypeDomainCheckStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeDomainCheckStruct
 * @date 02/07/2012
 */
class OvhTypeDomainCheckStruct extends OvhWsdlClass
{
	/**
	 * The predicate
	 * @var string
	 */
	public $predicate;
	/**
	 * The value
	 * @var boolean
	 */
	public $value;
	/**
	 * The reason
	 * @var string
	 */
	public $reason;
	/**
	 * Constructor
	 * @param string predicate
	 * @param boolean value
	 * @param string reason
	 * @return OvhTypeDomainCheckStruct
	 */
	public function __construct($_predicate = null,$_value = null,$_reason = null)
	{
		parent::__construct(array('predicate'=>$_predicate,'value'=>$_value,'reason'=>$_reason));
	}
	/**
	 * Set predicate
	 * @param string predicate
	 * @return string
	 */
	public function setPredicate($_predicate)
	{
		return ($this->predicate = $_predicate);
	}
	/**
	 * Get predicate
	 * @return string
	 */
	public function getPredicate()
	{
		return $this->predicate;
	}
	/**
	 * Set value
	 * @param boolean value
	 * @return boolean
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return boolean
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set reason
	 * @param string reason
	 * @return string
	 */
	public function setReason($_reason)
	{
		return ($this->reason = $_reason);
	}
	/**
	 * Get reason
	 * @return string
	 */
	public function getReason()
	{
		return $this->reason;
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