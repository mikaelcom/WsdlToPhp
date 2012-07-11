<?php
/**
 * AutoloadFile 
 * @date 10/07/2012
 */
/**
 * AutoloadFile
 * @date 10/07/2012
 */
require_once dirname(__FILE__) . '/JmDataMovieAppWsdlClass.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetNearByStoresResponse.php';
require_once dirname(__FILE__) . '/Get/Stores/JmDataMovieAppTypeGetNearByStores.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetStoresFromIDsResponse.php';
require_once dirname(__FILE__) . '/Get/Categories/JmDataMovieAppTypeGetCategories.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetCategoriesResponse.php';
require_once dirname(__FILE__) . '/Get/Ds/JmDataMovieAppTypeGetMoviesFromIDs.php';
require_once dirname(__FILE__) . '/Category/JmDataMovieAppTypeCategory.php';
require_once dirname(__FILE__) . '/Array/Category/JmDataMovieAppTypeArrayOfCategory.php';
require_once dirname(__FILE__) . '/Get/Ds/JmDataMovieAppTypeGetStoresFromIDs.php';
require_once dirname(__FILE__) . '/Update/Response/JmDataMovieAppTypeUpdateUUIDResponse.php';
require_once dirname(__FILE__) . '/Check/Availability/JmDataMovieAppTypeCheckAvailability.php';
require_once dirname(__FILE__) . '/Reserve/Response/JmDataMovieAppTypeReserveMovieResponse.php';
require_once dirname(__FILE__) . '/Reserve/Movie/JmDataMovieAppTypeReserveMovie.php';
require_once dirname(__FILE__) . '/Check/Response/JmDataMovieAppTypeCheckAvailabilityResponse.php';
require_once dirname(__FILE__) . '/Register/User/JmDataMovieAppTypeRegisterUser.php';
require_once dirname(__FILE__) . '/Update/JmDataMovieAppTypeUpdateUUID.php';
require_once dirname(__FILE__) . '/Register/Response/JmDataMovieAppTypeRegisterUserResponse.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetMoviesFromIDsResponse.php';
require_once dirname(__FILE__) . '/Search/Movie/JmDataMovieAppTypeSearchMovie.php';
require_once dirname(__FILE__) . '/Get/Details/JmDataMovieAppTypeGetMovieDetails.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetTopMovieListingResponse.php';
require_once dirname(__FILE__) . '/Get/Listing/JmDataMovieAppTypeGetTopMovieListing.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetMovieDetailsResponse.php';
require_once dirname(__FILE__) . '/Movie/Detail/JmDataMovieAppTypeMovieDetail.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetMovieDetailsFromEANResponse.php';
require_once dirname(__FILE__) . '/Get/EAN/JmDataMovieAppTypeGetMovieDetailsFromEAN.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetReleasePlanResponse.php';
require_once dirname(__FILE__) . '/Get/Plan/JmDataMovieAppTypeGetReleasePlan.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetMovieListingByGenreResponse.php';
require_once dirname(__FILE__) . '/Get/Genre/JmDataMovieAppTypeGetMovieListingByGenre.php';
require_once dirname(__FILE__) . '/Search/Response/JmDataMovieAppTypeSearchMovieResponse.php';
require_once dirname(__FILE__) . '/Get/Listing/JmDataMovieAppTypeGetNewMovieListing.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetNewMovieListingResponse.php';
require_once dirname(__FILE__) . '/Release/List/JmDataMovieAppTypeReleaseList.php';
require_once dirname(__FILE__) . '/Array/List/JmDataMovieAppTypeArrayOfReleaseList.php';
require_once dirname(__FILE__) . '/Rate/Response/JmDataMovieAppTypeRateMovieResponse.php';
require_once dirname(__FILE__) . '/Rate/Movie/JmDataMovieAppTypeRateMovie.php';
require_once dirname(__FILE__) . '/Remove/Response/JmDataMovieAppTypeRemoveFavoriteMovieResponse.php';
require_once dirname(__FILE__) . '/Remove/Movie/JmDataMovieAppTypeRemoveFavoriteMovie.php';
require_once dirname(__FILE__) . '/Register/Response/JmDataMovieAppTypeRegisterFavoriteStoreResponse.php';
require_once dirname(__FILE__) . '/Remove/Store/JmDataMovieAppTypeRemoveFavoriteStore.php';
require_once dirname(__FILE__) . '/Remove/Response/JmDataMovieAppTypeRemoveFavoriteStoreResponse.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetFavoriteMoviesResponse.php';
require_once dirname(__FILE__) . '/Get/Movies/JmDataMovieAppTypeGetFavoriteMovies.php';
require_once dirname(__FILE__) . '/Register/Store/JmDataMovieAppTypeRegisterFavoriteStore.php';
require_once dirname(__FILE__) . '/Register/Response/JmDataMovieAppTypeRegisterFavoriteMovieResponse.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetCustomerCardResponse.php';
require_once dirname(__FILE__) . '/Get/Card/JmDataMovieAppTypeGetCustomerCard.php';
require_once dirname(__FILE__) . '/Notification/Response/JmDataMovieAppTypeNotificationRegistrationResponse.php';
require_once dirname(__FILE__) . '/Customer/Card/JmDataMovieAppTypeCustomerCard.php';
require_once dirname(__FILE__) . '/User/Long/JmDataMovieAppTypeUserLatLong.php';
require_once dirname(__FILE__) . '/Register/Movie/JmDataMovieAppTypeRegisterFavoriteMovie.php';
require_once dirname(__FILE__) . '/User/Response/JmDataMovieAppTypeUserLatLongResponse.php';
require_once dirname(__FILE__) . '/Array/List/JmDataMovieAppTypeArrayOfMovieList.php';
require_once dirname(__FILE__) . '/Movie/List/JmDataMovieAppTypeMovieList.php';
require_once dirname(__FILE__) . '/Coupon/JmDataMovieAppTypeCoupon.php';
require_once dirname(__FILE__) . '/Array/Coupon/JmDataMovieAppTypeArrayOfCoupon.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetCouponsResponse.php';
require_once dirname(__FILE__) . '/Get/Movies/JmDataMovieAppTypeGetFrontpageMovies.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetFrontpageMoviesResponse.php';
require_once dirname(__FILE__) . '/Cover/JmDataMovieAppTypeCover.php';
require_once dirname(__FILE__) . '/Array/Cover/JmDataMovieAppTypeArrayOfCover.php';
require_once dirname(__FILE__) . '/Get/Coupons/JmDataMovieAppTypeGetCoupons.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetPromotedMoviesResponse.php';
require_once dirname(__FILE__) . '/Array/Store/JmDataMovieAppTypeArrayOfStore.php';
require_once dirname(__FILE__) . '/Get/Response/JmDataMovieAppTypeGetFavoriteStoreResponse.php';
require_once dirname(__FILE__) . '/Get/Store/JmDataMovieAppTypeGetFavoriteStore.php';
require_once dirname(__FILE__) . '/Store/JmDataMovieAppTypeStore.php';
require_once dirname(__FILE__) . '/Update/Settings/JmDataMovieAppTypeUpdateSettings.php';
require_once dirname(__FILE__) . '/Get/Movies/JmDataMovieAppTypeGetPromotedMovies.php';
require_once dirname(__FILE__) . '/Update/Response/JmDataMovieAppTypeUpdateSettingsResponse.php';
require_once dirname(__FILE__) . '/Notification/Registration/JmDataMovieAppTypeNotificationRegistration.php';
require_once dirname(__FILE__) . '/Notification/JmDataMovieAppServiceNotification.php';
require_once dirname(__FILE__) . '/Get/JmDataMovieAppServiceGet.php';
require_once dirname(__FILE__) . '/User/JmDataMovieAppServiceUser.php';
require_once dirname(__FILE__) . '/Register/JmDataMovieAppServiceRegister.php';
require_once dirname(__FILE__) . '/Remove/JmDataMovieAppServiceRemove.php';
require_once dirname(__FILE__) . '/Update/JmDataMovieAppServiceUpdate.php';
require_once dirname(__FILE__) . '/Rate/JmDataMovieAppServiceRate.php';
require_once dirname(__FILE__) . '/Reserve/JmDataMovieAppServiceReserve.php';
require_once dirname(__FILE__) . '/Check/JmDataMovieAppServiceCheck.php';
require_once dirname(__FILE__) . '/Search/JmDataMovieAppServiceSearch.php';
require_once dirname(__FILE__) . '/JmDataMovieAppClassMap.php';
?>