<?php
/**
 * Class file for AmazonAlexaTypeOtherUrl
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeOtherUrl
 * @date 10/07/2012
 */
class AmazonAlexaTypeOtherUrl extends AmazonAlexaWsdlClass
{
	/**
	 * The _
	 * @var token
	 */
	public $_;
	/**
	 * The source
	 * @var token
	 */
	public $source;
	/**
	 * Constructor
	 * @param token _
	 * @param token source
	 * @return AmazonAlexaTypeOtherUrl
	 */
	public function __construct($__ = null,$_source = null)
	{
		parent::__construct(array('_'=>$__,'source'=>$_source));
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
	 * Set source
	 * @param token source
	 * @return token
	 */
	public function setSource($_source)
	{
		return ($this->source = $_source);
	}
	/**
	 * Get source
	 * @return token
	 */
	public function getSource()
	{
		return $this->source;
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