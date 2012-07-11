<?php
/**
 * Class file for XWeb1003TypeEmployment_Information
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeEmployment_Information
 * @date 09/07/2012
 */
class XWeb1003TypeEmployment_Information extends XWeb1003WsdlClass
{
	/**
	 * The Years_In_Profession
	 * @var Years_In_Profession
	 */
	public $Years_In_Profession;
	/**
	 * The Employment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 3
	 * @var XWeb1003TypeEmploymentType
	 */
	public $Employment;
	/**
	 * Constructor
	 * @param Years_In_Profession Years_In_Profession
	 * @param XWeb1003TypeEmploymentType Employment
	 * @return XWeb1003TypeEmployment_Information
	 */
	public function __construct($_Years_In_Profession = null,$_Employment = null)
	{
		parent::__construct(array('Years_In_Profession'=>$_Years_In_Profession,'Employment'=>$_Employment));
	}
	/**
	 * Set Years_In_Profession
	 * @param Years_In_Profession Years_In_Profession
	 * @return Years_In_Profession
	 */
	public function setYears_In_Profession($_Years_In_Profession)
	{
		return ($this->Years_In_Profession = $_Years_In_Profession);
	}
	/**
	 * Get Years_In_Profession
	 * @return Years_In_Profession
	 */
	public function getYears_In_Profession()
	{
		return $this->Years_In_Profession;
	}
	/**
	 * Set Employment
	 * @param EmploymentType Employment
	 * @return EmploymentType
	 */
	public function setEmployment($_Employment)
	{
		return ($this->Employment = $_Employment);
	}
	/**
	 * Get Employment
	 * @return XWeb1003TypeEmploymentType
	 */
	public function getEmployment()
	{
		return $this->Employment;
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