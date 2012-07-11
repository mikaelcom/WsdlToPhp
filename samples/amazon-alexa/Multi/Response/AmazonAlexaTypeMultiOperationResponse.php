<?php
/**
 * Class file for AmazonAlexaTypeMultiOperationResponse
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeMultiOperationResponse
 * @date 10/07/2012
 */
class AmazonAlexaTypeMultiOperationResponse extends AmazonAlexaWsdlClass
{
	/**
	 * The OperationRequest
	 * @var AmazonAlexaTypeOperationRequest
	 */
	public $OperationRequest;
	/**
	 * The CategoryBrowseResponse
	 * @var AmazonAlexaTypeCategoryBrowseResponse
	 */
	public $CategoryBrowseResponse;
	/**
	 * The CategoryListingsResponse
	 * @var AmazonAlexaTypeCategoryListingsResponse
	 */
	public $CategoryListingsResponse;
	/**
	 * The CrawlResponse
	 * @var AmazonAlexaTypeCrawlResponse
	 */
	public $CrawlResponse;
	/**
	 * The SitesLinkingInResponse
	 * @var AmazonAlexaTypeSitesLinkingInResponse
	 */
	public $SitesLinkingInResponse;
	/**
	 * The TrafficHistoryResponse
	 * @var AmazonAlexaTypeTrafficHistoryResponse
	 */
	public $TrafficHistoryResponse;
	/**
	 * The UrlInfoResponse
	 * @var AmazonAlexaTypeUrlInfoResponse
	 */
	public $UrlInfoResponse;
	/**
	 * The WebMapResponse
	 * @var AmazonAlexaTypeWebMapResponse
	 */
	public $WebMapResponse;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeOperationRequest OperationRequest
	 * @param AmazonAlexaTypeCategoryBrowseResponse CategoryBrowseResponse
	 * @param AmazonAlexaTypeCategoryListingsResponse CategoryListingsResponse
	 * @param AmazonAlexaTypeCrawlResponse CrawlResponse
	 * @param AmazonAlexaTypeSitesLinkingInResponse SitesLinkingInResponse
	 * @param AmazonAlexaTypeTrafficHistoryResponse TrafficHistoryResponse
	 * @param AmazonAlexaTypeUrlInfoResponse UrlInfoResponse
	 * @param AmazonAlexaTypeWebMapResponse WebMapResponse
	 * @return AmazonAlexaTypeMultiOperationResponse
	 */
	public function __construct($_OperationRequest = null,$_CategoryBrowseResponse = null,$_CategoryListingsResponse = null,$_CrawlResponse = null,$_SitesLinkingInResponse = null,$_TrafficHistoryResponse = null,$_UrlInfoResponse = null,$_WebMapResponse = null)
	{
		parent::__construct(array('OperationRequest'=>$_OperationRequest,'CategoryBrowseResponse'=>$_CategoryBrowseResponse,'CategoryListingsResponse'=>$_CategoryListingsResponse,'CrawlResponse'=>$_CrawlResponse,'SitesLinkingInResponse'=>$_SitesLinkingInResponse,'TrafficHistoryResponse'=>$_TrafficHistoryResponse,'UrlInfoResponse'=>$_UrlInfoResponse,'WebMapResponse'=>$_WebMapResponse));
	}
	/**
	 * Set OperationRequest
	 * @param OperationRequest OperationRequest
	 * @return OperationRequest
	 */
	public function setOperationRequest($_OperationRequest)
	{
		return ($this->OperationRequest = $_OperationRequest);
	}
	/**
	 * Get OperationRequest
	 * @return AmazonAlexaTypeOperationRequest
	 */
	public function getOperationRequest()
	{
		return $this->OperationRequest;
	}
	/**
	 * Set CategoryBrowseResponse
	 * @param CategoryBrowseResponse CategoryBrowseResponse
	 * @return CategoryBrowseResponse
	 */
	public function setCategoryBrowseResponse($_CategoryBrowseResponse)
	{
		return ($this->CategoryBrowseResponse = $_CategoryBrowseResponse);
	}
	/**
	 * Get CategoryBrowseResponse
	 * @return AmazonAlexaTypeCategoryBrowseResponse
	 */
	public function getCategoryBrowseResponse()
	{
		return $this->CategoryBrowseResponse;
	}
	/**
	 * Set CategoryListingsResponse
	 * @param CategoryListingsResponse CategoryListingsResponse
	 * @return CategoryListingsResponse
	 */
	public function setCategoryListingsResponse($_CategoryListingsResponse)
	{
		return ($this->CategoryListingsResponse = $_CategoryListingsResponse);
	}
	/**
	 * Get CategoryListingsResponse
	 * @return AmazonAlexaTypeCategoryListingsResponse
	 */
	public function getCategoryListingsResponse()
	{
		return $this->CategoryListingsResponse;
	}
	/**
	 * Set CrawlResponse
	 * @param CrawlResponse CrawlResponse
	 * @return CrawlResponse
	 */
	public function setCrawlResponse($_CrawlResponse)
	{
		return ($this->CrawlResponse = $_CrawlResponse);
	}
	/**
	 * Get CrawlResponse
	 * @return AmazonAlexaTypeCrawlResponse
	 */
	public function getCrawlResponse()
	{
		return $this->CrawlResponse;
	}
	/**
	 * Set SitesLinkingInResponse
	 * @param SitesLinkingInResponse SitesLinkingInResponse
	 * @return SitesLinkingInResponse
	 */
	public function setSitesLinkingInResponse($_SitesLinkingInResponse)
	{
		return ($this->SitesLinkingInResponse = $_SitesLinkingInResponse);
	}
	/**
	 * Get SitesLinkingInResponse
	 * @return AmazonAlexaTypeSitesLinkingInResponse
	 */
	public function getSitesLinkingInResponse()
	{
		return $this->SitesLinkingInResponse;
	}
	/**
	 * Set TrafficHistoryResponse
	 * @param TrafficHistoryResponse TrafficHistoryResponse
	 * @return TrafficHistoryResponse
	 */
	public function setTrafficHistoryResponse($_TrafficHistoryResponse)
	{
		return ($this->TrafficHistoryResponse = $_TrafficHistoryResponse);
	}
	/**
	 * Get TrafficHistoryResponse
	 * @return AmazonAlexaTypeTrafficHistoryResponse
	 */
	public function getTrafficHistoryResponse()
	{
		return $this->TrafficHistoryResponse;
	}
	/**
	 * Set UrlInfoResponse
	 * @param UrlInfoResponse UrlInfoResponse
	 * @return UrlInfoResponse
	 */
	public function setUrlInfoResponse($_UrlInfoResponse)
	{
		return ($this->UrlInfoResponse = $_UrlInfoResponse);
	}
	/**
	 * Get UrlInfoResponse
	 * @return AmazonAlexaTypeUrlInfoResponse
	 */
	public function getUrlInfoResponse()
	{
		return $this->UrlInfoResponse;
	}
	/**
	 * Set WebMapResponse
	 * @param WebMapResponse WebMapResponse
	 * @return WebMapResponse
	 */
	public function setWebMapResponse($_WebMapResponse)
	{
		return ($this->WebMapResponse = $_WebMapResponse);
	}
	/**
	 * Get WebMapResponse
	 * @return AmazonAlexaTypeWebMapResponse
	 */
	public function getWebMapResponse()
	{
		return $this->WebMapResponse;
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