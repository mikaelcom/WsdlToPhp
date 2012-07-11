<?php
/**
 * Class file for OvhTypeServiceListPaginatedStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeServiceListPaginatedStruct
 * @date 02/07/2012
 */
class OvhTypeServiceListPaginatedStruct extends OvhWsdlClass
{
	/**
	 * The total
	 * @var int
	 */
	public $total;
	/**
	 * The results
	 * @var OvhTypeMyArrayOfServiceLightStructType
	 */
	public $results;
	/**
	 * Constructor
	 * @param int total
	 * @param OvhTypeMyArrayOfServiceLightStructType results
	 * @return OvhTypeServiceListPaginatedStruct
	 */
	public function __construct($_total = null,$_results = null)
	{
		parent::__construct(array('total'=>$_total,'results'=>new OvhTypeMyArrayOfServiceLightStructType($_results)));
	}
	/**
	 * Set total
	 * @param int total
	 * @return int
	 */
	public function setTotal($_total)
	{
		return ($this->total = $_total);
	}
	/**
	 * Get total
	 * @return int
	 */
	public function getTotal()
	{
		return $this->total;
	}
	/**
	 * Set results
	 * @param MyArrayOfServiceLightStructType results
	 * @return MyArrayOfServiceLightStructType
	 */
	public function setResults($_results)
	{
		return ($this->results = $_results);
	}
	/**
	 * Get results
	 * @return OvhTypeMyArrayOfServiceLightStructType
	 */
	public function getResults()
	{
		return $this->results;
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