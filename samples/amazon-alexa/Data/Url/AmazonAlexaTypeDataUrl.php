<?php
/**
 * Class file for AmazonAlexaTypeDataUrl
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeDataUrl
 * @date 10/07/2012
 */
class AmazonAlexaTypeDataUrl extends AmazonAlexaWsdlClass
{
	/**
	 * The _
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $_;
	/**
	 * The type
	 * @var token
	 */
	public $type;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeGenericDataType _
	 * @param token type
	 * @return AmazonAlexaTypeDataUrl
	 */
	public function __construct($__ = null,$_type = null)
	{
		parent::__construct(array('_'=>$__,'type'=>$_type));
	}
	/**
	 * Set _
	 * @param GenericDataType _
	 * @return GenericDataType
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function get_()
	{
		return $this->_;
	}
	/**
	 * Set type
	 * @param token type
	 * @return token
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return token
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