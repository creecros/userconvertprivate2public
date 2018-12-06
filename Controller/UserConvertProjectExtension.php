<?php

namespace Kanboard\Plugin\ConvertProject\Controller;

use Kanboard\Controller\ProjectEditController;
use Kanboard\Validator\ProjectValidator;

class UserConvertProjectExtension extends ProjectEditController
{

public function cp_update()
    {
        $project = $this->getProject();
        $values = $this->request->getValues();
        $values = $this->cp_prepareValues($project, $values);
        list($valid, $errors) = $this->projectValidator->validateModification($values);
        if ($valid) {
            if ($this->projectModel->update($values)) {
                $this->flash->success(t('Project updated successfully.'));
                return $this->response->redirect($this->helper->url->to('ProjectEditController', 'show', array('project_id' => $project['id'])), true);
            } else {
                $this->flash->failure(t('Unable to update this project.'));
            }
        }
        return $this->show($values, $errors);
    }

    private function cp_prepareValues(array $project, array $values)
    {
        $values['id'] = $project['id'];
        if (isset($values['is_private'])) {
                unset($values['is_private']);
            }
        } elseif ($project['is_private'] == 1 && ! isset($values['is_private'])) {
                $values += array('is_private' => 0);
            }
        }
        return $values;
    }
}
