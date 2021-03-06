<?php
namespace application
{
    use application\environment\Environment;
    use application\environment\DevelopmentEnvironment;
    use application\environment\PreviewEnvironment;
    use application\resource\ItemResource;
    use application\resource\ItemsListResource;
    use core\Application;
    use core\request\Request;
    use core\resource\RedirectResource;
    use Memcached;

    class FrontendApplication extends Application
    {
        protected function findResource(Request $request)
        {
            $environment = $this->getEnvironment($request);

            $uid = $this->getUid($request);
            if ($uid) {
                if ($request->pathMatchesPattern('/items')) {
                    return new ItemsListResource($environment, $uid);
                }
                if ($matches = $request->pathMatchesPattern('/items/{itemId}')) {
                    return new ItemResource($environment, $matches['itemId'], $uid);
                }
                if ($matches = $request->pathMatchesPattern('/items/{itemId}/{operation}')) {
                    return new ItemResource($environment, $matches['itemId'], $uid, $matches['operation']);
                }
            } else {
                // @todo add not allowed response
            }

            if ($matches = $request->pathStartsWithPattern('/{localeName}')) {
                if ($environment->localeExists($matches['localeName'])) {
                    $locale = $environment->getLocale($matches['localeName']);
                    $localeRouter = new LocaleRouter($locale,$environment);
                    return $localeRouter->findResource($request);
                }
            }
            return new RedirectResource($environment->getCanonicalDomain() . '/en');
        }

        /**
         * @param Request $request
         * @return int|null
         */
        protected function getUid(Request $request)
        {
            $authorization = $request->getHeader('Authorization');
            if (!$authorization) {
                return null;
            }
            list($_, $accessToken) = explode(' ', $authorization, 2);
            $cache = $this->getCache($request);
            $uid = $cache->get($accessToken);
            if ($cache->getResultCode() == Memcached::RES_NOTFOUND) {
                $content = json_decode(file_get_contents("https://graph.facebook.com/me?access_token={$accessToken}"));
                $uid = $content->id;
                $cache->set($accessToken, $uid, time() + 3600);
            }
            return $uid;
        }

        protected function getCacheServerLocation(Request $request)
        {
            return $this->getEnvironment($request)->getCacheServerLocation();
        }

        private function getEnvironment(Request $request)
        {
            if ($request->environmentNameEndsWith('.dev')) {
                return new DevelopmentEnvironment();
            }
            if ($request->environmentNameEndsWith('-preview.integration.etectureogilvy.com')) {
                return new PreviewEnvironment();
            }
            if ($request->environmentNameEndsWith('.integration.etectureogilvy.com')) {
                return new PreviewEnvironment();
            }
            return new Environment();
        }
    }
}