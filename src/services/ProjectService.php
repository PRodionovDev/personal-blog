<?php

/**
 * Service
 * php version 7.2.22
 *
 * @category Service
 * @package  Service_Folder
 * @author   Pavel Rodionov aka JOKER-THE <pavel11_06@mail.ru>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://localhost
 */
namespace application\services;

use application\repositories\ProjectRepository;

/**
 * ProjectService
 *
 * @category Application
 * @package  Service_Folder
 * @author   Pavel Rodionov aka JOKER-THE <pavel11_06@mail.ru>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://localhost
 */
class ProjectService
{
    /**
     * Object of ProjectRepository
     *
     * @var object $service
     */
    protected $repository;

    /**
     * Create object ProjectRepository
     */
    public function __construct()
    {
        $this->repository = new ProjectRepository();
    }

    /**
     * Get projects in database
     *
     * @param integer $id project's unique ID
     *
     * @return object
     */
    public function get($id = '')
    {
        if (empty($id)) {
            return $this->repository->find()->all();
        } else {
            return $this->repository->find()->where(['id' => $id])->one();
        }
    }
}
