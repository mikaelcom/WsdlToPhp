<?php
/**
 * Class file for PayPalTypeBusinessSubCategoryType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBusinessSubCategoryType
 * @date 14/07/2012
 */
class PayPalTypeBusinessSubCategoryType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'SubCategory-Unspecified'
	 * @return string 'SubCategory-Unspecified'
	 */
	const VALUE_SUBCATEGORY_UNSPECIFIED = 'SubCategory-Unspecified';
	/**
	 * Constant for value 'ANTIQUES-General'
	 * @return string 'ANTIQUES-General'
	 */
	const VALUE_ANTIQUES_GENERAL = 'ANTIQUES-General';
	/**
	 * Constant for value 'ANTIQUES-Antiquities'
	 * @return string 'ANTIQUES-Antiquities'
	 */
	const VALUE_ANTIQUES_ANTIQUITIES = 'ANTIQUES-Antiquities';
	/**
	 * Constant for value 'ANTIQUES-Decorative'
	 * @return string 'ANTIQUES-Decorative'
	 */
	const VALUE_ANTIQUES_DECORATIVE = 'ANTIQUES-Decorative';
	/**
	 * Constant for value 'ANTIQUES-Books-Manuscripts'
	 * @return string 'ANTIQUES-Books-Manuscripts'
	 */
	const VALUE_ANTIQUES_BOOKS_MANUSCRIPTS = 'ANTIQUES-Books-Manuscripts';
	/**
	 * Constant for value 'ANTIQUES-Furniture'
	 * @return string 'ANTIQUES-Furniture'
	 */
	const VALUE_ANTIQUES_FURNITURE = 'ANTIQUES-Furniture';
	/**
	 * Constant for value 'ANTIQUES-Glass'
	 * @return string 'ANTIQUES-Glass'
	 */
	const VALUE_ANTIQUES_GLASS = 'ANTIQUES-Glass';
	/**
	 * Constant for value 'ANTIQUES-RugsCarpets'
	 * @return string 'ANTIQUES-RugsCarpets'
	 */
	const VALUE_ANTIQUES_RUGSCARPETS = 'ANTIQUES-RugsCarpets';
	/**
	 * Constant for value 'ANTIQUES-Pottery'
	 * @return string 'ANTIQUES-Pottery'
	 */
	const VALUE_ANTIQUES_POTTERY = 'ANTIQUES-Pottery';
	/**
	 * Constant for value 'ANTIQUES-Cultural'
	 * @return string 'ANTIQUES-Cultural'
	 */
	const VALUE_ANTIQUES_CULTURAL = 'ANTIQUES-Cultural';
	/**
	 * Constant for value 'ANTIQUES-Artifacts-Grave-related-and-Native-American-Crafts'
	 * @return string 'ANTIQUES-Artifacts-Grave-related-and-Native-American-Crafts'
	 */
	const VALUE_ANTIQUES_ARTIFACTS_GRAVE_RELATED_AND_NATIVE_AMERICAN_CRAFTS = 'ANTIQUES-Artifacts-Grave-related-and-Native-American-Crafts';
	/**
	 * Constant for value 'ARTSANDCRAFTS-General'
	 * @return string 'ARTSANDCRAFTS-General'
	 */
	const VALUE_ARTSANDCRAFTS_GENERAL = 'ARTSANDCRAFTS-General';
	/**
	 * Constant for value 'ARTSANDCRAFTS-Art-Dealer-and-Galleries'
	 * @return string 'ARTSANDCRAFTS-Art-Dealer-and-Galleries'
	 */
	const VALUE_ARTSANDCRAFTS_ART_DEALER_AND_GALLERIES = 'ARTSANDCRAFTS-Art-Dealer-and-Galleries';
	/**
	 * Constant for value 'ARTSANDCRAFTS-Prints'
	 * @return string 'ARTSANDCRAFTS-Prints'
	 */
	const VALUE_ARTSANDCRAFTS_PRINTS = 'ARTSANDCRAFTS-Prints';
	/**
	 * Constant for value 'ARTSANDCRAFTS-Painting'
	 * @return string 'ARTSANDCRAFTS-Painting'
	 */
	const VALUE_ARTSANDCRAFTS_PAINTING = 'ARTSANDCRAFTS-Painting';
	/**
	 * Constant for value 'ARTSANDCRAFTS-Photography'
	 * @return string 'ARTSANDCRAFTS-Photography'
	 */
	const VALUE_ARTSANDCRAFTS_PHOTOGRAPHY = 'ARTSANDCRAFTS-Photography';
	/**
	 * Constant for value 'ARTSANDCRAFTS-Reproductions'
	 * @return string 'ARTSANDCRAFTS-Reproductions'
	 */
	const VALUE_ARTSANDCRAFTS_REPRODUCTIONS = 'ARTSANDCRAFTS-Reproductions';
	/**
	 * Constant for value 'ARTSANDCRAFTS-Sculptures'
	 * @return string 'ARTSANDCRAFTS-Sculptures'
	 */
	const VALUE_ARTSANDCRAFTS_SCULPTURES = 'ARTSANDCRAFTS-Sculptures';
	/**
	 * Constant for value 'ARTSANDCRAFTS-Woodworking'
	 * @return string 'ARTSANDCRAFTS-Woodworking'
	 */
	const VALUE_ARTSANDCRAFTS_WOODWORKING = 'ARTSANDCRAFTS-Woodworking';
	/**
	 * Constant for value 'ARTSANDCRAFTS-Art-and-Craft-Supplies'
	 * @return string 'ARTSANDCRAFTS-Art-and-Craft-Supplies'
	 */
	const VALUE_ARTSANDCRAFTS_ART_AND_CRAFT_SUPPLIES = 'ARTSANDCRAFTS-Art-and-Craft-Supplies';
	/**
	 * Constant for value 'ARTSANDCRAFTS-Fabrics-and-Sewing'
	 * @return string 'ARTSANDCRAFTS-Fabrics-and-Sewing'
	 */
	const VALUE_ARTSANDCRAFTS_FABRICS_AND_SEWING = 'ARTSANDCRAFTS-Fabrics-and-Sewing';
	/**
	 * Constant for value 'ARTSANDCRAFTS-Quilting'
	 * @return string 'ARTSANDCRAFTS-Quilting'
	 */
	const VALUE_ARTSANDCRAFTS_QUILTING = 'ARTSANDCRAFTS-Quilting';
	/**
	 * Constant for value 'ARTSANDCRAFTS-Scrapbooking'
	 * @return string 'ARTSANDCRAFTS-Scrapbooking'
	 */
	const VALUE_ARTSANDCRAFTS_SCRAPBOOKING = 'ARTSANDCRAFTS-Scrapbooking';
	/**
	 * Constant for value 'AUTOMOTIVE-General'
	 * @return string 'AUTOMOTIVE-General'
	 */
	const VALUE_AUTOMOTIVE_GENERAL = 'AUTOMOTIVE-General';
	/**
	 * Constant for value 'AUTOMOTIVE-Autos'
	 * @return string 'AUTOMOTIVE-Autos'
	 */
	const VALUE_AUTOMOTIVE_AUTOS = 'AUTOMOTIVE-Autos';
	/**
	 * Constant for value 'AUTOMOTIVE-Aviation'
	 * @return string 'AUTOMOTIVE-Aviation'
	 */
	const VALUE_AUTOMOTIVE_AVIATION = 'AUTOMOTIVE-Aviation';
	/**
	 * Constant for value 'AUTOMOTIVE-Motorcycles'
	 * @return string 'AUTOMOTIVE-Motorcycles'
	 */
	const VALUE_AUTOMOTIVE_MOTORCYCLES = 'AUTOMOTIVE-Motorcycles';
	/**
	 * Constant for value 'AUTOMOTIVE-Parts-and-Supplies'
	 * @return string 'AUTOMOTIVE-Parts-and-Supplies'
	 */
	const VALUE_AUTOMOTIVE_PARTS_AND_SUPPLIES = 'AUTOMOTIVE-Parts-and-Supplies';
	/**
	 * Constant for value 'AUTOMOTIVE-Services'
	 * @return string 'AUTOMOTIVE-Services'
	 */
	const VALUE_AUTOMOTIVE_SERVICES = 'AUTOMOTIVE-Services';
	/**
	 * Constant for value 'AUTOMOTIVE-Vintage-and-Collectible-Vehicles'
	 * @return string 'AUTOMOTIVE-Vintage-and-Collectible-Vehicles'
	 */
	const VALUE_AUTOMOTIVE_VINTAGE_AND_COLLECTIBLE_VEHICLES = 'AUTOMOTIVE-Vintage-and-Collectible-Vehicles';
	/**
	 * Constant for value 'BEAUTY-General'
	 * @return string 'BEAUTY-General'
	 */
	const VALUE_BEAUTY_GENERAL = 'BEAUTY-General';
	/**
	 * Constant for value 'BEAUTY-Body-Care-Personal-Hygiene'
	 * @return string 'BEAUTY-Body-Care-Personal-Hygiene'
	 */
	const VALUE_BEAUTY_BODY_CARE_PERSONAL_HYGIENE = 'BEAUTY-Body-Care-Personal-Hygiene';
	/**
	 * Constant for value 'BEAUTY-Fragrances-and-Perfumes'
	 * @return string 'BEAUTY-Fragrances-and-Perfumes'
	 */
	const VALUE_BEAUTY_FRAGRANCES_AND_PERFUMES = 'BEAUTY-Fragrances-and-Perfumes';
	/**
	 * Constant for value 'BEAUTY-Makeup'
	 * @return string 'BEAUTY-Makeup'
	 */
	const VALUE_BEAUTY_MAKEUP = 'BEAUTY-Makeup';
	/**
	 * Constant for value 'BOOKS-General'
	 * @return string 'BOOKS-General'
	 */
	const VALUE_BOOKS_GENERAL = 'BOOKS-General';
	/**
	 * Constant for value 'BOOKS-Audio-Books'
	 * @return string 'BOOKS-Audio-Books'
	 */
	const VALUE_BOOKS_AUDIO_BOOKS = 'BOOKS-Audio-Books';
	/**
	 * Constant for value 'BOOKS-Children-Books'
	 * @return string 'BOOKS-Children-Books'
	 */
	const VALUE_BOOKS_CHILDREN_BOOKS = 'BOOKS-Children-Books';
	/**
	 * Constant for value 'BOOKS-Computer-Books'
	 * @return string 'BOOKS-Computer-Books'
	 */
	const VALUE_BOOKS_COMPUTER_BOOKS = 'BOOKS-Computer-Books';
	/**
	 * Constant for value 'BOOKS-Educational-and-Textbooks'
	 * @return string 'BOOKS-Educational-and-Textbooks'
	 */
	const VALUE_BOOKS_EDUCATIONAL_AND_TEXTBOOKS = 'BOOKS-Educational-and-Textbooks';
	/**
	 * Constant for value 'BOOKS-Magazines'
	 * @return string 'BOOKS-Magazines'
	 */
	const VALUE_BOOKS_MAGAZINES = 'BOOKS-Magazines';
	/**
	 * Constant for value 'BOOKS-Fiction-and-Literature'
	 * @return string 'BOOKS-Fiction-and-Literature'
	 */
	const VALUE_BOOKS_FICTION_AND_LITERATURE = 'BOOKS-Fiction-and-Literature';
	/**
	 * Constant for value 'BOOKS-NonFiction'
	 * @return string 'BOOKS-NonFiction'
	 */
	const VALUE_BOOKS_NONFICTION = 'BOOKS-NonFiction';
	/**
	 * Constant for value 'BOOKS-Vintage-and-Collectibles'
	 * @return string 'BOOKS-Vintage-and-Collectibles'
	 */
	const VALUE_BOOKS_VINTAGE_AND_COLLECTIBLES = 'BOOKS-Vintage-and-Collectibles';
	/**
	 * Constant for value 'BUSINESS-General'
	 * @return string 'BUSINESS-General'
	 */
	const VALUE_BUSINESS_GENERAL = 'BUSINESS-General';
	/**
	 * Constant for value 'BUSINESS-Agricultural'
	 * @return string 'BUSINESS-Agricultural'
	 */
	const VALUE_BUSINESS_AGRICULTURAL = 'BUSINESS-Agricultural';
	/**
	 * Constant for value 'BUSINESS-Construction'
	 * @return string 'BUSINESS-Construction'
	 */
	const VALUE_BUSINESS_CONSTRUCTION = 'BUSINESS-Construction';
	/**
	 * Constant for value 'BUSINESS-Educational'
	 * @return string 'BUSINESS-Educational'
	 */
	const VALUE_BUSINESS_EDUCATIONAL = 'BUSINESS-Educational';
	/**
	 * Constant for value 'BUSINESS-Industrial'
	 * @return string 'BUSINESS-Industrial'
	 */
	const VALUE_BUSINESS_INDUSTRIAL = 'BUSINESS-Industrial';
	/**
	 * Constant for value 'BUSINESS-Office-Supplies-and-Equipment'
	 * @return string 'BUSINESS-Office-Supplies-and-Equipment'
	 */
	const VALUE_BUSINESS_OFFICE_SUPPLIES_AND_EQUIPMENT = 'BUSINESS-Office-Supplies-and-Equipment';
	/**
	 * Constant for value 'BUSINESS-GeneralServices'
	 * @return string 'BUSINESS-GeneralServices'
	 */
	const VALUE_BUSINESS_GENERALSERVICES = 'BUSINESS-GeneralServices';
	/**
	 * Constant for value 'BUSINESS-Advertising'
	 * @return string 'BUSINESS-Advertising'
	 */
	const VALUE_BUSINESS_ADVERTISING = 'BUSINESS-Advertising';
	/**
	 * Constant for value 'BUSINESS-Employment'
	 * @return string 'BUSINESS-Employment'
	 */
	const VALUE_BUSINESS_EMPLOYMENT = 'BUSINESS-Employment';
	/**
	 * Constant for value 'BUSINESS-Marketing'
	 * @return string 'BUSINESS-Marketing'
	 */
	const VALUE_BUSINESS_MARKETING = 'BUSINESS-Marketing';
	/**
	 * Constant for value 'BUSINESS-Meeting-Planners'
	 * @return string 'BUSINESS-Meeting-Planners'
	 */
	const VALUE_BUSINESS_MEETING_PLANNERS = 'BUSINESS-Meeting-Planners';
	/**
	 * Constant for value 'BUSINESS-Messaging-and-Paging-Services'
	 * @return string 'BUSINESS-Messaging-and-Paging-Services'
	 */
	const VALUE_BUSINESS_MESSAGING_AND_PAGING_SERVICES = 'BUSINESS-Messaging-and-Paging-Services';
	/**
	 * Constant for value 'BUSINESS-Seminars'
	 * @return string 'BUSINESS-Seminars'
	 */
	const VALUE_BUSINESS_SEMINARS = 'BUSINESS-Seminars';
	/**
	 * Constant for value 'BUSINESS-Publishing'
	 * @return string 'BUSINESS-Publishing'
	 */
	const VALUE_BUSINESS_PUBLISHING = 'BUSINESS-Publishing';
	/**
	 * Constant for value 'BUSINESS-Shipping-and-Packaging'
	 * @return string 'BUSINESS-Shipping-and-Packaging'
	 */
	const VALUE_BUSINESS_SHIPPING_AND_PACKAGING = 'BUSINESS-Shipping-and-Packaging';
	/**
	 * Constant for value 'BUSINESS-Wholesale'
	 * @return string 'BUSINESS-Wholesale'
	 */
	const VALUE_BUSINESS_WHOLESALE = 'BUSINESS-Wholesale';
	/**
	 * Constant for value 'BUSINESS-Industrial-Solvents'
	 * @return string 'BUSINESS-Industrial-Solvents'
	 */
	const VALUE_BUSINESS_INDUSTRIAL_SOLVENTS = 'BUSINESS-Industrial-Solvents';
	/**
	 * Constant for value 'CAMERASANDPHOTOGRAPHY-General'
	 * @return string 'CAMERASANDPHOTOGRAPHY-General'
	 */
	const VALUE_CAMERASANDPHOTOGRAPHY_GENERAL = 'CAMERASANDPHOTOGRAPHY-General';
	/**
	 * Constant for value 'CAMERASANDPHOTOGRAPHY-Accessories'
	 * @return string 'CAMERASANDPHOTOGRAPHY-Accessories'
	 */
	const VALUE_CAMERASANDPHOTOGRAPHY_ACCESSORIES = 'CAMERASANDPHOTOGRAPHY-Accessories';
	/**
	 * Constant for value 'CAMERASANDPHOTOGRAPHY-Cameras'
	 * @return string 'CAMERASANDPHOTOGRAPHY-Cameras'
	 */
	const VALUE_CAMERASANDPHOTOGRAPHY_CAMERAS = 'CAMERASANDPHOTOGRAPHY-Cameras';
	/**
	 * Constant for value 'CAMERASANDPHOTOGRAPHY-Video-Equipment'
	 * @return string 'CAMERASANDPHOTOGRAPHY-Video-Equipment'
	 */
	const VALUE_CAMERASANDPHOTOGRAPHY_VIDEO_EQUIPMENT = 'CAMERASANDPHOTOGRAPHY-Video-Equipment';
	/**
	 * Constant for value 'CAMERASANDPHOTOGRAPHY-Film'
	 * @return string 'CAMERASANDPHOTOGRAPHY-Film'
	 */
	const VALUE_CAMERASANDPHOTOGRAPHY_FILM = 'CAMERASANDPHOTOGRAPHY-Film';
	/**
	 * Constant for value 'CAMERASANDPHOTOGRAPHY-Supplies'
	 * @return string 'CAMERASANDPHOTOGRAPHY-Supplies'
	 */
	const VALUE_CAMERASANDPHOTOGRAPHY_SUPPLIES = 'CAMERASANDPHOTOGRAPHY-Supplies';
	/**
	 * Constant for value 'CLOTHING-Accessories'
	 * @return string 'CLOTHING-Accessories'
	 */
	const VALUE_CLOTHING_ACCESSORIES = 'CLOTHING-Accessories';
	/**
	 * Constant for value 'CLOTHING-Babies-Clothing-and-Supplies'
	 * @return string 'CLOTHING-Babies-Clothing-and-Supplies'
	 */
	const VALUE_CLOTHING_BABIES_CLOTHING_AND_SUPPLIES = 'CLOTHING-Babies-Clothing-and-Supplies';
	/**
	 * Constant for value 'CLOTHING-Childrens-Clothing'
	 * @return string 'CLOTHING-Childrens-Clothing'
	 */
	const VALUE_CLOTHING_CHILDRENS_CLOTHING = 'CLOTHING-Childrens-Clothing';
	/**
	 * Constant for value 'CLOTHING-Mens-Clothing'
	 * @return string 'CLOTHING-Mens-Clothing'
	 */
	const VALUE_CLOTHING_MENS_CLOTHING = 'CLOTHING-Mens-Clothing';
	/**
	 * Constant for value 'CLOTHING-Shoes'
	 * @return string 'CLOTHING-Shoes'
	 */
	const VALUE_CLOTHING_SHOES = 'CLOTHING-Shoes';
	/**
	 * Constant for value 'CLOTHING-Wedding-Clothing'
	 * @return string 'CLOTHING-Wedding-Clothing'
	 */
	const VALUE_CLOTHING_WEDDING_CLOTHING = 'CLOTHING-Wedding-Clothing';
	/**
	 * Constant for value 'CLOTHING-Womens-Clothing'
	 * @return string 'CLOTHING-Womens-Clothing'
	 */
	const VALUE_CLOTHING_WOMENS_CLOTHING = 'CLOTHING-Womens-Clothing';
	/**
	 * Constant for value 'CLOTHING-General'
	 * @return string 'CLOTHING-General'
	 */
	const VALUE_CLOTHING_GENERAL = 'CLOTHING-General';
	/**
	 * Constant for value 'CLOTHING-Jewelry'
	 * @return string 'CLOTHING-Jewelry'
	 */
	const VALUE_CLOTHING_JEWELRY = 'CLOTHING-Jewelry';
	/**
	 * Constant for value 'CLOTHING-Watches-and-Clocks'
	 * @return string 'CLOTHING-Watches-and-Clocks'
	 */
	const VALUE_CLOTHING_WATCHES_AND_CLOCKS = 'CLOTHING-Watches-and-Clocks';
	/**
	 * Constant for value 'CLOTHING-Rings'
	 * @return string 'CLOTHING-Rings'
	 */
	const VALUE_CLOTHING_RINGS = 'CLOTHING-Rings';
	/**
	 * Constant for value 'COLLECTIBLES-General'
	 * @return string 'COLLECTIBLES-General'
	 */
	const VALUE_COLLECTIBLES_GENERAL = 'COLLECTIBLES-General';
	/**
	 * Constant for value 'COLLECTIBLES-Advertising'
	 * @return string 'COLLECTIBLES-Advertising'
	 */
	const VALUE_COLLECTIBLES_ADVERTISING = 'COLLECTIBLES-Advertising';
	/**
	 * Constant for value 'COLLECTIBLES-Animals'
	 * @return string 'COLLECTIBLES-Animals'
	 */
	const VALUE_COLLECTIBLES_ANIMALS = 'COLLECTIBLES-Animals';
	/**
	 * Constant for value 'COLLECTIBLES-Animation'
	 * @return string 'COLLECTIBLES-Animation'
	 */
	const VALUE_COLLECTIBLES_ANIMATION = 'COLLECTIBLES-Animation';
	/**
	 * Constant for value 'COLLECTIBLES-Coin-Operated-Banks-and-Casinos'
	 * @return string 'COLLECTIBLES-Coin-Operated-Banks-and-Casinos'
	 */
	const VALUE_COLLECTIBLES_COIN_OPERATED_BANKS_AND_CASINOS = 'COLLECTIBLES-Coin-Operated-Banks-and-Casinos';
	/**
	 * Constant for value 'COLLECTIBLES-Coins-and-Paper-Money'
	 * @return string 'COLLECTIBLES-Coins-and-Paper-Money'
	 */
	const VALUE_COLLECTIBLES_COINS_AND_PAPER_MONEY = 'COLLECTIBLES-Coins-and-Paper-Money';
	/**
	 * Constant for value 'COLLECTIBLES-Comics'
	 * @return string 'COLLECTIBLES-Comics'
	 */
	const VALUE_COLLECTIBLES_COMICS = 'COLLECTIBLES-Comics';
	/**
	 * Constant for value 'COLLECTIBLES-Decorative'
	 * @return string 'COLLECTIBLES-Decorative'
	 */
	const VALUE_COLLECTIBLES_DECORATIVE = 'COLLECTIBLES-Decorative';
	/**
	 * Constant for value 'COLLECTIBLES-Disneyana'
	 * @return string 'COLLECTIBLES-Disneyana'
	 */
	const VALUE_COLLECTIBLES_DISNEYANA = 'COLLECTIBLES-Disneyana';
	/**
	 * Constant for value 'COLLECTIBLES-Holiday'
	 * @return string 'COLLECTIBLES-Holiday'
	 */
	const VALUE_COLLECTIBLES_HOLIDAY = 'COLLECTIBLES-Holiday';
	/**
	 * Constant for value 'COLLECTIBLES-Knives-and-Swords'
	 * @return string 'COLLECTIBLES-Knives-and-Swords'
	 */
	const VALUE_COLLECTIBLES_KNIVES_AND_SWORDS = 'COLLECTIBLES-Knives-and-Swords';
	/**
	 * Constant for value 'COLLECTIBLES-Militaria'
	 * @return string 'COLLECTIBLES-Militaria'
	 */
	const VALUE_COLLECTIBLES_MILITARIA = 'COLLECTIBLES-Militaria';
	/**
	 * Constant for value 'COLLECTIBLES-Postcards-and-Paper'
	 * @return string 'COLLECTIBLES-Postcards-and-Paper'
	 */
	const VALUE_COLLECTIBLES_POSTCARDS_AND_PAPER = 'COLLECTIBLES-Postcards-and-Paper';
	/**
	 * Constant for value 'COLLECTIBLES-Stamps'
	 * @return string 'COLLECTIBLES-Stamps'
	 */
	const VALUE_COLLECTIBLES_STAMPS = 'COLLECTIBLES-Stamps';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-General'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-General'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_GENERAL = 'COMPUTERHARDWAREANDSOFTWARE-General';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-Desktop-PCs'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-Desktop-PCs'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_DESKTOP_PCS = 'COMPUTERHARDWAREANDSOFTWARE-Desktop-PCs';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-Monitors'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-Monitors'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_MONITORS = 'COMPUTERHARDWAREANDSOFTWARE-Monitors';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-Hardware'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-Hardware'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_HARDWARE = 'COMPUTERHARDWAREANDSOFTWARE-Hardware';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-Peripherals'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-Peripherals'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_PERIPHERALS = 'COMPUTERHARDWAREANDSOFTWARE-Peripherals';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-Laptops-Notebooks-PDAs'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-Laptops-Notebooks-PDAs'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_LAPTOPS_NOTEBOOKS_PDAS = 'COMPUTERHARDWAREANDSOFTWARE-Laptops-Notebooks-PDAs';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-Networking-Equipment'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-Networking-Equipment'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_NETWORKING_EQUIPMENT = 'COMPUTERHARDWAREANDSOFTWARE-Networking-Equipment';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-Parts-and-Accessories'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-Parts-and-Accessories'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_PARTS_AND_ACCESSORIES = 'COMPUTERHARDWAREANDSOFTWARE-Parts-and-Accessories';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-GeneralSoftware'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-GeneralSoftware'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_GENERALSOFTWARE = 'COMPUTERHARDWAREANDSOFTWARE-GeneralSoftware';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-Oem-Software'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-Oem-Software'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_OEM_SOFTWARE = 'COMPUTERHARDWAREANDSOFTWARE-Oem-Software';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-Academic-Software'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-Academic-Software'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_ACADEMIC_SOFTWARE = 'COMPUTERHARDWAREANDSOFTWARE-Academic-Software';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-Beta-Software'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-Beta-Software'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_BETA_SOFTWARE = 'COMPUTERHARDWAREANDSOFTWARE-Beta-Software';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-Game-Software'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-Game-Software'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_GAME_SOFTWARE = 'COMPUTERHARDWAREANDSOFTWARE-Game-Software';
	/**
	 * Constant for value 'COMPUTERHARDWAREANDSOFTWARE-Data-Processing-Svc'
	 * @return string 'COMPUTERHARDWAREANDSOFTWARE-Data-Processing-Svc'
	 */
	const VALUE_COMPUTERHARDWAREANDSOFTWARE_DATA_PROCESSING_SVC = 'COMPUTERHARDWAREANDSOFTWARE-Data-Processing-Svc';
	/**
	 * Constant for value 'CULTUREANDRELIGION-General'
	 * @return string 'CULTUREANDRELIGION-General'
	 */
	const VALUE_CULTUREANDRELIGION_GENERAL = 'CULTUREANDRELIGION-General';
	/**
	 * Constant for value 'CULTUREANDRELIGION-Christianity'
	 * @return string 'CULTUREANDRELIGION-Christianity'
	 */
	const VALUE_CULTUREANDRELIGION_CHRISTIANITY = 'CULTUREANDRELIGION-Christianity';
	/**
	 * Constant for value 'CULTUREANDRELIGION-Metaphysical'
	 * @return string 'CULTUREANDRELIGION-Metaphysical'
	 */
	const VALUE_CULTUREANDRELIGION_METAPHYSICAL = 'CULTUREANDRELIGION-Metaphysical';
	/**
	 * Constant for value 'CULTUREANDRELIGION-New-Age'
	 * @return string 'CULTUREANDRELIGION-New-Age'
	 */
	const VALUE_CULTUREANDRELIGION_NEW_AGE = 'CULTUREANDRELIGION-New-Age';
	/**
	 * Constant for value 'CULTUREANDRELIGION-Organizations'
	 * @return string 'CULTUREANDRELIGION-Organizations'
	 */
	const VALUE_CULTUREANDRELIGION_ORGANIZATIONS = 'CULTUREANDRELIGION-Organizations';
	/**
	 * Constant for value 'CULTUREANDRELIGION-Other-Faiths'
	 * @return string 'CULTUREANDRELIGION-Other-Faiths'
	 */
	const VALUE_CULTUREANDRELIGION_OTHER_FAITHS = 'CULTUREANDRELIGION-Other-Faiths';
	/**
	 * Constant for value 'CULTUREANDRELIGION-Collectibles'
	 * @return string 'CULTUREANDRELIGION-Collectibles'
	 */
	const VALUE_CULTUREANDRELIGION_COLLECTIBLES = 'CULTUREANDRELIGION-Collectibles';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-GeneralTelecom'
	 * @return string 'ELECTRONICSANDTELECOM-GeneralTelecom'
	 */
	const VALUE_ELECTRONICSANDTELECOM_GENERALTELECOM = 'ELECTRONICSANDTELECOM-GeneralTelecom';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-Cell-Phones-and-Pagers'
	 * @return string 'ELECTRONICSANDTELECOM-Cell-Phones-and-Pagers'
	 */
	const VALUE_ELECTRONICSANDTELECOM_CELL_PHONES_AND_PAGERS = 'ELECTRONICSANDTELECOM-Cell-Phones-and-Pagers';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-Telephone-Cards'
	 * @return string 'ELECTRONICSANDTELECOM-Telephone-Cards'
	 */
	const VALUE_ELECTRONICSANDTELECOM_TELEPHONE_CARDS = 'ELECTRONICSANDTELECOM-Telephone-Cards';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-Telephone-Equipment'
	 * @return string 'ELECTRONICSANDTELECOM-Telephone-Equipment'
	 */
	const VALUE_ELECTRONICSANDTELECOM_TELEPHONE_EQUIPMENT = 'ELECTRONICSANDTELECOM-Telephone-Equipment';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-Telephone-Services'
	 * @return string 'ELECTRONICSANDTELECOM-Telephone-Services'
	 */
	const VALUE_ELECTRONICSANDTELECOM_TELEPHONE_SERVICES = 'ELECTRONICSANDTELECOM-Telephone-Services';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-GeneralElectronics'
	 * @return string 'ELECTRONICSANDTELECOM-GeneralElectronics'
	 */
	const VALUE_ELECTRONICSANDTELECOM_GENERALELECTRONICS = 'ELECTRONICSANDTELECOM-GeneralElectronics';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-Car-Audio-and-Electronics'
	 * @return string 'ELECTRONICSANDTELECOM-Car-Audio-and-Electronics'
	 */
	const VALUE_ELECTRONICSANDTELECOM_CAR_AUDIO_AND_ELECTRONICS = 'ELECTRONICSANDTELECOM-Car-Audio-and-Electronics';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-Home-Electronics'
	 * @return string 'ELECTRONICSANDTELECOM-Home-Electronics'
	 */
	const VALUE_ELECTRONICSANDTELECOM_HOME_ELECTRONICS = 'ELECTRONICSANDTELECOM-Home-Electronics';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-Home-Audio'
	 * @return string 'ELECTRONICSANDTELECOM-Home-Audio'
	 */
	const VALUE_ELECTRONICSANDTELECOM_HOME_AUDIO = 'ELECTRONICSANDTELECOM-Home-Audio';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-Gadgets-and-other-electronics'
	 * @return string 'ELECTRONICSANDTELECOM-Gadgets-and-other-electronics'
	 */
	const VALUE_ELECTRONICSANDTELECOM_GADGETS_AND_OTHER_ELECTRONICS = 'ELECTRONICSANDTELECOM-Gadgets-and-other-electronics';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-Batteries'
	 * @return string 'ELECTRONICSANDTELECOM-Batteries'
	 */
	const VALUE_ELECTRONICSANDTELECOM_BATTERIES = 'ELECTRONICSANDTELECOM-Batteries';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-ScannersRadios'
	 * @return string 'ELECTRONICSANDTELECOM-ScannersRadios'
	 */
	const VALUE_ELECTRONICSANDTELECOM_SCANNERSRADIOS = 'ELECTRONICSANDTELECOM-ScannersRadios';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-Radar-Dectors'
	 * @return string 'ELECTRONICSANDTELECOM-Radar-Dectors'
	 */
	const VALUE_ELECTRONICSANDTELECOM_RADAR_DECTORS = 'ELECTRONICSANDTELECOM-Radar-Dectors';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-Radar-Jamming-Devices'
	 * @return string 'ELECTRONICSANDTELECOM-Radar-Jamming-Devices'
	 */
	const VALUE_ELECTRONICSANDTELECOM_RADAR_JAMMING_DEVICES = 'ELECTRONICSANDTELECOM-Radar-Jamming-Devices';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-Satellite-and-Cable-TV-Descramblers'
	 * @return string 'ELECTRONICSANDTELECOM-Satellite-and-Cable-TV-Descramblers'
	 */
	const VALUE_ELECTRONICSANDTELECOM_SATELLITE_AND_CABLE_TV_DESCRAMBLERS = 'ELECTRONICSANDTELECOM-Satellite-and-Cable-TV-Descramblers';
	/**
	 * Constant for value 'ELECTRONICSANDTELECOM-Surveillance-Equipment'
	 * @return string 'ELECTRONICSANDTELECOM-Surveillance-Equipment'
	 */
	const VALUE_ELECTRONICSANDTELECOM_SURVEILLANCE_EQUIPMENT = 'ELECTRONICSANDTELECOM-Surveillance-Equipment';
	/**
	 * Constant for value 'ENTERTAINMENT-General'
	 * @return string 'ENTERTAINMENT-General'
	 */
	const VALUE_ENTERTAINMENT_GENERAL = 'ENTERTAINMENT-General';
	/**
	 * Constant for value 'ENTERTAINMENT-Movies'
	 * @return string 'ENTERTAINMENT-Movies'
	 */
	const VALUE_ENTERTAINMENT_MOVIES = 'ENTERTAINMENT-Movies';
	/**
	 * Constant for value 'ENTERTAINMENT-Music'
	 * @return string 'ENTERTAINMENT-Music'
	 */
	const VALUE_ENTERTAINMENT_MUSIC = 'ENTERTAINMENT-Music';
	/**
	 * Constant for value 'ENTERTAINMENT-Concerts'
	 * @return string 'ENTERTAINMENT-Concerts'
	 */
	const VALUE_ENTERTAINMENT_CONCERTS = 'ENTERTAINMENT-Concerts';
	/**
	 * Constant for value 'ENTERTAINMENT-Theater'
	 * @return string 'ENTERTAINMENT-Theater'
	 */
	const VALUE_ENTERTAINMENT_THEATER = 'ENTERTAINMENT-Theater';
	/**
	 * Constant for value 'ENTERTAINMENT-Bootleg-Recordings'
	 * @return string 'ENTERTAINMENT-Bootleg-Recordings'
	 */
	const VALUE_ENTERTAINMENT_BOOTLEG_RECORDINGS = 'ENTERTAINMENT-Bootleg-Recordings';
	/**
	 * Constant for value 'ENTERTAINMENT-Promotional-Items'
	 * @return string 'ENTERTAINMENT-Promotional-Items'
	 */
	const VALUE_ENTERTAINMENT_PROMOTIONAL_ITEMS = 'ENTERTAINMENT-Promotional-Items';
	/**
	 * Constant for value 'ENTERTAINMENTMEMORABILIA-General'
	 * @return string 'ENTERTAINMENTMEMORABILIA-General'
	 */
	const VALUE_ENTERTAINMENTMEMORABILIA_GENERAL = 'ENTERTAINMENTMEMORABILIA-General';
	/**
	 * Constant for value 'ENTERTAINMENTMEMORABILIA-Autographs'
	 * @return string 'ENTERTAINMENTMEMORABILIA-Autographs'
	 */
	const VALUE_ENTERTAINMENTMEMORABILIA_AUTOGRAPHS = 'ENTERTAINMENTMEMORABILIA-Autographs';
	/**
	 * Constant for value 'ENTERTAINMENTMEMORABILIA-Limited-Editions'
	 * @return string 'ENTERTAINMENTMEMORABILIA-Limited-Editions'
	 */
	const VALUE_ENTERTAINMENTMEMORABILIA_LIMITED_EDITIONS = 'ENTERTAINMENTMEMORABILIA-Limited-Editions';
	/**
	 * Constant for value 'ENTERTAINMENTMEMORABILIA-Movie'
	 * @return string 'ENTERTAINMENTMEMORABILIA-Movie'
	 */
	const VALUE_ENTERTAINMENTMEMORABILIA_MOVIE = 'ENTERTAINMENTMEMORABILIA-Movie';
	/**
	 * Constant for value 'ENTERTAINMENTMEMORABILIA-Music'
	 * @return string 'ENTERTAINMENTMEMORABILIA-Music'
	 */
	const VALUE_ENTERTAINMENTMEMORABILIA_MUSIC = 'ENTERTAINMENTMEMORABILIA-Music';
	/**
	 * Constant for value 'ENTERTAINMENTMEMORABILIA-Novelties'
	 * @return string 'ENTERTAINMENTMEMORABILIA-Novelties'
	 */
	const VALUE_ENTERTAINMENTMEMORABILIA_NOVELTIES = 'ENTERTAINMENTMEMORABILIA-Novelties';
	/**
	 * Constant for value 'ENTERTAINMENTMEMORABILIA-Photos'
	 * @return string 'ENTERTAINMENTMEMORABILIA-Photos'
	 */
	const VALUE_ENTERTAINMENTMEMORABILIA_PHOTOS = 'ENTERTAINMENTMEMORABILIA-Photos';
	/**
	 * Constant for value 'ENTERTAINMENTMEMORABILIA-Posters'
	 * @return string 'ENTERTAINMENTMEMORABILIA-Posters'
	 */
	const VALUE_ENTERTAINMENTMEMORABILIA_POSTERS = 'ENTERTAINMENTMEMORABILIA-Posters';
	/**
	 * Constant for value 'ENTERTAINMENTMEMORABILIA-Sports-and-Fan-Shop'
	 * @return string 'ENTERTAINMENTMEMORABILIA-Sports-and-Fan-Shop'
	 */
	const VALUE_ENTERTAINMENTMEMORABILIA_SPORTS_AND_FAN_SHOP = 'ENTERTAINMENTMEMORABILIA-Sports-and-Fan-Shop';
	/**
	 * Constant for value 'ENTERTAINMENTMEMORABILIA-Science-Fiction'
	 * @return string 'ENTERTAINMENTMEMORABILIA-Science-Fiction'
	 */
	const VALUE_ENTERTAINMENTMEMORABILIA_SCIENCE_FICTION = 'ENTERTAINMENTMEMORABILIA-Science-Fiction';
	/**
	 * Constant for value 'FOODDRINKANDNUTRITION-General'
	 * @return string 'FOODDRINKANDNUTRITION-General'
	 */
	const VALUE_FOODDRINKANDNUTRITION_GENERAL = 'FOODDRINKANDNUTRITION-General';
	/**
	 * Constant for value 'FOODDRINKANDNUTRITION-Coffee-and-Tea'
	 * @return string 'FOODDRINKANDNUTRITION-Coffee-and-Tea'
	 */
	const VALUE_FOODDRINKANDNUTRITION_COFFEE_AND_TEA = 'FOODDRINKANDNUTRITION-Coffee-and-Tea';
	/**
	 * Constant for value 'FOODDRINKANDNUTRITION-Food-Products'
	 * @return string 'FOODDRINKANDNUTRITION-Food-Products'
	 */
	const VALUE_FOODDRINKANDNUTRITION_FOOD_PRODUCTS = 'FOODDRINKANDNUTRITION-Food-Products';
	/**
	 * Constant for value 'FOODDRINKANDNUTRITION-Gourmet-Items'
	 * @return string 'FOODDRINKANDNUTRITION-Gourmet-Items'
	 */
	const VALUE_FOODDRINKANDNUTRITION_GOURMET_ITEMS = 'FOODDRINKANDNUTRITION-Gourmet-Items';
	/**
	 * Constant for value 'FOODDRINKANDNUTRITION-Health-and-Nutrition'
	 * @return string 'FOODDRINKANDNUTRITION-Health-and-Nutrition'
	 */
	const VALUE_FOODDRINKANDNUTRITION_HEALTH_AND_NUTRITION = 'FOODDRINKANDNUTRITION-Health-and-Nutrition';
	/**
	 * Constant for value 'FOODDRINKANDNUTRITION-Services'
	 * @return string 'FOODDRINKANDNUTRITION-Services'
	 */
	const VALUE_FOODDRINKANDNUTRITION_SERVICES = 'FOODDRINKANDNUTRITION-Services';
	/**
	 * Constant for value 'FOODDRINKANDNUTRITION-Vitamins-and-Supplements'
	 * @return string 'FOODDRINKANDNUTRITION-Vitamins-and-Supplements'
	 */
	const VALUE_FOODDRINKANDNUTRITION_VITAMINS_AND_SUPPLEMENTS = 'FOODDRINKANDNUTRITION-Vitamins-and-Supplements';
	/**
	 * Constant for value 'FOODDRINKANDNUTRITION-Weight-Management-and-Health-Products'
	 * @return string 'FOODDRINKANDNUTRITION-Weight-Management-and-Health-Products'
	 */
	const VALUE_FOODDRINKANDNUTRITION_WEIGHT_MANAGEMENT_AND_HEALTH_PRODUCTS = 'FOODDRINKANDNUTRITION-Weight-Management-and-Health-Products';
	/**
	 * Constant for value 'FOODDRINKANDNUTRITION-Restaurant'
	 * @return string 'FOODDRINKANDNUTRITION-Restaurant'
	 */
	const VALUE_FOODDRINKANDNUTRITION_RESTAURANT = 'FOODDRINKANDNUTRITION-Restaurant';
	/**
	 * Constant for value 'FOODDRINKANDNUTRITION-Tobacco-and-Cigars'
	 * @return string 'FOODDRINKANDNUTRITION-Tobacco-and-Cigars'
	 */
	const VALUE_FOODDRINKANDNUTRITION_TOBACCO_AND_CIGARS = 'FOODDRINKANDNUTRITION-Tobacco-and-Cigars';
	/**
	 * Constant for value 'FOODDRINKANDNUTRITION-Alcoholic-Beverages'
	 * @return string 'FOODDRINKANDNUTRITION-Alcoholic-Beverages'
	 */
	const VALUE_FOODDRINKANDNUTRITION_ALCOHOLIC_BEVERAGES = 'FOODDRINKANDNUTRITION-Alcoholic-Beverages';
	/**
	 * Constant for value 'GIFTSANDFLOWERS-General'
	 * @return string 'GIFTSANDFLOWERS-General'
	 */
	const VALUE_GIFTSANDFLOWERS_GENERAL = 'GIFTSANDFLOWERS-General';
	/**
	 * Constant for value 'GIFTSANDFLOWERS-Flowers'
	 * @return string 'GIFTSANDFLOWERS-Flowers'
	 */
	const VALUE_GIFTSANDFLOWERS_FLOWERS = 'GIFTSANDFLOWERS-Flowers';
	/**
	 * Constant for value 'GIFTSANDFLOWERS-Greeting-Cards'
	 * @return string 'GIFTSANDFLOWERS-Greeting-Cards'
	 */
	const VALUE_GIFTSANDFLOWERS_GREETING_CARDS = 'GIFTSANDFLOWERS-Greeting-Cards';
	/**
	 * Constant for value 'GIFTSANDFLOWERS-Humorous-Gifts-and-Novelties'
	 * @return string 'GIFTSANDFLOWERS-Humorous-Gifts-and-Novelties'
	 */
	const VALUE_GIFTSANDFLOWERS_HUMOROUS_GIFTS_AND_NOVELTIES = 'GIFTSANDFLOWERS-Humorous-Gifts-and-Novelties';
	/**
	 * Constant for value 'GIFTSANDFLOWERS-Personalized-Gifts'
	 * @return string 'GIFTSANDFLOWERS-Personalized-Gifts'
	 */
	const VALUE_GIFTSANDFLOWERS_PERSONALIZED_GIFTS = 'GIFTSANDFLOWERS-Personalized-Gifts';
	/**
	 * Constant for value 'GIFTSANDFLOWERS-Products'
	 * @return string 'GIFTSANDFLOWERS-Products'
	 */
	const VALUE_GIFTSANDFLOWERS_PRODUCTS = 'GIFTSANDFLOWERS-Products';
	/**
	 * Constant for value 'GIFTSANDFLOWERS-Services'
	 * @return string 'GIFTSANDFLOWERS-Services'
	 */
	const VALUE_GIFTSANDFLOWERS_SERVICES = 'GIFTSANDFLOWERS-Services';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-General'
	 * @return string 'HOBBIESTOYSANDGAMES-General'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_GENERAL = 'HOBBIESTOYSANDGAMES-General';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-Action-Figures'
	 * @return string 'HOBBIESTOYSANDGAMES-Action-Figures'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_ACTION_FIGURES = 'HOBBIESTOYSANDGAMES-Action-Figures';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-Bean-Babies'
	 * @return string 'HOBBIESTOYSANDGAMES-Bean-Babies'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_BEAN_BABIES = 'HOBBIESTOYSANDGAMES-Bean-Babies';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-Barbies'
	 * @return string 'HOBBIESTOYSANDGAMES-Barbies'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_BARBIES = 'HOBBIESTOYSANDGAMES-Barbies';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-Bears'
	 * @return string 'HOBBIESTOYSANDGAMES-Bears'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_BEARS = 'HOBBIESTOYSANDGAMES-Bears';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-Dolls'
	 * @return string 'HOBBIESTOYSANDGAMES-Dolls'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_DOLLS = 'HOBBIESTOYSANDGAMES-Dolls';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-Games'
	 * @return string 'HOBBIESTOYSANDGAMES-Games'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_GAMES = 'HOBBIESTOYSANDGAMES-Games';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-Model-Kits'
	 * @return string 'HOBBIESTOYSANDGAMES-Model-Kits'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_MODEL_KITS = 'HOBBIESTOYSANDGAMES-Model-Kits';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-Diecast-Toys-Vehicles'
	 * @return string 'HOBBIESTOYSANDGAMES-Diecast-Toys-Vehicles'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_DIECAST_TOYS_VEHICLES = 'HOBBIESTOYSANDGAMES-Diecast-Toys-Vehicles';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-Video-Games-and-Systems'
	 * @return string 'HOBBIESTOYSANDGAMES-Video-Games-and-Systems'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_VIDEO_GAMES_AND_SYSTEMS = 'HOBBIESTOYSANDGAMES-Video-Games-and-Systems';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-Vintage-and-Antique-Toys'
	 * @return string 'HOBBIESTOYSANDGAMES-Vintage-and-Antique-Toys'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_VINTAGE_AND_ANTIQUE_TOYS = 'HOBBIESTOYSANDGAMES-Vintage-and-Antique-Toys';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-BackupUnreleased-Games'
	 * @return string 'HOBBIESTOYSANDGAMES-BackupUnreleased-Games'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_BACKUPUNRELEASED_GAMES = 'HOBBIESTOYSANDGAMES-BackupUnreleased-Games';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-Game-copying-hardwaresoftware'
	 * @return string 'HOBBIESTOYSANDGAMES-Game-copying-hardwaresoftware'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_GAME_COPYING_HARDWARESOFTWARE = 'HOBBIESTOYSANDGAMES-Game-copying-hardwaresoftware';
	/**
	 * Constant for value 'HOBBIESTOYSANDGAMES-Mod-Chips'
	 * @return string 'HOBBIESTOYSANDGAMES-Mod-Chips'
	 */
	const VALUE_HOBBIESTOYSANDGAMES_MOD_CHIPS = 'HOBBIESTOYSANDGAMES-Mod-Chips';
	/**
	 * Constant for value 'HOMEANDGARDEN-General'
	 * @return string 'HOMEANDGARDEN-General'
	 */
	const VALUE_HOMEANDGARDEN_GENERAL = 'HOMEANDGARDEN-General';
	/**
	 * Constant for value 'HOMEANDGARDEN-Appliances'
	 * @return string 'HOMEANDGARDEN-Appliances'
	 */
	const VALUE_HOMEANDGARDEN_APPLIANCES = 'HOMEANDGARDEN-Appliances';
	/**
	 * Constant for value 'HOMEANDGARDEN-Bed-and-Bath'
	 * @return string 'HOMEANDGARDEN-Bed-and-Bath'
	 */
	const VALUE_HOMEANDGARDEN_BED_AND_BATH = 'HOMEANDGARDEN-Bed-and-Bath';
	/**
	 * Constant for value 'HOMEANDGARDEN-Furnishing-and-Decorating'
	 * @return string 'HOMEANDGARDEN-Furnishing-and-Decorating'
	 */
	const VALUE_HOMEANDGARDEN_FURNISHING_AND_DECORATING = 'HOMEANDGARDEN-Furnishing-and-Decorating';
	/**
	 * Constant for value 'HOMEANDGARDEN-Garden-Supplies'
	 * @return string 'HOMEANDGARDEN-Garden-Supplies'
	 */
	const VALUE_HOMEANDGARDEN_GARDEN_SUPPLIES = 'HOMEANDGARDEN-Garden-Supplies';
	/**
	 * Constant for value 'HOMEANDGARDEN-Hardware-and-Tools'
	 * @return string 'HOMEANDGARDEN-Hardware-and-Tools'
	 */
	const VALUE_HOMEANDGARDEN_HARDWARE_AND_TOOLS = 'HOMEANDGARDEN-Hardware-and-Tools';
	/**
	 * Constant for value 'HOMEANDGARDEN-Household-Goods'
	 * @return string 'HOMEANDGARDEN-Household-Goods'
	 */
	const VALUE_HOMEANDGARDEN_HOUSEHOLD_GOODS = 'HOMEANDGARDEN-Household-Goods';
	/**
	 * Constant for value 'HOMEANDGARDEN-Kitchenware'
	 * @return string 'HOMEANDGARDEN-Kitchenware'
	 */
	const VALUE_HOMEANDGARDEN_KITCHENWARE = 'HOMEANDGARDEN-Kitchenware';
	/**
	 * Constant for value 'HOMEANDGARDEN-Rugs-and-Carpets'
	 * @return string 'HOMEANDGARDEN-Rugs-and-Carpets'
	 */
	const VALUE_HOMEANDGARDEN_RUGS_AND_CARPETS = 'HOMEANDGARDEN-Rugs-and-Carpets';
	/**
	 * Constant for value 'HOMEANDGARDEN-Security-and-Home-Defense'
	 * @return string 'HOMEANDGARDEN-Security-and-Home-Defense'
	 */
	const VALUE_HOMEANDGARDEN_SECURITY_AND_HOME_DEFENSE = 'HOMEANDGARDEN-Security-and-Home-Defense';
	/**
	 * Constant for value 'HOMEANDGARDEN-Plants-and-Seeds'
	 * @return string 'HOMEANDGARDEN-Plants-and-Seeds'
	 */
	const VALUE_HOMEANDGARDEN_PLANTS_AND_SEEDS = 'HOMEANDGARDEN-Plants-and-Seeds';
	/**
	 * Constant for value 'INTERNETANDNETWORKSERVICES-General'
	 * @return string 'INTERNETANDNETWORKSERVICES-General'
	 */
	const VALUE_INTERNETANDNETWORKSERVICES_GENERAL = 'INTERNETANDNETWORKSERVICES-General';
	/**
	 * Constant for value 'INTERNETANDNETWORKSERVICES-Bulletin-board'
	 * @return string 'INTERNETANDNETWORKSERVICES-Bulletin-board'
	 */
	const VALUE_INTERNETANDNETWORKSERVICES_BULLETIN_BOARD = 'INTERNETANDNETWORKSERVICES-Bulletin-board';
	/**
	 * Constant for value 'INTERNETANDNETWORKSERVICES-online-services'
	 * @return string 'INTERNETANDNETWORKSERVICES-online-services'
	 */
	const VALUE_INTERNETANDNETWORKSERVICES_ONLINE_SERVICES = 'INTERNETANDNETWORKSERVICES-online-services';
	/**
	 * Constant for value 'INTERNETANDNETWORKSERVICES-Auction-management-tools'
	 * @return string 'INTERNETANDNETWORKSERVICES-Auction-management-tools'
	 */
	const VALUE_INTERNETANDNETWORKSERVICES_AUCTION_MANAGEMENT_TOOLS = 'INTERNETANDNETWORKSERVICES-Auction-management-tools';
	/**
	 * Constant for value 'INTERNETANDNETWORKSERVICES-ecommerce-development'
	 * @return string 'INTERNETANDNETWORKSERVICES-ecommerce-development'
	 */
	const VALUE_INTERNETANDNETWORKSERVICES_ECOMMERCE_DEVELOPMENT = 'INTERNETANDNETWORKSERVICES-ecommerce-development';
	/**
	 * Constant for value 'INTERNETANDNETWORKSERVICES-training-services'
	 * @return string 'INTERNETANDNETWORKSERVICES-training-services'
	 */
	const VALUE_INTERNETANDNETWORKSERVICES_TRAINING_SERVICES = 'INTERNETANDNETWORKSERVICES-training-services';
	/**
	 * Constant for value 'INTERNETANDNETWORKSERVICES-Online-Malls'
	 * @return string 'INTERNETANDNETWORKSERVICES-Online-Malls'
	 */
	const VALUE_INTERNETANDNETWORKSERVICES_ONLINE_MALLS = 'INTERNETANDNETWORKSERVICES-Online-Malls';
	/**
	 * Constant for value 'INTERNETANDNETWORKSERVICES-Web-hosting-and-design'
	 * @return string 'INTERNETANDNETWORKSERVICES-Web-hosting-and-design'
	 */
	const VALUE_INTERNETANDNETWORKSERVICES_WEB_HOSTING_AND_DESIGN = 'INTERNETANDNETWORKSERVICES-Web-hosting-and-design';
	/**
	 * Constant for value 'MEDIAANDENTERTAINMENT-General'
	 * @return string 'MEDIAANDENTERTAINMENT-General'
	 */
	const VALUE_MEDIAANDENTERTAINMENT_GENERAL = 'MEDIAANDENTERTAINMENT-General';
	/**
	 * Constant for value 'MEDIAANDENTERTAINMENT-Concerts'
	 * @return string 'MEDIAANDENTERTAINMENT-Concerts'
	 */
	const VALUE_MEDIAANDENTERTAINMENT_CONCERTS = 'MEDIAANDENTERTAINMENT-Concerts';
	/**
	 * Constant for value 'MEDIAANDENTERTAINMENT-Theater'
	 * @return string 'MEDIAANDENTERTAINMENT-Theater'
	 */
	const VALUE_MEDIAANDENTERTAINMENT_THEATER = 'MEDIAANDENTERTAINMENT-Theater';
	/**
	 * Constant for value 'MEDICALANDPHARMACEUTICAL-General'
	 * @return string 'MEDICALANDPHARMACEUTICAL-General'
	 */
	const VALUE_MEDICALANDPHARMACEUTICAL_GENERAL = 'MEDICALANDPHARMACEUTICAL-General';
	/**
	 * Constant for value 'MEDICALANDPHARMACEUTICAL-Medical'
	 * @return string 'MEDICALANDPHARMACEUTICAL-Medical'
	 */
	const VALUE_MEDICALANDPHARMACEUTICAL_MEDICAL = 'MEDICALANDPHARMACEUTICAL-Medical';
	/**
	 * Constant for value 'MEDICALANDPHARMACEUTICAL-Dental'
	 * @return string 'MEDICALANDPHARMACEUTICAL-Dental'
	 */
	const VALUE_MEDICALANDPHARMACEUTICAL_DENTAL = 'MEDICALANDPHARMACEUTICAL-Dental';
	/**
	 * Constant for value 'MEDICALANDPHARMACEUTICAL-Opthamalic'
	 * @return string 'MEDICALANDPHARMACEUTICAL-Opthamalic'
	 */
	const VALUE_MEDICALANDPHARMACEUTICAL_OPTHAMALIC = 'MEDICALANDPHARMACEUTICAL-Opthamalic';
	/**
	 * Constant for value 'MEDICALANDPHARMACEUTICAL-Prescription-Drugs'
	 * @return string 'MEDICALANDPHARMACEUTICAL-Prescription-Drugs'
	 */
	const VALUE_MEDICALANDPHARMACEUTICAL_PRESCRIPTION_DRUGS = 'MEDICALANDPHARMACEUTICAL-Prescription-Drugs';
	/**
	 * Constant for value 'MEDICALANDPHARMACEUTICAL-Devices'
	 * @return string 'MEDICALANDPHARMACEUTICAL-Devices'
	 */
	const VALUE_MEDICALANDPHARMACEUTICAL_DEVICES = 'MEDICALANDPHARMACEUTICAL-Devices';
	/**
	 * Constant for value 'MONEYSERVICEBUSINESSES-General'
	 * @return string 'MONEYSERVICEBUSINESSES-General'
	 */
	const VALUE_MONEYSERVICEBUSINESSES_GENERAL = 'MONEYSERVICEBUSINESSES-General';
	/**
	 * Constant for value 'MONEYSERVICEBUSINESSES-Remittance'
	 * @return string 'MONEYSERVICEBUSINESSES-Remittance'
	 */
	const VALUE_MONEYSERVICEBUSINESSES_REMITTANCE = 'MONEYSERVICEBUSINESSES-Remittance';
	/**
	 * Constant for value 'MONEYSERVICEBUSINESSES-Wire-Transfer'
	 * @return string 'MONEYSERVICEBUSINESSES-Wire-Transfer'
	 */
	const VALUE_MONEYSERVICEBUSINESSES_WIRE_TRANSFER = 'MONEYSERVICEBUSINESSES-Wire-Transfer';
	/**
	 * Constant for value 'MONEYSERVICEBUSINESSES-Money-Orders'
	 * @return string 'MONEYSERVICEBUSINESSES-Money-Orders'
	 */
	const VALUE_MONEYSERVICEBUSINESSES_MONEY_ORDERS = 'MONEYSERVICEBUSINESSES-Money-Orders';
	/**
	 * Constant for value 'MONEYSERVICEBUSINESSES-Electronic-Cash'
	 * @return string 'MONEYSERVICEBUSINESSES-Electronic-Cash'
	 */
	const VALUE_MONEYSERVICEBUSINESSES_ELECTRONIC_CASH = 'MONEYSERVICEBUSINESSES-Electronic-Cash';
	/**
	 * Constant for value 'MONEYSERVICEBUSINESSES-Currency-DealerExchange'
	 * @return string 'MONEYSERVICEBUSINESSES-Currency-DealerExchange'
	 */
	const VALUE_MONEYSERVICEBUSINESSES_CURRENCY_DEALEREXCHANGE = 'MONEYSERVICEBUSINESSES-Currency-DealerExchange';
	/**
	 * Constant for value 'MONEYSERVICEBUSINESSES-Check-Cashier'
	 * @return string 'MONEYSERVICEBUSINESSES-Check-Cashier'
	 */
	const VALUE_MONEYSERVICEBUSINESSES_CHECK_CASHIER = 'MONEYSERVICEBUSINESSES-Check-Cashier';
	/**
	 * Constant for value 'MONEYSERVICEBUSINESSES-Travelers-Checks'
	 * @return string 'MONEYSERVICEBUSINESSES-Travelers-Checks'
	 */
	const VALUE_MONEYSERVICEBUSINESSES_TRAVELERS_CHECKS = 'MONEYSERVICEBUSINESSES-Travelers-Checks';
	/**
	 * Constant for value 'MONEYSERVICEBUSINESSES-Stored-Value-Cards'
	 * @return string 'MONEYSERVICEBUSINESSES-Stored-Value-Cards'
	 */
	const VALUE_MONEYSERVICEBUSINESSES_STORED_VALUE_CARDS = 'MONEYSERVICEBUSINESSES-Stored-Value-Cards';
	/**
	 * Constant for value 'NONPROFITPOLITICALANDRELIGION-General'
	 * @return string 'NONPROFITPOLITICALANDRELIGION-General'
	 */
	const VALUE_NONPROFITPOLITICALANDRELIGION_GENERAL = 'NONPROFITPOLITICALANDRELIGION-General';
	/**
	 * Constant for value 'NONPROFITPOLITICALANDRELIGION-Charities'
	 * @return string 'NONPROFITPOLITICALANDRELIGION-Charities'
	 */
	const VALUE_NONPROFITPOLITICALANDRELIGION_CHARITIES = 'NONPROFITPOLITICALANDRELIGION-Charities';
	/**
	 * Constant for value 'NONPROFITPOLITICALANDRELIGION-Political'
	 * @return string 'NONPROFITPOLITICALANDRELIGION-Political'
	 */
	const VALUE_NONPROFITPOLITICALANDRELIGION_POLITICAL = 'NONPROFITPOLITICALANDRELIGION-Political';
	/**
	 * Constant for value 'NONPROFITPOLITICALANDRELIGION-Religious'
	 * @return string 'NONPROFITPOLITICALANDRELIGION-Religious'
	 */
	const VALUE_NONPROFITPOLITICALANDRELIGION_RELIGIOUS = 'NONPROFITPOLITICALANDRELIGION-Religious';
	/**
	 * Constant for value 'PETSANDANIMALS-General'
	 * @return string 'PETSANDANIMALS-General'
	 */
	const VALUE_PETSANDANIMALS_GENERAL = 'PETSANDANIMALS-General';
	/**
	 * Constant for value 'PETSANDANIMALS-Supplies-and-Toys'
	 * @return string 'PETSANDANIMALS-Supplies-and-Toys'
	 */
	const VALUE_PETSANDANIMALS_SUPPLIES_AND_TOYS = 'PETSANDANIMALS-Supplies-and-Toys';
	/**
	 * Constant for value 'PETSANDANIMALS-Wildlife-Products'
	 * @return string 'PETSANDANIMALS-Wildlife-Products'
	 */
	const VALUE_PETSANDANIMALS_WILDLIFE_PRODUCTS = 'PETSANDANIMALS-Wildlife-Products';
	/**
	 * Constant for value 'REALESTATE-General'
	 * @return string 'REALESTATE-General'
	 */
	const VALUE_REALESTATE_GENERAL = 'REALESTATE-General';
	/**
	 * Constant for value 'REALESTATE-Commercial'
	 * @return string 'REALESTATE-Commercial'
	 */
	const VALUE_REALESTATE_COMMERCIAL = 'REALESTATE-Commercial';
	/**
	 * Constant for value 'REALESTATE-Residential'
	 * @return string 'REALESTATE-Residential'
	 */
	const VALUE_REALESTATE_RESIDENTIAL = 'REALESTATE-Residential';
	/**
	 * Constant for value 'REALESTATE-Time-Shares'
	 * @return string 'REALESTATE-Time-Shares'
	 */
	const VALUE_REALESTATE_TIME_SHARES = 'REALESTATE-Time-Shares';
	/**
	 * Constant for value 'SERVICES-GeneralGovernment'
	 * @return string 'SERVICES-GeneralGovernment'
	 */
	const VALUE_SERVICES_GENERALGOVERNMENT = 'SERVICES-GeneralGovernment';
	/**
	 * Constant for value 'SERVICES-Legal'
	 * @return string 'SERVICES-Legal'
	 */
	const VALUE_SERVICES_LEGAL = 'SERVICES-Legal';
	/**
	 * Constant for value 'SERVICES-Medical'
	 * @return string 'SERVICES-Medical'
	 */
	const VALUE_SERVICES_MEDICAL = 'SERVICES-Medical';
	/**
	 * Constant for value 'SERVICES-Dental'
	 * @return string 'SERVICES-Dental'
	 */
	const VALUE_SERVICES_DENTAL = 'SERVICES-Dental';
	/**
	 * Constant for value 'SERVICES-Vision'
	 * @return string 'SERVICES-Vision'
	 */
	const VALUE_SERVICES_VISION = 'SERVICES-Vision';
	/**
	 * Constant for value 'SERVICES-General'
	 * @return string 'SERVICES-General'
	 */
	const VALUE_SERVICES_GENERAL = 'SERVICES-General';
	/**
	 * Constant for value 'SERVICES-Child-Care-Services'
	 * @return string 'SERVICES-Child-Care-Services'
	 */
	const VALUE_SERVICES_CHILD_CARE_SERVICES = 'SERVICES-Child-Care-Services';
	/**
	 * Constant for value 'SERVICES-Consulting'
	 * @return string 'SERVICES-Consulting'
	 */
	const VALUE_SERVICES_CONSULTING = 'SERVICES-Consulting';
	/**
	 * Constant for value 'SERVICES-ImportingExporting'
	 * @return string 'SERVICES-ImportingExporting'
	 */
	const VALUE_SERVICES_IMPORTINGEXPORTING = 'SERVICES-ImportingExporting';
	/**
	 * Constant for value 'SERVICES-InsuranceDirect'
	 * @return string 'SERVICES-InsuranceDirect'
	 */
	const VALUE_SERVICES_INSURANCEDIRECT = 'SERVICES-InsuranceDirect';
	/**
	 * Constant for value 'SERVICES-Financial-Services'
	 * @return string 'SERVICES-Financial-Services'
	 */
	const VALUE_SERVICES_FINANCIAL_SERVICES = 'SERVICES-Financial-Services';
	/**
	 * Constant for value 'SERVICES-Graphic-and-Commercial-Design'
	 * @return string 'SERVICES-Graphic-and-Commercial-Design'
	 */
	const VALUE_SERVICES_GRAPHIC_AND_COMMERCIAL_DESIGN = 'SERVICES-Graphic-and-Commercial-Design';
	/**
	 * Constant for value 'SERVICES-Landscaping'
	 * @return string 'SERVICES-Landscaping'
	 */
	const VALUE_SERVICES_LANDSCAPING = 'SERVICES-Landscaping';
	/**
	 * Constant for value 'SERVICES-Locksmith'
	 * @return string 'SERVICES-Locksmith'
	 */
	const VALUE_SERVICES_LOCKSMITH = 'SERVICES-Locksmith';
	/**
	 * Constant for value 'SERVICES-Online-Dating'
	 * @return string 'SERVICES-Online-Dating'
	 */
	const VALUE_SERVICES_ONLINE_DATING = 'SERVICES-Online-Dating';
	/**
	 * Constant for value 'SERVICES-Event-and-Wedding-Planning'
	 * @return string 'SERVICES-Event-and-Wedding-Planning'
	 */
	const VALUE_SERVICES_EVENT_AND_WEDDING_PLANNING = 'SERVICES-Event-and-Wedding-Planning';
	/**
	 * Constant for value 'SERVICES-Schools-and-Colleges'
	 * @return string 'SERVICES-Schools-and-Colleges'
	 */
	const VALUE_SERVICES_SCHOOLS_AND_COLLEGES = 'SERVICES-Schools-and-Colleges';
	/**
	 * Constant for value 'SERVICES-Entertainment'
	 * @return string 'SERVICES-Entertainment'
	 */
	const VALUE_SERVICES_ENTERTAINMENT = 'SERVICES-Entertainment';
	/**
	 * Constant for value 'SERVICES-Aggregators'
	 * @return string 'SERVICES-Aggregators'
	 */
	const VALUE_SERVICES_AGGREGATORS = 'SERVICES-Aggregators';
	/**
	 * Constant for value 'SPORTSANDRECREATION-General'
	 * @return string 'SPORTSANDRECREATION-General'
	 */
	const VALUE_SPORTSANDRECREATION_GENERAL = 'SPORTSANDRECREATION-General';
	/**
	 * Constant for value 'SPORTSANDRECREATION-Bicycles-and-Accessories'
	 * @return string 'SPORTSANDRECREATION-Bicycles-and-Accessories'
	 */
	const VALUE_SPORTSANDRECREATION_BICYCLES_AND_ACCESSORIES = 'SPORTSANDRECREATION-Bicycles-and-Accessories';
	/**
	 * Constant for value 'SPORTSANDRECREATION-Boating-Sailing-and-Accessories'
	 * @return string 'SPORTSANDRECREATION-Boating-Sailing-and-Accessories'
	 */
	const VALUE_SPORTSANDRECREATION_BOATING_SAILING_AND_ACCESSORIES = 'SPORTSANDRECREATION-Boating-Sailing-and-Accessories';
	/**
	 * Constant for value 'SPORTSANDRECREATION-Camping-and-Survival'
	 * @return string 'SPORTSANDRECREATION-Camping-and-Survival'
	 */
	const VALUE_SPORTSANDRECREATION_CAMPING_AND_SURVIVAL = 'SPORTSANDRECREATION-Camping-and-Survival';
	/**
	 * Constant for value 'SPORTSANDRECREATION-Exercise-Equipment'
	 * @return string 'SPORTSANDRECREATION-Exercise-Equipment'
	 */
	const VALUE_SPORTSANDRECREATION_EXERCISE_EQUIPMENT = 'SPORTSANDRECREATION-Exercise-Equipment';
	/**
	 * Constant for value 'SPORTSANDRECREATION-Fishing'
	 * @return string 'SPORTSANDRECREATION-Fishing'
	 */
	const VALUE_SPORTSANDRECREATION_FISHING = 'SPORTSANDRECREATION-Fishing';
	/**
	 * Constant for value 'SPORTSANDRECREATION-Golf'
	 * @return string 'SPORTSANDRECREATION-Golf'
	 */
	const VALUE_SPORTSANDRECREATION_GOLF = 'SPORTSANDRECREATION-Golf';
	/**
	 * Constant for value 'SPORTSANDRECREATION-Hunting'
	 * @return string 'SPORTSANDRECREATION-Hunting'
	 */
	const VALUE_SPORTSANDRECREATION_HUNTING = 'SPORTSANDRECREATION-Hunting';
	/**
	 * Constant for value 'SPORTSANDRECREATION-Paintball'
	 * @return string 'SPORTSANDRECREATION-Paintball'
	 */
	const VALUE_SPORTSANDRECREATION_PAINTBALL = 'SPORTSANDRECREATION-Paintball';
	/**
	 * Constant for value 'SPORTSANDRECREATION-Sporting-Goods'
	 * @return string 'SPORTSANDRECREATION-Sporting-Goods'
	 */
	const VALUE_SPORTSANDRECREATION_SPORTING_GOODS = 'SPORTSANDRECREATION-Sporting-Goods';
	/**
	 * Constant for value 'SPORTSANDRECREATION-Swimming-Pools-and-Spas'
	 * @return string 'SPORTSANDRECREATION-Swimming-Pools-and-Spas'
	 */
	const VALUE_SPORTSANDRECREATION_SWIMMING_POOLS_AND_SPAS = 'SPORTSANDRECREATION-Swimming-Pools-and-Spas';
	/**
	 * Constant for value 'TRAVEL-General'
	 * @return string 'TRAVEL-General'
	 */
	const VALUE_TRAVEL_GENERAL = 'TRAVEL-General';
	/**
	 * Constant for value 'TRAVEL-Accommodations'
	 * @return string 'TRAVEL-Accommodations'
	 */
	const VALUE_TRAVEL_ACCOMMODATIONS = 'TRAVEL-Accommodations';
	/**
	 * Constant for value 'TRAVEL-Agencies'
	 * @return string 'TRAVEL-Agencies'
	 */
	const VALUE_TRAVEL_AGENCIES = 'TRAVEL-Agencies';
	/**
	 * Constant for value 'TRAVEL-Airlines'
	 * @return string 'TRAVEL-Airlines'
	 */
	const VALUE_TRAVEL_AIRLINES = 'TRAVEL-Airlines';
	/**
	 * Constant for value 'TRAVEL-Auto-Rentals'
	 * @return string 'TRAVEL-Auto-Rentals'
	 */
	const VALUE_TRAVEL_AUTO_RENTALS = 'TRAVEL-Auto-Rentals';
	/**
	 * Constant for value 'TRAVEL-Cruises'
	 * @return string 'TRAVEL-Cruises'
	 */
	const VALUE_TRAVEL_CRUISES = 'TRAVEL-Cruises';
	/**
	 * Constant for value 'TRAVEL-Other-Transportation'
	 * @return string 'TRAVEL-Other-Transportation'
	 */
	const VALUE_TRAVEL_OTHER_TRANSPORTATION = 'TRAVEL-Other-Transportation';
	/**
	 * Constant for value 'TRAVEL-Services'
	 * @return string 'TRAVEL-Services'
	 */
	const VALUE_TRAVEL_SERVICES = 'TRAVEL-Services';
	/**
	 * Constant for value 'TRAVEL-Supplies'
	 * @return string 'TRAVEL-Supplies'
	 */
	const VALUE_TRAVEL_SUPPLIES = 'TRAVEL-Supplies';
	/**
	 * Constant for value 'TRAVEL-Tours'
	 * @return string 'TRAVEL-Tours'
	 */
	const VALUE_TRAVEL_TOURS = 'TRAVEL-Tours';
	/**
	 * Constant for value 'TRAVEL-AirlinesSpirit-Air'
	 * @return string 'TRAVEL-AirlinesSpirit-Air'
	 */
	const VALUE_TRAVEL_AIRLINESSPIRIT_AIR = 'TRAVEL-AirlinesSpirit-Air';
	/**
	 * Constant for value 'Other-SubCategories'
	 * @return string 'Other-SubCategories'
	 */
	const VALUE_OTHER_SUBCATEGORIES = 'Other-SubCategories';
	/**
	 * Constructor
	 * @return PayPalTypeBusinessSubCategoryType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_SUBCATEGORY_UNSPECIFIED,self::VALUE_ANTIQUES_GENERAL,self::VALUE_ANTIQUES_ANTIQUITIES,self::VALUE_ANTIQUES_DECORATIVE,self::VALUE_ANTIQUES_BOOKS_MANUSCRIPTS,self::VALUE_ANTIQUES_FURNITURE,self::VALUE_ANTIQUES_GLASS,self::VALUE_ANTIQUES_RUGSCARPETS,self::VALUE_ANTIQUES_POTTERY,self::VALUE_ANTIQUES_CULTURAL,self::VALUE_ANTIQUES_ARTIFACTS_GRAVE_RELATED_AND_NATIVE_AMERICAN_CRAFTS,self::VALUE_ARTSANDCRAFTS_GENERAL,self::VALUE_ARTSANDCRAFTS_ART_DEALER_AND_GALLERIES,self::VALUE_ARTSANDCRAFTS_PRINTS,self::VALUE_ARTSANDCRAFTS_PAINTING,self::VALUE_ARTSANDCRAFTS_PHOTOGRAPHY,self::VALUE_ARTSANDCRAFTS_REPRODUCTIONS,self::VALUE_ARTSANDCRAFTS_SCULPTURES,self::VALUE_ARTSANDCRAFTS_WOODWORKING,self::VALUE_ARTSANDCRAFTS_ART_AND_CRAFT_SUPPLIES,self::VALUE_ARTSANDCRAFTS_FABRICS_AND_SEWING,self::VALUE_ARTSANDCRAFTS_QUILTING,self::VALUE_ARTSANDCRAFTS_SCRAPBOOKING,self::VALUE_AUTOMOTIVE_GENERAL,self::VALUE_AUTOMOTIVE_AUTOS,self::VALUE_AUTOMOTIVE_AVIATION,self::VALUE_AUTOMOTIVE_MOTORCYCLES,self::VALUE_AUTOMOTIVE_PARTS_AND_SUPPLIES,self::VALUE_AUTOMOTIVE_SERVICES,self::VALUE_AUTOMOTIVE_VINTAGE_AND_COLLECTIBLE_VEHICLES,self::VALUE_BEAUTY_GENERAL,self::VALUE_BEAUTY_BODY_CARE_PERSONAL_HYGIENE,self::VALUE_BEAUTY_FRAGRANCES_AND_PERFUMES,self::VALUE_BEAUTY_MAKEUP,self::VALUE_BOOKS_GENERAL,self::VALUE_BOOKS_AUDIO_BOOKS,self::VALUE_BOOKS_CHILDREN_BOOKS,self::VALUE_BOOKS_COMPUTER_BOOKS,self::VALUE_BOOKS_EDUCATIONAL_AND_TEXTBOOKS,self::VALUE_BOOKS_MAGAZINES,self::VALUE_BOOKS_FICTION_AND_LITERATURE,self::VALUE_BOOKS_NONFICTION,self::VALUE_BOOKS_VINTAGE_AND_COLLECTIBLES,self::VALUE_BUSINESS_GENERAL,self::VALUE_BUSINESS_AGRICULTURAL,self::VALUE_BUSINESS_CONSTRUCTION,self::VALUE_BUSINESS_EDUCATIONAL,self::VALUE_BUSINESS_INDUSTRIAL,self::VALUE_BUSINESS_OFFICE_SUPPLIES_AND_EQUIPMENT,self::VALUE_BUSINESS_GENERALSERVICES,self::VALUE_BUSINESS_ADVERTISING,self::VALUE_BUSINESS_EMPLOYMENT,self::VALUE_BUSINESS_MARKETING,self::VALUE_BUSINESS_MEETING_PLANNERS,self::VALUE_BUSINESS_MESSAGING_AND_PAGING_SERVICES,self::VALUE_BUSINESS_SEMINARS,self::VALUE_BUSINESS_PUBLISHING,self::VALUE_BUSINESS_SHIPPING_AND_PACKAGING,self::VALUE_BUSINESS_WHOLESALE,self::VALUE_BUSINESS_INDUSTRIAL_SOLVENTS,self::VALUE_CAMERASANDPHOTOGRAPHY_GENERAL,self::VALUE_CAMERASANDPHOTOGRAPHY_ACCESSORIES,self::VALUE_CAMERASANDPHOTOGRAPHY_CAMERAS,self::VALUE_CAMERASANDPHOTOGRAPHY_VIDEO_EQUIPMENT,self::VALUE_CAMERASANDPHOTOGRAPHY_FILM,self::VALUE_CAMERASANDPHOTOGRAPHY_SUPPLIES,self::VALUE_CLOTHING_ACCESSORIES,self::VALUE_CLOTHING_BABIES_CLOTHING_AND_SUPPLIES,self::VALUE_CLOTHING_CHILDRENS_CLOTHING,self::VALUE_CLOTHING_MENS_CLOTHING,self::VALUE_CLOTHING_SHOES,self::VALUE_CLOTHING_WEDDING_CLOTHING,self::VALUE_CLOTHING_WOMENS_CLOTHING,self::VALUE_CLOTHING_GENERAL,self::VALUE_CLOTHING_JEWELRY,self::VALUE_CLOTHING_WATCHES_AND_CLOCKS,self::VALUE_CLOTHING_RINGS,self::VALUE_COLLECTIBLES_GENERAL,self::VALUE_COLLECTIBLES_ADVERTISING,self::VALUE_COLLECTIBLES_ANIMALS,self::VALUE_COLLECTIBLES_ANIMATION,self::VALUE_COLLECTIBLES_COIN_OPERATED_BANKS_AND_CASINOS,self::VALUE_COLLECTIBLES_COINS_AND_PAPER_MONEY,self::VALUE_COLLECTIBLES_COMICS,self::VALUE_COLLECTIBLES_DECORATIVE,self::VALUE_COLLECTIBLES_DISNEYANA,self::VALUE_COLLECTIBLES_HOLIDAY,self::VALUE_COLLECTIBLES_KNIVES_AND_SWORDS,self::VALUE_COLLECTIBLES_MILITARIA,self::VALUE_COLLECTIBLES_POSTCARDS_AND_PAPER,self::VALUE_COLLECTIBLES_STAMPS,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_GENERAL,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_DESKTOP_PCS,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_MONITORS,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_HARDWARE,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_PERIPHERALS,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_LAPTOPS_NOTEBOOKS_PDAS,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_NETWORKING_EQUIPMENT,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_PARTS_AND_ACCESSORIES,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_GENERALSOFTWARE,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_OEM_SOFTWARE,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_ACADEMIC_SOFTWARE,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_BETA_SOFTWARE,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_GAME_SOFTWARE,self::VALUE_COMPUTERHARDWAREANDSOFTWARE_DATA_PROCESSING_SVC,self::VALUE_CULTUREANDRELIGION_GENERAL,self::VALUE_CULTUREANDRELIGION_CHRISTIANITY,self::VALUE_CULTUREANDRELIGION_METAPHYSICAL,self::VALUE_CULTUREANDRELIGION_NEW_AGE,self::VALUE_CULTUREANDRELIGION_ORGANIZATIONS,self::VALUE_CULTUREANDRELIGION_OTHER_FAITHS,self::VALUE_CULTUREANDRELIGION_COLLECTIBLES,self::VALUE_ELECTRONICSANDTELECOM_GENERALTELECOM,self::VALUE_ELECTRONICSANDTELECOM_CELL_PHONES_AND_PAGERS,self::VALUE_ELECTRONICSANDTELECOM_TELEPHONE_CARDS,self::VALUE_ELECTRONICSANDTELECOM_TELEPHONE_EQUIPMENT,self::VALUE_ELECTRONICSANDTELECOM_TELEPHONE_SERVICES,self::VALUE_ELECTRONICSANDTELECOM_GENERALELECTRONICS,self::VALUE_ELECTRONICSANDTELECOM_CAR_AUDIO_AND_ELECTRONICS,self::VALUE_ELECTRONICSANDTELECOM_HOME_ELECTRONICS,self::VALUE_ELECTRONICSANDTELECOM_HOME_AUDIO,self::VALUE_ELECTRONICSANDTELECOM_GADGETS_AND_OTHER_ELECTRONICS,self::VALUE_ELECTRONICSANDTELECOM_BATTERIES,self::VALUE_ELECTRONICSANDTELECOM_SCANNERSRADIOS,self::VALUE_ELECTRONICSANDTELECOM_RADAR_DECTORS,self::VALUE_ELECTRONICSANDTELECOM_RADAR_JAMMING_DEVICES,self::VALUE_ELECTRONICSANDTELECOM_SATELLITE_AND_CABLE_TV_DESCRAMBLERS,self::VALUE_ELECTRONICSANDTELECOM_SURVEILLANCE_EQUIPMENT,self::VALUE_ENTERTAINMENT_GENERAL,self::VALUE_ENTERTAINMENT_MOVIES,self::VALUE_ENTERTAINMENT_MUSIC,self::VALUE_ENTERTAINMENT_CONCERTS,self::VALUE_ENTERTAINMENT_THEATER,self::VALUE_ENTERTAINMENT_BOOTLEG_RECORDINGS,self::VALUE_ENTERTAINMENT_PROMOTIONAL_ITEMS,self::VALUE_ENTERTAINMENTMEMORABILIA_GENERAL,self::VALUE_ENTERTAINMENTMEMORABILIA_AUTOGRAPHS,self::VALUE_ENTERTAINMENTMEMORABILIA_LIMITED_EDITIONS,self::VALUE_ENTERTAINMENTMEMORABILIA_MOVIE,self::VALUE_ENTERTAINMENTMEMORABILIA_MUSIC,self::VALUE_ENTERTAINMENTMEMORABILIA_NOVELTIES,self::VALUE_ENTERTAINMENTMEMORABILIA_PHOTOS,self::VALUE_ENTERTAINMENTMEMORABILIA_POSTERS,self::VALUE_ENTERTAINMENTMEMORABILIA_SPORTS_AND_FAN_SHOP,self::VALUE_ENTERTAINMENTMEMORABILIA_SCIENCE_FICTION,self::VALUE_FOODDRINKANDNUTRITION_GENERAL,self::VALUE_FOODDRINKANDNUTRITION_COFFEE_AND_TEA,self::VALUE_FOODDRINKANDNUTRITION_FOOD_PRODUCTS,self::VALUE_FOODDRINKANDNUTRITION_GOURMET_ITEMS,self::VALUE_FOODDRINKANDNUTRITION_HEALTH_AND_NUTRITION,self::VALUE_FOODDRINKANDNUTRITION_SERVICES,self::VALUE_FOODDRINKANDNUTRITION_VITAMINS_AND_SUPPLEMENTS,self::VALUE_FOODDRINKANDNUTRITION_WEIGHT_MANAGEMENT_AND_HEALTH_PRODUCTS,self::VALUE_FOODDRINKANDNUTRITION_RESTAURANT,self::VALUE_FOODDRINKANDNUTRITION_TOBACCO_AND_CIGARS,self::VALUE_FOODDRINKANDNUTRITION_ALCOHOLIC_BEVERAGES,self::VALUE_GIFTSANDFLOWERS_GENERAL,self::VALUE_GIFTSANDFLOWERS_FLOWERS,self::VALUE_GIFTSANDFLOWERS_GREETING_CARDS,self::VALUE_GIFTSANDFLOWERS_HUMOROUS_GIFTS_AND_NOVELTIES,self::VALUE_GIFTSANDFLOWERS_PERSONALIZED_GIFTS,self::VALUE_GIFTSANDFLOWERS_PRODUCTS,self::VALUE_GIFTSANDFLOWERS_SERVICES,self::VALUE_HOBBIESTOYSANDGAMES_GENERAL,self::VALUE_HOBBIESTOYSANDGAMES_ACTION_FIGURES,self::VALUE_HOBBIESTOYSANDGAMES_BEAN_BABIES,self::VALUE_HOBBIESTOYSANDGAMES_BARBIES,self::VALUE_HOBBIESTOYSANDGAMES_BEARS,self::VALUE_HOBBIESTOYSANDGAMES_DOLLS,self::VALUE_HOBBIESTOYSANDGAMES_GAMES,self::VALUE_HOBBIESTOYSANDGAMES_MODEL_KITS,self::VALUE_HOBBIESTOYSANDGAMES_DIECAST_TOYS_VEHICLES,self::VALUE_HOBBIESTOYSANDGAMES_VIDEO_GAMES_AND_SYSTEMS,self::VALUE_HOBBIESTOYSANDGAMES_VINTAGE_AND_ANTIQUE_TOYS,self::VALUE_HOBBIESTOYSANDGAMES_BACKUPUNRELEASED_GAMES,self::VALUE_HOBBIESTOYSANDGAMES_GAME_COPYING_HARDWARESOFTWARE,self::VALUE_HOBBIESTOYSANDGAMES_MOD_CHIPS,self::VALUE_HOMEANDGARDEN_GENERAL,self::VALUE_HOMEANDGARDEN_APPLIANCES,self::VALUE_HOMEANDGARDEN_BED_AND_BATH,self::VALUE_HOMEANDGARDEN_FURNISHING_AND_DECORATING,self::VALUE_HOMEANDGARDEN_GARDEN_SUPPLIES,self::VALUE_HOMEANDGARDEN_HARDWARE_AND_TOOLS,self::VALUE_HOMEANDGARDEN_HOUSEHOLD_GOODS,self::VALUE_HOMEANDGARDEN_KITCHENWARE,self::VALUE_HOMEANDGARDEN_RUGS_AND_CARPETS,self::VALUE_HOMEANDGARDEN_SECURITY_AND_HOME_DEFENSE,self::VALUE_HOMEANDGARDEN_PLANTS_AND_SEEDS,self::VALUE_INTERNETANDNETWORKSERVICES_GENERAL,self::VALUE_INTERNETANDNETWORKSERVICES_BULLETIN_BOARD,self::VALUE_INTERNETANDNETWORKSERVICES_ONLINE_SERVICES,self::VALUE_INTERNETANDNETWORKSERVICES_AUCTION_MANAGEMENT_TOOLS,self::VALUE_INTERNETANDNETWORKSERVICES_ECOMMERCE_DEVELOPMENT,self::VALUE_INTERNETANDNETWORKSERVICES_TRAINING_SERVICES,self::VALUE_INTERNETANDNETWORKSERVICES_ONLINE_MALLS,self::VALUE_INTERNETANDNETWORKSERVICES_WEB_HOSTING_AND_DESIGN,self::VALUE_MEDIAANDENTERTAINMENT_GENERAL,self::VALUE_MEDIAANDENTERTAINMENT_CONCERTS,self::VALUE_MEDIAANDENTERTAINMENT_THEATER,self::VALUE_MEDICALANDPHARMACEUTICAL_GENERAL,self::VALUE_MEDICALANDPHARMACEUTICAL_MEDICAL,self::VALUE_MEDICALANDPHARMACEUTICAL_DENTAL,self::VALUE_MEDICALANDPHARMACEUTICAL_OPTHAMALIC,self::VALUE_MEDICALANDPHARMACEUTICAL_PRESCRIPTION_DRUGS,self::VALUE_MEDICALANDPHARMACEUTICAL_DEVICES,self::VALUE_MONEYSERVICEBUSINESSES_GENERAL,self::VALUE_MONEYSERVICEBUSINESSES_REMITTANCE,self::VALUE_MONEYSERVICEBUSINESSES_WIRE_TRANSFER,self::VALUE_MONEYSERVICEBUSINESSES_MONEY_ORDERS,self::VALUE_MONEYSERVICEBUSINESSES_ELECTRONIC_CASH,self::VALUE_MONEYSERVICEBUSINESSES_CURRENCY_DEALEREXCHANGE,self::VALUE_MONEYSERVICEBUSINESSES_CHECK_CASHIER,self::VALUE_MONEYSERVICEBUSINESSES_TRAVELERS_CHECKS,self::VALUE_MONEYSERVICEBUSINESSES_STORED_VALUE_CARDS,self::VALUE_NONPROFITPOLITICALANDRELIGION_GENERAL,self::VALUE_NONPROFITPOLITICALANDRELIGION_CHARITIES,self::VALUE_NONPROFITPOLITICALANDRELIGION_POLITICAL,self::VALUE_NONPROFITPOLITICALANDRELIGION_RELIGIOUS,self::VALUE_PETSANDANIMALS_GENERAL,self::VALUE_PETSANDANIMALS_SUPPLIES_AND_TOYS,self::VALUE_PETSANDANIMALS_WILDLIFE_PRODUCTS,self::VALUE_REALESTATE_GENERAL,self::VALUE_REALESTATE_COMMERCIAL,self::VALUE_REALESTATE_RESIDENTIAL,self::VALUE_REALESTATE_TIME_SHARES,self::VALUE_SERVICES_GENERALGOVERNMENT,self::VALUE_SERVICES_LEGAL,self::VALUE_SERVICES_MEDICAL,self::VALUE_SERVICES_DENTAL,self::VALUE_SERVICES_VISION,self::VALUE_SERVICES_GENERAL,self::VALUE_SERVICES_CHILD_CARE_SERVICES,self::VALUE_SERVICES_CONSULTING,self::VALUE_SERVICES_IMPORTINGEXPORTING,self::VALUE_SERVICES_INSURANCEDIRECT,self::VALUE_SERVICES_FINANCIAL_SERVICES,self::VALUE_SERVICES_GRAPHIC_AND_COMMERCIAL_DESIGN,self::VALUE_SERVICES_LANDSCAPING,self::VALUE_SERVICES_LOCKSMITH,self::VALUE_SERVICES_ONLINE_DATING,self::VALUE_SERVICES_EVENT_AND_WEDDING_PLANNING,self::VALUE_SERVICES_SCHOOLS_AND_COLLEGES,self::VALUE_SERVICES_ENTERTAINMENT,self::VALUE_SERVICES_AGGREGATORS,self::VALUE_SPORTSANDRECREATION_GENERAL,self::VALUE_SPORTSANDRECREATION_BICYCLES_AND_ACCESSORIES,self::VALUE_SPORTSANDRECREATION_BOATING_SAILING_AND_ACCESSORIES,self::VALUE_SPORTSANDRECREATION_CAMPING_AND_SURVIVAL,self::VALUE_SPORTSANDRECREATION_EXERCISE_EQUIPMENT,self::VALUE_SPORTSANDRECREATION_FISHING,self::VALUE_SPORTSANDRECREATION_GOLF,self::VALUE_SPORTSANDRECREATION_HUNTING,self::VALUE_SPORTSANDRECREATION_PAINTBALL,self::VALUE_SPORTSANDRECREATION_SPORTING_GOODS,self::VALUE_SPORTSANDRECREATION_SWIMMING_POOLS_AND_SPAS,self::VALUE_TRAVEL_GENERAL,self::VALUE_TRAVEL_ACCOMMODATIONS,self::VALUE_TRAVEL_AGENCIES,self::VALUE_TRAVEL_AIRLINES,self::VALUE_TRAVEL_AUTO_RENTALS,self::VALUE_TRAVEL_CRUISES,self::VALUE_TRAVEL_OTHER_TRANSPORTATION,self::VALUE_TRAVEL_SERVICES,self::VALUE_TRAVEL_SUPPLIES,self::VALUE_TRAVEL_TOURS,self::VALUE_TRAVEL_AIRLINESSPIRIT_AIR,self::VALUE_OTHER_SUBCATEGORIES));
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