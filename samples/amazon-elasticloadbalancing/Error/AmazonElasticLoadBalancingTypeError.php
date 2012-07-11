<?php
/**
 * Class file for AmazonElasticLoadBalancingTypeError
 * @date 10/07/2012
 */
/**
 * Class AmazonElasticLoadBalancingTypeError
 * @date 10/07/2012
 */
class AmazonElasticLoadBalancingTypeError extends AmazonElasticLoadBalancingWsdlClass
{
	/**
	 * The Type
	 * @var Type
	 */
	public $Type;
	/**
	 * The Code
	 * @var string
	 */
	public $Code;
	/**
	 * The Message
	 * @var string
	 */
	public $Message;
	/**
	 * The Detail
	 * @var AmazonElasticLoadBalancingTypeDetail
	 */
	public $Detail;
	/**
	 * Constructor
	 * @param Type Type
	 * @param string Code
	 * @param string Message
	 * @param AmazonElasticLoadBalancingTypeDetail Detail
	 * @return AmazonElasticLoadBalancingTypeError
	 */
	public function __construct($_Type = null,$_Code = null,$_Message = null,$_Detail = null)
	{
		parent::__construct(array('Type'=>$_Type,'Code'=>$_Code,'Message'=>$_Message,'Detail'=>$_Detail));
	}
	/**
	 * Set Type
	 * @param Type Type
	 * @return Type
	 */
	public function setType($_Type)
	{
		return ($this->Type = $_Type);
	}
	/**
	 * Get Type
	 * @return Type
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Code
	 * @param string Code
	 * @return string
	 */
	public function setCode($_Code)
	{
		return ($this->Code = $_Code);
	}
	/**
	 * Get Code
	 * @return string
	 */
	public function getCode()
	{
		return $this->Code;
	}
	/**
	 * Set Message
	 * @param string Message
	 * @return string
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return string
	 */
	public function getMessage()
	{
		return $this->Message;
	}
	/**
	 * Set Detail
	 * @param Detail Detail
	 * @return Detail
	 */
	public function setDetail($_Detail)
	{
		return ($this->Detail = $_Detail);
	}
	/**
	 * Get Detail
	 * @return AmazonElasticLoadBalancingTypeDetail
	 */
	public function getDetail()
	{
		return $this->Detail;
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