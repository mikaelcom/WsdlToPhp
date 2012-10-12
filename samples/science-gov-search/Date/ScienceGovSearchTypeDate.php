<?php
/**
 * Class file for ScienceGovSearchTypeDate
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeDate
 * @date 13/10/2012
 */
class ScienceGovSearchTypeDate extends ScienceGovSearchWsdlClass
{
	/**
	 * The type
	 * Meta informations :
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeDateType
	 */
	public $type;
	/**
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * The original
	 * @var string
	 */
	public $original;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeDateType type
	 * @param string value
	 * @param string original
	 * @return ScienceGovSearchTypeDate
	 */
	public function __construct($_type = null,$_value = null,$_original = null)
	{
		parent::__construct(array('type'=>$_type,'value'=>$_value,'original'=>$_original));
	}
	/**
	 * Set type
	 * @param DateType type
	 * @return DateType
	 */
	public function setType($_type)
	{
		return ($this->type = ScienceGovSearchTypeDateType::valueIsValid($_type)?$_type:null);
	}
	/**
	 * Get type
	 * @return ScienceGovSearchTypeDateType
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
	 * Set original
	 * @param string original
	 * @return string
	 */
	public function setOriginal($_original)
	{
		return ($this->original = $_original);
	}
	/**
	 * Get original
	 * @return string
	 */
	public function getOriginal()
	{
		return $this->original;
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