<?php
/**
 * Class file for SPCopyTypeDestinationUrlCollection
 * @date 07/07/2012
 */
/**
 * Class SPCopyTypeDestinationUrlCollection
 * @date 07/07/2012
 */
class SPCopyTypeDestinationUrlCollection extends SPCopyWsdlClass
{
	/**
	 * The string
	 * @var string
	 */
	public $string;
	/**
	 * Constructor
	 * @param string string
	 * @return SPCopyTypeDestinationUrlCollection
	 */
	public function __construct($_string = null)
	{
		parent::__construct(array('string'=>$_string));
	}
	/**
	 * Set string
	 * @param string string
	 * @return string
	 */
	public function setString($_string)
	{
		return ($this->string = $_string);
	}
	/**
	 * Get string
	 * @return string
	 */
	public function getString()
	{
		return $this->string;
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