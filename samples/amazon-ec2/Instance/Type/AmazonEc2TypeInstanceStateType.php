<?php
/**
 * Class file for AmazonEc2TypeInstanceStateType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeInstanceStateType
 * @date 10/07/2012
 */
class AmazonEc2TypeInstanceStateType extends AmazonEc2WsdlClass
{
	/**
	 * The code
	 * @var int
	 */
	public $code;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * Constructor
	 * @param int code
	 * @param string name
	 * @return AmazonEc2TypeInstanceStateType
	 */
	public function __construct($_code = null,$_name = null)
	{
		parent::__construct(array('code'=>$_code,'name'=>$_name));
	}
	/**
	 * Set code
	 * @param int code
	 * @return int
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
	}
	/**
	 * Get code
	 * @return int
	 */
	public function getCode()
	{
		return $this->code;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>