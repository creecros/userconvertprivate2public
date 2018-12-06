<div class="panel">
    <?= $this->form->radio('allow_project_convert_for_user', 'Allow Users to convert their Private Project to Public' , 1, isset($values['allow_project_convert_for_user'])&& $values['allow_project_convert_for_user']==1) ?>
    <?= $this->form->radio('allow_project_convert_for_user', 'Disallow Users to convert their Private Project to Public' , 2, isset($values['allow_project_convert_for_user'])&& $values['allow_project_convert_for_user']==2) ?>
</div>
