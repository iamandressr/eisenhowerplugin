<?php

namespace Kanboard\Plugin\Eisenhower\Controller;

use Kanboard\Controller\BaseController;

class EisenhowerController extends BaseController
{
    public function show()
    {
        $project = $this->getProject();
        
        $this->response->html($this->helper->layout->project('eisenhower:board/eisenhower-quadrant', [
            'project' => $project,
        ]));
    }
}
