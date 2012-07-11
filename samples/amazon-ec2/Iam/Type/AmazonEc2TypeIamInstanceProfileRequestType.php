<?php
/**
 * Class file for AmazonEc2TypeIamInstanceProfileRequestType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeIamInstanceProfileRequestType
 * @date 10/07/2012
 */
class AmazonEc2TypeIamInstanceProfileRequestType extends AmazonEc2WsdlClass
{
	/**
	 * The arn
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $arn;
	/**
	 * The name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $name;
	/**
	 * Constructor
	 * @param string arn
	 * @param string name
	 * @return AmazonEc2TypeIamInstanceProfileRequestType
	 */
	public function __construct($_arn = null,$_name = null)
	{
		parent::__construct(array('arn'=>$_arn,'name'=>$_name));
	}
	/**
	 * Set arn
	 * @param string arn
	 * @return string
	 */
	public function setArn($_arn)
	{
		return ($this->arn = $_arn);
	}
	/**
	 * Get arn
	 * @return string
	 */
	public function getArn()
	{
		return $this->arn;
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