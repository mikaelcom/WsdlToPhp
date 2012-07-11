<?php
/**
 * Class file for AmazonAlexaTypeAttributeType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeAttributeType
 * @date 10/07/2012
 */
class AmazonAlexaTypeAttributeType extends AmazonAlexaWsdlClass
{
	/**
	 * The Name
	 * @var token
	 */
	public $Name;
	/**
	 * The Value
	 * @var token
	 */
	public $Value;
	/**
	 * Constructor
	 * @param token Name
	 * @param token Value
	 * @return AmazonAlexaTypeAttributeType
	 */
	public function __construct($_Name = null,$_Value = null)
	{
		parent::__construct(array('Name'=>$_Name,'Value'=>$_Value));
	}
	/**
	 * Set Name
	 * @param token Name
	 * @return token
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return token
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Value
	 * @param token Value
	 * @return token
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return token
	 */
	public function getValue()
	{
		return $this->Value;
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