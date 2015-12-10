<?php namespace Scriptixru\SypexGeo;

use Bun\Core\Config\ConfigAwareInterface;
use Bun\Core\Config\ConfigInterface;

/**
 * Class SypexGeoServiceProvider
 * @package Scriptixru\SypexGeo
 */
class SypexGeoServiceProvider implements ConfigAwareInterface
{
    /** @var ConfigInterface */
    protected $config;
    /** @var SypexGeo */
    protected $sypex;

    /**
     * @param ConfigInterface $config
     */
    public function setConfig(ConfigInterface $config)
    {
        $this->config = $config;
    }

    /**
     * @return SypexGeo|void
     */
    public function getSypex()
    {
        if($this->sypex === null) {
            $this->sypex = $this->initSypex();
        }

        return $this->sypex;
    }

    protected function initSypex()
    {
        $geo = $this->config->get('sypexgeo.use_db') ?
            new SxGeo($this->config->get('sypexgeo.db_path')) :
            new SxGeoHttp($this->config->get('sypexgeo.licence_key'));
        if($geo instanceof ConfigAwareInterface) {
            $geo->setConfig($this->config);
        }

        $sypex = new SypexGeo($geo, $this->config);

        return $sypex;
    }
}