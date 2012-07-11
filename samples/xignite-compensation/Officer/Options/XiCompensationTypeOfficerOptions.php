<?php
/**
 * Class file for XiCompensationTypeOfficerOptions
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeOfficerOptions
 * @date 08/07/2012
 */
class XiCompensationTypeOfficerOptions extends XiCompensationTypeCommon
{
	/**
	 * The OfficerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OfficerID;
	/**
	 * The Officer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeOfficer
	 */
	public $Officer;
	/**
	 * The OptionsGranted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeArrayOfOptionGranted
	 */
	public $OptionsGranted;
	/**
	 * The OptionsExercised
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeArrayOfOptionExercised
	 */
	public $OptionsExercised;
	/**
	 * Constructor
	 * @param string OfficerID
	 * @param XiCompensationTypeOfficer Officer
	 * @param XiCompensationTypeArrayOfOptionGranted OptionsGranted
	 * @param XiCompensationTypeArrayOfOptionExercised OptionsExercised
	 * @return XiCompensationTypeOfficerOptions
	 */
	public function __construct($_OfficerID = null,$_Officer = null,$_OptionsGranted = null,$_OptionsExercised = null)
	{
		XiCompensationWsdlClass::__construct(array('OfficerID'=>$_OfficerID,'Officer'=>$_Officer,'OptionsGranted'=>new XiCompensationTypeArrayOfOptionGranted($_OptionsGranted),'OptionsExercised'=>new XiCompensationTypeArrayOfOptionExercised($_OptionsExercised)));
	}
	/**
	 * Set OfficerID
	 * @param string OfficerID
	 * @return string
	 */
	public function setOfficerID($_OfficerID)
	{
		return ($this->OfficerID = $_OfficerID);
	}
	/**
	 * Get OfficerID
	 * @return string
	 */
	public function getOfficerID()
	{
		return $this->OfficerID;
	}
	/**
	 * Set Officer
	 * @param Officer Officer
	 * @return Officer
	 */
	public function setOfficer($_Officer)
	{
		return ($this->Officer = $_Officer);
	}
	/**
	 * Get Officer
	 * @return XiCompensationTypeOfficer
	 */
	public function getOfficer()
	{
		return $this->Officer;
	}
	/**
	 * Set OptionsGranted
	 * @param ArrayOfOptionGranted OptionsGranted
	 * @return ArrayOfOptionGranted
	 */
	public function setOptionsGranted($_OptionsGranted)
	{
		return ($this->OptionsGranted = $_OptionsGranted);
	}
	/**
	 * Get OptionsGranted
	 * @return XiCompensationTypeArrayOfOptionGranted
	 */
	public function getOptionsGranted()
	{
		return $this->OptionsGranted;
	}
	/**
	 * Set OptionsExercised
	 * @param ArrayOfOptionExercised OptionsExercised
	 * @return ArrayOfOptionExercised
	 */
	public function setOptionsExercised($_OptionsExercised)
	{
		return ($this->OptionsExercised = $_OptionsExercised);
	}
	/**
	 * Get OptionsExercised
	 * @return XiCompensationTypeArrayOfOptionExercised
	 */
	public function getOptionsExercised()
	{
		return $this->OptionsExercised;
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