<div class="panel">
    <?= $this->form->radio('allow_project_convert_for_user', 'Hide Total Swimlane Task Counts in column headers' , 1, isset($values['allow_project_convert_for_user'])&& $values['allow_project_convert_for_user']==1) ?>
    <?= $this->form->radio('allow_project_convert_for_user', 'Show Total Swimlane Task Counts in column headers' , 2, isset($values['allow_project_convert_for_user'])&& $values['allow_project_convert_for_user']==2) ?>
</div>
