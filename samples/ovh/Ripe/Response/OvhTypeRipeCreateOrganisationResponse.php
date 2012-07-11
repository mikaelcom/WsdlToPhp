<?php
/**
 * Class file for OvhTypeRipeCreateOrganisationResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRipeCreateOrganisationResponse
 * @date 02/07/2012
 */
class OvhTypeRipeCreateOrganisationResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeRipeUpdateReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeRipeUpdateReturn return
	 * @return OvhTypeRipeCreateOrganisationResponse
	 */
	public function __construct($_return = null)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Set return
	 * @param ripeUpdateReturn return
	 * @return ripeUpdateReturn
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Get return
	 * @return OvhTyperipeUpdateReturn
	 */
	public function getReturn()
	{
		return $this->return;
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