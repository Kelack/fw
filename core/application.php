<?php

/**
 * Класс Singleton предоставляет метод `GetInstance`, который ведёт себя как
 * альтернативный конструктор и позволяет клиентам получать один и тот же
 * экземпляр класса при каждом вызове.
 */
class Application
{
    /**
     * Объект Application храниться в статичном поле класса. 
     */
    private static $instances = null;

    private $__components = [];
    private $pager = null; // будет объект класса   
    private $template = null; //будет объект класса

    /**
     * Конструктор Application всегда должен быть скрытым, чтобы предотвратить
     * создание объекта через оператор new.
     */
    private function __construct() { }

    /**
     * Статический метод, управляющий доступом к экземпляру Application. При
     * первом запуске, он создаёт экземпляр Application и помещает его в
     * статическое поле. При последующих запусках, он возвращает объект,
     * хранящийся в статическом поле.
     */
    public static function getInstance(): Application
    {
        if (self::$instances === null) {
            self::$instances = new self();
        }

        return self::$instances;
    }

    /**
     * Нельзя клонировать.
     */
    private function __clone() { }

    /**
     * Нельзя востановить из строк.
     */
    private function __wakeup() { }

}

/**
 * Проверка.
 */
function examination()
{
    $apple1 = Application::getInstance();
    $apple2 = Application::getInstance();

    if ($apple1 === $apple2) 
    {
        echo "Работает";
    } 
    else 
    {
        echo "Не работает";
    }
}

examination();