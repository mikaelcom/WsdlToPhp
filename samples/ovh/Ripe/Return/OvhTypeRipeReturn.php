<?php
/**
 * Class file for OvhTypeRipeReturn
 * @date 02/07/2012
 */
/**
 * Class OvhTypeRipeReturn
 * @date 02/07/2012
 */
class OvhTypeRipeReturn extends OvhWsdlClass
{
	/**
	 * The inetnum
	 * @var OvhTypeRipeInetnumStruct
	 */
	public $inetnum;
	/**
	 * The organisation
	 * @var OvhTypeRipeOrganisationStruct
	 */
	public $organisation;
	/**
	 * Constructor
	 * @param OvhTypeRipeInetnumStruct inetnum
	 * @param OvhTypeRipeOrganisationStruct organisation
	 * @return OvhTypeRipeReturn
	 */
	public function __construct($_inetnum = null,$_organisation = null)
	{
		parent::__construct(array('inetnum'=>$_inetnum,'organisation'=>$_organisation));
	}
	/**
	 * Set inetnum
	 * @param ripeInetnumStruct inetnum
	 * @return ripeInetnumStruct
	 */
	public function setInetnum($_inetnum)
	{
		return ($this->inetnum = $_inetnum);
	}
	/**
	 * Get inetnum
	 * @return OvhTyperipeInetnumStruct
	 */
	public function getInetnum()
	{
		return $this->inetnum;
	}
	/**
	 * Set organisation
	 * @param ripeOrganisationStruct organisation
	 * @return ripeOrganisationStruct
	 */
	public function setOrganisation($_organisation)
	{
		return ($this->organisation = $_organisation);
	}
	/**
	 * Get organisation
	 * @return OvhTyperipeOrganisationStruct
	 */
	public function getOrganisation()
	{
		return $this->organisation;
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