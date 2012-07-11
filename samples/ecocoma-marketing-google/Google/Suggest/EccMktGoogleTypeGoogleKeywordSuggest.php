<?php
/**
 * Class file for EccMktGoogleTypeGoogleKeywordSuggest
 * @date 03/07/2012
 */
/**
 * Class EccMktGoogleTypeGoogleKeywordSuggest
 * @date 03/07/2012
 */
class EccMktGoogleTypeGoogleKeywordSuggest extends EccMktGoogleWsdlClass
{
	/**
	 * The Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Result;
	/**
	 * Constructor
	 * @param string Result
	 * @return EccMktGoogleTypeGoogleKeywordSuggest
	 */
	public function __construct($_Result = null)
	{
		parent::__construct(array('Result'=>$_Result));
	}
	/**
	 * Set Result
	 * @param string Result
	 * @return string
	 */
	public function setResult($_Result)
	{
		return ($this->Result = $_Result);
	}
	/**
	 * Get Result
	 * @return string
	 */
	public function getResult()
	{
		return $this->Result;
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