<?php
/**
 * Class file for YMailTypeSetUserData
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSetUserData
 * @date 02/07/2012
 */
class YMailTypeSetUserData extends YMailWsdlClass
{
	/**
	 * The setdata
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var YMailTypeSetData
	 */
	public $setdata;
	/**
	 * Constructor
	 * @param YMailTypeSetData setdata
	 * @return YMailTypeSetUserData
	 */
	public function __construct($_setdata)
	{
		parent::__construct(array('setdata'=>$_setdata));
	}
	/**
	 * Set setdata
	 * @param SetData setdata
	 * @return SetData
	 */
	public function setSetdata($_setdata)
	{
		return ($this->setdata = $_setdata);
	}
	/**
	 * Get setdata
	 * @return YMailTypeSetData
	 */
	public function getSetdata()
	{
		return $this->setdata;
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