<?php
/**
 * Class file for AmazonEc2TypeIamInstanceProfileResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeIamInstanceProfileResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeIamInstanceProfileResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The arn
	 * @var string
	 */
	public $arn;
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * Constructor
	 * @param string arn
	 * @param string id
	 * @return AmazonEc2TypeIamInstanceProfileResponseType
	 */
	public function __construct($_arn = null,$_id = null)
	{
		parent::__construct(array('arn'=>$_arn,'id'=>$_id));
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
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
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