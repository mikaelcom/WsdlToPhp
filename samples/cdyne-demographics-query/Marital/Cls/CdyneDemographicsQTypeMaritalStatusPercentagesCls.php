<?php
/**
 * Class file for CdyneDemographicsQTypeMaritalStatusPercentagesCls
 * @date 03/07/2012
 */
/**
 * Class CdyneDemographicsQTypeMaritalStatusPercentagesCls
 * @date 03/07/2012
 */
class CdyneDemographicsQTypeMaritalStatusPercentagesCls extends CdyneDemographicsQWsdlClass
{
	/**
	 * The NeverMarried
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $NeverMarried;
	/**
	 * The Married
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Married;
	/**
	 * The Separated
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Separated;
	/**
	 * The MarriedOther
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $MarriedOther;
	/**
	 * The Widowed
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Widowed;
	/**
	 * The Divorced
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var decimal
	 */
	public $Divorced;
	/**
	 * Constructor
	 * @param decimal NeverMarried
	 * @param decimal Married
	 * @param decimal Separated
	 * @param decimal MarriedOther
	 * @param decimal Widowed
	 * @param decimal Divorced
	 * @return CdyneDemographicsQTypeMaritalStatusPercentagesCls
	 */
	public function __construct($_NeverMarried,$_Married,$_Separated,$_MarriedOther,$_Widowed,$_Divorced)
	{
		parent::__construct(array('NeverMarried'=>$_NeverMarried,'Married'=>$_Married,'Separated'=>$_Separated,'MarriedOther'=>$_MarriedOther,'Widowed'=>$_Widowed,'Divorced'=>$_Divorced));
	}
	/**
	 * Set NeverMarried
	 * @param decimal NeverMarried
	 * @return decimal
	 */
	public function setNeverMarried($_NeverMarried)
	{
		return ($this->NeverMarried = $_NeverMarried);
	}
	/**
	 * Get NeverMarried
	 * @return decimal
	 */
	public function getNeverMarried()
	{
		return $this->NeverMarried;
	}
	/**
	 * Set Married
	 * @param decimal Married
	 * @return decimal
	 */
	public function setMarried($_Married)
	{
		return ($this->Married = $_Married);
	}
	/**
	 * Get Married
	 * @return decimal
	 */
	public function getMarried()
	{
		return $this->Married;
	}
	/**
	 * Set Separated
	 * @param decimal Separated
	 * @return decimal
	 */
	public function setSeparated($_Separated)
	{
		return ($this->Separated = $_Separated);
	}
	/**
	 * Get Separated
	 * @return decimal
	 */
	public function getSeparated()
	{
		return $this->Separated;
	}
	/**
	 * Set MarriedOther
	 * @param decimal MarriedOther
	 * @return decimal
	 */
	public function setMarriedOther($_MarriedOther)
	{
		return ($this->MarriedOther = $_MarriedOther);
	}
	/**
	 * Get MarriedOther
	 * @return decimal
	 */
	public function getMarriedOther()
	{
		return $this->MarriedOther;
	}
	/**
	 * Set Widowed
	 * @param decimal Widowed
	 * @return decimal
	 */
	public function setWidowed($_Widowed)
	{
		return ($this->Widowed = $_Widowed);
	}
	/**
	 * Get Widowed
	 * @return decimal
	 */
	public function getWidowed()
	{
		return $this->Widowed;
	}
	/**
	 * Set Divorced
	 * @param decimal Divorced
	 * @return decimal
	 */
	public function setDivorced($_Divorced)
	{
		return ($this->Divorced = $_Divorced);
	}
	/**
	 * Get Divorced
	 * @return decimal
	 */
	public function getDivorced()
	{
		return $this->Divorced;
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