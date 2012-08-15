<?php
/**
 * Class file for BioIDWSTypeSample
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeSample
 * @date 15/08/2012
 */
class BioIDWSTypeSample extends BioIDWSWsdlClass
{
	/**
	 * The Data
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var base64Binary
	 */
	public $Data;
	/**
	 * The Trait
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var Trait
	 */
	public $Trait;
	/**
	 * Constructor
	 * @param base64Binary Data
	 * @param Trait Trait
	 * @return BioIDWSTypeSample
	 */
	public function __construct($_Data = null,$_Trait = null)
	{
		parent::__construct(array('Data'=>$_Data,'Trait'=>$_Trait));
	}
	/**
	 * Set Data
	 * @param base64Binary Data
	 * @return base64Binary
	 */
	public function setData($_Data)
	{
		return ($this->Data = $_Data);
	}
	/**
	 * Get Data
	 * @return base64Binary
	 */
	public function getData()
	{
		return $this->Data;
	}
	/**
	 * Set Trait
	 * @param Trait Trait
	 * @return Trait
	 */
	public function setTrait($_Trait)
	{
		return ($this->Trait = $_Trait);
	}
	/**
	 * Get Trait
	 * @return Trait
	 */
	public function getTrait()
	{
		return $this->Trait;
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