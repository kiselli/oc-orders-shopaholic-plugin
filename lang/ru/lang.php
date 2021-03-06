<?php return [
    'plugin'         => [
        'name'        => 'Orders for Shopaholic',
        'description' => 'Корзина и оформление заказа',
    ],
    'component'      => [
        'cart_name'                       => 'Корзина',
        'cart_description'                => '',
        'make_order_name'                 => 'Создание заказа',
        'make_order_description'          => '',
        'payment_method_list_name'        => 'Методы оплаты',
        'payment_method_list_description' => '',
        'shipping_type_list_name'         => 'Способы доставки',
        'shipping_type_list_description'  => '',
        'status_list_name'                => 'Статусы заказа',
        'status_list_description'         => '',
        'order_page_name'                 => 'Страница заказа',
        'order_page_description'          => '',
        'send_payment_purchase'           => 'Отправить запрос в платежную систему после создания заказа',
    ],
    'tab'            => [
        'info'           => 'Данные заказа',
        'offers_info'    => 'Список товаров',
        'order_settings' => 'Корзина и заказы',
        'gateway'        => 'Платежная система',
        'payment_data'   => 'Данные платежа',
    ],
    'message'        => [
        'empty_cart'          => 'Корзина пуста',
        'offer_not_found'     => 'Товар не найден',
        'insufficient_amount' => 'Товара нет в наличии',
        'order_id_required'   => 'Связь между позицией заказа и заказом обязательна',
        'cart_id_required'    => 'Связь между позицией корзины и корзиной обязательна',
        'item_required'       => 'Связь между позицией и элементом обязательна',
    ],
    'field'          => [
        'status'       => 'Статус',
        'order_number' => 'Номер заказа',
        'user'         => 'Покупатель',

        'new'         => 'Новый',
        'canceled'    => 'Отменен',
        'complete'    => 'Завершен',
        'in_progress' => 'Выполняется',

        'total_price'           => 'Сумма заказа',
        'shipping_price'        => 'Стоимость доставки',
        'catalog_price'         => 'Текущая цена',
        'offer_list'            => 'Список товаров в заказе',
        'position_total_price'  => 'Стоимость позиций заказа',
        'shipping_type'         => 'Способ доставки',
        'payment_method'        => 'Способ оплаты',
        'is_user_show'          => 'Показывать статус пользователю',
        'user_status'           => 'Для пользователя статус будет показан как',
        'gateway_id'            => 'Платежная система',
        'gateway_currency'      => 'Валюта платежной системы',
        'before_status_id'      => 'Статус заказа до оплаты',
        'after_status_id'       => 'Статус заказа после оплаты',
        'cancel_status_id'      => 'Статус заказа после отмены оплаты',
        'fail_status_id'        => 'Статус заказа после ошибки оплаты',
        'transaction_id'        => 'Transaction ID',
        'payment_token'         => 'Payment token',
        'payment_data'          => 'Данные, отправленные платежному шлюзу',
        'payment_response'      => 'Данные, полученные из платежного шлюза',
        'send_purchase_request' => 'Отправлять запрос в платежный шлюз при создании заказа',
        'gateway_field_value'   => 'Получить значение свойства ":field" из значения свайства заказа',

        'name'                  => 'Имя',
        'last_name'             => 'Фамилия',
        'middle_name'           => 'Отчество',
    ],
    'settings'       => [
        'cart_cookie_lifetime'                 => 'Время жизни ID корзины в cookie (мин.)',
        'check_offer_quantity'                 => 'Проверять доступное количество товара при создании заказа',
        'decrement_offer_quantity'             => 'Автоматически уменьшать доступное количетсво товара при создании заказа',
        'create_new_user'                      => 'Автоматически создавать нового пользователя при создании заказа',
        'generate_fake_email'                  => 'При создании нового пользователя, сгенерировать произвольный email, если поле email не заполнено',
        'send_email_after_creating_order'      => 'Отправлять письма, после создания заказа',
        'creating_order_mail_template'         => 'Шаблон письма создания заказа (для пользователя)',
        'creating_order_manager_mail_template' => 'Шаблон письма создания заказа (для менеджеров)',
        'creating_order_manager_email_list'    => 'Список email адресов менеджеров',

        'order_create_email' => 'Email для отправки уведомлений при создании заказа',
    ],
    'menu'           => [
        'orders'                  => 'Заказы',
        'statuses'                => 'Статусы',
        'payment_methods'         => 'Методы оплаты',
        'shipping_types'          => 'Типы доставки',
        'order_property'          => 'Дополнительные свойства заказа',
        'order_position_property' => 'Дополнительные свойства позиции заказа',
    ],
    'order'          => [
        'name'       => 'заказа',
        'list_title' => 'Список заказов',
    ],
    'buyer'          => [
        'name'       => 'покупателя',
        'list_title' => 'Список покупателей',
    ],
    'order_position' => [
        'name'       => 'позиции заказа',
        'list_title' => 'Список позиций заказа',
    ],
    'status'         => [
        'name'       => 'статуса',
        'list_title' => 'Список статусов',
    ],
    'payment_method' => [
        'name'       => 'метода оплаты',
        'list_title' => 'Методы оплаты',
    ],
    'shipping_type'  => [
        'name'       => 'способа доставки',
        'list_title' => 'Способы доставки',
    ],
    'order_property' => [
        'name'       => 'свойства',
        'list_title' => 'Список свойств',
    ],
    'permission'     => [
        'order'         => 'Управление заказами',
        'status'        => 'Управление статусами заказа',
        'payment_type'  => 'Управление методами оплаты',
        'delivery_type' => 'Управление типами доставки',
        'property'      => 'Управление свойствами заказов',
    ],
    'label'          => [
        'order'   => 'Заказ',
        'product' => 'Товар',
        'offer'   => 'Товарное предложение',
    ],
];