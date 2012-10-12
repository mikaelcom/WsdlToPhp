<?php
/**
 * Class file for ScienceGovSearchTypeAuthor
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeAuthor
 * @date 13/10/2012
 */
class ScienceGovSearchTypeAuthor extends ScienceGovSearchWsdlClass
{
	/**
	 * The type
	 * Meta informations :
	 * 	- nillable : true
	 * @var ScienceGovSearchTypeAuthorType
	 */
	public $type;
	/**
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * Constructor
	 * @param ScienceGovSearchTypeAuthorType type
	 * @param string value
	 * @return ScienceGovSearchTypeAuthor
	 */
	public function __construct($_type = null,$_value = null)
	{
		parent::__construct(array('type'=>$_type,'value'=>$_value));
	}
	/**
	 * Set type
	 * @param AuthorType type
	 * @return AuthorType
	 */
	public function setType($_type)
	{
		return ($this->type = ScienceGovSearchTypeAuthorType::valueIsValid($_type)?$_type:null);
	}
	/**
	 * Get type
	 * @return ScienceGovSearchTypeAuthorType
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