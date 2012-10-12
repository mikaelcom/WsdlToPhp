<?php
/**
 * Class file for ScienceGovSearchTypeSource
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeSource
 * @date 13/10/2012
 */
class ScienceGovSearchTypeSource extends ScienceGovSearchWsdlClass
{
	/**
	 * The type
	 * Meta informations :
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeSourceType
	 */
	public $type;
	/**
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeSourceType type
	 * @param string value
	 * @return ScienceGovSearchTypeSource
	 */
	public function __construct($_type = null,$_value = null)
	{
		parent::__construct(array('type'=>$_type,'value'=>$_value));
	}
	/**
	 * Set type
	 * @param SourceType type
	 * @return SourceType
	 */
	public function setType($_type)
	{
		return ($this->type = ScienceGovSearchTypeSourceType::valueIsValid($_type)?$_type:null);
	}
	/**
	 * Get type
	 * @return ScienceGovSearchTypeSourceType
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set value
	 * @param string value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Get value
	 * @return string
	 */
	public function getValue()
	{
		return $this->value;
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