<li>
    <?= $this->url->link(
        '<i class="fa fa-th-large"></i> Cuadrante Eisenhower',
        'EisenhowerController',
        'show',
        ['plugin' => 'Eisenhower', 'project_id' => $project['id']]
    ) ?>
</li>
