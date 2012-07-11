<?php
/**
 * Class file for XiFundamentalsTypeGetThreeFundamentalsResponse
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeGetThreeFundamentalsResponse
 * @date 08/07/2012
 */
class XiFundamentalsTypeGetThreeFundamentalsResponse extends XiFundamentalsWsdlClass
{
	/**
	 * The GetThreeFundamentalsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeMultiFundamental
	 */
	public $GetThreeFundamentalsResult;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeMultiFundamental GetThreeFundamentalsResult
	 * @return XiFundamentalsTypeGetThreeFundamentalsResponse
	 */
	public function __construct($_GetThreeFundamentalsResult = null)
	{
		parent::__construct(array('GetThreeFundamentalsResult'=>$_GetThreeFundamentalsResult));
	}
	/**
	 * Set GetThreeFundamentalsResult
	 * @param MultiFundamental GetThreeFundamentalsResult
	 * @return MultiFundamental
	 */
	public function setGetThreeFundamentalsResult($_GetThreeFundamentalsResult)
	{
		return ($this->GetThreeFundamentalsResult = $_GetThreeFundamentalsResult);
	}
	/**
	 * Get GetThreeFundamentalsResult
	 * @return XiFundamentalsTypeMultiFundamental
	 */
	public function getGetThreeFundamentalsResult()
	{
		return $this->GetThreeFundamentalsResult;
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