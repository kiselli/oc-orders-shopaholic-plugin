<?php namespace Lovata\OrdersShopaholic\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Class OrderPositionProperties
 * @package Lovata\OrdersShopaholic\Controllers
 * @author Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 */
class OrderPositionProperties extends Controller
{
    public $implement = [
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ReorderController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    /**
     * Properties constructor.
     */
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Lovata.OrdersShopaholic', 'orders-shopaholic-menu', 'orders-shopaholic-menu-order-property');
    }
}