<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.customer.command_handler.edit_customer_handler' shared service.

return $this->services['prestashop.adapter.customer.command_handler.edit_customer_handler'] = new \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\EditCustomerHandler(${($_ = isset($this->services['prestashop.core.crypto.hashing']) ? $this->services['prestashop.core.crypto.hashing'] : ($this->services['prestashop.core.crypto.hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->get("_COOKIE_KEY_"));
