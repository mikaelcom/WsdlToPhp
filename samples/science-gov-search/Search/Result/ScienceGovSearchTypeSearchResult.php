<?php
/**
 * Class file for ScienceGovSearchTypeSearchResult
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeSearchResult
 * @date 13/10/2012
 */
class ScienceGovSearchTypeSearchResult extends ScienceGovSearchWsdlClass
{
	/**
	 * The resultId
	 * @var string
	 */
	public $resultId;
	/**
	 * The searchId
	 * @var string
	 */
	public $searchId;
	/**
	 * The collectionCode
	 * @var string
	 */
	public $collectionCode;
	/**
	 * The collectionSequence
	 * @var int
	 */
	public $collectionSequence;
	/**
	 * The quickRank
	 * @var double
	 */
	public $quickRank;
	/**
	 * The metaRank
	 * @var double
	 */
	public $metaRank;
	/**
	 * The deepRank
	 * @var double
	 */
	public $deepRank;
	/**
	 * The metaDataUrl
	 * @var string
	 */
	public $metaDataUrl;
	/**
	 * The fullTextUrl
	 * @var string
	 */
	public $fullTextUrl;
	/**
	 * The deepRankUrl
	 * @var string
	 */
	public $deepRankUrl;
	/**
	 * The imageUrl
	 * @var string
	 */
	public $imageUrl;
	/**
	 * The title
	 * @var string
	 */
	public $title;
	/**
	 * The snippet
	 * @var string
	 */
	public $snippet;
	/**
	 * The abstract
	 * @var string
	 */
	public $abstract;
	/**
	 * The keywords
	 * @var string
	 */
	public $keywords;
	/**
	 * The cookies
	 * @var ScienceGovSearchTypeCookie
	 */
	public $cookies;
	/**
	 * The additionalFields
	 * @var ScienceGovSearchTypeResultField
	 */
	public $additionalFields;
	/**
	 * The affiliations
	 * @var string
	 */
	public $affiliations;
	/**
	 * The authors
	 * @var ScienceGovSearchTypeAuthor
	 */
	public $authors;
	/**
	 * The dates
	 * @var ScienceGovSearchTypeDate
	 */
	public $dates;
	/**
	 * The dedupOrder
	 * @var int
	 */
	public $dedupOrder;
	/**
	 * The doi
	 * @var string
	 */
	public $doi;
	/**
	 * The isbn
	 * @var string
	 */
	public $isbn;
	/**
	 * The issn
	 * @var string
	 */
	public $issn;
	/**
	 * The fullTextSnippet
	 * @var string
	 */
	public $fullTextSnippet;
	/**
	 * The rank
	 * @var double
	 */
	public $rank;
	/**
	 * The sources
	 * @var ScienceGovSearchTypeSource
	 */
	public $sources;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The volume
	 * @var string
	 */
	public $volume;
	/**
	 * The issue
	 * @var string
	 */
	public $issue;
	/**
	 * The pages
	 * @var string
	 */
	public $pages;
	/**
	 * The filters
	 * @var ScienceGovSearchTypeFilterType
	 */
	public $filters;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The documentType
	 * @var string
	 */
	public $documentType;
	/**
	 * The documentFormat
	 * @var string
	 */
	public $documentFormat;
	/**
	 * The peerReviewed
	 * @var boolean
	 */
	public $peerReviewed;
	/**
	 * The libraryRecord
	 * @var ScienceGovSearchTypeLibraryRecord
	 */
	public $libraryRecord;
	/**
	 * Constructor
	 * @param string resultId
	 * @param string searchId
	 * @param string collectionCode
	 * @param int collectionSequence
	 * @param double quickRank
	 * @param double metaRank
	 * @param double deepRank
	 * @param string metaDataUrl
	 * @param string fullTextUrl
	 * @param string deepRankUrl
	 * @param string imageUrl
	 * @param string title
	 * @param string snippet
	 * @param string abstract
	 * @param string keywords
	 * @param ScienceGovSearchTypeCookie cookies
	 * @param ScienceGovSearchTypeResultField additionalFields
	 * @param string affiliations
	 * @param ScienceGovSearchTypeAuthor authors
	 * @param ScienceGovSearchTypeDate dates
	 * @param int dedupOrder
	 * @param string doi
	 * @param string isbn
	 * @param string issn
	 * @param string fullTextSnippet
	 * @param double rank
	 * @param ScienceGovSearchTypeSource sources
	 * @param string url
	 * @param string volume
	 * @param string issue
	 * @param string pages
	 * @param ScienceGovSearchTypeFilterType filters
	 * @param string language
	 * @param string documentType
	 * @param string documentFormat
	 * @param boolean peerReviewed
	 * @param ScienceGovSearchTypeLibraryRecord libraryRecord
	 * @return ScienceGovSearchTypeSearchResult
	 */
	public function __construct($_resultId = null,$_searchId = null,$_collectionCode = null,$_collectionSequence = null,$_quickRank = null,$_metaRank = null,$_deepRank = null,$_metaDataUrl = null,$_fullTextUrl = null,$_deepRankUrl = null,$_imageUrl = null,$_title = null,$_snippet = null,$_abstract = null,$_keywords = null,$_cookies = null,$_additionalFields = null,$_affiliations = null,$_authors = null,$_dates = null,$_dedupOrder = null,$_doi = null,$_isbn = null,$_issn = null,$_fullTextSnippet = null,$_rank = null,$_sources = null,$_url = null,$_volume = null,$_issue = null,$_pages = null,$_filters = null,$_language = null,$_documentType = null,$_documentFormat = null,$_peerReviewed = null,$_libraryRecord = null)
	{
		parent::__construct(array('resultId'=>$_resultId,'searchId'=>$_searchId,'collectionCode'=>$_collectionCode,'collectionSequence'=>$_collectionSequence,'quickRank'=>$_quickRank,'metaRank'=>$_metaRank,'deepRank'=>$_deepRank,'metaDataUrl'=>$_metaDataUrl,'fullTextUrl'=>$_fullTextUrl,'deepRankUrl'=>$_deepRankUrl,'imageUrl'=>$_imageUrl,'title'=>$_title,'snippet'=>$_snippet,'abstract'=>$_abstract,'keywords'=>$_keywords,'cookies'=>$_cookies,'additionalFields'=>$_additionalFields,'affiliations'=>$_affiliations,'authors'=>$_authors,'dates'=>$_dates,'dedupOrder'=>$_dedupOrder,'doi'=>$_doi,'isbn'=>$_isbn,'issn'=>$_issn,'fullTextSnippet'=>$_fullTextSnippet,'rank'=>$_rank,'sources'=>$_sources,'url'=>$_url,'volume'=>$_volume,'issue'=>$_issue,'pages'=>$_pages,'filters'=>$_filters,'language'=>$_language,'documentType'=>$_documentType,'documentFormat'=>$_documentFormat,'peerReviewed'=>$_peerReviewed,'libraryRecord'=>$_libraryRecord));
	}
	/**
	 * Set resultId
	 * @param string resultId
	 * @return string
	 */
	public function setResultId($_resultId)
	{
		return ($this->resultId = $_resultId);
	}
	/**
	 * Get resultId
	 * @return string
	 */
	public function getResultId()
	{
		return $this->resultId;
	}
	/**
	 * Set searchId
	 * @param string searchId
	 * @return string
	 */
	public function setSearchId($_searchId)
	{
		return ($this->searchId = $_searchId);
	}
	/**
	 * Get searchId
	 * @return string
	 */
	public function getSearchId()
	{
		return $this->searchId;
	}
	/**
	 * Set collectionCode
	 * @param string collectionCode
	 * @return string
	 */
	public function setCollectionCode($_collectionCode)
	{
		return ($this->collectionCode = $_collectionCode);
	}
	/**
	 * Get collectionCode
	 * @return string
	 */
	public function getCollectionCode()
	{
		return $this->collectionCode;
	}
	/**
	 * Set collectionSequence
	 * @param int collectionSequence
	 * @return int
	 */
	public function setCollectionSequence($_collectionSequence)
	{
		return ($this->collectionSequence = $_collectionSequence);
	}
	/**
	 * Get collectionSequence
	 * @return int
	 */
	public function getCollectionSequence()
	{
		return $this->collectionSequence;
	}
	/**
	 * Set quickRank
	 * @param double quickRank
	 * @return double
	 */
	public function setQuickRank($_quickRank)
	{
		return ($this->quickRank = $_quickRank);
	}
	/**
	 * Get quickRank
	 * @return double
	 */
	public function getQuickRank()
	{
		return $this->quickRank;
	}
	/**
	 * Set metaRank
	 * @param double metaRank
	 * @return double
	 */
	public function setMetaRank($_metaRank)
	{
		return ($this->metaRank = $_metaRank);
	}
	/**
	 * Get metaRank
	 * @return double
	 */
	public function getMetaRank()
	{
		return $this->metaRank;
	}
	/**
	 * Set deepRank
	 * @param double deepRank
	 * @return double
	 */
	public function setDeepRank($_deepRank)
	{
		return ($this->deepRank = $_deepRank);
	}
	/**
	 * Get deepRank
	 * @return double
	 */
	public function getDeepRank()
	{
		return $this->deepRank;
	}
	/**
	 * Set metaDataUrl
	 * @param string metaDataUrl
	 * @return string
	 */
	public function setMetaDataUrl($_metaDataUrl)
	{
		return ($this->metaDataUrl = $_metaDataUrl);
	}
	/**
	 * Get metaDataUrl
	 * @return string
	 */
	public function getMetaDataUrl()
	{
		return $this->metaDataUrl;
	}
	/**
	 * Set fullTextUrl
	 * @param string fullTextUrl
	 * @return string
	 */
	public function setFullTextUrl($_fullTextUrl)
	{
		return ($this->fullTextUrl = $_fullTextUrl);
	}
	/**
	 * Get fullTextUrl
	 * @return string
	 */
	public function getFullTextUrl()
	{
		return $this->fullTextUrl;
	}
	/**
	 * Set deepRankUrl
	 * @param string deepRankUrl
	 * @return string
	 */
	public function setDeepRankUrl($_deepRankUrl)
	{
		return ($this->deepRankUrl = $_deepRankUrl);
	}
	/**
	 * Get deepRankUrl
	 * @return string
	 */
	public function getDeepRankUrl()
	{
		return $this->deepRankUrl;
	}
	/**
	 * Set imageUrl
	 * @param string imageUrl
	 * @return string
	 */
	public function setImageUrl($_imageUrl)
	{
		return ($this->imageUrl = $_imageUrl);
	}
	/**
	 * Get imageUrl
	 * @return string
	 */
	public function getImageUrl()
	{
		return $this->imageUrl;
	}
	/**
	 * Set title
	 * @param string title
	 * @return string
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}
	/**
	 * Set snippet
	 * @param string snippet
	 * @return string
	 */
	public function setSnippet($_snippet)
	{
		return ($this->snippet = $_snippet);
	}
	/**
	 * Get snippet
	 * @return string
	 */
	public function getSnippet()
	{
		return $this->snippet;
	}
	/**
	 * Set abstract
	 * @param string abstract
	 * @return string
	 */
	public function setAbstract($_abstract)
	{
		return ($this->abstract = $_abstract);
	}
	/**
	 * Get abstract
	 * @return string
	 */
	public function getAbstract()
	{
		return $this->abstract;
	}
	/**
	 * Set keywords
	 * @param string keywords
	 * @return string
	 */
	public function setKeywords($_keywords)
	{
		return ($this->keywords = $_keywords);
	}
	/**
	 * Get keywords
	 * @return string
	 */
	public function getKeywords()
	{
		return $this->keywords;
	}
	/**
	 * Set cookies
	 * @param Cookie cookies
	 * @return Cookie
	 */
	public function setCookies($_cookies)
	{
		return ($this->cookies = $_cookies);
	}
	/**
	 * Get cookies
	 * @return ScienceGovSearchTypeCookie
	 */
	public function getCookies()
	{
		return $this->cookies;
	}
	/**
	 * Set additionalFields
	 * @param ResultField additionalFields
	 * @return ResultField
	 */
	public function setAdditionalFields($_additionalFields)
	{
		return ($this->additionalFields = $_additionalFields);
	}
	/**
	 * Get additionalFields
	 * @return ScienceGovSearchTypeResultField
	 */
	public function getAdditionalFields()
	{
		return $this->additionalFields;
	}
	/**
	 * Set affiliations
	 * @param string affiliations
	 * @return string
	 */
	public function setAffiliations($_affiliations)
	{
		return ($this->affiliations = $_affiliations);
	}
	/**
	 * Get affiliations
	 * @return string
	 */
	public function getAffiliations()
	{
		return $this->affiliations;
	}
	/**
	 * Set authors
	 * @param Author authors
	 * @return Author
	 */
	public function setAuthors($_authors)
	{
		return ($this->authors = $_authors);
	}
	/**
	 * Get authors
	 * @return ScienceGovSearchTypeAuthor
	 */
	public function getAuthors()
	{
		return $this->authors;
	}
	/**
	 * Set dates
	 * @param Date dates
	 * @return Date
	 */
	public function setDates($_dates)
	{
		return ($this->dates = $_dates);
	}
	/**
	 * Get dates
	 * @return ScienceGovSearchTypeDate
	 */
	public function getDates()
	{
		return $this->dates;
	}
	/**
	 * Set dedupOrder
	 * @param int dedupOrder
	 * @return int
	 */
	public function setDedupOrder($_dedupOrder)
	{
		return ($this->dedupOrder = $_dedupOrder);
	}
	/**
	 * Get dedupOrder
	 * @return int
	 */
	public function getDedupOrder()
	{
		return $this->dedupOrder;
	}
	/**
	 * Set doi
	 * @param string doi
	 * @return string
	 */
	public function setDoi($_doi)
	{
		return ($this->doi = $_doi);
	}
	/**
	 * Get doi
	 * @return string
	 */
	public function getDoi()
	{
		return $this->doi;
	}
	/**
	 * Set isbn
	 * @param string isbn
	 * @return string
	 */
	public function setIsbn($_isbn)
	{
		return ($this->isbn = $_isbn);
	}
	/**
	 * Get isbn
	 * @return string
	 */
	public function getIsbn()
	{
		return $this->isbn;
	}
	/**
	 * Set issn
	 * @param string issn
	 * @return string
	 */
	public function setIssn($_issn)
	{
		return ($this->issn = $_issn);
	}
	/**
	 * Get issn
	 * @return string
	 */
	public function getIssn()
	{
		return $this->issn;
	}
	/**
	 * Set fullTextSnippet
	 * @param string fullTextSnippet
	 * @return string
	 */
	public function setFullTextSnippet($_fullTextSnippet)
	{
		return ($this->fullTextSnippet = $_fullTextSnippet);
	}
	/**
	 * Get fullTextSnippet
	 * @return string
	 */
	public function getFullTextSnippet()
	{
		return $this->fullTextSnippet;
	}
	/**
	 * Set rank
	 * @param double rank
	 * @return double
	 */
	public function setRank($_rank)
	{
		return ($this->rank = $_rank);
	}
	/**
	 * Get rank
	 * @return double
	 */
	public function getRank()
	{
		return $this->rank;
	}
	/**
	 * Set sources
	 * @param Source sources
	 * @return Source
	 */
	public function setSources($_sources)
	{
		return ($this->sources = $_sources);
	}
	/**
	 * Get sources
	 * @return ScienceGovSearchTypeSource
	 */
	public function getSources()
	{
		return $this->sources;
	}
	/**
	 * Set url
	 * @param string url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->url;
	}
	/**
	 * Set volume
	 * @param string volume
	 * @return string
	 */
	public function setVolume($_volume)
	{
		return ($this->volume = $_volume);
	}
	/**
	 * Get volume
	 * @return string
	 */
	public function getVolume()
	{
		return $this->volume;
	}
	/**
	 * Set issue
	 * @param string issue
	 * @return string
	 */
	public function setIssue($_issue)
	{
		return ($this->issue = $_issue);
	}
	/**
	 * Get issue
	 * @return string
	 */
	public function getIssue()
	{
		return $this->issue;
	}
	/**
	 * Set pages
	 * @param string pages
	 * @return string
	 */
	public function setPages($_pages)
	{
		return ($this->pages = $_pages);
	}
	/**
	 * Get pages
	 * @return string
	 */
	public function getPages()
	{
		return $this->pages;
	}
	/**
	 * Set filters
	 * @param FilterType filters
	 * @return FilterType
	 */
	public function setFilters($_filters)
	{
		return ($this->filters = ScienceGovSearchTypeFilterType::valueIsValid($_filters)?$_filters:null);
	}
	/**
	 * Get filters
	 * @return ScienceGovSearchTypeFilterType
	 */
	public function getFilters()
	{
		return $this->filters;
	}
	/**
	 * Set language
	 * @param string language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get language
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set documentType
	 * @param string documentType
	 * @return string
	 */
	public function setDocumentType($_documentType)
	{
		return ($this->documentType = $_documentType);
	}
	/**
	 * Get documentType
	 * @return string
	 */
	public function getDocumentType()
	{
		return $this->documentType;
	}
	/**
	 * Set documentFormat
	 * @param string documentFormat
	 * @return string
	 */
	public function setDocumentFormat($_documentFormat)
	{
		return ($this->documentFormat = $_documentFormat);
	}
	/**
	 * Get documentFormat
	 * @return string
	 */
	public function getDocumentFormat()
	{
		return $this->documentFormat;
	}
	/**
	 * Set peerReviewed
	 * @param boolean peerReviewed
	 * @return boolean
	 */
	public function setPeerReviewed($_peerReviewed)
	{
		return ($this->peerReviewed = $_peerReviewed);
	}
	/**
	 * Get peerReviewed
	 * @return boolean
	 */
	public function getPeerReviewed()
	{
		return $this->peerReviewed;
	}
	/**
	 * Set libraryRecord
	 * @param LibraryRecord libraryRecord
	 * @return LibraryRecord
	 */
	public function setLibraryRecord($_libraryRecord)
	{
		return ($this->libraryRecord = $_libraryRecord);
	}
	/**
	 * Get libraryRecord
	 * @return ScienceGovSearchTypeLibraryRecord
	 */
	public function getLibraryRecord()
	{
		return $this->libraryRecord;
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