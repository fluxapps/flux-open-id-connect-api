<?php

namespace Fluxlabs\FluxOpenIdConnectApi\Adapter\Config;

use Fluxlabs\FluxOpenIdConnectApi\Adapter\SessionCrypt\SessionCrypt;

interface Config
{

    public function getCookieConfig() : CookieConfigDto;


    public function getProviderConfig() : ProviderConfigDto;


    public function getRouteConfig() : RouteConfigDto;


    public function getServerConfig() : ServerConfigDto;


    public function getSessionCrypt() : SessionCrypt;


    public function getSessionCryptConfig() : SessionCryptConfigDto;
}