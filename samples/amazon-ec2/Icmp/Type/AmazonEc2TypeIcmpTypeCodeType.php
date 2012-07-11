<?php
/**
 * Class file for AmazonEc2TypeIcmpTypeCodeType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeIcmpTypeCodeType
 * @date 10/07/2012
 */
class AmazonEc2TypeIcmpTypeCodeType extends AmazonEc2WsdlClass
{
	/**
	 * The code
	 * @var int
	 */
	public $code;
	/**
	 * The type
	 * @var int
	 */
	public $type;
	/**
	 * Constructor
	 * @param int code
	 * @param int type
	 * @return AmazonEc2TypeIcmpTypeCodeType
	 */
	public function __construct($_code = null,$_type = null)
	{
		parent::__construct(array('code'=>$_code,'type'=>$_type));
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
	 * Set type
	 * @param int type
	 * @return int
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return int
	 */
	public function getType()
	{
		return $this->type;
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