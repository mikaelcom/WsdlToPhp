<?php
/**
 * Class file for UsgsGazettteerTypeShowGazetteerDataResponse
 * @date 08/07/2012
 */
/**
 * Class UsgsGazettteerTypeShowGazetteerDataResponse
 * @date 08/07/2012
 */
class UsgsGazettteerTypeShowGazetteerDataResponse extends UsgsGazettteerWsdlClass
{
	/**
	 * The showGazetteerDataResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $showGazetteerDataResult;
	/**
	 * Constructor
	 * @param string showGazetteerDataResult
	 * @return UsgsGazettteerTypeShowGazetteerDataResponse
	 */
	public function __construct($_showGazetteerDataResult = null)
	{
		parent::__construct(array('showGazetteerDataResult'=>$_showGazetteerDataResult));
	}
	/**
	 * Set showGazetteerDataResult
	 * @param string showGazetteerDataResult
	 * @return string
	 */
	public function setShowGazetteerDataResult($_showGazetteerDataResult)
	{
		return ($this->showGazetteerDataResult = $_showGazetteerDataResult);
	}
	/**
	 * Get showGazetteerDataResult
	 * @return string
	 */
	public function getShowGazetteerDataResult()
	{
		return $this->showGazetteerDataResult;
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