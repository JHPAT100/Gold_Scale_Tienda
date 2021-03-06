<?php
/**
 * NOTICE OF LICENSE
 *
 * This file is licenced under the GNU General Public License, version 3 (GPL-3.0).
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement.
 *
 * @author    emarketing www.emarketing.com <integrations@emarketing.com>
 * @copyright 2019 easymarketing AG
 * @license   https://opensource.org/licenses/GPL-3.0 GNU General Public License version 3
 */

namespace Emarketing\Action;

/**
 * Class Tracker
 * @package Emarketing\Action
 */
class Tracker
{
    /**
     * @param $postData
     * @return bool|array
     * @throws \Exception
     */
    public function receiveTracker($postData)
    {
        $serviceTracker = new \Emarketing\Service\Tracker;

        $globalSiteTracker = $this->getCode($postData, 'global_site_tracker');

        $conversionTracker = $this->getCode($postData, 'conversion_tracker');

        $leadTracker = $this->getCode($postData, 'lead_tracker');

        return $serviceTracker->saveTracker($globalSiteTracker, $conversionTracker, $leadTracker);
    }

    /**
     * @param $postData
     * @param $name
     * @return string|null
     */
    private function getCode($postData, $name)
    {
        if (!isset($postData[$name])) {
            return null;
        }

        return $postData[$name];
    }
}
