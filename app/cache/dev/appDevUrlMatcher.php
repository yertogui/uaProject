<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // ua_uc_rua_project2_homepage
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaDefaultController::indexAction',  '_route' => 'ua_uc_rua_project2_homepage',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            // ua_ucr_ua_project2_search
            if (0 === strpos($pathinfo, '/search') && preg_match('#^/search/(?P<page>[^/,]++),(?P<moviesNum>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_search')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaDefaultController::searchAction',));
            }

            // ua_uc_rua_project2_show_login_form
            if ($pathinfo === '/show_login_form') {
                return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAccountController::showLoginFormAction',  '_route' => 'ua_uc_rua_project2_show_login_form',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // ua_uc_rua_project2_log_out
            if ($pathinfo === '/log_out') {
                return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAccountController::logOutAction',  '_route' => 'ua_uc_rua_project2_log_out',);
            }

            // ua_ucr_ua_project2_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAccountController::loginAction',  '_route' => 'ua_ucr_ua_project2_login',);
            }

        }

        // ua_uc_rua_project2_create_account
        if ($pathinfo === '/create_account') {
            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAccountController::createAccountAction',  '_route' => 'ua_uc_rua_project2_create_account',);
        }

        // ua_uc_rua_project2_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaDefaultController::aboutAction',  '_route' => 'ua_uc_rua_project2_about',);
        }

        // ua_uc_rua_project2_faq
        if ($pathinfo === '/faq') {
            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaDefaultController::faqAction',  '_route' => 'ua_uc_rua_project2_faq',);
        }

        // ua_uc_rua_project2_contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaDefaultController::contactAction',  '_route' => 'ua_uc_rua_project2_contact',);
        }

        if (0 === strpos($pathinfo, '/movie')) {
            // ua_uc_rua_project2_movies
            if (0 === strpos($pathinfo, '/movies') && preg_match('#^/movies/(?P<page>[^/,]++),(?P<moviesNum>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_uc_rua_project2_movies')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::showMoviesAction',));
            }

            // ua_uc_rua_project2_movie_details
            if (0 === strpos($pathinfo, '/movie_detail') && preg_match('#^/movie_detail/(?P<codMovie>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_uc_rua_project2_movie_details')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::movieDetailsAction',));
            }

        }

        // ua_uc_rua_project2_gender_movies
        if (0 === strpos($pathinfo, '/gender_movies') && preg_match('#^/gender_movies/(?P<codGender>[^/,]++),(?P<page>[^/,]++),(?P<moviesNum>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_uc_rua_project2_gender_movies')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::genderMoviesAction',));
        }

        // ua_uc_rua_project2_actor_movies
        if (0 === strpos($pathinfo, '/actor_movies') && preg_match('#^/actor_movies/(?P<idActor>[^/,]++),(?P<page>[^/,]++),(?P<moviesNum>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_uc_rua_project2_actor_movies')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::actorMoviesAction',));
        }

        if (0 === strpos($pathinfo, '/movies_by_')) {
            // ua_uc_rua_project2_range_movies_by_years
            if (0 === strpos($pathinfo, '/movies_by_years/') && preg_match('#^/movies_by_years/,(?P<page>[^/,]++),(?P<moviesNum>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_uc_rua_project2_range_movies_by_years')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::moviesByYearsAction',));
            }

            // ua_uc_rua_project2_range_movies_by_price
            if (0 === strpos($pathinfo, '/movies_by_price/') && preg_match('#^/movies_by_price/,(?P<page>[^/,]++),(?P<moviesNum>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_uc_rua_project2_range_movies_by_price')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::moviesByPriceAction',));
            }

        }

        // ua_uc_rua_project2_pagination
        if (0 === strpos($pathinfo, '/pagination') && preg_match('#^/pagination/(?P<arrayMovies>[^/,]++),(?P<page>[^/,]++),(?P<moviesNum>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_uc_rua_project2_pagination')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::paginationAction',));
        }

        // ua_ucr_ua_project2_movie_qualification
        if (0 === strpos($pathinfo, '/movie_qualification') && preg_match('#^/movie_qualification/(?P<codMovie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_movie_qualification')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAccountController::movieQualificationAction',));
        }

        if (0 === strpos($pathinfo, '/in')) {
            // ua_ucr_ua_project2_index_admin
            if ($pathinfo === '/index_admin') {
                return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAdminController::index_adminAction',  '_route' => 'ua_ucr_ua_project2_index_admin',);
            }

            if (0 === strpos($pathinfo, '/insert_')) {
                if (0 === strpos($pathinfo, '/insert_movie')) {
                    // ua_ucr_ua_project2_insert_movie_form
                    if ($pathinfo === '/insert_movie_form') {
                        return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::insert_movie_formAction',  '_route' => 'ua_ucr_ua_project2_insert_movie_form',);
                    }

                    // ua_ucr_ua_project2_insert_movie
                    if ($pathinfo === '/insert_movie') {
                        return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::insert_movieAction',  '_route' => 'ua_ucr_ua_project2_insert_movie',);
                    }

                }

                if (0 === strpos($pathinfo, '/insert_gender')) {
                    // ua_ucr_ua_project2_insert_gender_form
                    if ($pathinfo === '/insert_gender_form') {
                        return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaGenderController::insert_gender_formAction',  '_route' => 'ua_ucr_ua_project2_insert_gender_form',);
                    }

                    // ua_ucr_ua_project2_insert_gender
                    if ($pathinfo === '/insert_gender') {
                        return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaGenderController::insert_genderAction',  '_route' => 'ua_ucr_ua_project2_insert_gender',);
                    }

                }

                if (0 === strpos($pathinfo, '/insert_a')) {
                    if (0 === strpos($pathinfo, '/insert_actor')) {
                        // ua_ucr_ua_project2_insert_actor_form
                        if ($pathinfo === '/insert_actor_form') {
                            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaActorController::insert_actor_formAction',  '_route' => 'ua_ucr_ua_project2_insert_actor_form',);
                        }

                        // ua_ucr_ua_project2_insert_actor
                        if ($pathinfo === '/insert_actor') {
                            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaActorController::insert_actorAction',  '_route' => 'ua_ucr_ua_project2_insert_actor',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/insert_admin')) {
                        // ua_ucr_ua_project2_insert_adm_form
                        if ($pathinfo === '/insert_admin_form') {
                            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAdminController::insert_admin_formAction',  '_route' => 'ua_ucr_ua_project2_insert_adm_form',);
                        }

                        // ua_ucr_ua_project2_insert_admin
                        if ($pathinfo === '/insert_admin') {
                            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAdminController::insert_adminAction',  '_route' => 'ua_ucr_ua_project2_insert_admin',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/update_')) {
            if (0 === strpos($pathinfo, '/update_movie')) {
                // ua_ucr_ua_project2_update_movie_form
                if ($pathinfo === '/update_movie_form') {
                    return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::update_movie_formAction',  '_route' => 'ua_ucr_ua_project2_update_movie_form',);
                }

                // ua_ucr_ua_project2_update_movie
                if (preg_match('#^/update_movie/(?P<codMovie>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_update_movie')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::update_movieAction',));
                }

                // ua_ucr_ua_project2_update_movie_page
                if (0 === strpos($pathinfo, '/update_movie_page') && preg_match('#^/update_movie_page/(?P<codMovie>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_update_movie_page')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::update_movie_pageAction',));
                }

            }

            if (0 === strpos($pathinfo, '/update_gender')) {
                // ua_ucr_ua_project2_update_gender_form
                if ($pathinfo === '/update_gender_form') {
                    return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaGenderController::update_gender_formAction',  '_route' => 'ua_ucr_ua_project2_update_gender_form',);
                }

                // ua_ucr_ua_project2_update_gender
                if (preg_match('#^/update_gender/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_update_gender')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaGenderController::update_genderAction',));
                }

                // ua_ucr_ua_project2_update_gender_page
                if (0 === strpos($pathinfo, '/update_gender_page') && preg_match('#^/update_gender_page/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_update_gender_page')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaGenderController::update_gender_pageAction',));
                }

            }

        }

        // ua_ucr_ua_project2_insert_comment
        if (0 === strpos($pathinfo, '/insert_comment') && preg_match('#^/insert_comment/(?P<codMovie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_insert_comment')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::insertCommentAction',));
        }

        // ua_ucr_ua_project2_shopping_cart
        if ($pathinfo === '/shopping_cart') {
            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAccountController::shoppingCartAction',  '_route' => 'ua_ucr_ua_project2_shopping_cart',);
        }

        // ua_ucr_ua_project2_add_to_cart
        if (0 === strpos($pathinfo, '/add_to_cart') && preg_match('#^/add_to_cart/(?P<codMovie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_add_to_cart')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAccountController::addToCartAction',));
        }

        if (0 === strpos($pathinfo, '/purchase')) {
            // ua_ucr_ua_project2_purchase_form
            if ($pathinfo === '/purchase_form') {
                return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAccountController::purchaseFormAction',  '_route' => 'ua_ucr_ua_project2_purchase_form',);
            }

            // ua_ucr_ua_project2_purchase
            if ($pathinfo === '/purchase') {
                return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAccountController::purchaseAction',  '_route' => 'ua_ucr_ua_project2_purchase',);
            }

        }

        // ua_uc_rua_project2_remove_from_cart
        if (0 === strpos($pathinfo, '/remove_form_cart') && preg_match('#^/remove_form_cart/(?P<codMovie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_uc_rua_project2_remove_from_cart')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAccountController::removeItemAction',));
        }

        // ua_ucr_ua_project2_customer_profile
        if ($pathinfo === '/customer_profile') {
            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAccountController::customerProfileAction',  '_route' => 'ua_ucr_ua_project2_customer_profile',);
        }

        // ua_ucr_ua_project2_edit_profile
        if ($pathinfo === '/edit_profile') {
            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAccountController::editProfileAction',  '_route' => 'ua_ucr_ua_project2_edit_profile',);
        }

        // ua_ucr_ua_project2_delete_profile
        if ($pathinfo === '/delete_profile') {
            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaAccountController::deleteProfileAction',  '_route' => 'ua_ucr_ua_project2_delete_profile',);
        }

        if (0 === strpos($pathinfo, '/update_actor')) {
            // ua_ucr_ua_project2_update_actor_form
            if ($pathinfo === '/update_actor_form') {
                return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaActorController::update_actor_formAction',  '_route' => 'ua_ucr_ua_project2_update_actor_form',);
            }

            // ua_ucr_ua_project2_update_actor
            if (preg_match('#^/update_actor/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_update_actor')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaActorController::update_actorAction',));
            }

            // ua_ucr_ua_project2_update_actor_page
            if (0 === strpos($pathinfo, '/update_actor_page') && preg_match('#^/update_actor_page/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_update_actor_page')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaActorController::update_actor_pageAction',));
            }

        }

        if (0 === strpos($pathinfo, '/delete_')) {
            if (0 === strpos($pathinfo, '/delete_movie')) {
                // ua_ucr_ua_project2_delete_movie_page
                if (0 === strpos($pathinfo, '/delete_movie_page') && preg_match('#^/delete_movie_page/(?P<codMovie>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_delete_movie_page')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::delete_movie_pageAction',));
                }

                // ua_ucr_ua_project2_delete_movie
                if (preg_match('#^/delete_movie/(?P<codMovie>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_delete_movie')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::delete_movieAction',));
                }

            }

            if (0 === strpos($pathinfo, '/delete_actor')) {
                // ua_ucr_ua_project2_delete_actor_page
                if (0 === strpos($pathinfo, '/delete_actor_page') && preg_match('#^/delete_actor_page/(?P<codActor>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_delete_actor_page')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaActorController::delete_actor_pageAction',));
                }

                // ua_ucr_ua_project2_delete_actor
                if (preg_match('#^/delete_actor/(?P<codActor>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_delete_actor')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaActorController::delete_actorAction',));
                }

            }

            if (0 === strpos($pathinfo, '/delete_gender')) {
                // ua_ucr_ua_project2_delete_gender_page
                if (0 === strpos($pathinfo, '/delete_gender_page') && preg_match('#^/delete_gender_page/(?P<codGender>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_delete_gender_page')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaGenderController::delete_gender_pageAction',));
                }

                // ua_ucr_ua_project2_delete_gender
                if (preg_match('#^/delete_gender/(?P<codGender>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_delete_gender')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaGenderController::delete_genderAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/update_information')) {
            // ua_ucr_ua_project2_update_information_form
            if ($pathinfo === '/update_information_form') {
                return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaDefaultController::update_information_formAction',  '_route' => 'ua_ucr_ua_project2_update_information_form',);
            }

            // ua_ucr_ua_project2_update_information
            if ($pathinfo === '/update_information') {
                return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaDefaultController::update_informationAction',  '_route' => 'ua_ucr_ua_project2_update_information',);
            }

        }

        if (0 === strpos($pathinfo, '/sale_movies_years')) {
            // ua_ucr_ua_project2_sale_movies_years_form
            if ($pathinfo === '/sale_movies_years_form') {
                return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::sale_movies_years_formAction',  '_route' => 'ua_ucr_ua_project2_sale_movies_years_form',);
            }

            // ua_ucr_ua_project2_sale_movies_years
            if ($pathinfo === '/sale_movies_years') {
                return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::sale_movies_yearsAction',  '_route' => 'ua_ucr_ua_project2_sale_movies_years',);
            }

        }

        if (0 === strpos($pathinfo, '/rent_movies_years')) {
            // ua_ucr_ua_project2_rent_movies_years_form
            if ($pathinfo === '/rent_movies_years_form') {
                return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::rent_movies_years_formAction',  '_route' => 'ua_ucr_ua_project2_rent_movies_years_form',);
            }

            // ua_ucr_ua_project2_rent_movies_years
            if (preg_match('#^/rent_movies_years/(?P<year1>[^/]++)/(?P<year2>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ua_ucr_ua_project2_rent_movies_years')), array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::rent_movies_yearsAction',));
            }

        }

        // ua_ucr_ua_project2_best_customers
        if ($pathinfo === '/best_customers') {
            return array (  '_controller' => 'uaUCR\\uaProject2Bundle\\Controller\\uaMovieController::best_customersAction',  '_route' => 'ua_ucr_ua_project2_best_customers',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
