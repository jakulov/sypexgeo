<?php
/**
 * Created by PhpStorm.
 * User: yakov
 * Date: 10.12.15
 * Time: 12:52
 */

namespace Scriptixru\SypexGeo;

/**
 * Interface SxGeoInterface
 * @package Scriptixru\SypexGeo
 */
interface SxGeoInterface
{
    /**
     * @param $ip
     * @return mixed
     */
    public function getCityFull($ip);
}