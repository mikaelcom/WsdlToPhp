<?php
/**
 * Class file for OvhTypeRtmLspciStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRtmLspciStruct
 * @date 02/07/2012
 */
class OvhTypeRtmLspciStruct extends OvhWsdlClass
{
	/**
	 * The address
	 * @var string
	 */
	public $address;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * Constructor
	 * @param string address
	 * @param string description
	 * @return OvhTypeRtmLspciStruct
	 */
	public function __construct($_address = null,$_description = null)
	{
		parent::__construct(array('address'=>$_address,'description'=>$_description));
	}
	/**
	 * Set address
	 * @param string address
	 * @return string
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get address
	 * @return string
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set description
	 * @param string description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
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