<?php
/**
 * Class file for AmazonAlexaTypeStreets
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeStreets
 * @date 10/07/2012
 */
class AmazonAlexaTypeStreets extends AmazonAlexaWsdlClass
{
	/**
	 * The Street
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $Street;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeGenericDataType Street
	 * @return AmazonAlexaTypeStreets
	 */
	public function __construct($_Street = null)
	{
		parent::__construct(array('Street'=>$_Street));
	}
	/**
	 * Set Street
	 * @param GenericDataType Street
	 * @return GenericDataType
	 */
	public function setStreet($_Street)
	{
		return ($this->Street = $_Street);
	}
	/**
	 * Get Street
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getStreet()
	{
		return $this->Street;
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