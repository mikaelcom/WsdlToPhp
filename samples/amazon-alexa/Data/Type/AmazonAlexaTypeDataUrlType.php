<?php
/**
 * Class file for AmazonAlexaTypeDataUrlType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeDataUrlType
 * @date 10/07/2012
 */
class AmazonAlexaTypeDataUrlType extends AmazonAlexaWsdlClass
{
	/**
	 * The _
	 * @var token
	 */
	public $_;
	/**
	 * The type
	 * @var token
	 */
	public $type;
	/**
	 * Constructor
	 * @param token _
	 * @param token type
	 * @return AmazonAlexaTypeDataUrlType
	 */
	public function __construct($__ = null,$_type = null)
	{
		parent::__construct(array('_'=>$__,'type'=>$_type));
	}
	/**
	 * Set _
	 * @param token _
	 * @return token
	 */
	public function set_($__)
	{
		return ($this->_ = $__);
	}
	/**
	 * Get _
	 * @return token
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