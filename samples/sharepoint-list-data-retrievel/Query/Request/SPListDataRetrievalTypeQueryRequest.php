<?php
/**
 * Class file for SPListDataRetrievalTypeQueryRequest
 * @date 06/07/2012
 */
/**
 * Class SPListDataRetrievalTypeQueryRequest
 * @date 06/07/2012
 */
class SPListDataRetrievalTypeQueryRequest extends SPListDataRetrievalWsdlClass
{
	/**
	 * The dsQuery
	 * @var SPListDataRetrievalTypeDSQuery
	 */
	public $dsQuery;
	/**
	 * The ptQuery
	 * @var SPListDataRetrievalTypePTQuery
	 */
	public $ptQuery;
	/**
	 * Constructor
	 * @param SPListDataRetrievalTypeDSQuery dsQuery
	 * @param SPListDataRetrievalTypePTQuery ptQuery
	 * @return SPListDataRetrievalTypeQueryRequest
	 */
	public function __construct($_dsQuery = null,$_ptQuery = null)
	{
		parent::__construct(array('dsQuery'=>$_dsQuery,'ptQuery'=>$_ptQuery));
	}
	/**
	 * Set dsQuery
	 * @param DSQuery dsQuery
	 * @return DSQuery
	 */
	public function setDsQuery($_dsQuery)
	{
		return ($this->dsQuery = $_dsQuery);
	}
	/**
	 * Get dsQuery
	 * @return SPListDataRetrievalTypeDSQuery
	 */
	public function getDsQuery()
	{
		return $this->dsQuery;
	}
	/**
	 * Set ptQuery
	 * @param PTQuery ptQuery
	 * @return PTQuery
	 */
	public function setPtQuery($_ptQuery)
	{
		return ($this->ptQuery = $_ptQuery);
	}
	/**
	 * Get ptQuery
	 * @return SPListDataRetrievalTypePTQuery
	 */
	public function getPtQuery()
	{
		return $this->ptQuery;
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