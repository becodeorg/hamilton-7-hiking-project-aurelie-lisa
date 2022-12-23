<?php

declare(strict_types=1);

class TagsController
{
    private TagsModel $tagsModel;

    public function __construct()
    {
        $this->tagsModel = new TagsModel();
    }

    public function showAllTags(): void

    {
        $tags = $this->tagsModel->findAllTags();

        include 'app/views/tags.view.php';
    }
}