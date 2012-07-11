<?php
/**
 * Class file for OvhTypeRipeDeleteOrganisationResponse
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRipeDeleteOrganisationResponse
 * @date 02/07/2012
 */
class OvhTypeRipeDeleteOrganisationResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhTypeRipeUpdateReturn
	 */
	public $return;
	/**
	 * Constructor
	 * @param OvhTypeRipeUpdateReturn return
	 * @return OvhTypeRipeDeleteOrganisationResponse
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