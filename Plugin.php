<?php

namespace Kanboard\Plugin\ConvertPrivate;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
  public function initialize()
  {
    $this->template->setTemplateOverride('config/project', 'convertPrivate:config/project');
    $this->template->hook->attach('template:config:project', 'convertPrivate:config/toggle');
    
    if ($this->configModel->get('allow_project_convert_for_user', '2') == 1) { $this->template->setTemplateOverride('project_edit/show', 'convertPrivate:project_edit/show'); }

  }
  public function getPluginName()
  {
    return 'ConvertPrivate';
  }
  public function getPluginAuthor()
  {
    return 'Craig Crosby';
  }
  public function getPluginVersion()
  {
    return '1.0.0';
  }
  
  public function getPluginDescription()
  {
    return 'Normal User can convert their private project to public';
  }
  public function getPluginHomepage()
  {
    return 'https://github.com/creecros/userconvertprivate2public';
  }
}
