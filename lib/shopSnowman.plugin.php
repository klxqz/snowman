<?php

/**
 * @author Коробов Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopSnowmanPlugin extends shopPlugin {

    protected static $plugin;

    public function __construct($info) {
        parent::__construct($info);
        if (!self::$plugin) {
            self::$plugin = &$this;
        }
    }

    protected static function getThisPlugin() {
        if (self::$plugin) {
            return self::$plugin;
        } else {
            return wa()->getPlugin('snowman');
        }
    }

    public function frontendHead() {
        if ($this->getSettings('default_output')) {
            return self::display();
        }
    }

    public function display() {
        $plugin = self::getThisPlugin();
        if ($plugin->getSettings('status') && ($plugin->getSettings('first_visit') == 0 || ($plugin->getSettings('first_visit') == 1 && !$plugin->checkFirstVisit()))) {
            $view = wa()->getView();
            $view->assign('settings', $plugin->getSettings());
            $template_path = wa()->getAppPath('plugins/snowman/templates/Snowman.html', 'shop');
            $html = $view->fetch($template_path);
            return $html;
        }
    }

    protected function checkFirstVisit() {
        $session = wa()->getStorage();
        if ($session->read('SnowmanFirstVisit')) {
            return true;
        } else {
            $session->write('SnowmanFirstVisit', 1);
            return false;
        }
    }

}
