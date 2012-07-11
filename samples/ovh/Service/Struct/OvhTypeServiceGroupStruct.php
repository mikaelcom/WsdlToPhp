<?php
/**
 * Class file for OvhTypeServiceGroupStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceGroupStruct
 * @date 02/07/2012
 */
class OvhTypeServiceGroupStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The details
	 * @var OvhTypeMyArrayOfServiceStructType
	 */
	public $details;
	/**
	 * Constructor
	 * @param string name
	 * @param string comment
	 * @param OvhTypeMyArrayOfServiceStructType details
	 * @return OvhTypeServiceGroupStruct
	 */
	public function __construct($_name = null,$_comment = null,$_details = null)
	{
		parent::__construct(array('name'=>$_name,'comment'=>$_comment,'details'=>new OvhTypeMyArrayOfServiceStructType($_details)));
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
	 * Set comment
	 * @param string comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set details
	 * @param MyArrayOfServiceStructType details
	 * @return MyArrayOfServiceStructType
	 */
	public function setDetails($_details)
	{
		return ($this->details = $_details);
	}
	/**
	 * Get details
	 * @return OvhTypeMyArrayOfServiceStructType
	 */
	public function getDetails()
	{
		return $this->details;
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