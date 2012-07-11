<?php
/**
 * Class file for UsgsGazettteerTypeSearchLocalNameResponse
 * @date 08/07/2012
 */
/**
 * Class UsgsGazettteerTypeSearchLocalNameResponse
 * @date 08/07/2012
 */
class UsgsGazettteerTypeSearchLocalNameResponse extends UsgsGazettteerWsdlClass
{
	/**
	 * The searchLocalNameResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $searchLocalNameResult;
	/**
	 * Constructor
	 * @param string searchLocalNameResult
	 * @return UsgsGazettteerTypeSearchLocalNameResponse
	 */
	public function __construct($_searchLocalNameResult = null)
	{
		parent::__construct(array('searchLocalNameResult'=>$_searchLocalNameResult));
	}
	/**
	 * Set searchLocalNameResult
	 * @param string searchLocalNameResult
	 * @return string
	 */
	public function setSearchLocalNameResult($_searchLocalNameResult)
	{
		return ($this->searchLocalNameResult = $_searchLocalNameResult);
	}
	/**
	 * Get searchLocalNameResult
	 * @return string
	 */
	public function getSearchLocalNameResult()
	{
		return $this->searchLocalNameResult;
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