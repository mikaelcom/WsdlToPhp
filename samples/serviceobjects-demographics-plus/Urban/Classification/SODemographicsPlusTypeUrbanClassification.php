<?php
/**
 * Class file for SODemographicsPlusTypeUrbanClassification
 * @date 06/07/2012
 */
/**
 * Class SODemographicsPlusTypeUrbanClassification
 * @date 06/07/2012
 */
class SODemographicsPlusTypeUrbanClassification extends SODemographicsPlusWsdlClass
{
	/**
	 * The Code
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Code;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * The KilometersToUrbanCenter
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $KilometersToUrbanCenter;
	/**
	 * Constructor
	 * @param string Code
	 * @param string Description
	 * @param int KilometersToUrbanCenter
	 * @return SODemographicsPlusTypeUrbanClassification
	 */
	public function __construct($_Code = null,$_Description = null,$_KilometersToUrbanCenter)
	{
		parent::__construct(array('Code'=>$_Code,'Description'=>$_Description,'KilometersToUrbanCenter'=>$_KilometersToUrbanCenter));
	}
	/**
	 * Set Code
	 * @param string Code
	 * @return string
	 */
	public function setCode($_Code)
	{
		return ($this->Code = $_Code);
	}
	/**
	 * Get Code
	 * @return string
	 */
	public function getCode()
	{
		return $this->Code;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set KilometersToUrbanCenter
	 * @param int KilometersToUrbanCenter
	 * @return int
	 */
	public function setKilometersToUrbanCenter($_KilometersToUrbanCenter)
	{
		return ($this->KilometersToUrbanCenter = $_KilometersToUrbanCenter);
	}
	/**
	 * Get KilometersToUrbanCenter
	 * @return int
	 */
	public function getKilometersToUrbanCenter()
	{
		return $this->KilometersToUrbanCenter;
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