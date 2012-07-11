<?php
/**
 * Class file for AmazonAlexaTypeTrafficStatType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeTrafficStatType
 * @date 10/07/2012
 */
class AmazonAlexaTypeTrafficStatType extends AmazonAlexaWsdlClass
{
	/**
	 * The Value
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $Value;
	/**
	 * The Delta
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $Delta;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeGenericDataType Value
	 * @param AmazonAlexaTypeGenericDataType Delta
	 * @return AmazonAlexaTypeTrafficStatType
	 */
	public function __construct($_Value = null,$_Delta = null)
	{
		parent::__construct(array('Value'=>$_Value,'Delta'=>$_Delta));
	}
	/**
	 * Set Value
	 * @param GenericDataType Value
	 * @return GenericDataType
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set Delta
	 * @param GenericDataType Delta
	 * @return GenericDataType
	 */
	public function setDelta($_Delta)
	{
		return ($this->Delta = $_Delta);
	}
	/**
	 * Get Delta
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getDelta()
	{
		return $this->Delta;
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