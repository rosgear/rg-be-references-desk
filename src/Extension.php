<?php
/**
 * Расширение модуля веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace Rg\Backend\References\Desk;

/**
 * Панель справочников.
 * 
 * Вывод расширений справочников.
 * 
 * Расширение принадлежит модулю "Справочники".
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Rg\Backend\References\Desk
 * @since 1.0
 */
class Extension extends \Ge\Panel\Extension\Extension
{
    /**
     * {@inheritdoc}
     */
    public string $id = 'rg.be.references.desk';

    /**
     * {@inheritdoc}
     */
    public string $defaultController = 'items';
}